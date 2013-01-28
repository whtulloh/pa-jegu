<!-- Account Login-->
        <div class="span9">
          <h1 class="headingmain"><span>Account Login</span></h1>
          <section class="newcustomer">
            <h2 class="heading2">New Customer </h2>
            <div class="loginbox">
              <h4 class="heading4"> Register Account</h4>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
              <br>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
              <br>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status. an order's status.</p>
              <br>
              <a href="<?php echo base_url('register');?>" class="btn btn-primary">Continue</a>
            </div>
          </section>
          <section class="returncustomer">
            <h2 class="heading2">Returning Customer </h2>
            <div class="loginbox">
              <p>Please login with your username/e-mail address and password below.</p>
				<?php echo $message;?>
				<form method="post" action="<?php echo base_url('login');?>">
                <fieldset>
                  <div class="control-group">
                    <label  class="control-label">Username/E-mail Address:</label>
                    <div class="controls">
                      <input type="text" name="identity" class="span3" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <label  class="control-label">Password:</label>
                    <div class="controls">
                      <input type="password"  name="password" class="span3" required>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                     <label class="checkbox">
                            <input type="checkbox" name="remember" value="1" class="checkbox"> Remember me
                        </label>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                     <label>
                            <a class="pull-left" id="forgot" href="<?php echo base_url('login/forgot');?>">Forgoten Password</a>
                        </label>
                    </div>
                  </div>
                  
		              
                  <br>
                  <br>
                  <input type="submit" class="btn btn-primary" value="Login" name="submit" />
                </fieldset>
              </form>
            </div>
          </section>
        </div>
        <!--login end-->