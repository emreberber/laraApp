<div class="col-md-3">
                <aside class="sidebar">

                    <form>
                        <div class="input-group input-group-lg">
                            <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <hr />

                    <h4>Categories</h4>
                    <ul class="nav nav-list primary push-bottom">
                            <?php $__currentLoopData = $kategoriler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="blog/<?php echo e($kategori->slug); ?>"><?php echo e($kategori->ad); ?></a>
                            </li>
               
                                <?php $__currentLoopData = $kategori->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $altkategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <li>
                                        <a href="blog/<?php echo e($kategori->slug); ?>/<?php echo e($altkategori->slug); ?>"><?php echo e($kategori->ad); ?></a>
                                    </li>
                                        <?php $__currentLoopData = $altkategori->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $altaltkategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a href="blog/<?php echo e($kategori->slug); ?>/<?php echo e($altkategori->slug); ?>/<?php echo e($altaltkategori->slug); ?>"><?php echo e($kategori->ad); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                    <div class="tabs">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#popularPosts" data-toggle="tab">
                                    <i class="fa fa-star"></i> Popular</a>
                            </li>
                            <li>
                                <a href="#recentPosts" data-toggle="tab">Recent</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="popularPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="recentPosts">
                                <ul class="simple-post-list">
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-image">
                                            <div class="img-thumbnail">
                                                <a href="blog-post.html">
                                                    <img src="img/blog/blog-thumb-1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-info">
                                            <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                            <div class="post-meta">
                                                Jan 10, 2013
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <h4>About Us</h4>
                    <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in,
                        auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales
                        in, auctor fringilla libero. </p>

                </aside>
            </div>