<!DOCTYPE html>
<?php 
    include "add_post_logic.php";
?>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="profile.css">
</head>
<style>
    .container {
        padding: 12px 24px 24px 24px;
        margin: 48px 12px;
        background: #062338;
        border-radius: 4px;
    }
        #right.card {
        margin: auto;
        position: absolute;
        right: 0;
        width: 60;
        padding: .2em 10em;
        background: #8399ff;
        display: flex;
        align-items: center;
    }


    
</style>
<body>
    

    <div class="main-content">
        
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <meta charset="utf-8" />
                <title></title>
                <!-- Header -->
                <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-color: black; background-size: cover; background-position: center top;">
                    <!-- Mask -->
                    <span class="mask bg-gradient-default opacity-8"></span>
                    <!-- Header container -->
                    <div class="container-fluid d-flex align-items-center">
                        <div class="row">

                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-lg-7 col-md-10">
                                    <h1 class="display-2 text-white">GEEKSTER</h1>
                                    <p class="text-white mt-0 mb-5">ADD A NEW POST</p>
                                    <form action='add_post_logic.php' method="post">
                                        <h3 style="color:white">TITLE:</h3> <input type="text" name="title"><br><br>
                                        <h3 style="color:white">PICTURE URL:</h3> <input type="url" name="url"><br><br>
                                        <h3 style="color:white">CAPTION:</h3><textarea id="story" name="caption" rows="5" cols="40">
                                    </textarea>
                                        <h3 style="color:white">HASHTAGS:</h3><input type="text" name="hashtag"><br><br>
                                        <input type="checkbox" name="type1" value="IMAGE">
                                        <label for="type1"> IMAGE </label><br>
                                        <input type="checkbox" name="type2" value="BLOG">
                                        <label for="type2"> BLOG </label><br>

                                        <input id="update_button" type="submit" name="addpost" class="btn btn-sm btn-primary">
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </nav>
    </div>
</body>
</html>
