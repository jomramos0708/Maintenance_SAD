<?php
            require("connection.php");

            if(isset($_POST['btnSubmit']))
            {
                if(empty($_POST['txtFamID']) || empty($_POST['txtFamCate']) || empty($_POST['txtFamHeadID']))
        {
?>

        <script> alert ("Fill in the textfields");
        </script>
<?php

        }
        else{
                $famID = $_POST['txtFamID'];
                $famCate = $_POST['txtFamCate'];
                $famHeadID = $_POST['txtFamHeadID'];

                $query = "insert into family values ('$famID', '$famCate', '$famHeadID', 'active')";

               

                $res = mysqli_query($con, $query);
                if(!$res){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }
            }
        }
        


        else if(isset($_POST['btnSubmitEdit']))
        {
                $famID = $_POST['EtxtFamID'];
                $famCate = $_POST['EtxtFamCate'];
                $famHeadID = $_POST['EtxtFamHeadID'];

                

                $query = "update family set FamilyType ='$famCate', FamilyHeadID = '$famHeadID' where FamilyID = '$famID'";

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
                $famID = $_POST['DtxtFamID'];
                $famCate = $_POST['DtxtFamCate'];
                $famHeadID = $_POST['DtxtFamHeadID'];

                

                $query = "update family set FamilyStatus = 'inactive' where FamilyID = '$famID'";

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
        header('location: maintenance_family.php');

?>