<script>
    function modalEdit(x){
                      
        var hidden_facID = "hidden_facID_"+x.value;
        var hidden_facName = "hidden_facName_"+x.value;
        var hidden_facCate = "hidden_facCate_"+x.value;
        var hidden_facAddress = "hidden_facAddress_"+x.value;
                                  
        var facID =document.getElementById(hidden_facID).value;
        var facName =document.getElementById(hidden_facName).value;
        var facCate =document.getElementById(hidden_facCate).value;
        var facAddress =document.getElementById(hidden_facAddress).value;

        document.getElementById('EtxtFacID').value = facID;
        document.getElementById('EtxtFacName').value = facName;
        document.getElementById('EtxtFacCate').value = facCate;
        document.getElementById('EtxtFacAddress').value = facAddress;                                                 
    }

    function modalDelete(x){
                      
        var hidden_facID = "hidden_facID_"+x.value;
        var hidden_facName = "hidden_facName_"+x.value;
        var hidden_facCate = "hidden_facCate_"+x.value;
        var hidden_facAddress = "hidden_facAddress_"+x.value;
                                  
        var facID =document.getElementById(hidden_facID).value;
        var facName =document.getElementById(hidden_facName).value;
        var facCate =document.getElementById(hidden_facCate).value;
        var facAddress =document.getElementById(hidden_facAddress).value;

        document.getElementById('DtxtFacID').value = facID;
        document.getElementById('DtxtFacName').value = facName;
        document.getElementById('DtxtFacCate').value = facCate;
        document.getElementById('DtxtFacAddress').value = facAddress;                                                 
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
                                         <li><a href="maintenance_household.html">Household</a>
                                        </li>
                                        <li><a href="maintenance_family.html">Family</a>
                                        </li>
                                         <li><a href="maintenance_resident.html">Resident</a>
                                        </li>
                                        <li><a href="maintenance_official.html">Barangay Personnel</a>
                                        </li> 
                                        <li><a href="maintenance_event.html">Event</a>
                                        </li>
                                        <li><a href="maintenance_docu.html">Document</a>
                                        </li>
                                        <li><a href="maintenance_items.html">Item</a>
                                        </li>
                                        <li><a href="maintenance_facility.html">Facility</a>
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
                                    <h2>Facility </h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                        
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:12px">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"Select * from facility where FacilityStatus != 'inactive'");
                                            echo"

                                        <thead>
                                            <tr class='headings'>
                                                
                                                <th>Facility ID</th>
                                                <th>Name</th>
                                                <th>Category</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>";

                                         while($row = mysqli_fetch_array($q))
                                            {
                                                $facID = $row['FacilityID'];
                                                $facName = $row['FacilityDesc'];
                                                $facCate = $row['FacilityCategory'];
                                                $facAddress = $row['Address'];


                                                echo "
                                            <tr class='odd pointer'>
                                               

                                                <td >$facID</td>
                                                <td >$facName</td>
                                                <td >$facCate</td>
                                                <td >$facAddress</td>
                                                <td> 
                                                    <button class='btn btn-success' data-toggle='modal' data-target='#facilityEdit' id = 'btnEdit' name = 'btnEdit' value = '$facID' onclick = 'modalEdit(this)'>Edit</button>
                                                    <button class='btn btn-danger' data-toggle='modal' data-target='#facilityDelete' id = 'btnDelete' name = 'btnDelete' value = '$facID' onclick = 'modalDelete(this)'>Delete</button>
                                                </td>
                                                <td>
                                                    <input type = 'text' value = '$facID' id='hidden_facID_$facID'>
                                                    <input type = 'text' value = '$facName' id='hidden_facName_$facID'>
                                                    <input type = 'text' value = '$facCate' id='hidden_facCate_$facID'>
                                                    <input type = 'text' value = '$facAddress' id='hidden_facAddress_$facID'>
                                                
                                                </td>
                                            </tr>";
                                        }
                                        echo"
                                        </tbody>";
?>
                                    </table>
                                   

                                    
                                </div>
                                <br>  
                                <center>
                                    
                                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#facility">Add</button>
                                
                                
                                
                                </center>
                                
                                
                                    
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
    <form method = "POST" action = "mfacility.php">
  <div class="modal fade" id="facility" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Facility</h4>
        </div>
		
        <div class="modal-body">
			<form method="post">
					<div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Facility ID:</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="txtFacID"
                                name = "txtFacID"
                                >
                        </div>   
					</div>
                    <br>
                    <br>
                    <br>
					
					<div class="form-inline">
						<label class="control-label"> Name:</label> 
                            <input type="text"
                                style="margin-left:32px" 
                                class="form-control"
                                id="txtFacName"
                                name="txtFacName"
                                required="required">
					</div>
					<br>

                    <div class="form-inline">
                        <label class="control-label"> Category:</label> 
                            <select
                                style="margin-left:12px"
                                class="form-control"
                                id="txtFacCate"
                                name="txtFacCate"
                                required="required">
                                    <option>Educational</option>
                                    <option>Conference/Meeting</option>
                                    <option>Multi-purpose</option>
                                    <option>Sports</option>
                            </select>
                    </div>
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Address:</label> 
                            <input type="text" 
                                style="margin-left:15px"
                                class="form-control"
                                id="txtFacAddress"
                                name="txtFacAddress"
                                required="required">
                    </div>
                    <br>
                    
			</div>		
                    

        <div class="modal-footer">
		  <button type="submit" class="btn btn-primary" name = "btnSubmit">Submit</button>
        </div>
		</form>
	
        </div>
      </div>
      
    </div>
  </div>

</form>

    <!-- Modal -->
    <form method = "POST" action = "mfacility.php">
  <div class="modal fade" id="facilityEdit" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Facility</h4>
        </div>
        
        <div class="modal-body">
            <form method="post">
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Facility ID:</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="EtxtFacID"
                                name = "EtxtFacID"
                                readonly="readonly"
                                >
                        </div>   
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    <div class="form-inline">
                        <label class="control-label"> Name:</label> 
                            <input type="text"
                                style="margin-left:32px" 
                                class="form-control"
                                id="EtxtFacName"
                                name="EtxtFacName"
                                required="required">
                    </div>
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Category:</label> 
                            <select 
                                style="margin-left:12px"
                                class="form-control"
                                id="EtxtFacCate"
                                name="EtxtFacCate"
                                required="required">
                                    <option>Educational</option>
                                    <option>Conference/Meeting</option>
                                    <option>Multi-purpose</option>
                                    <option>Sports</option>
                            </select>
                    </div>
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Address:</label> 
                            <input type="text" 
                                style="margin-left:15px"
                                class="form-control"
                                id="EtxtFacAddress"
                                name="EtxtFacAddress"
                                required="required">
                    </div>
                    <br>
                    
            </div>      
                    

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name = "btnSubmitEdit">Submit</button>
        </div>
        </form>
    
        </div>
      </div>
      
    </div>
  </div>

</form>

    <form method = "POST" action = "mfacility.php">
  <div class="modal fade" id="facilityDelete" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure you want to DELETE this facility?</h4>
        </div>
        
        <div class="modal-body">
            <form method="post">
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Facility ID:</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px";
                                class="form-control"
                                id="DtxtFacID"
                                name = "DtxtFacID"
                                readonly="readonly";
                                >
                        </div>   
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    <div class="form-inline">
                        <label class="control-label"> Name:</label> 
                            <input type="text"
                                style="margin-left:32px" 
                                class="form-control"
                                id="DtxtFacName"
                                name="DtxtFacName"
                                required="required"
                                readonly="readonly";>

                    </div>
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Category:</label> 
                            <select
                                style="margin-left:12px"
                                class="form-control"
                                id="DtxtFacCate"
                                name="DtxtFacCate"
                                required="required"
                                readonly="readonly";>
                                    <option>Educational</option>
                                    <option>Conference/Meeting</option>
                                    <option>Multi-purpose</option>
                                    <option>Sports</option>
                            </select>
                    </div>
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Address:</label> 
                            <input type="text" 
                                style="margin-left:15px"
                                class="form-control"
                                id="DtxtFacAddress"
                                name="DtxtFacAddress"
                                required="required"
                                readonly="readonly";>
                    </div>
                    <br>
                    
            </div>      
                    

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name = "btnSubmitDelete">Submit</button>
        </div>
        </form>
    
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

        <!-- input mask -->
        <script src="js/input_mask/jquery.inputmask.js"></script>


        <!-- Datatables -->
        <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script src="js/datatables/tools/js/dataTables.tableTools.js"></script>
	       <!-- form validation -->
         <script src="js/validator/validator.js"></script>
	
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

        <!-- input_mask -->
        <script>
            $(document).ready(function () {
                $(":input").inputmask();
            });
        </script>
        <!-- /input mask -->
</body>

</html>