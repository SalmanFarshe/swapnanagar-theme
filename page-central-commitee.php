<?php
/**
 * Template Name: Central Committee Page
 */
wp_head();
?>
<?php
    get_template_part('./tem-parts/header', null, null);
?>
<!--====== HERO PART START ======-->
<section class="page-banner pt-100 pb-100 bg_cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <!-- <h1 class="text-white">All Buildings</h1> -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="index.php">Home</a></li> -->
                            <!-- <li class="breadcrumb-item active" aria-current="page">buildings</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== HERO PART END ======-->

<section id="community" class="team-area pt-70 mt-70 pb-100">
  <!-- <div class="container"> -->

    <!-- Section Title -->
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="section-title">Community Central Committee</h2>
        <p class="text-muted">Meet the leadership and members of our community</p>
      </div>
    </div>

    <!-- President -->
    <!-- <div class="row justify-content-center mb-5">
      <div class="col-lg-4 col-md-6">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1wz0j6iNcsEAAUlxR1zS7jElJ8RnGj-74_w&s" alt="President">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info">
            <h4>John Doe</h4>
            <p>President</p>
          </div>
        </div>
      </div>
    </div>
 -->
    <!-- Vice Presidents -->
    <!-- <div class="row justify-content-center mb-5">
      <div class="col-lg-4 col-md-6">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://organicthemes.com/demo/profile/files/2018/05/profile-pic.jpg" alt="Vice President 1">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info">
            <h4>Jane Smith</h4>
            <p>Vice President</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyN1ZxbFxaJeT6e74Di8usZ6XEOEVgzrO8Hq25yz3kp_5-R03C3pFKcbGtMw_6Kk37QF8&usqp=CAU" alt="Vice President 2">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info">
            <h4>Michael Lee</h4>
            <p>Vice President</p>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Top Five -->
    <!-- <div class="row mb-5">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnKlukjoT6pn14aFT2Iv2Oq2gKsoa3FEQfTg4mCZtwnRkrD7S3qkVH3l1_IQwsI5iHSGw&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 1</h4><p>Top Five</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnKlukjoT6pn14aFT2Iv2Oq2gKsoa3FEQfTg4mCZtwnRkrD7S3qkVH3l1_IQwsI5iHSGw&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 1</h4><p>Top Five</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnKlukjoT6pn14aFT2Iv2Oq2gKsoa3FEQfTg4mCZtwnRkrD7S3qkVH3l1_IQwsI5iHSGw&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 1</h4><p>Top Five</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnKlukjoT6pn14aFT2Iv2Oq2gKsoa3FEQfTg4mCZtwnRkrD7S3qkVH3l1_IQwsI5iHSGw&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 1</h4><p>Top Five</p></div>
        </div>
      </div>
      Repeat for top2 - top5 same style 
    </div>  -->


    <!-- Other Members -->
    <!-- <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="single-team text-center">
          <div class="team-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCM2Hw1L7WfNlw-LKKG5rMVzOnpdzgW_HyyFa5SFwZ_Y5Y2VIM4EXvs6JHz-SpEG8IXb0&usqp=CAU" alt="">
            <div class="social-link">
              <ul>
                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="team-info"><h4>Member 6</h4><p>Committee Member</p></div>
        </div>
      </div> -->
      <!-- Repeat until all 25 -->
    <!-- </div> -->

  </div>
</section>



<?php
    get_template_part('./tem-parts/footer', null, null);
    wp_footer();
?>