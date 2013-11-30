<?php

function quizsolved()
{
  global $pguser;
  if (isset($pguser))
      record_quiz_attempt($pguser,"p_basic_1","pass");
}


$browser_title                = _("Basic Proofreading Quiz");
$welcome                      = "<h2>" . _("Basic Proofreading Quiz, page 1") . "</h2>\n" .
                                    "<p>" . _("Try to correct the text on the bottom left, so it matches the text in the image above following the Proofreading Guidelines. When done click 'check'.") . "</p>";
$ocr_text                     = "THE GLORY OF MOTION.      62\n\nbefore I matriculated at Oxford, Mr. Palmer,\nM. P. for Bath, had accomplished two tbings,\nvery hard to do on our little planet: he had in-\nvented mail-coaches, arid he had married the\ndaughter of a duke. He was, therefore, just\ntwice as great a man as Galileo, who certain-\nly invented (or discovered) the satellites of\nJupiter, those very next things extant to mail-\ncoaches in the two capital points of speed and\nkeeping time, hut who did not marry the\ndaughter of a duke.\n\nFf";
$solutions                    = array("before I matriculated at Oxford, Mr. Palmer,\nM. P. for Bath, had accomplished two things,\nvery hard to do on our little planet: he had invented\nmail-coaches, and he had married the\ndaughter of a duke. He was, therefore, just\ntwice as great a man as Galileo, who certainly\ninvented (or discovered) the satellites of\nJupiter, those very next things extant to mail-coaches\nin the two capital points of speed and\nkeeping time, but who did not marry the\ndaughter of a duke.");
$solved_message               = "<h2>" . _("Quiz successfully solved") . "</h2>\n" .
                                    "<p>" . _("Congratulations, no errors found!") . "</p>\n<h3>" . _("Handy Fact") . "</h3>\n" .
                                    "<p>" . _("We remove page headers and footers because later on in the process all the pages will be joined together into one text.  If we left the header or footer on each page it would disrupt the flow of the text.") . "</p>";


// error messages

$messages["tbings"] = array(
    "message_text" => "<h2>" . _("Scanno") . "</h2>\n" .
        "<p>" . _("There is still a 'scanno': a '<tt>b</tt>' in the text where there is an '<tt>h</tt>' in the image.") . "</p>",
    "hints" => array(),
);
$messages["arid"] = array(
    "message_text" => "<h2>" . _("Scanno") . "</h2>\n" .
        "<p>" . _("There is still a 'scanno': '<tt>ri</tt>' in the text where there is an '<tt>n</tt>' in the image.") . "</p>",
    "hints" => array(),
);
$messages["hut"] = array(
    "message_text" => "<h2>" . _("Scanno") . "</h2>\n" .
        "<p>" . _("There is still a 'scanno': an '<tt>h</tt>' in the text where there is a '<tt>b</tt>' in the image.") . "</p>",
    "hints" => array(),
);
$messages["eolhyphen2"] = array(
    "message_text" => "<h2>" . _("Hyphenation") . "</h2>\n" .
        "<p>" . _("Since the word \"mail-coaches\" also appears in the middle of a line on this page, we know that the author wrote the word with a hyphen.  There is no need to remove the hyphen or add an asterisk when rejoining the word.") . "</p>",
    "hints" => array(),
);
$messages["initials"] = array(
    "message_text" => "<h2>" . _("Spacing of initials") . "</h2>\n" .
        "<p>" . _("Leave a space between initials if there is a space in the image.") . "</p>",
    "hints" => array(),
);


// error checks

$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("tbi"), "case_sensitive" => TRUE, "error" => "tbings");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("arid"), "case_sensitive" => TRUE, "error" => "arid");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("hut"), "case_sensitive" => TRUE, "error" => "hut");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("GLORY", "62"), "case_sensitive" => TRUE, "error" => "P_header");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("\nbefore"), "case_sensitive" => TRUE, "error" => "P_headerline");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("-\n"), "case_sensitive" => TRUE, "error" => "P_eolhyphen");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("had\ninvented", "who\ncertainly", "to\nmail"), "case_sensitive" => TRUE, "error" => "P_hyphenlower");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("mail-*", "mailcoaches"), "case_sensitive" => TRUE, "error" => "eolhyphen2");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("in-vented", "certain-ly"), "case_sensitive" => TRUE, "error" => "P_hyphenleft");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("Ff"), "case_sensitive" => TRUE, "error" => "P_footer");
$tests[] = array("type" => "longline", "lengthlimit" => 70, "error" => "P_longline");
$tests[] = array("type" => "forbiddentext", "searchtext" =>  array("M.P."), "case_sensitive" => TRUE, "error" => "initials");

// vim: sw=4 ts=4 expandtab