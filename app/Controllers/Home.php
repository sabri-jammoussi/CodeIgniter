<?php

namespace App\Controllers;

use App\Models\PostModel;
class Home extends BaseController
{
   
    public function show($id){
        $data = new PostModel;
        return view('posts/show',['post'=>$data->find($id)]);
       }

    
}
