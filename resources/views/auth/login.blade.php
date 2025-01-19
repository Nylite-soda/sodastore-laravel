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
                    <form method="POST" action="{{ route('login') }}" class="form flex">
                        @csrf
                        <input class="inputField" type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}">
                        @error('email')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                        <input class="inputField" type="password" name="password" id="password" placeholder="Password">
                        @error('password')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                        <span class="forgot-password"><a href="{{ route('password.request') }}">Forgot Password?</a></span>
                        <input class="login-button" type="submit" value="Sign In">
                    </form>
                </div>
            
                <div class="register flex" id="registerForm">
                        <div class="heading">Register</div>
                        <form method="POST" action="{{ route('register') }}" class="form flex">
                            @csrf
                            <input class="inputField" type="text" name="firstname" id="firstname" placeholder="First Name" value="{{ old('firstname') }}">
                            @error('firstname')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                            <input class="inputField" type="text" name="lastname" id="lastname" placeholder="Last Name" value="{{ old('lastname') }}">
                            @error('lastname')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                            <input class="inputField" type="tel" name="phone" id="phone" placeholder="+23400-0000-0000" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                            <input class="inputField" type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}">
                            @error('email')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                            <input class="inputField" type="password" name="password" id="password" placeholder="Password">
                            @error('password')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                            <input class="inputField" type="password" id="password-confirm" name="password_confirmation" autocomplete="new-password" placeholder="Confirm password">
                            @error('password_confirmation')
                                <div class="error-message">{{ $message }}</div>
                            @enderror
                            <input class="login-button" type="submit" value="Register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="flex js-footer"></footer>

    <script type="module" src="/scripts/login.js"></script>
</body>
</html>
