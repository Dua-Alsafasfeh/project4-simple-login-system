<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sign up page</title>
</head>

<body class="signupbody">
    <!-- ----------------header---------- -->
    <header>
        <nav>
            <div id="logo"><img src="./images/logo.png" alt="logo"></div>
        </nav>
    </header>
    <!-- -------------------main--------- -->
    <main class="signupmain">
        <div class="signupmain1">
        <div class="signuptable">
            <table class="table" cellspacing="10">
                <form action="" id="regform">
                    <tr>
                        <td><label id="register">REGISTRATION</label> </td>
                        <td><hr></td>
                    </tr>
                    <!-- <tr class="row1"></tr> -->
                    <tr>
                        <td class="label">
                            <label for="user">User Name:</label>
                        </td>
                        <td class="input">
                            <input type="text" id="user" class="user">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="uerr"></div>
                        </td>
                    </tr>
                    <!-- ////////////////// -->
                    <tr>
                        <td class="label">
                            <label for="first">First Name:</label>
                        </td>
                        <td class="input">
                            <input type="text" id="first" class="first">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div id="ferr"></div>
                        </td>
                    </tr>
                    <!-- ////////////////// -->
                    <!-- <tr class="row2"></tr> -->
                    <tr>
                        <td class="label">
                            <label for="last">Second Name:</label>
                        </td>
                        <td class="input">
                            <input type="text" id="second" class="second">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="serr"></div>
                        </td>
                    </tr>
                    <!-- ////////////////////// -->
                    <tr>
                        <td class="label">
                            <label for="third">Third Name:</label>
                        </td>
                        <td class="input">
                            <input type="text" id="third" class="third">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="therr"></div>
                        </td>
                    </tr>
                    <!-- ////////////////////// -->
                    <tr>
                        <td class="label">
                            <label for="last">Last Name:</label>
                        </td>
                        <td class="input">
                            <input type="text" id="last" class="last">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="lerr"></div>
                        </td>
                    </tr>
                    <!-- ////////////////////// -->
                    <tr>
                        <td class="label">
                            <label for="date">Date of Birth:</label>
                        </td>
                        <td class="input">
                            <input type="date" id="date" class="date">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div id="derr"></div>
                        </td>
                    </tr>
                    <!-- ///////////////////// -->
                    <tr>
                        <td class="label">
                            <label for="mail">Email:</label>
                        </td>
                        <td class="input">
                            <input type="email" id="mail" class="mail">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="merr"></div>
                        </td>
                    </tr>
                    <!--///////////////////////////-->
                    <tr>
                        <td class="label">
                            <label for="mobile">Mobile Number:</label>
                        </td>
                        <td class="input">
                            <input type="text" id="mobile" class="mobile">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="moberr"></div>
                        </td>
                    </tr>
                    <!-- ////////////////////// -->
                    <tr>
                        <td class="label">
                            <label for="pass">Password:</label>
                        </td>
                        <td class="input">
                            <input type="password" id="pass" class="pass">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="perr"></div>
                        </td>
                    </tr>
                    <!-- ////////////////////////// -->
                    <tr>
                        <td class="label">
                            <label for="cpass">Confirm Password:</label>
                        </td>
                        <td class="input">
                            <input type="password" id="cpass" class="cpass">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="cperr"></div>
                        </td>
                    </tr>
                    <!--///////////////////////-->
                </form>
            </table>
        </div>
        <div class="btn3">
            <button type="button" id="btn3">Sign UP</button>
        </div>
        <div class="p1">
            <p id="p1">Already have an account ?<span class="bold">Login</span></p>
        </div>
    </div>
    </main>
</body>

</html>