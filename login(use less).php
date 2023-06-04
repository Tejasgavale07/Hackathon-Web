<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/SignUp</title>

    <link rel="stylesheet" href="CSS/login_style.css">


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Hello, Boxicons!</title>

</head>

<body>
    <section class="container forms">

        <!-- ---------- login form ----------- -->

        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="#" method="POST">
                    <div class="field inpute-field">
                        <input name="email-txt" type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field inpute-field">
                        <input name="pass-txt" type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field inpute-field">
                        <label for="cars">Login as : </label>
                        <select name="type" id="checkbox1">
                            <option name="alumni" type="checkbox">Alumni</option>
                            <option name="college" type="checkbox">College</option>
                            <option name="directorate" type="checkbox">Directorate</option>

                        </select>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password ?</a>
                    </div>


                    <div class="field button-field">
                        <button name="login-btn">Login</button>
                    </div>


                </form>

                <div class="form-link">
                    <span>Don't have an accoung? <a href="#" class="link signup-link">SignUp</a></span>
                </div>
            </div>

        </div>


        <!-- --------- Signup Form --------- -->
        <div class="form signup">
            <div class="form-content">
                <header>SignUp</header>
                <form action="login.php" method="POST">
                    <div class="field inpute-field">
                        <input name="reg-email" type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field inpute-field">
                        <input name="reg-name" type="text" placeholder="Name" class="input">
                    </div>

                    <div class="field inpute-field">
                        <input name="reg-pass" type="password" placeholder="Password" class="password">
                        <!-- <i class='bx bx-hide eye-icon'></i> -->
                    </div>
                    <div class="field inpute-field">
                        <input name="reg-conpass" type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>


                    <div class="field button-field">
                        <button name="signup-btn">SignUp</button>
                    </div>


                </form>

                <div class="form-link">
                    <span>Already have an accoung? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>
            <div class="line"></div>

        </div> -->
        </div>

    </section>
    <script src="JS/script.js"></script>
</body>

</html>

<?php
include "conn.php";
if (isset($_POST["login-btn"])) {
    $emailid = $_POST["email-txt"];
    $password = $_POST["pass-txt"];
   
    $type = $_POST["type"];

    // echo $email;
    // echo $pass;

    $clk1 = "SELECT * FROM user_tbl WHERE EMAIL='$emailid'";
    $clk2 = mysqli_query($conn, $clk1);
    $clk3 = mysqli_num_rows($clk2);

    if ($clk3 != 0) {
        // echo"hello";
        if ($type == "Allumni") {
            
            $cp1 = "SELECT * FROM user_tbl WHERE EMAIL='$emailid' AND PASWORD='$password'";
            $cp2 = mysqli_query($conn, $cp1);
            $cp3 = mysqli_num_rows($cp2);
            if ($cp3 != 0) {
                // echo "Access Granted..!";
                echo "<script>window.location='index.php'</script>";

                $_SESSION["login-user"] = "true";
                $_SESSION["user-email"] = $emailid;
            } else {
                echo '<script type="text/javascript">';
                echo ' alert("Email or Password is Wrong")';  // email or Passwaord is wrong.
                echo '</script>';
            }
    }   elseif ($type == "College") {
            echo "hello";
            $cp1 = "SELECT * FROM clg_tbl WHERE EMAIL='$emailid' AND PASWORD='$password'";
            $cp2 = mysqli_query($conn, $cp1);
            $cp3 = mysqli_num_rows($cp2);
            if ($cp3 != 0) {
                // echo "Access Granted..!";
                echo "<script>window.location='index.php'</script>";
                $_SESSION["login-user"] = "true";
                $_SESSION["user-email"] = $emailid;
            } else {
                echo '<script type="text/javascript">';
                echo ' alert("Email or Password is Wrong")';  // email or Passwaord is wrong.
                echo '</script>';
            }
    }   else {

            $cp1 = "SELECT * FROM dir_tbl WHERE EMAIL='$emailid' AND PASWORD='$password'";
            $cp2 = mysqli_query($conn, $cp1);
            $cp3 = mysqli_num_rows($cp2);
            // echo"hello";
            if ($cp3 != 0) {
                // echo "Access Granted..!";
                echo "<script>window.location='index.php'</script>";
                $_SESSION["login-user"] = "true";
                $_SESSION["user-email"] = $emailid;
            }
            else{
                echo '<script type="text/javascript">';
                echo ' alert("Email or Password is Wrong")';  // email or Passwaord is wrong.
                echo '</script>';
            }
        }
    }
}
if (isset($_POST["signup-btn"])) {
    $regemail = $_POST["reg-email"];
    $regpassword = $_POST["reg-pass"];
    $regconpass = $_POST["reg-conpass"];
    $regname = $_POST["reg-name"];

    if (!($regpassword == $regconpass)) {
        echo "Pass should be same";
    } else {
        $cp1 = "INSERT INTO `user_tbl`(`EMAIL`,`name`, `PASWORD`) VALUES ('$regemail', '$regname','$regpassword')";
        $cp2 = mysqli_query($conn, $cp1);
        if ($cp2) {
            echo '<script type="text/javascript">';
            echo ' alert(" SignUp Successfully")';  //data added..
            echo '</script>';
        } else {
            echo '<script type="text/javascript">';
            echo ' alert(" Error! Try Again")';  //Error!!..
            echo '</script>';
        }
    }
}
?>