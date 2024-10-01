<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Cashier</title>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		body {
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			background: #4070f4;
		}
		.wrapper {
			position: relative;
			max-width: 430px;
			width: 100%;
			background: #fff;
			padding: 34px;
			border-radius: 6px;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
		}
		.wrapper h2 {
			position: relative;
			font-size: 22px;
			font-weight: 600;
			color: #333;
		}
		.wrapper h2::before {
			content: '';
			position: absolute;
			left: 0;
			bottom: 0;
			height: 3px;
			width: 28px;
			border-radius: 12px;
			background: #4070f4;
		}
		.wrapper form {
			margin-top: 30px;
		}
		.wrapper form .input-box {
			height: 52px;
			margin: 18px 0;
		}
		form .input-box input {
			height: 100%;
			width: 100%;
			outline: none;
			padding: 0 15px;
			font-size: 17px;
			font-weight: 400;
			color: #333;
			border: 1.5px solid #C7BEBE;
			border-bottom-width: 2.5px;
			border-radius: 6px;
			transition: all 0.3s ease;
		}
		.input-box input:focus,
		.input-box input:valid {
			border-color: #4070f4;
		}
		.input-box.button input {
			color: #fff;
			letter-spacing: 1px;
			border: none;
			background: #4070f4;
			cursor: pointer;
		}
		.input-box.button input:hover {
			background: #0e4bf1;
		}
    </style>
  </head>
<body>

  <div class="wrapper">
    <h2>Login Cashier</h2>

    <form action="<?php echo site_url('authadmin/login_process'); ?>" method="POST">
      <div class="input-box">
        <input type="email" class="form-control" id="email_user" name="email_user" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Login Cashier">
      </div>
    </form>
  </div>

  <!-- Trigger SweetAlert for errors -->
  <?php if($this->session->flashdata('error')): ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?php echo $this->session->flashdata('error'); ?>',
      });
    </script>
  <?php endif; ?>

  <!-- Trigger SweetAlert for success -->
  <?php if($this->session->flashdata('success')): ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Success',
        text: '<?php echo $this->session->flashdata('success'); ?>',
        showConfirmButton: true
      }).then((result) => {
          if (result.isConfirmed) {
              window.location.href = '<?php echo site_url("kasir/index"); ?>'; // Redirect to dashboard
          }
      });
    </script>
  <?php endif; ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
