				</div><!--content-wrapper-->
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
			<!--        <b>Version</b> 1 -->


				</div>

				<strong>

					<a href="#">Deutsches Atelier </a>
				</strong> 
				
				<span class="pull-right" style="color: #fff">Ver 1.0.0</span>
			</footer>

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
            template: '<div style="opacity: 0.8;" data-notify="container" class="col-xs-11 col-sm-3 alert {0}" role="alert">' +
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

			
			
		</div><!--Wrapper-->
	</body>
</html>