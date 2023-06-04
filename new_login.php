<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/SignUp</title>

    <link rel="stylesheet" href="CSS/admin_style.css">


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

</head>

<body>
    <section class="container forms">

        <!-- ---------- login form ----------- -->

        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="#" method="POST">
                    <div class="field inpute-field">
                        <input name="email-txt" type="text" placeholder="Email" class="input">
                    </div>

                    <div class="field inpute-field">
                        <input name="pass-txt" type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password ?</a>
                    </div>


                    <div class="field button-field">
                        <button name="login-btn">Login</button>
                    </div>
                    


                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="testlogin.php">SignUp</a> </span>
                    <!-- <a href="testlogin.php">sign up</a> -->
                </div>
            </div>
            
        

    </section>
    <script src="js/script.js"></script>
</body>

</html>


<?php
    include "conn.php";
    if(isset($_POST["login-btn"])){
        $emailid=$_POST["email-txt"];
        $password=$_POST["pass-txt"];

        // echo $email;
        // echo $pass;

        $clk1 = "SELECT * FROM credentials WHERE email='$emailid'";
        $clk2 = mysqli_query($conn,$clk1);
        $clk3 = mysqli_num_rows($clk2);
        
        if($clk3 !=0){
            $cp1 = "SELECT * FROM credentials WHERE email='$emailid' AND password='$password'";
            $cp2 = mysqli_query($conn,$cp1);
            $cp3 = mysqli_num_rows($cp2);
            if($cp3 !=0){
                // echo "Access Granted..!";
                // echo "<script>window.location='ChatApp/users.php'</script>";
                echo "<script>window.location='alumni_ui.html'</script>";
                
                $_SESSION["login-user"] = "true";
                $_SESSION["user-email"] = $emailid;
                
                
            }else{
                echo '<script type="text/javascript">';
                echo ' alert("Email or Password is Wrong")';  // email or Passwaord is wrong.
                echo '</script>';
            }
        }else{
            
            echo '<script type="text/javascript">';
            echo ' alert(" Error! User Do-not Exist")';  // User Do not exist
            echo '</script>';
        }
    }   
    
    
?>


    </section>
    <script src="js/script.js"></script>
</body>

</html>

<?php
    //include "conn.php";
    if(isset($_POST["login-btn"])){
        $emailid=$_POST["email-txt"];
        $password=$_POST["pass-txt"];

        if($emailid == "maahi@gmail.com"){
            if($password == "maahi"){
                echo "<script>window.location='index.php'</script>";
            }
            else{
                echo "incorrect password";
            }
        }
        else{
            echo "User not found";
        }

        
    }   
    
?>









