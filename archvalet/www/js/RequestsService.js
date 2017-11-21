 (function(){

  angular.module('starter')
  .service('RequestsService', ['$http', '$q', '$ionicLoading',  RequestsService]);

  function RequestsService($http, $q, $ionicLoading){

    function register(device_token){

      var deferred = $q.defer();
      $ionicLoading.show();
      $http.post(base_url+'api/register/registerToken?token='+device_token+'&user_id='+localStorage.unite_no+'&platform=1',
      {
        'token': device_token,
        'user_id':localStorage.unite,
        'platform':'1'
      })
      
      .success(function(response){

        $ionicLoading.hide();
        deferred.resolve(response);

      })
      .error(function(data){
        deferred.reject();
      });

      return deferred.promise;

    };

    function unregister(device_token){

      var deferred = $q.defer();
      $ionicLoading.show();

      $http.post(base_url+'api/register/unregisterToken?token='+device_token,
      {
        'device_token': device_token
      })
      .success(function(response){

        $ionicLoading.hide();
        deferred.resolve(response);

      })
      .error(function(data){
        deferred.reject();
      });

      return deferred.promise;

    };


    return {
      register: register,
      unregister: unregister
    };
  }
})();
