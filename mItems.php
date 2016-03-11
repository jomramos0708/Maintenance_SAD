<?php
            require("connection.php");

            if(isset($_POST['btnSubmit']))
            {
                if(empty($_POST['txtItemID']) || empty($_POST['txtItemDescription']) || empty($_POST['txtQuantity'])|| empty($_POST['txtStock']))
        {
?>

        <script> alert ("Fill in the textfields");
        </script>
<?php

        }
        else{
                $itemID = $_POST['txtItemID'];
                $itemDesc = $_POST['txtItemDescription'];
                $quantity = $_POST['txtQuantity'];
                $stock = $_POST['txtStock'];

                $query = "insert into item_inventory values ('$itemID', '$itemDesc', '$quantity', '$stock', 'active')";

               

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
                $itemID = $_POST['EtxtItemID'];
                $itemDesc = $_POST['EtxtItemName'];
                $quantity = $_POST['EtxtItemQty'];
                $stock = $_POST['EtxtItemStock'];

                

                $query = "update item_inventory set ItemDesc ='$itemDesc', ItemQuantity = '$quantity', itemAvailableQty = '$stock' where ItemID = '$itemID'";

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
                $itemID = $_POST['DtxtItemID'];
                $itemDesc = $_POST['DtxtItemName'];
                $quantity = $_POST['DtxtItemQty'];
                $stock = $_POST['DtxtItemStock'];

                

                $query = "update item_inventory set ItemStatus ='inactive' where ItemID = '$itemID'";

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
        header('location: maintenance_items.php');

?>