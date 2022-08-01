<?php
include 'include/db_connect.php';
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($conn,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn,$password);

    $sql = "SELECT * FROM `admin` WHERE email='$username' and password='".md5($password)."'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: blog.php");
    } else {
        $showError = "Incorrect email or password";
    }
}
// session_abort();
?>

<?php include 'include/css-url.php'; ?>

<body>
    <section class="vh-100 login-bg">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-6 col-xl-6">
                    <div class="card" style="border-radius: 1rem;">
                        <?php
                        if ($login) {

                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Hurry !!!!</strong> Login Successfully.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>';
                        }

                        if ($showError) {

                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Error</strong> ' . $showError . '
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>';
                        }
                        ?>
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo mb-2 text-center">
                                <img src="assets/images/blogo.png" class=" p-2 w-50">
                            </div>
                            <h4 style="font-family: cursive;" class="text-center">Hello! let's get started</h4>
                            <h6 class="font-weight-regular text-center" style="font-family: System-UI;">Log in to continue.</h6>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">Email address</label>
                                    <input type="text" name="username" id="username" class="form-control form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-white">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="password_show_hide();">
                                                <i class="fa fa-eye m-1 d-none" id="hide_eye"></i>
                                                <i class="fa fa-eye-slash m-1" id="show_eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-login text-white col-md-12 mt-4">Login</button>
                            </form>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
        </div>
        <div class="toast" id="myToast" data-bs-autohide="true">
            <div class="toast-header">
                <strong class="me-auto"><i class="bi-bell-fill"></i>notification</strong>
                <small>1 sec ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                <p id="error_message"></p>
            </div>
        </div>
    </section>
</body>

<?php include 'include/js-url.php'; ?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<script>
    $(document).ready(function() {
        $("#submit").click(function() {
            var username = $("#username").val().trim();
            var password = $("#password").val().trim();

            if (username != "" && password != "") {
                
                $.ajax({
                    url: 'login.php',
                    type: 'post',
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(data) {
                        
                        var msg = "";
                        if (response == 1) {
                            window.location = "home-slider.php";
                        } else {
                            msg = "Invalid username and password!";
                        }
                        $("#snackbar").html(msg);
                    }
                });
            }
        });
    });
</script>