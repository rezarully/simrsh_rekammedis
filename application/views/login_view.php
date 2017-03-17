<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> RSH Prof. Soeparwi | Login </title>

        <link rel="stylesheet" href="<?php echo base_url("style/css/bootstrap.min.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("style/css/dashboard.css"); ?>">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url("style/js/bootstrap.min.js"); ?>"></script>
    </head>

    <body background="/simrsh_rekammedis/style/img/bg.gif" style="background-repeat: no-repeat; background-size: 100%;">

    <div class="container">   		
        <div id="loginbox" style="margin-top:80px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<?php if(isset($_SESSION['msg']))
            {
    			echo'<div class="alert alert-danger alert-dismissible" role="alert">
    				 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    				 '.$_SESSION['msg'].'
    			     </div>';
			}
			?>		
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <div class="panel-title">Log In</div>                        
                </div>     

                <div style="padding-top:30px" class="panel-body">
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>                        
                    <form id="loginform" class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/rekammedis/user_sess">                                
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">                                        
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                        </div>
                            
                        <div class="input-group">
                          <!--<div class="checkbox">
                            <label>
                              <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                          </div>-->
                        </div>

                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
							  <button type="submit" class="btn btn-primary">Log In</button>
                            </div>
                        </div>

                    </form>     
                    </div>                     
                </div>  
            </div>
        </div>
    </div>
    
    </body>
</html>    