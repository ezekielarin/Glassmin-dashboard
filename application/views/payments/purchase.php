   

    <?php
        if ($message) {
        ?>
    <form class="form-horizontal" action="<?php echo base_url()?>dashboard/messages/updatemsg" method="post">
      <div class="form-group">
        <input  type="hidden" name="user_id" value="<?php echo $user_id ?>">
      </div>
      <div class="form-group">
        <div>
            <textarea class="col-sm-9" name="message" placeholder="Thank you for coming"><?php echo $message->message; ?></textarea>
            
        </div>
        
    </div>
    <span>Select your recipients</span>
    <table class="table">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Phone</th>
        </tr>
        <?php

        foreach ($contacts as $con) {
        ?>
         <tr>
            <td><input type="checkbox" name="id" value="<?php echo $con->id?>" checked></td>
            <td><input type="hidden" value="<?php echo $con->name?>" name="name"><?php echo $con->name?></td>
            <td><input type="hidden" value="<?php echo $con->phone?>" name="phone"><?php echo $con->phone?></td>
         </tr>
        <?php 
        }
        ?>
    </table>
        <button>Send</button>
    </form>

    <?php
       }else{
    ?>
    <div class="">
        <h2>You have not Selected any message Yet.</h2>
    </div>

    <?php 
        }
        ?>
</div>
<div>
    
</div>