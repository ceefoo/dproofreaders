<?
$relPath='../pinc/';
include($relPath.'v_site.inc');
include($relPath.'connect.inc');
include($relPath.'theme.inc');
new dbConnect();
$no_stats=1;
theme('Templates available for Project Comments','header');
?>
 
<style TYPE="text/css">
<!--
  tt {color: red}
        -->
  </style>
<!--
  <style>
                @page { size: 21.59cm 27.94cm; margin-left: 3.18cm; margin-right: 3.18cm; margin-top: 2.54cm; margin-bottom: 2.54cm }
                P { margin-bottom: 0.21cm }
                TD P { margin-bottom: 0.21cm }
  </style>
        -->

<h1 align="center">Layout Templates for Project Comments</h1>
<br><br>
There are two types of template available <br>
<ol>
<li>standard sections of text, like pre-fabricated building blocks, <br>
that can be automatically included in your project comments <br>
wherever you place a special tag. These are particularly useful for series, <br> 
where some text will be common for many individual volumes, but there <br>
are also some standard technical sections that can be <br>
fitted into your comments like jigsaw pieces. </li>
<br><br>
<li>fill-in-the-blank skeleton templates, for which you will have to <br>
manually copy and paste the code and then fill in <br>
specific information relating to the individual project.<br> 
</li><ol>
<br>
<b>Both types can be done as text or HTML, either plain or fancy.</b>
<br><br>



<a name="standardtemp"><h2>Standard Templates</h2></a>
These can be accessed by pointing to a specific file <br />
within the comments section of the Project Comments form.<br />
<br />
The standard template files currently available are:<br />
<a href="#bae1">bae1.txt</a> Bureau of American Ethnology<br />
<a href="#bg1a">BG1a.txt</a> Beginners Only, round one, upper<br />
<a href="#bg1b">BG1b.txt</a> Beginners Only, round one, lower<br />
<a href="#bgr2">BGr2.txt</a> Beginners Only, round two extra<br />
<a href="#diac">diac.txt</a> diacritical marks<br />
<a href="#pgnm">pgnm.txt</a> preserve index page numbers<br />
<a href="#port">port.txt</a> Portuguese National Library<br />
<a href="#wrrn">wrrn.txt</a> Warren Commission<br />
<br />
<br />
To place any one of the above samples into your comments simply include the line:<br />
[template=file.txt]<br />
where <i>file.txt</i> is the name of the template you wish to have included <br>
in your project comments. You can use as many as you wish.<br />
<br />
<b>If you would like to create your own re-usable templates</b> similar to those above<br />
please email them as a text file to <a href="<? echo $general_help_email_addr; ?>">DP Help</a>.<br />
The filename needs to be four letters in length.
<br>
  <br />
<a name="skeletontemp"><h2> Skeleton Layout Samples </h2></a>
If you would like to use a bit more styling within your comments feel free to<br />
create your own look OR use one of the samples below; <br />
More samples will be made available as they are seen around the site<br />
or sent to site development for inclusion here.<br />
<br />
Style names are based on User ID where style was first seen:<br />
<br />

<strong>Cgehring:</strong> <a href="#cgehlayout">Layout</a> / <a href="#cgehcode">Code</a> 


 
<br />
<br />

To use these styles copy the code and paste it with your information added<br />
into the commment window on your Project Information page.
<br />
<br />

<br><hr><hr><br><br>


<h1>Preview of Templates available for Project Comments</h1>
<br>
<br>
<!-- bae1.txt info -->
<a name="bae1"><h3>bae1.txt</h3></a><br>
<?
include('../pinc/templates/comment_files/bae1.txt');
?>

		
<br><hr><a href="#standardtemp">Back to Standard Templates</a><hr><br>

<!-- BG1a.txt info -->
<a name="bg1a"><h3>BG1a.txt</h3></a> <br>
<?
include('../pinc/templates/comment_files/BG1a.txt');
?>
		
<br><hr><a href="#standardtemp">Back to Standard Templates</a><hr><br>

<!-- BG1b.txt info -->		
<a name="bg1b"><h3>BG1b.txt</h3></a> <br>
<?
include('../pinc/templates/comment_files/BG1b.txt');
?>

<br><hr><a href="#standardtemp">Back to Standard Templates</a><hr><br>

<!-- BGr2.txt info -->
<a name="bgr2"><h3>BGr2.txt</h3></a><br>
<?
include('../pinc/templates/comment_files/BGr2.txt');
?>

<br><hr><a href="#standardtemp">Back to Standard Templates</a><hr><br>

<!-- diac.txt info -->
<a name="diac"><h3>diac.txt</h3></a><br>
<?
include('../pinc/templates/comment_files/diac.txt');
?>

		
<br><hr><a href="#standardtemp">Back to Standard Templates</a><hr><br>

<!-- pgnm.html info -->		
<a name="pgnm"><h3>pgnm.txt</h3></a> <br>
<?
include('../pinc/templates/comment_files/pgnm.txt');
?>


<br><hr><a href="#standardtemp">Back to Standard Templates</a><hr><br>

<!-- port.txt info -->
<a name="port"><h3>port.txt</h3></a> <br>
<?
include('../pinc/templates/comment_files/port.txt');
?>


<br><hr><a href="#standardtemp">Back to Standard Templates</a><hr><br>

<!-- wrrn.txt info -->
<a name="wrrn"><h3>wrrn.txt</h3></a><br>
<?
include('../pinc/templates/comment_files/wrrn.txt');
?>


<br><hr><a href="#standardtemp">Back to Standard Templates</a><hr><br>

<br><hr><br>		


<!-- cgehring.html info -->		

<!-- This code was made by cgehring -->
<h3><a name="cgehlayout">Cgehring's</a> <strong>LAYOUT</strong></h3> <a href="#skeletontemp">Back to Skeleton Templates</a><br> 
<center>
  <table width="100%" table bgcolor="#FFFFFF" border="1" bordercolor="#111111" cellspacing="0" cellpadding="2">
    <tr>
      <td bgcolor="#336633" align=center colspan=2>
        <font size="+2" color="#FFFFFF">
          <b>
            Special Instructions and Proofreading Notes:
          </b>
        </font>
      </td>
    </tr>
    <tr>
      <td bgcolor="#e0e8dd" width="160" align=left valign=top>
        Special Instructions:
      </td>
      <td bgcolor="#FFFFFF" width="*" align=left valign=top>
        *****PUT YOUR SPECIAL INSTRUCTIONS HERE*****
      </td>
    </tr>
    <tr>
      <td bgcolor="#e0e8dd" width="160" align=left valign=top>
        Notes:
      </td>
      <td bgcolor="#FFFFFF" width="*" align=left valign=top>
        *****PUT ANY NOTES TO THE PROOFREADERS HERE*****
      </td>
    </tr>
    <tr>
      <td bgcolor="#e0e8dd" width="160" align=left valign=top>
        Copyright Information:
      </td>
      <td bgcolor="#FFFFFF" width="*" align=left valign=top>
        *****PUT COPYRIGHT AND PRINTING INFORMATION HERE*****
      </td>
    </tr>
    <tr>
      <td bgcolor="#336633" align=center colspan=2>
        <font size="+2" color="#FFFFFF">
          <b>
            Author Information:
          </b>
        </font>
      </td>
    </tr>
    <tr>
      <td bgcolor="#e0e8dd" width="160" align=left valign=top>
        Date of Birth:
      </td>
      <td bgcolor="#FFFFFF" width="*" align=left valign=top>
        *****PUT BIRTHDATE AND PLACE HERE*****
      </td>
    </tr>
    <tr>
      <td bgcolor="#e0e8dd" width="160" align=left valign=top>
        Date of Death:
      </td>
      <td bgcolor="#FFFFFF" width="*" align=left valign=top>
        *****PUT DEATHDATE AND PLACE HERE*****
      </td>
    </tr>
    <tr>
      <td bgcolor="#e0e8dd" width="160" align=left valign=top>
        Biography:
        <br><br>
        <img src="" alt="*****PUT THE URL OF THE ARTISTS PICTURE HERE. 
I RECOMEND UPLOADING IT WITH YOUR OTHER PNG FILES AND CALLING IT 
SOMETHING DESCRIPTIVE, LIKE BIO.PNG *BE SURE THAT WHATEVER YOU CALL IT, YOU 
DO NOT HAVE A TEXT FILE THAT IS TITLED THE SAME!* THAT MEANS THAT IF YOU 
CALL THE PNG BIO.PNG, DO NOT UPLOAD A TEXT FILE NAMED BIO.TXT*****" 
width="150">
      </td>
      <td bgcolor="#FFFFFF" width="*" align=left valign=top>
        *****PUT BIOGRAPHICAL INFORMATION HERE. I SUGGEST USING GOOGLE 
TO FIND INFORMATION. SOMETIMES THE JACKET COVER OF THE BOOK WILL HAVE A 
SHORT BIO AS WELL. REMEMBER, THE BOOK MAY HAVE BEEN PRINTED BEFORE THE 
AUTHOR DIED, SO PAY SPECIAL ATTENTION TO THAT.*****
      </td>
    </tr>
  </table>
  <table width="100%" table bgcolor="#FFFFFF" border="1" bordercolor="#111111" cellspacing="0" cellpadding="2"> 
    <tr>
      <td bgcolor="#336633" align=center colspan=2>
        <font size="+2" color="#FFFFFF">
          <b>
            Books by This Author in PG:
          </b>
        </font>
      </td>
    </tr>
    <tr>
      <td bgcolor="FFFFFF" align=left valign=top width="50%">
*****PUT OTHER BOOKS BY THE AUTHOR IN PG HERE. AT THE END OF EACH 
TITLE, PUT THE &lt;br&gt; TAG.
EXAMPLE:
BOOK BY THE AUTHOR<br>
ANOTHER BOOK<br>
PUT HALF OF THE TITLES HERE,
      </td>
      <td bgcolor="FFFFFF" align=left valign=top width="50%">
AND THE OTHER HALF OF THE TITLES HERE. I SUGGEST PUTTING THEM IN 
ALPHABETICAL ORDER WITH THE FIRST HALF IN THE FIRST COLUMN, AND THE SECOND 
HALF IN THE SECOND COLUMN.*****
      </td>
    </tr>
  </table>
<hr>
<br>
<br>
<br>

<h3><a name="cgehcode">Cgehring's</a><strong>CODE</strong></h3> <a href="#skeletontemp">Back to Skeleton Templates</a><br> 
  <p align="left">&lt;!-- This code was made by cgehring --&gt;<br>
    &lt;center&gt;<br>
    &lt;table width=&quot;100%&quot; table bgcolor=&quot;#FFFFFF&quot; border=&quot;1&quot; 
    bordercolor=&quot;#111111&quot; cellspacing=&quot;0&quot; cellpadding=&quot;2&quot;&gt;<br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;#336633&quot; align=center colspan=2&gt;<br>
    &lt;font size=&quot;+2&quot; color=&quot;#FFFFFF&quot;&gt;<br>
    &lt;b&gt;<br>
    Special Instructions and Proofreading Notes:<br>
    &lt;/b&gt;<br>
    &lt;/font&gt;<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;#e0e8dd&quot; width=&quot;160&quot; align=left valign=top&gt;<br>
    Special Instructions:<br>
    &lt;/td&gt;<br>
    &lt;td bgcolor=&quot;#FFFFFF&quot; width=&quot;*&quot; align=left valign=top&gt;<br>
    *****PUT YOUR SPECIAL INSTRUCTIONS HERE*****<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;#e0e8dd&quot; width=&quot;160&quot; align=left valign=top&gt;<br>
    Notes:<br>
    &lt;/td&gt;<br>
    &lt;td bgcolor=&quot;#FFFFFF&quot; width=&quot;*&quot; align=left valign=top&gt;<br>
    *****PUT ANY NOTES TO THE PROOFREADERS HERE*****<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;#e0e8dd&quot; width=&quot;160&quot; align=left valign=top&gt;<br>
    Copyright Information:<br>
    &lt;/td&gt;<br>
    &lt;td bgcolor=&quot;#FFFFFF&quot; width=&quot;*&quot; align=left valign=top&gt;<br>
    *****PUT COPYRIGHT AND PRINTING INFORMATION HERE*****<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;#336633&quot; align=center colspan=2&gt;<br>
    &lt;font size=&quot;+2&quot; color=&quot;#FFFFFF&quot;&gt;<br>
    &lt;b&gt;<br>
    Author Information:<br>
    &lt;/b&gt;<br>
    &lt;/font&gt;<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;#e0e8dd&quot; width=&quot;160&quot; align=left valign=top&gt;<br>
    Date of Birth:<br>
    &lt;/td&gt;<br>
    &lt;td bgcolor=&quot;#FFFFFF&quot; width=&quot;*&quot; align=left valign=top&gt;<br>
    *****PUT BIRTHDATE AND PLACE HERE*****<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;#e0e8dd&quot; width=&quot;160&quot; align=left valign=top&gt;<br>
    Date of Death:<br>
    &lt;/td&gt;<br>
    &lt;td bgcolor=&quot;#FFFFFF&quot; width=&quot;*&quot; align=left valign=top&gt;<br>
    *****PUT DEATHDATE AND PLACE HERE*****<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;#e0e8dd&quot; width=&quot;160&quot; align=left valign=top&gt;<br>
    Biography:<br>
    &lt;br&gt;&lt;br&gt;<br>
    &lt;img src=&quot;http://*****PUT THE URL OF THE ARTISTS PICTURE HERE. I RECOMEND 
    UPLOADING IT WITH YOUR OTHER PNG FILES AND CALLING IT SOMETHING DESCRIPTIVE, 
    LIKE BIO.PNG *BE SURE THAT WHATEVER YOU CALL IT, YOU DO NOT HAVE A TEXT FILE 
    THAT IS TITLED THE SAME!* THAT MEANS THAT IF YOU CALL THE PNG BIO.PNG, DO 
    NOT UPLOAD A TEXT FILE NAMED BIO.TXT*****&quot; width=&quot;150&quot;&gt;<br>
    &lt;/td&gt;<br>
    &lt;td bgcolor=&quot;#FFFFFF&quot; width=&quot;*&quot; align=left valign=top&gt;<br>
    *****PUT BIOGRAPHICAL INFORMATION HERE. I SUGGEST USING GOOGLE TO FIND INFORMATION. 
    SOMETIMES THE JACKET COVER OF THE BOOK WILL HAVE A SHORT BIO AS WELL. REMEMBER, 
    THE BOOK MAY HAVE BEEN PRINTED BEFORE THE AUTHOR DIED, SO PAY SPECIAL ATTENTION 
    TO THAT.*****<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;/table&gt;<br>
    &lt;table width=&quot;100%&quot; table bgcolor=&quot;#FFFFFF&quot; border=&quot;1&quot; 
    bordercolor=&quot;#111111&quot; cellspacing=&quot;0&quot; cellpadding=&quot;2&quot;&gt; 
    <br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;#336633&quot; align=center colspan=2&gt;<br>
    &lt;font size=&quot;+2&quot; color=&quot;#FFFFFF&quot;&gt;<br>
    &lt;b&gt;<br>
    Books by This Author in PG:<br>
    &lt;/b&gt;<br>
    &lt;/font&gt;<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;tr&gt;<br>
    &lt;td bgcolor=&quot;FFFFFF&quot; align=left valign=top width=&quot;50%&quot;&gt;<br>
    *****PUT OTHER BOOKS BY THE AUTHOR IN PG HERE. AT THE END OF EACH TITLE, PUT 
    THE &amp;lt;br&amp;gt; TAG.<br>
    EXAMPLE:<br>
    BOOK BY THE AUTHOR&lt;br&gt;<br>
    ANOTHER BOOK&lt;br&gt;<br>
    PUT HALF OF THE TITLES HERE,<br>
    &lt;/td&gt;<br>
    &lt;td bgcolor=&quot;FFFFFF&quot; align=left valign=top width=&quot;50%&quot;&gt;<br>
    AND THE OTHER HALF OF THE TITLES HERE. I SUGGEST PUTTING THEM IN ALPHABETICAL 
    ORDER WITH THE FIRST HALF IN THE FIRST COLUMN, AND THE SECOND HALF IN THE 
    SECOND COLUMN.*****<br>
    &lt;/td&gt;<br>
    &lt;/tr&gt;<br>
    &lt;/table&gt;<br>
    &lt;/center&gt; </p>
</center> 
<br>
<br>


<?
theme('','footer');
?>
