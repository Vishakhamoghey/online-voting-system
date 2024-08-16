<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location: ../");
}
?>
<html>

<head>
<title>Online voting system </title>
        <link rel="stylesheet" href="css/stylesheet.css">
        </head>
        <body>
     <div id="headerSection">
     <button id="backbtn">Back</button>
     <h1>Online Voting System</h1>
     </div>
     <div id="Profile">
</div>
<div id="group">
</div>

     </html>

