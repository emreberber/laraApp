 

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
                        <div class="x_content">

                            <form method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                                <?php echo e(csrf_field()); ?>


                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Ekleme </th>
                                            <th>Başlık</th>
                                            <th>Yazar</th>
                                            <th>Kategori</th>
                                            <th>Hit</th>
                                            <th>Yorumlar</th>
                                            <th>Sil</th>
                                            <th>Düzenle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sira=1;
                                        ?>

                                        <?php $__currentLoopData = $bloglar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                        

                                        <tr>
                                            <td><?php echo e($blog->created_at); ?></td>
                                            <td><?php echo e($blog->baslik); ?></td>
                                            <td><?php echo e($blog->yazar); ?></td>
                                            <td><?php echo e($blog->kategori); ?></td>
                                            <td><?php echo e($blog->hit); ?></td>
                                            <td></td>
                                            <td>
                                                <form action="" method="post" id="form" name="form">
                                                    <?php echo e(csrf_field()); ?>

                                                    <input type="hidden" name="slug" value="<?php echo e($blog->slug); ?>">
                                                    <input type="hidden" name="sira" value="<?php echo e($sira); ?>" id="sira">
                                                    <input type="submit" onclick="sil(this, '<?php echo e($blog->slug); ?>' )" class="btn btn-xs btn-danger" value="Sil">
                                                </form>
                                            </td>
                                            <td>
                                                <a href="blog/blog-duzenle/<?php echo e($blog->slug); ?>"  class="btn btn-xs btn-success">Düzenle</a>
                                            </td>
                                        </tr>
                                        <?php
                                        $sira++;
                                        ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
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
<!-- Datatables -->
<script src="/js/jquery.form.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/messages_tr.min.js"></script>
<script src="/js/sweetalert2.min.js"></script>
<script src="/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="/backend/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
<script src="/backend/vendors/jszip/dist/jszip.min.js"></script>
<script src="/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/backend/vendors/pdfmake/build/vfs_fonts.js"></script>


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
                    if(response.durum == 'success'){
                        var form = document.getElementById("form");
                        var sira = form.elements[2].value;
                        document.getElementById("datatable-buttons").deleteRow(sira);
                    }                       
                }
                
            });
        });
    
    </script>

<script>
    $(document).ready(function () {
        var handleDataTableButtons = function () {
            if ($("#datatable-buttons").length) {
                $("#datatable-buttons").DataTable({
                    dom: "Bfrtip",
                    buttons: [{
                            extend: "copy",
                            className: "btn-sm"
                        },
                        {
                            extend: "csv",
                            className: "btn-sm"
                        },
                        {
                            extend: "excel",
                            className: "btn-sm"
                        },
                        {
                            extend: "pdfHtml5",
                            className: "btn-sm"
                        },
                        {
                            extend: "print",
                            className: "btn-sm"
                        },
                    ],
                    responsive: true
                });
            }
        };

        TableManageButtons = function () {
            "use strict";
            return {
                init: function () {
                    handleDataTableButtons();
                }
            };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
            keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });

        $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
            'order': [
                [1, 'asc']
            ],
            'columnDefs': [{
                orderable: false,
                targets: [0]
            }]
        });
        $datatable.on('draw.dt', function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-green'
            });
        });

        TableManageButtons.init();
    });
</script>
<!-- /Datatables -->
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('css'); ?>
<!-- Datatables -->
<link href="/backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="/backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="/backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="/backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="/backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<link href="/css/sweetalert2.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>