<?php
            require("connection.php");

            if(isset($_POST['btnSubmit']))
            {
               
                $docID = $_POST['txtDocID'];
                $docDesc = $_POST['txtDocDesc'];
                $fee = $_POST['txtFee'];

                $query = "insert into document values ('$docID', '$docDesc', '$fee', 'active')";

               

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
                $docID = $_POST['EtxtDocID'];
                $docDesc = $_POST['EtxtDocDesc'];
                $fee = $_POST['EtxtFee'];

                $query = "update document set DocDescription ='$docDesc', Price = '$fee' where DocID = '$docID'";

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
                $docID = $_POST['DtxtDocID'];
                $docDesc = $_POST['DtxtDocDesc'];
                $fee = $_POST['DtxtFee'];

                $query = "update document set DocStatus ='inactive' where DocID = '$docID'";

                $res = mysqli_query($con, $query);

                if(!$res){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }
        }




        header('Location: maintenance_docu.php')

?>