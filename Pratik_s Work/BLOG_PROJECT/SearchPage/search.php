<?php
session_start();
include '../helper/logic.php';
include '../helper/search_logic.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6fefde99a0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styles.css">
    <title>Search Page</title>


</head>

<body>
    <div class="navbar">
        <ul>
            <a href="../PostPages/index.php" class="logo">Geekster</a>

            <li class="texti"><a href="../SearchPage/search.php">Search</a></li>
            <li class="texti"><a href="../PostPages/normal_blogs.php">Posts</a></li>
            <li class="texti"><a href="../PostPages/index.php">Image Blogs</a></li>
            <li class="texti"><a href="../PostPages/query_blogs.php">Questions</a></li>
            <li class="texti"><a href="../PostPages/announcements_blogs.php">Announcements</a></li>
            <li>
                <div class="sizedbox"></div>
            </li>
            <li>
                <a href="../AddingPostPage/add_blog_page.php">
                    <div class="create">
                        <i class="fas fa-plus-circle" style="display: inline-block;"></i>
                        <h5>Create</h5>
                    </div>
                </a>

            </li>
        </ul>
    </div>
    <div class="wrapper">
        <div class="sidebar">
            <a href="#">
                <div class="row">
                    <img src="../images/default.png" alt="" height="50px" width="50px">
                    <div class="col-md-2">
                        <h6 class="username"><?php echo $_SESSION['username']; ?></h6>
                        <h6 class="email"><?php echo $_SESSION['email']; ?></h6>
                    </div>
                </div>
            </a>
            <ul>
                <li><a href="../PostPages/index.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="../PostPages/my_posts.php"><i class="fas fa-blog"></i>My Posts</a></li>
                <li><a href="../PostPages/my_blogs.php"><i class="fas fa-image"></i>My Blogs</a></li>
                <li><a href="../PostPages/my_query.php"><i class="fas fa-question"></i>My Questions</a></li>
            </ul>
        </div>

        <div class="main_content" style="margin-left: 300px;">
            <form method="get">
                <div class="searchbar" style="width: 600px;">
                    <i class="fas fa-search fa-1x"></i>
                    <input style="width: 550px;" id="search" name="searchSubmit" type="text" placeholder="Search">
                </div>
            </form>
            <?php if (isset($_REQUEST['searchSubmit']) and $_REQUEST['searchSubmit'] != "") { ?>
                <?php foreach ($profiles as $p) { ?>
                    <div class="row" style="margin-bottom: 0;">
                        <img src="../images/default.png" alt="" height="50px" width="50px">
                        <div class="col-md-5">
                            <h6 class="username" style="width: 500px;"><?php echo $p['username']; ?></h6>
                            <h6 class="email"><?php echo $p['email']; ?></h6>
                        </div>

                        <a href="add_blog_page.php">
                            <div class="viewprofile">
                                <h5>View Profile</h5>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <?php foreach ($query as $q) { ?>
                    <div class="row" style="margin-bottom: 0;">
                        <img src="../images/default.png" alt="" height="50px" width="50px">
                        <div class="col-md-5">
                            <h6 class="username" style="width: 500px;"><?php echo $q['username']; ?></h6>
                            <h6 class="email"><?php echo $q['email']; ?></h6>
                        </div>

                        <a href="../AddingPostPage/add_blog_page.php">
                            <div class="viewprofile">
                                <h5>View Profile</h5>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
