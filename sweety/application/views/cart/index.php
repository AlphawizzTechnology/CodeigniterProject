<?php  ?>
<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
/ Update item quantity /
function updateCartItem(obj, rowid){
$.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
if(resp == 'ok'){
location.reload();
}else{

}
});
}

function d(id){
 //alert(id);
  // alert('decrement');
  var obj1=document.getElementsByClassName(id);
  if(obj1[0].value == 1 ) {

  }
  else {
  var obj=document.getElementsByClassName(id);
  obj[0].value=parseInt(obj[0].value)-1;
  
  $.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:id, qty:obj[0].value}, function(resp){
    if(true){
    document.getElementById(id).innerHTML=resp;
    }else{
      alert('Cart update failed, please try again.');
    }
  });
}
}




function i(id){
 //alert('decrement');
  var obj=document.getElementsByClassName(id);
  obj[0].value=parseInt(obj[0].value)+1;

  $.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:id, qty:obj[0].value}, function(resp){
    if(true){
      document.getElementById(id).innerHTML=resp;
    }else{
      alert('Cart update failed, please try again.');
    }
  });

}
</script>
<div class="common_banner">
<div class="inner_bg">
<h3>Cart List</h3>
<hr>
</div>
</div>
<section class="breadcrumb breadcrumb_bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="breadcrumb_iner">
<div class="breadcrumb_iner_item">
<p>Home/Shop/Single product/Cart list</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- breadcrumb start-->
<!--================Cart Area =================-->
<section class="cart_area section_padding">
<div class="container">
<div class="cart_inner">
<div class="">
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table">
<thead>
<tr>
<th scope="col">Product</th>
<th scope="col">Price</th>
<th scope="col">Quantity</th>
<th scope="col">Total</th>
</tr>
</thead>
<tbody>
<?php $this->total_amount=0; ?>
<?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){
// print_r($item);


//echo $item['subtotal'];

$this->total_amount = $this->total_amount + $item['subtotal']; 
//echo $this->total_amount;

?>
<tr>
<td>
<div class="media">
<div class="d-flex">
<img src="https://alphawizz.org/sweetadmin/uploads/products/<?= $item["image"] ?>" width="50"/>
</div>
<div class="media-body">
<?php echo $item["name"]; ?>
</div>
</div>
<?php //$imageURL = !empty($item["image"])?base_url('uploads/products/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg');
//$imageURL='https://alphawizz.org/sweetadmin/uploads/products/plain-aata-sandesh-2.jpg';
?>
</td>
<td><?php echo '<i class="fas fa-rupee-sign"></i>'.$item["price"]; ?></td>
<!-- <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td> -->
<td>
<div class="product_count">
<span class="input-number-decrement"> <i onclick="d('<?= $item['rowid'] ?>')" class="ti-minus"></i></span>
<input class="<?= $item['rowid'] ?>" type="text" value="<?php echo $item["qty"]; ?>" min="0" max="10">
<span class="input-number-increment"> <i onclick="i('<?= $item['rowid'] ?>')" class="ti-plus"></i></span>
</div>
</td>
<td id="<?= $item['rowid'] ?>"><?= $item['subtotal'] ?></td>
<td>
<a href="<?php echo base_url('cart/removeItem/'.$item["rowid"]); ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
</td>
</tr>
<?php } }else{ ?>
<tr>
<td colspan="6">
<p>Your cart is empty.....</p>
</td>
<?php } ?>

</tbody>
</table>
</div>
</div>
</div> 

<div class="row">
<div class="col-md-6">
<div class="bottom_button cart_apply_copun">
<form action="<?= base_url() ?>cart/coupon" method="post">
<?php if(!empty($result)){ ?>
<div class="alert alert-sucess"><?= $result ?></div>
<?php } ?>
<td class="Apply-coupon">
<input type="text" name="code" class="form-control" placeholder="Enter Code">
<button class="btn_1" >Apply Coupon</button>
</td>
</form>
</div>
</div>
<div class="col-md-6">
<div class="cupon_text float-right">
<a class="btn_1" href="">Update Cart</a>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="cart_subtotal_name">
<ul>
<li><h5>Subtotal</h5></li>
<li><h5 class="text-right"><i class="fas fa-rupee-sign"></i><?= $this->total_amount ?></h5></li>
<li><h5>Shipping</h5></li>
<li><h5 class="text-right"><i class="fas fa-rupee-sign"></i>20.00</h5></li>
<li><h5>Coupon Discount</h5></li>
<li><?php if(!empty($coupon)) { ?>
<h5 class="text-right"><i class="fas fa-rupee-sign"></i><?= $coupon ?></h5>
<?php } else { ?>
<h5 class="text-right"><i class="fas fa-rupee-sign"></i>00.00</h5>
<?php } ?></li>
<li><h5>Total</h5></li>
<li> <?php if(!empty($coupon)) { ?>
<h5 class="text-right"><i class="fas fa-rupee-sign"></i><?= $this->total_amount + 20-$coupon ?></h5>
<?php } else {?>
<h5 class="text-right"><i class="fas fa-rupee-sign"></i><?= $this->total_amount + 20 ?></h5>
<?php } ?></li>
</ul>
</div>
</div>
</div>

<div class="checkout_btn_inner float-right">
<a class="btn_1" href="<?php echo base_url('products/')?>">Continue Shopping</a>
<a class="btn_1 checkout_btn_1" href="<?php echo base_url('checkout/'); ?>">Proceed to checkout</a>
</div>
</div>
</div>
</section>