<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="banner_slider">
                        <div class="single_banner_slider">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                    <h1>Lorem Ipsum is simply dummy text</h1>
                                    <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </h5>
                                    <!-- <a href="#" class="btn_1">Taste</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part pt-4">
        <div class="container p-lg-0 overflow-hidden">
            <div class="row align-items-center">
                <?php $count=0; ?>
                 <?php if(!empty($products)){ foreach($products as $row){
                    $count++;
                   if($count<9){
                  ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="<?php echo ('https://alphawizz.org/sweetadmin/uploads/products/'.$row['product_image'])?>" alt="#" />
                        <div class="hover_text">
                            <a href="<?= base_url() ?>Products/Single_Product/<?= $row['product_id'] ?>" class="btn_2"><?php echo $row['product_name']?></a>
                        </div>
                    </div>
                </div>

            <?php }  } } ?>

            
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="assets/images/55f19e282601e964d78055b3d8078e67.png" alt="#">
                        <div class="hover_text">
                            <a href="#" class="btn_2">Lorem Ipsum is simply</a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="assets/images/2dfbad9ef25184b8876384eb36763049.png" alt="#">
                        <div class="hover_text">
                            <a href="#" class="btn_2">Lorem Ipsum is simply</a>
                        </div>
                    </div>
                </div> -->
               <!--  <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="assets/images/acac1fdbf342a8560ac9d67b1d4aea4e.png" alt="#">
                        <div class="hover_text">
                            <a href="#" class="btn_2">Lorem Ipsum is simply</a>
                        </div>
                    </div>
                </div> -->
               <!--  <div class="col-lg-3 col-sm-6"> 
                    <div class="single_feature_post_text">
                        <img src="assets/images/d964cd2c08e02f87d603554a6fbf43d9.png" alt="#">
                        <div class="hover_text">
                            <a href="#" class="btn_2">Lorem Ipsum is simply</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="assets/images/434934209df4f9c19263479fec11c1aa.png" alt="#">
                        <div class="hover_text">
                            <a href="#" class="btn_2">Lorem Ipsum is simply</a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="assets/images/55f19e282601e964d78055b3d8078e67.png" alt="#">
                        <div class="hover_text">
                            <a href="#" class="btn_2">Lorem Ipsum is simply</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_post_text">
                        <img src="assets/images/2dfbad9ef25184b8876384eb36763049.png" alt="#">
                        <div class="hover_text">
                            <a href="#" class="btn_2">Lorem Ipsum is simply</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                     <div class="col-md-12">
                        <div class="view_more">
                           <a href="https://alphawizz.org/sweets_ecommerce/Products/index" class="btn btn-default">View More</a>
                        </div>

                     </div>
                  </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- Our Product here -->
    <section class="new_arrival section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="arrival_tittle">
                        <h2>Our Product</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <d 
    ?>iv class="arrival_filter_item filters">
                        <ul>
                            <li class="active controls" data-filter="*">all</li>
                            <li class="controls" data-toggle=".men">men</li>
                            <li class="controls" data-toggle=".women">women</li>
                            <li class="controls" data-toggle=".shoes">shoes</li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_arrival_iner filter-container"> 
                       <!--  <div class="single_arrivel_item weidth_2">
                            <div class="Product_img">
                                <img src="assets/images/1-05.png" alt="#">
                            </div>
                            <div class="defaul_text">
                                <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                
                                <h5>Rs.150</h5>

                                <a href="#" class="order-btn">Order Now</a>
                            </div>
                        </div> -->
                       <!--  <div class="single_arrivel_item weidth_2">
                            <div class="Product_img">
                                <img src="assets/images/1-05.png" alt="#">
                            </div>
                            <div class="defaul_text">
                                <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                
                                <h5>Rs.150</h5>

                                <a href="#" class="order-btn">Order Now</a>
                            </div>
                        </div> -->
                       <!--  <div class="single_arrivel_item weidth_2">
                            <div class="Product_img">
                                <img src="assets/images/1-05.png" alt="#">
                            </div>
                            <div class="defaul_text">
                                <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                
                                <h5>Rs.150</h5>

                                <a href="#" class="order-btn">Order Now</a>
                            </div>
                        </div> -->
                        <!-- <div class="single_arrivel_item weidth_2">
                            <div class="Product_img">
                                <img src="assets/images/1-05.png" alt="#">
                            </div>
                            <div class="defaul_text">
                                <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                
                                <h5>Rs.150</h5>

                                <a href="#" class="order-btn">Order Now</a>
                            </div>
                        </div> -->
                      <!--   <div class="single_arrivel_item weidth_2">
                            <div class="Product_img">
                                <img src="assets/images/1-05.png" alt="#">
                            </div>
                            <div class="defaul_text">
                                <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                
                                <h5>Rs.150</h5>

                                <a href="#" class="order-btn">Order Now</a>
                            </div>
                        </div> -->
                        <!-- <div class="single_arrivel_item weidth_2">
                            <div class="Product_img">
                                <img src="assets/images/1-05.png" alt="#">
                            </div>
                            <div class="defaul_text">
                                <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                
                                <h5>Rs.150</h5>

                                <a href="#" class="order-btn">Order Now</a>
                            </div>
                        </div> -->
                       <!--  <div class="single_arrivel_item weidth_2">
                            <div class="Product_img">
                                <img src="assets/images/1-05.png" alt="#">
                            </div>
                            <div class="defaul_text">
                                <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                
                                <h5>Rs.150</h5>

                                <a href="#" class="order-btn">Order Now</a>
                            </div>
                        </div> -->
                       <!--  <div class="single_arrivel_item weidth_2">
                            <div class="Product_img">
                                <img src="assets/images/1-05.png" alt="#">
                            </div>
                            <div class="defaul_text">
                                <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                
                                <h5>Rs.150</h5>

                                <a href="#" class="order-btn">Order Now</a>
                            </div>
                        </div> -->
                    </div>
                </div> 
            </div>
             <div class="row prdct_box">
                <?php $count=0; ?>
                     <?php if(!empty($products)){ foreach($products as $row){ 
                        
                            $count++;
                        if($count<9){
                        ?>
                     <div class="col-md-3">
                        <div class="product_box">
                           <div class="product_img">
                              <a href="<?= base_url() ?>Products/Single_Product/<?= $row['product_id'] ?>">
                              <img class="bottom" src="<?php echo site_url('assets/images/Jalbhara-Sandesh.jpg')?>" />
                              <img class="top" src="<?php echo ('https://alphawizz.org/sweetadmin/uploads/products/'.$row['product_image'])?>" />
                              </a>
                           </div>
                           <div class="product_content">
                              <h5><?php echo $row['product_name']?></h5>
                              <p class="product_price"><?php echo $row['price']?></p>
                              <span class="product_cart_icon ">
                              <a href="<?php echo base_url('products/addToCart/'.$row['product_id']); ?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                              </span>
                           </div>
                        </div>
                     </div>
                     <?php } } }else{ ?>
                     <p>Product(s) not found...</p>
                  <?php } ?>
            </div>
            <div class="row">
                     <div class="col-md-12">
                        <div class="view_more">
                           <a href="https://alphawizz.org/sweets_ecommerce/Products/index" class="btn btn-default">View More</a>
                        </div>
                     </div>
            </div>
                   
        </div>
    </section>
    <!-- Our Product end -->

    <!-- menu_box here -->
    <section class="menu_box">
        <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <div class="arrival_tittle">
                        <h2>Menu</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </div>
                    <div class="row prdct_box">
                <?php $count=0; ?>
                     <?php if(!empty($products)){ foreach($products as $row){ 
                            $count++;
                        if($count<9){
                        ?>
                     <div class="col-md-3">
                        <div class="product_box">
                           <div class="product_img">
                              <a href="<?= base_url() ?>Products/Single_Product/<?= $row['product_id'] ?>">
                              <img class="bottom" src="<?php echo site_url('assets/images/Jalbhara-Sandesh.jpg')?>" />
                              <img class="top" src="<?php echo ('https://alphawizz.org/sweetadmin/uploads/products/'.$row['product_image'])?>" />
                              </a>
                           </div>
                           <div class="product_content">
                              <h5><?php echo $row['product_name']?></h5>
                              <p class="product_price"><?php echo $row['price']?></p>
                              <span class="product_cart_icon ">
                              <a href="<?php echo base_url('products/addToCart/'.$row['product_id']); ?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                              </span>
                           </div>
                        </div>
                     </div>
                     <?php } } }else{ ?>
                     <p>Product(s) not found...</p>
                  <?php } ?>
            </div>
                </div>
            </div>
            </div>
        <div class="container">
            <div class="row">
               <!--  <div class="col-md-6">
                    <div class="menu_cont">
                        <div class="col-md-3">
                            <img src="assets/images/1-04.png">
                        </div>
                        <div class="col-md-9">
                            <div class="eltdf-pli-content clearfix">
                                <div class="eltdf-pli-title-holder">
                                    <h5 class="eltdf-pli-title entry-title">
                                    Heart Cookies </h5>
                                    <div class="eltdf-pli-dots"></div>
                                    <div class="eltdf-pli-price-holder">
                                        <h5 class="eltdf-pli-price">
                                            <span>Rs.22</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="eltdf-pli-bottom-content">
                                        <p>(eggs, milk, sugar, vanilla)</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>     -->            
               <!--  <div class="col-md-6">
                    <div class="menu_cont">
                        <div class="col-md-3">
                            <img src="assets/images/1-04.png">
                        </div>
                        <div class="col-md-9">
                            <div class="eltdf-pli-content clearfix">
                                <div class="eltdf-pli-title-holder">
                                    <h5 class="eltdf-pli-title entry-title">
                                    Heart Cookies </h5>
                                    <div class="eltdf-pli-dots"></div>
                                    <div class="eltdf-pli-price-holder">
                                        <h5 class="eltdf-pli-price">
                                            <span>Rs.22</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="eltdf-pli-bottom-content">
                                        <p>(eggs, milk, sugar, vanilla)</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>   -->
               <!--  <div class="col-md-6">
                    <div class="menu_cont">
                        <div class="col-md-3">
                            <img src="assets/images/1-04.png">
                        </div>
                        <div class="col-md-9">
                            <div class="eltdf-pli-content clearfix">
                                <div class="eltdf-pli-title-holder">
                                    <h5 class="eltdf-pli-title entry-title">
                                    Heart Cookies </h5>
                                    <div class="eltdf-pli-dots"></div>
                                    <div class="eltdf-pli-price-holder">
                                        <h5 class="eltdf-pli-price">
                                            <span>Rs.22</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="eltdf-pli-bottom-content">
                                        <p>(eggs, milk, sugar, vanilla)</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>   -->
               <!--  <div class="col-md-6">
                    <div class="menu_cont">
                        <div class="col-md-3">
                            <img src="assets/images/1-04.png">
                        </div>
                        <div class="col-md-9">
                            <div class="eltdf-pli-content clearfix">
                                <div class="eltdf-pli-title-holder">
                                    <h5 class="eltdf-pli-title entry-title">
                                    Heart Cookies </h5>
                                    <div class="eltdf-pli-dots"></div>
                                    <div class="eltdf-pli-price-holder">
                                        <h5 class="eltdf-pli-price">
                                            <span>Rs.22</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="eltdf-pli-bottom-content">
                                        <p>(eggs, milk, sugar, vanilla)</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>   -->
               <!--  <div class="col-md-6">
                    <div class="menu_cont">
                        <div class="col-md-3">
                            <img src="assets/images/1-04.png">
                        </div>
                        <div class="col-md-9">
                            <div class="eltdf-pli-content clearfix">
                                <div class="eltdf-pli-title-holder">
                                    <h5 class="eltdf-pli-title entry-title">
                                    Heart Cookies </h5>
                                    <div class="eltdf-pli-dots"></div>
                                    <div class="eltdf-pli-price-holder">
                                        <h5 class="eltdf-pli-price">
                                            <span>Rs.22</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="eltdf-pli-bottom-content">
                                        <p>(eggs, milk, sugar, vanilla)</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>   -->
                <!-- <div class="col-md-6">
                    <div class="menu_cont">
                        <div class="col-md-3">
                            <img src="assets/images/1-04.png">
                        </div>
                        <div class="col-md-9">
                            <div class="eltdf-pli-content clearfix">
                                <div class="eltdf-pli-title-holder">
                                    <h5 class="eltdf-pli-title entry-title">
                                    Heart Cookies </h5>
                                    <div class="eltdf-pli-dots"></div>
                                    <div class="eltdf-pli-price-holder">
                                        <h5 class="eltdf-pli-price">
                                            <span>Rs.22</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="eltdf-pli-bottom-content">
                                        <p>(eggs, milk, sugar, vanilla)</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>   -->
               <!--  <div class="col-md-6">
                    <div class="menu_cont">
                        <div class="col-md-3">
                            <img src="assets/images/1-04.png">
                        </div>
                        <div class="col-md-9">
                            <div class="eltdf-pli-content clearfix">
                                <div class="eltdf-pli-title-holder">
                                    <h5 class="eltdf-pli-title entry-title">
                                    Heart Cookies </h5>
                                    <div class="eltdf-pli-dots"></div>
                                    <div class="eltdf-pli-price-holder">
                                        <h5 class="eltdf-pli-price">
                                            <span>Rs.22</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="eltdf-pli-bottom-content">
                                        <p>(eggs, milk, sugar, vanilla)</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>   -->
               <!--  <div class="col-md-6">
                    <div class="menu_cont">
                        <div class="col-md-3">
                            <img src="assets/images/1-04.png">
                        </div>
                        <div class="col-md-9">
                            <div class="eltdf-pli-content clearfix">
                                <div class="eltdf-pli-title-holder">
                                    <h5 class="eltdf-pli-title entry-title">
                                    Heart Cookies </h5>
                                    <div class="eltdf-pli-dots"></div>
                                    <div class="eltdf-pli-price-holder">
                                        <h5 class="eltdf-pli-price">
                                            <span>Rs.22</span> 
                                        </h5>
                                    </div>
                                </div>
                                <div class="eltdf-pli-bottom-content">
                                        <p>(eggs, milk, sugar, vanilla)</p>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>    -->
               <!--  <div class="menu_btn">
                    <a href="#" class="btn-primaryc plr-25">SEE MENU</a>
                </div> -->
                
            </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="view_more">
                           <a href="https://alphawizz.org/sweets_ecommerce/Products/index" class="btn btn-default">SEE MENU</a>
                        </div>
                     </div>             
            </div>
        </div>
    </section>
    <!-- menu_box end -->

    <!-- what_we_sec here -->
    <!-- <section class="what_we_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 what_we_sec_img">
                    <div class="">
                        <img src="assets/images/1-07.png">
                    </div>
                </div>                
                <div class="col-md-6 accordion_cont"> 
                    <h2>What We Do</h2>                   
                     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Lorem Ipsum is simply dummy
                            </a>
                          </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse in collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Lorem Ipsum is simply dummy #2
                            </a>
                          </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Lorem Ipsum is simply dummy #3
                            </a>
                          </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            </div>
                          </div>
                        </div>
                      </div> 
                </div>                 
            </div>
        </div>
    </section> -->
    <!-- what_we_sec end -->

    <!-- Sandesh here -->
    <section class="new_arrival Juicy_sec Juicy_Sandesh">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="arrival_tittle">
                        <h2>Sandesh</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_arrival_iner filter-container autoplay">
                        <div>
                            <!-- <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                       <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row prdct_box">
                <?php $count=0; ?>
                     <?php if(!empty($products)){ foreach($products as $row){ 
                            $count++;
                        if($count<5){
                        ?>
                     <div class="col-md-3">
                        <div class="product_box">
                           <div class="product_img">
                              <a href="<?= base_url() ?>Products/Single_Product/<?= $row['product_id'] ?>">
                              <img class="bottom" src="<?php echo site_url('assets/images/Jalbhara-Sandesh.jpg')?>" />
                              <img class="top" src="<?php echo ('https://alphawizz.org/sweetadmin/uploads/products/'.$row['product_image'])?>" />
                              </a>
                           </div>
                           <div class="product_content">
                              <h5><?php echo $row['product_name']?></h5>
                              <p class="product_price"><?php echo $row['price']?></p>
                              <span class="product_cart_icon ">
                              <a href="<?php echo base_url('products/addToCart/'.$row['product_id']); ?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                              </span>
                           </div>
                        </div>
                     </div>
                     <?php } } }else{ ?>
                     <p>Product(s) not found...</p>
                  <?php } ?>
                  </div>

                   <div class="row">
                     <div class="col-md-12">
                        <div class="view_more">
                           <a href="https://alphawizz.org/sweets_ecommerce/Products/index" class="btn btn-default">View More</a>
                        </div>
                     </div>
                  </div>
        </div>
    </section>
    <!-- Sandesh end -->

    <!-- Juicy Sweets here -->
    <section class="new_arrival Juicy_sec Juicy_Sweets">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="arrival_tittle">
                        <h2>Juicy Sweets</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_arrival_iner filter-container autoplay">
                        <div>
                            <!-- <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                           <!--  <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div>
                            <!-- <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                       <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div> 
            </div>
             <div class="row prdct_box">
                <?php $count=0; ?>
                     <?php if(!empty($products)){ foreach($products as $row){ 
                            $count++;
                        if($count<5){
                        ?>
                     <div class="col-md-3">
                        <div class="product_box">
                           <div class="product_img">
                              <a href="<?= base_url() ?>Products/Single_Product/<?= $row['product_id'] ?>">
                              <img class="bottom" src="<?php echo site_url('assets/images/Jalbhara-Sandesh.jpg')?>" />
                              <img class="top" src="<?php echo ('https://alphawizz.org/sweetadmin/uploads/products/'.$row['product_image'])?>" />
                              </a>
                           </div>
                           <div class="product_content">
                              <h5><?php echo $row['product_name']?></h5>
                              <p class="product_price"><?php echo $row['price']?></p>
                              <span class="product_cart_icon ">
                              <a href="<?php echo base_url('products/addToCart/'.$row['product_id']); ?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                              </span>
                           </div>
                        </div>
                     </div>
                     <?php } } }else{ ?>
                     <p>Product(s) not found...</p>
                  <?php } ?>
                  </div>

                   <div class="row">
                     <div class="col-md-12">
                        <div class="view_more">
                           <a href="https://alphawizz.org/sweets_ecommerce/Products/index" class="btn btn-default">View More</a>
                        </div>
                     </div>
                  </div>
        </div>
    </section>
    <!-- Juicy Sweets end -->

    <!-- Juicy Sweets here -->
    <section class="new_arrival Juicy_sec Juicy_dryfruit">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="arrival_tittle">
                        <h2>Dry Fruit Sweets</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_arrival_iner filter-container autoplay">
                        <div>
                          <!--   <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="single_arrivel_item weidth_2">
                                <div class="sldr_img">
                                    <img src="assets/images/1-04.png" alt="#">
                                </div>
                                <div class="defaul_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                </div>
                                <div class="hover_text">
                                    <a href="#"><h3>Lorem Canvas Low-Top Sneaker</h3></a>
                                    
                                    <h5>Rs.150</h5>
                                    <div class="social_icon">
                                        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></i></a>
                                        <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div> 
            </div>
             <div class="row prdct_box">
                <?php $count=0; ?>
                     <?php if(!empty($products)){ foreach($products as $row){ 
                            $count++;
                        if($count<5){
                        ?>
                     <div class="col-md-3">
                        <div class="product_box">
                           <div class="product_img">
                              <a href="<?= base_url() ?>Products/Single_Product/<?= $row['product_id'] ?>">
                              <img class="bottom" src="<?php echo site_url('assets/images/Jalbhara-Sandesh.jpg')?>" />
                              <img class="top" src="<?php echo ('https://alphawizz.org/sweetadmin/uploads/products/'.$row['product_image'])?>" />
                              </a>
                           </div>
                           <div class="product_content">
                              <h5><?php echo $row['product_name']?></h5>
                              <p class="product_price"><?php echo $row['price']?></p>
                              <span class="product_cart_icon ">
                              <a href="<?php echo base_url('products/addToCart/'.$row['product_id']); ?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                              </span>
                           </div>
                        </div>
                     </div>
                     <?php } } }else{ ?>
                     <p>Product(s) not found...</p>
                  <?php } ?>
                  </div>

                   <div class="row">
                     <div class="col-md-12">
                        <div class="view_more">
                           <a href="https://alphawizz.org/sweets_ecommerce/Products/index" class="btn btn-default">View More</a>
                        </div>
                     </div>
                  </div>
        </div> 
    </section>
    <!-- Juicy Sweets end -->

    <!-- free shipping here -->
   <!--  <section class="shipping_details">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-sm-5 left_sec">
                    <div class="">
                        <h4>Lorem Ipsum is simply</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text eve Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text eve Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text eve Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text eve</p>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-7 right_sec">
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_shopping_details">
                            <img src="assets/images/icon/icon_1.png" alt="">
                            <h4>Lorem Ipsum is simply</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_shopping_details">
                            <img src="assets/images/icon/icon_1.png" alt="">
                            <h4>Lorem Ipsum is simply</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_shopping_details">
                            <img src="assets/images/icon/icon_1.png" alt="">
                            <h4>Lorem Ipsum is simply</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_shopping_details">
                            <img src="assets/images/icon/icon_1.png" alt="">
                            <h4>Lorem Ipsum is simply</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_shopping_details">
                            <img src="assets/images/icon/icon_1.png" alt="">
                            <h4>Lorem Ipsum is simply</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single_shopping_details">
                            <img src="assets/images/icon/icon_1.png" alt="">
                            <h4>Lorem Ipsum is simply</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                        </div>
                    </div>
                
                </div>
                
            </div>
        </div>
    </section> -->
    <!-- free shipping end -->

    <!-- book_order_sec here -->
   <!--  <section class="new_arrival book_order_sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="arrival_tittle">
                        <h2>Book Your Order</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </div>
              --><!--    </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 book_form">
                    <form action="">
                      <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="1 Person">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="1-11-2019">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="07:30 PM">
                      </div>
                      <button type="submit" class="btn btn-default">Book Order</button>
                    </form>
                </div> 
            </div>
        </div>
    </section> -->
    <!-- book_order_sec end -->
</html>