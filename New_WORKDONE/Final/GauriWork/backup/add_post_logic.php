<?php
    
    include 'scribble.php';

    if(isset($_REQUEST['addpost'])){

         $title = $_REQUEST["title"];
         $url = $_REQUEST["url"];
         $caption = $_REQUEST["caption"];
         $hashtag = $_REQUEST["hashtag"];
         

        

         $run = "INSERT INTO create_post(title, image, caption, hashtag) VALUES('$title', '$url', '$caption', '$hashtag')";
         mysqli_query($conn, $run);

         if($run){
            
            echo "<script>alert('Your Post is ADDED')</script>";
			echo "<script>window.open('profile.php?user_id=$user_id' , '_self')</script>";
        }

          

    }

    if(isset($_REQUEST['postid'])){
        $postid = $_REQUEST["postid"];

        $sql = "SELECT * FROM create_post WHERE postid = $postid";
        $query =  mysqli_query($conn, $sql);

    }

    if(isset($_REQUEST['update_post'])){
        $postid = $_REQUEST["postid"];
        $title = $_REQUEST["title"];
        $url = $_REQUEST["url"];
        $caption = $_REQUEST["caption"];
        $hashtag = $_REQUEST["hashtag"];

        $sql = "update create_post set  title = '$title', image = '$url', caption = '$caption', hashtag = '$hashtag' Where postid = '$postid' ";
        mysqli_query($conn, $sql);

        if($sql){
            echo "success";
            echo "<script>alert('Your Post is Updated')</script>";
			echo "<script>window.open('profile.php?user_id=$user_id' , '_self')</script>";
        }
      }

       if(isset($_REQUEST['delete'])){
            $postid = $_REQUEST["postid"];

        $sql = "DELETE FROM create_post WHERE postid = $postid";
        $query =  mysqli_query($conn, $sql);

        if($sql){
            echo "success";
            echo "<script>alert('Your Post is Deleted')</script>";
			echo "<script>window.open('profile.php?user_id=$user_id' , '_self')</script>";
        }

    }

   ?>