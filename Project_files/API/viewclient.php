<?php

require_once "../config/config.php";

#---------------------<---Code Written and Designed By Priyanshu Raghuvanshi--->-----------------------#

$get_connection=new connectdb;
$db=$get_connection->connect();

class country
{
    
    public function __construct($db)
    {
    $this->conn=$db;
    }

   public function update_details()
   {
 
            $check='SELECT * FROM client';
            $result=$this->conn->query($check);
            if($result->num_rows>0)
            {
                $i=0;
                while($row = $result->fetch_assoc())
                {
                    $country[$i]['Id']=$row['Id'];
                    $country[$i]['Company']=$row['Company'];
                    $country[$i]['User_name']=$row['User_name'];
                    $country[$i]['first_name']=$row['first_name'];
                    $country[$i]['Last_name']=$row['Last_name'];
                    $country[$i]['Client_Name']=$row['Client_Name'];
                    $country[$i]['Address']=$row['Address'];
                    $country[$i]['postal_code']=$row['postal_code'];
                    $country[$i]['about_me']=$row['about_me'];
                    $country[$i]['password']=$row['password'];
                    $country[$i]['Profile']=$row['Profile'];
                    $country[$i]['Client_Code']=$row['Client_Code'];
                    $country[$i]['Client_SPOC']=$row['Client_SPOC'];
                    $country[$i]['country']=$row['country'];
                    $country[$i]['State']=$row['State'];
                    $country[$i]['city']=$row['city'];
                    $country[$i]['Zip_Code']=$row['Zip_Code'];
                    $country[$i]['Contact_Number']=$row['Contact_Number'];
                    $i++;
                }
                echo json_encode($country);
            }
            else {
                echo "0 results";
            }
            
            

    }
}
            $basic_details=new country($db);
            $basic_details->update_details();