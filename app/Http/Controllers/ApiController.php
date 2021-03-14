<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Html;
class ApiController extends Controller
{
    //
    public function create(Request $request){
        $html = new Html();
        $html->popup_code = $request->input('popup_code');
        $html->popup_html = $request->input('popup_html');
        $html->save();
        return response()->json($html);

    }

    public function show(Request $request){
        $htmls = Html::all();
        return response()->json($htmls);
    }


    public function showById($id){
        $html = Html::find($id);
        return response()->json($html);
    }

}
