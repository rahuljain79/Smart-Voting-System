<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #92a8d1;color:black ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
             
              <h2 class="modal-title"><b>Add New Voter</b></h2>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email Id</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="aadhar" class="col-sm-3 control-label">Aadhar No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="aadhar" name="aadhar" maxlength="12" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left"style='background-color:  #FFDEAD  ;color:black ; font-size: 18px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-curve" style='background-color:  #9CD095  ;color:black ; font-size: 18px; font-family:Times' name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #92a8d1 ;color:black ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              
              <h2 class="modal-title"><b>Edit Voter</b></h2>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left"style='background-color:  #FFDEAD  ;color:black ; font-size: 18px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-curve"style='background-color:  #9CD095 ;color:black ; font-size: 18px; font-family:Times' name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #92a8d1 ;color:black ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              
              <h2 class="modal-title"><b>Deleting...</b></h2>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <h3><p>DELETE VOTER</p></h3>
                    <h4 class="bold fullname"></h4>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left" style='background-color:  #FFDEAD  ;color:black ; font-size: 18px; font-family:Times'data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-curve"style='background-color:  #ff8e88  ;color:black ; font-size: 18px; font-family:Times' name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #92a8d1 ;color:black ; font-size: 15px; font-family:Times ">
            <div class="modal-header">
              
              <h2 class="modal-title"><b><span class="fullname"></span></b></h2>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-curve pull-left"style='background-color: #FFDEAD  ;color:black ; font-size: 18px; font-family:Times' data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-curve"style='background-color: #9CD095 ;color:black ; font-size: 18px; font-family:Times' name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     