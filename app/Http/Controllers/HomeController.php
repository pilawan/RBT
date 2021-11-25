<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
   

    public function store(){

        return view('admin/store');

    }
    public function company(){

        return view('admin/company');

    }
   
   
    public function index(Request $request){

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

        return view('admin/regisShop', compact('data', 'data_tatal', 'search'));

    }

    public function users(Request $request){

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
    //    dd($collection);
        $data = $this->paginate($collection['items'], $perPage);
        $data_tatal = $collection['items'];
        $search = $request->search;
        return view('admin/regisShop', compact('data', 'data_tatal', 'search'));
    }

   

    public function blog_detail($userId){
        
             $response = Http::accept('application/json')->get('https://merchant.siamtheatre.com/api/v1/merchant/temp/'.$userId);

                $collection = collect(json_decode($response, true));
                // dd($collection); 
                // $data = $this->paginate($collection['items'], $perPage);
                $data = $collection;
                // dd($collection['services']);
                // $search = $request->search;
         return view('admin/information',  compact('data'));
    }
   
    public function paginate($items, $perPage, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}







?>