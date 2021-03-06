var app = angular.module('myApp', ["ngRoute"]);

app.controller('ViewController', function($scope) {
	$scope.$on('$viewContentLoaded', function() {
    	animateFunction();
	});
});

app.controller('RegistrationFormController', function($scope) {

	$scope.numbers = [1,2,3,4,5,6];

	this.getNumberArray = function(num) {
		return new Array(num);   
	}

	this.toBeDisplayed = function(x) {
		if($scope.numberOfMembers >= x) {
			return true;
		} else {
			return false;
		}
	}

});

app.controller('EventFormatController', function($scope) {

	this.select = 1;

	this.setSelect = function(selectArg) {
		this.select = selectArg;
	}

	this.isSelect = function(selectArg) {
		return this.select === selectArg;
	}

	this.animate = function(){
		animateFunction();
	}

});

app.directive('mailId', function() {
	return {
		require: 'ngModel',
		link: function(scope, element, attr, mCtrl) {
			function myValidation(value) {
				if (value.indexOf("@") != value.lastIndexOf("@") ||
					(value.lastIndexOf(".") - value.indexOf("@")) < 2 ||
					value.indexOf("@") === 0 ||
					(value.length-value.lastIndexOf(".")) < 3 ||
					value.charAt(value.indexOf('@')+1) === '.' ||
					value.charAt(value.indexOf('@')-1) === '.')
				{
					mCtrl.$setValidity('mailId', false);
				} else {
					mCtrl.$setValidity('mailId', true);
				}
				return value;
			}
			mCtrl.$parsers.push(myValidation);
		}
	};
});

app.directive('phoneNumber', function() {
	return {
		require: 'ngModel',
		link: function(scope, element, attr, mCtrl) {
			function myValidation(value) {
				if (!isNaN(value) && value.length === 10) {
					mCtrl.$setValidity('phoneNumber', true);
				} else {
					mCtrl.$setValidity('phoneNumber', false);
				}
				return value;
			}
			mCtrl.$parsers.push(myValidation);
		}
	};
});



