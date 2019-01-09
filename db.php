<?php 

require "libs/rb.php";
 R::setup( 'mysql:host=localhost;dbname=esport',
 'root', 'Readers11!' );

//session start чтобы запомнить пользовотеля 
 session_start();