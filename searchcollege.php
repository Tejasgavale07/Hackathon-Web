<!-- php fetching data based on graduation year and college subject / course -->

<!DOCTYPE html>
<html lang="en">

<head>


    <link rel="stylesheet" href="CSS/tp_1.css">
    <!-- <link rel="stylesheet" href="search.css" /> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

</head>

<div>
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="logout.php">Logout</a></li>
  
</ul>
</div>
<div class="searchin">
    <!-- This text should be at center -->
<p class="searching" style="color:black";>Enter your required Values to Track Alumni</p>
</div>
<body>

    <div class="container">
        <form class="searchbar" action="searchcollege.php" method="post">
            <div>
                <select class="" name="graduation_year">
                    <option value="0">Graduation Year</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                </select>
                <select class="" name="course">
                    <option value="0">Course</option>
                    <option value="AI">AI</option>
                    <option value="CS">CS</option>
                    <option value="IT">IT</option>
                </select>
            </div>
            <input class="" type="submit" value="Search" />
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
                            <th>Graduation Year</th>
                            <th>Course</th>
                    </thead>


                    <!-- Php for the Arrangement of the Displaying rows in the Table -->

                    <?php

                    $connection = new mysqli("localhost", "root", "", "prayas");

                    // Variables

                    $option_1 = isset($_POST['graduation_year']) ? $_POST['graduation_year'] : false;
                    $option_2 = isset($_POST['course']) ? $_POST['course'] : false;

                    $query2 = " select * from `college_data` where graduation_yr = '$option_1'  AND Branch= '$option_2' ";

                    $result_1 = mysqli_query($connection, $query2);

                    if (mysqli_num_rows($result_1) > 0) {
                        $sn = 1;
                        while ($data = mysqli_fetch_assoc($result_1)) {
                    ?>

                            <!-- Displaying Rows -->
                            <tr>
                                <td><?php echo $sn; ?> </td>
                                <td><?php echo $data['First_name']; ?> <?php echo $data['Last_name']; ?></td>
                                <td><?php echo $data['Gr_No']; ?> </td>
                                <td><?php echo $data['Mobile_no']; ?> </td>
                                <td><?php echo $data['graduation_yr']; ?> </td>
                                <td><?php echo $data['Branch']; ?> </td>
                            </tr>
                        <?php
                            $sn++;
                        }
                    } else { ?>
                        <tr>
                            <td colspan="8">No data found</td>
                        </tr>


                    <?php }
                    $connection->close(); ?>
                </table>
            </div>
        </section>
    </div>

</body>

</html>