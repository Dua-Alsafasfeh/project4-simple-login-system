<?php
session_start();
// $filename = 'landingpage.php';
// if (file_exists($filename)) {
//   $DCreated = date ("F d Y H:i:s.", filemtime($filename));
//   	// somefile.txt was last changed: December 29 2020 22:16:23.
// }
// $Dlastlogin = date ("H : i : s - d/m/y") .(60 * 24 * 60 * 60 + time());
?>
<!-- //////////////////////////////HTML///////////////////////////////////////// -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Admin page</title>
</head>

<body>
    <header>
        <nav>
            <div class="adminpic"><img src="./images/admin.jpg" alt="admin pic" id="adminpic"></div>
        </nav>
    </header>
    <main class="adminmain">
        <div class="adminmain1">
            <p id="welcpara">Welcome to Admin Page
            </p>
        </div>

        <div class="usercontaineradmin">
            <div>
                <img src="./images/adminicon.png" alt="admin icon" id="usericon">
            </div>
            <div>
                <table class="usertable">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Account Cration Date</th>
                        <th>Last Login Date</th>
                    </tr>
                    <?php
                    $id = 1;
                    foreach ($_SESSION["userdata"] as $value) {
                        echo "<tr>
                    <td>" . $id . "</td>
                    <td>" . $value["firstname"] . " " . $value["secondname"] . " " . $value["thirdname"] . " " . $value["lasrname"] . "</td>
                    <td>" . $value["email"] . "</td>
                    <td>" . $value["password"] . "</td>
                    <td>" . $value["creationdate"] . "</td>
                    <td>" . $value["lastlogindate"] . "</td>
                </tr>";
                echo($value["email"]);
                        $id++;
                    }
                    
                    ?>
                </table>
            </div>
        </div>
        <div class="logoutadmin">
            <button type="button" id="btn1"><a href="landingpage.php" style="color:#205375">Log out</a></button>
        </div>
    </main>
    <br>
    <hr style="font-weight: 10px; color:black">
</body>
</html>