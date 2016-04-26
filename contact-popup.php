<!-- model code -->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Thank You!</h4>
            </div>
            <div class="modal-body">
                <p>Your message has been successfully sent. We will send you a reply shortly.</p>
            </div>
            <div class="modal-footer">
                Return to <a class="text-right" href="index.php">AviSyn.com</a>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php 
if( $_SERVER["REQUEST_METHOD"] == "POST" ): ?>
    <script type="text/javascript">
        jQuery(document).ready(function(){
            $('#myModal').modal();
        });
    </script>
<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $usermessage = $_POST['message'];
    $to = "jeffrey.albert@intellisynrd.com";
    $mailto = "info@biotech-animated.com";
    $subject = "New Message From AviSyn.com";
    $message = "
    <html>
    <head>
        <title>New Message From AviSyn.com</title>
    </head>
    <body>
        <div>
            <table>
                <tr>
                    <td style='padding-bottom: 20px;'>Name:</td>
                    <td style='padding-bottom: 20px;'>".$name."</td>
                </tr>
                <tr>
                    <td style='padding-bottom: 20px;'>Email:</td>
                    <td style='padding-bottom: 20px;'>".$email."</td>
                </tr>
                <tr>
                    <td style='padding-bottom: 20px;'>Message:</td>
                    <td style='padding-bottom: 20px;'>".$usermessage."</td>
                </tr>
            </table>
        </div>
    </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Avisyn <admin@avisyn.com>";
    mail($to,$subject,$message,$headers);
    mail($mailto,$subject,$message,$headers);
?>
<?php endif; ?>