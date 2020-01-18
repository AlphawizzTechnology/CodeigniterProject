<!-- banner start -->
         <div class="common_banner">
            <div class="inner_bg">
               <h3>Blog</h3>
               <hr> 
            </div>
         </div>
      <!-- banner End -->

      <section class="breadcrumb breadcrumb_bg">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-12">
                  <div class="breadcrumb_iner">
                     <div class="breadcrumb_iner_item">
                        <p>Home / Single Blog</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb start-->
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="<?php echo site_url('assets/images/1-01.png')?>" alt="">
                     </div>
                     <div class="blog_details">
                        <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        </h2>
                        <ul class="blog-info-link">
                           <li><a href="#"><i class="far fa-calendar-alt"></i> November 11,2019</a></li>
                           <li><a href="#"><i class="far fa-user"></i> By Admin</a></li>
                           <li><a href="#"><i class="far fa-heart"></i> Likes</a></li>
                           <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                        </ul>
                        <p class="excert">
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scr
                        </p>
                        <p>
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                        </p>
                        <div class="quote-wrapper">
                           <div class="quotes">
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not on
                           </div>
                        </div>
                        <p>
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not on
                        </p>
                        <p>
                           Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not on
                        </p>
                     </div>
                  </div>
                  <!--  <div class="blog-author">
                     <div class="media align-items-center">
                        <img src="img/author.png" alt="">
                        <div class="media-body">
                           <a href="#">
                              <h4>Harvard milan</h4>
                           </a>
                           <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                              our dominion twon Second divided from</p>
                        </div>
                     </div>
                     </div> -->
                  <div class="comments-area" style="height:400px;"> 

                     <h4><?= count($comments); ?> Comments</h4>

                     <?php foreach ($comments as $c) { ?>
                
            
                     <div class="comment-list" >
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <?php 
                                 $this->db->select('user_image,user_name');
                                 $this->db->from('users');
                                 $this->db->where('user_id',$c['user_id']);
                                  $data=$this->db->get()->row();     ?>
                                  <?php  if($data){ ?>
                                 <img src="<?php echo base_url()?>user_uploads/<?= $data->user_image ?>" alt="">
                              <?php } ?>
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                   <?= $c['comment'] ?>
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                         <?php  if($data){ ?>
                                          <a href="#"><?= $c['name'] ?></a>
                                          <?php } ?>
                                       </h5>
                                       <p class="date"><?= $c['time'] ?></p>
                                    </div>
                                   <!--  <div class="reply-btn">

                                       <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                      <?php  }  ?>
                  </div>
                    <!--  <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="<?php echo site_url('assets/images/comment_2.png')?>" alt="">
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since .
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#">Lorem Ipsum</a>
                                       </h5>
                                       <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                       <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                     <!-- <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="<?php echo site_url('assets/images/comment_3.png')?>" alt="">
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since .
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#">Lorem Ipsum</a>
                                       </h5>
                                       <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                       <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                  
                  <div class="comment-form">
                     <h4>Post a Comment</h4>

                     <?php if(!empty($this->session->userdata('user_id'))){ ?>
                     <form class="form-contact comment_form" action="<?= base_url() ?>welcome/Commments" method="post" id="commentForm">
                        <div class="row">

                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group">
                                 <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                    placeholder="Write Comment"></textarea>
                              </div>
                           </div>
                           
                           
                           <!-- <div class="col-12">
                              <div class="form-group">
                                 <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                              </div>
                              </div> -->
                        </div>
                        <div class="form-group mt-3">
                           <button  class="btn_3 button-contactForm">Send Message</button>
                        </div>
                     </form>
                  <?php  } else { ?>

                     <a href="<?= base_url() ?>login">Login for Comment</button>
                  <?php } ?>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                     <!-- <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                           <div class="form-group">
                              <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder='Search Keyword'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Search Keyword'">
                                 <div class="input-group-append">
                                    <button class="btn" type="button"><i class="ti-search"></i></button>
                                 </div>
                              </div>
                           </div>
                           <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                              type="submit">Search</button>
                        </form>
                     </aside> -->
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Motichoor laddu</p>
                                 <p>(37)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Dry Fruit Sweets</p>
                                 <p>(10)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Cashew Barfi</p>
                                 <p>(03)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Shrikhand</p>
                                 <p>(11)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Rasagulla</p>
                                 <p>(21)</p>
                              </a>
                           </li>
                        </ul>
                     </aside>
                     <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                           <img src="<?php echo site_url('assets/images/1-01.png')?>" alt="post">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>Lorem Ipsum is simply ...</h3>
                              </a>
                              <p>03 Hours ago</p>
                           </div>
                        </div>
                        <div class="media post_item">
                           <img src="<?php echo site_url('assets/images/1-01.png')?>" alt="post">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>Lorem Ipsum is simply ...</h3>
                              </a>
                              <p>05 Hours ago</p>
                           </div>
                        </div>
                        <div class="media post_item">
                           <img src="<?php echo site_url('assets/images/1-01.png')?>" alt="post">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>Lorem Ipsum is simply</h3>
                              </a>
                              <p>01 Days ago</p>
                           </div>
                        </div>
                        <div class="media post_item">
                           <img src="<?php echo site_url('assets/images/1-01.png')?>" alt="post">
                           <div class="media-body">
                              <a href="single-blog.html">
                                 <h3>Lorem Ipsum is simply</h3>
                              </a>
                              <p>03 Days ago</p>
                           </div>
                        </div>
                     </aside>
                     <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <form action="#">
                           <div class="form-group">
                              <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                 onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                           </div>
                           <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                              type="submit">Subscribe</button>
                        </form>
                     </aside>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--================Blog Area end =================-->
      <!-- subscribe_area part start-->
      <!-- <section class="instagram_photo">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="instagram_photo_iner">
                     <div class="single_instgram_photo">
                        <img src="<?php echo site_url('assets/images/instagram/inst_1.png')?>" alt="">
                        <a href="#"><i class="ti-instagram"></i></a> 
                     </div>
                     <div class="single_instgram_photo">
                        <img src="<?php echo site_url('assets/images/instagram/inst_2.png')?>" alt="">
                        <a href="#"><i class="ti-instagram"></i></a> 
                     </div>
                     <div class="single_instgram_photo">
                        <img src="<?php echo site_url('assets/images/instagram/inst_3.png')?>" alt="">
                        <a href="#"><i class="ti-instagram"></i></a> 
                     </div>
                     <div class="single_instgram_photo">
                        <img src="<?php echo site_url('assets/images/instagram/inst_4.png')?>" alt="">
                        <a href="#"><i class="ti-instagram"></i></a> 
                     </div>
                     <div class="single_instgram_photo">
                        <img src="<?php echo site_url('assets/images/instagram/inst_5.png')?>" alt="">
                        <a href="#"><i class="ti-instagram"></i></a> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->