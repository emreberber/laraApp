 

<?php $__env->startSection('icerik'); ?>

<div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-10">
                <p class="lead">
                   <?php echo e($hakkimizda->kisa_yazi); ?>

                </p>
            </div>
            <div class="col-md-2">
                <a href="/iletisim" class="btn btn-lg btn-primary push-top">Bize Ulaşın !</a>
            </div>
        </div>

        <hr class="tall">

        <div class="row">
            <div class="col-md-8">
                <h3>
                    <strong>Biz</strong> Kimiz ?</h3>
                    <p><?php echo e($hakkimizda->icerik); ?></p>
            </div>
            <div class="col-md-4">
                <div class="featured-box featured-box-secundary">
                    <div class="box-content">
                        <h4>Behind the scenes</h4>
                        <ul class="thumbnail-gallery flickr-feed" data-plugin-flickr data-plugin-options='{"qstrings": { "id": "93691989@N03" }, "limit": 6}'></ul>
                    </div>
                </div>
            </div>
        </div>

        <hr class="tall">

        <div class="row">
            <div class="col-md-12">
                <h3 class="push-top">
                    <strong>Vizyonumuz</strong>
                </h3>
            </div>
        </div>

        <div class="featured-box">
            <div class="box-content">
                <p><?php echo e($hakkimizda->vizyon); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3 class="push-top">
                    <strong>Misyonumuz</strong>
                </h3>
            </div>
        </div>

        <div class="featured-box">
            <div class="box-content">
                <p><?php echo e($hakkimizda->misyon); ?></p>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>