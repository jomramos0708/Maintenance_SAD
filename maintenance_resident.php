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
                                <div class="x_content" style="overflow-x:auto">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table" style="font-size:12px;">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" class="tableflat">
                                                </th>
                                                <th>ID </th>
                                                <th>Name </th>
                                                <th>Address </th>
                                                <th>Purok No. </th>
                                                <th>Gender </th>
                                                <th>Civil Status </th>
                                                <th>Religion</th>
                                                <th>Citizenship</th>
                                                <th>Birth Date</th>
                                                <th>Birth Place</th>
                                                <th>Occupation</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Period of Residency</th>
                                                <th>Date of Residency</th>
                                                <th>Educational Attainment</th>
                                                <th>Language</th>
                                                <th>Contact No.</th>
                                                <th>Resident Classification</th>
                                                <th>Voter</th>
                                                <th>Renter</th>
                                                <th>Employed</th>
                                                <th>Status</th>
                                                <th>Illness</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="odd pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td>
                                                <td class=" ">000001</td>
                                                <td class=" ">Ramos, Jomari G.</td>
                                                <td class=" ">123 Peralta St, Sta. Mesa, Manila</td>
                                                <td class=" ">10</td>
                                                <td class=" ">M</td>
                                                <td class=" ">Single</td>
                                                <td class=" ">Christian</td>
                                                <td class=" ">Filipino</td>
                                                <td class=" ">07/07/1997</td>
                                                <td class=" ">Manila</td>
                                                <td class=" ">N/A</td>
                                                <td class=" ">170</td>
                                                <td class=" ">79</td>
                                                <td class=" ">6</td>
                                                <td class=" ">2013</td>
                                                <td class=" ">Undergraduate</td>
                                                <td class=" ">English, Filipino</td>
                                                <td class=" ">0999919222</td>
                                                <td class=" ">Student</td>
                                                <td class=" ">False</td>
                                                <td class=" ">True</td>
                                                <td class=" ">False</td>
                                                <td class=" ">False</td>
                                                <td class=" ">N/A</td>
                                               
                                        </tbody>

                                    </table>
                                   
                                    
                                </div>
                                <br>  
                                <center>
                                    
                                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#residents">Add</button>
                                
                                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#residents">Edit</button>
                                    
                                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#">Delete</button>
                                
                                
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
			<form method = POST action = "">	
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
			                            <input type="text" class="form-control" id="RtxtID" name = "RtxtID" Readonly>
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
			                            <td><input type="date" 
			                            		   class="form-control"
			                            		   id="RBirthDate"
			                            		   name = "RBirthDate" 
			                            		   REQUIRED></td>
								 
								
								   
										<td><label for="age">Age</label></td>
			                            <td><input type ="text" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtAge" 
			                            		   name = "RtxtAge" 
			                            		   readonly></td>
		
								
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
				                                    <input type="radio" class="flat" checked id="RGender" name="RGender"> Male
				                                </label>
                                            
                                           
                                                <label>
                                                  	<input type="radio" class="flat" id="RGender"name="RGender"> Female
                                              	</label>
                                            </div>
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
				                                name="Rcivilstatus"
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
				                                    <input type="radio" class="flat" checked id="RCitizenship" name="RCitizenship"> Filipino
				                                </label>
                                            
                                           
                                                <label>
                                                  	<input type="radio" class="flat" id="RCitizenship"name="RCitizenship"> Non-Filipino
                                              	</label>
                                            </div>
                    					</td>
			                        </tr>

                                     <!--5th row-->

                                     <tr>
                                        <td><label class="control-label">Voting Status</label></td>
                                        <td><select
                                                class="form-control"
                                                id="RVote"
                                                name="RVote">
                                                    <option>Not Registered</option>
                                                    <option>Registered in this Barangay</option>
                                                    <option>Registered in other Barangay</option>
                                                    <option>Not Applicable</option>
                                            </select></td>

                                        <td><label for="resperiod">Province*</label> </td>
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45"  
                                                   id="RProvince" 
                                                   name = "RProvince" 
                                                   required></td>
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
										<td><label for="mobile">Mobile No.</label></td>	
			                            <td><input type="text" 
			                            		   class="form-control"
			                            		   maxlength="11" 
			                            		   id="RtxtMobile" 
			                            		   name = "RtxtMobile"></td>

                                        <td><label for="mobile">Landline</label></td> 
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="11" 
                                                   id="RtxtLandline" 
                                                   name = "RtxtLandline"></td>
								 
								
								   
										<td><label for="email">Email Address</label></td>
			                            <td><input type ="email" 
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

							<table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
								<tbody  style="text-align: right">
									<tr>
										<td><label for="height">Height* <i>(in centimeters)</i></label></td>
			                            <td><input type ="text" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtHeight"  
			                            		   name = "RtxtHeight"
			                            		   required></td>

			                            <td><label for="weight">Weight* <i>(in kilograms)</i></label></td>
			                            <td><input type ="text" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtWeight"  
			                            		   name = "RtxtWeight"
			                            		   required></td>

			                            <td><label for="bmi">Body Mass Index</label></td>
			                            <td><input type ="text" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtBMI"  
			                            		   name = "RtxtBMI"
			                            		   readonly></td>

			                        </tr>
			                    </tbody>
			                </table>
			                <table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
								<tbody  style="text-align: right">
			                        <tr>

			                        	<td><label for="healthstat">Health Status</label></td>
			                            <td><input type ="text" 
			                            		   class="form-control"
			                            		   maxlength="45" 
			                            		   id="RtxtHealth"  
			                            		   name = "RtxtHealth"
			                            		   readonly></td>

			                            <td><label class="control-label"> Health Insurance</label></td>
										<td>       
											<div style="text-align: left" class="optionBox" id="abcd">
												
                                                        <label><input type="checkbox" class="flat" name="RInsurance[]"> PhilHealth</label><br>

                                                        <label><input type="checkbox" class="flat" name="RInsurance[]"> Blue/Yellow Card</label><br>
                                                
                                                        <label><input type="checkbox" class="flat" name="RInsurance[]"> Private Health Insurance</label><br>
                                                
                                                        <label><input type="checkbox" class="flat" name="RInsurance[]"> None </label><br>
                                                        <label><input type="checkbox" class="flat" name="none" id="none"> None </label><br>
            
                                                        
                                        </td>

                                        <td><label class="control-label"> Disability</label></td>
                                        <td>    
                                            <div style="text-align: left">
                                                <div class="checkbox">
                                   </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Cripple (Lumpo)
                                                    </label>
                                                 </div>
                                                 <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Mute
                                                    </label>
                                                 </div>
                                               	<div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Deaf
                                                    </label>
                                                </div>
                                                
												<div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Heart Disease
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Asthma
                                                    </label>
                                                </div>

                                            </div>
                                        <td>

                                      

                                        	<div style="text-align: left">

                                       
                                                
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Diabetes
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Tuberculosis
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Highblood Pressure
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Communcable Diseases
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Others
                                                    </label>
                                                </div>

                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> None
                                                    </label>
                                                </div>
                                            </div>
                                        </td>

                                            </div>
                                        </td>


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
							<table style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
								<tbody  style="text-align: right">
			                        <tr>
			                        	<td><label class="control-label">Currently Studying?</label></td>
				                        <td><select
				                                class="form-control"
				                                id="RCurrentEduc"
				                                name="RCurrentEduc"
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
				                                required>
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
				                                name="RHighesttEduc"
				                                required>
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
				        	<button type="submit" class="btn btn-primary">Submit</button>
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