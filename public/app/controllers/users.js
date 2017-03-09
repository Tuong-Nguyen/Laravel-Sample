/**
 * Created by lnthao on 3/9/2017.
 */
app.controller('userController', function($scope, $http, API_URL) {
    //retrieve employees listing from API
    $http.get(API_URL + "user")
        .then(function(response) {
            $scope.users = response.data;
        });

    //show modal form
    $scope.toggle = function(modalstate, id) {
        $scope.modalstate = modalstate;

        switch (modalstate) {
            case 'add':
                $scope.form_title = "Add New User";
                break;
            case 'edit':
                $scope.form_title = "User Detail";
                $scope.id = id;
                $http.get(API_URL + 'user/' + id)
                    .then(function(response) {
                        console.log(response.data[0]);
                        $scope.user = response.data[0];
                    });
                break;
            default:
                break;
        }
        console.log(id);
        $('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save = function(modalstate, id) {
        var url = API_URL + "user";

        //append employee id to the URL if the form is in edit mode
        if (modalstate === 'edit'){
            url += "/" + id;
        }

        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.user),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(response) {
            console.log(response);
            location.reload();
        }, function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
    }

    //delete record
    $scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'user/' + id
            }).
            then(function(data) {
                console.log(data);
                location.reload();
            }, function(data) {
                console.log(data);
                alert('Unable to delete');
            });
        } else {
            return false;
        }
    }
});