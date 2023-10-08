<!DOCTYPE html>
<html lang="en">
<head>
<script>
    const BASE_URL = "{{ url('/') }}/";
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <script src="{{ url('js/landing.js') }}" defer></script>
    
</head>
<body>
    <header>
    <div class="navContainer">
    <h2 class="logo">Landing</h2>
    <nav class="navigation">
    <div class="dropDown"><ion-icon name="menu"></ion-icon></div>
    <div class="container">
    <a href="{{ url('home') }}">Feed</a>
        <a href="{{ url('create')}}">Create</a>
        <a href="{{ url('profile') }}">Profile</a>
        <a href="saved.php">Saved</a>
        <button class="btnLogin-popup">Login</button>
        </div>
    </nav>
    </div>
    </header>


    
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close">
        </ion-icon></span>
        
        <div class="form-box login">
            <h2>Login</h2>
            <form method="post" name="login">
                @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" required name="email" value='{{old("email")}}'>
                    <label>Email</label>
                    <small class="EL-err">Error Message</small>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="password">
                    <label>Password</label>
                    <small class="PL-err">Error Message</small>
                </div>
                <button type="submit" class="btn">Login</button>
                <small class="FL-err">Something went wrong</small>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link"> Register </a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form method="post" name = "registration">
                @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="text" required name="r_email" value='{{old("email")}}'>
                    <label>Email</label>
                    <small class="E-err">Error Message</small>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="r_password">
                    <label>Password</label>
                    <small class="P-err">Error Message</small>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="repeat_password">
                    <label>Repeat Password</label>
                    <small class="Rp-err">Error Message</small>
                </div>
                <button type="submit" class="btn-register">Register</button>
                <small class="F-err">Something went wrong</small>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link"> Login </a></p>
                </div>
            </form>
        </div>
    </div>


    
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>