<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="top">
                    <div class="row">
                        <div class="col">
                            <h2>e-vaccines</h2>
                        </div>
                        <div class="col-5">
                            <ul>
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="#">LOGIN</a></li>
                                <li><a href="#">ABOUT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header><br>
        <center>
        <div class="imo">
        <img src="logo.svg" height="130px" width="130px" style="padding-bottom: 8px;">
        </div><br>
        <div class="content"><br><br>
            <form action="logindb.php">
                <input type="text" placeholder="Enter your username" class="bar" name="user"><br><br><br>
                <input type="password" placeholder="Enter your password" class="bar" name="pass"><br><br>
                <label class="fld"><a href="#" style="text-decoration: none"><b>Forget Password?</b></a></label><br><br>
                <input type="submit" value="Login" class="but"><br><br>
            </form>
            <label class="fld" style="color: blueviolet">Don't have an account?
                    <a href="#" style="text-decoration: none" data-bs-toggle="modal" data-bs-target="#mymodal"><b>Register</b></a>
            </label>
            <div class="modal fade" id="mymodal">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #00ccff">
                    <div class="modal-header">
                        <h2 class="modal-title" style="color: white">Sign Up</h2>
                        <button class="btn-close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="newdb.php">
                            <div class="mt-2">
                                <input type="text" placeholder="Enter your name" class="form-control" name="name" required style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="text" placeholder="Mobile Number or Email id" class="form-control" name="mobile" required style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="text" placeholder="Enter your Username" class="form-control" required name="user" style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="password" placeholder="New Password" class="form-control" required name="pass" style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="number" placeholder="Enter your Age" class="form-control" required name="age" style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                                <input type="text" placeholder="Date of Birth" class="form-control" required name="dob" style="letter-spacing: 1px">
                            </div>
                            <div class="mt-4">
                            <label class="form-label" style="padding-right: 30px;color: white">Gender?</label><br>
                            <b style="color: white">Female </b><input type="radio" placeholder="female" name="gender" value="female">
                            <b style="color: white">Male </b><input type="radio" placeholder="male" name="gender" value="male">
                            <b style="color: white">Custom </b><input type="radio" placeholder="other" name="gender" value="other"><br><br>
                            </div>
                            </div>
                    <div class="modal-footer">
                        <input type="submit" value="Sign up" class="but">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </center><br><br>
        <div class="last">
            <h5>For Grievances and Feedback :<br> evaccine@gmail.com<br><br>
            PH : 0481-27631<br><br>
            Privacy Policy | Terms of Service<br><br>
            Copyright © 2021 e-vaccine. All Rights Reserved
            </h5> 
        </div>
    </body>
</html>
