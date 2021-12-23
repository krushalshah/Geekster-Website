<?php

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "" , "dbmsproject");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

		

		

		$u_id = $_SESSION['user_id'] = 1 ;
		$get_user = "select * from profile where user_id='$u_id'"; 
		$run_user = mysqli_query($conn, $get_user);
		$row=mysqli_fetch_array($run_user);

		

		$user_id = $row['user_id']; 
		$user_name = $row['username'];
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$bio = $row['bio'];
		$email = $row['email'];
		$user_image = $row['user_image'];
	
		echo "success";

	 $abc = "select * from create_post ";
     $query = mysqli_query($conn, $abc);

	 $def = "select * from profile";
	 $query1 = mysqli_query($conn, $def);


	 if(isset($_REQUEST['save'])){
         $firstname = $_REQUEST["first_name"];
		 $lastname = $_REQUEST["last_name"];
		 $username = $_REQUEST["username"];
		 $email = $_REQUEST["email"];
		 $bio = $_REQUEST["bio"];
		 $url = $_REQUEST["url"];

		$sql = "update profile set first_name = '$firstname', last_name = '$lastname', username = '$username', email = '$email', bio = '$bio' , user_image = '$url' ";
		mysqli_query($conn, $sql);

		if($sql){
            echo "success";
            echo "<script>alert('Your Profile is Updated')</script>";
			echo "<script>window.open('profile.php?user_id=$user_id' , '_self')</script>";
        }
	 }	

		if(isset($_REQUEST['logout'])){

			session_start();
			session_destroy();
            echo "<script>alert('You are successfully logged out')</script>";
			echo  "<img src='https://i.pinimg.com/originals/1f/9b/fb/1f9bfb018128d3da2c6d32114cb597f7.jpg'>";
			die;

		}
			


?> 