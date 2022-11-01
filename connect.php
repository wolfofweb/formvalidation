<html>
    <head>
         <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <style>
        body{
            background-image:url('php-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:1.5rem;
            font-weight:600;
            margin-bottom:7rem;
        }
    </style>
        </head>
</html>
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname='course';
    $conn=new mysqli($servername,$username,$password,$dbname);
//If submit button is clicked
if(isset($_POST['submit']))
{
    //Get values into variables by their name
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $gender=$_POST['gender'];
    $passsedOut=$_POST['passedOut'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $course=$_POST['course'];
    $classPreference=$_POST['classPreference'];
    $education=$_POST['education'];
    //Insert Values into MySQL 
    $sql = "INSERT INTO data(firstName,lastName,gender,passedOut,email,mobile,course,classPreference,education)VALUES('$firstName','$lastName','$gender','$passsedOut','$email','$mobile','$course','$classPreference','$education')";
//To check whether data is inserted properly or not
if ($conn->query($sql) === TRUE) {
    echo "Your Details have been"."<br>"."submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//close the connection after data entry
$conn->close();
}
?>