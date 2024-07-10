<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PostbackURLController extends Controller
{
    public function index($company, $uid){
        
        // $request->headers->set('Accept', 'application/json');
        Log::channel('postback_url')->info('Request Process Post back URL called here. ');
        Log::channel('postback_url')->info(print_r($_GET, true));

        $data = $_GET;

        DB::table('testing_data')->insert([
            'user_id' => $uid,
            'company' => $company,
            'data' => json_encode($data),
        ]);

    }

    public function offer_link(Request $request, $name, $offer_id){
    
        
        try {
            
            Log::channel('postback_url')->info('called Offer link: [Request] => '. print_r($request->all(), true) . ' [Name] => ' . print_r($name, true) . ' [Offer id] =>  ' . $offer_id);
            
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        // dd($name, $offer_id, $request->all());

        $offer = Offer::find($offer_id);
        $link = $offer->link;
        if(str_contains($link, '[clickid]')){
            $click_id = Str::random(16);
            $link = str_replace('[click_id]', $click_id, $link);
        }
        Log::channel('postback_url')->info('Offer link -> ' . $link);
        return redirect($link);
    }

  
}
