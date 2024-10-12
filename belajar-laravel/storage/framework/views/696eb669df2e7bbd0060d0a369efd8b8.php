<!DOCTYPE html>
<html>
<head>
    <title>Isi Buku Tamu</title>
</head>
<body>
    <h1>Isi Buku Tamu</h1>

    <?php if($errors->any()): ?>
        <div style="color:red;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('bukutamu.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="nama_pengunjung">Nama:</label><br>
        <input type="text" id="nama_pengunjung" name="nama_pengunjung" value="<?php echo e(old('nama_pengunjung')); ?>"><br><br>
        <label for="komentar">Komentar:</label><br>
        <textarea id="komentar" name="komentar"><?php echo e(old('komentar')); ?></textarea><br><br>
        <button type="submit">Kirim</button>
    </form>
    <br>
    <a href="<?php echo e(route('home')); ?>">Kembali ke Halaman Utama</a>
</body>
</html>
<?php /**PATH C:\laragon\www\belajar-laravel\resources\views/bukutamu/create.blade.php ENDPATH**/ ?>