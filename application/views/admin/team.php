
<div class="col-md-5">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input class="form-control" type="text" name="name" placeholder="Name" >
    </div>
    
    <div class="form-group">
      <input class="form-control" type="text" name="email" placeholder="Email" >
    </div>
    
    <div class="form-group">
      <input class="form-control" type="text" name="phone" placeholder="Phone" >
    </div>
    
    <div class="form-group">
      <input class="form-control" type="text" name="address" placeholder="Address" >
    </div>
    
    <div class="form-group">
       <input class="form-control" type="text" name="position" placeholder="Position" >
    </div>
   
    <div class="form-group">
      <input class="form-control" type="text" name="place_of_work" placeholder="Place of work" >
    </div>
    
    <div class="form-group">
      <input class="form-control" type="file" name="picture">
    </div>
    
    <div class="form-group">
      <input class="btn btn-success" type="submit" name="add" value="add">
    </div>
    
  </form>
</div>

<section>
        <div class="col-lg-9">
            <div>
                <h3>Team</h3>
            </div>        
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Phone</th>
                </tr>

                    <?php
                    $members = $this->db->query("SELECT * FROM team")->result();
                        if ($members) {
                            foreach ($members as $mem) {
                                ?>
                            <tr>
                                <td></td>
                                <td><?php echo $mem->name;?></td>
                                <td><?php echo $mem->email;?></td>
                                <td><?php echo $mem->position;?></td>
                                <td><?php echo $mem->phone;?></td>
                                <td><a href="team/delete/<?php echo $mem->id;?>">delete</a></td>
                                <td><a href="team/edit/<?php echo $mem->id;?>">edit</a></td>
                                
                            </tr>

                                <?php
                              
                            }
                         }else{
                            echo "<tr>";
                            echo "<td>You Currently Do not Have any subscribers</td>";
                            echo "</td></tr>";
                         }
                        
                        ?>
            </table>
        </div>

</section>

		