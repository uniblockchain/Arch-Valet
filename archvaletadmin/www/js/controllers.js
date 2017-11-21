 var app = angular.module('starter.controllers', [])
.controller('DashCtrl', function($scope,$ionicModal,$ionicHistory,$http,$location,$rootScope,$interval,$ionicSlideBoxDelegate,$ionicLoading) {
    
    })
    
.controller('loginCtrl', function($scope,$http,$location,$ionicLoading,RequestsService) {
    
   // $('.contains').css('display','none');
    
     $scope.checkLogin = function(){
                         $ionicLoading.show({
            template: '<ion-spinner icon="spiral"></ion-spinner>'
    }).then(function(){
       //console.log("The loading indicator is now displayed");
    });
           
        var unite = $('#unitevalue').val();
        var pass = $('#unitepass').val();
    
        
               var data = {
                unite_no: unite,
                password: pass,
            };
            var d = $.param(data);
       $http({
        data:d,
        url:base_url+'api/login/check_login_admin',
        method:'POST',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
    }).success(function(data){
       $ionicLoading.hide();
       if(data.success == true){
           window.localStorage.setItem('unite_no',unite);
           $scope.matched = false;


        var device_token = localStorage.device_token;
        
        RequestsService.register(device_token).then(function(response){ });
        //alert(device_token);
    //    RequestsService.unregister(device_token).then(function(response){ });
          $location.path("/tab/notification");
       }else if(data.success == false){
           $scope.unsuccess = true;
       }else{
           $scope.matched = true;
           return false;
       }
    })
       }  
       
            
    
  
            
            
    
            
     
});


        
        
        
        
        
        
        
  

     


  






