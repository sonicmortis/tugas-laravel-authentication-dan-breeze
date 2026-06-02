<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }
        .card-item {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .label {
            font-weight: bold;
            color: #007bff;
            display: inline-block;
            width: 100px;
        }
        .value {
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        .btn-warning {
            background-color: #ffc107;
            color: #333;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Mahasiswa</h1>

        <div class="card">
            <div class="card-item">
                <span class="label">NIM:</span>
                <span class="value"><?php echo e($mahasiswa->nim); ?></span>
            </div>
            <div class="card-item">
                <span class="label">Nama:</span>
                <span class="value"><?php echo e($mahasiswa->nama); ?></span>
            </div>
            <div class="card-item">
                <span class="label">Jurusan:</span>
                <span class="value"><?php echo e($mahasiswa->jurusan); ?></span>
            </div>
            <div class="card-item">
                <span class="label">Angkatan:</span>
                <span class="value"><?php echo e($mahasiswa->angkatan); ?></span>
            </div>
            <div class="card-item">
                <span class="label">Alamat:</span>
                <span class="value"><?php echo e($mahasiswa->alamat ?? '-'); ?></span>
            </div>
            <div class="card-item">
                <span class="label">Dibuat:</span>
                <span class="value"><?php echo e($mahasiswa->created_at->format('d/m/Y H:i')); ?></span>
            </div>
            <div class="card-item">
                <span class="label">Diupdate:</span>
                <span class="value"><?php echo e($mahasiswa->updated_at->format('d/m/Y H:i')); ?></span>
            </div>
        </div>

        <a href="<?php echo e(route('mahasiswas.edit', $mahasiswa->id)); ?>" class="btn btn-warning">Edit</a>
        <a href="<?php echo e(route('mahasiswas.index')); ?>" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html><?php /**PATH D:\Tugas Kuliah\Semester 6\Pemrograman Web\praktikum-6\resources\views/mahasiswas/show.blade.php ENDPATH**/ ?>