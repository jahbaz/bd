<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh</title>
   <?php wp_head();?>
</head>
<body>
    <!-- header part start -->
    <header class="cont">
        <div class="row header_cont">
            <div class="col-sm-6 header_left">
                <p>
                    বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-sm-6 header_right text-end">
                <p>১৪ অগ্রহায়ণ, ১৪৩০</p>
                <a href="#">English</a>
            </div>
        </div>
    </header>
    <!-- header part end -->
    <!-- logo part start -->
    <section class="cont">
        <div class="row logo_cont">
            <div class="col-sm-5 logo_left">
                <a href="#">
                  <?php the_custom_logo();?>
                    <!-- <img src="<?=get_template_directory_uri() ?>./assets/images/header/logo_bn.png" alt=""> -->
                </a>
            </div>
            <div class="col-sm-5 logo_search">
                <input type="text" placeholder="খুঁজুন ">
                <button>অনুসন্ধান </button>
            </div>
            <div class="col-sm-2 logo_right d-flex justify-content-end">
                <div class="logo1">
                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/header/a2i-logo-footer.png" alt=""></a>
                </div>
                <div class="logo2">
                    <h5>সাথে থাকুন:</h5>
                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/header/facebook-icon.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/header/twitter-blue-icon.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/header/gplus-icon.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/header/youtube-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- menu part start -->
    <section class="cont1">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php 
              wp_nav_menu([
                'theme_location'=>'TM',
                'menu_class'=>'navbar-nav menu1'
              ]);
              ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li> -->
                </ul>

              </div>
            </div>
          </nav>
    </section>
    <!-- menu part end -->
    <!-- hero part start -->
    <section class="cont1">
        <div class="row hero_cont">
            <div class="col-sm-8 hero_left">
                <div class="slider mt-3">
                    <div id="carouselExample" class="carousel slide">
                    <?php
                    $slid = new WP_Query([
                      'post_type'=>'post',
                      'category_name'=>'slider',
                    ]);
                    ?>
                        <div class="carousel-inner">
                        <?php 
                        $x = 0;
                        while($slid->have_posts()){$slid->the_post();
                          $x++;
                        ?>
                          <div class="carousel-item <?=($x==1)?'active' : ''?>">
                          <?php the_post_thumbnail();?>
                            <!-- <img src="<?=get_template_directory_uri() ?>./assets/images/slider/0.jpg" class="d-block w-100" alt="..."> -->
                          </div>
                          <?php }?>
                          <!-- <div class="carousel-item">
                            <img src="<?=get_template_directory_uri() ?>./assets/images/slider/4-02 (1).jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="<?=get_template_directory_uri() ?>./assets/images/slider/6.jpg" class="d-block w-100" alt="...">
                          </div> -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <!-- slider end -->
                <div class="tab mt-3">
                    
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয়</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >দপ্তর ভিত্তিক সেবা</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >সকল ই-সেবা </button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                          <?php 
                          $tab1 = new WP_Query([
                            'post_type'=>'post',
                            'category_name'=>'tab12',
                          ]);
                          ?>
                            <div class="row text-center">
                          <?php
                          while($tab1->have_posts()){$tab1->the_post();
                          ?>
                                <div class="col-sm-2">
                                    <a href="#">
                                      <?php the_post_thumbnail()?>
                                      <!-- <img src="<?=get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""> -->
                                    </a>
                                    <p><?php the_title();?></p>
                                </div>
                            <?php }?>
                                <!-- <div class="col-sm-2">
                                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div>
                                <div class="col-sm-2">
                                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/tab/agriculture.png" alt=""></a>
                                    <p>কৃষি</p>
                                </div> -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                      </div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                      </div>
                
                <!-- tab end -->
                <div class="list mt-2">
                  <?php dynamic_sidebar('list');?>
                </div>
                <div class="portal mt-2">
                  <?php
                  $port = new WP_Query([
                    'post_type'=>'post',
                    'category_name'=>'portal',
                  ]);
                  ?>
                  <div class="row">
                    <?php
                    while($port->have_posts()){$port->the_post();
                    ?>
                    <div class="col-sm-4">
                      <?php the_post_thumbnail();?>
                    </div>
                    <?php }?>
                  </div>
                </div>
                <div class="video mt-2">
                  <h4>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</h4>
                  <div class="row">
                    <div class="col-sm-4">
                      <?php dynamic_sidebar('sidv1');?>
                    </div>
                    <div class="col-sm-4">
                      <?php dynamic_sidebar('sidv2');?>
                    </div>
                    <div class="col-sm-4">
                      <?php dynamic_sidebar('sidv3');?>
                    </div>
                  </div>
                </div>

             
                <div class="video">
                <h4>অন্যান্য ভিডিও</h4>
                 <div class="row sidimg2">

                  <div class="col-sm-8">
                  <?php dynamic_sidebar('sidv11');?>  
                  </div>

                  <div class="col-sm-4">
                  <?php dynamic_sidebar('sidv12');?> 
                  </div>
                 </div>
                </div>

                <div class="vd">
                 
                  
                  <?php dynamic_sidebar('sidv33');?>  
                
                 
                </div>


          <div class="last-video">
             <div class="row">

               <div class="col-sm-12">
               <?php dynamic_sidebar('sidv34');?>  
               </div>
             </div>
          </div>

          <div class="img">
               <div class="row">
                    <div class="col-sm-12">
                    <?php dynamic_sidebar('sidv40');?> 
                    </div>
               </div>
          </div>
            </div>
            <!-- sidebar -->
            <div class="col-sm-4 hero_right mt-3">
                <div class="sidimg">
                  <?php dynamic_sidebar('sider1');?>
                    <!-- <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/sidebar/Bangladesh-Directory (2).jpg" alt="" class="d-block w-100 mb-2"></a>
                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/sidebar/Bangladesh-Directory (2).jpg" alt="" class="d-block w-100 mb-2"></a>
                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/sidebar/Bangladesh-Directory (2).jpg" alt="" class="d-block w-100 mb-2"></a>
                    <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/sidebar/Bangladesh-Directory (2).jpg" alt="" class="d-block w-100 mb-2"></a> -->

                    <!-- <h4>জরুরি হটলাইন</h4> -->
                   <div class="hotline text-center">
                    <!-- <a href="#"><img src="<?=get_template_directory_uri() ?>./assets/images/sidebar/hotline_v.2_bn.png" alt=""></a> -->
                   </div>
              
                </div>
                <div class="sokol mt-2">
                    <h5>সকল বাতায়ন</h5>
                    <form action="">
                        <select>
                            <option selected>ওয়েবসাইট বাছাই করুন</option>
                            <option value="1">ঢাকা বিভাগ</option>
                            <option value="2">চট্টগ্রাম বিভাগ</option>
                            <option value="3">রাজশাহী বিভাগ</option>
                            <option value="4">খুলনা বিভাগ</option>
                          </select>
                          <button>চলুন</button>
                    </form>
                </div>
                <div class="sidimg2 mt-2">
                  <?php dynamic_sidebar('sidr2');?>
                    <!-- <h4>ডিজিটাল বাংলাদেশ থেকে স্মার্ট বাংলাদেশের অভিযাত্রা</h4>
                    <iframe width="315" height="200" src="<?=get_template_directory_uri() ?>https://www.youtube.com/embed/pg4vvzVBXYk" title="ডিজিটাল বাংলাদেশ থেকে স্মার্ট বাংলাদেশ এর অভিযাত্রা" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                </div>
            </div>
        </div>
  
    </section>
    <!-- hero part end -->
    <!-- footer part start -->
    <footer class="cont1 mt-5">
        <div class="row ft">
            <img src="<?=get_template_directory_uri() ?>./assets/images/footer/footer_top_bg.png" alt="">
        </div>
        <div class="row fb">
            <div class="col-sm-8 fb_left">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <?php 
              wp_nav_menu([
                'theme_location'=>'FM',
                'menu_class'=>'navbar-nav menu2'
              ]);
              ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li> -->
                        </ul>
        
                      </div>
                    </div>
                  </nav>
                  <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২৩-১১-২৬ ০৬:৪৭:৫৩</p>
            </div>
            <div class="col-sm-4 fb_right text-end">
                <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
                <?php dynamic_sidebar('foot');?>
                <!-- <img src="<?=get_template_directory_uri() ?>./assets/images/footer/np-logo-set.png" alt=""> -->
            </div>
        </div>
    </footer>
    <!-- footer part end -->
    


   <?php wp_footer();?>
</body>
</html>