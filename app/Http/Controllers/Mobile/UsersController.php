<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends BaseController
{
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->yas = $request->yas;
        $user->sehir_id = $request->sehir_id;
        $user->meslek_id = $request->meslek_id;
        $user->medeni_hali = $request->medeni_hali;
        $user->boy = $request->boy;
        $user->kilo = $request->kilo;
        $user->goz_rengi = $request->goz_rengi;
        $user->calistigi_kurum = $request->calistigi_kurum;
        $user->amac = $request->amac;
        $user->photo = $request->photo;
        $user->resim_durum = 0;
        $user->user_durum = 1;
        $user->save;
        if($user)
        {
            return $this->sendResponse("Başarıyla eklendi",["user" => $user]);
        }else{
            return $this->sendError("Bir hata oluştu");
        }


    }

    public function login(Request $request)
    {


    }

    public function registerControl(Request $request)
    {

    }

}
