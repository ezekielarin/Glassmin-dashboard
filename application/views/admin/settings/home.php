<div class="container">

<div class="col-md-5">
  <h3>Site Information</h3>
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

<div class="col-md-5">
  <div class="panel panel-warning">This section is not active</div>
  <h3>Social Network Profiles</h3>
  <form action="settings/update"  method="post">
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $settings->id?>" >
      <label>Facebook </label> <i class="fa fa-facebook"></i>
      <input class="form-control" type="text" name="facebook" placeholder="profile Link" value="<?php echo $settings->site_title?>">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $settings->id?>" >
      <label>Twitter </label> <i class="fa fa-twitter"></i>
      <input class="form-control" type="text" name="twitter" placeholder=" Profile Link" value="<?php echo $settings->site_title?>">
    </div>
    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $settings->id?>" >
      <label>Instagram </label> <i class="fa fa-instagram"></i>
      <input class="form-control" type="text" name="instagram" placeholder=" Profile Link" value="<?php echo $settings->site_title?>">
    </div>

    <div class="form-group">
        <input class="btn btn-success" type="submit" name="save"  value="save">
    </div>
   
  </form>
</div>

<div class="col-md-5">
  <h3>Authentication Methods</h3>
  <form action="settings/update"  method="post">
    <table class="table table-striped">
      <tr>
        <th>Platform</th>
        <th>Api Key</th>
        <th>Action</td>
      </tr>
      <tr>
        <td>Facebook</td>
        <td>
           <span></span><input class="form-control" type="text" name="facebook_key" placeholder="hoH98h8gug7GIkgfuuugfu">
         </td>
        <td>
          <a class="btn btn-primary" href="">activate</a>
        </td>
      </tr>
      <tr>
        <td>Twitter</td>
        <td>
           <span></span><input class="form-control" type="text" name="twitter_key" placeholder="hoH98h8gug7GIkgfuuugfu">
         </td>
        <td>
          <a class="btn btn-primary" href="">activate</a>
        </td>
      </tr>
    </table>
    
    <div class="form-group">
        <input class="btn btn-success" type="submit" name="save"  value="save">
    </div>
   
  </form>
</div>

</div>