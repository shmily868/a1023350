<?php
class PostOffice{

	var $string;

	function mailFiler(){
		echo "內容是: ".$this->$string;
	}

	function mailRegex(){

		$bad = array(preg_replace('/[\x{4e00}-\x{9fa5}]+/isu', '' , $matches[2]));

		$filename = str_replace($bad, '', $filename);

		return stripslashes($filename);

		echo "內容是: ".$this->$string;
	}

}
?>
<?php
//header('Content-type:text/html;charset=UTF-8');
$obj1 = new PostOffice();
$obj1->string = fopen("string.txt", "r");
		while(!feof($file))
		  {
		  echo fgets($file). "<br />";
		  }
		fclose($file);
$obj1->mailFiler();

$obj2 = new PostOffice();
$obj2->string = fopen("string.txt", "r");
$obj2->mailRegex();

?>