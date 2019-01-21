





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
                                    <li><a href="students.html"class="stu_a"><?php the_field('top_section_-_button_1',12); ?></a></li>
                                    <li><a href="#" class="phy_a"><?php the_field('top_section_-_button_2',12); ?></a></li>
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
            <!-- PHYSICIANS ARTICLES, Post Loop START -->
            <?php
            $query = new WP_Query( array(
              'meta_query' => array(
              array(
                'key' => 'featured_article',
                'compare' => '=',
                'value' => '1'
              )
            ),
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




                <div class="col-md-4 mb-5 mb-md-0">
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

     } else {
       $(".nav-tabs .nav-link.stu").addClass("active");
       $(".nav-tabs .nav-link.phy").attr("href", "/students-article/").attr("data-toggle",false);
       $(".head-rh-info ul li a.stu_a").addClass("active");
     };
</script>
