<?php
$filename = "../easyphp.ini";
$handle = @fopen($filename, "r");
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
		$pieces = explode("=", $buffer);
		if ($pieces[0] == "LangAdmin") $lang = trim($pieces[1]);
		if ($pieces[0] == "OldRunningPath") $easyphp_path = trim($pieces[1]);
    }
    fclose($handle);
}

if (isset($_POST['lang']) AND $_POST['lang'] != $lang)
{
	$fp = fopen($filename, "r");
	$ini_contents = fread($fp, filesize($filename));
	fclose($fp);
	$ini_contents = str_replace("LangAdmin=".$lang, "LangAdmin=".$_POST['lang'], $ini_contents);
	$fp = fopen($filename, "w");
	fputs($fp,$ini_contents);
	fclose($fp);
	Header("Location: " . $_SERVER['PHP_SELF']); 
	exit;
}

include("i18n/" . $lang . ".php");

$select_en = ($lang == "en") ? ' selected="selected"':'';
$select_fr = ($lang == "fr") ? ' selected="selected"':'';

$lang_select =
	"<div class='i18n'>
	<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>
	<select class='lang_select' name='lang'>
		<option value='en'". $select_en . ">english</option>
		<option value='fr'". $select_fr . ">french</option>
	</select>
	<input type='image' src='../images_easyphp/submit_lang.gif' />
	</form>
	</div>";
?>