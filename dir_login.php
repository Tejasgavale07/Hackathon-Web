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
    <title>Hello, Boxicons!</title>

</head>

<body>
    <section class="container forms">

        <!-- ---------- login form ----------- -->

        <div class="form login">
            <div class="form-content">
                <header>Directorate Login</header>
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

            </div>
            
        </div>


        


    </section>
    <script src="js/script.js"></script>
</body>

</html>

<?php
    //include "conn.php";
    if(isset($_POST["login-btn"])){
        $emailid=$_POST["email-txt"];
        $password=$_POST["pass-txt"];

        if($emailid == "eknath@gmail.com"){
            if($password == "eknath"){
                echo "<script>window.location='directorate_ui.html'</script>";
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









