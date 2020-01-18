<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
   .well-sm {
   padding: 9px;
   border-radius: 3px;
   width: 100%;
   margin-left: 25rem;
   margin-top:123px;
   }
</style>
<!------ Include the above in your HEAD tag ---------->
<div class="common_banner">
   <div class="inner_bg">
      <h3>Product</h3>
      <hr>
   </div>
</div>
<div class="user_dashboard_bg">
    <div class="container">
        <div class="well well-sm profile_page user_dashboard_account">
          <div class="row">
             <div class="col-md-12">
                <div class="my_account">
                   <h2>My Account</h2>
                </div>
             </div>
          </div>
       </div>
        <div class="row">
            <div class="col-md-3">
                <div class="panel with-nav-tabs panel-default dashboard_tab">
                  <div class="panel-heading">
                     <ul class="nav nav-tabs">
                        <li class="active">
                           <a href="#tabdash1" data-toggle="tab" class="active">
                           Dashboard</a>
                        </li>
                        <li><a href="#tabdash2" data-toggle="tab">Order</a></li>
                        <li><a href="#tabdash3" data-toggle="tab">Address</a></li>
                        <li><a href="#tabdash4" data-toggle="tab">Account Detail</a></li>
                        <li><a href="<?= base_url() ?>Login/logout">Log Out</a>  </li>
                     </ul>
                  </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel with-nav-tabs panel-default dashboard_tab">
                  <div class="panel-body">
                     <div class="tab-content">
                        <div class="tab-pane fade in  active show" id="tabdash1">
                           <div class="col-md-2" style="padding-left: 0px;">
                              <!-- <div class="left_side_img_dashboard">
                                 <img src="<?= base_url() ?>user_uploads/<?= $user[0]['user_image'] ?>" alt="" class="img-rounded img-responsive" />
                              </div> -->
                           </div>
                           <div class="col-md-9">
                              <div class="profile_detail">
                                 <h4>
                                    <?= $user[0]['user_fullname'] ?>
                                 </h4>
                                 <ul>
                                    <li><i class="glyphicon glyphicon-map-marker"></i> <?= $user[0]['user_city'] ?></li>
                                    <li><i class="glyphicon glyphicon-envelope"></i><?= $user[0]['user_email']  ?></li>
                                    <li><i class="glyphicon glyphicon-phone"></i><?= $user[0]['user_phone'] ?></li>
                                    <li><i class="glyphicon glyphicon-gift"></i><?= $user[0]['user_bdate'] ?></li>
                                 </ul>
                              </div>
                              <!-- Split button -->
                              <div  class="log_out_btn">
                                 <a href="<?= base_url() ?>Login/logout">Log Out</a>                           
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="tabdash2">
                           <div class="order_list">
                              <div class="span5">
                                 <table class="table table-striped table-condensed">
                                    <tbody>
                                       <?php if(!empty($product_delivered)){  ?>
                                       <?php foreach($product_delivered as $data ) { ?>
                                       <?php  $this->db->select('*');
                                          $this->db->from('products');
                                          $this->db->where('product_id',$data['product_id']);
                                          $this->product_data=$this->db->get()->result_array();
                                          ?>
                                       <tr>
                                          <td>
                                             <img src="https://alphawizz.org/sweetadmin/uploads/products/<?= $this->product_data[0]['product_image'] ?>">
                                          </td>
                                          <td><?= $this->product_data[0]['product_name']  ?></td>
                                          <td><?= $this->product_data[0]['price'] ?></td>
                                          <td>Delivered on <?= $data['on_date']  ?></td>
                                          <td><a href="<?= base_url() ?>Login/track" class="btn btn-default"><i class="fas fa-map-marker-alt"></i> Track</a></td>
                                       </tr>
                                       <?php  }  } else  {
                                          echo 'not ordered yet';
                                          } ?>
                                       <!-- <tr>
                                          <td>
                                              <img src="https://alphawizz.org/sweetadmin/uploads/products/2-in-1-jalbhara-sandesh.jpg">
                                          </td>
                                          <td>2-in-1 Jalbhara Sandesh</td>
                                          <td>Rs.300</td>
                                          <td>Cancelled</td> 
                                          <td><a href="<?= base_url() ?>Login/track" class="btn btn-default"><i class="fas fa-map-marker-alt"></i> Track</a></td>                                      
                                          </tr>  -->
                                       <!--  <tr>
                                          <td>
                                              <img src="https://alphawizz.org/sweetadmin/uploads/products/2-in-1-jalbhara-sandesh.jpg">
                                          </td>
                                          <td>2-in-1 Jalbhara Sandesh</td>
                                          <td>Rs.300</td>
                                          <td>Shipping</td> 
                                          <td><a href="<?= base_url() ?>Login/track" class="btn btn-default"><i class="fas fa-map-marker-alt"></i> Track</a></td>                                      
                                          </tr>  -->
                                       <!-- <tr>
                                          <td>
                                              <img src="https://alphawizz.org/sweetadmin/uploads/products/2-in-1-jalbhara-sandesh.jpg">
                                          </td>
                                          <td>2-in-1 Jalbhara Sandesh</td>
                                          <td>Rs.300</td>
                                          <td>Delivered on Sep 17, 2018</td> 
                                          <td><a href="#" class="btn btn-default"><i class="fas fa-map-marker-alt"></i> Track</a></td>                                      
                                          </tr>          -->                      
                                    </tbody>
                                 </table>
                              </div>
                              <div class="order_load_more">
                                 <a href="#" class="btn btn-default">Load More</a>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="tabdash3">
                           <form action="<?= base_url() ?>login/addresses" method="post">
                              <div class="custom1">
                                 <?php
                                    if(!empty($this->session->userdata('user_id'))) {
                                    $this->db->select('*');
                                     $this->db->from('user_address');
                                     $this->db->where('User_id',$this->session->userdata('user_id'));
                                     $this->address = $this->db->get()->result_array();
                                    ?>
                                 <h4>Address</h4>
                                 <?php if(!empty($this->address)) { 
                                    for($i=0;$i<count($this->address);$i++) {
                                       
                                    ?>
                                 <address><?= $this->address[$i]['Address1'].' '. $this->address[$i]['Address2'].' '.
                                    $this->address[$i]['City'].' '.$this->address[$i]['State'].' '.$this->address[$i]['Pincode']
                                    ?></address>
                                 <a class="btn btn-primary "  id="<?= $this->address[$i]['id']  ?>" href="<?=  base_url() ?>login/edit/<?= $this->address[$i]['id']  ?>" >Edit</a>
                                 <a class="btn btn-info" name="remove" href="<?= base_url() ?>login/delete/<?= $this->address[$i]['id'] ?>">Remove</a>
                                 <?php 
                                    }
                                    }
                                    }
                                    ?>
                              </div>
                           </form>
                           <?php  if(!empty($status) && !empty($edit)) {  ?>
                           <form action="<?= base_url() ?>login/update_address" method="post">
                              <div class="custom1">
                                 <div class="">
                                    <div class="">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="user_dashboard">
                                                <label>Address 1 * </label>
                                                <input type="text" value="<?= $edit[0]['Address1']  ?>" name="address1">    
                                             </div>
                                          </div>
                                          <br>
                                          <div class="col-sm-6 ">
                                             <div class="user_dashboard">
                                                <label>Address 2 * </label>
                                                <input type="text" value="<?= $edit[0]['Address2']  ?>" name="address2">  
                                             </div>
                                          </div>
                                       </div>
                                       <input type="hidden" name="id"  value="<?= $edit[0]['id'] ?>">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="user_dashboard">
                                                <label>City * </label><br>
                                                <input type="text" value="<?=  $edit[0]['City'] ?>" name="city">   
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="user_dashboard">
                                                <label>State * </label><br>
                                                <input type="text" value="<?= $edit[0]['State'] ?>" name="state">       
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="user_dashboard">
                                                <label>Pincode * </label><br>
                                                <input type="text"  value="<?= $edit[0]['Pincode'] ?>" name="pincode">   
                                             </div>
                                          </div>
                                       </div>
                                       <br>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="user_dashboard">
                                                <Button type="submit" name="save" class="btn btn-primary">Update address</Button> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--  <div class="tab-pane fade" id="tabdash4">
                                    </div> -->
                              </div>
                           </form>
                           <?php } else { ?>
                           <form action="<?= base_url() ?>login/address" method="post">
                              <div class="custom1">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="user_dashboard">
                                                <label>Address 1 * </label>
                                                <input type="text" name="address1">    
                                             </div>
                                          </div>
                                          <br>
                                          <div class="col-sm-6 ">
                                             <div class="user_dashboard">
                                                <label>Address 2 * </label>
                                                <input type="text" name="address2">  
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-6">
                                             <div class="user_dashboard">
                                                <label>City * </label><br>
                                                <input type="text" name="city">   
                                             </div>
                                          </div>
                                          <div class="col-sm-6">
                                             <div class="user_dashboard">
                                                <label>State * </label><br>
                                                <input type="text" name="state">       
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                       </div>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="user_dashboard">
                                                <label>Pincode * </label><br>
                                                <input type="text" name="pincode">   
                                             </div>
                                          </div>
                                       </div>
                                       <br>
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="user_dashboard">
                                                <Button type="submit" name="save" class="btn btn-primary">Save address</Button> 
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                           <?php  } ?>
                        </div>
                        <div class="tab-pane fade" id="tabdash4">
                           <form action="<?= base_url() ?>login/user_address" method="post">
                              <div class="custom1">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <?php
                                             if(!empty($this->session->userdata('user_id'))) {
                                               // echo $this->session->userdata('user_id');
                                             $this->db->select('*');
                                             $this->db->from('users');
                                             $this->db->where('user_id',$this->session->userdata('user_id'));
                                             $this->address1 = $this->db->get()->result_array();
                                             //print_r($this->address1);
                                             } ?>
                                          <label>Full Name</label><br>
                                          <input type="text" value="<?= $this->address1[0]['user_fullname'] ?>"  name="full_name" placeholder="First name"  class="form-control">
                                       </div>
                                    </div>
                                    <!-- 
                                       <div class="col-sm-6">
                                          <div class="form-group">
                                          <label>Last Name</label><br>
                                          <input type="text"  name="last_name" placeholder="Last name" class="form-control">
                                       </div>
                                       </div> -->
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label>Email</label><br>
                                          <input type="email" value="<?= $this->address1[0]['user_email'] ?>"  name="email" placeholder="Email" class="form-control">
                                       </div>
                                    </div>
                                    <!--  <div class="col-sm-6">
                                       <div class="form-group">
                                        <label>First Name</label><br>
                                        <input type="text"  name="first_name" placeholder="First name" class="form-control">
                                       </div>
                                       
                                       
                                       </div> -->
                                 </div>
                                 <!--  <fieldset>
                                    <legend>Personalia:</legend>
                                    <div class="row">
                                      <div class="col-sm-12">
                                      <div class="form-group">
                                      <label>Name: </label>
                                    <input type="text" class="form-control"><br>
                                    </div>
                                    </div></div>
                                    <div class="row">
                                      <div class="col-sm-12">
                                    <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control"><br>
                                    </div>
                                    </div>
                                    </div>
                                    
                                    
                                    </fieldset> -->
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="save_change_btn_detail">
                                          <button type="submit" name="save" class="btn btn-primary">Save Chages</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>
<script
   src="https://code.jquery.com/jquery-3.4.1.js"
   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
   crossorigin="anonymous"></script>
<!-- <script>
   $(document).ready(function(){
       $('.edits').click(function(){
           alert('hii');
           var id=$('.edits').attr('id');
   
           $.get("<?= base_url() ?>login/edit/"+id, function(data,status){
            
   });
       })
   })
   </script> -->