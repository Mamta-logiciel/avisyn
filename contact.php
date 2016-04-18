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