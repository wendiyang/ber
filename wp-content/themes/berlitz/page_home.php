<?php
/**
 * Templage Name: Home
 */

get_header(); ?>
					
	<div class=" text-center pricing" style="height:800px;">
		<div class="container">
			<h2>Pricing Plans</h2>
			<p class="pricing-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the Lorem Ipsum is simply</p>
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<div class="pricing-card">
						<div class="card-header">
							<h3 class="card-title">Standard</h3>
							<div><span class="price-sign">$</span><span class="price">12</span><span>/month</span></div>
						</div>
					</div>
					<div class="pricing-desc">
						<p><i class="fas fa-times"></i>asd</p>
						<p><i class="fas fa-check"></i>asd</p>
						<p><i class="fas fa-check"></i>asd</p>
						<p><i class="fas fa-check"></i>asd</p>
						<p><i class="fas fa-check"></i>asd</p>
						<a class="">Signup Now</a>
						<?php var_dump(get_field('pricing1')); ?>
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-4">
					asd
				</div>
				<div class="col-xs-12 col-sm-4">
					asd
				</div>
			</div>
		</div>
	</div>
	<div class="text-center downloadapp">
		<div class="container">
			<h2>Download App Now</h2>
			<p class="downloadapp-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the Lorem Ipsum is simply</p>
			<div class="btn-container">
				<a href="#" class="btn-trans"><i class="fab fa-apple"></i>Apple Store</a>
				<a href="#" class="btn-trans"><i class="fab fa-android"></i>Google Play</a>		
			</div>
		</div>
	</div>
	<div class="form-section text-center">
		<div class="container">
			<h2>Contact Us</h2>
			<p class="form-section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the Lorem Ipsum is simply</p>
                        <form action="" method="post" class="wpcf7-form" id="form">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <input id="name" type="text" name="name" value="" size="40"  placeholder="Name">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <input id="email" type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email">
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                    <input id="subject" type="text" name="your-subject" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Subject">
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                    <textarea id="text-area" name="your-message" cols="40" rows="10" aria-required="true" aria-invalid="false" placeholder="Message"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                        <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit">
                                </div>
                            </div>
			</form>
		</div>
	</div>
</div><!-- .content-area -->

<?php get_footer(); ?>