<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?><!DOCTYPE html>
<html lang="en">
   <div class="common_banner">
      <div class="inner_bg">
         <h3>Product</h3>
         <hr>
      </div>
   </div>
   <!-- banner part start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="breadcrumb_iner">
                  <div class="breadcrumb_iner_item">
                     <p>Home / Product</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->
   <!--Category Product Area -->
   <section class="cat_product_area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-3">
               <div id="mySidenav" class="sidenav">
                 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <div class="left_sidebar_area">
                      <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                         <div class="l_w_title">
                            <h3>Categories</h3>
                         </div>
                         <div class="widgets_inner">
                            <ul class="list" style="overflow:hidden; overflow-y:scroll; height:223px;">
                               <?php  for($i=0;$i<count($category);$i++) { ?>
                               <li>
                                  <a href="<?=  base_url() ?>Products/index/<?= $category[$i]['id'] ?>"><?php echo $category[$i]['title'] ?></a>
                               </li>
                               <?php  } ?>
                               <!-- <li class="sub-menu">
                                  <a href="#Electronics" class=" d-flex justify-content-between">
                                     Dry Fruit Sweets
                                     <i class="fa fa-plus" aria-hidden="true"></i>
                                  </a>
                                  <ul>
                                     <li>
                                        <a href="#Electronics">Dry Fruit Sweets</a>
                                     </li>
                                     <li>
                                        <a href="#Electronics">Dry Fruit Sweets</a>
                                     </li>
                                     <li>
                                        <a href="#Electronics">Dry Fruit Sweets</a>
                                     </li>
                                     <li>
                                        <a href="#Electronics">Dry Fruit Sweets</a>
                                     </li>
                                  </ul>
                                  </li> -->
                               <!-- <li>
                                  <a href="#">Cashew Barfi</a>
                                  </li>
                                  <li>
                                  <a href="#">Shrikhand</a>
                                  </li>
                                  <li>
                                  <a href="#">Rasagulla</a>
                                  </li> -->
                            </ul>
                         </div>
                      </aside>
                      <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                         <div class="l_w_title">
                            <h3>Location</h3>
                         </div>
                         <div class="widgets_inner">
                            <div class="suggestion_input">
                               <form action="<?= base_url() ?>Products/index" method="get">
                                  <i class="fas fa-search"></i>
                                  <input type="number" name="pincode" id="searchTextField" placeholder="Pin Code" class="form-control">
                               </form>
                            </div>
                            <ul class="list">
                               <li>
                                  <a href="#">New Delhi</a>
                               </li>
                               <li class="sub-menu">
                                  <a href="#Electronics" class=" d-flex justify-content-between">
                                  kolkatata
                                  <i class="fa fa-plus" aria-hidden="true"></i>
                                  </a>
                                  <ul>
                                     <li>
                                        <a href="#Electronics">kolkatata 1</a>
                                     </li>
                                     <li>
                                        <a href="#Electronics">kolkatata 2</a>
                                     </li>
                                     </li>
                                  </ul>
                               </li>
                            </ul>
                         </div>
                      </aside>
                      <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                         <div class="l_w_title">
                            <h3>Price Filter</h3>
                         </div>
                         <div class="widgets_inner">
                            <div class="range_item">
                               <!-- <div id="slider-range"></div> -->
                               <input type="text" class="js-range-slider" value=""  id="filter"/>
                               <div class="d-flex align-items-center">
                                  <div class="price_text">
                                     <p>Price :</p>
                                  </div>
                                  <div class="price_value d-flex justify-content-center">
                                     <input type="text" class="js-input-from amount1" id="amount " readonly  />
                                     <span>to</span>
                                     <input type="text" class="js-input-to amount2" id="amount " readonly />
                                  </div>
                               </div>
                            </div>
                         </div>
                      </aside>
                      <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                         <div class="l_w_title">
                            <h3>Rating</h3>
                         </div>
                         <div class="widgets_inner">
                            <div class="rating_box" style="font-size: 34px;">
                               <!--  <img src="<?php echo site_url('assets/images/rating-1.png')?>"> -->
                               <span value='1'  >☆</span>
                               <span value='2'   >☆</span>
                               <span value='3'   >☆</span>
                               <span value='4' >☆</span>
                               <span value='5' >☆</span>
                            </div>
                         </div>
                      </aside>
                  </div>
               </div>
               <span class="filter_btn" style="cursor:pointer" onclick="openNav()">Filter</span>
               <!-- mobile toggle -->
               <div class="left_sidebar_area mobile_hide">
                  <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                     <div class="l_w_title">
                        <h3>Categories</h3>
                     </div>
                     <div class="widgets_inner">
                        <ul class="list" style="overflow:hidden; overflow-y:scroll; height:223px;">
                           <?php  for($i=0;$i<count($category);$i++) { ?>
                           <li>
                              <a href="<?=  base_url() ?>Products/index/<?= $category[$i]['id'] ?>"><?php echo $category[$i]['title'] ?></a>
                           </li>
                           <?php  } ?>
                           <!-- <li class="sub-menu">
                              <a href="#Electronics" class=" d-flex justify-content-between">
                                 Dry Fruit Sweets
                                 <i class="fa fa-plus" aria-hidden="true"></i>
                              </a>
                              <ul>
                                 <li>
                                    <a href="#Electronics">Dry Fruit Sweets</a>
                                 </li>
                                 <li>
                                    <a href="#Electronics">Dry Fruit Sweets</a>
                                 </li>
                                 <li>
                                    <a href="#Electronics">Dry Fruit Sweets</a>
                                 </li>
                                 <li>
                                    <a href="#Electronics">Dry Fruit Sweets</a>
                                 </li>
                              </ul>
                              </li> -->
                           <!-- <li>
                              <a href="#">Cashew Barfi</a>
                              </li>
                              <li>
                              <a href="#">Shrikhand</a>
                              </li>
                              <li>
                              <a href="#">Rasagulla</a>
                              </li> -->
                        </ul>
                     </div>
                  </aside>
                  <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                     <div class="l_w_title">
                        <h3>Location</h3>
                     </div>
                     <div class="widgets_inner">
                        <div class="suggestion_input">
                           <form action="<?= base_url() ?>Products/index" method="get">
                              <i class="fas fa-search"></i>
                              <input type="number" name="pincode" id="searchTextField" placeholder="Pin Code" class="form-control">
                           </form>
                        </div>
                        <ul class="list">
                           <li>
                              <a href="#">New Delhi</a>
                           </li>
                           <li class="sub-menu">
                              <a href="#Electronics" class=" d-flex justify-content-between">
                              kolkatata
                              <i class="fa fa-plus" aria-hidden="true"></i>
                              </a>
                              <ul>
                                 <li>
                                    <a href="#Electronics">kolkatata 1</a>
                                 </li>
                                 <li>
                                    <a href="#Electronics">kolkatata 2</a>
                                 </li>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </aside>
                  <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                     <div class="l_w_title">
                        <h3>Price Filter</h3>
                     </div>
                     <div class="widgets_inner">
                        <div class="range_item">
                           <!-- <div id="slider-range"></div> -->
                           <input type="text" class="js-range-slider" value=""  id="filter"/>
                           <div class="d-flex align-items-center">
                              <div class="price_text">
                                 <p>Price :</p>
                              </div>
                              <div class="price_value d-flex justify-content-center">
                                 <input type="text" class="js-input-from amount1" id="amount " readonly  />
                                 <span>to</span>
                                 <input type="text" class="js-input-to amount2" id="amount " readonly />
                              </div>
                           </div>
                        </div>
                     </div>
                  </aside>
                  <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                     <div class="l_w_title">
                        <h3>Rating</h3>
                     </div>
                     <div class="widgets_inner">
                        <div class="rating_box" style="font-size: 34px;">
                           <!--  <img src="<?php echo site_url('assets/images/rating-1.png')?>"> -->
                           <span value='1'  >☆</span>
                           <span value='2'   >☆</span>
                           <span value='3'   >☆</span>
                           <span value='4' >☆</span>
                           <span value='5' >☆</span>
                        </div>
                     </div>
                  </aside>
               </div>
            </div>
            <div class="col-lg-9">
               <!-- Dropdown Start -->
               <div class="row ">
                  <div class="col-lg-12">
                     <div class="product_top_bar d-flex justify-content-between align-items-center">
                        <div class="single_product_menu product_bar_item">
                           <h2>Sweets (12)</h2>
                        </div>
                        <div class="product_top_bar_iner product_bar_item d-flex">
                           <div class="product_bar_single">
                              <select class="wide drop">
                                 <option data-display="Default sorting" >Default sorting</option>
                                 <option value="1">Popular</option>
                                 <option value="2">Recent </option>
                                 <option value="3">Low to High</option>
                                 <option value="4">High to Low</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Dropdown end -->
               <!-- product start  -->
               <div class="row prdct_box">
                  <?php if(!empty($products))
                     { foreach($products as $row)
                        { ?>
                  <div class="col-md-4">
                     <div class="product_box">
                        <div class="product_img">
                           <a href="<?= base_url()?>Products/Single_Product/<?= $row['product_id'] ?>">
                           <img class="bottom" src="<?php echo site_url('assets/images/Jalbhara-Sandesh.jpg')?>" />
                           <img class="top" src="<?php echo ('https://alphawizz.org/sweetadmin/uploads/products/'.$row['product_image'])?>" />
                           </a>
                        </div>
                        <div class="product_content">
                           <h5><?php echo $row['product_name']?></h5>
                           <!-- <?php if(true)
                              { ?> -->
                           <!--  
                              <div class="rating" style="margin-left: 138px; font-size: 22px;margin-top: -34px;">
                              <?php $this->db->select('one_rating,two_rating,three_rating,four_rating,five_rating');
                                 $this->db->from('product_rating');
                                 $this->db->where(array('user_id'=>$this->session->userdata('user_id'),'product_id'=>$row['product_id']));
                                 $query=$this->db->get()->row();
                                 // if(!empty($query)){
                                   if(!empty($query->one_rating)){ ?>
                              
                                  <span value='1' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>'>☆</span>
                              
                              <?php   } 
                                 if(!empty($query->two_rating)){   ?>
                              <span value='1' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>'>☆</span>
                              
                              
                              <?php } 
                                 if(!empty($query->three_rating)){   ?>
                              <span value='1' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' style="color:red;" >☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>'>☆</span>
                              
                              
                              <?php } 
                                 if(!empty($query->four_rating)){   ?>
                              <span value='1' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>'  style="color:red;" >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>'>☆</span>
                              
                              
                              <?php }
                                 if(!empty($query->five_rating)){   ?>
                              <span value='1' id='<?= $row['product_id'] ?> ' style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>' style="color:red;" >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>' style="color:red;" >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              
                              
                              
                              
                              <?php }
                                 if(empty($this->session->userdata('user_id'))){
                                 
                                    $this->db->select("*");
                                    $this->db->from("product_rating");
                                    $this->db->where(array("product_id"=>$row['product_id']));
                                    $query=$this->db->get()->result_array();
                                    if(!empty($query))
                                    {
                                      $this->count=0;
                                      $this->total_review=0;
                                 
                                 
                                      for($i=0;$i<count($query);$i++){
                                      $this->total_review=$query[$i]['one_rating']+$query[$i]['two_rating']+$query[$i]['three_rating']+$query[$i]['four_rating']+$query[$i]['five_rating'];
                                 
                                      $this->count++;
                                 
                                    }
                                   $average_rating=round($this->total_review/$this->count);
                                   if($average_rating==1){ ?>
                              
                                 <span value='1' id='<?= $row['product_id'] ?> '  style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>'  >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>'  >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>' >☆</span>
                              
                               <?php }
                                 if($average_rating==2){ ?>
                              
                                 <span value='1' id='<?= $row['product_id'] ?> '  style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>'  >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>'  >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>' >☆</span>
                              
                               <?php }
                                 if($average_rating==3){ ?>
                              
                                 <span value='1' id='<?= $row['product_id'] ?> '  style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>'  style="color:red;" >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>'  >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>' >☆</span>
                              
                               <?php }
                                 if($average_rating==4){ ?>
                              
                                 <span value='1' id='<?= $row['product_id'] ?> '  style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>'  style="color:red;" >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>'   style="color:red;">☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>' >☆</span>
                              
                               <?php }
                                 if($average_rating==5){ ?>
                              
                                 <span value='1' id='<?= $row['product_id'] ?> '  style="color:red;">☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' style="color:red;">☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>'  style="color:red;" >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>'   style="color:red;">☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>' style="color:red;" >☆</span>
                              
                               <?php }
                                 if($average_rating==0){ ?>
                              
                                 <span value='1' id='<?= $row['product_id'] ?> '  >☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>'   >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>'   >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>'  >☆</span>
                              
                               <?php }
                                 }
                                 else { ?>
                              
                                <span value='1' id='<?= $row['product_id'] ?> '  >☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>'   >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>'   >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>'  >☆</span>
                              <?php 
                                 }
                                 }
                                 
                                 if(empty($query->one_rating) && empty($query->two_rating) && empty($query->three_rating) &&empty($query->four_rating) && empty($query->five_rating) && !empty($this->session->userdata('user_id'))) { ?>
                                  <span value='1' id='<?= $row['product_id'] ?> ' >☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>'  >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>'  >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>' >☆</span>
                              
                              <?php    } 
                                 else {   ?>
                              
                              
                              
                              
                              <?php } ?>
                              
                              
                              
                              
                              
                              </div>
                              
                              
                              <?php } else { ?>
                              
                              <span value='1' id='<?= $row['product_id'] ?>'>☆</span>
                              <span value='2' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='3' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='4' id='<?= $row['product_id'] ?>' >☆</span>
                              <span value='5'id='<?= $row['product_id'] ?>'>☆</span> -->
                           <!--  <div style="margin-left: 138px; font-size: 22px;margin-top: -34px;">
                              <a href="<?= base_url() ?>login">Login For Rating</a>
                              </div> -->
                           <?php } ?>
                           -->
                           <p class="product_price"><?php echo $row['price']?></p>
                           <span class="product_cart_icon ">
                           <a href="<?php echo base_url('products/addToCart/'.$row['product_id']); ?>"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                           </span>
                        </div>
                     </div>
                  </div>
                  <?php } }else{ ?>
                  <p>Product(s) not found...</p>
                  <?php } ?>
               </div>
               <!-- product End  -->
               <!-- View more button start -->
               <div class="row">
                  <div class="col-md-12">
                     <div class="view_more">
                        <a href="<?= base_url() ?>products/viewMore" class="btn btn-default">View More</a>
                     </div>
                  </div>
               </div>
               <!-- View more button end -->
            </div>
         </div>
      </div>
   </section>
   <!-- book_order_sec end -->
</html>
<script
   src="https://code.jquery.com/jquery-2.2.4.min.js"
   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
   crossorigin="anonymous"></script>
<script>
   $(document).ready(function(){
   
    
      $('span').click(function(){
    
      $(this).css('color','red');
      $(this).prevAll().css( "color", "red" );
      $(this).nextAll().css('color','black');
      var value=$(this).attr("value");
     if(value==1){
      window.location.href="<?= base_url() ?>Products/rating_filter/"+value;
     }
   
      if(value==2){
      window.location.href="<?= base_url() ?>Products/rating_filter/"+value;
     }
   
      if(value==3){
      window.location.href="<?= base_url() ?>Products/rating_filter/"+value;
     }
   
      if(value==4){
      window.location.href="<?= base_url() ?>Products/rating_filter/"+value;
     }
   
      if(value==5){
      window.location.href="<?= base_url() ?>Products/rating_filter/"+value;
     }
   
     
   // console.log(value+' '+id)
   // var txt = $("input").val();
   // $.post("<?= base_url() ?>Products/rating", {rating_times:value,product_id:id}, function(result){
   //   console.log('result from backend'+result);
   });
   
      
   
   
   
     $('#filter').change(function(){
       var range=$(this).val();
       ranges=range.split(';');
       console.log(ranges);
     //  var start=$('.amount1').val();
     //  var end = $('.amount2').val();
     // console.log(start+" "+end);
      setTimeout(
            function() {
               if(window.location.href.split('/')[6]){
                     //alert('first condition');
                  var index= window.location.href.split('/')[6];
                  window.location.href='<?= base_url() ?>Products/filter?i='+index+'&s='+ranges[0]+'&e='+ranges[1]; 
               }
               
   
               else {
                  //alert('else condition');
                 window.location.href='<?= base_url() ?>Products/filter?s='+ranges[0]+'&e='+ranges[1];
               }
                
            },
            1000);
      
     
     })
   
   
     $('.drop').change(function(){
      if($(this).val()==3){
        var value=$(this).val();
        window.location.href='<?= base_url() ?>Products/sorting/'+value;
      }
   
          else if($(this).val()==1){
        var value=$(this).val();
        window.location.href='<?= base_url() ?>Products/sorting/'+value;
      }
   
      else if($(this).val()==4){
        var value=$(this).val();
        window.location.href='<?= base_url() ?>Products/sorting/'+value;
      }
     })
   
   
       })
   
</script>
<!--  <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>
   <script type="text/javascript">
          function initialize() {
                  var input = document.getElementById('searchTextField');
                  var autocomplete = new google.maps.places.Autocomplete(input);
          }
          google.maps.event.addDomListener(window, 'load', initialize);
   </script> -->
<!--  <script>
   function autocomplete(inp, arr) {
     /*the autocomplete function takes two arguments,
     the text field element and an array of possible autocompleted values:*/
     var currentFocus;
     /*execute a function when someone writes in the text field:*/
     inp.addEventListener("input", function(e) {
       
         var a, b, i, val = this.value;
         /*close any already open lists of autocompleted values*/
         closeAllLists();
         if (!val) { return false;}
         currentFocus = -1;
         /*create a DIV element that will contain the items (values):*/
         a = document.createElement("DIV");
         a.setAttribute("id", this.id + "autocomplete-list");
         a.setAttribute("class", "autocomplete-items");
         /*append the DIV element as a child of the autocomplete container:*/
         this.parentNode.appendChild(a);
         /*for each item in the array...*/
         for (i = 0; i < arr.length; i++) {
           /*check if the item starts with the same letters as the text field value:*/
           if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
             /*create a DIV element for each matching element:*/
             b = document.createElement("DIV");
             /*make the matching letters bold:*/
             b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
             b.innerHTML += arr[i].substr(val.length);
             /*insert a input field that will hold the current array item's value:*/
             b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
             /*execute a function when someone clicks on the item value (DIV element):*/
             b.addEventListener("click", function(e) {
                 /*insert the value for the autocomplete text field:*/
                 inp.value = this.getElementsByTagName("input")[0].value;
                 /*close the list of autocompleted values,
                 (or any other open lists of autocompleted values:*/
                 closeAllLists();
             });
             a.appendChild(b);
           }
         }
     });
     /*execute a function presses a key on the keyboard:*/
     inp.addEventListener("keydown", function(e) {
         var x = document.getElementById(this.id + "autocomplete-list");
         if (x) x = x.getElementsByTagName("div");
         if (e.keyCode == 40) {
           /*If the arrow DOWN key is pressed,
           increase the currentFocus variable:*/
           currentFocus++;
           /*and and make the current item more visible:*/
           addActive(x);
         } else if (e.keyCode == 38) { //up
           /*If the arrow UP key is pressed,
           decrease the currentFocus variable:*/
           currentFocus--;
           /*and and make the current item more visible:*/
           addActive(x);
         } else if (e.keyCode == 13) {
           /*If the ENTER key is pressed, prevent the form from being submitted,*/
           var pincode = document.getElementById('myInput').value;
           window.location.href="https://alphawizz.org/sweets_ecommerce/Products/index?pincode="+ pincode;
           e.preventDefault();
           if (currentFocus > -1) {
             /*and simulate a click on the "active" item:*/
             if (x) x[currentFocus].click();
           }
         }
     });
     function addActive(x) {
       /*a function to classify an item as "active":*/
       if (!x) return false;
       /*start by removing the "active" class on all items:*/
       removeActive(x);
       if (currentFocus >= x.length) currentFocus = 0;
       if (currentFocus < 0) currentFocus = (x.length - 1);
       /*add class "autocomplete-active":*/
       x[currentFocus].classList.add("autocomplete-active");
     }
     function removeActive(x) {
       /*a function to remove the "active" class from all autocomplete items:*/
       for (var i = 0; i < x.length; i++) {
         x[i].classList.remove("autocomplete-active");
       }
     }
     function closeAllLists(elmnt) {
       /*close all autocomplete lists in the document,
       except the one passed as an argument:*/
       var x = document.getElementsByClassName("autocomplete-items");
       for (var i = 0; i < x.length; i++) {
         if (elmnt != x[i] && elmnt != inp) {
           x[i].parentNode.removeChild(x[i]);
         }
       }
     }
     /*execute a function when someone clicks in the document:*/
     document.addEventListener("click", function (e) {
         closeAllLists(e.target);
     });
   }
   
   /*An array containing all the country names in the world:*/
   var countries = ["453551","343434","122323","123456","676767","123456","454545","12345","123456","433550","787878","898989"];
   
   /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
   autocomplete(document.getElementById("myInput"), countries);
   </script>
   
   
     
   
    -->
<script>
$(".filter_btn").click(function(){
  $(".sidenav").addClass("toggle_close");
});
$(".closebtn").click(function(){
  $(".sidenav").removeClass("toggle_close");
});


   function openNav() {
     document.getElementById("mySidenav").style.width = "100%";
   }
   
   function closeNav() {
     document.getElementById("mySidenav").style.width = "0";
   }
   
</script>