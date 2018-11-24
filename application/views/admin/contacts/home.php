
               <div class="col-md-5">
                 <form method="post" action="" role="form">
                                
                                <div class="form-group">
                                    <lable class="control-label">Name:</label>
                                    <input type="text" class="form-control" name="name"  required="">
                                </div> 
                                 <div class="form-group">
                                    <lable class="control-label">Email</label>
                                     <input type="text" class="form-control" name="email" required="">
                                </div> 
                                <div class="form-group">
                                    <lable class="control-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="" required="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" name="add" value="Add">
                                </div>                                                                                                           
                            </form>
                         </div>

                         <div class="row">
                            <table  class="table table-bordered table-hover table-striped">

                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Options</th>
                                            </tr>
  
                                          <?php
                                       
                                        $contacts = $this->db->query("SELECT * FROM contacts")->result();

                                        foreach($contacts as $contacts) {

                                        $id = $contacts->id;
                                        ?>
                                       
                                     <tr>
                                        <td><?php echo $contacts->name ?></td>
                                        <td><?php echo $contacts->phone ?></td>
                                        <td><?php echo $contacts->email ?>
                                      <td><a  href="contacts/delete/<?php  echo $id ?>"><span></span>delete</a></td><td><a href="contacts/edit/<?php  echo $id ?>"><span class='fa fa-edit'></span>edit</a></td>
                                  </tr>
                                        <?php
                                        }

                                        ?>      
                                       </table>
                                    </div>