<?php
class Books{
	var $price;
      var $title;
	
	function __construct( $a, $b ) {
   $this->title = $a;
   $this->price = $b;
}
 function getPrice(){
         echo "Price  is:".$this->price ."<br/>";
      }
	        function getTitle(){
         echo "Title is:".$this->title ." <br/>";
      }
}
$physics = new Books("Physics for High School" ,10);
$physics->getTitle();

$physics->getPrice();
?>