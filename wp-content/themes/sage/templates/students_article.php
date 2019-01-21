<?php
/**
 * Template Name: Students Article template
*/
?>

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
                            <a href="/"> <img class="img-fluid" src="<?php the_field('top_section_-_logo'); ?>" alt="site logo"> </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center">
                        <div class="head-rh-info text-center">
                            <p><?php the_field('top_section_-_title'); ?></p>
                            <ul class="d-flex flex-column flex-sm-column flex-md-row flex-sm-row justify-content-between">
                                <li><a href="#" class="stu_a"><?php the_field('top_section_-_button_1'); ?></a></li>
                                <li><a href="#" class="phy_a"><?php the_field('top_section_-_button_2'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header -->

    <section class="mian-taps">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-md-12 p-0">
                    <nav class="nav-justified ">
                      <div class="nav nav-tabs " id="nav-tab" role="tablist">
                        <a class="nav-item nav-link phy" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab" aria-controls="pop1" aria-selected="true">Physicians</a>
                        <a class="nav-item nav-link stu" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab" aria-controls="pop2" aria-selected="false">Students</a>
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <!-- TAB PHYSICIANS -->
                      <div class="tab-pane fade " id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">HOME</a></li>
                                        <li class="breadcrumb-item"><a href="#">PHYSICIANS</a></li>
                                   <!-- <li class="breadcrumb-item active" aria-current="page">ARTICLE TITLE</li> -->
                                      </ol>
                                    </nav>
                                </div>
                            </div>
                            <div class="row mt-3 mb-5">
                                <div class="col-12 col-sm-5 col-md-3 mb-5 mb-0">
                                    <div class="sidebar">
                                        <div class="sidebar-head">
                                            <h2>TOPICS</h2>
                                        </div>
                                        <div class="sd-content">
                                            <ul class="topics">
                                              <!-- TOPICS 'CATEGORIES' LOOP -->
                                              <?php $itemID = 1; ?>
                                              <?php
                                              $categories = get_categories();
                                              foreach($categories as $category) {
                                                 echo '<input type="checkbox" data-cat="'.$category->slug.'">'."<label>$category->slug</label>";
                                              }
                                              ?>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-7 col-md-9">
                                      <div class="article-box-main article-detail mb-5">

            <div class="row">
              <!-- PHYSICIANS ARTICLES, Post Loop START -->

              <?php
          		  // vars
                $ps  = get_field('p_or_s');
          		  ?>
              <?php
              $query = new WP_Query( array(
                'meta_query' => array(
            		array(
            			'key' => 'p_or_s',
            			'compare' => '=',
            			'value' => '1'
            		)
            	),
              'posts_per_page'      => -1,
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
              <div class="col-md-12 mb-5 article-loop <?php echo $category_string; ?>">
                <div class="article-box">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="article-box-video">
                      <iframe width="560" height="315" src="<?php the_field('video_link'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4><?php the_category(', '); ?></h4>
                      <h2><?php the_title(); ?></h2>
                      <p><?php echo custom_field_excerpt(); ?></p>
                      <a href="<?php the_permalink() ?>" class="btn btn-cat">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- show pagination here -->


              <?php endwhile; ?>
              <?php endif; ?>


            </div>

                                      </div>
                                </div>
                            </div>
                        </div>
                      </div>

                      <!-- TAB STUDENTS -->
                      <div class="tab-pane fade show active" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                            <div class="container">
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <nav aria-label="breadcrumb">
                                          <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">HOME</a></li>
                                            <li class="breadcrumb-item"><a href="#">STUDENTS</a></li>
                                       <!-- <li class="breadcrumb-item active" aria-current="page">ARTICLE TITLE</li> -->
                                          </ol>
                                        </nav>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-5">
                                    <div class="col-12 col-sm-5 col-md-3 mb-5 mb-0">
                                        <div class="sidebar">
                                            <div class="sidebar-head">
                                                <h2>TOPICS</h2>
                                            </div>
                                            <div class="sd-content">
                                                <ul class="topics">
                                                  <!-- TOPICS 'CATEGORIES' LOOP -->
                                                  <?php $itemID = 1; ?>
                                                  <?php
                                                  $categories = get_categories();
                                                  foreach($categories as $category) {
                                                     echo '<input type="checkbox" data-cat="'.$category->slug.'">'."<label>$category->slug</label>";
                                                  }
                                                  ?>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-7 col-md-9">
                                          <div class="article-box-main article-detail mb-5">

                <div class="row">
                  <!-- STUDENT ARTICLES, Post Loop START -->
                  <?php
                  $query = new WP_Query( array(
                    'meta_query' => array(
                		array(
                			'key' => 'p_or_s',
                			'compare' => '=',
                			'value' => '0'
                		)
                	),
                  'posts_per_page'      => -1,
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
                  <div class="col-md-12 mb-5 article-loop <?php echo $category_string; ?>">
                    <div class="article-box">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="article-box-video">
                          <iframe width="560" height="315" src="<?php the_field('video_link'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <h4><?php the_category(', '); ?></h4>
                          <h2><?php the_title(); ?></h2>
                          <p><?php echo custom_field_excerpt(); ?></p>
                          <a href="<?php the_permalink() ?>" class="btn btn-cat">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- show pagination here -->


                  <?php endwhile; ?>
                  <?php endif; ?>


                </div>

                                          </div>
                                    </div>
                                </div>
                            </div>

                      </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="main-footer">
          <div class="footer-tp p_sec text-center bg_03">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-3">recieve the latest scutwork efficiency news</h2>
                  <p>each month i’ll send the latest resources directly to your inbox.</p>
                  <div class="in_choose mt-4">
                    <h4>I’m interested in: </h4>
                    <ul class="mt-5">
                      <li>
                        <label class="in_choose_radio">
                          <input type="radio" checked="checked" name="radio">
                          <span class="checkmark"></span>
                        </label>
                      <label>Student Resources</label>
                      </li>
                      <li>
                        <label class="in_choose_radio">
                          <input type="radio" name="radio">
                          <span class="checkmark"></span>
                        </label>
                        <label>Physicians Resources</label></li>
                      <li>
                      <label class="in_choose_radio">
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                      </label>
                      <label>Board Review Case Of the Week</label>
                      </li>
                    </ul>
                  </div>
                  <div class="get-email-sec d-flex flex-column flex-sm-row align-items-center mt-5">
                    <input class="form-control email-in" placeholder="enter email address" type="email" name="">
                    <button class="btn btn-default btn-sign-up">sign me up</button>
                  </div>
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

aside.sidebar {
  display: none;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
//LINK TO SPECIFIC ANCHOR ON ANOTHER PAGE!!!

  $(document).ready(function() {
  var url = window.location.href;
  if (url.includes("#pop1")) {
    //remove all active classes
    $(".nav-tabs .nav-link.phy").addClass('active');
    $("div#pop1.tab-pane.fade").addClass('active show');
    $("div#pop1.tab-pane.fade").attr('aria-selected', true);
    $(".nav-tabs .nav-link.stu").attr("href", "/#pop2");
    //add back active class to chosen tab
    $(".nav-item.nav-link.stu").removeClass('active');
    $("div#pop2.tab-pane.fade").removeClass('active show');
    $("div#pop2.tab-pane.fade").attr('aria-selected', false);
    $(".nav-tabs .nav-link.phy").attr("href", "/#pop1");




  }


  });



</script>


<script>

    $(document).on('click', '.topics input', function(event) {
        var selected = [];
        $('.topics input:checked').each(function() {
            selected.push($(this).attr('data-cat'));
        });
        var a = false
        $('.article-loop').each(function(index, el) {
            a = false
            selected.forEach(function(s) {
                if($(el).hasClass(s)) {
                    a = true
                }

                if(a) {
                    $(el).fadeIn('fast');
                } else {
                    $(el).fadeOut('fast');
                }

            })
        });
    });

</script>

<script>
$('.topics').find('input').bind('click', watchCheck)
watchCheck()

function watchCheck(){
    if($('.topics').find('input:checked').length > 0)
    {
        // any one is checked
    }else{
        $(".article-loop").show(); // none is checked
    }
};
</script>

<script>
var j = jQuery.noConflict();
j(function() {
var getTermName = j('.sd-content ul.topics > input[type="checkbox"] + label');
getTermName.text(function(i,value) {
  return value.replace(/\-/g, " ")
});
})
</script>



<script>
jQuery(function ($) {
if('physician' == "<?php echo ($ps ? 'physician' : 'student'); ?>") {
      // in here it means that the checkbox is checked

       $(".nav-tabs .nav-link.phy").addClass("active");

       $(".head-rh-info ul li a.phy_a").addClass("active");

     } else {
       $(".nav-tabs .nav-link.stu").addClass("active");

       $(".head-rh-info ul li a.stu_a").addClass("active");
     };
   });
</script>

<script>
jQuery(function ($) {
  $(".nav-tabs .nav-link.phy").click(function(){
  $(".head-rh-info ul li a.phy_a").addClass("active");
  $(".head-rh-info ul li a.stu_a").removeClass("active");
  });
});
jQuery(function ($) {
  $(".nav-tabs .nav-link.stu").click(function(){
  $(".head-rh-info ul li a.stu_a").addClass("active");
  $(".head-rh-info ul li a.phy_a").removeClass("active");
  });
});
</script>
