<?php
if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];

		$msg=$_POST['message'];

		$to='gaichrinfrancesmalangmei@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Contact';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
echo "<script>
alert('Thank you for Contacting Us, one of our executive will contact you soon...!');
window.location.href='cu.php';
  </script>";
		
		}
		else{
			echo "Something went wrong!";
			
		}
	}?>