<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        const BASE_URL = "<?php echo e(url('/')); ?>/";
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(url('css/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('css/feed.css')); ?>">
    <script src="<?php echo e(url('js/index.js')); ?>" defer></script>
    <script src="<?php echo e(url('js/post.js')); ?>" defer></script>
    
</head>
<body>
    <header>
    <div class="navContainer">
     <h2 class="email">Feed</h2>
     <nav class="navigation">
   
        <div class="dropDown"><ion-icon name="menu"></ion-icon></div>
        <div class="container">
        <a href="<?php echo e(url('home')); ?>">Feed</a>
        <a href="<?php echo e(url('create')); ?>">Create</a>
        <a href="<?php echo e(url('profile')); ?>">Profile</a>
        <a href="saved.php">Saved</a>
        <button class="btnLogin-popup">Logout</button>
        </div>
    </nav>
    </div>
    </header>
    



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\HomeWork\resources\views/home.blade.php ENDPATH**/ ?>