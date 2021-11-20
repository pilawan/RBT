<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function regis(){
        return view('regisShop');
    }
    public function inform(){

        $response = Http::accept('application/json')->get('https://merchant.siamtheatre.com/api/v1/merchant/register',
        [
            'Page' => 1,
            'PageSize' => 100
        ]);
        $perPage = 10;
        $collection = collect(json_decode($response, true));
        $search = '';
        $data = $this->paginate($collection['items'], $perPage);
        $data_tatal = $collection['items'];

        return view('regisShop', compact('data', 'data_tatal', 'search'));

    }

    public function users(){
        $response = Http::accept('application/json')->get('https://merchant.siamtheatre.com/api/v1/merchant/register',
        [
            'Page' => 1,
            'PageSize' => 100,
            'Keyword' => $request->search
        ]);
        if(isset($request->totalshow)){
            $perPage = $request->totalshow;
        }else{
            $perPage = 10;
        }
        
        $collection = collect(json_decode($response, true));
        
        $data = $this->paginate($collection['items'], $perPage);
        $data_tatal = $collection['items'];
        $search = $request->search;
        return view('regisShop', compact('data', 'data_tatal', 'search'));
    }
}
?>