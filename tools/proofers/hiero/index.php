<?php
$relPath="./../../../pinc/";
include_once($relPath.'base.inc');
include_once($relPath.'slim_header.inc');

require_login();

echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Frameset//EN\" \"http://www.w3.org/TR/html4/frameset.dtd\">\n";

slim_header("",FALSE,FALSE);
?>
</head>
<frameset rows="*,*">
<frame name="hierodisplay" src="display.php">
<frame name="hierotable" src="table.php?table=b">
</frameset>
<noframes>
<?php echo _("Your browser currently does not display frames!"); ?>
</noframes>
</html>