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

<!-- Header Part -->
<?php include('header.php'); ?>
<!-- End Header Part -->

<div class="main-wrap">
	<div class="container">
		<!-- Page heading section starts -->
		<section class="heading-wrap">
			<h1 class="title">contact us</h1>
			<p class="tag-line">Tell us about your needs.</p>
		</section>
		<!-- Page heading section ends -->
	</div>
</div>

<!-- Main contant container section starts -->
<div class="content-container">
	<div class="container">
		<!-- Form Contact section starts -->
		<section class="content-wrap contact-form">
			<form method="post" action="" id="contact-form">
				<p class="required-instruction">Fields marked with an <span class="required">*</span> are required</p>
				<div class="form-group">
					<label for="name">Name <span class="required">*</span></label>
					<input type="text" class="text-box form-control" name="name" minlength="3" id="name" required>
				</div>
				<div class="form-group">
					<label for="email">Email <span class="required">*</span></label>
					<input type="email" class="text-box form-control" name="email" id="email" required>
				</div>
				<div class="form-group">
					<label for="message">Message <span class="required">*</span></label>
					<textarea class="text-box form-control" name="message" id="message" maxlength="200" required></textarea>
					<label class="all-errors"></label>
				</div>
				<button type="submit" name="submit" class="btn btn-default submit">Submit</button>
			</form>
		</section>
		<!-- Form section ends -->
	</div>
</div>
<!-- Main contant container section ends -->

<!-- Footer Part -->
<?php include('footer.php'); ?>
<!-- End Footer Part -->

<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"):
?>
<script type="text/javascript">
	jQuery(document).ready(function(){
		$('#myModal').modal();
	});
</script>
<?php endif; ?>