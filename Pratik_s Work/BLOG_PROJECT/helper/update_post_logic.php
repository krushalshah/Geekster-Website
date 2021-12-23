<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "mainblog";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if (!$conn) {
        die("<script>alert('Connection Failed.')</script>");
    }


    if(isset($_REQUEST['updatepost'])){
        $id = $_REQUEST["postid"];
        $title = $_REQUEST["title"];
        $url = $_REQUEST["pictureurl"];
        $hashtag = $_REQUEST['hashtag'];
        $description = $_REQUEST["description"];

        $sql = "UPDATE newblogs set newblogs.title = '$title', newblogs.pictureUrl = '$url', newblogs.hashtag = '$hashtag', newblogs.description = '$description' WHERE newblogs.id = $id ";
        mysqli_query($conn, $sql);

        if($sql){
        echo "success";
        echo "<script>
            alert('Your Post is Updated')
        </script>";
        echo "<script>
            window.open('../PostPages/index.php', '_self')
        </script>";
        }
    }

?>