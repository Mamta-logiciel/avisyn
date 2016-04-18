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
                <a class="text-right" href="index.php">AviSyn.com</a>
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
<?php endif; ?>