<?php

function connection(){

	
	$connection=mysqli_connect("localhost","root","","33");

	return $connection;
}