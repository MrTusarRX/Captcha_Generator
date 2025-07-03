<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Example Captcha</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      padding: 20px;
    }
    
    form {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    
    #ae_captcha_api {
      background-color: #f0f0f0;
      padding: 15px;
      border-radius: 4px;
      margin-bottom: 20px;
      text-align: center;
      font-size: 24px;
      letter-spacing: 3px;
      font-weight: bold;
      color: #333;
      border: 1px solid #ddd;
    }
    
    input[type="text"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 16px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }
    
    input[type="text"]:focus {
      border-color: #4a90e2;
      outline: none;
      box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.2);
    }
    
    input[type="submit"] {
      background-color: #4a90e2;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
      transition: background-color 0.3s;
    }
    
    input[type="submit"]:hover {
      background-color: #3a7bc8;
    }
    
    .form-title {
      text-align: center;
      color: #333;
      margin-bottom: 25px;
      font-size: 24px;
    }
    
    .input-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
      font-weight: 500;
    }
  </style>
</head>
<body>

  <form method="POST" action="validate.php">
    <h1 class="form-title">Verify Captcha</h1>
    <div class="input-group">
      <label for="captcha">Captcha Code</label>
      <div id="ae_captcha_api"></div>
    </div>
    <div class="input-group">
      <label for="user_input">Enter the code above</label>
      <input type="text" id="user_input" name="user_input" placeholder="Enter Captcha" required />
    </div>
    <div>
      <input type="submit" value="Submit" />
    </div>
  </form>

  <script src="./captcha-generator/asset/main.js"></script>

</body>
</html>
