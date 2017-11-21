
//service tab
$(function () {


	$('#first').click(function(e) {
		var content = $("#service1").html();
		$('#appendservice').empty();
        $('#appendservice').append('<i class="fa fa-calendar-o sb_icons" aria-hidden="true"></i>'+content);	
        $('#ChoosedService').val(content);	
	});
	$('#second').click(function(e) {
		var content = $("#service2").html();
		$('#appendservice').empty();
        $('#appendservice').append('<i class="fa fa-calendar-o sb_icons" aria-hidden="true"></i>'+content);	
        $('#ChoosedService').val(content);			
	});
	$('#third').click(function(e) {
		var content = $("#service3").html();
		$('#appendservice').empty();
        $('#appendservice').append('<i class="fa fa-calendar-o sb_icons" aria-hidden="true"></i>'+content);	
        $('#ChoosedService').val(content);			
	});



});





// form process




                function open_formm(){
                    
                    $('.step-3-menu').css('background','white');  
                    $('.menuheading3').css('color','#00C4B3');
                    $('.tippn2b').show();
                    $('.tippng1w').hide();
                    $('.step-2-menu').css('border','1px solid #337ab7');
                    $('.tippn2b').css('display','block');
                    $('.step-2-menu').css('background','#337AB7');
                    $('.menuheading2').css('color','#fff');
                    
                   $('.step1box').hide();
                   $('.step2box').show();
                   $('.step3box').hide();
                   }
                   
                   function proceed_form(){
                    var form = document.getElementById('form-stripe_payments');
                    var fname = document.forms["reservation_form"]["fname"].value;
                    var lname = document.forms["reservation_form"]["lname"].value;
                    var email = document.forms["reservation_form"]["email"].value;
                    var mobile = document.forms["reservation_form"]["mobile"].value;
                    var password = document.forms["reservation_form"]["password"].value;
                    var confirm_password = document.forms["reservation_form"]["confirm_password"].value;
                    
 

                    var emailFilter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;

                    if (fname == "") {
                        alert("Name must be filled out.");
                        form.fname.focus();
                        return false;
                    }else if(lname == ""){
                      alert("Last name must be filled out.");
                      form.lname.focus();
                      return false;
                    }else if(!emailFilter.test(email)) {
                        alert('Please enter a valid e-mail address.');
                        form.email.focus();
                        return false;
                    }else if(mobile == ""){
                        alert("Mobile must be filled out");
                        form.mobile.focus();
                        return false;
                    }else if(password == ""){
                        alert("Password must be filled out.");
                        form.password.focus();
                        return false;                      
                    }else if (password != confirm_password) {
                        alert("Confirm Password doesn't match.");
                        form.confirm_password.focus();
                        return false;                         
                    }


                    $('.step-3-menu').css('background','#337ab7');  
                    $('.step1box').hide();
                    $('.step2box').hide();
                    $('.step3box').show();
                    $('.menuheading3').css('color','#fff');
                   
                   }
                   
                   
                   function back_tomain(){
                       
                    $('.step1box').show();
                    $('.step2box').hide();
                    $('.step3box').hide(); 
                   
                    $('.tippn2b').hide();
                    $('.tippng1w').show();
                    $('.step-2-menu').css('border','none');
                    $('.tippn2b').css('display','none');
                    $('.step-2-menu').css('background','white');
                    $('.menuheading2').css('color','##00C4B3');
                       
                   }



//password validation
$(function () {
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

/*password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;*/
});