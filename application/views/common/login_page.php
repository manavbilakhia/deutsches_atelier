<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>German Tutor</title>
		<link rel="icon" href="<?= base_url();?>assets/images/icons/favicon.ico" type="image/x-icon">
		<!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.new.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>/assets/bootstrap/custom/custom.css" rel="stylesheet" type="text/css"/>
        
        <link href="<?php echo base_url(); ?>/assets/extra/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <!-- jQuery 2.2.0 -->
		<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
  
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <![endif]-->
    </head>
    <body class="" background="<?php echo base_url(); ?>assets/extra/login/login_background.jpg" style="background-position:intial;
          background-repeat: no-repeat;background-size: 100%;">
		  
        <section class="col col-lg-8">
          
        </section>
         <section class="col col-lg-3">
            <div class="login-box" style="margin-top: -74px;">
            
            <div class="animated flipInX">
                
                <h1 align="center" style="color: white">
                    
                    <br><br>
					
                    <a href="<?php echo base_url(); ?>" style="color: white"><b >Deutsches </b>Atelier</a></h1>
            </div>
            <!-- /.login-logo -->
            <div class="animated flipInX" style=" background-color: rgba(255, 255, 255, 0.43); padding: 60px;">
                <div class="row">
                    <img src="assets/images/logo.jpg" alt="" style=" height: 144px;width:259px;  margin-bottom:25px;" />
                

                <form action="<?php echo base_url(); ?>index.php?/login/user_login" method="post">
   
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
							<a href="<?php echo base_url(); ?>index.php?/login/forgot_password"></a>
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
							
                        </div>
						
					
                        <!-- /.col -->
                    </div>
					<br>
				</form>
				<br>
				

            </div>
            <!-- /.login-box-body -->
        </div>
            
            </div>
        </section>
        
        <!-- /.login-box -->
        </div>
        <!-- jQuery 2.2.0 -->
<!-- ./wrapper -->
<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>


<!--Bootstrap Notification is used to display the notification after every operation done-->
<script src="<?php echo base_url(); ?>assets/extra/bootstrap_notify/bootstrap-notify.js" type="text/javascript"></script>

<?php

// Below Flash Data function will chcek the message valuse set by user in browser session.
if ($feedback = $this->session->flashdata('feedback')): $feedback_class = $this->session->flashdata('feedback_class')
    ?>
    <script>
        //If any value is available in session then only belor Script code will execute
        $.notify({
            // options
            icon: 'glyphicon glyphicon-ok', //Icon Used in Alert Box
            title: 'Alert',
            message: '<?= $feedback; ?>',
            url: '', //We can set the on click navigation here
            target: '_blank',
            offset: {
                x: 50,
                y: 100
            }
        }, {
            // settings
            element: 'body',
            position: null,
            type: "<?= $feedback_class; ?>", //Color of notification danger/info/primary/success/warning
            allow_dismiss: true, //Close button on notification
            newest_on_top: false,
            showProgressbar: false, //We can specify the progress bar
            placement: {//Notification Location on page
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 4000, //Dismiss Timing
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {//Animate Effect 
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
            //to change Alert Box custom color | Remove alert-{0} class from below tamplate
            template: '<div style="opacity: 0.8; background-color: #3C8DBC" data-notify="container" class="col-xs-11 col-sm-3 alert {0}" role="alert">' +
                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span><br> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '</div>'
        });

    </script>
<?php endif; ?>
  