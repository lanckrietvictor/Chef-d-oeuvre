$(document).ready(function () {
	// document.getElementById("login").addEventListener('click', function(event) {
	// 	event.preventDefault();
	// 	login();
	// });
	document.getElementById("register").addEventListener('click', function(event) {
		event.preventDefault();
		register();
	});
});

//Registration

function register () {
	var username = $("#username").val();
	var password = $("#password").val();

	$.post("AJAX/addNewUsers.php",
	{
		username: username,
		password: password
	},
	function (result) {
		$("#test").html(result);
	});
};

//Login

function login () {
  console.log("test");
	var username = $("#username").val();
	var password = $("#password").val();

	$.post("Model/ajaxLogin.php",
	{
		username: username,
		password: password
	},
	function (result) {
		if(result == "success") {
			window.location = "index.php?admin=success";
		}

		else{
				$("#test").html(result);			//Explain why login didn't work
			}
		})
};
