<?php $__env->startSection('icerik'); ?>

<div role="main" class="main">

    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Post</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-9">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post">
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

                            <h2><a href="blog-post.html"><?php echo e($blog->baslik); ?></a></h2>

                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                            </div>

                            <blockquote><?php echo e($blog->kisaicerik); ?></blockquote>

                            

                            <p> <?php echo e($blog->icerik); ?> </p>

                            <div class="post-block post-share">
                                <h3><i class="fa fa-share"></i>Share this post</h3>

                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style ">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                                <!-- AddThis Button END -->

                            </div>

                            <div class="post-block post-author clearfix">
                                <h3><i class="fa fa-user"></i>Author</h3>
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                        <img src="img/avatar.jpg" alt="">
                                    </a>
                                </div>
                                <p><strong class="name"><a href="#">John Doe</a></strong></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
                            </div>

                            <div class="post-block post-comments clearfix">
                                <h3><i class="fa fa-comments"></i>Comments (3)</h3>

                                <ul class="comments">
                                    <?php $__currentLoopData = $blog->yorumlar->where('ust_yorum', '0'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $yorum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                   
                                    <li>
                                        <div class="comment">
                                            <div class="img-thumbnail">
                                                <img class="avatar" alt="" src="img/avatar-2.jpg">
                                            </div>
                                            <div class="comment-block">
                                                <div class="comment-arrow"></div>
                                                <span class="comment-by">
                                                    <strong>
                                                        <?php if($yorum->kullanici_id>0): ?>
                                                            <?php echo e($yorum->user->name); ?>

                                                            <?php else: ?>
                                                                <?php echo e($yorum->isim); ?>

                                                        <?php endif; ?>
                                                    </strong>
                                                    <span class="pull-right">
                                                        <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                    </span>
                                                </span>
                                                <p><?php echo e($yorum->icerik); ?></p>
                                                <span class="date pull-right"><?php echo e($yorum->created_at); ?></span>
                                            </div>
                                        </div>

                                        <ul class="comments reply">
                                            <?php $__currentLoopData = $yorum->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $altyorum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                            
                                            <li>
                                                <div class="comment">
                                                    <div class="img-thumbnail">
                                                        <img class="avatar" alt="" src="img/avatar-3.jpg">
                                                    </div>
                                                    <div class="comment-block">
                                                        <div class="comment-arrow"></div>
                                                        <span class="comment-by">
                                                            <strong>
                                                                <?php if($altyorum->kullanici_id>0): ?>
                                                                    <?php echo e($altyorum->user->name); ?>

                                                                    <?php else: ?>
                                                                        <?php echo e($altyorum->isim); ?>

                                                                <?php endif; ?>
                                                            </strong>
                                                            <span class="pull-right">
                                                                <span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
                                                            </span>
                                                        </span>
                                                        <p><?php echo e($altyorum->icerik); ?></p>
                                                        <span class="date pull-right"><?php echo e($altyorum->created_at); ?></span>
                                                    </div>
                                                </div>
                                            </li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
                                </ul>

                            </div>

                            <div class="post-block post-leave-comment">
                                <h3>Leave a comment</h3>

                                <form action="" method="post" id="form">
                                    <?php echo e(csrf_field()); ?>

                                    <?php if(!Auth::check()): ?>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Your name *</label>
                                                <input type="text" value="" maxlength="100" class="form-control" name="isim" id="name">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Your email address *</label>
                                                <input type="email" value="" maxlength="100" class="form-control" name="mail" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label>Comment *</label>
                                                <textarea maxlength="5000" rows="10" class="form-control" name="icerik" id="comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </article>

                </div>
            </div>

            <?php echo $__env->make('frontend.blog-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>

    </div>

</div>


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
                beforeSubmit:function(){

                },
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
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>