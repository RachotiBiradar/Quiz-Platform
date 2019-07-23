<?php
session_start();

if (!isset($_SESSION['user'])) 
{
header('Location: student.php');
}
header('Location: quiz.php');
?>