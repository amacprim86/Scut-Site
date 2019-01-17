<?php $itemID = 1; ?>
<?php
$categories = get_categories();
foreach($categories as $category) {
   echo '<a class="topic-link topic-link--' . $itemID++ . '" href="' . get_category_link( $category->term_id ) . '" title="' . $category->name .  '" ' . '>' . $category->name.'</a>';
}
?>



<!-- DOUGs LOOP FOR TOPICS backup -->

<!-- TOPICS 'CATEGORIES' LOOP -->
<?php $itemID = 1; ?>
<?php
$categories = get_categories();
foreach($categories as $category) {
   echo '<input type="checkbox" data-cat="'.$category->slug.'">'.$category->slug;
}
?>

<!-- STATIC ARTICLES for Student Article Page (2 Below) -->
<!--                  <div class="col-md-12 mb-5">
                    <div class="article-box">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="article-box-video">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/fq9GpfFHbCc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                      </div>
                        <div class="col-md-6">
                          <h4>TOPIC</h4>
                          <h2>video title: 5 things to remember in your med school interview</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                          <a href="students.html" class="btn btn-cat">Read More</a>
                        </div>
                      </div>
                    </div>
                  </div>
-->

<!--
                  <div class="col-md-12 mb-5">
                  <div class="article-box">
                  <div class="row">
                  <div class="col-md-6">
                  <div class="article-box-video">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/fq9GpfFHbCc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <h4>TOPIC</h4>
                  <h2>video title: 5 things to remember in your med school interview</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                  <a href="students.html" class="btn btn-cat">Read More</a>
                  </div>
                  </div>
                  </div>
                  </div>
-->
