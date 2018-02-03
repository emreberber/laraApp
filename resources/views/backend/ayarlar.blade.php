@extends('backend.app') 

{{-- ----- ICERIK ----- --}} 
@section('icerik')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Genel Ayarlar</h3>
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

        <div class="">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#genel_ayarlar" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Genel Ayarlar</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#iletisim_ayarlar" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">İletişim Ayarları</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#sosyal_medya" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sosyal Medya</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#api_ayarlar" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">API Ayarları</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#mail_ayarlar" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Mail Ayarları</a>
                                </li>
                            </ul>


                            <!-- ##### FORM START ##### -->


                            <form method="post" id="form" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                                
                                {{ csrf_field() }}

                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="genel_ayarlar" aria-labelledby="home-tab">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Mevcut Logo </label>     
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <img src="\uploads\img\{{ $ayarlar->logo }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Site Logo </label>     
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" name="logo" class="form-control col-md-7 col-xs-12">
                                                <input type="hidden" name="eski_logo" value="{{ $ayarlar->logo }}" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        {{ Form::bsText('title', 'Title', $ayarlar->title) }}
                                        {{ Form::bsText('keywords', 'Keywords', $ayarlar->keywords) }}
                                        {{ Form::bsText('description', 'Description', $ayarlar->description) }}
                                        {{ Form::bsText('url', 'Url', $ayarlar->url) }}
                                        {{ Form::bsText('author', 'Author', $ayarlar->author) }}

                                    </div>


                                    <div role="tabpanel" class="tab-pane fade" id="iletisim_ayarlar" aria-labelledby="profile-tab">

                                        {{ Form::bsText('tel', 'Telefon', $ayarlar->tel) }}
                                        {{ Form::bsText('gsm', 'GSM', $ayarlar->gsm) }}
                                        {{ Form::bsText('fax', 'Fax', $ayarlar->fax) }}
                                        {{ Form::bsText('mail', 'Mail', $ayarlar->mail) }}
                                        {{ Form::bsText('adres', 'Adres', $ayarlar->adres) }}
                                        {{ Form::bsText('il', 'İl', $ayarlar->il) }}
                                        {{ Form::bsText('ilce', 'İlçe', $ayarlar->ilce) }}

                                    </div>


                                    <div role="tabpanel" class="tab-pane fade" id="sosyal_medya" aria-labelledby="profile-tab">

                                        {{ Form::bsText('facebook', 'Facebook', $ayarlar->facebook) }}
                                        {{ Form::bsText('twitter', 'Twitter', $ayarlar->twitter) }}
                                        {{ Form::bsText('instagram', 'Instagram', $ayarlar->instagram) }}
                                        {{ Form::bsText('youtube', 'Youtube', $ayarlar->youtube) }}

                                    </div>


                                    <div role="tabpanel" class="tab-pane fade" id="api_ayarlar" aria-labelledby="profile-tab">

                                        {{ Form::bsText('google', 'Google Account', $ayarlar->google) }}
                                        {{ Form::bsText('recapctha', 'Recapctha', $ayarlar->recapctha) }}
                                        {{ Form::bsText('maps', 'Maps', $ayarlar->maps) }}  
                                        {{ Form::bsText('analytics', 'Analytics', $ayarlar->analytics) }}

                                    </div>


                                    <div role="tabpanel" class="tab-pane fade" id="mail_ayarlar" aria-labelledby="profile-tab">
                                        
                                        {{ Form::bsText('smtp_user', 'Username', $ayarlar->smtp_user) }}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"> Şifre </label>     
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="password" name="smtp_password" value="{{ $ayarlar->smtp_password }}" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        {{ Form::bsText('smtp_host', 'Host', $ayarlar->smtp_host) }}
                                        {{ Form::bsText('smtp_port', 'Port', $ayarlar->smtp_port) }}

                                    </div>
                                </div>
                                <div class="ln_solid"></div>
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
@endsection {{-- ----- ./ICERIK ----- --}}






{{-- ----- JS ----- --}} 
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

@endsection {{-- ----- ./JS ----- --}}


{{-- ----- CSS ----- --}} 
@section('css')
    <link href="/css/sweetalert2.min.css" rel="stylesheet">
@endsection {{-- ----- ./CSS ----- --}} 