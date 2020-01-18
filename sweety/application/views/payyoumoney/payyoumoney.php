<?php
$price='200';
// Merchant key here as provided by Payu
$MERCHANT_KEY = '9LBUcOuk';
// Merchant Salt as provided by Payu
$SALT =  "mVGJQUl08m";
$txnid = '123' ;
$hash_string = $MERCHANT_KEY."|".$txnid."|".$price."|Subscription fess MCQUES|ratan|ratan@alphawizz.awsapps.com|123||||||||||".$SALT;
$hash = hash('sha512', $hash_string);
?>
<div class="col-sm-12" style="padding:8%; font-family: georgia; font-size: 18px;">
<form method="POST" action="https://secure.payu.in/_payment">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
<input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid; ?>" />
 You can change your contact number <input type="text" name="phone" value="7869608690" />
<br><br><input type="hidden" name="amount" value="<?php echo $price;?>" />
<input type="hidden" name="firstname" id="firstname" value="ratan" >
<input type="hidden"  name="email" id="email" value="ratan@alphawizz.awsapps.com"  />
<input type="hidden"  name="productinfo" value="Subscription fess MCQUES">
<input type="hidden"  name="surl" value="<?php echo base_url();?>payu/success.php" size="64" />
<input type="hidden"  name="furl" value="<?php echo base_url();?>payu/failure.php" size="64" />
<input type="hidden"   name="service_provider" value="payu_paisa" size="64" />
<input  type="hidden"  name="udf1" value="123" />
<input type="submit" value="Continue" class="btn btn-success" />
</form>
</div>