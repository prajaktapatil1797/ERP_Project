<?php
 require_once "../config/config.php";
//$con = mysqli_connect("localhost","pesrsxttfd","Demo@123","pesrsxttfd");
  
   $get_connection=new connectdb;
   $db=$get_connection->connect();

   if (mysqli_connect_errno($db)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $Client=$_POST["Client"];
   $Country=$_POST["Country"];
   $SerT=$_POST["ServiceT"];
   $Price=$_POST["Price"];
   $SLA=$_POST["SLA"];
   $ServiceN=$_POST["ServiceN"];
   $Sr=0;
   //echo "console.log($Client)";
   $sql = "UPDATE `client` SET `country`='$Country',
                                `Service_Type`='$SerT',`Service_Name`='$ServiceN',
                                `Price`='$Price',`SLA`='$SLA' WHERE `Client_Name`='$Client'";
   echo "console.log($sql)";                           
   $result = mysqli_query($db,$sql);                 
   
?>
   
  