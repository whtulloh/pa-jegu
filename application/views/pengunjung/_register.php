<!-- Account Login-->
        <div class="span9">
          <h1 class="headingmain"><span>Register Account</span></h1>
          <p> If you already have an account with us, please login at the <a href="<?php echo base_url('login');?>">login page</a>.</p>
          <br>
          <form class="form-horizontal" action="<?php echo base_url('register');?>" method="post">
            <h3 class="heading3">Please fill the forms bellow to register</h3>
            <div class="registerbox">
              <fieldset>
                  <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Username:</label>
                  <div class="controls">
                    <input type="text" name="username" class="input-xlarge" value="<?php echo set_value('username');?>" >
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> First Name:</label>
                  <div class="controls">
                    <input type="text" name="first_name" class="input-xlarge" value="<?php echo set_value('first_name');?>" >
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Last Name:</label>
                  <div class="controls">
                    <input type="text"  name="last_name" class="input-xlarge" value="<?php echo set_value('last_name');?>">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Email:</label>
                  <div class="controls">
                    <input type="text"  name="email" class="input-xlarge">
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Password:</label>
                  <div class="controls">
                    <input type="password"  class="input-xlarge" name="password" id="password"><span class="help-inline"> Must contain of 8-20 characters.</span>
                    <div id="pwdMeter" class="neutral"></div>
                  </div>
                </div>
                <div class="control-group">
                  <label  class="control-label"><span class="red">*</span> Password Confirm::</label>
                  <div class="controls">
                    <input type="password"  class="input-xlarge" name="password_confirm">
                  </div>
                </div>
              </fieldset>
            </div>
            <h3 class="heading3">Newsletter</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label class="control-label">Subscribe:</label>
                  <div class="controls">
                    <label class="checkbox inline">
                      <input type="checkbox" value="option1" >
                      Yes </label>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class="pull-right" style="margin-right:45%;">
              <label class="checkbox inline">
                <input type="checkbox" value="option2" >
              I have read and agree to the <a href="#" >Privacy Policy</a> </label>
              &nbsp;
              <input type="submit" class="btn btn-primary" value="Continue">
            </div>
          </form>
           <div class="clearfix"></div><br>
        </div>