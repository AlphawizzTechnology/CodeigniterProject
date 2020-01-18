
<div class="common_banner">
            <div class="inner_bg">
               <h3>Detail Page</h3>
               <hr> 
            </div>
         </div>
<div class="container">
<h1>Enter payment method</h1>
<div class="row">
	<!-- <div class="col-sm-6" >
		<button class="btn btn-primary-outline">Credit Card</button>
		<button class="btn btn-primary-outline">Gift Card</button>
	</div> -->
	</div>
	<br>
	<div class="row">
		<br>
	<div class="col-sm-4">
		<div onclick="onGooglePaymentButtonClicked()" id="gpay">
		</div>
    </div>

  <div class="col-sm-4" id=""> 
    <div class="payment_img">
    <a href="submitpayment"><img src="<?= base_url() ?>assets/images/paypal.png"></a>
    </div>
  </div>

  <div class="col-sm-4" id=""> 
    <div class="payment_img">
    <a href="payyoumoneyredirection"><img src="<?= base_url() ?>assets/images/payyoumoney.png"></a>
    </div>
  </div>




<!-- 	<div class="col-sm-2"   id="amazon">
	</div> -->


</div>



	<div id="container"></div>

<script>
/**
 * Define the version of the Google Pay API referenced when creating your
 * configuration
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|apiVersion in PaymentDataRequest}
 */
const baseRequest = {
  apiVersion: 2,
  apiVersionMinor: 0
};

/**
 * Card networks supported by your site and your gateway
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 * @todo confirm card networks supported by your site and gateway
 */
const allowedCardNetworks = ["AMEX", "DISCOVER", "JCB", "MASTERCARD", "VISA"];

/**
 * Card authentication methods supported by your site and your gateway
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 * @todo confirm your processor supports Android device tokens for your
 * supported card networks
 */
const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];

/**
 * Identify your gateway and your site's gateway merchant identifier
 *
 * The Google Pay API response will return an encrypted payment method capable
 * of being charged by a supported gateway after payer authorization
 *
 * @todo check with your gateway on the parameters to pass
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#gateway|PaymentMethodTokenizationSpecification}
 */
const tokenizationSpecification = {
  type: 'PAYMENT_GATEWAY',
  parameters: {
    'gateway': 'example',
    'gatewayMerchantId': '2849-7969-2209'
  }
};

/**
 * Describe your site's support for the CARD payment method and its required
 * fields
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 */
const baseCardPaymentMethod = {
  type: 'CARD',
  parameters: {
    allowedAuthMethods: allowedCardAuthMethods,
    allowedCardNetworks: allowedCardNetworks
  }
};

/**
 * Describe your site's support for the CARD payment method including optional
 * fields
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 */
const cardPaymentMethod = Object.assign(
  {},
  baseCardPaymentMethod,
  {
    tokenizationSpecification: tokenizationSpecification
  }
);

/**
 * An initialized google.payments.api.PaymentsClient object or null if not yet set
 *
 * @see {@link getGooglePaymentsClient}
 */
let paymentsClient = null;

/**
 * Configure your site's support for payment methods supported by the Google Pay
 * API.
 *
 * Each member of allowedPaymentMethods should contain only the required fields,
 * allowing reuse of this base request when determining a viewer's ability
 * to pay and later requesting a supported payment method
 *
 * @returns {object} Google Pay API version, payment methods supported by the site
 */
function getGoogleIsReadyToPayRequest() {
  return Object.assign(
      {},
      baseRequest,
      {
        allowedPaymentMethods: [baseCardPaymentMethod]
      }
  );
}

/**
 * Configure support for the Google Pay API
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|PaymentDataRequest}
 * @returns {object} PaymentDataRequest fields
 */
function getGooglePaymentDataRequest() {
  const paymentDataRequest = Object.assign({}, baseRequest);
  paymentDataRequest.allowedPaymentMethods = [cardPaymentMethod];
  paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
  paymentDataRequest.merchantInfo = {
    // @todo a merchant ID is available for a production environment after approval by Google
    // See {@link https://developers.googlegoogle.com/pay/api/web/guides/test-and-deploy/integration-checklist|Integration checklist}
    // merchantId: '01234567890123456789',
    merchantName: 'Example Merchant'
  };


  paymentDataRequest.callbackIntents = ["SHIPPING_ADDRESS",  "SHIPPING_OPTION", "PAYMENT_AUTHORIZATION"];
  paymentDataRequest.shippingAddressRequired = true;
  paymentDataRequest.shippingAddressParameters = getGoogleShippingAddressParameters();
  paymentDataRequest.shippingOptionRequired = true;

  return paymentDataRequest;
}

/**
 * Return an active PaymentsClient or initialize
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/client#PaymentsClient|PaymentsClient constructor}
 * @returns {google.payments.api.PaymentsClient} Google Pay API client
 */
function getGooglePaymentsClient() {
  if ( paymentsClient === null ) {
    paymentsClient = new google.payments.api.PaymentsClient({
      environment: "TEST",
      merchantInfo: {
        merchantName: "Example Merchant",
        merchantId: ""
      },
      paymentDataCallbacks: {
        onPaymentAuthorized: onPaymentAuthorized,
        onPaymentDataChanged: onPaymentDataChanged
      }
    });
  }
  return paymentsClient;
}


function onPaymentAuthorized(paymentData) {
  return new Promise(function(resolve, reject){
  // handle the response
  processPayment(paymentData).then(function() {
      resolve({transactionState: 'SUCCESS'});
    }).catch(function() {
        resolve({transactionState: 'ERROR',error: {
          intent: 'PAYMENT_AUTHORIZATION',
          message: 'Insufficient funds',
          reason: 'PAYMENT_DATA_INVALID'
        }
      });
    });
  });
}

/**
 * Handles dynamic buy flow shipping address and shipping options callback intents.
 *
 * @param {object} itermediatePaymentData response from Google Pay API a shipping address or shipping option is selected in the payment sheet.
 * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#IntermediatePaymentData|IntermediatePaymentData object reference}
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentDataRequestUpdate|PaymentDataRequestUpdate}
 * @returns Promise<{object}> Promise of PaymentDataRequestUpdate object to update the payment sheet.
 */
function onPaymentDataChanged(intermediatePaymentData) {
  return new Promise(function(resolve, reject) {
    let shippingAddress = intermediatePaymentData.shippingAddress;
    let shippingOptionData = intermediatePaymentData.shippingOptionData;
    let paymentDataRequestUpdate = {};
    if (intermediatePaymentData.callbackTrigger == "INITIALIZE" || intermediatePaymentData.callbackTrigger == "SHIPPING_ADDRESS") {
      if(shippingAddress.administrativeArea == "NJ")  {
        paymentDataRequestUpdate.error = getGoogleUnserviceableAddressError();
      }
      else {
        paymentDataRequestUpdate.newShippingOptionParameters = getGoogleDefaultShippingOptions();
        let selectedShippingOptionId = paymentDataRequestUpdate.newShippingOptionParameters.defaultSelectedOptionId;
        paymentDataRequestUpdate.newTransactionInfo = calculateNewTransactionInfo(selectedShippingOptionId);
      }
    }
    else if (intermediatePaymentData.callbackTrigger == "SHIPPING_OPTION") {
      paymentDataRequestUpdate.newTransactionInfo = calculateNewTransactionInfo(shippingOptionData.id);
    }
    resolve(paymentDataRequestUpdate);
  });
}

/**
 * Helper function to create a new TransactionInfo object.

 * @param string shippingOptionId respresenting the selected shipping option in the payment sheet.
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#TransactionInfo|TransactionInfo}
 * @returns {object} transaction info, suitable for use as transactionInfo property of PaymentDataRequest
 */
function calculateNewTransactionInfo(shippingOptionId) {
  let newTransactionInfo = getGoogleTransactionInfo();
  let shippingCost = getShippingCosts()[shippingOptionId];
  newTransactionInfo.displayItems.push({
    type: "LINE_ITEM",
    label: "Shipping cost",
    price: shippingCost,
    status: "FINAL"
  });
  let totalPrice = 0.00;
  newTransactionInfo.displayItems.forEach(displayItem => totalPrice += parseFloat(displayItem.price));
  newTransactionInfo.totalPrice = totalPrice.toString();
  return newTransactionInfo;
}

/**
 * Initialize Google PaymentsClient after Google-hosted JavaScript has loaded
 *
 * Display a Google Pay payment button after confirmation of the viewer's
 * ability to pay.
 */
function onGooglePayLoaded() {
  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.isReadyToPay(getGoogleIsReadyToPayRequest()).then(function(response) {
  if (response.result) {
    addGooglePayButton();
    }
  }).catch(function(err) {
    console.error(err);
  });
}

/**
 * Add a Google Pay purchase button alongside an existing checkout button
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#ButtonOptions|Button options}
 * @see {@link https://developers.google.com/pay/api/web/guides/brand-guidelines|Google Pay brand guidelines}
 */
function addGooglePayButton() {
  const paymentsClient = getGooglePaymentsClient();
  const button =
     paymentsClient.createButton({onClick: onGooglePaymentButtonClicked});
   document.getElementById('gpay').appendChild(button);
}

/**
 * Provide Google Pay API with a payment amount, currency, and amount status
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#TransactionInfo|TransactionInfo}
 * @returns {object} transaction info, suitable for use as transactionInfo property of PaymentDataRequest
 */
function getGoogleTransactionInfo() {
  return {
    countryCode: '91',
    currencyCode: "INR",
    totalPriceStatus: "FINAL",
    totalPrice: "<?= $data['amount'] ?>",
    totalPriceLabel: "Total"
  };
}

/**
 * Provide a key value store for shippping options.
 */
function getShippingCosts() {
  return {
    "shipping-001": "0.00",
    "shipping-002": "1.99",
    "shipping-003": "1.00"
  }
}

/**
 * Provide Google Pay API with shipping address parameters when using dynamic buy flow.
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#ShippingAddressParameters|ShippingAddressParameters}
 * @returns {object} shipping address details, suitable for use as shippingAddressParameters property of PaymentDataRequest
 */
function getGoogleShippingAddressParameters() {
  return  {
    allowedCountryCodes: ['US'],
    phoneNumberRequired: true
  };
}

/**
 * Provide Google Pay API with shipping options and a default selected shipping option.
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#ShippingOptionParameters|ShippingOptionParameters}
 * @returns {object} shipping option parameters, suitable for use as shippingOptionParameters property of PaymentDataRequest
 */
function getGoogleDefaultShippingOptions() {
        return {
      defaultSelectedOptionId: "shipping-001",
      shippingOptions: [
        {
          "id": "shipping-001",
          "label": "Free: Standard shipping",
          "description": "Free Shipping delivered in 5 business days."
        },
        {
          "id": "shipping-002",
          "label": "$1.99: Standard shipping",
          "description": "Standard shipping delivered in 3 business days."
        },
        {
          "id": "shipping-003",
          "label": "$10: Express shipping",
          "description": "Express shipping delivered in 1 business day."
        },
      ]
  };
}

/**
 * Provide Google Pay API with a payment data error.
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentDataError|PaymentDataError}
 * @returns {object} payment data error, suitable for use as error property of PaymentDataRequestUpdate
 */
function getGoogleUnserviceableAddressError() {
        return {
    reason: "SHIPPING_ADDRESS_UNSERVICEABLE",
    message: "Cannot ship to the selected address",
    intent: "SHIPPING_ADDRESS"
        };
}

/**
 * Prefetch payment data to improve performance
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/client#prefetchPaymentData|prefetchPaymentData()}
 */
function prefetchGooglePaymentData() {
  const paymentDataRequest = getGooglePaymentDataRequest();
  // transactionInfo must be set but does not affect cache
  paymentDataRequest.transactionInfo = {
    totalPriceStatus: 'NOT_CURRENTLY_KNOWN',
    currencyCode: 'MRP'
  };
  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.prefetchPaymentData(paymentDataRequest);
}



/**
 * Show Google Pay payment sheet when Google Pay payment button is clicked
 */
function onGooglePaymentButtonClicked() {
  const paymentDataRequest = getGooglePaymentDataRequest();
  paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.loadPaymentData(paymentDataRequest);
}

/**
 * Process payment data returned by the Google Pay API
 *
 * @param {object} paymentData response from Google Pay API after user approves payment
 * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentData|PaymentData object reference}
 */
function processPayment(paymentData) {
        return new Promise(function(resolve, reject) {
        setTimeout(function() {
        // show returned data in developer console for debugging
         console.log(paymentData);
                // @todo pass payment token to your gateway to process payment
                paymentToken = paymentData.paymentMethodData.tokenizationData.token;

        resolve({});
    }, 3000);
  });
}</script>


<script async src="https://pay.google.com/gp/p/js/pay.js"onload="onGooglePayLoaded()"></script>


<script type='text/javascript'>
    window.onAmazonLoginReady = function() {
      amazon.Login.setClientId();
    };
    window.onAmazonPaymentsReady = function() {
                showButton();
    };
  </script>
    <script async="async" src='https://static-na.payments-amazon.com/OffAmazonPayments/us/sandbox/js/Widgets.js'>
  </script>
</head>

<body>

 <!-- <script type="text/javascript">
    function showButton(){
      var authRequest; 
      OffAmazonPayments.Button("amazon", "SELLER-ID", { 
        type:  "TYPE", 
        color: "COLOR", 
        size:  "SIZE", 

        authorization: function() { 
        loginOptions = {scope: "SCOPES", 
          popup: "POPUP-PARAMETER"}; 
        authRequest = amazon.Login.authorize (loginOptions, 
          "REDIRECT-URL"); 
        }, 
 
        onError: function(error) { 
          // your error handling code.
          // alert("The following error occurred: " 
          //        + error.getErrorCode() 
          //        + ' - ' + error.getErrorMessage());
        } 
     });
    }; 
   </script>
   . . .
   <script type="text/javascript">
     document.getElementById('Logout').onclick = function() {
       amazon.Login.logout();
     };
   </script> -->




<script>
	function border(str){
		if(str=='gpay'){
			document.getElementById('gpay').style.border='1px solid red';
			document.getElementById('paypal').style.border='0px solid red';

			document.getElementById('amazon').style.border='0px solid red';
		}
		else if(str=='paypal') 
		{
			document.getElementById('amazon').style.border='0px solid red';
			document.getElementById('gpay').style.border='0px solid red';
			document.getElementById('paypal').style.border='1px solid red';

		}
		else if(str=='amazon'){
			document.getElementById('gpay').style.border='0px solid red';
			document.getElementById('paypal').style.border='0px solid red';
			document.getElementById('amazon').style.border='1px solid red';
		}

	}
	</script>




 <!--  <div id="paypal-button"></div> -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'AQiuiWlwSovnHFRu3DAvcav2BJbGqhyxljgrCIbo9V1uPu_h6vs7lpg6MuYX_smK9EjIr_N0GQQA5cYb'
      //production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
    }
  }, '#paypal-button');

</script>


<script>
var data = JSON.stringify(false);

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "https://mercury-uat.phonepe.com/v4/debit#");
xhr.setRequestHeader("content-type", "application/json");
xhr.setRequestHeader("x-verify", "X-VERIFY");

xhr.send(data);
</script>