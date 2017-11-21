
app.controller('requestsCtrl', function ($scope, $ionicModal, RequestsService, $ionicLoading, $ionicHistory, $http, $location, $ionicPopup) {
    $scope.opensetting = function () {
        $('.contains').slideToggle('1s');
    }

    $scope.logout = function () {
        var confirmPopup = $ionicPopup.confirm({
            title: 'Logout',
            template: 'Are you sure want to logout?'
        });

        confirmPopup.then(function (res) {
            if (res) {
                var device_token = localStorage.device_token;
                RequestsService.unregister(device_token).then(function (response) {
                });
                window.localStorage.removeItem('unite_no');
                $('.contains').hide();
                $location.path('/login');

            } else {
                $('.contains').hide();
            }
        });
    };
    $ionicLoading.show({
        template: '<ion-spinner icon="spiral"></ion-spinner>'
    }).then(function () {
        //console.log("The loading indicator is now displayed");
    });


    window.setInterval(function () {
        $http({
            url: base_url + 'api/notification/admin_notifi',
            method: 'get',
            dataType: 'json',
        }).success(function (data) {
            $ionicLoading.hide();
            console.log(data);
            $scope.requests = data;
            $scope.$broadcast('scroll.refreshComplete');
        })
    }, 2000);


    $scope.accept_request = function (key, id) {


        var confirmPopup = $ionicPopup.confirm({
            title: 'Accept',
            template: 'Are you sure to accept this request?'
        });
        confirmPopup.then(function (res) {
            if (res) {
                $ionicLoading.show({
                    template: '<ion-spinner icon="spiral"></ion-spinner>'
                }).then(function () {
                    //console.log("The loading indicator is now displayed");
                });
                $http({
                    url: base_url + 'api/notification/ready/' + id,
                    method: 'get',
                    dataType: 'json',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).success(function (data) {
                    $ionicLoading.hide();
                })
            }
        });
    }


    $scope.reject_request = function (key, id) {

        var confirmPopup = $ionicPopup.confirm({
            title: 'Reject',
            template: 'Are you sure to reject this request?'
        });
        confirmPopup.then(function (res) {
            if (res) {

                $ionicLoading.show({
                    template: '<ion-spinner icon="spiral"></ion-spinner>'
                }).then(function () {
                    //console.log("The loading indicator is now displayed");
                });
                $http({
                    url: base_url + 'api/notification/cancel/' + id,
                    method: 'get',
                    dataType: 'json',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).success(function (data) {
                    $ionicLoading.hide();
                })

            }
        });
    }

})



