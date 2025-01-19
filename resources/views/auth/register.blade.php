<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body style="margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', system-ui, -apple-system, sans-serif; background: #f5f7fa; min-height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div style="width: 100%; max-width: 450px; padding: 20px;">
        <div style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);">
            <h1 style="color: #333; text-align: center; margin-bottom: 30px; font-size: 28px; font-weight: 600;">Create Account</h1>
            <form method="POST" action="{{ route('register') }}" style="display: flex; flex-direction: column; gap: 20px;">
                @csrf
                <!-- First Name -->
                <div style="position: relative;">
                    <input type="text" name="firstname" id="firstname" placeholder="First Name" value="{{ old('firstname') }}" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    @error('firstname')
                        <span style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Last Name -->
                <div style="position: relative;">
                    <input type="text" name="lastname" id="lastname" placeholder="Last Name" value="{{ old('lastname') }}" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    @error('lastname')
                        <span style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Phone -->
                <div style="position: relative;">
                    <input type="tel" name="phone" id="phone" placeholder="+23400-0000-0000" value="{{ old('phone') }}" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    @error('phone')
                        <span style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div style="position: relative;">
                    <input type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    @error('email')
                        <span style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div style="position: relative;">
                    <input type="password" name="password" id="password" placeholder="Password" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                    @error('password')
                        <span style="color: red; font-size: 14px; margin-top: 5px;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div style="position: relative;">
                    <input type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm Password" 
                        style="width: 100%; padding: 15px; border: 2px solid #e1e5ea; border-radius: 8px; font-size: 16px; outline: none; transition: border-color 0.3s ease;">
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                        style="background: #4a90e2; color: white; padding: 15px; border: none; border-radius: 8px; font-size: 16px; font-weight: 600; cursor: pointer; transition: transform 0.2s ease, background-color 0.2s ease;"
                        onmouseover="this.style.background='#357abd'; this.style.transform='translateY(-1px)'"
                        onmouseout="this.style.background='#4a90e2'; this.style.transform='translateY(0)'">
                    Register
                </button>
            </form>

        </div>
    </div>
</body>
</html>