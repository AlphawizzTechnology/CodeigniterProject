<style>
   .single_product_img img {
   width: 41%;
   height: 350px;
   object-fit: cover;
   margin-bottom: 20px;
   }
   span.hh {
   font-size: 32px;
   }
   body{
   background:#00CED1;
   font-family: 'Barlow Semi Condensed', sans-serif;
   }
   .main-section{
   background:#FFFFFF;
   width:80%;
   margin: 0 auto;
   padding: 10px;
   margin-top:50px;
   box-shadow:0px 2px 7px 1px #aa9191;
   }
   .hedding-title h1{  
   margin:0px;
   padding:0px 0px 10px 0px;
   font-size:25px;
   }
   .average-rating{
   float:left;
   text-align: center;
   width:30%;
   }
   .average-rating h2{
   margin:0px;
   font-size:80px;
   }
   .average-rating p{
   margin:0px;
   font-size:20px;
   }
   .fa-star,.fa-star-o,.fa-star-half-o{
   color:#FDC91B;
   font-size:25px !important;
   }
   .progress,.progress-2,.progress-3,.progress-4,.progress-5{
   background:#F5F5F5;
   border-radius: 13px;
   height:18px;
   width:97%;
   padding:3px;
   margin:5px 0px 3px 0px;
   }
   .progress:after,.progress-2:after,.progress-3:after,.progress-4:after,.progress-5:after{
   content: '';
   display: block;
   background: #337AB7;
   width:80%;
   height: 100%;
   border-radius: 9px;
   }
   .progress-2:after{
   width: 60%;
   }
   .progress-3:after{
   width:40%;
   }
   .progress-4:after{
   width:20%;
   }
   .progress-5:after{
   width:10%;
   }
   .loder-ratimg{
   display: inline-block;
   width:40%;
   }
   .start-part{
   float:right;
   width:30%;
   text-align: center;
   }
   .start-part span{
   color:#337AB7;
   font-size:23px;
   }
   .reviews h1{
   margin:10px 0px 20px 30px;
   }
   .user-img img{  
   height: 80px;
   width: 80px;
   border:1px solid blue;
   border-radius: 50%;
   }
   .user-img-part{
   width:30%;
   float:left;
   }
   .user-img{
   width:48%;
   float:left;
   text-align: center;
   }
   .user-text{
   float:left;
   }
   .user-text h4,.user-text p{
   margin:0px 0px 5px 0px;
   }
   .user-text p{
   font-size: 20px;
   font-weight: bold;
   }
   .user-text h4,.user-text span{
   color:#B3B5B4;
   }
   .comment{
   width:68%;
   float:right;
   width: 
   }
</style>
<div class="common_banner">
   <div class="inner_bg">
      <h3>Product</h3>
      <hr>
   </div>
</div>
<section class="breadcrumb breadcrumb_bg">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <div class="breadcrumb_iner">
               <div class="breadcrumb_iner_item">
                  <p>Home/Shop/Single product</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php $this->db->select('title');
   $this->db->from('categories');
   $this->db->where('id',$products['category_id']);
   $category=$this->db->get()->row();
   $cat = $category->title;
   ?>
<!-- breadcrumb start-->
<!--================Single Product Area =================-->
<div class="single_product_main_area section_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <div class="image-gallery">
               <div class="image-container">
                  <input type="radio" name="gallery_group" id="image1" checked />
                  <div class="image-1">
                     <label class="prev" for="image4"></label>
                     <label class="next" for="image2"></label> 
                  </div>
                  <input type="radio" name="gallery_group" id="image2" />
                  <div class="image-2">
                     <label class="prev" for="image1"></label>
                     <label class="next" for="image3"></label> 
                  </div>
                  <input type="radio" name="gallery_group" id="image3" />
                  <div class="image-3">
                     <label class="prev" for="image2"></label>
                     <label class="next" for="image4"></label> 
                  </div>
                  <input type="radio" name="gallery_group" id="image4" />
                  <div class="image-4">
                     <label class="prev" for="image3"></label>
                     <label class="next" for="image1"></label> 
                  </div>
               </div>
               <div class="thumbnails">
                  <label for="image1"></label>
                  <label for="image2"></label>
                  <label for="image3"></label>
                  <label for="image4"></label>
               </div>
            </div>
         </div>
         <div class="col-md-7">
            <div class="s_product_text">
               <h3><?=  $products['product_name'] ?></h3>
               <h2>Rs. <?= $products['price'] ?></h2>
               <ul class="list">
                  <li>
                     <a class="active" href="#">
                     <span>Category</span> : <?= $cat?></a>
                  </li>
                  <li>
                     <a href="#"> <span>Availibility</span> : In Stock</a>
                  </li>
               </ul>
               <p>
                  <?= $products['product_description'] ?>
               </p>
               <div class="card_area">
                  <div class="product_count d-inline-block">
                     <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                     <input class="input-number" type="text" value="1" min="0" max="10">
                     <span class="number-increment"> <i class="ti-plus"></i></span>
                  </div>
                  <div class="cart_or_social_icon">
                     <div class="add_to_cart">
                        <a href="<?= base_url() ?>products/addToCart/<?= $products['product_id'] ?>" class="btn_3">add to cart</a>
                        <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
                     </div>
                     <div class="social_icon">
                        <a href="#" class="fb"><i class="ti-facebook"></i></a>
                        <a href="#" class="tw"><i class="ti-twitter-alt"></i></a>
                        <a href="#" class="li"><i class="ti-linkedin"></i></a>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
               <div class="panel-heading">
                  <ul class="nav nav-tabs">
                     <li class="active">
                        <a href="#tab1default" data-toggle="tab" class="active">Additional Information</a>
                     </li>
                     <li><a href="#tab2default" data-toggle="tab">Reviews (<?php  if(!empty($reviews)){echo count($reviews);}else {echo '0';}   ?>)</a></li>
                  </ul>
               </div>
               <div class="panel-body">
                  <div class="tab-content">
                     <div class="tab-pane fade in  active show" id="tab1default">
                        <div class="additional_information">
                           <ul>
                              <li>
                                 <h4>Net Weight</h4>
                                 <p>400 grams</p>
                              </li>
                              <li>
                                 <h4>Quantity</h4>
                                 <p>12 pieces</p>
                              </li>
                              <li>
                                 <h4>Shelf Life (Summer)</h4>
                                 <p>4-5 days</p>
                              </li>
                              <li>
                                 <h4>Shelf Life (Winter)</h4>
                                 <p>5-7 days</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="tab2default">




                  <div class="">



         <div class="row">
            <div class="col-sm-3">
               <div class="rating-block">
                  <h4>Average user rating</h4>
                  <h2 class="bold padding-bottom-7"><small><?=  round($average_ratings) ?></small></h2>
                  <?php if(!empty(round($average_ratings))) {
                     if(round($average_ratings)==1){
                     ?>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" style="color:yellow;"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true "  ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true"  ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true"  ></span>
                  </button>
                  <?php } else if(round($average_ratings ==2)) { ?>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" style="color:yellow;"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true "  style="color:yellow;"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true" ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true"  ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" ></span>
                  </button>
                  <?php } else if(round($average_ratings )==3){ ?>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" style="color:yellow;"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true "  style="color:yellow;"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true" style="color:yellow;" ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true"  ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" ></span>
                  </button>
                  <?php  } else if(round($average_ratings)==4) {  ?>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" style="color:yellow;"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true "  style="color:yellow;"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true" style="color:yellow;" ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" style="color:yellow;" ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" ></span>
                  </button>
                  <?php } else if(round($average_ratings)==5) {?>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" style="color:yellow;"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true "  style="color:yellow;"></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true" style="color:yellow;" ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" style="color:yellow;" ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true"  style="color:yellow;"></span>
                  </button>
                  <?php } else { ?>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true" ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true "  ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh"  aria-hidden="true"  ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true"  ></span>
                  </button>
                  <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                  <span class="fa fa-star hh" aria-hidden="true"  ></span>
                  </button>
                  <?php } ?>
                  <?php  } ?>
                  <!-- <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                     <span class="fa fa-star hh" aria-hidden="true" style="color:yellow;"></span>
                     </button>
                     <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                     <span class="fa fa-star hh"  aria-hidden="true "  style="color:yellow;"></span>
                     </button>
                     <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                     <span class="fa fa-star hh"  aria-hidden="true"  style="color:yellow;"></span>
                     </button>
                     <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                     <span class="fa fa-star hh" aria-hidden="true"  style="color:yellow;"></span>
                     </button>
                     <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                     <span class="fa fa-star hh" aria-hidden="true"  style="color:yellow;"></span>
                     </button> -->
               </div>
            </div>
            <div class="col-sm-3">
               <h4>Rating breakdown</h4>
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: 100%">
                           <span class="sr-only">80% Complete (danger)</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                           <span class="sr-only">80% Complete (danger)</span>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="pull-right" style="margin-left:10px;">1</div> -->
               </div>
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                           <span class="sr-only">80% Complete (danger)</span>
                        </div>
                     </div>
                  </div>
                  <!--  <div class="pull-right" style="margin-left:10px;">0</div> -->
               </div>
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                           <span class="sr-only">80% Complete (danger)</span>
                        </div>
                     </div>
                  </div>
                  <!--  <div class="pull-right" style="margin-left:10px;">0</div> -->
               </div>
               <div class="pull-left">
                  <div class="pull-left" style="width:35px; line-height:1;">
                     <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                  </div>
                  <div class="pull-left" style="width:180px;">
                     <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                           <span class="sr-only">80% Complete (danger)</span>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="pull-right" style="margin-left:10px;">0</div> -->
               </div>
            </div>
         </div>
         <!-- <div class="row">
            <div class="col-sm-7">
               -->
         <!-- <div class="row">
            <div class="col-sm-3">
               <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
               <div class="review-block-name"><a href="#">nktailor</a></div>
               <div class="review-block-date">January 29, 2016<br/>1 day ago</div>
            </div> -->
         <!--   <div class="col-sm-9">
            <div class="review-block-rate">
               <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
               <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
               <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
               <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
               <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
               </button>
            </div>
            <div class="review-block-title">this was nice in buy</div>
            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
            </div> -->
      </div>









<div class="rating-part">
         
         <div style="clear: both;"></div>
         <div class="reviews">
            <h1>Reviews</h1>
         </div>
         <div class="comment-part" style="overflow: scroll;height:300px;">
            <?php 
               if(!empty($reviews)){
               foreach($reviews as $data) {  ?>
            <?php 
               $this->db->select('*');
               $this->db->from('users');
               $this->db->where('user_id',$data['user_id']);
               $query=$this->db->get()->result_array();
               ?>
            <div class="user-img-part">
               <div class="user-img">
                  <img src="<?= base_url() ?>/user_uploads/<?= $query[0]['user_image'] ?>">
               </div>
               <div class="user-text">
                  <!-- <h4>8 days ago</h4> -->
                  <p><?= $query[0]['user_fullname']; ?></p>
                  <span>Report</span>
               </div>
               <div style="clear: both;"></div>
            </div>
            <div class="comment">
               <?php  if($data['rating']==1) { ?>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <?php  } ?>
               <?php  if($data['rating']==2) { ?>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <?php  } ?>
               <?php  if($data['rating']==3) { ?>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <?php  } ?>
               <?php  if($data['rating']==4) { ?>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star-o"></i>
               <?php  } ?>
               <?php  if($data['rating']==5) { ?>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <i aria-hidden="true" class="fa fa-star"></i>
               <?php  } else { ?>
               <!--  <i aria-hidden="true" class="fa fa-star-o"></i>
                  <i aria-hidden="true" class="fa fa-star-o"></i>
                  <i aria-hidden="true" class="fa fa-star-o"></i>
                  <i aria-hidden="true" class="fa fa-star-o"></i>
                  <i aria-hidden="true" class="fa fa-star-o"></i> -->
               <?php } ?>
               <p><?= $data['comment']; ?></p>
            </div>
            <div style="clear: both;"></div>
            <?php  }   }  else {echo 'no review in this product';}?>
         </div>
      </div>






             <div class="container">
   <div class="header">
      <h3>Add Your Review</h3>
   </div>
   <div class="row">
      <div class="form-group col-sm-12" style="font-size: 34px;">
         <span class="rating fa fa-star-o" value='1' id="<?= $products['product_id'] ?>"  ></span>
         <span class="rating fa fa-star-o" value='2' id="<?= $products['product_id'] ?>" ></span>
         <span class="rating fa fa-star-o" value='3' id="<?= $products['product_id'] ?>"  ></span>
         <span class="rating fa fa-star-o" value='4' id="<?= $products['product_id'] ?>"  ></span>
         <span class="rating fa fa-star-o" value='5' id="<?= $products['product_id'] ?>"></span>
      </div>
      <div class="form-group col-sm-10">
         <textarea rows="4" cols="50" class="form-control" id="comments"></textarea>
      </div>
      <div class="col-sm-6 review_class_btn">
         <button type="button" id="review" class="btn btn-success">Review</button>
      </div>
   </div>
</div>



         

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


     
      <!-- <!DOCTYPE html>
         <html lang="en">
         <head>
             <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
             <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
         </head>
         <body> -->
      <!--  <div class="main-section"> -->
      <!-- <div class="hedding-title"><h4>Star Rating System</h4></div>  -->
      
      <br>
      <!-- </div>
         </body>
         </html> -->
   </div>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="container">
   <div class="header">
      <h3>Add Your Review</h3>
   </div>
   <div class="row">
      <div class="form-group col-sm-12" style="font-size: 34px;">
         <span class="rating fa fa-star-o" value='1' id="<?= $products['product_id'] ?>"  ></span>
         <span class="rating fa fa-star-o" value='2' id="<?= $products['product_id'] ?>" ></span>
         <span class="rating fa fa-star-o" value='3' id="<?= $products['product_id'] ?>"  ></span>
         <span class="rating fa fa-star-o" value='4' id="<?= $products['product_id'] ?>"  ></span>
         <span class="rating fa fa-star-o" value='5' id="<?= $products['product_id'] ?>"></span>
      </div>
      <div class="form-group col-sm-10">
         <textarea rows="4" cols="50" class="form-control" id="comments"></textarea>
      </div>
      <div class="col-sm-6 review_class_btn">
         <button type="button" id="review" class="btn btn-success">Review</button>
      </div>
   </div>
</div> -->
<!--================End Single Product Area =================-->
<!--================Product Description Area =================-->
<!--================End Product Description Area =================-->
<!-- product_list part start-->
<?php ?>
<section class="product_list best_seller section_padding">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <div class="section_tittle text-center">
               <h2>Related Products</h2>
            </div>
         </div>
      </div>



      <div class="row prdct_box">

                                          <div class="col-md-3">
                        <div class="product_box">
                           <div class="product_img">
                              <a href="https://alphawizz.org/sweets_ecommerce/Products/Single_Product/95">
                              <img class="bottom" src="https://alphawizz.org/sweets_ecommerce/assets/images/Jalbhara-Sandesh.jpg">
                              <img class="top" src="https://alphawizz.org/sweetadmin/uploads/products/abar-khabo.jpg">
                              </a>
                           </div>
                           <div class="product_content">
                              <h5>abar-khabo</h5>
                                                            <div  style="margin-left: 138px; font-size: 22px;margin-top: -34px;">
                                                     <span value="1" id="95 " style="color:red;">☆</span>
                           <span value="2" id="95" style="color:red;">☆</span>
                           <span value="3" id="95" style="color:red;">☆</span>
                           <span value="4" id="95" style="color:red;">☆</span>
                           <span value="5" id="95" style="color:red;">☆</span>
                        



                             
                          
                        

                             

                            
                          
                        
                           </div>
                                                       <p class="product_price">Rs. 233</p>
                              <span class="product_cart_icon ">
                              <a href="https://alphawizz.org/sweets_ecommerce/products/addToCart/95"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                              </span>
                           </div>
                        </div>
                     </div>
                                          <div class="col-md-3">
                        <div class="product_box">
                           <div class="product_img">
                              <a href="https://alphawizz.org/sweets_ecommerce/Products/Single_Product/111">
                              <img class="bottom" src="https://alphawizz.org/sweets_ecommerce/assets/images/Jalbhara-Sandesh.jpg">
                              <img class="top" src="https://alphawizz.org/sweetadmin/uploads/products/abar-khabo-21.jpg">
                              </a>
                           </div>
                           <div class="product_content">
                              <h5>abar-khabo</h5>
                                                            <div  style="margin-left: 138px; font-size: 22px;margin-top: -34px;">
                                                     <span value="1" id="111" style="color:red;">☆</span>
                           <span value="2" id="111" style="color:red;">☆</span>
                           <span value="3" id="111" style="color:red;">☆</span>
                           <span value="4" id="111">☆</span>
                           <span value="5" id="111">☆</span>
                        

                             
                          
                        

                             

                            
                          
                        
                           </div>
                                                       <p class="product_price">Rs. 414</p>
                              <span class="product_cart_icon ">
                              <a href="https://alphawizz.org/sweets_ecommerce/products/addToCart/111"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                              </span>
                           </div>
                        </div>
                     </div>
                                          <div class="col-md-3">
                        <div class="product_box">
                           <div class="product_img">
                              <a href="https://alphawizz.org/sweets_ecommerce/Products/Single_Product/96">
                              <img class="bottom" src="https://alphawizz.org/sweets_ecommerce/assets/images/Jalbhara-Sandesh.jpg">
                              <img class="top" src="https://alphawizz.org/sweetadmin/uploads/products/abar-khabo-2.jpg">
                              </a>
                           </div>
                           <div class="product_content">
                              <h5>abar-khabo-2</h5>
                                                            <div  style="margin-left: 138px; font-size: 22px;margin-top: -34px;">
                         
                                  <span value="1" id="96" style="color:red;">☆</span>
                           <span value="2" id="96">☆</span>
                           <span value="3" id="96">☆</span>
                           <span value="4" id="96">☆</span>
                           <span value="5" id="96">☆</span>
                           
                              
                          
                        

                             

                            
                          
                        
                           </div>
                                                       <p class="product_price">Rs. 233</p>
                              <span class="product_cart_icon ">
                              <a href="https://alphawizz.org/sweets_ecommerce/products/addToCart/96"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                              </span>
                           </div>
                        </div>
                     </div>
                                          <div class="col-md-3">
                        <div class="product_box">
                           <div class="product_img">
                              <a href="https://alphawizz.org/sweets_ecommerce/Products/Single_Product/112">
                              <img class="bottom" src="https://alphawizz.org/sweets_ecommerce/assets/images/Jalbhara-Sandesh.jpg">
                              <img class="top" src="https://alphawizz.org/sweetadmin/uploads/products/abar-khabo-22.jpg">
                              </a>
                           </div>
                           <div class="product_content">
                              <h5>abar-khabo-2</h5>
                                                            <div  style="margin-left: 138px; font-size: 22px;margin-top: -34px;">
                         
                                  <span value="1" id="112" style="color:red;">☆</span>
                           <span value="2" id="112">☆</span>
                           <span value="3" id="112">☆</span>
                           <span value="4" id="112">☆</span>
                           <span value="5" id="112">☆</span>
                           
                              
                          
                        

                             

                            
                          
                        
                           </div>
                                                       <p class="product_price">Rs. 233</p>
                              <span class="product_cart_icon ">
                              <a href="https://alphawizz.org/sweets_ecommerce/products/addToCart/112"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                              </span>
                           </div>
                        </div>
                     </div>
                                         
                                       
                                       </div>

   
 <!--      <div class="row">
         <?php if(!empty($product)){ for($i=0;$i<count($product);$i++){ 
           if($i<4){
            // echo '<pre>';
            // print_r($product);exit;
            ?>
         <div class="col-lg-3 col-sm-6">
            <div class="single_category_product single_related_product">
               <div class="single_category_img">
                   <img src="<?=  base_url() ?>assets/images/<?= $product[$i]['product_image'] ?>" alt=""> 
                  <img  src="https://alphawizz.org/sweetadmin/uploads/products/<?= $product[$i]['product_image'] ?>" alt="">
               </div>
               <div class="product_name">
                  <a href="#">
                     <h5><?= $product[$i]['product_name'] ?></h5>
                  </a>
               </div>
               <div class="category_product_text">
                  <div class="wishlist">
                     <h5><?= $product[$i]['price']  ?></h5>
                     <a href="#"><i class="ti-heart"></i></a>
                  </div>
                  <img src="<?= base_url() ?>img/rating-1.png">                                    
               </div>
               <div class="addtocart_btn">
                  <a href="#" class="btn btn-default">Add to Cart</a>
               </div>
            </div>

         </div>
         <?php } } } ?>

</div> -->
         <!-- <div class="col-lg-3 col-sm-6">
            <div class="single_category_product single_related_product">
               <div class="single_category_img">
                  <img src="<?= base_url() ?>img/p2.png" alt="">
               </div>
               <div class="product_name">
                  <a href="#">
                     <h5>Sweets</h5>
                  </a>
               </div>
               <div class="category_product_text">
                  <div class="wishlist">
                     <h5>Rs.50.00</h5>
                     <a href="#"><i class="ti-heart"></i></a>
                  </div>
                  <img src="<?=base_url() ?>img/rating-1.png">                                    
               </div>
               <div class="addtocart_btn">
                  <a href="#" class="btn btn-default">Add to Cart</a>
               </div>
            </div>
         </div> -->
         <!-- <div class="col-lg-3 col-sm-6">
            <div class="single_category_product single_related_product">
               <div class="single_category_img">
                  <img src="<?= base_url() ?>img/p8.png" alt="">
               </div>
               <div class="product_name">
                  <a href="#">
                     <h5>Sweets</h5>
                  </a>
               </div>
               <div class="category_product_text">
                  <div class="wishlist">
                     <h5>Rs.50.00</h5>
                     <a href="#"><i class="ti-heart"></i></a>
                  </div>
                  <img src="<?= base_url() ?>img/rating-1.png">                                    
               </div>
               <div class="addtocart_btn">
                  <a href="#" class="btn btn-default">Add to Cart</a>
               </div>
            </div>
         </div> -->
         <!-- <div class="col-lg-3 col-sm-6">
            <div class="single_category_product single_related_product">
               <div class="single_category_img">
                  <img src="<?= base_url()?>img/p4.png" alt="">
               </div>
               <div class="product_name">
                  <a href="#">
                     <h5>Sweets</h5>
                  </a>
               </div>
               <div class="category_product_text">
                  <div class="wishlist">
                     <h5>Rs.50.00</h5>
                     <a href="#"><i class="ti-heart"></i></a>
                  </div>
                  <img src="<?= base_url() ?>img/rating-1.png">                                    
               </div>
               <div class="addtocart_btn">
                  <a href="#" class="btn btn-default">Add to Cart</a>
               </div>
            </div>
         </div> -->
      
   </div>
</section>
<script
   src="https://code.jquery.com/jquery-2.2.4.min.js"
   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
   crossorigin="anonymous"></script>
<script>
   $(document).ready(function(){
      var value=0;
      var id=0;
    
      $('.rating').click(function(){
   
        $(this).removeClass("fa fa-star-o");
      $(this).addClass("fa fa-star");
     
      //$(this).prevAll().css( "color", "yellow" );
       $(this).prevAll().removeClass("fa fa-star-o");
      $(this).prevAll().addClass("fa fa-star");
     
     // $(this).nextAll().css('color','black');
      $(this).nextAll().addClass("fa fa-star");
      //$(this).nextAll().removeClass("fa fa-star-o");
       value=$(this).attr("value");
       id=$(this).attr('id');
    
      // $(this).css('color','red');
      // $(this).prevAll().css( "color", "red" );
      // $(this).nextAll().css('color','black');
      // value=$(this).attr("value");
      //  id=$(this).attr('id');
   // console.log(value+' '+id)
   // var txt = $("input").val();
   
   });  
   
       $('.rating').hover(function(){
    
     // $(this).css('color','yellow');
      $(this).removeClass("fa fa-star-o");
      $(this).addClass("fa fa-star");
     
      //$(this).prevAll().css( "color", "yellow" );
       $(this).prevAll().removeClass("fa fa-star-o");
      $(this).prevAll().addClass("fa fa-star");
     
     // $(this).nextAll().css('color','black');
      $(this).nextAll().addClass("fa fa-star");
      //$(this).nextAll().removeClass("fa fa-star-o");
       value=$(this).attr("value");
       id=$(this).attr('id');
   // console.log(value+' '+id)
   // var txt = $("input").val();
   
   });
   
   
       $('#review').click(function(){
        var comment=$('#comments').val();
       // alert('value is '+value+' and id is '+id+'  '+comment);
        $.post("<?= base_url() ?>Products/product_review", {product_id:id,rating_value:value,comment:comment}, function(result){
         //alert(result);
   });
       })
   
   
   
   
    })
   
   
     
   
</script>