<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    //'amanda', 'yoseplin', 'ester','albert'];

    public function index(){
        // var_dump('test');

        $data = [];
        $data['title'] = 'D3 Teknologi Informasi';
        $data['students'] = 
        [
            ['nama'=>'amanda', 'asal'=>'medan'],
            ['nama'=>'yoseplin', 'asal'=>'tarutung'],
            ['nama'=>'ester', 'asal'=>'porsea'],
            ['nama'=>'albert', 'asal'=>'porsea'],
        ];
            


        return view('belajar.index', $data);
    }

    public function store(Request $request){
        // var_dump($request->input('nama'));
        // var_dump($request->input('asal'));
        $data = [
            'nama'=>$request->input('nama'),
            'asal'=>$request->input('asal')
        ];

        BelajarModel::create($data);
    }
}
