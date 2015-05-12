<div class="row">
    <div id="auth" class="container">
        <div id="login-form" class="col-sm-4 col-sm-offset-4">
            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                  <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="login">
                        <div class="row">
                            <button id="facebook-button" class="btn btn-lg center-block"><i class="fa fa-facebook"></i> Login with facebook</button>
                        </div>
                            <hr>
                            
                        <?=$errors;?>
                        <?=form_open('auth/login');?>
                        <div class="row">
                            <div class="form-group  has-feedback">
                                <?=form_error('username');?>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <?=form_input(['name' => 'username', 'class' => 'form-control', 'value' => set_value("username")]);?>
                                </div>
                            </div>
                            <div class="form-group  has-feedback">
                                <?=form_error('password');?>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-danger pull-right" value="Login">
                        </div>
                        <?=form_close();?>
                            
                            
                    </div>
                  <div role="tabpanel" class="tab-pane" id="register">Register</div>
                </div>

            </div>
        </div>
    </div>
</div>