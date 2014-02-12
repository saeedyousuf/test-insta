<?php

 echo "Hello World!";


try {


   include 'auth.php';


    $auth->authorize();
} catch (Exception $err) { echo $err->getMessage(); }

?>