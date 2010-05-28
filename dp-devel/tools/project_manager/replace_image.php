<?php
// Replace an image file.

$relPath = '../../pinc/';
include_once($relPath.'site_vars.php'); // projects_dir
include_once($relPath.'theme.inc');
include_once($relPath.'dp_main.inc');
include_once($relPath.'Project.inc');
include_once($relPath.'misc.inc'); // get_upload_err_msg

// (This script's functionality overlaps that of handle_bad_page.php.
// They should perhaps be refactored.)

$projectid = validate_projectID('projectid', @$_REQUEST['projectid']);
$image     = validate_page_image_filename('image', @$_REQUEST['image']);

$project = new Project($projectid);

$replace_image_str = _('Replace Image');

theme("$replace_image_str: {$project->nameofwork}", 'header');

echo "<h1>{$project->nameofwork}</h1>\n";
echo "<h2>$replace_image_str: $image</h2>\n";

if (!$project->can_be_managed_by_current_user)
{
    echo "<p>", _('You are not authorized to manage this project.'), "</p>\n";
    theme('', 'footer');
}

if ( isset($_FILES['replacement_image']) )
{
    // The user has uploaded a file.
    $err_msg = handle_upload( $_FILES['replacement_image'] );
    if ( $err_msg == '' )
    {
        echo "<p>", _('Image successfully replaced.'), "</p>\n";
        echo "<p>",
            "<a href='$code_url/tools/proofers/images_index.php?project=$projectid'>",
            _('Return to Images Index'),
            "</a>",
            "</p>\n";
        theme('', 'footer');
        exit;
    }
    else
    {
        echo "<p>";
        echo _('An error occurred.'), "\n";
        echo $err_msg, "\n";
        echo _('Please try again.'), "\n";
        echo "</p>\n";
        // Fall through to try again.
    }
}

echo "<p>", _('Select a replacement image to upload:'), "</p>\n";
echo "
    <form enctype='multipart/form-data' action='replace_image.php' method='post'>
    <input type='hidden' name='projectid' value='$projectid'>
    <input type='hidden' name='image' value='$image'>
    <input type='file' name='replacement_image' size='50'>
    <br>
    <input type='submit' value='Upload Image'>
    </form>
";

theme('', 'footer');

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

function handle_upload( $replacement_image_info )
// If there's a problem, return a string containing an error message.
// If no problem, return the empty string.
{
    global $projectid, $image;
    global $projects_dir;

    // Check the error code.
    $error_code = $replacement_image_info['error'];
    if ($error_code != UPLOAD_ERR_OK)
    {
        return
            sprintf( _('Error code = %d.'), $error_code )
            . "\n"
            . "(" . get_upload_err_msg($error_code) . ")";
    }

    // Check that the extensions match.
    $curr_ext = pathinfo($image, PATHINFO_EXTENSION);
    $repl_ext = pathinfo($replacement_image_info['name'], PATHINFO_EXTENSION);
    if ( $curr_ext != $repl_ext )
    {
        return sprintf(
            _("Replacement file's extension (%s) does not match current file's extension (%s)."),
            $repl_ext,
            $curr_ext
        );
    }

    // $replacement_image_info['type'] might be relevant, but is it trustworthy?

    // Check $replacement_image_info['size']?

    $image_path = "$projects_dir/$projectid/$image";
    $r = move_uploaded_file($replacement_image_info['tmp_name'], $image_path);
    if ( $r )
    {
        return '';
    }
    else
    {
        return _('The uploaded file cannot be moved into the project directory for some reason.');
    }
}

// vim: sw=4 ts=4 expandtab
?>
