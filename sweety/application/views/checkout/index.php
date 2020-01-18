<div class="common_banner">
   <div class="inner_bg">
      <h3>Order Preview</h3>
      <hr>
   </div>
</div>
<div class="checkout container">
   <div class="row">
      <div class="col-md-12">
         <!-- Order items -->
         <div class="table-responsive">
         <table class="table">
            <thead>
               <tr>
                  <th>Product</th>
                  <th class="text-center">Price</th>
                  <th class="text-center">Quantity</th>
                  <th class="text-right">Subtotal</th>
               </tr>
            </thead>
            <tbody>
               <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
               <tr>
                  <td>
                     <?php $imageURL = !empty($item["image"])?'https://alphawizz.org/sweetadmin/uploads/products/'.$item["image"]:base_url('assets/images/pro-demo-img.jpeg'); ?>
                     <img src="<?php echo $imageURL; ?>" width="75"/>
                    <span> <?php echo $item["name"]; ?></span>
                  </td>
                  <td class="text-center"><?php echo '<i class="fas fa-rupee-sign"></i>'.$item["price"]; ?></td>
                  <td class="text-center"><?php echo $item["qty"]; ?></td>
                  <td class="text-right"><?php echo '<i class="fas fa-rupee-sign"></i>'.$item["subtotal"]; ?></td>
               </tr>
               <?php } }else{ ?>
               <tr>
                  <td colspan="5">
                     <p>No items in your cart...</p>
                  </td>
               </tr>
               <?php } ?>
            </tbody>
            <!-- <tfoot>
               <tr>
                  <td colspan="4"></td>
                  <?php if($this->cart->total_items() > 0){ ?>
                  <td class="text-right">
                     <strong>Total  <?php echo '<i class="fas fa-rupee-sign"></i>'.$this->cart->total().''; ?></strong>
                  </td>
                  <?php } ?>
               </tr>
            </tfoot> -->
         </table>
        
         </div>
          <div class="row">
            <div class="col-md-12">
              <div class="checkout_total">
                <?php if($this->cart->total_items() > 0){ ?>
                  <strong>Total  <?php echo '<i class="fas fa-rupee-sign"></i>'.$this->cart->total().''; ?></strong>
                  </div>
                <?php } ?>
              </div>
         </div>
         <?php $total_amout=$this->cart->total() ?>
         <!-- Shipping address -->
         <form class="form-horizontal" action="<?= base_url()?>Paytm/Detail/index/<?= $total_amout  ?>" method="post">
            <!-- <div class="ship-info">
               <h4>Shipping Info</h4>
               <div class="form-group">
                   <label class="control-label col-sm-2">Name:</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name="name" value="<?php echo !empty($custData['name'])?$custData['name']:''; ?>" placeholder="Enter name">
                       <?php echo form_error('name','<p class="help-block error">','</p>'); ?>
                   </div>
               </div>
               <div class="form-group">
                   <label class="control-label col-sm-2">Email:</label>
                   <div class="col-sm-10">
                       <input type="email" class="form-control" name="email" value="<?php echo !empty($custData['email'])?$custData['email']:''; ?>" placeholder="Enter email">
                       <?php echo form_error('email','<p class="help-block error">','</p>'); ?>
                   </div>
               </div>
               <div class="form-group">
                   <label class="control-label col-sm-2">Phone:</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name="phone" value="<?php echo !empty($custData['phone'])?$custData['phone']:''; ?>" placeholder="Enter contact no">
                       <?php echo form_error('phone','<p class="help-block error">','</p>'); ?>
                   </div>
               </div>
               <div class="form-group">
                   <label class="control-label col-sm-2">Address:</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name="address" value="<?php echo !empty($custData['address'])?$custData['address']:''; ?>" placeholder="Enter address">
                       <?php echo form_error('address','<p class="help-block error">','</p>'); ?>
                   </div>
               </div>
               </div> -->
            <div class="footBtn checkout_page">
               <a href="<?php echo base_url('cart/'); ?>" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Back to Cart</a>
               <button type="submit" name="placeOrder" class="btn btn-success orderBtn">Place Order <i class="glyphicon glyphicon-menu-right"></i></button>
            </div>
         </form>
      </div>
   </div>
</div>