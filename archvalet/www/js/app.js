// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
// 'starter.services' is found in services.js
// 'starter.controllers' is found in controllers.js

// var base_url = 'http://localhost/Arch-Valet/codeignitercode/index.php/'; 
var base_url = 'http://abhishekarora.in/projects/archvalet/Arch-Valet/codeignitercode/index.php/';
// var base_url = 'http://archvaletapp.com/';

 angular.module('starter', ['ionic', 'starter.controllers', 'starter.services','ngCordova'])
 

.config(function($ionicConfigProvider) {
    $ionicConfigProvider.tabs.position('bottom');
})
 
.run(function($ionicPlatform,$rootScope,$location, $cordovaSplashscreen) {	 
	 $ionicPlatform.ready(function() {
		 console.log($cordovaSplashscreen);
		 console.log(navigator);
		 try {
			  $cordovaSplashscreen.hide();
			} catch(e) {
			  console.log(e.stack);
			};
		  // navigator.splashscreen.hide();
	  });
  
          $rootScope.$on("$stateChangeStart", function (event, next, current, from) {
        if (next.checkLogged || current.checkLogged) {
       
if (window.localStorage.getItem('unite_no') != null) {
                  $rootScope.unite_no = window.localStorage.getItem('unite_no');
                
            }else {
                $location.path('/buildinglist');
            }
}
    })
    

    
  $ionicPlatform.ready(function() {
    // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
    // for form inputs)
    if (window.cordova && window.cordova.plugins && window.cordova.plugins.Keyboard) {
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
      cordova.plugins.Keyboard.disableScroll(true);

    }
    if (window.StatusBar) {
      // org.apache.cordova.statusbar required
      StatusBar.styleDefault();
    }



  });
})

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider
  
  .state('login',{
        url:'/login',

        templateUrl:'templates/login.html',
        controller:'loginCtrl'
            })
	.state('buildinglist',{
        url:'/buildinglist',
        templateUrl:'templates/buildinglist.html',
        controller:'buildingCtrl'
            })
	
  .state('register',{
      checkLogged:false,
        url:'/register',
        templateUrl:'templates/register.html',
        controller:'registerCtrl'
            })
  
   

  // setup an abstract state for the tabs directive
    .state('tab', {
    url: '/tab',
    abstract: true,
    templateUrl: 'templates/tabs.html',
  })

  // Each tab has its own nav history stack:

 



            
  .state('tab.dash', {
    url: '/dash',
      checkLogged:true,
    views: {
      'tab-dash': {
        templateUrl: 'templates/tab-dash.html',
        controller: 'DashCtrl'
      }
    }
  })
  

      
  
  .state('tab.notification', {
    url: '/notification',
      checkLogged:true,
    views: {
      'tab-notification': {
        templateUrl: 'templates/notification.html',
        controller: 'notificationCtrl'
      }
    }
  })
  
  
  
      .state('tab.guest', {
    url: '/guest',
      checkLogged:true,
    views: {
      'tab-dash': {
        
        templateUrl: 'templates/guest.html',
        controller: 'DashCtrl'
      }
    }
  })
  
  
  
  
  .state('tab.profile', {
    url: '/profile',
      checkLogged:true,
    views: {
      'tab-profile': {
        templateUrl: 'templates/profile.html',
        controller: 'profileCtrl'
      }
    }
  })

 

  // if none of the above states are matched, use this as the fallback
  $urlRouterProvider.otherwise('/tab/dash');

});








