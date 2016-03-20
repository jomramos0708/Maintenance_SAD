<script type = text/javascript>
    function modalEdit(x)
    {

        var hidden_houseID = "hidden_houseID_" + x.value;
        var hidden_Owner = "hidden_Owner_" + x.value;
        var hidden_ohouseno = "hidden_ohouseno_" + x.value;
        var hidden_ostreet = "hidden_ostreet_" + x.value;  
        var hidden_opurok = "hidden_opurok_" + x.value;
        var hidden_nhouseno = "hidden_nhouseno_" + x.value;
        var hidden_nstreet = "hidden_nstreet_" + x.value;
        var hidden_npurok = "hidden_npurok_" + x.value;

        var houseID = document.getElementById(hidden_houseID).value;
        var Owner = document.getElementById(hidden_Owner).value;
        var ohouseno = document.getElementById(hidden_ohouseno).value;
        var ostreet = document.getElementById(hidden_ostreet).value;
        var opurok = document.getElementById(hidden_opurok).value;
        var nhouseno = document.getElementById(hidden_nhouseno).value;
        var nstreet = document.getElementById(hidden_nstreet).value;
        var npurok = document.getElementById(hidden_npurok).value;

        document.getElementById('EtxtHouseholdID').value = houseID;
        document.getElementById('EtxtOwner').value = Owner;
        document.getElementById('EtxtOHouseNo').value = ohouseno;
        document.getElementById('EtxtOStreet').value = ostreet;
        document.getElementById('EtxtOPurokNo').value = opurok;
        document.getElementById('EtxtNHouseNo').value = nhouseno;
        document.getElementById('EtxtNStreet').value = nstreet;
        document.getElementById('EtxtNPurokNo').value = npurok;
    }

    function modalDelete(x)
    {

       
        var hidden_houseID = "hidden_houseID_" + x.value;
        var hidden_Owner = "hidden_Owner_" + x.value;
        var hidden_ohouseno = "hidden_ohouseno_" + x.value;
        var hidden_ostreet = "hidden_ostreet_" + x.value;  
        var hidden_opurok = "hidden_opurok_" + x.value;
        var hidden_nhouseno = "hidden_nhouseno_" + x.value;
        var hidden_nstreet = "hidden_nstreet_" + x.value;
        var hidden_npurok = "hidden_npurok_" + x.value;

        var houseID = document.getElementById(hidden_houseID).value;
        var Owner = document.getElementById(hidden_Owner).value;
        var ohouseno = document.getElementById(hidden_ohouseno).value;
        var ostreet = document.getElementById(hidden_ostreet).value;
        var opurok = document.getElementById(hidden_opurok).value;
        var nhouseno = document.getElementById(hidden_nhouseno).value;
        var nstreet = document.getElementById(hidden_nstreet).value;
        var npurok = document.getElementById(hidden_npurok).value;

        document.getElementById('DtxtHouseholdID').value = houseID;
        document.getElementById('DtxtOwner').value = Owner;
        document.getElementById('DtxtOHouseNo').value = ohouseno;
        document.getElementById('DtxtOStreet').value = ostreet;
        document.getElementById('DtxtOPurokNo').value = opurok;
        document.getElementById('DtxtNHouseNo').value = nhouseno;
        document.getElementById('DtxtNStreet').value = nstreet;
        document.getElementById('DtxtNPurokNo').value = npurok;
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

    <title>BREMS</title>

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
                        <a href="#" class="site_title"><i class="fa fa-institution"></i> <span style="font-size:13px">BREMS</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="home.html"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                </li>
                                <li><a><i class="fa fa-gears"></i> Maintenance <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="#">Request Monitoring Module</a>
                                            <ul class="nav child_menu" style="display: none">
                                                <li><a href="maintenance_official.php">Barangay Personnel</a>
                                                </li> 

                                                <li><a href="maintenance_docu.php">Document</a>
                                                </li>

                                                <li><a href="maintenance_items.php">Item</a>
                                                </li>

                                                <li><a href="maintenance_facility.php">Facility</a>
                                                </li>

                                             </ul>
                                        </li>

                                         <li><a href="#">Event Monitoring Module</a>
                                            <ul class="nav child_menu" style="display: none">
                                                <li><a href="maintenance_resident.php">Resident</a>
                                                </li>

                                                <li><a href="maintenance_household.php">Household</a>
                                                </li>

                                                <li><a href="maintenance_family.php">Family</a>
                                                </li>

                                                 
                                            </ul>
                                        </li>    
                                            
                                    </ul>
                                        
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Transaction <span class="fa fa-chevron-down"></span></a>
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
                                    <h2>Household </h2>
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#household" style="float:right"><span class='glyphicon glyphicon-plus' aria-hidden='true' style="color:white"></span>   Add Household</button>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                     <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:12px">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"select HouseholdID, HouseOwner, HouseholdStat, Old_HouseNo, New_HouseNo, Old_Street, New_Street, Old_PurokNo, New_PurokNo from household where HouseholdStat != 'inactive'");


                                        echo "<thead>
                                            <tr class='headings'>
                                                
                                                <th>ID</th>
                                                <th>House Owner</th>
                                                <th>Old Address</th> 
                                                <th>New Address</th> 
                                            
                                                <th>Action</th>
                                                <th></th>
                                               
                                                
                                            </tr>
                                        </thead>

                                        <tbody>" ;

                                        while($row = mysqli_fetch_array($q))
                                            {
                                                $HouseID = $row['HouseholdID'];
                                                $Owner = $row['HouseOwner'];
                                                $ohouseno = $row['Old_HouseNo'];
                                                $ostreet = $row['Old_Street'];
                                                $opurok = $row['Old_PurokNo'];
                                                $nhouseno = $row['New_HouseNo'];
                                                $nstreet = $row['New_Street'];
                                                $npurok = $row['New_PurokNo'];

                                                $oldadd = $ohouseno . ', ' . $ostreet . ", Purok # " . $opurok;
                                                $newadd = $nhouseno . ', ' . $nstreet . ", Purok # " . $npurok;

                                            echo"
                                            <tr class='odd pointer'>
                                                

                                                <td>$HouseID</td>
                                                <td>$Owner</td>
                                                <td>$oldadd</td>  
                                                <td>$newadd</td>  
                                                
                                                <td>
                                                    <Button class='btn btn-success' name='btnEdit' id='btnEdit' value = '$HouseID' data-target=#EditItems data-toggle=modal onclick = 'modalEdit(this);' >  Edit </button>
                                                    <Button class='btn btn-danger' name='btnDelete' id='btnDelete' value = '$HouseID' data-target=#DeleteItems data-toggle=modal onclick = 'modalDelete(this);' >  Delete </button>
                                                
                                                </td>

                                                <td>
                                                    <input type = 'hidden' value = '$HouseID' id = 'hidden_houseID_$HouseID'>
                                                    <input type = 'hidden' value = '$Owner' id = 'hidden_Owner_$HouseID'>
                                                    <input type = 'hidden' value = '$ohouseno' id = 'hidden_ohouseno_$HouseID'>
                                                    <input type = 'hidden' value = '$ostreet' id = 'hidden_ostreet_$HouseID'>
                                                    <input type = 'hidden' value = '$opurok' id = 'hidden_opurok_$HouseID'>
                                                    <input type = 'hidden' value = '$nhouseno' id = 'hidden_nhouseno_$HouseID'>
                                                    <input type = 'hidden' value = '$nstreet' id = 'hidden_nstreet_$HouseID'>
                                                    <input type = 'hidden' value = '$npurok' id = 'hidden_npurok_$HouseID'>

                                                </td>
                                                </tr>

                                                ";
                                            }
                                            echo"
                                               
                                        </tbody>" ; 
                                        ?>

                                    </table>
                                   
                                    
                                </div>
       
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
                        <p class="pull-right">Developed by PUP 2016 |
                            <span class="lead"> <i class="fa fa-institution"></i> Barangay Requesting and Event Monitoring System</span>
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
   <form method="post" action = "mhousehold.php">
  <div class="modal fade" id="items" role="dialog">
    <div class="modal-dialog modal-sm" style="width:350px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Household</h4>
        </div>
        <div class="modal-body">
            <form method="post">
		            <div class="form-inline" hidden="hidden">
                        <div style = "float:right">
                        <label class="control-label"> Household ID:</label> 
                            <input  type="text" 
                                style="margin-left:10px; width:70px"
                                class="form-control"
                                id="txtHouseholdID"
                                name="txtHouseholdID"
                                
                                >
                        </div>   
                    </div>
                    <br>
                    <br>
                    <br>
                    
        

                    <div class="form-inline">
                        
                        <label class="control-label"> Owner Name:</label> 
                            <input  type="text" 
                                style="margin-left:20px"
                                class="form-control"
                                id="txtOwner"
                                name="txtOwner"
                                >
                    </div> 


                     <div class="form-inline">
                        <label class="control-label"> Old Address:</label> 
                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="txtOHouseNo"
                                name="txtOHouseNo"
                                placeholder="House No." 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="txtOStreet"
                                name="txtOStreet"
                                placeholder="Street" 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="txtOPurokNo"
                                name="txtOPurokNo"
                                placeholder="Purok"
                                required="required">
                    </div><br>

                    <div class="form-inline">
                        <label class="control-label"> New Address:</label> 
                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="txtNHouseNo"
                                name="txtNHouseNo"
                                placeholder="House No." 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="txtNStreet"
                                name="txtNStreet"
                                placeholder="Street" 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="txtNPurokNo"
                                name="txtNPurokNo"
                                placeholder="Purok"
                                required="required">
                    </div><br>

                    <br>
            </div>
		
			  <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="btnSubmit" id="btnSubmit">Submit</button>
        </div>

       
      </div>
	  
    </div>

	
        </div>
     
  </form>


  <!-- Modal -->
   <form method="post" action = "mhousehold.php">
  <div class="modal fade" id="EditItems" role="dialog">
    <div class="modal-dialog modal-sm" style="width:350px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Household</h4>
        </div>
        <div class="modal-body">
            <form method="post">
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Household ID:</label> 
                            <input  type="text" 
                                style="margin-left:10px; width:70px"
                                class="form-control"
                                id="EtxtHouseholdID"
                                name="EtxtHouseholdID"
                                readonly="readonly" 
                                >
                        </div>   
                    </div>
                    <br>
                    <br>
                    <br>
                    
        

                    <div class="form-inline">
                        
                        <label class="control-label"> Owner Name:</label> 
                            <input  type="text" 
                                style="margin-left:20px"
                                class="form-control"
                                id="EtxtOwner"
                                name="EtxtOwner"
                                >
                    </div> 


                     <div class="form-inline">
                        <label class="control-label"> Old Address:</label> 
                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="EtxtOHouseNo"
                                name="EtxtOHouseNo"
                                placeholder="House No." 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="EtxtOStreet"
                                name="EtxtOStreet"
                                placeholder="Street" 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="EtxtOPurokNo"
                                name="EtxtOPurokNo"
                                placeholder="Purok"
                                required="required">
                    </div><br>

                    <div class="form-inline">
                        <label class="control-label"> New Address:</label> 
                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="EtxtNHouseNo"
                                name="EtxtNHouseNo"
                                placeholder="House No." 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="EtxtNStreet"
                                name="EtxtNStreet"
                                placeholder="Street" 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="EtxtNPurokNo"
                                name="EtxtNPurokNo"
                                placeholder="Purok"
                                required="required">
                    </div><br>

                    <br>
            </div>
        
              <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="btnSubmitEdit" name="btnSubmitEdit">Submit</button>
        </div>

       
      </div>
      
    </div>

    
        </div>
     
  </form>

  <!-- Modal -->
   <form method="post" action = "mhousehold.php">
  <div class="modal fade" id="DeleteItems" role="dialog">
    <div class="modal-dialog modal-sm" style="width:350px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Household</h4>
        </div>
        <div class="modal-body">
            <form method="post">
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Household ID:</label> 
                            <input  type="text" 
                                style="margin-left:10px; width:70px"
                                class="form-control"
                                id="DtxtHouseholdID"
                                name="DtxtHouseholdID"
                                readonly="readonly" 
                                >
                        </div>   
                    </div>
                    <br>
                    <br>
                    <br>
                    
        

                    <div class="form-inline">
                        
                        <label class="control-label"> Owner Name:</label> 
                            <input  type="text" 
                                style="margin-left:20px"
                                class="form-control"
                                id="DtxtOwner"
                                name="DtxtOwner"
                                readonly="readonly" 
                                >
                    </div> 


                     <div class="form-inline">
                        <label class="control-label"> Old Address:</label> 
                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="DtxtOHouseNo"
                                name="DtxtOHouseNo"
                                placeholder="House No." 
                                readonly="readonly" 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="DtxtOStreet"
                                name="DtxtOStreet"
                                placeholder="Street"
                                readonly="readonly"  
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="DtxtOPurokNo"
                                name="DtxtOPurokNo"
                                placeholder="Purok"
                                readonly="readonly" 
                                required="required">
                    </div><br>

                    <div class="form-inline">
                        <label class="control-label"> New Address:</label> 
                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="DtxtNHouseNo"
                                name="DtxtNHouseNo"
                                readonly="readonly" 
                                placeholder="House No." 
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="DtxtNStreet"
                                name="DtxtNStreet"
                                placeholder="Street"
                                readonly="readonly"  
                                required="required">

                            <input type="text" 
                                style="margin-left:27px"
                                class="form-control"
                                id="DtxtNPurokNo"
                                name="DtxtNPurokNo"
                                placeholder="Purok"
                                readonly="readonly" 
                                required="required">
                    </div><br>

                    <br>
            </div>
        
              <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name = btnSubmitDelete>Submit</button>
        </div>

       
      </div>
      
    </div>

    
        </div>
     
  </form>

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
            $(document).ready(function () {
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
</body>

</html>