<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class OfferController extends Controller
{
    public function index(){
        $offers = Offer::all();
        return view('admin.offer.view', compact('offers'));
    }

    public function create(){
        return view('admin.offer.create');
    }

    public function store(Request $request){
        $data = $request->all();

        $user_id = auth()->user()->id;

        $name = $data['name'];
        $amount = $data['amount'];
        $status = $data['status'];
        $link = $data['link'];
        
        try {
            
            Offer::create([
                'user_id' => $user_id,
                'name' => $name,
                'amount' => $amount,
                'link' => $link,
                'status' => $status
            ]);
            return redirect(route('admin.offer.view'))->with('message', 'Offer created successfully.');
        } catch (\Throwable $th) {
            return redirect(route('admin.offer.view'))->with('message', $th->getMessage());
        }

    }
}
