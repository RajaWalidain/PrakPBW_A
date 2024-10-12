<!DOCTYPE html>
<html>
<head>
    <title>Komentar Buku Tamu</title>
</head>
<body>
    <h1>Komentar dari Para Tamu</h1>

    <?php if($data->isEmpty()): ?>
        <p>Belum ada komentar.</p>
    <?php else: ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
                <strong><?php echo e($item->nama_pengunjung); ?></strong> berkata:<br>
                <p><?php echo e($item->komentar); ?></p>
                <small>Waktu: <?php echo e($item->created_at); ?></small>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <br>
    <a href="<?php echo e(route('home')); ?>">Kembali ke Halaman Utama</a>
</body>
</html>

<?php /**PATH C:\laragon\www\belajar-laravel\resources\views/bukutamu/show.blade.php ENDPATH**/ ?>