<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Daily Ui #001</title>
	<link rel="stylesheet" href="css/base.css">
</head>
<body>
	<div class="bg-image"></div>
	<div class="blur"></div>
	<div class="container">
		<div class="card">
			<img src="https://flaviagrilohome.com.br/wp-content/uploads/2017/08/form-couro-600x563.jpg" alt="" width="100%">
		</div>
		<div class="card">
			<div class="sup">
				<div class="grid-container">
					<div class="title">
						<h1>Create Account</h1>
					</div>
				</div>
				<div class="form">
					<div class="grid-container">
						<div class="form-group">
							<div class="grid-item">
								<input type="text" class="input-material" id="name">
								<label class="label-material" for="name">Name</label>
							</div>
						</div>

						<div class="form-group">
							<div class="grid-item">
								<input type="text" class="input-material" id="email">
								<label class="label-material" for="email">Email</label>
							</div>
						</div>

						<div class="form-group">
							<div class="grid-item">
								<input type="text" class="input-material" id="phone">
								<label class="label-material" for="phone">Phone</label>
							</div>
						</div>

						<div class="form-group">
							<div class="grid-item">
								<input type="text" class="input-material" id="password">
								<label class="label-material" for="password">Password</label>
							</div>
						</div>

						<div class="grid-item">
							<button>Signup</button>
						</div>
						<div class="grid-item">
							<span class="powered">by Alex Duart</span>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<script src="https://www.datamobile.com.br/ecospa/js/jquery.min.js"></script>
	<script>
		$(document).ready(function(e) {
			$('input.input-material').on('focus', function () {
				$(this).siblings('.label-material').addClass('active');
			});

			$('input.input-material').on('blur', function () {
				$(this).siblings('.label-material').removeClass('active');

				if ($(this).val() !== '') {
					$(this).siblings('.label-material').addClass('active');
				} else {
					$(this).siblings('.label-material').removeClass('active');
				}
			});
		});
	</script>
</body>
</html>
