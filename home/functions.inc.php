<?php
function button($title, $link, $target, $arrow){
	$lenght = strlen($title);
	$start = 0;

	echo "<span class='button'>";
	if ($link != "") echo "<a href='$link' '$target'>";  
	
	if ($arrow == 1){
		echo "<img src='images_easyphp/button_arrow.gif' width='16' height='18' border='0'  alt='*' />";
	} elseif($arrow == 2) {
		echo "<img src='images_easyphp/button_link.gif' width='16' height='18' border='0'  alt='*' />";
	} else {
		echo "<img src='images_easyphp/button_left.gif' width='8' height='18' border='0'  alt='[' />";
	}

	while($start < $lenght){
		$car = substr($title, $start, 1);
		echo "<img src='images_easyphp/lettre_".$car.".gif' border='0' style='padding:4px 1px 4px 1px;' alt='" . $car . "' />";
		$start++;
	}
	echo "<img src='images_easyphp/button_right.gif' width='8' height='18' border='0' style='margin:0px 0px 0px 0px;' alt=']' />";
	if ($link != "") echo "</a></span>";  
	echo "</span>";
}


function button_small($title, $link, $target, $color){
	$lenght = strlen($title);
	$start = 0;

	if ($link != "") echo "<a href='$link' '$target'>";  
	echo "<img src='images_easyphp/button_small_left.gif' width='4' height='9' border='0' style='background:" . $color . ";' alt='[' />";
	while($start < $lenght){
		$car = substr($title, $start, 1);
		echo "<img src='images_easyphp/lettre_small_".$car.".gif' border='0' style='padding:2px 1px 2px 1px;background:" . $color . ";' alt='" . $car . "' />";
		$start++;
	}
	echo "<img src='images_easyphp/button_small_right.gif' width='4' height='9' border='0' style='background:" . $color . ";' alt=']' />";
	if ($link != "") echo "</a>";  	
}


function version($num){
	$lenght = strlen($num);
	$start = 0;
	while($start < $lenght){
		$chiffre=substr($num,$start,1);
		print("<img src='images_easyphp/chiffre_".$chiffre.".gif' alt='".$chiffre."' border='0' />");
		$start++;
	}
}


function i18n_string($string){
	  $string = htmlspecialchars($string);
	  return $string;
}


function cut($text, $length) {
	if (strlen($text) <= $length) return $text;
	if (strlen($text) > $length) return substr($text, 0, $length-3) . '...';
}


function cutatspace($text, $length) {
	if (strlen($text) <= $length) return $text;
	$text = nl2br($text);
	$pos = strrpos(substr($text, 0, $length), " ");
	if (is_integer($pos) && $pos) return substr($text, 0, $pos) . '...';
	else return substr($text, 0, $length) . '...';
}
?>