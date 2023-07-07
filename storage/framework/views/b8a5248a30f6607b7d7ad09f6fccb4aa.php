

<?php $__env->startSection('main-body'); ?>
    <h1 class="mt-4"><?php echo e($title); ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/golongan"><?php echo e($title); ?></a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
              </svg>
            Edit Data
        </div>
        <div class="card-body">
            <form action="/golongan/<?php echo e($dataGolongan->id); ?>" method="post">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>

                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" name="gol_kode" class="form-control <?php $__errorArgs = ['gol_kode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kode" placeholder="Input kode" value="<?php echo e(old('gol_kode', $dataGolongan->gol_kode)); ?>" required>

                        <?php $__errorArgs = ['gol_kode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback" id="kode">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-5">
                        <label for="nama" class="form-label">Nama Golongan</label>
                        <input type="text" name="gol_nama" class="form-control" id="nama" placeholder="Input nama" value="<?php echo e(old('gol_nama', $dataGolongan->gol_nama)); ?>" required>
                    </div>
                </div>
    
                <div class="row mt-5">
                    <div class="col d-flex justify-content-center">
                        <a href="/golongan" class="btn btn-secondary">
                            Back
                        </a>
                        <button type="submit" class="btn btn-success ms-2">Simpan</button>
                        <button type="reset" class="btn btn-primary ms-2">Refresh</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ary\quiz-muara\resources\views/golongan/edit.blade.php ENDPATH**/ ?>