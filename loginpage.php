<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login page</title>
</head>

<body class="loginbody">
    <main class="loginmain">
        <div class="pop" id="pop">
            <div>
                <img src="./images/login.webp">
            </div>
            <div class="parent">
                <div class="loghead">
                    <h2>LOGIN</h2>
                    <p id="p2">Welcome back! Login With Your Credentials</p>
                </div>
                <form action="">
                    <div class="inp">
                        <input type="email" id="email" placeholder="Email" class="iconmail" required>
                    </div>

                    <div class="inp">
                        <input type="password" id="password" placeholder="Password" class="iconpass" required>
                    </div>
                    <p id="erroruser"></p>
                    <div class="butt">
                        <button type="button" class="button" id="button">Login</button>
                    </div>
                    <div class="p2">
                        <p id="p2">Don't have an account ?<span class="bold">Sign Up</span></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>