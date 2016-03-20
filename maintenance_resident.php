<SCRIPT LANGUAGE="JavaScript1.2"> <!--

function myAgeValidation() {

    var lre = /^\s*/;
    var datemsg = "";
   
    var inputDate = document.as400samplecode.myDate.value;
    inputDate = inputDate.replace(lre, "");
    document.as400samplecode.myDate.value = inputDate;
    datemsg = isValidDate(inputDate);
        if (datemsg != "") {
            document.getElementById('RtxtAge').value = (datemsg);
            return;
        }
        else {
            //Now find the Age based on the Birth Date
            getAge(new Date(inputDate));
        }

}

function getAge(birth) {

    var today = new Date();
    var nowyear = today.getFullYear();
    var nowmonth = today.getMonth();
    var nowday = today.getDate();

    var birthyear = birth.getFullYear();
    var birthmonth = birth.getMonth();
    var birthday = birth.getDate();

    document.getElementById('a').value = birthyear + "-" + (birthmonth+1) + "-" + birthday;
    alert(document.getElementById('a').value);

    var age = nowyear - birthyear;
    var age_month = nowmonth - birthmonth;
    var age_day = nowday - birthday;
   
    if(age_month < 0 || (age_month == 0 && age_day <0)) {
            age = parseInt(age) -1;
        }
    document.getElementById('RtxtAge').value = (age);
    if(age < 4)
    {

        document.getElementById('RCurrentEduc').disabled = true;
        document.getElementById('RRecentEduc').disabled = true;
        document.getElementById('RHighestEduc').disabled = true;
        document.getElementById('RLiterateRead').disabled = true;
        document.getElementById('RLiterateWrite').disabled = true;
        document.getElementById('ROccupation').disabled = true;
        document.getElementById('RIncome').disabled = true;                                        
                                                
    }
    else if (age < 10)
    {
        document.getElementById('RCurrentEduc').disabled = false;
        document.getElementById('RRecentEduc').disabled = false;
        document.getElementById('RHighestEduc').disabled = true;
        document.getElementById('RLiterateRead').disabled = true;
        document.getElementById('RLiterateWrite').disabled = true;
        document.getElementById('ROccupation').disabled = true;
        document.getElementById('RIncome').disabled = true; 
    }
    else if (age < 18)
    {
        document.getElementById('RCurrentEduc').disabled = false;
        document.getElementById('RRecentEduc').disabled = false;
        document.getElementById('RHighestEduc').disabled = true;
        document.getElementById('RLiterateRead').disabled = false;
        document.getElementById('RLiterateWrite').disabled = false;
        document.getElementById('ROccupation').disabled = true;
        document.getElementById('RIncome').disabled = true; 
    }
    else
    {
        document.getElementById('RCurrentEduc').disabled = false;
        document.getElementById('RRecentEduc').disabled = false;
        document.getElementById('RHighestEduc').disabled = true;
        document.getElementById('RLiterateRead').disabled = false;
        document.getElementById('RLiterateWrite').disabled = false;
        document.getElementById('ROccupation').disabled = false;
        document.getElementById('RIncome').disabled = false; 
    }
   
    if ((age == 18 && age_month <= 0 && age_day <=0) || age < 18) {
    }
    

}

function isValidDate(dateStr) {

   
    var msg = "";
    // Checks for the following valid date formats:
    // MM/DD/YY   MM/DD/YYYY   MM-DD-YY   MM-DD-YYYY
    // Also separates date into month, day, and year variables

    // To require a 2 & 4 digit year entry, use this line instead:
    //var datePat = /^(\d{1,2})(\/|-)(\d{1,2})\2(\d{2}|\d{4})$/;
    // To require a 4 digit year entry, use this line instead:
    var datePat = /^(\d{1,2})(\/|-)(\d{1,2})\2(\d{4})$/;

    var matchArray = dateStr.match(datePat); // is the format ok?
    if (matchArray == null) {
        msg = "Date is not in a valid format.";
        return msg;
    }

    month = matchArray[1]; // parse date into variables
    day = matchArray[3];
    year = matchArray[4];

   
    if (month < 1 || month > 12) { // check month range
        msg = "Month must be between 1 and 12.";
        return msg;
    }

    if (day < 1 || day > 31) {
        msg = "Day must be between 1 and 31.";
        return msg;
    }

    if ((month==4 || month==6 || month==9 || month==11) && day==31) {
        msg = "Month "+month+" doesn't have 31 days!";
        return msg;
    }

    if (month == 2) { // check for february 29th
    var isleap = (year % 4 == 0 && (year % 100 != 0 || year % 400 == 0));
    if (day>29 || (day==29 && !isleap)) {
        msg = "February " + year + " doesn't have " + day + " days!";
        return msg;
    }
    }

    if (day.charAt(0) == '0') day= day.charAt(1);
   
    //Incase you need the value in CCYYMMDD format in your server program
    //msg = (parseInt(year,10) * 10000) + (parseInt(month,10) * 100) + parseInt(day,10);
   
    return msg;  // date is valid
}

</SCRIPT>




<script type = text/javascript>
    function getHeight()
    {
        
        var c =  + (document.getElementById('RtxtWeight').value/(document.getElementById('RtxtHeight').value*document.getElementById('RtxtHeight').value));
        var n = c.toFixed(2);
        document.getElementById('RtxtBMI').value = n;

        
        if(n < 16){
            document.getElementById('RtxtHealth').value = "Severely Underweight";}
        else if (n >= 16 && n < 18.5){
            document.getElementById('RtxtHealth').value = "Underweight";}
        else if (n >= 18.5 && n < 25){
            document.getElementById('RtxtHealth').value = "Normal";}
       else if (n >= 25 && n < 30){
            document.getElementById('RtxtHealth').value = "Overweight";}
        else if (n >= 30){
            document.getElementById('RtxtHealth').value = "Obese";}

        


    }

    function getWeight()
    {
        var c =  + (document.getElementById('RtxtWeight').value/(document.getElementById('RtxtHeight').value*document.getElementById('RtxtHeight').value));
        var n = c.toFixed(2);
        document.getElementById('RtxtBMI').value = n;


       
        
        if(n < 16){
            document.getElementById('RtxtHealth').value = "Severely Underweight";}
        else if (n >= 16 && n < 18.5){
            document.getElementById('RtxtHealth').value = "Underweight";}
        else if (n >= 18.5 && n < 25){
            document.getElementById('RtxtHealth').value = "Normal";}
       else if (n >= 25 && n < 30){
            document.getElementById('RtxtHealth').value = "Overweight";}
        else if (n >= 30){
            document.getElementById('RtxtHealth').value = "Obese";}

        
      
        
    }

    function haha()
    {
        if(document.getElementById('ch4').checked)
        {
            document.getElementById('ch1').checked = false;
            document.getElementById('ch2').checked = false;
            document.getElementById('ch3').checked = false;
        }
    }

    function hehe()
    {
        if(document.getElementById('ch1').checked || 
            document.getElementById('ch2').checked || 
            document.getElementById('ch3').checked)
        {
            document.getElementById('ch4').checked = false;
        }
        else if(document.getElementById('ch4').checked   )
        {
            document.getElementById('ch1').checked = false;
            document.getElementById('ch2').checked = false;
            document.getElementById('ch3').checked = false;
        }
    }

    function hihi()
    {
        if(document.getElementById('ch5').checked || 
            document.getElementById('ch6').checked || 
            document.getElementById('ch7').checked || 
            document.getElementById('ch8').checked || 
            document.getElementById('ch9').checked || 
            document.getElementById('ch10').checked || 
            document.getElementById('ch11').checked || 
            document.getElementById('ch12').checked || 
            document.getElementById('ch13').checked || 
            document.getElementById('ch14').checked || 
            document.getElementById('ch15').checked)
        {
            document.getElementById('ch16').checked = false;
        }
    }

    function hoho()
    {
        if(document.getElementById('ch16').checked)
        {
            document.getElementById('ch5').checked = false;
            document.getElementById('ch6').checked = false;
            document.getElementById('ch7').checked = false;
            document.getElementById('ch8').checked = false;
            document.getElementById('ch9').checked = false;
            document.getElementById('ch10').checked = false;
            document.getElementById('ch11').checked = false;
            document.getElementById('ch12').checked = false;
            document.getElementById('ch13').checked = false;
            document.getElementById('ch14').checked = false;
            document.getElementById('ch15').checked = false;
        }
    }

    function lol()
    {
        if(document.getElementById('RCurrentEduc').value == "Yes" )
        {
            document.getElementById('RRecentEduc').disabled = false;
            document.getElementById('RHighestEduc').disabled = true;

        }
        else if(document.getElementById('RCurrentEduc').value == "No" )
        {
            document.getElementById('RRecentEduc').disabled = true;
            document.getElementById('RHighestEduc').disabled = false;

        }
        else
        {
            document.getElementById('RRecentEduc').disabled = true;
            document.getElementById('RHighestEduc').disabled = true;
        }
    }


    
function genM()
{
    
     
         
         
        document.getElementById('gend').value = "Male";
        document.getElementById('RGenderF').checked = false;

    
}

function genF(){
    document.getElementById('gend').value = "Female";

        document.getElementById('RGenderM').checked = false;
}

function RF()
{
    
     
         
         
        document.getElementById('pin').value = "Filipino";
        document.getElementById('RCitizenshipN').checked = false;

    
}

function RN(){
    document.getElementById('pin').value = "Non-Filipino";

        document.getElementById('RCitizenshipF').checked = false;
}


function modalEdit(x){

    var hidden_id           = "hidden_id_"+x.value;
    var hidden_ln           = "hidden_ln_"+x.value;
    var hidden_fn           = "hidden_fn_"+x.value;
    var hidden_mn           = "hidden_mn_"+x.value;
    var hidden_bdate        = "hidden_bdate_"+x.value;
    var hidden_bplace       = "hidden_bplace_"+x.value;
    var hidden_gender       = "hidden_gender_"+x.value;
    var hidden_cstatus      = "hidden_cstatus_"+x.value;
    var hidden_religion     = "hidden_religion_"+x.value;
    var hidden_dor          = "hidden_dor_"+x.value;
    var hidden_citizenship  = "hidden_citizenship_"+x.value;
    var hidden_mob          = "hidden_mob_"+x.value;
    var hidden_land         = "hidden_land_"+x.value;
    var hidden_email        = "hidden_email_"+x.value;
    var hidden_height       = "hidden_height_"+x.value;
    var hidden_weight       = "hidden_weight_"+x.value;
    var hidden_hstat        = "hidden_hstat_"+x.value;
    var hidden_curstudy     = "hidden_curstudy_"+x.value;
    var hidden_recentgrd    = "hidden_recentgrd_"+x.value;
    var hidden_highesteduc  = "hidden_highesteduc_"+x.value;
    var hidden_litread      = "hidden_litread_"+x.value;
    var hidden_litwrite     = "hidden_litwrite_"+x.value;
    var hidden_occup        = "hidden_occup_"+x.value;
    var hidden_income       = "hidden_income_"+x.value;

var id              = document.getElementById(hidden_id).value;                  
var ln              = document.getElementById(hidden_ln).value;                  
var fn              = document.getElementById(hidden_fn).value;                   
var mn              = document.getElementById(hidden_mn).value;                   
var bdate           = document.getElementById(hidden_bdate).value;                    
var bplace          = document.getElementById(hidden_bplace).value;                   
var gender          = document.getElementById(hidden_gender).value;                   
var cstatus         = document.getElementById(hidden_cstatus).value;                  
var religion        = document.getElementById(hidden_religion).value;             
var dor             = document.getElementById(hidden_dor).value;              
var citizenship     = document.getElementById(hidden_citizenship).value;              
var mob             = document.getElementById(hidden_mob).value;              
var land            = document.getElementById(hidden_land).value;             
var email           = document.getElementById(hidden_email).value;                
var height          = document.getElementById(hidden_height).value;               
var weight          = document.getElementById(hidden_weight).value;               
var hstat           = document.getElementById(hidden_hstat).value;                
var curstudy        = document.getElementById(hidden_curstudy).value;             
var recentgrd       = document.getElementById(hidden_recentgrd).value;                
var highesteduc     = document.getElementById(hidden_highesteduc).value;              
var litread         = document.getElementById(hidden_litread).value;              
var litwrite        = document.getElementById(hidden_litwrite).value;             
var occup           = document.getElementById(hidden_occup).value;                
var income          = document.getElementById(hidden_income).value;               
alert(height);

Number(mob);

document.getElementById('EtxtID').value = id;        
document.getElementById('EtxtSur').value = ln;        
document.getElementById('EtxtGiven').value = fn;         
document.getElementById('EtxtMid').value = mn; 
document.getElementById('EmyDate').value = bdate;      
document.getElementById('EtxtBPlace').value = bplace;     
document.getElementById('Egend').value = gender;    
document.getElementById('Ecivilstatus').value = cstatus;
document.getElementById('Ereligion').value = religion;       
document.getElementById('EResDate').value = dor;
document.getElementById('Epin').value = citizenship;       
document.getElementById('EtxtMobile').value = mob;   
document.getElementById('Etxtlandline').value = land;     
document.getElementById('EtxtEmail').value = email;     
document.getElementById('EtxtHeight').value = height;      
document.getElementById('EtxtWeight').value = weight; 
document.getElementById('EtxtHealth').value = hstat;
document.getElementById('ECurrentEduc').value = curstudy;    
document.getElementById('ERecentEduc').value = recentgrd;   
document.getElementById('EHighestEduc').value = highesteduc;      
document.getElementById('ELiterateRead').value =litread;
document.getElementById('ELiterateWrite').value=litwrite;
document.getElementById('EOccupation').value    = occup;
document.getElementById('EIncome').value        = income;      
                                                   
                                         
                                                
                                                   
}


</script>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barangay Information System</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link href="css/datatables/tools/css/dataTables.tableTools.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><i class="fa fa-institution"></i> <span style="font-size:13px">Barangay Information System</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                </li>
                                <li><a><i class="fa fa-gears"></i> Maintenance <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="maintenance_household.php">Household</a>
                                        </li>
                                        <li><a href="maintenance_family.php">Family</a>
                                        </li>
                                         <li><a href="maintenance_resident.php">Resident</a>
                                        </li>
                                        <li><a href="maintenance_official.php">Barangay Personnel</a>
                                        </li> 
                                        <li><a href="maintenance_event.php">Event</a>
                                        </li>
                                        <li><a href="maintenance_docu.php">Document</a>
                                        </li>
                                        <li><a href="maintenance_items.php">Item</a>
                                        </li>
                                        <li><a href="maintenance_facility.php">Facility</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Transaction <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: none">
                                        <li><a href="Requests.html">Requests</a>
                                            <ul class="nav child_menu" style="display: none">
                                            
                                            </ul>
                                        </li>
                                        <li><a href="Approved Requests.html">Approved Requests</a>
                                            <ul class="nav child_menu" style="display: none">
                                                <li><a href="Approved Events.html">Event Requests</a>
                                                </li>
                                                <li><a href="Approved Documents.html">Document Requests</a>
                                                </li>
                                                <li><a href="Approved Items.html">Item Requests</a>
                                                </li>
                                            </ul>
                                        </li>
                                         <li><a href="Pending Requests.html">Pending/Active Requests</a>
                                            <ul class="nav child_menu" style="display: none">
                                                <li><a href="Pending Documents.html">Document Requests</a>
                                                </li>
                                                <li><a href="Pending Items.html">Item Requests</a>
                                                </li>                                       
                                            </ul>
                                        </li>
                                       
                                    </ul>
    
                                </li>
                                <li><a><i class="fa fa-file-text"></i> Query <span class="fa fa-chevron-down"></span></a>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Report<span class="fa fa-chevron-down"></span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-user"></i>  Admin
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown">
									<li><a href="javascript:;"><i class="fa fa-cog"></i> Profile</a>
									</li>
                                    <li><a href="login.html"><i class="fa fa-sign-out"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                   Maintenance
                    
                </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Residents </h2>
                                     
                                     <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#residents" style="float:right"><span class='glyphicon glyphicon-plus' aria-hidden='true' style="color:white"></span>Add Resident</button>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content" style="overflow-x:auto">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:12px">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"Select resident_personaldata.ResidentID, LastName, FirstName, MidName, BirthDate, BirthPlace, Gender, CivilStatus, Religion, DateOfResidency, Citizenship, MobileNo, LandlineNo, EmailAdd, Height, Weight, HealthStatus, resident_education.ResidentID, CurrentEducStat, RecentYear, LiteracyWrite, LiteracyRead, resident_economicstatus.ResidentID, Occupation, IncomePerMonth, HighestAttainment 
                                                from resident_personaldata left join resident_education on resident_personaldata.ResidentID = resident_education.ResidentID left join resident_economicstatus on resident_personaldata.ResidentID = resident_economicstatus.ResidentID  ");
                                            echo"

                                        <thead>
                                            <tr class='headings'>
                                                <th>Action</th>
                                                <th>ResidentID </th>
                                                <th>Surname </th>
                                                <th>Given Name </th>
                                                <th>Middle Name</th>
                                                <th>Birth Date</th>
                                                <th>Birth Place </th>
                                                <th>Gender</th>
                                                <th>Civil Status</th>
                                                <th>Religion</th>
                                                <th>Date of Residency</th>
                                                <th>Citizenship</th>
                                                <th>Mobile No.</th>
                                                <th>LandLine</th>
                                                <th>Email</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Health Status</th>
                                                <th>Currently Studying</th>
                                                <th>Recent Grade/Year Level</th>
                                                <th>Highest Educational Attainment</th>
                                                <th>Reading Literacy</th>
                                                <th>Writing Literacy</th>
                                                <th>Occupation</th>
                                                <th>Income Per Month</th>

                                            </tr>
                                        </thead>

                                        <tbody>";
                                        while($row = mysqli_fetch_array($q))
                                        {
                                            $id = $row[0];
                                            $ln  = $row['LastName'];
                                            $fn = $row['FirstName'];
                                            $mn  = $row['MidName'];
                                            $bdate = $row['BirthDate'];
                                            $bplace = $row['BirthPlace'];
                                            $gender = $row['Gender'];
                                            $cstatus = $row['CivilStatus'];
                                            $religion = $row['Religion'];
                                            $dor = $row['DateOfResidency'];
                                            $citizenship = $row['Citizenship'];
                                            $mob = $row['MobileNo'];
                                            $land = $row['LandlineNo'];
                                            $email = $row['EmailAdd'];
                                            $height = $row['Height'];
                                            $weight = $row['Weight'];
                                            $hstat = $row['HealthStatus'];
                                            $curstudy = $row['CurrentEducStat'];
                                            $recentgrd = $row['RecentYear'];
                                            $highesteduc = $row['HighestAttainment'];
                                            $litread = $row['LiteracyRead'];
                                            $litwrite = $row['LiteracyWrite'];
                                            $occup = $row['Occupation'];
                                            $income = $row['IncomePerMonth'];



                                            echo "
                                            <tr class='odd pointer'>
                                                 <td> 
                                                     <span data-toggle='tooltip' title='Edit' data-placement='right'><button class='btn btn-success' data-toggle='modal' data-target='#residentsEdit' id = 'btnEdit' name = 'btnEdit' value = '$id' onclick = 'modalEdit(this)'><i class='glyphicon glyphicon-pencil' aria-hidden='true'> </i></button></span>


                                                    <span data-toggle='tooltip' title='Delete' data-placement='right'><button class='btn btn-danger' data-toggle='modal' data-target='#residentDelete' id = 'btnDelete' name = 'btnDelete' value = '$id' onclick = 'modalDelete(this)'><i class='glyphicon glyphicon-remove' aria-hidden='true'> </i></button></span>
                                                </td>
                                                <td >$id</td>
                                                <td >$ln</td>
                                                <td >$fn</td>
                                                <td >$mn</td>
                                                <td >$bdate</td>
                                                <td >$bplace</td>
                                                <td >$gender</td>
                                                <td >$cstatus</td>
                                                <td >$religion</td>
                                                <td >$dor</td>
                                                <td >$citizenship</td>
                                                <td >$mob</td>
                                                <td >$land</td>
                                                <td >$email</td>
                                                <td >$height</td>
                                                <td >$weight</td>
                                                <td >$hstat</td>
                                                <td >$curstudy</td>
                                                <td >$recentgrd</td>
                                                <td >$highesteduc</td>
                                                <td >$litread</td>
                                                <td >$litwrite</td>
                                                <td >$occup</td>
                                                <td >$income</td>


 
                                                <td>
                                                    <input type = 'hidden' value = '$id' id= 'hidden_id_$id'>
                                                    <input type = 'hidden' value = '$ln' id= 'hidden_ln_$id'>
                                                    <input type = 'hidden' value = '$fn' id= 'hidden_fn_$id'>
                                                    <input type = 'hidden' value = '$mn' id= 'hidden_mn_$id'>
                                                    <input type = 'hidden' value = '$bdate' id= 'hidden_bdate_$id'>
                                                    <input type = 'hidden' value = '$bplace' id= 'hidden_bplace_$id'>
                                                    <input type = 'hidden' value = '$gender' id= 'hidden_gender_$id'>
                                                    <input type = 'hidden' value = '$cstatus' id= 'hidden_cstatus_$id'>
                                                    <input type = 'hidden' value = '$religion' id= 'hidden_religion_$id'>
                                                    <input type = 'hidden' value = '$dor' id= 'hidden_dor_$id'>
                                                    <input type = 'hidden' value = '$citizenship' id= 'hidden_citizenship_$id'>
                                                    <input type = 'hidden' value = '$mob' id= 'hidden_mob_$id'>
                                                    <input type = 'hidden' value = '$land' id= 'hidden_land_$id'>
                                                    <input type = 'hidden' value = '$email' id= 'hidden_email_$id'>
                                                    <input type = 'hidden' value = '$height' id= 'hidden_height_$id'>
                                                    <input type = 'hidden' value = '$weight' id= 'hidden_weight_$id'>
                                                    <input type = 'hidden' value = '$hstat' id= 'hidden_hstat_$id'>
                                                    <input type = 'hidden' value = '$curstudy' id= 'hidden_curstudy_$id'>
                                                    <input type = 'hidden' value = '$recentgrd' id= 'hidden_recentgrd_$id'>
                                                    <input type = 'hidden' value = '$highesteduc' id= 'hidden_highesteduc_$id'>
                                                    <input type = 'hidden' value = '$litread' id= 'hidden_litread_$id'>
                                                    <input type = 'hidden' value = '$litwrite' id= 'hidden_litwrite_$id'>
                                                    <input type = 'hidden' value = '$occup' id= 'hidden_occup_$id'>
                                                    <input type = 'hidden' value = '$income' id= 'hidden_income_$id'>

                                                </td>



                                               </tr>";
                                        }
                                        echo"
                                        </tbody>
                                        "; ?>
                                    </table>
                                   
                                    
                                </div>
                                <br>  
                                
                                
                                
                                    
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />

                    </div>
                </div>
                    <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Developed by PUP 2016 | Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                            <span class="lead"> <i class="fa fa-institution"></i> Barangay Information System</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
                    
                </div>
                <!-- /page content -->
            </div>

        </div>
    
    



















			<!-- Modal -->
			<form method = POST action = "mresident.php" name = "as400samplecode" >	
				<div class="modal fade" id="residents" role="dialog">
					<div class="modal-dialog modal-lg" style="width: 950px">
					
					  <!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Resident</h4>
						</div>
						
						<div class="modal-body" style="overflow-y:auto">
								<div class="form-inline" style="float:right">
										<label for="id">ID:</label>
			                            <input type="text" class="form-control" id="RtxtID" name = "RtxtID" >
			                    </div><br><br>

							<table  style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
								<tbody  style="text-align: right">
									<!--1st row-->
								    <tr>
										<td><label for="lastname">Surname*</label></td>	
			                            <td><input type="text" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtSur" 
			                            		   placeholder="Surname" 
			                            		   name = "RtxtSur" 
			                            		   REQUIRED></td>
								 
								
								   
										<td><label for="firstname">Given Name*</label></td>
			                            <td><input type ="text" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtGiven" 
			                            		   placeholder="Given Name" 
			                            		   name = "RtxtGiven" 
			                            		   REQUIRED></td>
		
								
										<td><label for="midname">Middle Name*</label>	</td>
			                            <td><input type="text" 
			                            		   class="form-control"
			                            		   maxlength="45"  
			                            		   id="RtxtMid" 
			                            		   placeholder="Middle Name" 
			                            		   name = "RtxtMid" REQUIRED></td>
			                        </tr>
			                        <!--2nd row-->
			                         <tr>
										<td><label for="birthdate">Birth Date</label></td>	
			                            <td><input type="text" 
			                            		   class="form-control"
			                            		   id="myDate"
			                            		   name = "myDate" 
                                                   onkeyup="Javascript:myAgeValidation()"
			                            		   REQUIRED>


                                                   <input type = hidden id = "a" name = "a">

                                                </td>
								 
								
								   
										<td><label for="age">Age</label></td>
			                            <td><textarea rows = "2"
                                                    column = "50" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtAge" 
			                            		   name = "RtxtAge" 
			                            		   readonly>

                                                </textarea>
                                                <input type = hidden id = "age" name = "age">
                                            </td>
		
								
										<td><label for="birthplace">Birthplace*</label>	</td>
			                            <td><input type="text" 
			                            		   class="form-control"
			                            		   maxlength="45"  
			                            		   id="RtxtBPlace" 
			                            		   placeholder="Birth Place" 
			                            		   name = "RtxtBPlace" REQUIRED></td>
			                        </tr>

			                        <!--3rd row-->
			                         <tr>
										<td><label for="Gender">Gender</label></td>	
			                            <td><div class="radio" style="text-align: left">
				                                <label>
				                                    <input type="radio"  id="RGenderM" name="RGenderM" value = "Male" onclick = "genM()"> Male
				                                </label>
                                            
                                           
                                                <label>
                                                  	<input type="radio"  id="RGenderF"name="RGenderF" value = "Female"  onclick = "genF()"> Female
                                              	</label>
                                            </div>



                                            <input type = hidden id = "gend" name = "gend">
                    					</td>
								 
								
								    	<td><label class="control-label"> Civil Status</label></td>
				                        <td><select
				                                class="form-control"
				                                id="Rcivilstatus"
				                                name="Rcivilstatus"
				                                required>
				                                    <option>Single</option>
				                                    <option>Married</option>
				                                    <option>Divorced</option>
				                                    <option>Widowed</option>
				                                    <option>Separated</option>
				                            </select></td>
		
								
										<td><label class="control-label"> Religion</label></td>
				                        <td><select
				                                class="form-control"
				                                id="Rreligion"
				                                name="Rreligion"
				                                required>
				                                    <option>Roman Catholic</option>
				                                    <option>Born Again (Christian)</option>
				                                    <option>Iglesia Ni Cristo</option>
				                                    <option>Jehovah's Witness</option>
				                                    <option>Aglipay</option>
				                                    <option>Muslim</option>
				                                    <option>Buddhists</option>
				                                    <option>Daoist/Taoist</option>
				                                    <option>Protestant</option>
				                                    <option>None</option>
				                                    <option>Don't know</option>
				                                    <option>Others</option>
				                            </select></td>
		
			                        </tr>


			                        <!--4th row-->
			                         <tr>
										<td><label for="resdate">Date of Residency</label></td>	
			                            <td><input type="date" 
			                            		   class="form-control"
			                            		   id="RResDate"
			                            		   name = "RResDate" 
			                            		   REQUIRED></td>
								
										<td><label for="resperiod">Residency Period</label>	</td>
			                            <td><input type="text" 
			                            		   class="form-control"
			                            		   maxlength="45"  
			                            		   id="RResPeriod" 
			                            		   name = "RResPeriod" 
			                            		   readonly></td>

			                            <td><label for="Citizenship">Citizenship</label></td>	
			                            <td><div class="radio" style="text-align: left">
				                                <label>
				                                    <input type="radio"  id="RCitizenshipF" name="RCitizenshipF" onclick="RF()"> Filipino
				                                </label>
                                            
                                           
                                                <label>
                                                  	<input type="radio"  id="RCitizenshipN"name="RCitizenshipN" onclick="RN()"> Non-Filipino
                                              	</label>

                                                <input type = hidden id = "pin" name = "pin">
                                            </div>
                    					</td>
			                        </tr>

			                        
								</tbody>
						    </table>
							
							<!--rooooow-->	
							<div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
									 	<span style="font-size: 12px; padding: 0 10px;">
									    Contact Details <i> (if not applicable, please indicate the contact details of the guardian)</i><!--Padding is optional-->
									  	</span>
							</div> 
							<center>
							<table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
								<tbody  style="text-align: right">
									<tr>
										<td><label for="mobile">Mobile No.*</label></td>	
			                            <td><input type="text" 
			                            		   class="form-control"
			                            		   maxlength="11" 
			                            		   id="RtxtMobile" 
			                            		   name = "RtxtMobile" 
			                            		   ></td>
								 
								<td><label for="landline">Landline*</label></td>    
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="11" 
                                                   id="Rtxtlandline" 
                                                   name = "Rtxtlandline" 
                                                   ></td>
                                 
								   
										<td><label for="email">Email Address</label></td>
			                            <td><input type ="text" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtEmail"  
			                            		   name = "RtxtEmail"></td>


									</tr>
								</tbody>
							</table>
							</center>

							<!--rooooow-->	
							<div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
									 	<span style="font-size: 12px; padding: 0 10px;">
									    Health Information <!--Padding is optional-->
									  	</span>
							</div>
                            <center>
							<table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
								<tbody  style="text-align: right">
									<tr>
										<td><label for="height">Height* <i>(in meters)</i></label></td>
			                            <td><input type ="number" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtHeight"  
			                            		   name = "RtxtHeight"
                                                   value = 0
                                                   onkeyup = "getHeight()"
                                                   step="any"
			                            		   required></td>

			                            <td><label for="weight">Weight* <i>(in kilograms)</i></label></td>
			                            <td><input type ="number" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtWeight"  
			                            		   name = "RtxtWeight"
                                                   value = 0
                                                   onkeyup = "getWeight()"
                                                   step = "any"
			                            		   required></td>

			                            

			                        </tr>
			                    </tbody>
			                </table>
                        </center>
                            <center>
			                <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
								<tbody  style="text-align: right">
                                    <tr>
                                        <td><label for="bmi">Body Mass Index</label></td>
                                        <td><input type ="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="RtxtBMI"  
                                                   name = "RtxtBMI"
                                                   value = 0
                                                   readonly></td>
                                   

			                        	<td><label for="healthstat">Health Status</label></td>
			                            <td><input type ="text" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtHealth"  
			                            		   name = "RtxtHealth"
                                                   value = ""
			                            		   readonly></td>


			                        </tr>
			                    </tbody>
			                </table>
			                </center>


			                <!--rooooow-->	
							<div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
									 	<span style="font-size: 12px; padding: 0 10px;">
									    Education and Literacy<!--Padding is optional-->
									  	</span>
							</div>
							<table style="border-spacing: 17px;border-collapse: separate;font-size: 12px" >
								<tbody  style="text-align: right">
			                        <tr>
			                        	<td><label class="control-label">Currently Studying?</label></td>
				                        <td><select
				                                class="form-control"
				                                id="RCurrentEduc"
				                                name="RCurrentEduc"
                                                onclick = "lol()"
				                                required>
				                                    <option>Yes</option>
				                                    <option>No</option>
				                                    <option>Not Applicable</option>
				                            </select></td>



								    	<td><label class="control-label">Recent Grade/Year Level</label></td>
				                        <td><select
				                                class="form-control"
				                                id="RRecentEduc"
				                                name="RRecentEduc"
				                                required 
                                                >
                                                <option></option>
				                                    <option>Pre-school/Day Care/Kinder</option>
				                                    <option>Grade 1</option>
				                                    <option>Grade 2</option>
				                                    <option>Grade 3</option>
				                                    <option>Grade 4</option>
				                                    <option>Grade 5</option>
				                                    <option>Grade 6</option>
				                                    <option>Grade 7/1st Year Highschool</option>
				                                    <option>Grade 8/2nd Year Highschool</option>
				                                    <option>Grade 9/3rd Year Highschool</option>
				                                    <option>Grade 10/4th Year Highschool</option>
				                                    <option>Grade 11</option>
				                                    <option>Grade 12</option>
				                                    <option>Vocational Course</option>
				                                    <option>1st Year College</option>
				                                    <option>2nd Year College</option>
				                                    <option>3rd Year College</option>
				                                    <option>4th Year College</option>
				                                    <option>5th Year College or beyond</option>
				                                    <option>Masters-Post Graduate</option>
				                                    <option>Doctoral-Post Graduate</option>
				                            </select></td>

				                        <td><label class="control-label">Highest Educational Attainment</label></td>
				                        <td><select
				                                class="form-control"
				                                id="RHighestEduc"
				                                name="RHighestEduc"
				                                required 
                                                disabled>
                                                <option></option>
				                                    <option>Has never been in school</option>
				                                    <option>Elementary Level</option>
				                                    <option>Elementary Graduate</option>
				                                    <option>Highschool Level</option>
				                                    <option>Highschool Graduate</option>
				                                    <option>Post Secondary Level</option>
				                                    <option>Post Secondary qualification</option>
				                                    <option>College Level</option>
				                                    <option>College Graduate</option>
				                                    <option>Post-graduate Level</option>
				                                    <option>Post-graduate Master</option>
				                                    <option>Graduate Doctoral</option>
				                                    <option>Not Applicable</option>
				                            </select></td>

			                     	</tr>
			                    </tbody>
			                </table>

			                <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
								<tbody  style="text-align: right">
									<tr>
										 <td><label class="control-label">Can read simple messages in any language or dialect?</label></td>
				                        <td><select

				                                class="form-control"
				                                id="RLiterateRead"
				                                name="RLiterateRead"
				                                required>
				                                    <option>Yes</option>
				                                    <option>No</option>
				                                    <option>Not applicable</option>
				                            </select></td>
				                        <td><label class="control-label">Can write in any language or dialect?</label></td>
				                        <td><select
				                                class="form-control"
				                                id="RLiterateWrite"
				                                name="RLiterateWrite"
				                                required>
				                                    <option>Yes</option>
				                                    <option>No</option>
				                                    <option>Not applicable</option>
				                            </select></td>
									</tr>
								</tbody>
			                </table>


			                <!--rooooow-->   
                            <div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
                                        <span style="font-size: 12px; padding: 0 10px;">
                                        Economic Status<!--Padding is optional-->
                                        </span>
                            </div>
                            <center>
                            <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
                                <tbody  style="text-align: right">
                                
                                    <tr>
                                        <td><label class="control-label">Occupation</label></td>
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45"  
                                                   id="ROccupation" 
                                                   name = "ROccupation"></td>

                                         <td><label class="control-label">Income Per Month</label></td>
                                        <td><select
                                                class="form-control"
                                                id="RIncome"
                                                name="RIncome"
                                                required>
                                                    <option>0-4999</option>
                                                    <option>5000-9999</option>
                                                    <option>10000-14999</option>
                                                    <option>15000-19999</option>
                                                    <option>20000-24999</option>
                                                    <option>25000-29999</option>
                                                    <option>30000-34999</option>
                                                    <option>35000-above</option>
                                            </select></td>
                                    </tr>
                                
                                </tbody>
                            </center> 
                            </table>



						
						</div>
						<div class="modal-footer">
				        	<button type="submit" class="btn btn-primary" name = btnSubmit>Submit</button>
				        </div>
					</div>
				  </div>
				</div>
			</form>
      
   		<!--end of modals-->




















<!-- Modal -->
            <form method = POST action = "mresident.php" > 
                <div class="modal fade" id="residentsEdit" role="dialog">
                    <div class="modal-dialog modal-lg" style="width: 950px">
                    
                      <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Resident</h4>
                        </div>
                        
                        <div class="modal-body" style="overflow-y:auto">
                                <div class="form-inline" style="float:right">
                                        <label for="id">ID:</label>
                                        <input type="text" class="form-control" id="EtxtID" name = "EtxtID" >
                                </div><br><br>

                            <table  style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
                                <tbody  style="text-align: right">
                                    <!--1st row-->
                                    <tr>
                                        <td><label for="lastname">Surname*</label></td> 
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="EtxtSur" 
                                                   placeholder="Surname" 
                                                   name = "EtxtSur" 
                                                   REQUIRED></td>
                                 
                                
                                   
                                        <td><label for="firstname">Given Name*</label></td>
                                        <td><input type ="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="EtxtGiven" 
                                                   placeholder="Given Name" 
                                                   name = "EtxtGiven" 
                                                   REQUIRED></td>
        
                                
                                        <td><label for="midname">Middle Name*</label>   </td>
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45"  
                                                   id="EtxtMid" 
                                                   placeholder="Middle Name" 
                                                   name = "EtxtMid" REQUIRED></td>
                                    </tr>
                                    <!--2nd row-->
                                     <tr>
                                        <td><label for="birthdate">Birth Date</label></td>  
                                        <td><input type="text" 
                                                   class="form-control"
                                                   id="EmyDate"
                                                   name = "EmyDate" 
                                                   onkeyup="Javascript:myAgeValidation()"
                                                   REQUIRED>


                                                   <input type = hidden id = "Ea" name = "Ea">

                                                </td>
                                 
                                
                                   
                                        <td><label for="age">Age</label></td>
                                        <td><textarea rows = "2"
                                                    column = "50" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="EtxtAge" 
                                                   name = "EtxtAge" 
                                                   readonly>

                                                </textarea>
                                                <input type = hidden id = "Eage" name = "Eage">
                                            </td>
        
                                
                                        <td><label for="birthplace">Birthplace*</label> </td>
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45"  
                                                   id="EtxtBPlace" 
                                                   placeholder="Birth Place" 
                                                   name = "EtxtBPlace" REQUIRED></td>
                                    </tr>

                                    <!--3rd row-->
                                     <tr>
                                        <td><label for="Gender">Gender</label></td> 
                                        <td><div class="radio" style="text-align: left">
                                                <label>
                                                    <input type="radio"  id="EGenderM" name="EGenderM" value = "Male" onclick = "genM()"> Male
                                                </label>
                                            
                                           
                                                <label>
                                                    <input type="radio"  id="EGenderF"name="EGenderF" value = "Female"  onclick = "genF()"> Female
                                                </label>
                                            </div>



                                            <input type = hidden id = "Egend" name = "Egend">
                                        </td>
                                 
                                
                                        <td><label class="control-label"> Civil Status</label></td>
                                        <td><select
                                                class="form-control"
                                                id="Ecivilstatus"
                                                name="Ecivilstatus"
                                                required>
                                                    <option>Single</option>
                                                    <option>Married</option>
                                                    <option>Divorced</option>
                                                    <option>Widowed</option>
                                                    <option>Separated</option>
                                            </select></td>
        
                                
                                        <td><label class="control-label"> Religion</label></td>
                                        <td><select
                                                class="form-control"
                                                id="Ereligion"
                                                name="Ereligion"
                                                required>
                                                    <option>Roman Catholic</option>
                                                    <option>Christian</option>
                                                    <option>Iglesia Ni Cristo</option>
                                                    <option>Jehovah's Witness</option>
                                                    <option>Aglipay</option>
                                                    <option>Muslim</option>
                                                    <option>Buddhists</option>
                                                    <option>Daoist/Taoist</option>
                                                    <option>Protestant</option>
                                                    <option>None</option>
                                                    <option>Don't know</option>
                                                    <option>Others</option>
                                            </select></td>
        
                                    </tr>


                                    <!--4th row-->
                                     <tr>
                                        <td><label for="resdate">Date of Residency</label></td> 
                                        <td><input type="date" 
                                                   class="form-control"
                                                   id="EResDate"
                                                   name = "EResDate" 
                                                   REQUIRED></td>
                                
                                        <td><label for="resperiod">Residency Period</label> </td>
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45"  
                                                   id="EResPeriod" 
                                                   name = "EResPeriod" 
                                                   readonly></td>

                                        <td><label for="Citizenship">Citizenship</label></td>   
                                        <td><div class="radio" style="text-align: left">
                                                <label>
                                                    <input type="radio"  id="ECitizenshipF" name="ECitizenshipF" onclick="RF()"> Filipino
                                                </label>
                                            
                                           
                                                <label>
                                                    <input type="radio"  id="ECitizenshipN"name="ECitizenshipN" onclick="RN()"> Non-Filipino
                                                </label>

                                                <input type = hidden id = "Epin
                                                " name = "Epin">
                                            </div>
                                        </td>
                                    </tr>

                                    
                                </tbody>
                            </table>
                            
                            <!--rooooow-->  
                            <div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
                                        <span style="font-size: 12px; padding: 0 10px;">
                                        Contact Details <i> (if not applicable, please indicate the contact details of the guardian)</i><!--Padding is optional-->
                                        </span>
                            </div> 
                            <center>
                            <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
                                <tbody  style="text-align: right">
                                    <tr>
                                        <td><label for="mobile">Mobile No.*</label></td>    
                                        <td><input type="number" 
                                                   class="form-control"
                                                   maxlength="11" 
                                                   id="EtxtMobile" 
                                                   name="EtxtMobile" 
                                                   ></td>
                                 
                                <td><label for="landline">Landline*</label></td>    
                                        <td><input type="number" 
                                                   class="form-control"
                                                   maxlength="11" 
                                                   id="Etxtlandline" 
                                                   name="Etxtlandline" 
                                                   ></td>
                                 
                                   
                                        <td><label for="email">Email Address</label></td>
                                        <td><input type ="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="EtxtEmail"  
                                                   name="EtxtEmail"></td>


                                    </tr>
                                </tbody>
                            </table>
                            </center>

                            <!--rooooow-->  
                            <div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
                                        <span style="font-size: 12px; padding: 0 10px;">
                                        Health Information <!--Padding is optional-->
                                        </span>
                            </div>
                            <center>
                            <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
                                <tbody  style="text-align: right">
                                    <tr>
                                        <td><label for="height">Height* <i>(in meters)</i></label></td>
                                        <td><input type ="number" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="EtxtHeight"  
                                                   name="EtxtHeight"
                                                   value=0
                                                   onkeyup="getHeight()"
                                                   step="any"
                                                   required></td>

                                        <td><label for="weight">Weight* <i>(in kilograms)</i></label></td>
                                        <td><input type ="number" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="EtxtWeight"  
                                                   name="EtxtWeight"
                                                   value=0
                                                   onkeyup="getWeight()"
                                                   step="any"
                                                   required></td>

                                        

                                    </tr>
                                </tbody>
                            </table>
                        </center>
                            <center>
                            <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
                                <tbody  style="text-align: right">
                                    <tr>
                                        <td><label for="bmi">Body Mass Index</label></td>
                                        <td><input type ="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="EtxtBMI"  
                                                   name="EtxtBMI"
                                                   value=0
                                                   readonly></td>
                                   

                                        <td><label for="healthstat">Health Status</label></td>
                                        <td><input type ="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="EtxtHealth"  
                                                   name="EtxtHealth"
                                                   value=""
                                                   readonly></td>


                                    </tr>
                                </tbody>
                            </table>
                            </center>


                            <!--rooooow-->  
                            <div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
                                        <span style="font-size: 12px; padding: 0 10px;">
                                        Education and Literacy<!--Padding is optional-->
                                        </span>
                            </div>
                            <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px" >
                                <tbody  style="text-align: right">
                                    <tr>
                                        <td><label class="control-label">Currently Studying?</label></td>
                                        <td><select
                                                class="form-control"
                                                id="ECurrentEduc"
                                                name="ECurrentEduc"
                                                onclick = "lol()"
                                                required>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                    <option>Not Applicable</option>
                                            </select></td>



                                        <td><label class="control-label">Recent Grade/Year Level</label></td>
                                        <td><select
                                                class="form-control"
                                                id="ERecentEduc"
                                                name="ERecentEduc"
                                                required 
                                                >
                                                <option></option>
                                                    <option>Pre-school/Day Care/Kinder</option>
                                                    <option>Grade 1</option>
                                                    <option>Grade 2</option>
                                                    <option>Grade 3</option>
                                                    <option>Grade 4</option>
                                                    <option>Grade 5</option>
                                                    <option>Grade 6</option>
                                                    <option>Grade 7/1st Year Highschool</option>
                                                    <option>Grade 8/2nd Year Highschool</option>
                                                    <option>Grade 9/3rd Year Highschool</option>
                                                    <option>Grade 10/4th Year Highschool</option>
                                                    <option>Grade 11</option>
                                                    <option>Grade 12</option>
                                                    <option>Vocational Course</option>
                                                    <option>1st Year College</option>
                                                    <option>2nd Year College</option>
                                                    <option>3rd Year College</option>
                                                    <option>4th Year College</option>
                                                    <option>5th Year College or beyond</option>
                                                    <option>Masters-Post Graduate</option>
                                                    <option>Doctoral-Post Graduate</option>
                                            </select></td>

                                        <td><label class="control-label">Highest Educational Attainment</label></td>
                                        <td><select
                                                class="form-control"
                                                id="EHighestEduc"
                                                name="EHighestEduc"
                                                required 
                                                disabled>
                                                <option></option>
                                                    <option>Has never been in school</option>
                                                    <option>Elementary Level</option>
                                                    <option>Elementary Graduate</option>
                                                    <option>Highschool Level</option>
                                                    <option>Highschool Graduate</option>
                                                    <option>Post Secondary Level</option>
                                                    <option>Post Secondary qualification</option>
                                                    <option>College Level</option>
                                                    <option>College Graduate</option>
                                                    <option>Post-graduate Level</option>
                                                    <option>Post-graduate Master</option>
                                                    <option>Graduate Doctoral</option>
                                                    <option>Not Applicable</option>
                                            </select></td>

                                    </tr>
                                </tbody>
                            </table>

                            <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
                                <tbody  style="text-align: right">
                                    <tr>
                                         <td><label class="control-label">Can read simple messages in any language or dialect?</label></td>
                                        <td><select

                                                class="form-control"
                                                id="ELiterateRead"
                                                name="ELiterateRead"
                                                required>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                    <option>Not applicable</option>
                                            </select></td>
                                        <td><label class="control-label">Can write in any language or dialect?</label></td>
                                        <td><select
                                                class="form-control"
                                                id="ELiterateWrite"
                                                name="ELiterateWrite"
                                                required>
                                                    <option>Yes</option>
                                                    <option>No</option>
                                                    <option>Not applicable</option>
                                            </select></td>
                                    </tr>
                                </tbody>
                            </table>


                            <!--rooooow-->   
                            <div style="width: 100%; height: 20px; border-bottom: 1px solid #ebebe0; text-align: left">
                                        <span style="font-size: 12px; padding: 0 10px;">
                                        Economic Status<!--Padding is optional-->
                                        </span>
                            </div>
                            <center>
                            <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
                                <tbody  style="text-align: right">
                                
                                    <tr>
                                        <td><label class="control-label">Occupation</label></td>
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45"  
                                                   id="EOccupation" 
                                                   name = "EOccupation"></td>

                                         <td><label class="control-label">Income Per Month</label></td>
                                        <td><select
                                                class="form-control"
                                                id="EIncome"
                                                name="EIncome"
                                                required>
                                                    <option>0-4999</option>
                                                    <option>5000-9999</option>
                                                    <option>10000-14999</option>
                                                    <option>15000-19999</option>
                                                    <option>20000-24999</option>
                                                    <option>25000-29999</option>
                                                    <option>30000-34999</option>
                                                    <option>35000-above</option>
                                            </select></td>
                                    </tr>
                                
                                </tbody>
                            </center> 
                            </table>



                        
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name = btnSubmitEdit>Submit</button>
                        </div>
                    </div>
                  </div>
                </div>
            </form>
      
        <!--end of modals-->


        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>

        <script src="js/custom.js"></script>


        <!-- Datatables -->
        <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
        <script>
            $(document).ready(
                

                function () {
                $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
            });

            var asInitVals = new Array();
            $(document).ready(function () {
                var oTable = $('#example').dataTable({
                    "oLanguage": {
                        "sSearch": "Search all columns:"
                    },
                    "aoColumnDefs": [
                        {
                            'bSortable': false,
                            'aTargets': [0]
                        } //disables sorting for column one
            ],
                    'iDisplayLength': 12,
                    "sPaginationType": "full_numbers",
                    "dom": 'T<"clear">lfrtip',
                    "tableTools": {
                        "sSwfPath": "<?php echo base_url('assets2/js/Datatables/tools/swf/copy_csv_xls_pdf.swf'); ?>"
                    }
                });
                $("tfoot input").keyup(function () {
                    /* Filter on the column based on the index of this element's parent <th> */
                    oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
                });
                $("tfoot input").each(function (i) {
                    asInitVals[i] = this.value;
                });
                $("tfoot input").focus(function () {
                    if (this.className == "search_init") {
                        this.className = "";
                        this.value = "";
                    }
                });
                $("tfoot input").blur(function (i) {
                    if (this.value == "") {
                        this.className = "search_init";
                        this.value = asInitVals[$("tfoot input").index(this)];
                    }
                });
            });
        </script>
		
			<!-- form wizard -->
		<script type="text/javascript" src="js/wizard/jquery.smartWizard.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				// Smart Wizard 	
				$('#wizard').smartWizard();

				function onFinishCallback() {
					$('#wizard').smartWizard('showMessage', 'Finish Clicked');
					//alert('Finish Clicked');
				}
			});

			$(document).ready(function () {
				// Smart Wizard	
				$('#wizard_verticle').smartWizard({
					transitionEffect: 'slide'
				});

			});
		</script>
</body>

</html>