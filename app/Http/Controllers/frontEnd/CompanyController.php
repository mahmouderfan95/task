<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\frontEnd\companyies\Store;
use Image;
use App\Companyies;

class CompanyController extends Controller
{
    public function getRegister(){
        return view('frontEnd.company.registerCompany');
    }
    public function companyPostRegister(Store $request){
        $companyData = $request->all();
        $companyData['password'] = bcrypt($request->password);
        /* upload img **/
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/company/' . $request->image->hashName()));
            $companyData['image'] = $request->image->hashName();
        }
        /* upload img **/

        Companyies::create($companyData);
        return redirect()->route('register')->with('sucMsg','Register successfuly');
        // return dd($request->all());
    }
}
