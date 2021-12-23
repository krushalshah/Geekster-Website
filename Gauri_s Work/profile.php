
<!DOCTYPE html>
<?php
       session_start();
       include 'scribble.php';
       
?>

<html>
<head>
<title></title>
 <link rel="stylesheet" href="profile.css">
</head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<body>

  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"  target="_blank">User profile</a>
        <form method = "POSt">
        <button name = "logout" class="btn btn-sm btn-primary">LOGOUT</button>
        
       
       
        </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->

    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://www.pinclipart.com/picdir/big/51-514779_social-media-vector-graphics-clipart.png); background-size: cover; background-position: center ;">

      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">GEEKSTER</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">

                <?php
                    $abc = "select * from profile where user_id = 2 ";
                    $query = mysqli_query($conn, $abc);

                    foreach($query as $q){?>
                
                    
                    <img src = "<?php echo $q["user_image"]?>"  class="rounded-circle"/>

                    <?php } ?>
                    
                    
                
                 
                 </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href = "change_profile_picture.php" name ='update' class='btn btn-sm btn-primary'> profile picture</a>
                <a href="settings.php" class="btn btn-sm btn-info mr-4" name="settings">Settings</a>
               
               
                
               
              </div>
            </div>
            
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    
                    
                    
                  </div>
                </div>
              </div>
              <div class="text-center">
              <?php
                    $abcd = "select * from profile where user_id = 2";
                    $query = mysqli_query($conn, $abcd);

                    foreach($query as $q){?>
                <h1> <span class="font-weight-bold"><?php echo $q["first_name"] . " " . " " . $q["last_name"]; ?> </span> </h3>  
                <?php } ?>
                <div class="h3 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo $q["username"] ?>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?php echo $q["email"] ?>
                </div>
                <div class="h4 mt-4">
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div>
                <br>
                <p>==============================</p>
                <h3 class="my-4">
                <?php echo $q["bio"] ?>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My Posts</h3>
                </div>
                <div class="col-4 text-right">
                 
                </div>
              </div>
            </div>
            <div class = "col-8">
                <?php $abc = " select * from create_post where user_id = 2 ";
                      $query = mysqli_query($conn, $abc);
                   

                    foreach($query as $q){?>
                       
                    <h3 class = "mt-4"><?php echo $q["title"]; ?></h4>
                    
                    <img src ="<?php echo $q["image"]; ?>" width="400" height="400" alt="">
                    <h5 class = "my-4"><?php echo $q["caption"]; ?></h5>
                    <h4 class = "my-4"><?php echo $q["hashtag"]; ?></h5>
                    <div class = 'row'>
                        <?php include "add_post_logic.php" ?>
                        <a href ="edit.php?postid=<?php echo $q['postid'];?>" class="btn btn-sm btn-primary"> EDIT </a>

                    <form method = "POST">
                          <input type = "text" hidden name="postid" value="<?php echo $q["postid"];?>">
                          <button class="btn btn-sm btn-primary" name= "delete"> DELETE </button>
                    </form>
                    </div>
                    <br><br>
                    <?php } ?>
                
            </div>
            
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
      <div class="col-xl-6 m-auto text-center">
        
      </div>
    </div>
  </footer>
</body>
</html>