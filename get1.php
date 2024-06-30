<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php parts</title>
</head>
<body>
    <?php
    $name=$_GET["name"];
    $Fname=$_GET["Fname"];
    $age=$_GET["age"];
    $mobile=$_GET["mobile"];
    $email=$_GET["email"];
    echo "<h1>Your form has been submitted successfully </h1>";
echo "<h3>Name:$name<br></h3>";
echo "<h3>Fathers Name:$fname<br></h3>";
echo "<h3>Age:$age<br></h3>";
echo "<h3>Mobile Numbers:$mobile<br></h3>";
echo "<h3>Email:$email<br></h3>";
if($_GET["gender"]="male"){
    echo "<h3>Gender:Male</h3>";

}
?>
</body>
</html>