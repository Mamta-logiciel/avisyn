<?php include_once 'header.php'; ?>

<!-- Sticky buttons section starts -->
<div class="welcome-banner sticky-btns">
	<div class="button-container">
		<a href="contact-careers.php" class="btn btn-contact btn-contact-green">start a career with us</a>
		<a href="contact-project.php" class="btn btn-contact btn-contact-blue">start a project with us</a>
	</div>
</div>
<!-- Sticky buttons section ends -->

<div class="main-wrap">
	<div class="container">
		<!-- Page heading section starts -->
		<section class="heading-wrap">
			<h1 class="title">start a career with us</h1>
			<p class="tag-line">Learn about open jobs.</p>
		</section>
		<!-- Page heading section ends -->	
	</div>
</div>

<!-- Main contant container section starts -->
<div class="content-container">
	<div class="container">
		<!-- Form Career section starts -->
		<section class="content-wrap careers-form contact-form">
			<form>
				<p class="required-instruction">Fields marked with an <span class="required">*</span> are required</p>
				<div class="form-group">
					<label for="name">Name <span class="required">*</span></label>
					<input type="text" class="text-box form-control" id="name">
				</div>
				<div class="form-group">
					<label for="email">Email <span class="required">*</span></label>
					<input type="email" class="text-box form-control" id="email">
				</div>
				<div class="form-group">
					<label for="message">Message <span class="required">*</span></label>
					<textarea class="text-box form-control" id="message"></textarea>
				</div>
				<p>200 word(s) left</p>
				<button type="submit" class="btn btn-default submit">Submit</button>
			</form>
		</section>
		<!-- Form section ends -->
	</div>
</div>
<!-- Main contant container section ends -->

<?php include_once 'footer.php'; ?>
