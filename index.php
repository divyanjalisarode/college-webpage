<?php

        // Create connection
        $conn = new mysqli('localhost','root','', 'student');

        // Check connection
        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
        }

        // Check if the form was submitted
        if (isset($_POST["submit"])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql="INSERT INTO student VALUES('$name','$email')";
            $result=mysqli_query($conn,$sql);

            // Execute the statement
            if ($result) {
                echo "YOU HAVE SUCCESSFULLY ENTERED YOUR NAME AND EMAIL. OUR COLLEGE STAFF WILL CONTACT YOU FOR FURTHER DETAILS. THANK YOU FOR CHOOSING US!!!!!";
            } else {
                echo "Error ";
            }
        }
    ?>
