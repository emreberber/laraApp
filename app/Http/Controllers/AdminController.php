<?php

namespace App\Http\Controllers;

use App\Ayarlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function get_index(){
        return view('backend.index');
    }

    public function get_ayarlar(){
        $ayarlar = Ayarlar::where('id', 1)->select('ayarlar.*')->first();
        return view('backend.ayarlar')->with('ayarlar', $ayarlar);
    }

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
}