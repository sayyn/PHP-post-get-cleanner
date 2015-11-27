<?php 
class Cleanner{
	public static function Clear(){
		foreach($_GET as $b=>$c){
			$_GET[$b]=Cleanner::Clean($c);
		}
        foreach($_POST as $b=>$c){
			$_POST[$b]=Cleanner::Clean($c);
		}
	}
	public static function Clean($text){
		$text =  @mysql_real_escape_string($text);
		$text =  htmlspecialchars($text, ENT_QUOTES);
		$text =  strip_tags($text);	
		$text =  stripslashes($text);		
		return $text;
	}
}
?>
