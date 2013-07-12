<div id="logo">
    <img src="assets/img/logo.png" alt="" />
</div>
<div id="loginbox">            
    <?php echo form_open('login','id="loginform" class="form-vertical" action="index.html"'); ?>
		<p>Enter username and password to continue.</p>
        <?php $this->load->view('alerts/validation_errors'); ?>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span><input type="text" name="correo" placeholder="Email" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link" id="to-recover">Lost password?</a></span>
            <span class="pull-right"><input name="enviar" type="submit" class="btn btn-inverse" value="Login" /></span>
        </div>
   <?php echo form_close(); ?>

    <form id="recoverform" action="#" class="form-vertical">
        <p>Such a shame.</p>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link" id="to-login">&lt; Back to login</a></span>
           
        </div>
    </form>
    <!--

    <form id="recoverform" action="#" class="form-vertical">
        <p>Enter your e-mail address below and we will send you instructions how to recover a password.</p>
        <div class="control-group">
            <div class="controls">
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link" id="to-login">&lt; Back to login</a></span>
            <span class="pull-right"><input type="submit" class="btn btn-inverse" value="Recover" /></span>
        </div>
    </form>
    -->
</div>