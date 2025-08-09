<?php
session_start();

// If already logged in, go to redirect page
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: redirect2.php");
    exit;
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $validEmail = "Blessing@blessing.com";
    $validPassword = "Oh Blessing";

    if ($email === $validEmail && $password === $validPassword) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = "Blessing";
        header("Location: redirect2.php");
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty of Computing - Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        h1 { margin-bottom: 5px; color: #333; }
        h2 { margin-bottom: 20px; font-weight: normal; color: #666; }
        .input-group {
            position: relative;
            margin-bottom: 20px;
        }
        .input-group input {
            width: 100%;
            padding: 12px 40px;
            border: 1px solid #ccc;
            border-radius: 25px;
            outline: none;
            font-size: 14px;
        }
        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            font-size: 16px;
        }
        .login-btn {
            width: 100%;
            padding: 12px;
            background: #4facfe;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }
        .login-btn:hover {
            background: #00c6ff;
            transform: scale(1.05);
        }
        .register-link {
            margin-top: 15px;
            font-size: 14px;
        }
        .register-link a {
            color: #4facfe;
            text-decoration: none;
            font-weight: bold;
        }
        .error-message {
            color: red;
            font-size: 13px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Faculty of Computing</h1>
        <h2>Member Login</h2>

        <?php if ($error) echo "<p class='error-message'>$error</p>"; ?>

        <form method="POST">
            <div class="input-group">
                <i class="fa-solid fa-user"></i>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>

        
    </div>
</body>
</html>