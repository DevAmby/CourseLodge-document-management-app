<?php
date_default_timezone_set("Africa/Lagos");
$con= mysqli_connect("localhost","root","");
if($con)
{
    mysqli_select_db($con,"doc_db");
}
 else {
     echo "could not connect to the database".die(mysqli_error($con));
}
?>
