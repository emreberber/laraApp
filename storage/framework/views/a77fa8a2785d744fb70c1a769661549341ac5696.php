 

<?php $__env->startSection('icerik'); ?>

<?php

$sayi = 0;

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Blog Düzenle</h3>
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
          <div class="x_title">
            <h2>Plain Page</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">

              <?php $__currentLoopData = $resimler = Storage::disk('uploads')->files('img/blog/'.$bloglar->slug); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
              
              <div class="col-md-55">
                  <div class="thumbnail">
                    <div class="image view view-first">
                      <img style="width: 100%; display: block;" src="/uploads/<?php echo e($resim); ?>" alt="image" />
                      <div class="mask">
                        <div class="tools tools-bottom">
                          <form method="post" action="" id="form">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="resim" value="<?php echo e($resim); ?>">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                  $sayi++;
                ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            <form method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

              <?php echo e(csrf_field()); ?>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"> Yeni Resim Ekle </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" name="resimler[]" multiple class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <?php echo e(Form::bsText('baslik', 'Başlık', $bloglar->baslik)); ?> 
              <?php echo e(Form::bsText('etiketler', 'Etiketler', $bloglar->etiketler)); ?>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12"> İçerik </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea name="icerik" cols="30" rows="10" class="ckeditor form-control col-md-7 col-xs-12"><?php echo e($bloglar->icerik); ?></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <input type="hidden" name="sayi" value="<?php echo e($sayi); ?>">
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
<!-- /page content -->

<?php $__env->stopSection(); ?> <?php $__env->startSection('js'); ?>
<script src="/js/jquery.form.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/messages_tr.min.js"></script>
<script src="/js/sweetalert2.min.js"></script>
<script src="/js/ckeditor/ckeditor.js"></script>
<script src="/js/ckeditor/config.js"></script>

<script>
  $(document).ready(function () {
    // formumuzun id'sine 'form' verdik ve o isimle cektik
    $('form').validate();
    $('form').ajaxForm({
      beforeSubmit: function () {
        swal({
          title: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>',
          text: 'Yükleniyor Lütfen Bekleyin ...',
          showConfirmButton: false
        })
      },
      beforeSerialize: function () {
        for (instance in CKEDITOR.instances) CKEDITOR.instances[instance].updateElement();
      },
      // Controller'dan response geriye döndürdük
      success: function (response) {
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