
               <div class="col-md-5">
                 <form method="post" action="" role="form">
                                
                                <div class="form-group">
                                    <lable class="control-label">Name:</label>
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $contact->id?>" >
                                    <input type="text" class="form-control" name="name" value="<?php echo $contact->name?>" >
                                </div> 
                                 <div class="form-group">
                                    <lable class="control-label">Email</label>
                                     <input type="text" class="form-control" name="email"  value="<?php echo $contact->email?>">
                                </div> 
                                <div class="form-group">
                                    <lable class="control-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" required="" value="<?php echo $contact->phone?>">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" name="update" value="update">
                                </div>                                                                                                           
                            </form>
                         </div>