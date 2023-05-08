<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>LOGIN</h1>
        </div>
        <div class="formarea">
            <form action="../backend/auth.php" method="post">
                <div class="formbox">
                    <div class="container">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="container">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                    </div>
                    <div class="tombol">
                        <button type="submit" name="submit" id="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>       
    </div>
</body>
</html>