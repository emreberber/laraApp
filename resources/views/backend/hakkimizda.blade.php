
@extends('backend.app')

@section('icerik')

 <!-- page content -->
 <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Hakkımızda</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
                <form action=""  method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                    
                    {{ csrf_field() }}
                    
                    {{ Form::bsText('vizyon', 'Vizyon', $hakkimizda->vizyon) }}
                    {{ Form::bsText('misyon', 'Misyon', $hakkimizda->misyon) }}
                    {{ Form::bsText('kisa_yazi', 'Kısa Yazı', $hakkimizda->kisa_yazi) }}

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Açıklama </label>     
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="icerik" rows="10" cols="30" class="form-control col-md-7 col-xs-12">{{ $hakkimizda->icerik }}</textarea>
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
  <!-- /page content -->


@endsection

@section('js')
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
@endsection

@section('css')
<link href="/css/sweetalert2.min.css" rel="stylesheet">
@endsection