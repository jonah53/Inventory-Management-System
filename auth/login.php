<?php
  session_start();

  include '../config/log.db.inc.php'; //File has connection parameters
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    /*connect to database
    	$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or
    		die ('unable to connect to the database, check your connection parameters.');

    	mysql_select_db(MYSQL_DB, $db) or die(mysql_error($db)); //Error message if failed
    */
    //retrieve username and password from the form
    	//$username = (isset($_POST['username'])) ? trim($_POST['username']) : '';
    	//$password = (isset($_POST['password'])) ? $_POST['password'] : '';

    	$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : '../index.php' ;

    //retrieve username and password from table in database and compare with what user entered
    	//if (isset($_POST['submit'])) {


    		$username = stripslashes($_REQUEST['username']); // removes backslashes
    		$username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
    		$password = stripslashes($_REQUEST['password']);
    		$password = mysqli_real_escape_string($conn,$password);

    		$query = 'SELECT * FROM auth WHERE ' .
    			'Username = "' . $username . '" AND ' .
    			'Password = ("' . md5($password) . '")';

    	$result = mysqli_query($conn,$query);
    	$rows = mysqli_num_rows($result);

    	if (mysqli_num_rows($result) == 1){
    		$row = mysqli_fetch_assoc($result);
    		$_SESSION['username'] = $username;
    		//session_register("username");
    		$_SESSION['logged'] = 1;
    		$_SESSION['rights'] = $row['Rights'];

        if($_SESSION['rights'] >= 2)
        {
          $redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : '../index.php' ;
        }
    //If both the username and password match, then redirect to original page otherwise fail message
    		header('Refresh: 0; URL = ' . $redirect);
    					die();
    	} else {

    		$_SESSION['username'] = '';
    		$_SESSION['logged'] = 0;
    		$_SESSION['rights'] = 0;

        $redirect = 'login.php';

        header('Refresh: 3; URL = ' . $redirect);
          echo ' <p> You Have supplied a wrong username and or password. </p> ';
              die();

    		$error = '<font color="#FF0000"><p><strong> You have supplied an invalid username and/or password </strong></p></font> ' ;
    	}
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Logistics </title>
    <link rel="icon" type="image/jpg" sizes="192x192" href="../images/logo.jpg">

    <!-- Bootstrap -->
    <link href="../config/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../config/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../config/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../config/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../config/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <h1>User Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Log in">
                <!--<a class="btn btn-default submit" href="index.html">Log in</a>-->

              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Forgot Password?
                  <a class="to_register" href="#signup"> Reset Password</a>
                  <!--<a href="#signup" class="to_register"> Create Account </a>-->
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <img src="../images/logo.jpg" width="80%" />
                  <p class="copyright font-alt">Copyright &copy; <script>document.write(new Date().getFullYear());</script>. All Rights Reserved</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Reset Password</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="New Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="login.php">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <!--<div>
                  <h1><i class="fa fa-paw"></i> AMZ Motors Group</h1>
                  <p>©2019 All Rights Reserved.</p>
                </div>-->
                <div>
                  <img src="../images/logo.jpg" width="80%" />
                  <p class="copyright font-alt">Copyright &copy; <script>document.write(new Date().getFullYear());</script>. All Rights Reserved</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
