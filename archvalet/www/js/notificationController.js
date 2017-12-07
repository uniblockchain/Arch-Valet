
app.controller('notificationCtrl', function($scope, $ionicModal, $ionicLoading, $ionicHistory, $http, $location, $rootScope,$ionicPopup, $state) {
    $scope.myGoBack = function(){
		 $ionicHistory.goBack();
	  }

// console.log("Notifi");

var unit = window.localStorage.getItem('unite_no');
$http({
   url: base_url + 'api/notification/reset_notification/'+unit,
   method : 'get',
   dataType : 'json',
})
  
window.setInterval(function(){
	if($scope.editnotifi == true) {
	 	var unit = window.localStorage.getItem('unite_no');
	  	$http({
		  url: base_url+ 'api/notification/clean/'+unit,
		  method:'get',
		  dataType: 'json',
	  	}).success(function (data){
		  // console.log(data);
		  $scope.notifications = data;
		  $scope.$broadcast('scroll.refreshComplete')
	  	})
	}
}, 5000);
  
$scope.notifiIDs = [];
  
$scope.loadNewNotification = function(){
  var unit = window.localStorage.getItem('unite_no');
  $ionicLoading.show({
		template: '<ion-spinner icon="spiral"></ion-spinner>'
	}).then(function(){
	   console.log("The loading indicator is now displayed");
	});

  $http({
      url: base_url+ 'api/notification/notifi/'+unit,
      method:'get',
      dataType: 'json',
  }).success(function (data){   
		// console.log(data);  
	  $ionicLoading.hide();
	  if(data == ''){
		$scope.notifyAvail = 0;
	  } else {
		$scope.notifyAvail = 1;
		$scope.notifications = data;
	  }
      $scope.$broadcast('scroll.refreshComplete')
  })
}


$scope.reloadNewNotification = function(){
  var unit = window.localStorage.getItem('unite_no');
  $http({
      url: base_url+ 'api/notification/clean/'+unit,
      method:'get',
      dataType: 'json',
  }).success(function (data){
	  // console.log(data);
      $scope.notifications = data;
      $scope.$broadcast('scroll.refreshComplete')
  })
}

$scope.loadNewNotification();
$scope.editnotifi = true;
$scope.delnotifi = false;


$scope.editNotification = function(){
	$scope.editnotifi = false;
	$scope.delnotifi = true;
}

$scope.delNotification = function(){
	$scope.deleteNotifi();
}

$scope.cancelNotification = function(){
	$scope.notifiIDs = [];
	$scope.editnotifi = true;
	$scope.delnotifi = false;
}


$scope.deleteNotifi = function(){
	if($scope.notifiIDs.length > 0) {
		var confirmPopup = $ionicPopup.confirm({
			title: 'Delete Notifications',
			template: 'Are you sure?'
		});
		confirmPopup.then(function(res) {
			if(res) {
				$ionicLoading.show({
					template: '<ion-spinner icon="spiral"></ion-spinner>'
				}).then(function(){
				   console.log("The loading indicator is now displayed");
				});
				// console.log($scope.notifiIDs);
				angular.forEach($scope.notifiIDs, function(notifiID) {
					$http({
					  url: base_url+ 'api/notification/delnotifi/'+notifiID,
					  method:'get',
					  dataType: 'json',
					}).success(function (data){

					})
				});
				$ionicLoading.hide();
				$scope.notifiIDs = [];
				$scope.editnotifi = true;
				$scope.delnotifi = false;
				  $scope.loadNewNotification();
				  $scope.$broadcast('scroll.refreshComplete')
			} else {
			 console.log('You are not sure');
			}
		});
	} else {
		var alertPopup = $ionicPopup.alert({
		    title: 'Delete Notifications',
		    template: 'Select some notifications to delete!'
	   });
		alertPopup.then(function(res) {	     
			
	   });
	}
}    

$scope.delnotifyIDs = function(notifiID){
	// console.log($scope.notifiIDs);
	if($scope.notifiIDs.indexOf(notifiID) != -1){
		($scope.notifiIDs).splice($scope.notifiIDs.indexOf(notifiID), 1);
	} else {		
		$scope.notifiIDs.push(notifiID);
	}
} 
		
})

        
