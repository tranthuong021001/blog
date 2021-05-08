<?php
namespace App\Http\Controllers;


//controller fontend web cũ
// class FrontendController extends Controller
// {
//     public function index(){
//         return view('layouts.index');
//     }

//     public function extendsMaster(){
//         return view('layouts.master');
//     }

// }


//controller fontend web mới
class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function extendsMaster(){
        return view('frontend.master');
    }

}



?>
