
<div class="col-md-5">
  <form action="" method="post">
    <div class="form-group">
      <input class="form-control" type="hidden" name="id" placeholder="Name" value="<?php echo $team_mem->id?>" >
      <input class="form-control" type="text" name="name" placeholder="Name" value="<?php echo $team_mem->name?>" >
    </div>
    
    <div class="form-group">
      <input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo $team_mem->email ?>" >
    </div>
    
    <div class="form-group">
      <input class="form-control" type="text" name="phone" placeholder="Phone" value="<?php echo $team_mem->phone ?>" >
    </div>
    
    <div class="form-group">
      <input class="form-control" type="text" name="address" placeholder="Address" value="<?php echo $team_mem->address ?>" >
    </div>
    
    <div class="form-group">
       <input class="form-control" type="text" name="position" placeholder="Position" value="<?php echo $team_mem->position ?>" >
    </div>
   
    <div class="form-group">
      <input class="form-control" type="text" name="place_of_work" placeholder="Place of work" value="<?php echo $team_mem->place_of_work ?>" >
    </div>
    
    
    <div class="form-group">
      <input class="btn btn-success" type="submit" name="update" value="update">
    </div>
    
  </form>
</div>

<div>
  <div>
    <img src="/uploads/images/<?php echo $team_mem->photo?>" width="50%" height="300">
  </div>
  <form method="post" action="<?php echo base_url() ?>admin/team/update_photo" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $team_mem->id?>">
    <input type="file" name="picture">
    <div>
      <input type="submit" name="upload" value="upload">
    </div>

  </form>
</div>
