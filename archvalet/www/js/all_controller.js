// var app = angular.module('starter.controllers', [])
app.controller('allController', function($scope,$ionicModal,$ionicHistory,$http,$location,$rootScope,$interval,$ionicSlideBoxDelegate,$ionicLoading) {
  
    
  $scope.reset_notify = function(){

       var unit = window.localStorage.getItem('unite_no');


        $http({
            url: base_url+ 'api/notification/notifi/'+unit,
            method:'get',
            dataType: 'json',
            headers: {
          'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                    
                }
        }).success(function (data){
            // $scope.notifications = data;
            
        })


           $http({
               url: base_url + 'api/notification/reset_notification/'+unit,
               method : 'get',
               dataType : 'json',
               headers: {
          'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                    
                }
           }).success(function (data){
               $location.path('tab/notification');
           })



  }
   
  
  window.setInterval(function(){
   var unit = window.localStorage.getItem('unite_no');
  $http({
      url: base_url + 'api/notification/countNotify/'+unit,
      method: 'post',
      dataType : 'json',
      headers: {
          'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                    
                }
  }).success(function (data){
      
   
      $rootScope.total_notification = data.total;
      
      if(data.total == 0){
          $rootScope.count = false;
      }else{
          $rootScope.count = true;
      }
  })
    
   }, 5000);
  
  
  
  
});


        
        
        
        
        
        
        
  

     


  






