 <div lass="col-md-5">
    
        <h2><span class="fa fa-credit-card"> Pay with Card</span></h2>
    </div> 

    <div lass="col-md-5">

        <h2><span class="fa fa-bank"> Pay via Bank Deposit</span></h2>
    </div>      
    <hr>
    <div class="clearfix"></div>  
    <div class="col-md-5">
        <form action="paystack/paynow" method="post" class="form">
           
            <input type="hidden" name="user_id" value="<?php echo $user_id?>">
            <input type="hidden" name="email" value="<?php echo $email?>">
            <input type="hidden" name="firstname" value="<?php echo $firstname?>">
            <input type="hidden" name="lastname" value="<?php echo $lastname?>">
             <div class="form-group">
                 <label>Units</label>
                 <input class="form-control" type="text" name="credit_units" placeholder="0.00"> 
            </div>
            <div class="form-group">
                <label>Price (NGN)</label>
                <input class="form-control" type="text" name="amount" placeholder="0.00" value="100.00" disabled>
            </div>

            <button type="submit" value="Pay Now" name="paynow" >Pay Now</button>
        </form>
    </div>

    <div class="col-md-5">
       <h2> <span class="fa fa-certificate"></span></h2>
        <table class="table" >
            <tr>
                <th>#</th>
                <th>Units</th>
                <th>price (N)</th>
            </tr>
            <tr>
                <td></td>
                <td>50 - 499</td>
                <td>3.0</td>
            </tr>
            <tr>
                <td></td>
                <td>500 - 999</td>
                <td>2.5</td>
            </tr>
            <tr>
                <td></td>
                <td>1000 - 1999</td>
                <td>2.0</td>
            </tr>
        </table>

    </div>

    