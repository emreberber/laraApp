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
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Large Image</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts">


                      
                    <?php $__currentLoopData = $bloglar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <article class="post post-large"> 

                        <div class="post-image">
                            <div class="owl-carousel" data-plugin-options='{"items":1}'>
                                <?php $__currentLoopData = $resimler = Storage::disk('uploads')->files('img/blog/'.$blog->slug); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div>
                                    <div class="img-thumbnail">
                                        <img class="img-responsive" src="/uploads/<?php echo e($resim); ?>" alt="">
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>

                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>

                        <div class="post-content">

                            <h2>
                                <a href="/blog/<?php if(isset($blog->parent)): ?><?php ( $ustkategori = $blog->parent); ?><?php if(isset($ustkategori->parent)): ?><?php ($ustustkategori = $ustkategori->parent); ?><?php if(isset($ustustkategori->parent)): ?><?php echo e($ustustkategori->parent->slug); ?>/<?php endif; ?><?php echo e($ustkategori->parent->slug); ?>/<?php endif; ?><?php echo e($blog->parent->slug); ?><?php endif; ?>/<?php echo e($blog->slug); ?>"><?php echo e($blog->baslik); ?></a>
                            </h2>
                            <p><?php echo e($blog->kisaicerik); ?></p>

                            <div class="post-meta">
                                <span>
                                    <i class="fa fa-user"></i> By
                                    <a href="#">John Doe</a>
                                </span>
                                <span>
                                    <i class="fa fa-tag"></i>
                                    <a href="#">Duis</a>,
                                    <a href="#">News</a>
                                </span>
                                <span>
                                    <i class="fa fa-comments"></i>
                                    <a href="#">12 Comments</a>
                                </span>
                                <a href="/blog/<?php if(isset($blog->parent)): ?><?php ( $ustkategori = $blog->parent); ?><?php if(isset($ustkategori->parent)): ?><?php ($ustustkategori = $ustkategori->parent); ?><?php if(isset($ustustkategori->parent)): ?><?php echo e($ustustkategori->parent->slug); ?>/<?php endif; ?><?php echo e($ustkategori->parent->slug); ?>/<?php endif; ?><?php echo e($blog->parent->slug); ?><?php endif; ?>/<?php echo e($blog->slug); ?>" class="btn btn-xs btn-primary pull-right">Devamını oku...</a>
                            </div>

                        </div>
                    </article>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <ul class="pagination pagination-lg pull-right">
                        <li>
                            <a href="#">«</a>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">»</a>
                        </li>
                    </ul>

                </div>
            </div>

            <?php echo $__env->make('frontend.blog-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>