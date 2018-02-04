<?php $__env->startSection('icerik'); ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Blog</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                                <form method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                                    <?php echo e(csrf_field()); ?>

                                    
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"> Kategoriler </label>     
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <select class="form-control" name="ust_kategori">
                                                                <option value="0"> Ust Kategori</option>
                                                             <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                                                                <option value="<?php echo e($kategori->id); ?>"> <?php echo e($kategori->ad); ?></option>
                                                                    <?php $__currentLoopData = $kategori->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $altkategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($altkategori->id); ?>"><?php echo e($kategori->ad); ?> --> <?php echo e($altkategori->ad); ?></option>
                                                                            <?php $__currentLoopData = $altkategori->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $altaltkategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option value="<?php echo e($altaltkategori->id); ?>"><?php echo e($kategori->ad); ?> --><?php echo e($altkategori->ad); ?> --> <?php echo e($altaltkategori->ad); ?></option>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                </div>
                                            </div>

                                            <?php echo e(Form::bsText('ad', 'Kategori Adı')); ?> 

                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                </div>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="/js/jquery.form.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/messages_tr.min.js"></script>
<script src="/js/sweetalert2.min.js"></script>

<script>

    $(document).ready(function(){
        // formumuzun id'sine 'form' verdik ve o isimle cektik
        $('form').validate();
        $('form').ajaxForm({

            // Controller'dan response geriye döndürdük
            success:function(response){
                swal(
                    response.baslik,
                    response.icerik,
                    response.durum
                )                            
            }
        });
    });

</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<link href="/css/sweetalert2.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>