<?php
    $inputname =$_POST['inputname'];
    $addressin =$_POST['addressin'];
    $getmail = $_POST['getmail'];
    $numb = $_POST['numb'];
    $inevent = $_POST['inevent'];
    $edate = $_POST['edate'];

    $severname= "localhost";
    $username = "root";
    $password ="";
    $dbase ="form";
    $conn = new mysqli($servername,$prt, $username, $password, $dbase);


   if(isset($_POST['submit'])){
    $sql = "INSERT INTO `details`(`inputname`, `addressin`, `getmail`, `numb`, `inevent`, `edate`) VALUES ('$inputname','$addressin','$getmail','$numb','$inevent','$edate')";
      echo "Submission is successful..";
   }
   else{
      echo "Not Successful ...";
   }

?>

