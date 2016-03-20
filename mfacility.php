<?php
            require("connection.php");

            if(isset($_POST['btnSubmit']))
            {
               
                $facID = $_POST['txtFacID'];
                $facCAte = $_POST['txtFacCate'];
                $facName = $_POST['txtFacName'];
                $facAddress = $_POST['txtFacAddress'];

                $query = "insert into facility values ('$facID', '$facCAte', '$facName', '$facAddress', 'active')";

               

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
                $facID = $_POST['EtxtFacID'];
                $facCAte = $_POST['EtxtFacCate'];
                $facName = $_POST['EtxtFacName'];
                $facAddress = $_POST['EtxtFacAddress'];

                

                $query = "update facility set FacilityCategory ='$facCAte', FacilityDesc = '$facName', Address = '$facAddress' where FacilityID = '$facID'";

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
                $facID = $_POST['DtxtFacID'];
                $facCAte = $_POST['DtxtFacCate'];
                $facName = $_POST['DtxtFacName'];
                $facAddress = $_POST['DtxtFacAddress'];

                

                $query = "update facility set FacilityStatus = 'inactive' where FacilityID = '$facID'";

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
        header('location: maintenance_facility.php');

?>