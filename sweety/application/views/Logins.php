
<style>


[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}

</style>

<div class="common_banner">
            <div class="inner_bg">
               <h3>Login</h3>
               <hr> 
            </div>
         </div>

<section class="login_page_bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="panel with-nav-tabs panel-default login_register">
          <div class="panel-heading">
            <ul class="nav nav-tabs">
              <li class="active">
                <a href="#tablogin" data-toggle="tab" class="active">login</a>
              </li>
              <li><span class="center_line">/</span></li>
              <li><a href="#tabregister" data-toggle="tab">Register</a></li>
            </ul>
          </div>
          <div class="panel-body">
            <div class="tab-content">
              <div class="tab-pane fade in  active show" id="tablogin">
                <div class="login">
                  <form action="<?= base_url() ?>Login/process" method="post">
                    <?php  if(!empty($result)){  ?>
                    <div class="alert alert-danger"><?= $result ?></div><?php  } ?>
                    <div class="form-group col-md-12">
                      <label for="email">Email address:</label>
                      <input type="email" name="user" class="form-control" id="email">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="pwd">Password:</label>
                      <input type="password" name="pass" class="form-control" id="pwd">
                    </div>
                    <div class="form-group form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                      </label>
                    </div>
                    <div class="login_btn col-md-12">
                      <button type="submit" class="btn btn-primary">Login</button>
                      <p>Don't have an account? 
                      <a href="#tabregister" data-toggle="tab">SignUp</a><br>
                      <a href="<?= base_url() ?>login/forget_password" class="forgot_pwd" >Forget Password?</a>
                      </p>
                    </div>
                  </form>                
                </div>
              </div>
              <div class="tab-pane fade" id="tabregister">
                <div class="container">
                  <?php if(!empty($result)){ ?>
                  <div class="alert alert-danger"><?= $result; ?></div>
                  <?php  } ?>
                <form action="<?= base_url() ?>Login/signUpProcess" method="post"  enctype='multipart/form-data'>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="name">User Name:</label>
                      <input type="text" name="user_name" class="form-control" id="email">
                      <?php echo form_error('user_name', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="email">User Email:</label>
                      <input type="email" name="user_email" class="form-control" id="pwd">
                       <?php echo form_error('user_email', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="number">User Phone Number:</label>
                      <input type="text" name="user_phone" class="form-control" id="email">
                      <?php echo form_error('user_phone', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="pwd">User Full Name:</label>
                      <input type="text" name="user_full" class="form-control" id="pwd">
                      <?php echo form_error('user_full', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="email">User Birth Date:</label>
                      <input type="date" name="user_birth" class="form-control" id="datepicker">
                      <?php echo form_error('user_birth', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="pwd">User City:</label>
                      <input type="text" name="user_city" class="form-control" id="pwd">
                      <?php echo form_error('user_city', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                     <div class="form-group">
                      <label for="pwd">Set Password:</label>
                      <input type="password" name="user_spassword" class="form-control" id="pwd">
                      <?php echo form_error('user_spassword', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                     <div class="form-group">
                      <label for="pwd">Confirm Password:</label>
                      <input type="password" name="user_cpassword" class="form-control" id="pwd">
                      <?php echo form_error('user_cpassword', '<div class="alert alert-danger">', '</div>'); ?>
                    </div>
                  </div>
                </div>         
                  <div class="login_btn col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button> <br><br>
                  </div>
                </form>
                </div>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





