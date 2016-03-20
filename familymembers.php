<!-- Modal -->
<form method = POST action = "mfamily.php">
  <div class="modal fade" id="familyMember" role="dialog">
    <div class="modal-dialog modal-lg" style="width:750px">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Family Members</h4>
        </div>
        <div class="modal-body">
                    <div class="form-inline">
                        <div style = "float:right">
                        <label class="control-label"> Family ID:</label> 
                            <input  type="text" 
                                style="margin-left:20px; width:70px"
                                class="form-control"
                                id="txtMFamID"
                                name="txtFamID"
                                readonly="readonly">
                        </div>   
                    </div>

                    <br>
                    <br>
                    <br>

                    <table  style="border-spacing: 17px;border-collapse: separate;font-size: 12px">
                                <tbody  style="text-align: right">
                                    <!--1st row-->
                                    <tr>
                                        <td><label for="lastname">Residents ID</label></td> 
                                        <td><input type="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="RtxtID" 
                                                   placeholder="Residents ID" 
                                                   name = "RtxtID" 
                                                   REQUIRED></td>
                                 
                                
                                   
                                        <td><label for="name">Name</label></td>
                                        <td><input type ="text" 
                                                   class="form-control"
                                                   maxlength="45" 
                                                   id="RtxtName" 
                                                   placeholder="Name" 
                                                   name = "RtxtName" 
                                                   readonly="readonly"></td>
        
                                
                                        <td><label class="control-label">Relation to the Head</label></td>
                                        <td><select
                                                class="form-control"
                                                id="RRelation"
                                                name="RRelation"
                                                required>
                                                    <option>Husband</option>
                                                    <option>Wife</option>
                                                    <option>Son</option>
                                                    <option>Daughter</option>
                                                    <option>Son-in-law</option>
                                                    <option>Daughter-in-law</option>
                                                    <option>Father-in-law</option>
                                                    <option>Mother-in-law</option>
                                                    <option>Grandson</option>
                                                    <option>Granddaughter</option>
                                                    <option>Father</option>
                                                    <option>Mother</option>
                                                    <option>Relative-male</option>
                                                    <option>Relative-female</option>
                                                    <option>Househelp-male</option>
                                                    <option>Househelp-female</option>
                                            </select></td>

                                    </tr>
                                </tbody>
                    </table>
                    <br><br><br>
                    
                    
                    <div class="x_content">
                        <table class="table table-hover" style="font-size: 12px; text-align: center;">

                            <?php
                                            require("connection.php");
                                            $q = mysqli_query($con,"select  FamilyID,  FResidentID, ResidentID, LastName, FirstName, MidName, RelationToHead, FMemberStat from family_member, resident_personaldata where FResidentID = ResidentID and FMemberStat != 'inactive' order by FMemberNo asc;");


                                        echo "<thead>
                                            <tr class='headings'>
                                                
                                                <th>Name</th>
                                                <th>Relation to the Head</th>
                                                <th>Action</th>
                                                <th></th>

                                               
                                                
                                            </tr>
                                        </thead>

                                        <tbody>" ;



                                        while($row = mysqli_fetch_array($q))
                                            {
                                                $famID = $row['FamilyID'];
                                                $resID = $row['FResidentID'];
                                                $famRel = $row['RelationToHead'];
                                                $lname = $row['LastName'];
                                                $fname = $row['FirstName'];
                                                $mname = $row['MidName'];

                                                $name = $lname . ', ' . $fname . " " . $mname;

                                            echo"
                                            <tr class='odd pointer'>
                                                

                                                <td>$name</td>
                                                <td>$famRel</td>  
                                                <td>
                                                    <span data-toggle='tooltip' title='Edit' data-placement='left'><Button class='btn btn-success' name='btnEdit' id='btnEdit' value = '$famID' data-target=#familyEdit data-toggle=modal onclick = 'modalEdit(this);' ><i class='glyphicon glyphicon-pencil' aria-hidden='true'> </i></button></span>

                                                     <span data-toggle='tooltip' title='Delete' data-placement='left'><Button class='btn btn-danger' name='btnDelete' id='btnDelete' value = '$famID' data-target=#familyDelete data-toggle=modal onclick = 'modalDelete(this);' > <i class='glyphicon glyphicon-remove' aria-hidden='true'> </i> </button></span>
                                                
                                                </td>

                                                <td>
                                                    <input type = 'hidden' value = '$famID' id = 'hidden_famID_$famID'>
                                                    <input type = 'hidden' value = '$resID' id = 'hidden_resID_$famID'>
                                                    <input type = 'hidden' value = '$famRel' id = 'hidden_famRel_$famID'>
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
        
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name = btnSubmit style="float:right">Submit</button>
        </div>

        

         
        
      </div>
      
    </div>

    
        </div>

</form>


      </div>
      
    </div>
  </div>