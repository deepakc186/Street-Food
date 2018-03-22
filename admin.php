<?php
 require_once('appvars.php');
 include('./connectvars.php');
?>
<div class="row row-content">
           <div class="col-12">
              <h3>Add information</h3><br/><br/>
           </div>
            <div class="col-12 col-md-9">
                <form enctype="multipart/form-data" method="post" action="add.php" >
                     <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo GW_MAXFILESIZE; ?>" />
       <div class="form-group row">
            <label for="validationDefault01" class="col-md-2 col-form-label">FirstName</label>
                <div class="col-md-10">
                        <input required type="text" class="form-control" id="stallname" name="stallname"
			placeholder="Stall Name">
                </div>
        </div>
        <div class="form-group row">
                        <label for="Stalllocation" class="col-md-2 col-form-label">Stall Location</label>
			<div class="col-md-10">
                            <input required type="text" class="form-control" id="stalllocation" name="stalllocation"
					placeholder="Stall Location" >
			</div>
        </div>
        <div class="form-group row">
                        <label for="Areaname" class="col-md-2 col-form-label">Area Name</label>
			<div class="col-md-10">
                            <input required type="text" class="form-control" id="areaname" name="areaname"
					placeholder="Area Name">
			</div>
        </div>
         <div class="form-group row">
                        <label for="Foodname" class="col-md-2 col-form-label">Food Name</label>
			<div class="col-md-10">
                            <input required type="text" class="form-control" id="foodname" name="foodname"
					placeholder="Food Name">
			</div>
        </div>
        <div class="form-group row">
                        <label for="stallpic" class="col-md-2 col-form-label">Stall Pic:</label>
			<div class="col-md-10">
                            <input required type="file" class="form-control" id="stallpic" name="stallpic"
					>
			</div>
        </div>
        <div class="form-group row">
			<div class="offset-md-2 col-md-10">
                            <button type="submit" name="submit" class="btn btn-primary">
				ADD
                            </button>
			</div>
	</div>
</form>
    </div>
    </div>