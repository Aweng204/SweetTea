<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Sweettea</title>
    <link rel="stylesheet" href="../css/login.css">
    <script defer src="../js/regLogin.js" type="text/javascript"> </script>
    
</head>
<body>
    
    <header>

        <div class="head">
            <div class="sweetteas">
                <img src="../img/login/sweettea logo.png" alt="SweetTea Logo">
            </div>
            <div class="tabs">
                <a href="#">HOME</a>
                <a href="#">ABOUT US</a>
                <a href="#">MENU</a>
                <a href="#" id="coloredsignin">SIGN IN</a>
            </div>
        </div>

    </header>
    
    <img id="cuplove" src="../img/login/cuplove1.png" alt="a cup of love">
    <img id="vector3" src="../img/login/Vector 3.png" alt="a cup of love">
    <img id="vector4" src="../img/login/Vector 4.png" alt="a cup of love">

    <div class="centerbox">
        <div class="formcontent">
            
            <div class="welcometext">
                <p id="wsttext">Welcome to SweetTea</p>
                <p id="wscaption">Sign In to Continue</p>
            </div>
            
            <div id="formbox">

                <form id="form" action="../includes/login.inc.php" method="post">
                   
                    <div class="labelandbox">
                        <div class="input-control"> 
                            <label for="username" class="userlbl">Username:</label><br>
                            <input type="text" id="username" size="50" maxlength="50"  class="textbox" name="username"><br>
                            <small id="error-user"> &nbsp;</small> <br>
                        </div>

                        <div class="input-control"> 
                            <label for="password" class="cpasslbl">Password:</label><br>
                            <input type="password" id="password" size="50" maxlength="16" class="textbox" name="password"><br>
                            <small>&nbsp;</small> <br>
                        </div>
                    </div>

                    <div id="signupbttn">
                        <button type="submit" id="submit" name="submit"> Sign In </button>
                    </div>
                    
                    <div class="formfooter">
                        <div class="forget">
                            <a href="#" id="forgot">Forgot Password?</a>
                        </div>
                        
                        <div class="signup">
                           <p> Don't have an account?&nbsp<a href="reg.php">Sign Up</a> </p>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <img id="cuplove2" src="../img/login/cuplove.png" alt="a cup of love">

</body>

</html>