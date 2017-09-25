<?php
   class Books {
      
      var $price;
      var $title;
      
      
      function setPrice($a){
         $this->price = $a;
      }
      
      function getPrice(){
         echo "Price  is:".$this->price ."<br/>";
      }
      
      function setTitle($b){
         $this->title = $b;
      }
      
      function getTitle(){
         echo "Titleis:".$this->title ." <br/>";
      }
   }
	  
	  $physics = new Books();
      $physics->setTitle( "Physics for High School" );


$physics->setPrice( 10 );

$physics->getTitle();

$physics->getPrice();

   
?>