
app.controller('profileCtrl', function ($scope, $ionicModal, $ionicHistory, $http, $location, $rootScope,$ionicPopup) {
    $scope.myGoBack = function () {
        $ionicHistory.goBack();
    }

    var s = window.localStorage.getItem('unite_no');
    $http({
        url: base_url + 'api/profile/user_detail/' + s,
        method: 'get',
        dataType: 'json',
    }).success(function (data) {
        $scope.userdetail = data;
    })




$scope.logout = function() {
     var confirmPopup = $ionicPopup.confirm({
       title: 'Logout',
       template: 'Are you sure?'
     });
     confirmPopup.then(function(res) {
       if(res) {
        var unite = window.localStorage.getItem('unite_no');
        window.localStorage.removeItem('unite_no', unite);
        $location.path('/buildinglist');
       } else {
         console.log('You are not sure');
       }
     });
   };





    $scope.update_user = function () {
        var name = $("#fullname").val();
        var email = $("#email").val();
        var contact = $("#contact").val();
        var password = $("#password").val();
        var confirm_password = $("#confirmPassword").val();
        var unite_no = window.localStorage.getItem('unite_no');

        if (password == confirm_password) {
            var data = {
                unite_no: unite_no,
                name: name,
                email: email,
                contact: contact,
                password: password,
                confirm_password: confirm_password
            }
        } else {

            return false;
        }

        var val = $.param(data);
        $http({
            data:val,
            url: base_url+'api/register/update_user',
            method: 'post',
            dataType: 'json',
         headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }            
            
            
        }).success(function (data) {
            $scope.openEditForm.hide();
            window.location.reload();
            //$location.path('/tab/profile');
        })


    }



    $ionicModal.fromTemplateUrl('editProfile.html', {
        scope: $scope,
        animation: 'slide-in-up'
    }).then(function (modal) {
        $scope.openEditForm = modal;

    });

    $scope.edit_profile = function () {
        $scope.openEditForm.show();
    }


});





















