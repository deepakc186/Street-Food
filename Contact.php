 <?php 
    $currentPage = 'Contact'; // current page is about, do the same for other page
    include('header.php');
?>    
<div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
                <form>
                    <div class="form-group row">
			<label for="validationDefault01" class="col-md-2 col-form-label">FirstName</label>
			<div class="col-md-10">
                            <input required type="text" class="form-control" id="validationDefault01" name="firstname"
					placeholder="First Name">
			</div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-form-label">LastName</label>
			<div class="col-md-10">
                            <input required type="text" class="form-control" id="lastname" name="lastname"
					placeholder="Last Name">
			</div>
                    </div>
                    <div class="form-group row">
			<label for="telenum" class="col-md-2 col-form-label">ContactTel.</label>
			<div class="col-5 col-sm-4 col-md-3">
                            <div class="input-group">
				<div class="input-group-addon">
                                      (
				</div>
                                    <input required type="tel" class="form-control" id="areacode" name="areacode"
					placeholder="AreaCode">
				<div class="input-group-addon">
                                       )
				</div>
							</div>
                        </div>
						<div class="col-7 col-sm-6 col-md-7">
							<input required type="tel" class="form-control" id="telnum" name="telnum"
								placeholder="Tel number">
						</div>
					</div>
					<div class="form-group row">
						<label for="emailid" class="col-md-2 col-form-label">Email</label>
							<div class="col-md-10">
							<input required type="email" class="form-control" id="emailid" name="emailid"
								placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<div class="form-check col-md-6 offset-md-2">
							<label class="form-check-label">
								<input type="checkbox" class="form-check-input" name="approve" value="">
								<strong>May we contact you?</strong>
							</label>
						</div>
						<div class="col-md-3" offset-md-1>
							<select class="form-control">
								<option>Tel.</option>
								<option>Email</option>
							</select>			
						</div>
					</div>
					<div class="form-group row">
						<label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
							<div class="col-md-10">
							<textarea class="form-control" id="feedback" name="feedback"
								rows="12"></textarea>
						</div>
					</div>
					
					<div class="form-group row">
						<div class="offset-md-2 col-md-10">
							<button type="submit" class="btn btn-primary">
								Send Feedback
							</button>
						</div>
					</div>
				</form>
            </div>
                <div class="col-12 col-md">
            </div>
       </div>




<?php
 include('Footer.php');
?>
<!--
<script>
bootstrapValidate('#emailid', 'email:Enter a valid E-Mail!');
bootstrapValidate('#feedback', 'min:10:Enter at least 5 Characters');
</script> -->