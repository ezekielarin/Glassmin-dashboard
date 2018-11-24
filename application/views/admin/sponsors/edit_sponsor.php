
<div class="col-md-5">
  <form action="" method="post">
    <div class="form-group">
      <input class="form-control" type="hidden" name="id" placeholder="Name" value="<?php echo $sponsor->id?>" >
      <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $sponsor->name?>" >
    </div>
    
    <div class="form-group">
      <input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $sponsor->email ?>" >
    </div>
        
    <div class="form-group">
      <input class="btn btn-success" type="submit" name="update" value="update">
    </div>
    
  </form>
</div>

<div>
  <div>
    <img src="/uploads/images/<?php echo $sponsor->logo?>" width="50%" height="300">
  </div>
  <form method="post" action="<?php echo base_url() ?>admin/sponsors/update_photo" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $sponsor->id?>">
    <input type="file" name="picture">
    <div>
      <input type="submit" name="upload" value="upload">
    </div>

  </form>
</div>
