<?php

if(isset($_POST['event_fav'])){
	
	$event_fav = $_POST['event_fav'];
	$id = $_POST['id'];

	//  query to update data 
	 
	$result  = mysqli_query($connect , "UPDATE user SET event_fav='$event_fav' WHERE id='$id'");
}
?>