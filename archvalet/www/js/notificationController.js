
app.controller('notificationCtrl', function($scope, $ionicModal, $ionicLoading, $ionicHistory, $http, $location, $rootScope,$ionicPopup) {
    $scope.myGoBack = function(){
		 $ionicHistory.goBack();
	  }
  
 
var unit = window.localStorage.getItem('unite_no');
$http({
   url: base_url + 'api/notification/reset_notification/'+unit,
   method : 'get',
   dataType : 'json',
})
  
  
  
window.setInterval(function(){
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
}, 5000);
  

  
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

$scope.deleteNotifi = function(notifiID){
	var confirmPopup = $ionicPopup.confirm({
		title: 'Delete Notification',
		template: 'Are you sure?'
	});
	confirmPopup.then(function(res) {
		if(res) {
		 $http({
			  url: base_url+ 'api/notification/delnotifi/'+notifiID,
			  method:'get',
			  dataType: 'json',
		  }).success(function (data){
			  $scope.loadNewNotification();
			  $scope.$broadcast('scroll.refreshComplete')
		  })
		} else {
		 console.log('You are not sure');
		}
	});
}        
		
})

        
