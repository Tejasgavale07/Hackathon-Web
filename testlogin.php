

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/SignUp</title>

    <link rel="stylesheet" href="CSS/admin_style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
<style>
    form{
        border: 2px solid black;
        padding: 30px;
        border-radius: 10px;
        background-color: white;
        Box-shadow:0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }
    .clg{
        width: 80%;
    }
    body{
        background-color: #303054;
    }
</style>
</head>

<body>
    
git add README.md

        <div class="">
        
        <form action="testlogin.php" method="post">

            <h2>ALumni Registeration Form</h2>
    
            <label for="fname" id="fname">First Name : </label>
            <input type="text" placeholder="Enter Your First Name : " class="inp_field" name="fname">
    
            <br>
    
            <label for="lname" id="lname">Last Name : </label>
            <input type="text" placeholder="Enter Your Last Name : " class="inp_field" name="lname">
    
            <br>
    
            <label for="mobileno">Mobile Number : </label>
            <input type="tel" placeholder="Enter Your Mobile Number : " class="inp_field" name="mobileno"> 
    
            <br>

            <label for="email">Email : </label>
            <input type="email" placeholder="Enter Your Email : " class="inp_field" name="email"> 
    
            <br>
    
            <label for="college_name" >College Name : </label>
            <Select name="college_name" class="clg">
                <option value="Bhavan's College of Arts">Bhavan's College of Arts</option>
                <option value="Bunts Sangha's S.M.Shetty College of Science">Bunts Sangha's S.M.Shetty College of Science</option>
                <option value="B. K. Birla College of Arts">B. K. Birla College of Arts</option>
                <option value="C. H. M. College">C. H. M. College</option>
                <option value="D. G. Ruparel College of Arts, Science and Commerce">D. G. Ruparel College of Arts, Science and Commerce</option>
                <option value="Elphinstone College, Kala Ghoda">Elphinstone College, Kala Ghoda, Fort</option>
                <option value="Guru Nanak Khalsa College ">Guru Nanak Khalsa College (King's Circle), Matunga</option>
                <option value="H.R. College of Commerce and Economics">H.R. College of Commerce and Economics, Churchgate</option>
                <option value="Jai Hind College">Jai Hind College, Churchgate</option>
                <option value="Kalasadan">Kalasadan, Sion</option>
                <option value="Kishinchand Chellaram College">Kishinchand Chellaram College, Churchgate</option>
                <option value="R. D. National College">R. D. National College,Bandra West</option>
                <option value="M. M. K. College">M. M. K. College, Bandra West</option>
                <option value="Kirti M. Doongursee College">Kirti M. Doongursee College, Dadar West</option>
                <option value="Royal College of Science, Arts and Commerce">SIES College of Arts, Science, and Commerce, Sion WestRoyal College of Science, Arts and Commerce, Mira Road</option>
                <option value="Dwarkadas J. Sanghvi College of Engineering">Dwarkadas J. Sanghvi College of Engineering, Vile Parle West</option>
                <option value="Institute of Chemical Technology">Institute of Chemical Technology, Matunga</option>
                <option value="Narsee Monjee Institute of Management Studies">Narsee Monjee Institute of Management Studies, Juhu</option>
                <option value="ICE College of Hotel Management and Catering Technology">ICE College of Hotel Management and Catering Technology, Andheri</option>
                <option value="Shri M.D. Shah Mahila College of Arts and Commerce">Shri M.D. Shah Mahila College of Arts and Commerce, Malad West</option>
                <option value="SIES (Nerul) College of Arts, Science and Commerce">SIES (Nerul) College of Arts, Science and Commerce, Nerul</option>
                <option value="S.K. Somaiya College of Arts & Sciences">S.K. Somaiya College of Arts & Sciences, Vidyavihar</option>
                <option value="South Indians' Welfare Society College">South Indians' Welfare Society College, Wadala</option>
                <option value="St. Andrew's College">St. Andrew's College, Bandra</option>
                <option value="St. Xavier's College">St. Xavier's College, Dhobitalao, Fort</option>
                <option value="Swami Vivekanand International School">Swami Vivekanand International School</option>
                <option value="Sydenham College of Commerce and Economics">Sydenham College of Commerce and Economics</option>
                <option value="Thakur College of Science and Commerce">Thakur College of Science and Commerce, Thakur Village, Kandivali</option>
                <option value="Tolani College of Commerce">Tolani College of Commerce, Andheri</option>
                <option value="Vani Vidyalaya High School and Junior College">Vani Vidyalaya High School and Junior College, Mulund West</option>
                <option value="Saraswati College of engineering ">Saraswati College of Engineering Kharghar</option>
                <option value="Wilson College">Wilson College, Girgaon</option></option>
            </Select>
    
            <br>
    
            <label for="branch" id="branch">Branch: </label>
            <input type="text" placeholder="Enter Your Branch" class="inp_field" name="branch">
    
            <br>
    
            <label for="grno" id="grno">GR_NO : </label>
            <input type="text" placeholder="Enter Your College GR_NO : " class="inp_field" name="grno">
    
            <br>
    
            <label for="graduate_yr" id="graduate_yr">Graduate Year : </label>
            <input type="text" placeholder="Enter Your Passing Year : " class="inp_field" name="graduate_yr">
    
            <br>
    
            <label for="occupation" id="occupation">Occupation : </label>
            <input type="text" placeholder="Enter Your Current Occupation : " class="inp_field" name="occupation">
    
    
            <br>
    
            <label for="city" id="city">City : </label>
            <input type="text" placeholder="Enter Your Address : " class="inp_field" name="city">
            
            <br>

            <label for="password" id="password">Password : </label>
            <input type="password" placeholder=" Password " class="inp_field" name="password">
    
            <br>

            <label for="confirm_password" id="confirm_password">Confirm Password : </label>
            <input type="password" placeholder=" Confirm Password " class="inp_field" name="confirm_password">
    
            <br>
    
            <button type="submit" value="Submit"> Submit</button>
    
            <br>
            <div class="form-link">
                    <span>Don't have an account? <a href="new_login.php">Login</a> </span>
                    <!-- <a href="testlogin.php">sign up</a> -->
                </div>
            
    
        </form>

        <?php

        // $connection = mysqli("localhost","root","","");

        // Creating Variables

        $fname = "";
        $lname = "";
        $mobileno = "";
        $email = "";
        $branch = "";
        $grno = "";
        $graduate_yr = "";
        $occupation = "";
        $address = "";
        $marks = "";
        $college_name = "";
        $city = "";
        $pass = "";
        $confirm_pass = "";


        if (isset($_POST['fname'])){
            $fname = $_POST['fname'];
        }

        if(isset($_POST['lname'])){
            $lname = $_POST['lname'];
        }

        if(isset($_POST['mobileno'])){
            $mobileno = $_POST['mobileno'];
        }

        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }

        if(isset($_POST['branch'])){
            $branch = $_POST['branch'];
        }

        if(isset($_POST['grno'])){
            $grno = $_POST['grno'];
        }

        if(isset($_POST['graduate_yr'])){
            $graduate_yr = $_POST['graduate_yr'];
        }

        if(isset($_POST['occupation'])){
            $occupation = $_POST['occupation'];
        }

        if(isset($_POST['address'])){
            $address = $_POST['address'];
        }

        if(isset($_POST['city'])){
            $city = $_POST['city'];
        }

        if(isset($_POST['password'])){
            $pass = $_POST['password'];
        }

        if(isset($_POST['confirm_password'])){
            $confirm_pass = $_POST['confirm_password'];
        }


        $college_name = isset($_POST['college_name']) ? $_POST['college_name'] : false;

        // Making Connections


       $con1 = new mysqli("localhost","root","","prayas");

    //    $con2 = new mysqli("localhost","root","","prayas");

    //    $con3 = new mysqli("localhost","root","","prayas");

        
       $query_1 = "select * from `college_data1`";

       $result_1= mysqli_query($con1,$query_1);

 

        $query_2 = "INSERT INTO `main_alumni_data` (first_name,last_name,email,gr_no,mobile_no,branch,graduation_year,college_name,occupation,city) values ('$fname','$lname','$email','$grno','$mobileno','$branch','$graduate_yr','$college_name','$occupation','$city')";

    

    //    $query_3 = "INSERT INTO `credentials` (`email`,`password`) VALUES ('$email','$pass')";
       $query_3 = "insert into `credentials` (`email`,`password`) values ('$email','$pass')";
       

       while($data = mysqli_fetch_assoc($result_1)){

        if(($fname== $data['fname']) && ($lname == $data['lname']) && ($grno == $data['gr_no']) && ($college_name == $data['college_name']) && ($graduate_yr == $data['graduation_yr'])){

            mysqli_query($con1, $query_2);
            echo "You are Authenticated and The Data is Inserted";
            echo "<script>window.location='new_login.php'</script>";
            
            break;
        }
       
       }
    //    if($pass == $confirm_pass){
    //     mysqli_query($con1,$query_3);
    //    }

       //while($data = mysqli_fetch_assoc($result_1)){

        if($pass == $confirm_pass){
            mysqli_query($con1,$query_3);
           };
           
       



        ?>
    </div>


    <script src="js/script.js"></script>
</body>

</html>









