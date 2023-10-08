<!DOCTYPE html>
<html lang="en">
<head>
<script>
        const BASE_URL = "{{ url('/') }}/";
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <link rel="stylesheet" href="{{url('css/post.css')}}">
    <script src="{{ url('js/index.js') }}" defer></script>
    <script src="{{ url('js/create.js') }}" defer></script>
    
</head>
<body>
<header>
    <div class="navContainer">
    <h2 class="email">Create</h2>
    <nav class="navigation">
    <div class="dropDown"><ion-icon name="menu"></ion-icon></div>
    <div class="container">
    <a href="{{ url('home') }}">Feed</a>
        <a href="{{ url('create')}}">Create</a>
        <a href="{{ url('profile') }}">Profile</a>
        <a href="saved.php">Saved</a>
        <button class="btnLogin-popup">Logout</button>
        </div>
    </nav>
    </div>
    </header>
    <div class="create-post">
        <div class="selection-container">
                <div class="image-search">
                    <input type="text" class="post-input">
                    <button class="btn-post">SEARCH</button>
                </div>
                    <div class="image-container"></div>
                    <button class="btn-continue">Continue</button>
        </div>
            

    </div>




    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>