<section id="program" class="parallax-section">

	

	<div class="container">
		<div class="row">
			<div class="col-md-4"> 
		<h2>NUESA National Conference 2018</h2>
		<span>Register for National conference below</span>

	</div>
          <div class="col-md-7">
	
	<form action="paynow" method="post">
		<input type="hidden" name="year" value="<?php echo date("Y")?>">
		<div class="form-group"> Your full Name
			<input class="form-control" type="text" name="name" placeholder="Your Full Name" required>
		</div>
		<div class="form-group"> Email <i> (use a valid email)</i>
			<input class="form-control" type="email" name="email" placeholder="E-mail" required>
		</div>
		<div class="form-group">Phone
			<input class="form-control" type="text" name="phone" placeholder="Phone" required>
		</div>
		<div class="form-group">Institution
			<input class="form-control" type="text" name="institution" placeholder="Institution" required>
		</div>
		<div class="form-group">Chapter
			<input class="form-control" type="text" name="chapter" placeholder="Chapter" required>
		</div>
		<div class="form-group">Department
			<input class="form-control" type="text" name="department" placeholder="Department" required>
		</div>
		<div class="form-group">Level
			<input class="form-control" type="text" name="level" placeholder="level">
		</div>

		<div class="form-group">Registration Fee (NGN) N4000
			<input class="form-control" type="hidden" name="amount" placeholder="" value="4000" >
			<input class="form-control" type="text" name="amount" placeholder="" value="4000" disabled>
		</div>
		
		<div class="form-group">
			<input class="btn btn-success" type="submit" name="proceed" value="proceed">
		</div>
	</form>
</div>
</div>
</div>
</section>