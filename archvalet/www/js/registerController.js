
app.controller('registerCtrl', function($scope,$ionicModal,$ionicHistory,$http,$location,$rootScope) {
    
     $scope.myGoBack = function(){
     $ionicHistory.goBack();
  }   
     
     $scope.submit_register = function(){
       var fullname = $('#fullname').val();
       var email = $('#email').val();
       var contact = $('#contact_no').val();
       var unite = $('#unite_no').val();
       var password = $('#password').val()
       var confirmPassword = $('#confirmPassword').val();
       
       
       if(fullname != '' && email != '' && contact != '' && unite != '' && password != '' && confirmPassword != ''){
     
     var data = {
         fullname : fullname,
         email : email,
         contact : contact,
         unit : unite,
         password : password
     }
     
      var d = $.param(data);
    $http({
          data:d,
        url:base_url+'api/register/register_user',
        method:'POST',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
    })
    
    $location.path('/login')
     
       }else{
          //alert('Okay Neil');
       }
       
     }
});


        
        
        
        
        
        
        
  

     


  






