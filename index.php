<html>
    <head>
        <title>Library - Home</title>
        <!--<script>
            function userlogin() {
                console.log("User login called");
                var username = document.getElementById("username").value;
                var pwd = document.getElementById("pwd").value;
                console.log(username);
            };
        </script>-->
        <script type="text/javascript" src="js/index.js"></script>
    </head>
    <body>
        <h3 align="center">Welcome to My Library Management Console!!!</h3>
        <form name = "login" method="post" action="php/uservalidation.php">
            <div class="login" id="login" align="center">
                Username: <input type="text" name="username" id="username"></br></br>
                Password: <input type="password" name="pwd" id="pwd"></br></br>
                <input type="submit" value="Login">
            </div>
        </form>
    </body>
</html>