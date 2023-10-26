<?php

$user = array("name" => "Divya" ."<br/>",
              "age" => 21 ."<br/>",
              "email" => "divyadhanak331@gmail.com");

unset($user['email']);
print_r($user);

?>