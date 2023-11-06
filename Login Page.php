<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        .container {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body style="background-color:floralwhite;">
    <div class="container" style="margin-top:15%; background-image: url('https://th.bing.com/th?id=OIP.iR-L3h8p33r7B8Dn80Lh3AHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2');">
        <img src="loginbg.png" alt="Coffee" width="25%" height="25%">
        <h2 style="font-family:calibri; color:blue;">Log In </h2>
        <form action="Admin Page.php" method="POST">

                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <div class="buttons" style=margin-top:10px;>
                <button type="submit" class="login-button" style="height: 40px; width:100px; background-color:lightskyblue; font-size:15px;"><b>Login</b></button>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
                <label>
                    <input type="checkbox"> Remember Me
                </label>
                <a href="#">Forgot Password?</a>
            </div>
            <div class="buttons" style="margin-top: 10px;">
        </form>
    </div>
</body>

</html>