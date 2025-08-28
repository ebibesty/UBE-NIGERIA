<?php
/**
* EasyPHP i18n - Translations for EasyPHP
* EN
* Naming based on languages (ISO 639) not on countries
* @version	2.0
* @license	GPL
* @author	
*/

//== Navigation ==
$administration = "Administration";
$help = "help";
$back = "back";
$close = "close";
$cancel = "cancel";
$confirm = "confirm";
$download = "download";
$parameters = "Parameters";

$hostname				= "Hostname";
$hostname_help			= "Due to incompatibilities with Windows Vista/Seven, 'localhost' is no longer used. Use '127.0.0.1' instead. For details, see FAQ";
$portnum				= "Port";
$portnum_help			= "In order to avoid conflicts with other servers, the port is set to 8888 (instead of 80)";
$easyphp_dir			= "EasyPHP directory";
$databases_dir			= "Databases directory";
$mysql_username			= "MySQL Username";
$mysql_password			= "MySQL Password";
$mysql_password_help	= "No password, leave it blank";
$mysql_host				= "MySQL database host";

$mysql_manage = "Manage MySQL with PhpMyAdmin";
$php_info = "PHP Parameters";
$php_timezone = "Time Zone";
$php_extensions = "Extensions";

$donate_title = "Support this project";
$donate_text = "EasyPHP is free and can be used and modified by anyone, including for commercial purposes.<br />If EasyPHP helped you in your projects or business, you can make a donation with PayPal through the <a href='https://sourceforge.net/donate/index.php?group_id=14045'>SourceForge donation system</a> (Unix name of this project on Sourceforge: quickeasyphp) or directly by clicking on a link below.<br />Thank you for your support!";

//== Info ==
$info_title = "PHP 5.3 migration guide";
$info_text = "Most improvements in PHP 5.3.x have no impact on existing code. However, there are a <a href='http://www.php.net/manual/en/migration53.incompatible.php'>few incompatibilities</a> and <a href='http://www.php.net/manual/en/migration53.new-features.php'>new features</a> that should be considered.";
$info_usb = "If you want to use EasyPHP on an USB key, you just need to copy the entire EasyPHP folder on the key. Be sure that all your scripts are in the folder 'www' and your databases in 'mysql/data'.";

//== Local web ==
$localweb = "local_web";

//== Docroot ==
$docroot_select = "Select a new path";
$docroot_change = "change";		
$docroot_default = "set to default";
$docroot_warning_1 = "Field is empty.";
$docroot_warning_2 = "The directory corresponding to the path you have chosen does not exist.";

//== Alias ==
$alias_title = "+ALIAS+"; //the character replace the quotation marks
$alias_add = "add";
$alias_delete = "delete";
$alias_intro = "Aliases allow you to place your sites in directories other than Apache's root directory (www)";
$alias_1 = "Create a directory (eg: C:\localweb\websites\site1)";
$alias_2 = "Create a name for the Alias (eg: site1)";
$alias_3 = "Select the path to the directory you have created (eg: C:\weblocal\websites\site1)";
$alias_4 = "Default settings for the directory";
$alias_5 = "Confirm ('OK')";
$alias_warning_1 = "Field 2 is empty.";
$alias_warning_2 = "Field 3 is empty.";
$alias_warning_3 = "The directory corresponding to the path you have chosen does not exist.";
$alias_warning_4 = "This name, or a part of this name, is already used by the system.";

//== Extensions ==
$extensions_title = "EXTENSIONS";
$extensions_nb = "You have %s extensions loaded";
$extensions_show = "show";
$extensions_functions = "functions";

//== Modules ==
$module_uninstall = "How to uninstall a module ?";
$module_uninstall_folder = "If you want to uninstall a module, you need to move or delete the folder :";
$module_uninstall_db = "And you need to backup or delete (with PhpMyAdmin) the associated database :";


//== MySQl Info ==
$mysqlinfo_parameters_1 = "Host : '127.0.0.1'";
$mysqlinfo_parameters_2 = "Username : 'root'";
$mysqlinfo_parameters_3 = "Password : '' (no password)";
$mysqlinfo_parameters_4 = "Path to the database root (datadir)";
?>