<?php
            require("connection.php");

            if(isset($_POST['btnSubmit']))
            {
                $itemID = $_POST['txtItemID'];
                $itemDesc = $_POST['txtItemDescription'];
                $quantity = $_POST['txtQuantity'];
                $stock = $_POST['txtStock'];

                //$query = "insert into item_inventory (ItemDesc, ItemQuantity, ItemAvailableQty, ItemStatus) values ('$itemDesc', '0', '0', 'active')";

                $query = "INSERT INTO bremsdb.item_inventory (ItemID, ItemDesc, ItemQuantity, ItemAvailableQty, ItemStatus) VALUES (NULL, '$itemDesc', '0', '0', 'active');";
               

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