<?php 
require "NavBar.php"; 
require_once "LoginUser.php";

$erroruname = $errorpass = "";
$allFields = true;

if (isset($_POST["submit"])) {

    if ($_POST["uname"] == "") {
        $errorfname = "Username Required";
        $allFields = false;
    }

    if ($_POST["pass"] == "") {
        $errorfname = "Password Required";
        $allFields = false;
    }

    if($allFields){
        $loginUser = LoginUser();
        header("Location: Index.php");
    }
}
?>
        <div class="signupBox">
            <form method="post">
                <div class="signupForm">
                    <label>Username</label>
                    <input type="text" name="uname">
                    <span><?php echo $erroruname; ?></span>

                    <br>

                    <label>Password</label>
                    <input type="text" name="pass">
                    <span><?php echo $errorpass; ?></span>
                </div>
                <input type="submit" value="Enter" name="submit">
            </form>
        </div>
    </body>
</html>