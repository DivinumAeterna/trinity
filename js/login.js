$(document).ready(function() {
			$("#log_in").on('click', function(){
				var login = $("#login").val();
				var password = $("#password").val();
				
				if (login == "" || password == "") alert('Please enter valid login and password!');
				else {
				$.ajax(
					{
						url: 'login.php',
						method: 'POST',
						data: {
							log_in: 1,
							loginPHP: login,
							passwordPHP: password
						},
						success: function(response){
							$("#response").html(response);
							
							if(response.indexOf('success')>=0)
								window.location='index.html';
						},
						dataType: 'text'
					}
				);
				};
			});
		});