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

<body>
<span class="mask bg-gradient-default opacity-8"></span>

<div class="container-fluid d-flex align-items-center">
                        <div class="row">
                        
                            
                        

                            <div class="col-lg-7 col-md-10">
                                <h1 class="display-2 text-white">GEEKSTER</h1>
                                <p class="text-white mt-0 mb-5">ADD A NEW POST</p>
                                <?php foreach($query as $q){?>
                                    <form action='add_post_logic.php' method="GET">
                                        <input type = "text" hidden name = "postid" value="<?php echo $q["postid"];?>">
                                        <h3 style="color:white">TITLE:</h3> <input type="text" name="title" value= "<?php echo $q["title"];?>"><br><br>
                                        <h3 style="color:white">PICTURE URL:</h3> <input type="url" name="url" value= "<?php echo $q["image"];?>"><br><br>
                                        <h3 style="color:white">CAPTION:</h3><textarea id="story" name="caption" rows="8" cols="80"><?php echo $q["caption"];?>
                                        </textarea>
                                        <h3 style="color:white">HASHTAGS:</h3><input type="text" name="hashtag" value= "<?php echo $q["hashtag"];?>"><br><br>
                                        <button name = "update_post" class= "btn btn-sm btn-primary"> Update </button>
                                    </form>
                                <?php } ?>

                            </div>
                        </div>

</body>
</html>