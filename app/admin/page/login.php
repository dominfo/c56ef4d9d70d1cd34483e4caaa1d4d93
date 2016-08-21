<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(dirname(__FILE__))));
define('WEB', dirname(__FILE__));

require_once (ROOT . DS . 'config' . DS . 'config.php');
//require_once (ROOT . DS . 'config' . DS . 'database.php');


if(isset($_POST['submit']))
{
    require_once ROOT.DS.'lib'.DS.'models'.DS.'admin.class.php';
    $error = array();

    if($_POST['uname'] != null)
    {
        $uname = $_POST['uname'];
    }else{
        $error['uname'] = "please enter username";
    }
    if($_POST['pwd'] != null)
    {
        $pwd = $_POST['pwd'];
    }else{
        $error['pwd'] = "please enter username";
    }
    if (isset($uname) && isset($pwd))
    {
        $admin = new admin;
        $admin->login($uname,$pwd);
    }
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Your Website</title>
</head>
<body>
    <form action="index.php" method="post">
        <div class="container">
            <label><b>Username</b></label><br>
            <input type="text" placeholder="Enter Username" name="uname" ><br>
            <span>
            <?php 
                if( isset($error['uname']) )
                {
                    echo $error['uname'];
                }
                ?>
            </span><br>
            
            <label><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="pwd" ><br>
            <span>
            <?php 
                if( isset($error['pwd']) )
                {
                    echo $error['pwd'];
                }
                ?>
            </span><br>
            <input type="submit" value="Submit" name="submit" />
            <button type="button" class="cancelbtn">Cancel</button><br>
            <input type="checkbox" checked="checked"> Remember me
        </div>
    </form>
</body>
</html>