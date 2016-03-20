<script type = text/javascript>
    function modalEdit(x)
    {

        var hidden_famID = "hidden_famID_" + x.value;
        var hidden_famCate = "hidden_famCate_" + x.value;
        var hidden_famHeadID = "hidden_famHeadID_" + x.value;
        var hidden_name = "hidden_name_" + x.value;

        var famID = document.getElementById(hidden_famID).value;
        var famCate = document.getElementById(hidden_famCate).value;
        var famHeadID = document.getElementById(hidden_famHeadID).value;
        var name = document.getElementById(hidden_name).value;

        document.getElementById('EtxtFamID').value = famID;
        document.getElementById('EtxtFamCate').value = famCate;
        document.getElementById('EtxtFamHeadID').value = famHeadID;
        document.getElementById('EtxtFamHead').value = name;
    }

    function modalDelete(x)
    {

        var hidden_famID = "hidden_famID_" + x.value;
        var hidden_famCate = "hidden_famCate_" + x.value;
        var hidden_famHeadID = "hidden_famHeadID_" + x.value;
        var hidden_name = "hidden_name_" + x.value;

        var famID = document.getElementById(hidden_famID).value;
        var famCate = document.getElementById(hidden_famCate).value;
        var famHeadID = document.getElementById(hidden_famHeadID).value;
        var name = document.getElementById(hidden_name).value;

        document.getElementById('DtxtFamID').value = famID;
        document.getElementById('DtxtFamCate').value = famCate;
        document.getElementById('DtxtFamHeadID').value = famHeadID;
        document.getElementById('DtxtFamHead').value = name;
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
                                    <h2>Family </h2>
                                    

                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#family" style="float:right"><span class='glyphicon glyphicon-plus' aria-hidden='true' style="color:white"></span>   Add Family</button>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:14px; text-align: center">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"select FamilyID, FamilyType, FamilyHeadID, LastName, FirstName, MidName, FamilyStatus from family, resident_personaldata where FamilyHeadID = ResidentID and FamilyStatus != 'inactive' order by FamilyID asc;");


                                        echo "<thead>
                                            <tr class='headings'>
                                                
                                                <th>ID</th>
                                                <th>Family Type</th>
                                                <th>Head</th> 
                                            
                                                <th>Action</th>
                                                <th></th>
                                               
												
                                            </tr>
                                        </thead>

                                        <tbody>" ;

                                        while($row = mysqli_fetch_array($q))
                                            {
                                                $famID = $row['FamilyID'];
                                                $famCate = $row['FamilyType'];
                                                $famHeadID = $row['FamilyHeadID'];
                                                $lname = $row['LastName'];
                                                $fname = $row['FirstName'];
                                                $mname = $row['MidName'];

                                                $name = $lname . ', ' . $fname . " " . $mname;

                                            echo"
                                            <tr class='odd pointer'>
                                                

                                                <td>$famID</td>
                                                <td>$famCate</td>
                                                <td>$name</td>  
                                                
                                                <td>
                                                    <Button class='btn btn-success' name='btnEdit' id='btnEdit' value = '$famID' data-target=#familyEdit data-toggle=modal onclick = 'modalEdit(this);' >  Edit </button>
                                                    <Button class='btn btn-danger' name='btnDelete' id='btnDelete' value = '$famID' data-target=#familyDelete data-toggle=modal onclick = 'modalDelete(this);' >  Delete </button>
                                                
                                                </td>

                                                <td>
                                                    <input type = 'hidden' value = '$famID' id = 'hidden_famID_$famID'>
                                                    <input type = 'hidden' value = '$famCate' id = 'hidden_famCate_$famID'>
                                                    <input type = 'hidden' value = '$famHeadID' id = 'hidden_famHeadID_$famID'>
                                                    <input type = 'hidden' value = '$name' id = 'hidden_name_$famID'>

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
   <form method = POST action = "mfamily.php">
  <div class="modal fade" id="family" role="dialog">
    <div class="modal-dialog modal-sm" style="width:700px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Family</h4>
        </div>
        <div class="modal-body">
        <center>
		            <div class="form-inline" hidden="hidden">
                        <div style = "float:right">
                        <label class="control-label"> Family ID:</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px"
                                class="form-control"
                                id="txtFamID"
                                name="txtFamID"
                                readonly 
                                >
                        </div>   
                    </div>
                    
                    <div class="form-inline">
                        <label class="control-label"> Family Type:</label> 
                            <select
                                style="margin-left:12px"
                                class="form-control"
                                id="txtFamCate"
                                name="txtFamCate"
                                >
                                    <option>Married Couple w/ Child(ren)</option>
                                    <option>Married Couple w/o Child(ren)</option>
                                    <option>Single Parent w/ Child(ren)</option>
                                    <option>Single Parent w/ Child(ren)</option>
                                    <option>Single Parent w/o Child(ren)</option>
                                    <option>Family living with relatives</option>
                                    <option>Family living with non-relatives</option>
                            </select>
                    </div>
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Resident ID:</label> 
                            <input type="text" 
                                
                                class="form-control"
                                
                                required="required"
                                id="txtFamHeadID"
                                name="txtFamHeadID"

                                >
                    </div><br>
                    
                    <br>
            </div>
		</center>
			  <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name = btnSubmit>Submit</button>
        </div>

        

         
		
      </div>
	  
    </div>

	
        </div>

</form>



<!-- Modal -->
   <form method = POST action = "mfamily.php">
  <div class="modal fade" id="familyEdit" role="dialog">
    <div class="modal-dialog modal-sm" style="width:700px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Family</h4>
        </div>
        <div class="modal-body">
        <center>
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Family ID:</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px"
                                class="form-control"
                                id="EtxtFamID"
                                name="EtxtFamID"
                                readonly 

                                >
                        </div>   
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    <div class="form-inline">
                        <label class="control-label"> Family Type:</label> 
                            <select
                                style="margin-left:12px"
                                class="form-control"
                                id="EtxtFamCate"
                                name="EtxtFamCate"
                               >
                                     <option>Married Couple w/ Child(ren)</option>
                                    <option>Married Couple w/o Child(ren)</option>
                                    <option>Single Parent w/ Child(ren)</option>
                                    <option>Single Parent w/ Child(ren)</option>
                                    <option>Single Parent w/o Child(ren)</option>
                                    <option>Family living with relatives</option>
                                    <option>Family living with non-relatives</option>
                            </select>
                    </div>
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Resident ID:</label> 
                            <input type="text" 
                                
                                class="form-control"
                                
                                required="required"
                                id="EtxtFamHeadID"
                                name="EtxtFamHeadID"

                                >
                    </div><br>
        
            </center>            <br>
            </div>
        
              <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name = btnSubmitEdit>Submit</button>
        </div>

        

         
        
      </div>
      
    </div>

    
        </div>

</form>


<!-- Modal -->
   <form method = POST action = "mfamily.php">
  <div class="modal fade" id="familyDelete" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Family</h4>
        </div>
        <div class="modal-body">
        <center>
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Family ID:</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px"
                                class="form-control"
                                id="DtxtFamID"
                                name="DtxtFamID"
                                readonly 

                                >
                        </div>   
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    <div class="form-inline">
                        <label class="control-label"> Family Type:</label> 
                            <select
                                style="margin-left:12px"
                                class="form-control"
                                id="DtxtFamCate"
                                name="DtxtFamCate"
                                readonly>
                                    <option>Married Couple w/ Child(ren)</option>
                                    <option>Married Couple w/o Child(ren)</option>
                                    <option>Single Parent w/ Child(ren)</option>
                                    <option>Single Parent w/ Child(ren)</option>
                                    <option>Single Parent w/o Child(ren)</option>
                                    <option>Family living with relatives</option>
                                    <option>Family living with non-relatives</option>
                            </select>
                    </div>
                    <br>

                    <div class="form-inline">
                        <label class="control-label"> Resident ID:</label> 
                            <input type="text" 
                                
                                class="form-control"
                                
                                readonly 
                                id="DtxtFamHeadID"
                                name="DtxtFamHeadID"

                                >
                    </div><br>
        
            </center>            <br>
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