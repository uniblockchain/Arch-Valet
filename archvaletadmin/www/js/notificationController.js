
app.controller('notificationCtrl', function ($scope, $ionicModal, RequestsService, $ionicLoading, $ionicHistory, $http, $location, $ionicPopup) {
    $scope.myGoBack = function () {
        $ionicHistory.goBack();
    }

    $scope.opensetting = function () {
        $('.contains').slideToggle('1s');
    }

    $scope.logout = function () {
        var confirmPopup = $ionicPopup.confirm({
            title: 'Logout',
            template: 'Are you sure to logout?'
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

    $http({
        url: base_url + 'api/notification/admin_notifi',
        method: 'get',
        dataType: 'json',
    }).success(function (data) {

        $ionicLoading.hide();
        console.log(data);
        $scope.notifications = data;
        $scope.$broadcast('scroll.refreshComplete');
    })

    window.setInterval(function () {
        $scope.loadNewNotification();
    }, 5000);

    $scope.loadNewNotification = function () {
        $http({
            url: base_url + 'api/notification/admin_notifi',
            method: 'get',
            dataType: 'json',
        }).success(function (data) {
            $scope.notifications = data;
            $scope.$broadcast('scroll.refreshComplete');
        })
    }
})



