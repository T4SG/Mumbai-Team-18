<!-- light-blue - v3.1.0 - 2014-12-06 -->

<!DOCTYPE html>
<html>

<!-- Mirrored from demo.flatlogic.com/3.1/white/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jul 2015 10:06:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Login</title>

        <link href="css/application.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
	<style>
	 .b{
		 background:url(b3.jpg);
		 background-size:cover;
		 background-position:center center;
	 }
	</style>
</head>
<body class="b">
        <div class="single-widget-container">
            <section class="widget login-widget">
                <header class="text-align-center">
                    <h4>Login</h4>
                </header>
                <div class="body">
                    <form class="no-margin"
                          action="loginfinal.php" method="post">
                        <fieldset>
                            <div class="form-group">
<?php $conn=mysql_connect("localhost","root","");
$db=mysql_select_db("hhf",$conn) or die("couldnt select database");
?>
<?php

session_start();
$page1='adminpage.php';
$page2='partnerspage.php';

$username=@$_POST['username'];
$password=@$_POST['password'];
if($username&&$password)
{   $query=mysql_query("SELECT * FROM users WHERE username='$username'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0)
         { $row=mysql_fetch_assoc($query);
		   $dbusername=$row['username'];
		   $dbpassword=$row['password'];
			$user_id=$row['user_id'];
			$dbcategory=(int)$row['category_id'];
		   if($dbusername==$username&&$dbpassword==$password)
		       {
			       $_SESSION['user_id']=$user_id;
                   if($dbcategory==1)
					    header("location:$page1");
				    if($dbcategory==2)
				         header("location:$page2");
			   }
		   else
		      echo "Incorrect password!Try again";   
		 }
		 else
	     echo "This user doesnot exist!Please enter a valid username!";
}
else
   echo "Please enter username and password!";
?>		   
	


                              
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input name="username" type="text" class="form-control input-lg"
                                           placeholder="Your Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" >Password</label>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    <input name="password" type="password" class="form-control input-lg"
                                           placeholder="Your Password">
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-block btn-lg btn-danger">
                                <span class="small-circle"><i class="fa fa-caret-right"></i></span>
                                <small>Sign In</small>
                            </button>
                            <a class="forgot" href="#">Forgot Username or Password?</a>
                        </div>
                    </form>
                </div>
                <footer>
                 
                </footer>
            </section>
        </div>
<!-- common libraries. required for every page-->
<script src="lib/jquery/dist/jquery.min.js"></script>
<script src="lib/jquery-pjax/jquery.pjax.js"></script>
<script src="lib/bootstrap-sass-official/assets/javascripts/bootstrap.js"></script>
<script src="lib/widgster/widgster.js"></script>
<script src="lib/underscore/underscore.js"></script>

<!-- common application js -->
<script src="js/app.js"></script>
<script src="js/settings.js"></script>

<!-- common templates -->
<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% dark = background == 'dark'; light = background == 'light';%>
            <button type="button" data-value="dark" class="btn btn-sm btn-default <%= dark? 'active' : '' %>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-default <%= light? 'active' : '' %>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% onRight = sidebar == 'right'%>
            <button type="button" data-value="left" class="btn btn-sm btn-default <%= onRight? '' : 'active' %>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-default <%= onRight? 'active' : '' %>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <% display = displaySidebar%>
            <button type="button" data-value="true" class="btn btn-sm btn-default <%= display? 'active' : '' %>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-default <%= display? '' : 'active' %>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="../transparent/index.html" class="btn btn-sm btn-default">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <% auto = sidebarState == 'auto'%>
    <% if (auto) {%>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm">Icons</button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm">Auto</button>
    <%} else {%>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm">Auto</button>
    <% } %>
</script>

    <!-- page specific scripts -->


</body>

<!-- Mirrored from demo.flatlogic.com/3.1/white/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jul 2015 10:06:32 GMT -->
</html>