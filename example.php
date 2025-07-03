<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Example Captcha</title>
</head>
<body>

  <form method="POST" action="validate.php">
    <div id="ae_captcha_api"></div>
    <div>
      <input type="text" name="user_input" placeholder="Enter Captcha" required />
    </div>
    <div>
      <input type="submit" value="Submit" />
    </div>
  </form>

  <script src="./captcha-generator/asset/main.js"></script>

</body>
</html>
