@extends('backend.app') 

@section('icerik')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kategoriler </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ad</th>
                                    <th>Ust Kategori</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategoriler as $kategori)
                                    <tr>
                                        <th scope="row">{{ $kategori->id }}</th>
                                        <td>{{ $kategori->ad }}</td>
                                        <td>{{ $kategori->ust_kategori }}</td>
                                        <td><button class="btn btn-xs btn-danger">Sil</button></td>
                                    </tr>  
                                @endforeach
                                                           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection 
@section('js')

@endsection 


@section('css')
 @endsection