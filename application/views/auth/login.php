
<!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page login-page">
        <h2 class="title1">Login</h2>
        <div class="widget-shadow">
          <div class="login-body">              

                  <div id="infoMessage"><?php echo $message;?></div>

                  <?php echo form_open("auth/login");?>

                    <p>
                      <?php echo lang('login_identity_label', 'identity');?>
                      <?php echo form_input($identity);?>

                      <?php echo lang('login_password_label', 'password');?>
                      <?php echo form_input($password);?>


                      <?php echo lang('login_remember_label', 'remember');?>
                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                      <div class="forgot-grid"><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></div>


                    <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

                  <?php echo form_close();?>
                  <div class="registration">
                Don't have an account ?
                <a class="" href="register">
                  Create an account
                </a>
                <a href="<?php echo site_url('facebook_login'); ?>">Login with Facebook</a>
              </div>

       </div>
     </div>
    </div>
   </div>
</div>

