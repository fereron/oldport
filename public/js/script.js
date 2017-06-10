var app = angular.module('App', []);

app.controller('myCtrl', function ($scope) {
    $scope.person = {
        firstName: 'Even',
        lastName: 'Soul'
    };
});

