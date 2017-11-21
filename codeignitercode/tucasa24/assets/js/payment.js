  $(document).ready(function(){

    
    $('#form-stripe_payments>input[type=submit]').click(function(e){
      e.preventDefault();
      stripe_payments();
      return false;
    });
  });
    
    $.getScript('https://js.stripe.com/v1/', function(){
    
      stripe_payments = function(){
      


        $('#form-stripe_payments>input[type=button]').hide();

        
        //set publishable key
                Stripe.setPublishableKey('pk_test_AG6SMlrkSTcqQDv4NYuR06xR');
                
        // createToken returns immediately - the supplied callback submits the form if there are no errors
        Stripe.createToken({
          number: $('#stripe_card_num').val(),
          cvc: $('#stripe_cvc_code').val(),
          exp_month: $('#stripe_expiration_month').val(),
          exp_year: $('#stripe_expiration_year').val()
        }, function(status, response){
          
          if (response.error) {
            
            return false;
          }
          else
          {
            // token contains id, last4, and card type
            var token = response['id'];
          
            // insert the token into the form so it gets submitted to the server
            $("#stripe-details-form").html("<input id='stripeToken' type='hidden' name='stripeToken' value='" + token + "'>");
            $('#form-stripe_payments').submit();
          }
        });
      }
    });