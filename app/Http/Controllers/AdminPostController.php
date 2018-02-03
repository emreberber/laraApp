<?php

namespace App\Http\Controllers;

use App\Ayarlar;
use App\Hakkimizda;
use App\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class AdminPostController extends AdminController
{
    public function post_ayarlar(Request $request){
        if(isset($request->logo)){
            $validator = Validator::make($request->all(), [
                'logo'=>'mimes:jpg,jpeg,png,gif',
            ]);        

            if($validator->fails()){
                return response(['durum'=>'error', 'baslik'=>'Hata', 'icerik'=>'Geçersiz dosya uzantısı.']);
            }

            $logo = Input::file('logo');
            $logo_uzanti = Input::file('logo')->getClientOriginalExtension();
            $logo_isim = 'logo.'.$logo_uzanti;

            Storage::disk('uploads')->makeDirectory('img');
            Image::make($logo->getRealPath())->resize(222, 108)->save('uploads/img/'.$logo_isim);     
        }
        
        try
        {
            // formdan gelen _token degiskeni db'de olmadıgı icin siliyoruz
            unset($request['_token']);

            if(isset($request->logo)){
                unset($request['eski_logo']);      
                // Ayarlar modelini yukarıda import ettik
                $ayarlar = Ayarlar::where('id', 1)->update($request->all()); 
                $ayarlar = Ayarlar::where('id', 1)->update(['logo'=>$logo_isim]); 
                return response(['durum'=>'success', 'baslik'=>'Başarılı', 'icerik'=>'Kayıt başarıyla yapıdı.']);
            }    
            else{
                $eski_logo = $request->eski_logo;
                unset($request['eski_logo']);      
                $ayarlar = Ayarlar::where('id', 1)->update($request->all()); 
                $ayarlar = Ayarlar::where('id', 1)->update(['logo'=>$eski_logo]); 
            }
            return response(['durum'=>'success', 'baslik'=>'Başarılı', 'icerik'=>'Kayıt başarıyla yapıdı.']); 
        }
        catch(Exception $e)
        {
            return response(['durum'=>'error', 'baslik'=>'Hata', 'icerik'=>'Kayıt başarısız oldu.']);
        }   
    }


    public function post_hakkimizda(Request $request){
        try{
            //Hakkimizda::create($request->all()); Kaydetme
            unset($request['_token']);
            Hakkimizda::where('id', 1)->update($request->all());
            return response(['durum'=>'success', 'baslik'=>'Başarılı', 'icerik'=>'Kayıt başarıyla yapıdı.']); 
        }
        catch(Exception $e){
            return response(['durum'=>'error', 'baslik'=>'Hata', 'icerik'=>'Kayıt başarısız oldu.']);
        }
        
    }


    public function post_blog_ekle(Request $request){
        $tarih = str_slug(Carbon::now());
        $slug = str_slug($request->baslik).'-'.$tarih;
        $resimler = $request->file('resimler');
        if(!empty($resimler)){
            $i=0;
            foreach($resimler as $resim){
                $resim_uzanti = $resim->getClientOriginalExtension();
                $resim_isim = $i.'.'.$resim_uzanti;
                Storage::disk('uploads')->makeDirectory('img/blog/'.$slug);
                Storage::disk('uploads')->put('img/blog/'.$slug.'/'.$resim_isim, file_get_contents($resim));
                $i++;
            }
        }

        try{
            unset($request['_token']);
            // Carbon import ettik

            $request->merge(['slug'=>$slug]);
            Blog::create($request->all());
            return response(['durum'=>'success', 'baslik'=>'Başarılı', 'icerik'=>'Kayıt başarıyla yapıdı.']); 
        }
        catch(Exception $e){
            return response(['durum'=>'error', 'baslik'=>'Hata', 'icerik'=>'Kayıt başarısız oldu.']);
        }
        
    }

    public function post_blog_sil(Request $request){
        try{
            Blog::where('slug', $request->slug)->delete();
            Storage::disk('uploads')->deleteDirectory('img/blog/'.$request->slug);
            return response(['durum'=>'success', 'baslik'=>'Başarılı', 'icerik'=>'Silme başarıyla yapıdı.']); 
        }
        catch(Exception $e){
            return response(['durum'=>'error', 'baslik'=>'Hata', 'icerik'=>'Silme başarısız oldu.']);
        }
        
    }
}