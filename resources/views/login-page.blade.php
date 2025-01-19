<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image" href="images/soda_logo.png">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar flex js-navbar"></nav>

    <main>
        <div class="login-container">
            <div class="toggle-bar flex">
                <button id="signInBtn" class="active" onclick="import('./scripts/login.js').then(loginJS => loginJS.showForm('signIn'))">Sign In</button>
                <button id="registerBtn" onclick="import('./scripts/login.js').then(loginJS => loginJS.showForm('register'))">Sign Up</button>
            </div>

            <div class="scale">
                <div class="card" id="card">
                    <div class="login flex active" id="signInForm">
                        <div class="heading">Sign In</div>
                        <form action="" class="form flex">
                            <input required="" class="inputField" type="email" name="email" id="email" placeholder="E-mail">
                            <input required="" class="inputField" type="password" name="password" id="password" placeholder="Password">
                            <span class="forgot-password"><a href="#">Forgot Password?</a></span>
                            <input class="login-button" type="submit" value="Sign In">
                        </form>
            
                        <div class="social-account-container">
                            <span class="title">Or Sign in with</span>
                            <div class="social-accounts flex">
                                <button class="social-button flex google">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512">
                                    <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                                    </svg></button>
                                <button class="social-button flex apple">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                    <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                                    </svg>
                                </button>
                                <button class="social-button flex twitter">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
            
                        <span class="agreement"><a href="#">User Licence Agreement</a></span>
                    </div>
            
                    <div class="register flex" id="registerForm">
                        <div class="heading">Register</div>
                        <form action="" class="form flex">
                            <input required="" class="inputField" type="name" name="firstName" id="firstName" placeholder="First Name">
                            <input required="" class="inputField" type="name" name="lastName" id="lastName" placeholder="Last Name">
                            <input required="" class="inputField" type="tel" name="phone" id="phone" placeholder="+23400-0000-0000">
                            <input required="" class="inputField" type="email" name="email" id="email" placeholder="E-mail">
                            <input required="" class="inputField" type="password" name="password" id="password" placeholder="Password">
                            <input class="login-button" type="submit" value="Sign In">
                        </form>
            
                        <div class="social-account-container">
                            <span class="title">Or Sign in with</span>
                            <div class="social-accounts flex">
                                <button class="social-button flex google">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512">
                                    <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                                    </svg></button>
                                <button class="social-button flex apple">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                    <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                                    </svg>
                                </button>
                                <button class="social-button flex twitter">
                                    <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
            
                        <span class="agreement"><a href="#">User Licence Agreement</a></span>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="flex js-footer"></footer>

    <script type="module" src="/scripts/login.js"></script>
</body>
</html>