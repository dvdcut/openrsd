<?php
//Check for valid session:
session_start();
include('app/functions.php');
if(!isset($_SESSION['username'])){
	die("You must be logged in to view this page!");
}
echo '';
?>
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Logs <small><a href="#"><div onClick="pageLoad('logs');" class="fa fa-refresh rotate"></div></a></small></h1>
        </div>
    </div>