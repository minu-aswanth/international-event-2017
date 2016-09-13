
app.config(function($routeProvider) {
	$routeProvider
	.when("/", {
		templateUrl : "views/SURC/home.html"
	})
	.when("/SURC/Home", {
		templateUrl : "views/SURC/home.html"
	})
	.when("/SURC/Prelims", {
		templateUrl : "views/SURC/prelims.html"
	})
	.when("/SURC/Mains", {
		templateUrl : "views/SURC/mains.html"
	})
	.when("/SURC/Registration", {
		templateUrl : "views/SURC/registration.html"
	})
	.when("/SURC/ContactUs", {
		templateUrl : "views/SURC/contact_us.html"
	})
	.when("/SURC/FAQ", {
		templateUrl : "views/SURC/FAQ.html"
	})
	.when("/SURC/PrizeMoney", {
		templateUrl : "views/SURC/prize-money.html"
	})
	.when("/CA", {
		templateUrl : "views/sampark_ca.html"
	})
});

