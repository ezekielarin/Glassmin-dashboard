

<section>
        <div class="col-lg-9">
            <div>
                <h3>News Letter donations</h3>
            </div>        
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Payment Status</th>
                    <th>Date</th>
                </tr>

                    <?php
                    $donations = $this->db->query("SELECT * FROM donations")->result();
                        if ($donations) {
                            foreach ($donations as $subs) {
                                ?>
                            <tr>
                                <td></td>
                                <td><?php echo $subs->name;?></td>
                                <td><?php echo $subs->email;?></td>
                                <td><?php echo $subs->payment_status;?></td>
                                
                            </tr>

                                <?php
                              
                            }
                         }else{
                            echo "<tr>";
                            echo "<td>You Currently Do not Have any donations</td>";
                            echo "</td></tr>";
                         }
                        
                        ?>
            </table>
        </div>

</section>

		