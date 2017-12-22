 var app = angular.module('starter.controllers', [])
.controller('DashCtrl', function($scope,$ionicModal,$ionicPopup,$ionicHistory,$http,$location,$rootScope,$interval,$ionicNavBarDelegate,$ionicSlideBoxDelegate,$ionicLoading, $state) {
     $scope.dateValue = formatDate(new Date());
       $scope.timeValue = formatTime(new Date());
       $scope.todaydt = formatDate(new Date());
 $scope.selected_tab = "1";



  $scope.myGoBack = function() {
    $ionicNavBarDelegate.back();
  };





window.setInterval(function(){
$scope.loadCars();
    }, 5000);


  $scope.loadCars = function(){
      
      //alert(neil);
  var unit = window.localStorage.getItem('unite_no');
  $http({
      url: base_url+ 'api/cars/fetch_cars/'+unit,
      method:'get',
      dataType: 'json',
  }).success(function (data){
      // $scope.notifications = data;
	  $scope.cars = data;
      $scope.$broadcast('scroll.refreshComplete')
  })
}

$scope.loadCars();







window.setInterval(function(){
$scope.loadCarsGuest();
    }, 5000);


  $scope.loadCarsGuest = function(){
      
      //alert('neil');
  var unit = window.localStorage.getItem('unite_no');
  $http({
      url: base_url+ 'api/cars/fetch_cars_visitors/'+unit,
      method:'get',
      dataType: 'json',
  }).success(function (data){
      // $scope.notifications = data;
	  $scope.visitors_cars = data;
      $scope.$broadcast('scroll.refreshComplete')
  })
}

$scope.loadCarsGuest();


 $scope.slideHasChanged = function($index){
		if($index === 0) {
		 // $scope.selected_tab1 = false;
		  $scope.selected_tab = "1";
		} else  if($index === 1) {
		  $scope.selected_tab = "2";
		  // $scope.selected_tab1 = true;
		} else {
      $scope.selected_tab = "3";
      // $scope.selected_tab1 = true;      
    }
  };


    
    
          var unite_no = window.localStorage.getItem('unite_no');
         $http({
             url:base_url+'api/cars/fetch_cars/'+unite_no,
              method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
    $scope.cars = data;
	// console.log($scope.cars);
    })
         $http({
             url:base_url+'api/cars/fetch_cars_visitors/'+unite_no,
              method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
    $scope.visitors_cars = data;
	// console.log($scope.visitors_cars);
    })
    
   window.setInterval(function(){
  
               var unite_no = window.localStorage.getItem('unite_no');
         $http({
             url:base_url+'api/cars/fetch_cars/'+unite_no,
              method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
    $scope.cars = data;
  // console.log($scope.cars);
    })
    }, 5000);


    
    
    
    
    function formatDate(date) {
    
    var day = date.getDate();
    var monthIndex = date.getMonth();
    var year = date.getFullYear();

    return year+ '-' + (monthIndex+1) + '-' + day;
  }

   function formatTime(date) {
    
    var hour = date.getHours();
    var min = date.getMinutes();
    // var sec = date.getSeconds();

    return hour+ ':' + ((min < 10)? '0'+min : min)  ;  /*  + ':' + sec; */
  }

 
      //Shuttle Service

      //check whether the app user admin available for shuttle service 

  

        var unite_no = window.localStorage.getItem('unite_no');
         $http({
             url:base_url+'api/shuttle/fetch_shuttle/'+unite_no,
              method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
          $scope.shuttleAvail = 0;
          weekdays = data.weekdays;
          // console.log(data.weekdays);
          weekdays = weekdays.replace("\"sunday\"", "0");
          weekdays = weekdays.replace("\"monday\"", "1");
          weekdays = weekdays.replace("\"tuesday\"", "2");
          weekdays = weekdays.replace("\"wednesday\"", "3");
          weekdays = weekdays.replace("\"thursday\"", "4");
          weekdays = weekdays.replace("\"friday\"", "5");
          weekdays = weekdays.replace("\"saturday\"", "6");

          $scope.enabledays = weekdays;
          $scope.disabledays = new Array();

          for(i=0;i<=6;i++) {
              if(weekdays.indexOf(i) == -1){
                  $scope.disabledays.push(i);
              }
          }
          // console.log($scope.enabledays,$scope.disabledays);

          if(data.enabled != undefined)
            $scope.shuttleAvail = data.enabled;
        })

        // check whether the app user already had any shuttle service reserved 
        // then cannot reserve another shuttle till its not completed or cancelled 
        var unite_no = window.localStorage.getItem('unite_no');
         $http({
             url:base_url+'api/shuttle/fetch_user_shuttle/'+unite_no,
              method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
          $scope.shuttleReserve = 1;
          // console.log(data);

          if(data.status != undefined)
            $scope.shuttleReserve = data.status;
          
          $scope.previousShuttleData = data;
        })

  window.setInterval(function(){
  
        //check whether the app user admin available for shuttle service 
        var unite_no = window.localStorage.getItem('unite_no');
         $http({
             url:base_url+'api/shuttle/fetch_shuttle/'+unite_no,
              method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
          $scope.shuttleAvail = 0;
          // console.log(data.enabled);
          if(data.enabled != undefined)
            $scope.shuttleAvail = data.enabled;
        })

        // check whether the app user already had any shuttle service reserved 
        // then cannot reserve another shuttle till its not completed or cancelled 
        var unite_no = window.localStorage.getItem('unite_no');
         $http({
             url:base_url+'api/shuttle/fetch_user_shuttle/'+unite_no,
              method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
          $scope.shuttleReserve = 1;
          // console.log(data);

          if(data.status != undefined)
            $scope.shuttleReserve = data.status;
          
          $scope.previousShuttleData = data;
        })
    }, 5000);


    $scope.cancelShuttle = function(shuttleID){
         $ionicLoading.show({
            template: '<ion-spinner icon="spiral"></ion-spinner>'
          }).then(function(){
             //console.log("The loading indicator is now displayed");
          });

      var unite_no = window.localStorage.getItem('unite_no');
        $http({
            url:base_url+'api/shuttle/cancel_user_shuttle/'+unite_no+'/'+shuttleID,
            method:'get',
            dataType:'json',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
            }
        }).success(function(data){
          if(data == "true")
            $ionicLoading.hide();
        })
    }


    $scope.reserveShuttle = function(){
         $ionicLoading.show({
            template: '<ion-spinner icon="spiral"></ion-spinner>'
          }).then(function(){
             //console.log("The loading indicator is now displayed");
          });

      var unite_no = window.localStorage.getItem('unite_no');

      var data = {
            date: $('#reservedate').val(),
            time: $('#reservetime').text(),
            location: $('#reservelocation').val(),
            unite_no: window.localStorage.getItem('unite_no')
        }
        
        
        var c = $.param(data);
        $http({
            data:c,
             url:base_url+'api/shuttle/reserve_user_shuttle',
              method:'POST',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
          console.log(data);
              if(data.success){
               //$scope.modalform.hide();
             }
            
            $ionicLoading.hide();
           
            $scope.errors = data;
            if(data.dateError || data.timeError){
                var alertPopup = $ionicPopup.alert({
                  title: 'Mandatory Fields Information',
                  template: '<span style="display:block;">'+data.dateError+'</span><span style="display:block;">'+data.timeError+'</span>'
                });
                alertPopup.then(function(res) {      
                
                });
            }

            if(data.reserveError){
                var alertPopup = $ionicPopup.alert({
                  title: 'Reservation Failed',
                  template: '<span style="display:block;">'+data.reserveError+'</span>'
                });
                alertPopup.then(function(res) {      
                
                });
            }
             

           // if(data.dateError){
           //     $scope.dateError = true;
           // }else{
           //      $scope.dateError = false;
           // }
           
           
           // if(data.timeError){
           //      $scope.timeError = true;
           // }else{
           //      $scope.timeError = false;
           // }           
        })
    }
    
    
    
    
    
    
    
    
    $('.upload-detail').css({"display": "hidden"});
        $ionicModal.fromTemplateUrl('addCar.html', {
        scope: $scope,
        animation: 'slide-in-up'
    }).then(function (modal) {
                $scope.modalform = modal;
             
    })
        $ionicModal.fromTemplateUrl('addCar1.html', {
        scope: $scope,
        animation: 'slide-in-up'
    }).then(function (modal) {
                $scope.modalform1 = modal;
             
    });
    


 



    $scope.openAddForm = function(){
        $scope.modalform.show();
    }
    

    $scope.openAddForm1 = function(){
        $scope.modalform1.show();
    }
    

   $scope.close_add_car = function(){
        $scope.modalform.hide();
    }



    $scope.close_add_car1 = function(){
        
         $scope.modalform1.hide();
    }





    $scope.add_car = function(){
        
                        $ionicLoading.show({
            template: '<ion-spinner icon="spiral"></ion-spinner>'
    }).then(function(){
       //console.log("The loading indicator is now displayed");
    });
        
        var parking_spot = $('#parking').val();
        var made = $('#made').val();
        var modal = $('#modal').val();
        var color = $('#color').val();
        var plate = $('#plate').val();
        var unite_no = window.localStorage.getItem('unite_no');
        var data = {
            parking : parking_spot,
            made : made,
            modal : modal,
            color : color,
            plate : plate,
            unite_no : unite_no,
        }
        
        
        var c = $.param(data);
        $http({
            data:c,
             url:base_url+'api/cars/cars_add',
              method:'POST',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
            
             
              if(data.success){
               $scope.modalform.hide();
           }
            
            $ionicLoading.hide();
           
            $scope.errors = data;
           if(data.parkingError){
               $scope.parkingError = true;
           }else{
                $scope.parkingError = false;
           }
           
           
           if(data.modalError){
                $scope.modalError = true;
           }else{
                $scope.modalError = false;;
           }
           
           if(data.plateError){
                $scope.plateError = true;
           }else{
                $scope.plateError = false;
           }
           
           
           if(data.colorError){
                $scope.colorError = true;
           }else{
                $scope.colorError = false;
           }
           
           if(data.madeError){
                $scope.madeError = true;
           }else{
               $scope.madeError = false;
           }
           
         
            
   //  
   //  $location.path('/tab/dash')
     
    })      
        
    }
    
    
    
    
       $scope.add_car1 = function(){
        
                $ionicLoading.show({
            template: '<ion-spinner icon="spiral"></ion-spinner>'
    }).then(function(){
       //console.log("The loading indicator is now displayed");
    });
        
        var parking_spot = $('#parking1').val();
        var made = $('#made1').val();
        var modal = $('#modal1').val();
        var color = $('#color1').val();
        var plate = $('#plate1').val();
        var unite_no = window.localStorage.getItem('unite_no');
        var data = {
            parking : parking_spot,
            made : made,
            modal : modal,
            color : color,
            plate : plate,
            unite_no : unite_no,
        }
        
        
        
        
        var c = $.param(data);
        $http({
            data:c,
             url:base_url+'api/cars/cars_add_visitors',
              method:'POST',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
             
        }).success(function(data){
             
              if(data.success){
               $scope.modalform1.hide();
           }
            
            $ionicLoading.hide();
           
            $scope.errors1 = data;
           if(data.parkingError){
               $scope.parkingError1 = true;
           }else{
                $scope.parkingError1 = false;
           }
           
           
           if(data.modalError){
                $scope.modalError1 = true;
           }else{
                $scope.modalError1 = false;;
           }
           
           if(data.plateError){
                $scope.plateError1 = true;
           }else{
                $scope.plateError1 = false;
           }
           
           
           if(data.colorError){
                $scope.colorError1 = true;
           }else{
                $scope.colorError1 = false;
           }
           
           if(data.madeError){
                $scope.madeError1 = true;
           }else{
               $scope.madeError1 = false;
           }
           
         
            
   //  
   //  $location.path('/tab/dash')
     
    })     
        
    }
    
    
    
    
    $scope.request = function(key,id){
        
         $ionicLoading.show({
            template: '<ion-spinner icon="spiral"></ion-spinner>'
    }).then(function(){
       //console.log("The loading indicator is now displayed");
    });


           $http({
        url:base_url+'api/cars/request_cars/'+id,
        method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
    }).success(function (data) {
    $ionicLoading.hide();

             $scope.cars[key].statuss = data.status;
            })
    }
    
    
    $scope.update_request = function(key,id){
               $http({
        url:base_url+'api/cars/update_request_cars/'+id,
        method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
    }).success(function (data) {
             $scope.cars[key].statuss = data.status;
             
            })
        
    }
    $scope.cancle_request = function(key,id){

         $ionicLoading.show({
            template: '<ion-spinner icon="spiral"></ion-spinner>'
    }).then(function(){
       //console.log("The loading indicator is now displayed");
    });


               $http({
        url:base_url+'api/cars/update_cancle_request_cars/'+id,
        method:'get',
        dataType:'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
    }).success(function (data) {

        $ionicLoading.hide();
             $scope.cars[key].statuss = data.status;
            })
        
    }

})
.controller('loginCtrl', function($scope,$http,$location,$ionicLoading,RequestsService) {
    
       $scope.checkLogin = function(){
                         $ionicLoading.show({
            template: '<ion-spinner icon="spiral"></ion-spinner>'
    }).then(function(){
       //console.log("The loading indicator is now displayed");
    });
           
        var building = window.localStorage.getItem('building_name');
        var unite = $('#unitevalue').val();
        var pass = $('#unitepass').val();
        window.localStorage.removeItem('building_name');
		
               var data = {
                unite_no: unite,
                password: pass,
				building: building
            };
            var d = $.param(data);
       $http({
        data:d,
        url:base_url+'api/login/check_login',
        method:'POST',
        dataType:'json',
         headers: {
          'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'
                    
                }
    }).success(function(data){
      // alert(data);
       $ionicLoading.hide();
       if(data.success == true && data.status == 1){
           window.localStorage.setItem('unite_no',unite);
           $scope.matched = false;


        var device_token = localStorage.device_token;
        
        RequestsService.register(device_token).then(function(response){ });
       // RequestsService.unregister(device_token).then(function(response){ });


          $location.path("/tab/dash");
       }else if(data.success == true && data.status == 0){
           $scope.unsuccess = true;
       }else{
           $scope.matched = true;
           return false;
       }
    })
       }  
       
            
     
})

.controller('buildingCtrl', function($scope,$http,$location,$ionicLoading,RequestsService,$state) {
    $scope.loadbuildings = function(){
		// console.log($state.current.name);
		// window.setInterval(function(){
			if($state.current.name == "buildinglist"){
				$ionicLoading.show({
					template: '<ion-spinner icon="spiral"></ion-spinner>'
				}).then(function(){
				   console.log("The loading indicator is now displayed");
				});
				
				$http({
					 url:base_url+'api/building/fetch_buildings/',
					  method:'get',
				dataType:'json',
				 headers: {
							'Content-Type': 'application/x-www-form-urlencoded'
						}
					 
				}).success(function(data){          
				$ionicLoading.hide();
				$scope.buildings = data;				
				$scope.$broadcast('scroll.refreshComplete')
				})
			}
		// }, 5000);
	}
	
	$scope.loadbuildings(); 
	
 
    $scope.loginprop = function(key,buildingname){		
         window.localStorage.setItem('building_name',buildingname);
         $location.path("/login");
    }   
            
     
});


        
        
        
        
        
        
        
  

     


  






