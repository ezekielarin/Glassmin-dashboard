


       <div class="col-md-5" >
        <h4>Send News Letter</h4>
           <form action="newsletter/sendmail" method="post">
             <div class="form-group"><span>Subject</span>
              <input class="form-control" type="text" name="subject" placeholder="Subject">
            </div><span>BCC</span>
            <div class="form-group">
              <input class="form-control" type="text" name="bcc" placeholder="bcc">
            </div>
            <div class="form-group"><span>Message</span>
              <textarea class="form-control" type="text" name="message" placeholder="Start your message"> </textarea> 
            </div>
            <div class="form-group">
              <input class="btn btn-success" type="submit" name="sendmail" value="Send"> 
            </div>
           </form>
       </div>


<section>
        <div class="col-lg-9">
            <div>
                <h3>News Letter subscribers</h3>
            </div>        
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>

                    <?php
                    $subscribers = $this->db->query("SELECT * FROM news_letter")->result();
                        if ($subscribers) {
                            foreach ($subscribers as $subs) {
                                ?>
                            <tr>
                                <td></td>
                                <td><?php echo $subs->name;?></td>
                                <td><?php echo $subs->email;?></td>
                                
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

		