<?php
/**
 * Template Name: Home template
*/
?>


<!-- Header -->
<header id="headder">
    <div class="header">
        <div class="container">
            <div class="row flex-column flex-md-row flex-sm-column  align-items-center">
                <div class="col-12 col-md-5 pl-0">
                    <div class="logo">
                        <a href="/"> <img class="img-fluid" src="<?php the_field('top_section_-_logo'); ?>" alt="site logo"> </a>
                    </div>
                </div>
                <div class="col-12 col-md-7  d-flex justify-content-end">
                    <div class="head-rh-info text-center">
                        <p><?php the_field('top_section_-_title'); ?></p>
                        <ul class="d-flex flex-column flex-sm-column flex-md-row flex-sm-row justify-content-between">
                            <li><a href="/students-article" class="active"><?php the_field('top_section_-_button_1'); ?></a></li>
                            <li><a href="#"><?php the_field('top_section_-_button_2'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header -->

<!-- section 01 -->
<section>
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 p-0 banner-info">
          <div class="banner-info-box">
            <div class="d-flex flex-column  align-items-start">
               <?php the_field('section_1_-_text_content'); ?>
              <div class="sellect-choose">
                <ul class="d-flex flex-column flex-sm-column flex-md-row flex-sm-row justify-content-start pt-4">
                    <li><a href="students-article.html"><?php the_field('section_1_-_button_1'); ?></a></li>
                    <li><a href="#"><?php the_field('section_1_-_button_2'); ?></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="dr-profile">
            <img class="img-fluid" src="<?php the_field('section_1_-_image_right'); ?>">
            <div class="dr-profile-info">
              <?php the_field('section_1_-_image_right_info'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section 01 -->

<!-- section 02 -->
<section>
    <div id="company-details" class="company-details p_sec">
        <div class="container">
            <h2 class="mb-4"><?php the_field('section_2_-_title'); ?></h2>
            <?php the_field('section_2_-_text_content'); ?>


            <div class="row text-center pt-5">

              <?php if( have_rows('section_2_-_images') ): ?>
                <?php while( have_rows('section_2_-_images') ): the_row();
                // vars
                $c1 = get_sub_field('link');
                $c2 = get_sub_field('image');
                ?>

                <div class="col-md-4 col-sm-4 mb-sm-4">
                    <a href="<?php echo $c1; ?>"><img  class="img-fluid" src="<?php echo $c2; ?>"></a>
                </div>

              <?php endwhile; ?>
            <?php endif; ?>
            </div>



        </div>
    </div>
</section>
<!-- End section 02 -->

<section>
    <div class="info-sec p_sec bg_01">
        <div class="container">
            <h2 class="mb-4"><?php the_field('section_3_-_title'); ?></h2>
            <?php the_field('section_3_-_text_content'); ?>
        </div>
    </div>
</section>

<!-- category section 04-->
<section>
  <?php the_field('section_4'); ?>
</section>
<!-- category section 04-->

<!-- category section 05-->
<section>
  <?php the_field('section_5'); ?>
</section>
<!-- category section 05-->

<!-- Footer -->
<footer>
    <div class="main-footer">
    	<div class="footer-tp p_sec text-center bg_03">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="mb-3"><?php the_field('footer_-_title'); ?></h2>
    					<p><?php the_field('footer_-_subtitle'); ?></p>

    					<div class="in_choose mt-4">
    						<h4><?php the_field('footer_-_form_title'); ?></h4>

                <?php the_field('footer_-_form_link',6); ?>
    					</div>

    					<!-- <div class="get-email-sec d-flex flex-column flex-sm-row align-items-center mt-4">
    						<input class="form-control email-in" placeholder="enter email address" type="email" name="">
    						<button class="btn btn-default btn-sign-up">sign me up</button>
    					</div> -->


    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="footer-bt">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <ul class="social-media">
	                        <li><a href="#"><img src="/wp-content/themes/sage/assets/images/!_footer_facebook-logo.png"></a></li>
	                        <li><a href="#"><img src="/wp-content/themes/sage/assets/images/!_footer_twitter-logo.png"></a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
    	</div>
    </div>
</footer>
<!-- Footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/wp-content/themes/sage/assets/scripts/bootstrap.min.js"></script>


<style>
form#gform_1 h3.gform_title {
  display: none;
}
form#gform_1 #field_1_1 label.gfield_label {
  display: none;
}
form#gform_1 #field_1_2 label.gfield_label {
  display: none;
}
form#gform_1 #gform_fields_1 {
  display: flex;
  flex-direction: column;
}
form#gform_1 .gform_wrapper ul.gfield_checkbox li label, .gform_wrapper ul.gfield_radio li label {
  font-family: 'Merriweather', serif;
  font-size: 16px;
}
form#gform_1 .gform_wrapper {
  margin-top: 0px;
}
form#gform_1 span.gform_description {
  margin-bottom: 0px;
}
form#gform_1 #gform_wrapper_1 {
  margin-top: 0px;
}
form#gform_1 div.gform_heading {
  margin-bottom: 0px;
}
form#gform_1 #field_1_1 {
  margin-top: 0px;
}
form#gform_1 .gform_wrapper ul.gfield_checkbox li, .gform_wrapper ul.gfield_radio li {
  min-width: 280px;
}
form#gform_1 .gform_wrapper ul.gfield_checkbox li, .gform_wrapper ul.gfield_radio li input {
  margin-top: 0px !important;
  margin-right: 16px;
}
form#gform_1 .gform_wrapper ul.gfield_checkbox li, .gform_wrapper ul.gfield_radio li input[type="radio" i] {
  color: red;
}
form#gform_1 .gform_wrapper ul.gfield_checkbox li, .gform_wrapper ul.gfield_radio li input ~ .checkmark {
  background-color: #ccc;
}
.gform_wrapper.gf_browser_chrome ul.gform_fields li.gfield input[type=radio] {
  display: none;
}

/* Gravity Forms - Radio Button */

input[type=radio] {
  display: none;
}

input[type=radio] label {
  position: relative;
  cursor: pointer;
}

input[type=radio] + label:before {
  content: '';
  display: inline-block;
  width: 24px;
  height: 24px;
  margin: 0px 8px 0 8px;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
  background-color: transparent;
  border: 2px solid #fff;
}

input[type=radio]:checked + label {
  position: relative;
}
input[type=radio]:checked + label:after {
  content: "";
  position: absolute;
  top: 3px;
  left: 9px;
  width: 22px;
  height: 22px;
  border: 2px solid #134151;
  border-radius: 50%;
  display: inline-block;
  cursor: pointer;
}
input[type=radio]:checked + label:before {
  background-color: #134151;
  border: 2px solid #fff;
}
.gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]) {
  background-color: transparent;
  width: 372px;
  border: 2px solid #fff;
  border-radius: 30px;
}
.gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])::placeholder {
  text-align: center;
}
.gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):placeholder-shown {
  text-align: center;
}

/* Gravity Form - Submit Button */

form#gform_1 div.ginput_container.ginput_container_email {
  margin-right: 200px;
}

form#gform_1 .gform_footer {
  position: absolute;
  width: 160px;
  top: 212px;
  right: 300px;
}
form#gform_1 #gform_submit_button_1 {
  background-color: #134151;
  font-family: 'Montserrat', sans-serif;
  color: #fff;
  border-radius: 30px;
  font-size: 15px;
  letter-spacing: 1.3px;
  padding: 10px 25px;
  text-transform: uppercase;
  cursor: pointer;
}




</style>
