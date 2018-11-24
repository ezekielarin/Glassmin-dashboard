
<div class="col-md-5">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input class="form-control" type="text" name="name" placeholder="Name" >
    </div>
    
    <div class="form-group">
      <input class="form-control" type="text" name="email" placeholder="Email" >
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
                    $members = $this->db->query("SELECT * FROM sponsors")->result();
                        if ($members) {
                            foreach ($members as $mem) {
                                ?>
                            <tr>
                                <td></td>
                                <td><?php echo $mem->name;?></td>
                                <td><?php echo $mem->email;?></td>

                                <td><a href="sponsors/delete/<?php echo $mem->id;?>">delete</a></td>
                                <td><a href="sponsors/edit/<?php echo $mem->id;?>">edit</a></td>
                                
                            </tr>

                                <?php
                              
                            }
                         }else{
                            echo "<tr>";
                            echo "<td>You Currently Do not Have any sponsors</td>";
                            echo "</td></tr>";
                         }
                        
                        ?>
            </table>
        </div>

</section>

        