 (function(){

  angular.module('starter')
  .service('RequestsService', ['$http', '$q', '$ionicLoading',RequestsService]);
  function RequestsService($http, $q, $ionicLoading){

    function register(device_token){

      var deferred = $q.defer();
      $ionicLoading.show();
      $http.post(base_url+'api/register/registerToken_admin?token='+device_token+'&user_id='+localStorage.unite_no,
      {
        'token': device_token,
        'user_id':localStorage.unite,
        'platform':localStorage.platform
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

      $http.post(base_url+'api/register/unregisterToken_admin?token='+device_token,
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
