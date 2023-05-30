<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <div class="alert alert-danger" id="error-message" style="display: none;"></div>
    <form id="login-form">
      <div class="form-group">
        <label for="mobile-number">Mobile Number:</label>
        <input type="text" class="form-control" id="mobile-number" name="mobile_number" required>
      </div>
      <button type="button" class="btn btn-primary" id="send-otp-button">Send OTP</button>
      <div class="form-group" id="otp-section" style="display: none;">
        <label for="otp">Enter OTP:</label>
        <input type="text" class="form-control" id="otp" name="otp" required>
      </div>
      <button type="submit" class="btn btn-primary" id="login-button" style="display: none;">Login</button>
    </form>
  </div>

  <script>
    $(document).ready(function() {
      $('#send-otp-button').click(function() {
        var mobileNumber = $('#mobile-number').val();
        $.ajax({
          url: 'auth/send_otp',
          type: 'POST',
          data: {
            mobile_number: mobileNumber
          },
          success: function(data) {
            $('#otp-section').show();
            $('#send-otp-button').hide();
            $('#login-button').show();
            $('#error-message').hide();
          },
          error: function(jqXHR, textStatus, errorThrown) {
            $('#error-message').html(jqXHR.responseJSON.message).show();
          }
        });
      });

      $('#login-form').submit(function(e) {
        e.preventDefault();
        var otp = $('#otp').val();
        $.ajax({
          url: 'auth/verify_otp',
          type: 'POST',
          data: {
            otp: otp
          },
          success: function(data) {
            window.location.href = 'dashboard';
          },
          error: function(jqXHR, textStatus, errorThrown) {
            $('#error-message').html(jqXHR.responseJSON.message).show();
          }
        });
      });
    });
  </script>
</body>
</html>



<!--  second code for test otp validation -->

 <!-- <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

 <?php if (isset($error)) : ?>
    <div style="color:red"><?php echo $error ?></div>
<?php endif; ?> 

<form method="post" action="<?php echo site_url('login/login') ?>">
    <label for="mobile_number">Mobile Number</label>
    <input type="text" name="mobile_number" id="mobile_number" required>

    <br>

    <button type="button" onclick="sendOtp()">Send OTP</button>

    <br>

    <label for="otp">OTP</label>
    <input type="text" name="otp" id="otp" required>

    <br>

    <input type="submit" value="Login">
</form>

<script>
function sendOtp() {
    var mobile_number = document.getElementById('mobile_number').value;
    // Send the mobile number to the server using AJAX
    $.post('<?php echo site_url('http://broadcast.invictusdigisoft.com/api/sendmsg.php?user=InvictusDigisoft&pass=********&sender=Sender ID&phone=Mobile No&text=Test SMS&priority=Priority&stype=smstype') ?>', {mobile_number: mobile_number}, function(data) {
        alert('OTP sent to your mobile number');
    });
}
</script>

</body>
</html>  -->



