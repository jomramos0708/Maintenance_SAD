<?php
            require("connection.php");

            if(isset($_POST['btnSubmit']))
            {
              
                $oid = $_POST['txtOID'];
                $rid = $_POST['txtRID'];
                $cate = $_POST['txtCategory'];
                $pos = $_POST['txtPosition'];

                $query = "insert into personnel(PersonnelID, ResidentID, Category, Position, Status) values ('$rid','$cate', '$pos', 'active')";

               //$query = "insert into personnel values ('o006', 'r001', 'treasurer', 'active')";

                $res = mysqli_query($con, $query);
                if(!$res){
      ?>

                    <script type=text/javascript>window.prompt("RESIDENT ID DOES NOT EXIST!"); </script>
      <?php
                }
                else{
                    echo "data updated";
                }
            
        }
        


        else if(isset($_POST['btnSubmitEdit']))
        {

                $oid = $_POST['Eoid'];
                $rid = $_POST['Erid'];
                $pos = $_POST['Epos'];

                $query = "update personnel set ResidentID ='$rid', OfficialPosition = '$pos', OfficialStatus = 'active' where OfficialID = '$oid'";

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

                $oid = $_POST['Doid'];
                $rid = $_POST['Drid'];
                $pos = $_POST['Dpos'];
                $stat = $_POST['Dstat'];

                $query = "update officials set OfficialStatus = 'inactive' where OfficialID = '$oid'";

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
        header('location: maintenance_official.php');

?>