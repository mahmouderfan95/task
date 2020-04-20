<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\frontEnd\employies\Store;
use Image;
use App\Employies;
class employeController extends Controller
{
    public function getRegister(){
        return view('frontEnd.employe.registerEmploye');
    }
    public function employePostRegister(Store $request){
        $employeData = $request->all();
        $employeData['password'] = bcrypt($request->password);
        /* upload img **/
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/employe/' . $request->image->hashName()));
            $employeData['image'] = $request->image->hashName();
        }
        /* upload img **/

        Employies::create($employeData);
        return redirect()->route('employeRegister')->with('sucMsg','Register successfuly');
        // return dd($request->all());
    }
}
