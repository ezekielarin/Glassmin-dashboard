<div class="col-md-5">
  <form action="settings/update"  method="post">
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $settings->id?>" >
      <label>Site Title</label>
      <input class="form-control" type="text" name="site_title" placeholder=" Title of Site" value="<?php echo $settings->site_title?>">
    </div>
    <div class="form-group">
      <label>Addresses</label>
      <textarea class="form-control" name="address" placeholder="Office Address"><?php echo $settings->address?></textarea>
    </div>
    <div class="form-group"><label>Phone Numbers</label>
      <input class="form-control" type="text" name="phone" placeholder="+234859594334, +23343454545" value="<?php echo $settings->phone?>">
    </div>
    <div class="form-group"><label>Emails</label>
      <input class="form-control" type="text" name="email" placeholder="mai@gmail.com, mail2@gmail.com," value="<?php echo $settings->email?>">
    </div>
    <div class="form-group">
        <input class="btn btn-success" type="submit" name="save"  value="save">
    </div>
   
  </form>
</div>