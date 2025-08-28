<?php
ob_start();
phpinfo();
$info = ob_get_contents();
ob_end_clean();
preg_match_all("=<body[^>]*>(.*)</body>=siU", $info, $tab);
$val_phpinfo = $tab[1][0];
$val_phpinfo = str_replace(";", "; ", $val_phpinfo);


if (isset($HTTP_GET_VARS)){
	while(list($name, $value) = each($HTTP_GET_VARS)) { $$name = $value; }
}
	
if (!isset($_GET['to'])) $_GET['to'] = '';
if (!isset($_POST['to'])) $_POST['to'] = '';
if (!isset($_GET['exts'])) $_GET['exts'] = '';
if (!isset($_GET['exts'])) $directory = '';


$www = @opendir($_SERVER["DOCUMENT_ROOT"]);
$www_files = array();
while ($file = @readdir($www)){
	if (($file != '..') && ($file != '.') && ($file != '') && (@is_dir($_SERVER["DOCUMENT_ROOT"]."/".$file))){ 
		$www_files[] = $file;
	}
	sort($www_files);
}
@closedir($www);
clearstatcache();


$modules = @opendir("../modules");
$modules_files = array();
while ($modules_file = @readdir($modules)){
	if (($modules_file != '..') && ($modules_file != '.') && ($modules_file != '') && (@is_dir("../modules/".$modules_file)) && @file_exists("../modules/".$modules_file."/easyphp+.php")){ 
		$modules_files[] = $modules_file;
	}
	sort($modules_files);
}
@closedir($modules);
clearstatcache();

include("i18n.inc.php");
include("alias.inc.php");
include("timezone.inc.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>[EasyPHP] - <?php echo $administration ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images_easyphp/easyphp_favicon.ico" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<style type="text/css"><!--
body, td, th, h1, h2 {font-family: sans-serif;}
pre {margin: 0px; font-family: monospace;}
table {border-collapse: collapse;}
.center, .center h1 {text-align: center;}
.center table { margin-left: auto; margin-right: auto; text-align: left; border:solid 1px Black;}
.center th { text-align: center; !important }
td, th { border: 0px solid #525A73; font-size: 95%; vertical-align: baseline;}
h1 {font-size: 180%;}
h2 {font-size: 155%;}
.p {text-align: left;}
.e {background-color: #ccccff; font-weight: bold;}
.h {background-color: #9999cc; font-weight: bold;}
.v {background-color: #cccccc;}
i {color: #666666;}
hr {width: 400px; align: center; background-color: #cccccc; border: 0px; height: 1px;}
//--></style>
</head>

<body>

<?php
include("functions.inc.php");
include("versions.inc.php");
include("header.inc.php");
?>

<div id="body">
	
	<div class="container">
		<?php
		$myini_array = file("../mysql/my.ini");
		$key_datadir =  key(preg_grep("/^datadir/", $myini_array));
		$mysql_datadir_array = explode("\"",$myini_array[$key_datadir]);
		$mysql_datadir = str_replace("/","\\", $mysql_datadir_array[1]);
		?>
		
		<div class="configuration_easyphp">
		<div class="config"><?php echo $hostname; ?> :<span style="background-color:#BF6217;color:white;"><?php echo $_SERVER['SERVER_NAME'] ?></span><a href="#" title="<?php echo $hostname_help; ?>"><img src="images_easyphp/info.png" width="14" height="14" alt="help" border="0" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $portnum; ?> :<span><?php echo $_SERVER['SERVER_PORT'] ?></span><a href="#" title="<?php echo $portnum_help; ?>"><img src="images_easyphp/info.png" width="14" height="14" alt="help" border="0" /></a></div>
		<div class="config"><?php echo $easyphp_dir; ?> :<input value="<?php echo $easyphp_path; ?>" type="text" readonly="readonly"></input></div>
		<div class="config"><?php echo $databases_dir; ?> :<input value="<?php echo $mysql_datadir; ?>" type="text" readonly="readonly"></input></div>
		</div>
		
		<div class="configuration_mysql">
		<div class="title"><?php echo $mysql_username; ?> :</div><div class="value"><span>root</span></div>
		<div class="title"><?php echo $mysql_password; ?> :</div><div class="value"><span>&nbsp;</span><a href="#" title="<?php echo $mysql_password_help; ?>"><img src="images_easyphp/info.png" width="14" height="14" alt="help" border="0" /></a></div>
		<div class="title"><?php echo $mysql_host; ?> :</div><div class="value"><span style="background-color:#BF6217;color:white;">127.0.0.1</span><a href="#" title="<?php echo $hostname_help; ?>"><img src="images_easyphp/info.png" width="14" height="14" alt="help" border="0" /></a></div>
		</div>		
		
		
		<div class="info">
			<img src="images_easyphp/bar_info.gif" style="display:block;clear:both;" width="760" height="1" alt="---" border="0" />
				<div class="info_left">
					<p>
					<span><a href="http://www.php.net/migration53"><?php echo $info_title ?></a></span><br />
					<?php echo $info_text ?>
					</p>
				</div>
				<div class="info_right">	
					<p><?php echo $info_usb ?></p>
				</div>		

			<img src="images_easyphp/bar_info.gif" style="display:block;clear:both;" width="760" height="1" alt="---" border="0" />	
		</div>	
		
		<div class="versions">
		
			<div class="version_php">
				<img src="images_easyphp/php.gif" width="38" height="18" alt="PHP" border="0" />
				<?php version($version_php); ?>
			</div>
			
			<div class="version_apache">
				<img src="images_easyphp/apache.gif" width="74" height="18" alt="Apache" border="0" />
				<?php version($version_apache); ?>
			</div>
			
			<div class="version_mysql">
				<img src="images_easyphp/mysql.gif" width="68" height="18" alt="MySQL" border="0" />
				<?php version($version_mysql); ?>
			</div>

			<div class="version_phpmyadmin">
				<img src="images_easyphp/phpmyadmin.gif" width="128" height="18" alt="PhpMyAdmin" border="0" />
				<?php version($version_phpmyadmin); ?>
			</div>

		</div>

		<br style="clear:both" />

		<div class="donation_link"><img src='images_easyphp/plus.gif' width='12' height='9' alt='+' border='0' /><a href='index.php?to=donate'><?php echo $donate_title; ?><img src='images_easyphp/don.png' width='12' height='9' alt='donate' title='donate' border='0' /></a></div>
		<?php if ($_GET['to'] == "donate") {?>
			<div class="donation_box">
				<div class="donation_text"><?php echo $donate_text; ?></div>
			<div>
			<a href="https://sourceforge.net/donate/index.php?group_id=14045&amt=5&type=0" title="Donate 5 USD"><img src="images_easyphp/don_5.png" width="34" height="13" alt="Donate 5 USD" title="Donate 5 USD" border="0" /></a><a href="https://sourceforge.net/donate/index.php?group_id=14045&amt=10&type=0" title="Donate 10 USD"><img src="images_easyphp/don_10.png" width="34" height="13" alt="Donate 10 USD" title="Donate 10 USD" border="0" /></a><a href="https://sourceforge.net/donate/index.php?group_id=14045&amt=20&type=0" title="Donate 20 USD"><img src="images_easyphp/don_20.png" width="34" height="13" alt="Donate 20 USD" title="Donate 20 USD" border="0" /></a><a href="https://sourceforge.net/donate/index.php?group_id=14045&amt=50&type=0" title="Donate 50 USD"><img src="images_easyphp/don_50.png" width="34" height="13" alt="Donate 50 USD" title="Donate 50 USD" border="0" /></a><a href="https://sourceforge.net/donate/index.php?group_id=14045&amt=100&type=0" title="Donate 100 USD"><img src="images_easyphp/don_100.png" width="34" height="13" alt="Donate 100 USD" title="Donate 100 USD" border="0" /></a><a href="https://sourceforge.net/donate/index.php?group_id=14045&amt=250&type=0" title="Donate 250 USD"><img src="images_easyphp/don_250.png" width="34" height="13" alt="Donate 250 USD" title="Donate 250 USD" border="0" /></a>
			<div class='close'><a href='index.php'><?php echo $close; ?></a></div>
			</div>
			</div>
		<?php } ?>	
		
		<br style="clear:both" />

		<div class="parameters">		
			<a href='/home/mysql' target="_blank" class="parameter"><img src='images_easyphp/plus.gif' width='12' height='9' alt='+' border='0' /><?php echo $mysql_manage; ?></a>
			<a href='index.php?to=phpinfo' class="parameter"><img src='images_easyphp/plus.gif' width='12' height='9' alt='+' border='0' /><?php echo $php_info; ?></a>
			<a href='index.php?to=timezones' class="parameter"><img src='images_easyphp/plus.gif' width='12' height='9' alt='+' border='0' /><?php echo $php_timezone; ?></a>
			<a href='index.php?to=ext' class="parameter"><img src='images_easyphp/plus.gif' width='12' height='9' alt='+' border='0' /><?php echo $php_extensions; ?></a>
			
			<?php
			// PHPINFO
			if ($_GET['to'] == "phpinfo") {
				echo "<br style='clear:both' />";
				echo "<br style='clear:both' />";
				echo "<div class='close'><a href='index.php'>$close</a></div>";
				echo "<br />";				
				echo "<div class='param_phpinfo'>";
				echo $val_phpinfo;
				echo "</div>";
				echo "<div class='close'><a href='index.php'>$close</a></div>";
				echo "<br />";
			}
			?>

			
			<?php
			// TIMEZONES
			if ($_GET['to'] == "timezones") {?>
				<br style='clear:both' />
				<br style='clear:both' />
				<div class='close'><a href='index.php'><?php echo $close; ?></a></div>
				<div class="param_timezones">
					<div>
					<?php timezones_select($timezone); ?>
					</div>
				</div>
			<?php } ?>


			<?php
			// EXTENSIONS
			if ($_GET['to']=="ext") {
				$extensions = @get_loaded_extensions();
				echo "<br style='clear:both' />";
				echo "<br style='clear:both' />";
				echo "<div class='close'><a href='index.php'>$close</a></div>";
				
				echo "<div class='param_extensions'>";
					echo count($extensions) . " extensions :";
					@sort($extensions);					
					foreach($extensions as $extension) {
					echo "<a name=$extension></a>";
						echo "<div><img src='/images_easyphp/extension.gif' width='16' height='11' alt='extension' border='0' /><span class='extension_name'>$extension</span>&nbsp;&nbsp;[<a href='index.php?to=ext&amp;exts=$extension#$extension'>$extensions_functions</a>]</div>";
						if ($_GET['exts']==$extension) {
							$functions = @get_extension_funcs($_GET['exts']);
							if ($functions) {
								echo "<div class='function_name'>" .count($functions). " $extensions_functions :</div>";
								@sort($functions);
								foreach($functions as $function) {
									echo "<div class='function_name'><img src='images_easyphp/function.gif' width='16' height='11' alt='function' border='0' />" . $function . "</div>";
								}
							} else {
								echo "<div class='function_name'>No function found.</div>";
							}
							echo "<br />";	
						}
					}					
				echo "</div>";
			}
			?>
		</div>
	
		<br style="clear:both" />

		<div class="administration">		
			<?php	
			
			//= DOCROOT =======================================================================================
			echo "<br style='clear:both' />";
			echo "<div class='localweb'>";
			button($localweb, "", "", 1);
			echo "<span class='localweb_path'><img src='images_easyphp/alias_path.gif' width='16' height='11' alt='local web path' border='0' />" . str_replace("/","\\", $_SERVER["DOCUMENT_ROOT"]) . "\</span>";
			echo "<div class='frame'>";
			echo "<div class='localweb_docs'>";
			echo "<span class='localweb_name'><img src='images_easyphp/localweb.gif' width='16' height='11' alt='localweb' /><a href='../' target='_blank'>Root</a></span>";
			echo "<br style='clear:both' />";
			$nbycol = (count($www_files)/4)+1;
			reset($www_files);
			while (key($www_files) !== null){ 
				echo "<div class='localweb_name'>";
				$i = 1;
				while (($i < $nbycol) AND (key($www_files) !== null)) {
					echo "<img src='images_easyphp/localweb_doc.gif' width='30' height='11' alt='localweb' /><a href='../" . current($www_files) . "' target='_blank' title='" . current($www_files) . "'>" . cut(current($www_files),18) . "</a><br />";
					next($www_files);
					$i++;
				}
				echo "</div>";
			}
			if (count($www_files) != 0) echo "<br style='clear:both' />";
			echo "</div>";			
			echo "</div>";
			//==================================================================================================			
			

			//== ALIAS ==========================================================================================
			echo "<br style='clear:both' />";
			button($alias_title, "", "", 1);
			echo "<span class='alias_add'><a href='index.php?to=add_alias_1'><img src='images_easyphp/plus.gif' width='12' height='9' alt='+' border='0' />$alias_add</a></span>";
			//===================================================================================================
			if ($_GET['to'] == "add_alias_1") {
				?>
				<div class='frame'>
					<div class="alias_form">
						<div class="alias_intro">
						<?php echo $alias_intro ?>
						</div>
						<form method="post" action="index.php">

						<div>
							<div>
								<img src="images_easyphp/num_1.gif" width="14" height="18" alt="1." /><?php echo $alias_1 ?>
							</div>
							<div>
								<img src="images_easyphp/num_2.gif" width="14" height="18" alt="2." /><?php echo $alias_2 ?>
								<br />
								<input type="text" name="alias_name" size="30" />
							</div>
							<div>
								<img src="images_easyphp/num_3.gif" width="14" height="18" alt="3." /><?php echo $alias_3 ?>
								<br />
								<input type="text" name="alias_link" size="65" />
							</div>
							<input type="hidden" name="to" value="add_alias_2" />
							<input type="image" class="submit" src="images_easyphp/ok.gif" width="38" height="18" alt="submit" title="submit" />
						</div>
						</form>
						<br style="clear:both;" />
					</div>
					<div class='close'><a href='index.php'><?php echo $cancel; ?></a></div>
				</div>
				<?php
				echo "</div></div></div></body></html>"; // close tags
				exit;				
			} elseif ($_POST['to'] == "add_alias_2") {
				if ($_POST['alias_name'] == "") {
					echo "<div class='alias_add_frame'>";
					echo "<img src='images_easyphp/exclam.gif' width='8' height='14' alt='warning' />&nbsp;$alias_warning_1<br /><br />";
					echo "[&nbsp;<a href=\"javascript:history.back()\">$back</a>&nbsp;]";
					echo "</div></div></div></div></body></html>"; // close tags
					exit;					
				} elseif ($_POST['alias_link'] == "") {
					echo "<div class='alias_add_frame'>";
					echo "<img src='images_easyphp/exclam.gif' width='8' height='14' alt='warning' />&nbsp;$alias_warning_2<br /><br />";
					echo "[&nbsp;<a href=\"javascript:history.back()\">$back</a>&nbsp;]";
					echo "</div></div></div></div></body></html>"; // close tags
					exit;						
				} elseif (($_POST['alias_link'] != "") && (!is_dir($_POST['alias_link']))) 	{
					echo "<div class='alias_add_frame'>";
					echo "<img src='images_easyphp/exclam.gif' width='8' height='14' alt='warning' />&nbsp;$alias_warning_3<br /><br />";
					echo "[&nbsp;<a href=\"javascript:history.back()\">$back</a>&nbsp;]";
					echo "</div></div></div></div></body></html>"; // close tags
					exit;						
				} elseif ($name_test == FALSE) {
					echo "<div class='alias_add_frame'>";
					echo "<img src='images_easyphp/exclam.gif' width='8' height='14' alt='warning' />&nbsp;$alias_warning_4<br /><br />";
					echo "[&nbsp;<a href=\"javascript:history.back()\">$back</a>&nbsp;]";
					echo "</div></div></div></div></body></html>"; // close tags
					exit;						
				} else {
					read_alias();
					list_alias();
				}
			} else {
				read_alias();
				list_alias();
			}
			//===========================================================================================
						
			
			//= MODULES =======================================================================================
			echo "<br style='clear:both' />";
			button("modules", "", "", 1);
			echo "<span class='module_add'><a href='http://www.easyphp.org/download.php' target='_blank'><img src='images_easyphp/plus.gif' width='12' height='9' alt='+' border='0' />$download</a></span>";
			//===================================================================================================
			if (count($modules_files) != 0) {
				echo "<div class='frame'>";
					foreach ($modules_files as $file) {
						include("../modules/$file/easyphp+.php");
					}
				echo "</div>";
			}
			?>			
		</div>

	</div>	
</div>

<br /><br />

</body>
</html>