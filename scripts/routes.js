
app.config(function($routeProvider) {
	$routeProvider
	.when("/", {
		templateUrl : "views/SURC/home.html"
	})
	.when("/SURC/Home", {
		templateUrl : "views/SURC/home.html"
	})
	.when("/SURC/IndianTeams", {
		templateUrl : "views/SURC/indianTeams.html"
	})
	.when("/SURC/EventFormat", {
		templateUrl : "views/SURC/eventFormat.html"
	})
	.when("/SURC/ProblemStatement", {
		templateUrl : "views/SURC/problemStatement.html"
	})
	.when("/SURC/Prelims", {
		templateUrl : "views/SURC/prelims.html"
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
});

