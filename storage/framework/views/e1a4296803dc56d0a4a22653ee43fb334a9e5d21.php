 

<?php $__env->startSection('icerik'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kategoriler </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ad</th>
                                    <th>Ust Kategori</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($kategori->id); ?></th>
                                        <td><?php echo e($kategori->ad); ?></td>
                                        <td><?php echo e($kategori->ust_kategori); ?></td>
                                        <td><button class="btn btn-xs btn-danger">Sil</button></td>
                                    </tr>  
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php $__env->stopSection(); ?> 
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?> 


<?php $__env->startSection('css'); ?>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>