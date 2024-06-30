<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
    
        
        try {
            
            Log::channel('postback_url')->info('called Offer link: [Request] => '. print_r($request->all(), true) . ' [Name] => ' . print_r($name, true) . ' [Offer id] =>  ' . $offer_id);
            
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        // dd($name, $offer_id, $request->all());

        $offer = Offer::find($offer_id);
        $link = $offer->link;

        return redirect($link);

    }
  
}
