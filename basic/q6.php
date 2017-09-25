<?php
$contact_list=array(
                     "contact1" =>array("name" =>"dev","email" =>"safasz","number" =>"256346e"),
					 "contact2" =>array("name" =>"ram", "email" =>"safzxc","number" =>"364213e"),
					"contact3" => array("name" =>"raj","email" =>"wsaf","number" =>"24523524")
					 );
					 print_r($contact_list)."<br>";
					 foreach($contact_list as $i){
						 echo $i['name']." ".$i['email']." ".$i['number']."<br>";
						 
					 }
					 ?>