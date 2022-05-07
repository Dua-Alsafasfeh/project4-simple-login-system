<?php
session_start();
$admin_arr =array(
    'fullname' => 'Duaa Ibrahim Abd-Alqader Alsafasfeh',
    'email'=> 'Duaa@gmail.com',
    'password'=> 'Dd12345@',

);
$fullname = $admin_arr['fullname'];
$adminemail = $admin_arr['email'];
$adminpass = $admin_arr['password'];

$filename = 'landingpage.php';
if (file_exists($filename)) {
  $DCreated = date ("F d Y H:i:s.", filemtime($filename));
  	// somefile.txt was last changed: December 29 2020 22:16:23.
}
$Dlastlogin = date ("H : i : s - d/m/y") .(60 * 24 * 60 * 60 + time());
?>


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

        <div class="usercontainer">
            <div>
                <img src="./images/adminicon.png" alt="admin icon" id="usericon">
            </div>
            <div>
                <table class="usertable">
                    <tr>
                        <th>Full Name :</th>
                        <td> <?php if (isset($fullname)) {
                                    echo $fullname;
                                } ?> </td>
                    </tr>
                    <tr>
                        <th>E-mail :</th>
                        <td> <?php if (isset($adminemail)) {
                                    echo $adminemail;
                                } ?></td>
                    </tr>
                    <tr>
                        <th> Password :</th>
                        <td><?php if (isset($adminpass)) {
                                    echo $adminpass;
                                } ?></td>
                    </tr>
                    <tr>
                        <th>Date Created:</th>
                        <td> <?php if (isset($DCreated)) {
                                    echo $DCreated;
                                } ?> </td>
                    </tr>
                    <tr>
                        <th>Date last login:</th>
                        <td> <?php if (isset($Dlastlogin)) {
                                    echo $Dlastlogin;
                                } ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="logout">
            <button type="button" id="btn1"><a href="landingpage.php" style="color:#205375">Log out</a></button>
        </div>
    </main>
</body>

</html>