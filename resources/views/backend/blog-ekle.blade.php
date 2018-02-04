@extends('backend.app')

@section('icerik')

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

                                    {{ csrf_field() }}
                                    
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"> Resimler </label>     
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="file" name="resimler[]" multiple class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> Kategori </label>     
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <select class="form-control" name="kategori">
                                                            <option value="0"> Diğer</option>
                                                         @foreach ($kategoriler as $kategori)
            
                                                            <option value="{{ $kategori->id }}"> {{ $kategori->ad }}</option>
                                                                @foreach ($kategori->children as $altkategori)
                                                                    <option value="{{ $altkategori->id }}">{{ $kategori->ad }} --> {{ $altkategori->ad }}</option>
                                                                        @foreach ($altkategori->children as $altaltkategori)
                                                                            <option value="{{ $altaltkategori->id }}">{{ $kategori->ad }} -->{{ $altkategori->ad }} --> {{ $altaltkategori->ad }}</option>
                                                                        @endforeach
                                                            @endforeach
                                                        @endforeach
                                                    </select>
                                            </div>
                                        </div>
                                            {{ Form::bsText('baslik', 'Başlık') }} 
                                            {{ Form::bsText('kisaicerik', 'Kısa İcerik') }} 
                                            {{ Form::bsText('etiketler', 'Etiketler') }} 
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"> İçerik </label>     
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                   <textarea name="icerik" cols="30" rows="10" class="ckeditor form-control col-md-7 col-xs-12"></textarea> 
                                                </div>
                                            </div>

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

@endsection


@section('js')
<script src="/js/jquery.form.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/messages_tr.min.js"></script>
<script src="/js/sweetalert2.min.js"></script>
<script src="/js/ckeditor/ckeditor.js"></script>
<script src="/js/ckeditor/config.js"></script>

<script>

    $(document).ready(function(){
        // formumuzun id'sine 'form' verdik ve o isimle cektik
        $('form').validate();
        $('form').ajaxForm({
            beforeSubmit:function(){
                swal({
                    title : '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span>',
                    text  : 'Yükleniyor Lütfen Bekleyin ...',
                    showConfirmButton : false
                })
            },
            beforeSerialize:function(){
                for (instance in CKEDITOR.instances)CKEDITOR.instances[instance].updateElement();
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
@endsection

@section('css')
<link href="/css/sweetalert2.min.css" rel="stylesheet">
@endsection