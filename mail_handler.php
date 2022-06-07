<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$category=$_POST['category'];
		$feedback=$_POST['feedback'];

		$to='trp2001.trishasinha@gmail.com'; // Receiver Email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."category :".$category."\n"."feedback :"."\n\n".$feedback;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you";
		 }
		else{
			 echo "Something went wrong!";
		}
	}
?>