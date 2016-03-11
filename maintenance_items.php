 <script type = text/javascript>
    function valueModal(x){
                      
        var hidden_id = "hidden_id_"+x.value;
		var hidden_desc = "hidden_desc_"+x.value;
		var hidden_qty = "hidden_qty_"+x.value;
		var hidden_avail = "hidden_avail_"+x.value;
												
		var id =document.getElementById(hidden_id).value;
		var desc =document.getElementById(hidden_desc).value;
		var qty =document.getElementById(hidden_qty).value;
		var avail =document.getElementById(hidden_avail).value;

        document.getElementById('EtxtItemID').value = id;
		document.getElementById('EtxtItemName').value = desc;
		document.getElementById('EtxtItemQty').value = qty;
		document.getElementById('EtxtItemStock').value = avail;
															
															
	}

        function deleteValue(x){
                      
        var hidden_id = "hidden_id_"+x.value;
        var hidden_desc = "hidden_desc_"+x.value;
        var hidden_qty = "hidden_qty_"+x.value;
        var hidden_avail = "hidden_avail_"+x.value;
                                                
        var id =document.getElementById(hidden_id).value;
        var desc =document.getElementById(hidden_desc).value;
        var qty =document.getElementById(hidden_qty).value;
        var avail =document.getElementById(hidden_avail).value;

        document.getElementById('DtxtItemID').value = id;
        document.getElementById('DtxtItemName').value = desc;
        document.getElementById('DtxtItemQty').value = qty;
        document.getElementById('DtxtItemStock').value = avail;
                                                            
                                                            
    }
															
    function myFunction1(form) {
        

        var letters = /^[.,A-Za-z\ \-]+$/;  
   if(form.txtItemDescription.value.match(letters))  
     {  
      return true;  
     }  
   else  
     {  
     alert("MALI!!!!");  
     return false;  
     }  
    }

    function myFunction2(form) {
        

        var letters = /^[.,A-Za-z\ \'']+$/;  
   if(form.EtxtItemName.value.match(letters))  
     {  
      return true;  
     }  
   else  
     {  
     alert("MALI!!!!");  
     return false;  
     }  
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
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:12px">
                                        <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"Select * from item_inventory where ItemStatus != 'inactive'");
                                            
                                        echo "<thead>
                                            <tr class=headings>
                                                
                                                <th>ID</th>
                                                <th>Description </th>
                                                <th>Quantity</th>
                                                <th>Available Stock</th>
                                                <th>edit</th>
                                                <th></th>
												
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            ";
                                            
                                            while($row = mysqli_fetch_array($q))
                                            {
                                                $id = $row['ItemID'];
                                                $description = $row['ItemDesc'];
                                                $quantity = $row['ItemQuantity'];
                                                $avail = $row['ItemAvailableQty'];

                                        
                                            echo "
                                                    
                                                <tr class=odd pointer>

                                                    



                                                    <td>$id</td>
                                                    <td>$description</td>
                                                    <td>$quantity</td>
                                                    <td>$avail</td>
                                                    <td>
                                                            <Button class='btn btn-success' name='btnEdit' id='btnEdit' value = '$id' data-target=#itemEdit data-toggle=modal onclick ='valueModal(this);'>  Edit </button>
                                                            <button class='btn btn-danger' data-toggle='modal' data-target='#itemDelete' value = '$id' name = 'btnDelete' onclick='deleteValue(this)'>Delete</button>
                                                    </td>

                                                    <td>
                                                    <input type = 'hidden' value = '$id' id='hidden_id_$id'>
                                                    <input type = 'hidden' value = '$description' id='hidden_desc_$id'>
                                                    <input type = 'hidden' value = '$quantity' id='hidden_qty_$id'>
                                                    <input type = 'hidden' value = '$avail' id='hidden_avail_$id'>
                                                
                                                    </td>
                                                    </tr>



                                                    ";


                                                
                                             }  

                                             ?>
                                                   
                                                    <?php
                                            
                                              echo"
                                        </tbody>";
                                        ?> 

                                    </table>
                                   
                                   <!-- </form> -->
                                </div>
                                <br>  
                                <center>
                                    
                                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#items">Add</button>
                                
                                
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
   <form method = POST action = "mItems.php" onsubmit="return myFunction1(this)">
  <div class="modal fade" id="items" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Items</h4>
        </div>
        <div class="modal-body">
		<center>
					 <div class="form-inline">
							<label for="surname" style="margin-left: 20px;">Item ID:</label> 
                            <input type="text" class="form-control" id="surname" placeholder="ID" style="margin-right: 10px;" name = "txtItemID">
					</div> <br>
					
					 <div class="form-inline">
							<label for="givenname">Item Description:</label>	
                            <input type="text" class="form-control" id="givenname" placeholder="Description" style="margin-right: 10px;" name = "txtItemDescription" REQUIRED>
					</div> <br>
					
					<div class="form-inline">
							<label for="givenname">Quantity:</label>	
                            <input min = "0" type="number" class="form-control" id="givenname" placeholder="Quantity" style="margin-right: 10px;" name = "txtQuantity">
					</div> <br>
					<div class="form-inline">
							<label for="givenname">Available Stock:</label>	
                            <input min = "0" type="number" class="form-control" id="givenname" placeholder="Available Stock" style="margin-right: 10px;" name = "txtStock">
					</div> <br>
		</center>
		
			  <div class="modal-footer">
          <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" name = btnSubmit>Submit</button>
        </div>
		
      </div>
	  
    </div>

	
        </div>
      </div>
  </form>
 

   <!-- Modal -->
   <form method = POST action = "mItems.php" onsubmit="return myFunction2(this)">
  <div class="modal fade" id="itemEdit" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Items</h4>
        </div>
        <div class="modal-body">
        <center>
                     <div class="form-inline" >
                            <label for="surname" style="margin-left: 20px;">Item ID:</label> 
                            <input readonly="readonly" type="text" class="form-control" placeholder="ID" style="margin-right: 10px;" name = "EtxtItemID" id ="EtxtItemID" >
                    </div> <br>
                    
                     <div class="form-inline">
                            <label for="givenname">Item Description:</label>    
                            <input type="text" class="form-control" id="EtxtItemName" name="EtxtItemName" placeholder="Description" style="margin-right: 10px;" REQUIRED>
                    </div> <br>
                    
                    <div class="form-inline">
                            <label for="givenname">Quantity:</label>    
                            <input min = "0" type="number" class="form-control" id="EtxtItemQty" name="EtxtItemQty" placeholder="Quantity" style="margin-right: 10px;" >
                    </div> <br>
                    <div class="form-inline">
                            <label for="givenname">Available Stock:</label> 
                            <input min = "0" type="number" class="form-control" id="EtxtItemStock"  name="EtxtItemStock" placeholder="Available Stock" style="margin-right: 10px;" >
                    </div> <br>


        </center>
        
              <div class="modal-footer">
          <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" name = btnSubmitEdit >Submit</button>
        </div>
        
      </div>
      
    </div>

    
        </div>
      </div>
  </form>


  <!-- Modal -->
   <form method = POST action = "mItems.php" onsubmit="return myFunction2(this)">
  <div class="modal fade" id="itemDelete" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure you want to DELETE this item?</h4>
        </div>
        <div class="modal-body">
        <center>

                     <div class="form-inline" >
                            <label for="surname" style="margin-left: 20px;">Item ID:</label> 
                            <input readonly="readonly" type="text" class="form-control" placeholder="ID" style="margin-right: 10px;" name = "DtxtItemID" id ="DtxtItemID"  readonly="readonly">
                    </div> <br>
                    
                     <div class="form-inline">
                            <label for="givenname">Item Description:</label>    
                            <input readonly="readonly" type="text" class="form-control" id="DtxtItemName" name="DtxtItemName" placeholder="Description" style="margin-right: 10px;" REQUIRED readonly="readonly">
                    </div> <br>
                    
                    <div class="form-inline">
                            <label for="givenname">Quantity:</label>    
                            <input readonly="readonly" min = "0" type="number" class="form-control" id="DtxtItemQty" name="DtxtItemQty" placeholder="Quantity" style="margin-right: 10px;" readonly="readonly">
                    </div> <br>
                    <div class="form-inline">
                            <label for="givenname">Available Stock:</label> 
                            <input readonly="readonly" min = "0" type="number" class="form-control" id="DtxtItemStock"  name="DtxtItemStock" placeholder="Available Stock" style="margin-right: 10px;" readonly="readonly">
                    </div> <br>
        </center>
        
              <div class="modal-footer">
          <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary" name = btnSubmitDelete>Submit</button>
        </div>
        
      </div>
      
    </div>

    
        </div>
      </div>
  </form>
 

    </div>
  </div>

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