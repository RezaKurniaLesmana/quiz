

<?php $__env->startSection('main-body'); ?>
    <h1 class="mt-4"><?php echo e($title); ?></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/pelanggan"><?php echo e($title); ?></a></li>
        <li class="breadcrumb-item active">Index</li>
    </ol>
    
    <?php if(session()->has('berhasil')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo session('berhasil'); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pelanggan
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a href="/pelanggan/create">
                        <button class="btn btn-success">Tambah Data</button>
                    </a>

                </div>
            </div>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Golongan</th>
                      <th scope="col">No Pelanggan</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">No HP</th>
                      <th scope="col">No KTP</th>
                      <th scope="col">No Seri</th>
                      <th scope="col">Meteran</th>
                      <th scope="col">Aktif</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $dataPelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <th scope="row"><?php echo e($row->id); ?></th>
                      <td><?php echo e($row->golongan->gol_nama); ?></td>
                      <td><?php echo e($row->pel_no); ?></td>
                      <td><?php echo e($row->pel_nama); ?></td>
                      <td><?php echo e($row->pel_alamat); ?></td>
                      <td><?php echo e($row->pel_hp); ?></td>
                      <td><?php echo e($row->pel_ktp); ?></td>
                      <td><?php echo e($row->pel_seri); ?></td>
                      <td><?php echo e($row->pel_meteran); ?></td>
                      <td><?php echo e($row->pel_aktif); ?></td>
                      <td>
                        <a href="/pelanggan/<?php echo e($row->id); ?>/edit" class="badge text-bg-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                        <form action="/pelanggan/<?php echo e($row->id); ?>" method="post" class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
        
                            <button type="submit" class="badge text-bg-danger ms-2 border-0" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        </form>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ary\quiz-reza\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>