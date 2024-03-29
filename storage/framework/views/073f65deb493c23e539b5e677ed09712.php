

<?php $__env->startSection('main-body'); ?>
    <h1 class="mt-4"><?php echo e($title); ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/pelanggan"><?php echo e($title); ?></a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
              </svg>
            Tambah Data
        </div>
        <div class="card-body">
            <form action="/pelanggan" method="post">
                <?php echo csrf_field(); ?>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="pel_id_gol" class="form-label">Golongan</label>
                        <select name="pel_id_gol" id="pel_id_gol" class="form-select">
                            <?php $__currentLoopData = $dataGolongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowGolongan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(old('pel_id_gol') == $rowGolongan->id): ?>
                                    <option value="<?php echo e($rowGolongan->id); ?>" selected><?php echo e($rowGolongan->gol_nama); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($rowGolongan->id); ?>"><?php echo e($rowGolongan->gol_nama); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="pel_id_user" class="form-label">User</label>
                        <select name="pel_id_user" id="pel_id_user" class="form-select">
                            <?php $__currentLoopData = $dataUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(old('pel_id_user') == $rowUser->id): ?>
                                    <option value="<?php echo e($rowUser->id); ?>" selected><?php echo e($rowUser->user_nama); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($rowUser->id); ?>"><?php echo e($rowUser->user_nama); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3 mt-5">
                    <div class="col-md-2">
                        <label for="no" class="form-label">No Pelanggan</label>
                        <input type="text" name="pel_no" class="form-control <?php $__errorArgs = ['pel_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="no" placeholder="Input no" value="<?php echo e(old('pel_no')); ?>" required>
                        <?php $__errorArgs = ['pel_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback" id="no">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="pel_nama" class="form-control" id="nama" placeholder="Input nama" value="<?php echo e(old('pel_nama')); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="pel_alamat" class="form-label">Alamat</label>
                        <textarea name="pel_alamat" id="pel_alamat" class="form-control" placeholder="Input alamat" required><?php echo e(old('pel_alamat')); ?></textarea>
                    </div>
                </div>
                <div class="row mb-3 mt-5">
                    <div class="col-md-6">
                        <label for="pel_hp" class="form-label">No HP</label>
                        <input type="text" name="pel_hp" class="form-control" id="pel_hp" placeholder="Input no hp" value="<?php echo e(old('pel_hp')); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pel_ktp" class="form-label">No KTP</label>
                        <input type="text" name="pel_ktp" class="form-control" id="pel_ktp" placeholder="Input no ktp" value="<?php echo e(old('pel_ktp')); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="pel_seri" class="form-label">No Seri</label>
                        <input type="text" name="pel_seri" class="form-control" id="pel_seri" placeholder="Input no seri" value="<?php echo e(old('pel_seri')); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label for="pel_ktp" class="form-label">Meteran</label>
                        <input type="number" min="0" name="pel_meteran" class="form-control" id="pel_meteran" placeholder="Input meteran" value="<?php echo e(old('pel_meteran')); ?>" required>
                    </div>
                </div>
    
                <div class="row mt-5">
                    <div class="col d-flex justify-content-center">
                        <a href="/pelanggan" class="btn btn-secondary">
                            Back
                        </a>
                        <button type="submit" class="btn btn-success ms-2">Simpan</button>
                        <button type="reset" class="btn btn-primary ms-2">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ary\quiz-reza\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>