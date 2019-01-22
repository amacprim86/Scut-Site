





  <article <?php post_class(); ?>>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>students - article</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- Fa fa link -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>



         <!-- Header -->
        <header id="headder">
            <div class="header">
                <div class="container">
                    <div class="row flex-column flex-md-row flex-sm-column  align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="logo">
                                <a href="/"> <img class="img-fluid" src="<?php the_field('top_section_-_logo',12); ?>" alt="site logo"> </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex justify-content-center">
                            <div class="head-rh-info text-center">
                                <p><?php the_field('top_section_-_title',12); ?></p>
                                <ul class="d-flex flex-column flex-sm-column flex-md-row flex-sm-row justify-content-between">
                                    <li><a href="/students-article"class="stu_a"><?php the_field('top_section_-_button_1',12); ?></a></li>
                                    <li><a href="/students-article/#pop1" class="phy_a"><?php the_field('top_section_-_button_2',12); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header -->

        <nav class="nav-justified ">
          <div class="nav nav-tabs " id="nav-tab" role="tablist">
            <a class="nav-item nav-link phy " id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">Physicians</a>
            <a class="nav-item nav-link stu " id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">Students</a>
          </div>
        </nav>



        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    		<?php
    		  // vars
    		  $author = get_field('author');
    		  $video  = get_field('video_link');
          $ac  = get_field('article_content');
          $ps  = get_field('p_or_s');
    		  ?>

        <div class="b-crumb ph">
          <div class="row mt-3">
              <div class="col-md-12">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="https://scut.dev/">HOME</a></li>
                      <li class="breadcrumb-item"><a href="/students-article/#pop1">PHYSICIANS</a></li>
                      <li class="breadcrumb-item"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                 <!-- <li class="breadcrumb-item active" aria-current="page">ARTICLE TITLE</li> -->
                    </ol>
                  </nav>
              </div>
          </div>
       </div>

       <div class="b-crumb st">
         <div class="row mt-3">
             <div class="col-md-12">
                 <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="https://scut.dev/">HOME</a></li>
                     <li class="breadcrumb-item"><a href="/students-article/#pop1">STUDENTS</a></li>
                     <li class="breadcrumb-item"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">ARTICLE TITLE</li> -->
                   </ol>
                 </nav>
             </div>
         </div>
      </div>

            <div class="c-post">
              <iframe src="<?php echo $video ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
              <div class="article-all">
                <h1 class="a-title"><?php the_title(); ?></h1>
                <h1 class="a-auth">BY <?php echo $author ?></h1>
                <div class="written">
                  <?php echo $ac ?>
                </div>
              </div>
            </div>
          <?php
              endwhile;
              wp_reset_postdata();
              endif;
          ?>
          <div class="post-feat">
            <div class="article-box-main mb-5">
              <div class="row">
            <!-- PHYSICIANS OR STUDENTS ARTICLES, Post Loop START -->
            <?php
            $query = new WP_Query( array(
              'meta_query' => array(
              array(
                'key' => 'p_or_s',
                'compare' => '=',
                'value' => '0'
              ),
              array(
                'key' => 'featured_article',
                'compare' => '=',
                'value' => '1'
              )
            ),


              'posts_per_page'      => 3,
              'order' => 'ASC',
              'post_type' => array('articles') ));

            if ( $query->have_posts() ) : $index = 0; ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); $index++; ?>
                <?php
                  $categories = get_the_category();
                  $category_string = "";
                    foreach($categories as $category) {
                      $category_string .= $category->slug ." ";
                  }
                ?>




                <div class="col-md-4 mb-5 mb-md-0 stud">
                  <div class="article-box">
                  <div class="article-box-video">
                    <iframe width="560" height="315" src="<?php the_field('video_link'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                  </div>
                  <h2><?php the_title(); ?></h2>
                  <p><?php echo custom_field_excerpt(); ?></p>
                  <a href="<?php the_permalink() ?>" class="btn btn-cat">Read More</a>
                  </div>
                </div>



            <!-- show pagination here -->


            <?php endwhile; ?>
            <?php endif; ?>

            <!-- PHYSICIANS OR STUDENTS ARTICLES, Post Loop START -->
            <?php
            $query = new WP_Query( array(
              'meta_query' => array(
              array(
                'key' => 'p_or_s',
                'compare' => '=',
                'value' => '1'
              ),
              array(
                'key' => 'featured_article',
                'compare' => '=',
                'value' => '1'
              )
            ),


              'posts_per_page'      => 3,
              'order' => 'ASC',
              'post_type' => array('articles') ));

            if ( $query->have_posts() ) : $index = 0; ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); $index++; ?>
                <?php
                  $categories = get_the_category();
                  $category_string = "";
                    foreach($categories as $category) {
                      $category_string .= $category->slug ." ";
                  }
                ?>




                <div class="col-md-4 mb-5 mb-md-0 phys">
                  <div class="article-box">
                  <div class="article-box-video">
                    <iframe width="560" height="315" src="<?php the_field('video_link'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                  </div>
                  <h2><?php the_title(); ?></h2>
                  <p><?php echo custom_field_excerpt(); ?></p>
                  <a href="<?php the_permalink() ?>" class="btn btn-cat">Read More</a>
                  </div>
                </div>



            <!-- show pagination here -->


            <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
        </div>


        <!-- Footer -->
        <footer>
            <div class="main-footer">
            	<div class="footer-tp p_sec text-center bg_03">
            		<div class="container">
            			<div class="row">
            				<div class="col-md-12">
            					<h2 class="mb-3"><?php the_field('footer_-_title',6); ?></h2>
            					<p><?php the_field('footer_-_subtitle',6); ?></p>

            					<div class="in_choose mt-4">
            						<h4><?php the_field('footer_-_form_title',6); ?></h4>

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
          text-indent: 10px;
          color: #fff;
        }
        .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file])::placeholder {
          text-align: center;
          text-indent: -10px;

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


        @media only screen and (max-width: 1200px) {

          form#gform_1 .gform_footer {
            right: 180px;

          }

        }

        @media only screen and (max-width: 991px) {

          form#gform_1 .gform_footer {
            right: 0;
            left: 0;
            margin: auto;
            top: 400px;
          }
          ul#input_1_1.gfield_radio {
            display: flex;
            flex-direction: column;
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin-left: 35%;
          }
          .gform_wrapper ul.gfield_radio li label {
          }
          .gform_wrapper ul.gfield_radio li {
                text-align: left;
          }
          form#gform_1 div.ginput_container.ginput_container_email {
            margin: auto;
          }
          body .gform_wrapper ul li.field_description_below div.ginput_container_radio {
            margin: auto;
          }

        }

        @media only screen and (max-width: 767px) {
          ul#input_1_1.gfield_radio {
            margin: auto;
            padding-left: 50px;
            padding-right: 50px;
          }
        }
        @media only screen and (max-width: 639px) {
          .p_sec {
            min-height: 650px;
          }
          form#gform_1 .gform_footer {
            top: 430px;
          }

        }
        @media only screen and (max-width: 428px) {

          form#gform_1 .gform_footer {
            top: 460px;
          }
          form#gform_1 .gform_wrapper ul.gfield_checkbox li, .gform_wrapper ul.gfield_radio li input {
            margin: unset;
            margin-right: -26px;
          }
          input[type=radio] + label:before  {
            background-color: #9de7e9;
          }
          .gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]):placeholder-shown {
            max-width: 300px;
          }

        }



        </style>



<style>

aside.sidebar {
  display: none;
}

.nav-tabs .nav-link {
    background-color: #C2C2C2;
    color: #fff;
    font-size: 15px;
    line-height: 25px;
    border: 0;
    border-radius: 0;
    padding: 33px 20px;
}
.nav-tabs .nav-link.active::before {
    content: "";
    background-color: #134151;
    position: absolute;
    left: 0;
    width: 100%;
    top: -13px;
    height: 15px;
    border-radius: 4px 4px 0 0;
}
.nav-tabs .nav-link.active {
    background-color: #134151;
    color: #fff;
    font-size: 25px;
    font-weight: bold;
    position: relative;
}

</style>

  </article>


<script>

if('physician' == "<?php echo ($ps ? 'physician' : 'student'); ?>") {
      // in here it means that the checkbox is checked

       $(".nav-tabs .nav-link.phy").addClass("active");
       $(".nav-tabs .nav-link.stu").attr("href", "/students-article/").attr("data-toggle",false);
       $(".head-rh-info ul li a.phy_a").addClass("active");
       $("div.col-md-4.mb-5.mb-md-0.stud").css('display', 'none');
       $(".b-crumb.st").css('display', 'none');

     } else {
       $(".nav-tabs .nav-link.stu").addClass("active");
       $(".nav-tabs .nav-link.phy").attr("href", "/students-article/#pop1").attr("data-toggle",false);
       $(".head-rh-info ul li a.stu_a").addClass("active");
       $("div.col-md-4.mb-5.mb-md-0.phys").css('display', 'none');
       $(".b-crumb.ph").css('display', 'none');
     };
</script>
