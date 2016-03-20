<?php
            require("connection.php");

            if(isset($_POST['btnSubmit']))
            {
                
                $id = $_POST['RtxtID'];
                $ln = $_POST['RtxtSur'];
                $fn = $_POST['RtxtGiven'];
                $mn = $_POST['RtxtMid'];
                
                $bdate = $_POST['a'];
                $bplace = $_POST['RtxtBPlace'];
                $gender = $_POST['gend'];


                $cstatus = $_POST['Rcivilstatus'];
                    
                $religion = $_POST['Rreligion'];
                $dor = "1997-01-01";
                $citizenship = $_POST['pin'];
                $mob = $_POST['RtxtMobile'];
                
                $land = $_POST['Rtxtlandline'];
                $email = $_POST['RtxtEmail'];
                $height = $_POST['RtxtHeight'];
                $weight = $_POST['RtxtWeight'];
                $health = $_POST['RtxtHealth'];

                $curstudy = $_POST['RCurrentEduc'];
                $recentgrd = $_POST['RRecentEduc'];
                $highesteduc = $_POST['RHighestEduc'];
                $litread = $_POST['RLiterateRead'];
                $litwrite = $_POST['RLiterateWrite'];
                $occup = $_POST['ROccupation'];
                $income = $_POST['RIncome'];

                $age = $_POST['age'];

                <script>
                alert("husdafsjfkasf");
                </script>

                $query = "insert into resident_personaldata (ResidentID, LastName, FirstName, MidName, BirthDate, BirthPlace, Gender, CivilStatus, Religion, DateOfResidency, Citizenship, MobileNo, LandlineNo, EmailAdd, Height, Weight, HealthStatus) values ('$id', '$ln', '$fn', '$mn', '$bdate', '$bplace', '$gender', '$cstatus', '$religion', '$dor', '$citizenship', '$mob', '$land', '$email', '$height', '$weight', '$health')";

               

                $res = mysqli_query($con, $query);

if( $age >= 4){
                $query = "insert into resident_education (ResidentID, CurrentEducStat, RecentYear, HighestAttainment) values ('$id', '$curstudy', '$recentgrd', '$highesteduc')";
                $res = mysqli_query($con, $query);
}
else if( $age >= 10){
    $query = "insert into resident_education (ResidentID, CurrentEducStat, RecentYear, LiteracyWrite, LiteracyRead, HighestAttainment) values ('$id', '$curstudy', '$recentgrd', '$litwrite', '$litread', '$highesteduc')";
    $res = mysqli_query($con, $query);
} else if ($age >= 18)
{
       
$query = "insert into resident_education (ResidentID, CurrentEducStat, RecentYear, LiteracyWrite, LiteracyRead, HighestAttainment) values ('$id', '$curstudy', '$recentgrd', '$litwrite', '$litread', '$highesteduc')";
    $res = mysqli_query($con, $query);
    




     $query = "insert into resident_economicstatus (ResidentID, Occupation, IncomePerMonth) values ('$id', '$occup', '$income')";
    $res = mysqli_query($con, $query);
}
   

                


               
                


                if(!$res){
                    die("query failed " . mysqli_error($con));
                }
                else{
                    echo "data updated";
                }

                header('location: maintenance_resident.php');
            }


        
        ?>




        