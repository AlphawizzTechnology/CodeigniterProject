<style >
   label {
   margin-top:13px;
   }
   button:not(:disabled) {
   cursor: pointer;
   width: 227px;
   margin: 23px 0px 0px 465px;
   }
</style>
<div class="common_banner">
   <div class="inner_bg">
      <h3>Detail Page</h3>
      <hr>
   </div>
</div>
<br>
<br>
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div class="billing_head">
            <h1>Billing Details</h1>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="billing_det_form">
            <form action="<?= base_url() ?>Paytm/Detail/Payment" method="post">
               <div class="row">
                  <div class="col-sm-6">
                     <!--   first row   -->
                     <div class="row">
                        <div class="col-sm-6">
                           <label>First Name *</label>
                           <input type="text" name="first_name" class="form-control">
                           <?php if(form_error('first_name')){ ?>
                           <div class="alert alert-danger"><?= form_error('first_name') ?></div>
                           <?php } ?>
                        </div>
                        <div class="col-sm-6">
                           <label>Last Name *</label>
                           <input type="text" name="last_name" class="form-control">
                           <?php if(form_error('last_name')){ ?>
                           <div class="alert alert-danger"><?= form_error('last_name') ?></div>
                           <?php } ?>
                        </div>
                     </div>
                     <!--   second row   -->
                     <div class="row">
                        <div class="col-sm-12">
                           <label>COMPANY NAME (OPTIONAL)</label>
                           <input type="text" name="company_name" class="form-control">
                           <?php if(form_error('company_name')){ ?>
                           <div class="alert alert-danger"><?= form_error('company_name') ?></div>
                           <?php } ?>
                        </div>
                     </div>
                     <!--   third row   -->
                     <div class="row">
                        <div class="col-sm-12">
                           <label>COUNTRY *</label>
                           <p>India</p>
                        </div>
                     </div>
                     <!--   fourth row   -->
                     <div class="row">
                        <div class="col-sm-12">
                           <label>STREET ADDRESS *</label>
                           <input type="text" name="street1" class="form-control"><br>
                           <?php if(form_error('street1')){ ?>
                           <div class="alert alert-danger"><?= form_error('street1') ?></div>
                           <?php  } ?>
                           <input type="text" name="street2" class="form-control">
                           <?php if(form_error('street2')){ ?>
                           <div class="alert alert-danger"><?= form_error('street2') ?></div>
                           <?php } ?>
                        </div>
                     </div>
                     <br>

                      <div class="row">
                        <div class="col-sm-12">
                           <label>Amount</label>
                           <input type="text" name="amount" class="form-control" value="<?php if(!empty($this->session->userdata('amount'))){echo $this->session->userdata('amount');}  ?>">
                           <?php if(form_error('amount')){ ?>
                           <div class="alert alert-danger"><?= form_error('amount') ?></div>
                           <?php } ?>
                        </div>
                     </div>
                     <!--   fifth row   -->
                     <!--   sixth row   -->
                  </div>
                  <div class="col-sm-6">
                     <div class="row">
                        <div class="col-sm-12">
                           <label>POSTCODE / ZIP *</label>
                           <input type="text" name="zip_code" class="form-control">
                           <?php if(form_error('zip_code')){ ?>
                           <div class="alert alert-danger"><?= form_error('zip_code') ?></div>
                           <?php  } ?>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <label>PHONE *</label><br>
                           <input type="text" name="phone" class="form-control">
                           <?php if(form_error('phone')){ ?>
                           <div class="alert alert-danger"><?= form_error('phone') ?></div>
                           <?php } ?>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12">
                           <label>STATE / COUNTY *</label><br>
                           <select class="form-control" name="state_country" >
                              <option>Madhya pradesh</option>
                              <option>Chattigar</option>
                           </select>
                           <?php if(form_error('state_country')){ ?>
                           <div class="alert alert-danger"><?= form_error('state_country') ?></div>
                           <?php } ?>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-sm-12">
                           <label>EMAIL ADDRESS *</label>
                           <input type="email" name="email" class="form-control">
                           <?php if(form_error('email')){ ?>
                           <div class="alert alert-danger"><?= form_error('email') ?></div>
                           <?php } ?>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-sm-12">
                           <label>TOWN / CITY *</label>
                           <input type="text" name="city_name" class="form-control">
                           <?php if(form_error('city_name')){ ?>
                           <div class="alert alert-danger"><?= form_error('city_name') ?></div>
                           <?php  } ?>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-sm-12">
                        <button class="btn btn-primary">Payment</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

