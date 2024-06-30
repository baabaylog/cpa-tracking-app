<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostbackURLController extends Controller
{
    public function index(Request $request){
        
        $request->headers->set('Accept', 'application/json');
        
        $user_id = @$_GET['uid'];
        $company = @$_GET['comp'];
        $data = $request->all();

        DB::table('testing_data')->insert([
            'user_id' => $user_id,
            'company' => $company,
            'data' => json_encode($data),
        ]);

    }


    public function offer_link(Request $request, $name, $offer_id){

        dd($name, $offer_id, $request->all());
    }
  
}
