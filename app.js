$(document).ready(function() {

	if(location.href == "#page1" || location.href == "#page2" || location.href == "#page3") {
		$('#mobile-menu-trigger').hide();
	} else{
		$('#mobile-menu-trigger').show();
	}

	$("#loginForm").submit(function(){

		var formData=$(this).serialize();
		$.post('loginCheck.php',formData,processData);

		function processData(data) {
			if (data=='pass') {

					location.href='#page3';
					popup("You have logged in succesfully!");

					$.ajax({
						type: "POST",
						url: "getEntries.php",
						dataType: "html",
						success: function(response) {
							$("#entry-container").html(response);
						}
					});
				} else {
					popup("Incorrect username or password")
					$('#pass').val("");
			};
		};

		return false;

	});

	$("#sign-out-btn").click(function(event) {
		event.preventDefault();
		$.get('logout.php');
		location.href = "#page1";
		popup("You have signed out");
		$("#entry-container").empty();
		clearInput();
		return false;
	});

	$("#rateYourAngerForm").submit(function(){
		var formData=$(this).serialize();
		$.post('receiveEntry.php',formData,processData);

		function processData(data) {
			if (data=='pass') {
				location.href='#page3';
				popup('Your note has been saved!');   
			} else {
				location.href = '#page1';
				popup('Server error - please login again!');
			};
		};
		clearInput();
		return false;

	});

	$("#signUpForm").submit(function() {
		var formData=$(this).serialize();
		$.post('signUp.php',formData,processData);

		function processData(data) {
			alert(data);
			if (data=='pass') {
					location.href='#page1';
					popup("User created");
			} else {
				$("#signUpPassword, #repeatSignUpPassword").val("");
				popup("Passwords do not match");
			};
		};
		clearInput();
		return false;

	});

});

function popup(feedback) {
	$('#popupInfo').html('<p>' + feedback + '</p>');
	$('#popupInfo').fadeIn('fast', function() {
		$(this).delay(4000).fadeOut('fast');
	});
}

function clearInput() {
	$('input[type=text], input[type=password], textarea').val("");
}

function refresh() {
	$.ajax({
		type: "POST",
		url: "getEntries.php",
		dataType: "html",
		success: function(response) {
			$("#entry-container").html(response);
		}
	});
}
