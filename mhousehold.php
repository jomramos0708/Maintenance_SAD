<?php
            require("connection.php");

            if(isset($_POST['btnSubmit']))
            {
                 
                $HouseID = $_POST['txtHouseholdID'];
                $Owner = $_POST['txtOwner'];
                $OHouseNo = $_POST['txtOHouseNo'];
                $OStreet = $_POST['txtOStreet'];
                $OPurokNo = $_POST['txtOPurokNo'];
                $NHouseNo = $_POST['txtNHouseNo'];
                $NStreet = $_POST['txtNStreet'];
                $NPurokNo = $_POST['txtNPurokNo'];

                $query = "insert into household values ('$HouseID', '$Owner', 'active', '$OHouseNo', '$NHouseNo', '$OStreet', '$NStreet', '$OPurokNo', '$NPurokNo' )";

               

                $res = mysqli_query($con, $query);
                 if(!$res){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }
                
            
        
       }


        else if(isset($_POST['btnSubmitEdit']))
        {
               $HouseID = $_POST['EtxtHouseholdID'];
                $Owner = $_POST['EtxtOwner'];
                $OHouseNo = $_POST['EtxtOHouseNo'];
                $OStreet = $_POST['EtxtOStreet'];
                $OPurokNo = $_POST['EtxtOPurokNo'];
                $NHouseNo = $_POST['EtxtNHouseNo'];
                $NStreet = $_POST['EtxtNStreet'];
                $NPurokNo = $_POST['EtxtNPurokNo'];

               

                $query = "update household set HouseOwner ='$Owner', Old_HouseNo = '$OHouseNo', New_HouseNo = '$NHouseNo', Old_Street= '$OStreet', New_Street='$NStreet', Old_PurokNo='$OPurokNo', New_PurokNo= '$NPurokNo'   where householdID = '$HouseID'";


                $res = mysqli_query($con, $query);

                if(!$res){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }
        }

        else if(isset($_POST['btnSubmitDelete']))
        {
                $HouseID = $_POST['DtxtHouseholdID'];

                

                $query = "update household set HouseholdStat = 'inactive' where HouseholdID = '$HouseID'";

                $res = mysqli_query($con, $query);

                if(!$res){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }
        }





        //for($i = 1; $i<$ctr; $i++){


            
        //    {
        //        $query = mysqli_query($con, "select * from item_inventory");
        //        $row = mysqli_fetch_array($query);
        //        $a = $row[1];

        //        echo " <div class=form-inline>
        //                    <label for=surname style=margin-left: 20px;>Item ID:</label> 
        //                    <input type=text class=form-control id=surname style=margin-right: 10px; name = txtItemID value = $a >
        //            </div> <br>
                    
         //            ";


          //  }
        //}
        header('location: maintenance_household.php');

?>