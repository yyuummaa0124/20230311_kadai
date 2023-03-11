<?php

namespace App\Http\Controllers;
use App\Models\Inquiry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(){

        return view('index');
    }

    public function create(Request $request){

        $form = $request->all();
        Inquiry::create($form);
        return view('thanks');
    }

}
