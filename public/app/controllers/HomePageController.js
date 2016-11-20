/**
 * Created by Sam on 19/11/2016.
 */

MyApp.controller('HomePageController', function ($scope, $http)
{

	$scope.userInformation = null;
	$scope.contentLoaded   = false;

	$scope.init = function ()
	{
		$scope.getInformation();
	}

	$scope.getInformation = function ()
	{
		$scope.contentLoaded = false;
		$http({
			method : 'GET',
			url    : '/api/user'
		}).then(
			function success(response)
			{
				$scope.userInformation = response.data;
				$scope.contentLoaded   = true;
			},
			function failed(response)
			{
				$scope.contentLoaded = false;
			}
		);

	}

});