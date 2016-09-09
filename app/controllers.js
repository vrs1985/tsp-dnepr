var groceryApp = angular.module('groceryApp', ['ngRoute']);

// groceryApp.config([ '$routeProvider', function($routeProvider) {

//       $routeProvider
//       .when('/goods/:goodArticle', {
//           templateUrl: 'template/good-detail.html',
//           controller: 'GoogDetailsCtrl'
//         }).
//       when('/' || ' ', {
//         templateUrl: 'template/good.html',
//         controller: 'GroceryListCtrl'
//       })
//         .otherwise('/', {
//           redirectTo: 'index.php'
//         });
//     }]);

groceryApp.filter('status', function() {
   return function (input) {
       return input ? '\u2713' : '\u2718';
   }
});
groceryApp.filter('fulldescription', function() {
   document.getElementsByClassName('description').addEventListener('mouseenter', function(event){
    return description;
   });return description;
});

groceryApp.controller('GroceryListCtrl', ['$scope', '$http', '$location', function ($scope, $http, $location) {
      $http.get("includes/toJSON/grocery_json.php")
      .then(function (response) {$scope.goods = response.data.records;});
}]);
groceryApp.controller('GoogDetailsCtrl', ['$scope', '$http', '$routeParams', 
  function($scope, $http, $routeParams){
  $scope.goodArticle = $routeParams.goodArticle;
  
  var url = "includes/toJSON/grocery_json.php";

  $http.get(url).success(function(data){
    $scope.good = data;
  }); 
}]);

var dashboardApp = angular.module('dashboardApp', ['ngRoute']);