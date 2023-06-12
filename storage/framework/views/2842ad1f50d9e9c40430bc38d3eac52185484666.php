<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>">
    <title>HOME-q9production</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
</head>
<body>

        <div class="header">
            <div class="logo">
                <h3><a href="/">Q9Production</a></h3>
            </div>
            <div class="menu">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Gallery</a>
                <a href="">Contact Us</a>
            </div>
        </div>
        <div class="container">
        <?php if($results->isEmpty()): ?>
            <p>No results found.</p>
        <?php else: ?>
            <ul>
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($result->judul_konten); ?></li>
                    <li><?php echo e($result->Author); ?></li>
                    <li><?php echo e($result->isi_konten); ?></li>
                    <li><?php echo e($result->sumber); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>
        </div>
        

</body>
</html><?php /**PATH C:\xampp\htdocs\q9production-project\resources\views/result-event.blade.php ENDPATH**/ ?>