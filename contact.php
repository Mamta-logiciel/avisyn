<?php include_once 'header.php'; ?>

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
		<section class="content-wrap contact-form contact-wrap">
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
				<p class="color-grey">200 word(s) left</p>
				<button type="submit" class="btn btn-default submit">Submit</button>
			</form>
		</section>
		<!-- Form section ends -->
	</div>
</div>
<!-- Main contant container section ends -->

<?php include_once 'footer.php'; ?>
