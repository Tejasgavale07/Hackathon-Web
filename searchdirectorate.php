<!-- php fetching data based on graduation year and college subject / course -->

<!DOCTYPE html>
<html lang="en">

<head>


    <link rel="stylesheet" href="CSS/tp_1.css">
    <!-- <link rel="stylesheet" href="search.css" /> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Directorate</title>

</head>
<div>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="logout.php">Logout</a></li>
       
</div>
<div class="searchin">
    <!-- This text should be at center -->
    <p class="searching" style="color:black";>Enter your required Values to Track Alumni for Directorate</p>
</div>

<body>

    <div class="container">
        <form class="searchbar" action="searchdirectorate.php" method="post">
            <div>
                <select class="" name="graduation_year">
                    <option value="0">Graduation Year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
                
                <select class="" name="college_name">
                    <option value="0">College Name</option>
                    <option value="SCOE">SCOE</option>
                    <option value="Kamisato Estate">Kamisato Estate</option>
                    <option value="Terna">Terna</option>
                    <option value="IIT">IIT</option>
                    <option value="Amity">Amity</option>
                    <option value="Oxford">Oxford</option>
                </select>
            </div>
            <input class="" type="submit" value="submit" />
        </form>

        <section>
            <!-- Main PHP -->
            <!-- Printing the Table -->
            <div class="table-wrapper">

                <table id="tbl" class="fl-table">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Full Name</th>
                            <th>Gr_No</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>College Name</th>
                            <th>Branch</th>
                            <th>Graduation year</th>
                            
                            <th>Occupation</th>
                    </thead>


                    <!-- Php for the Arrangement of the Displaying rows in the Table -->

                    <?php

                    $connection = new mysqli("localhost", "root", "", "prayas");

                    // Variables

                    $option_1 = isset($_POST['graduation_year']) ? $_POST['graduation_year'] : false;
                    //$option_2 = isset($_POST['branch']) ? $_POST['branch'] : false;
                    $option_2 = isset($_POST['college_name']) ? $_POST['college_name'] : false;

                    $query2 = " select * from `alumni` where graduation_yr = '$option_1'  AND college_name= '$option_2' ";

                    // echo $query2;

                    $result_1 = mysqli_query($connection, $query2);

                    // echo $result_1;

                    if (mysqli_num_rows($result_1) > 0) {
                        $sn = 1;
                        while ($data = mysqli_fetch_assoc($result_1)) {
                    ?>

                            <!-- Displaying Rows -->
                            <tr>
                                <td><?php echo $sn; ?> </td>
                                <td><?php echo $data['fname']; ?> <?php echo $data['lname']; ?></td>
                                <td><?php echo $data['gr_no']; ?> </td>
                                <td><?php echo $data['mobile_no']; ?> </td>
                                <td><?php echo $data['email']; ?> </td>
                                <td><?php echo $data['state']; ?> </td>
                                <td><?php echo $data['college_name']; ?> </td>
                                <td><?php echo $data['branch']; ?> </td>
                                <td><?php echo $data['graduation_yr']; ?> </td>
                                
                                <td><?php echo $data['occupation']; ?> </td>
                            </tr>
                        <?php
                            $sn++;
                        }
                    } else { ?>
                        <tr>
                            <td colspan="10">No data found</td>
                        </tr>


                    <?php }
                    $connection->close(); ?>
                </table>
            </div>
        </section>
    </div>

</body>

</html>