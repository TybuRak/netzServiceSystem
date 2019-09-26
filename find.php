<html>
<head>
<title>Historia</title>
</head>
<body>
TEST
<?php
$query = mysqli_query($con, "SELECT * FROM netzservicesystem WHERE sn='".$sn."'");

if (!$query)
{
    die('Error: ' . mysqli_error($con));
}

if(mysqli_num_rows($query) > 0){

    echo "email already exists";

}else{

    // do something

}
?>
</body>
</html>