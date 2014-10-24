<?
 session_start(); 

 Print_r ($_SESSION);
 
 echo "<p>";
 ?>

 <?
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
 ?>