<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class PagesController extends BaseController
{
   public function home(){
        return view('index');
   }
        public function index()
        {
            $data = new PostModel;
            return view('posts/welcome',['posts'=>$data->findAll()]);
       }
       public function show($id){
        $data = new PostModel;
        return view('posts/show',['post'=>$data->find($id)]);
       }
    
    public function about()
    {
        return view('about');
    }
    
    public function create()
    {
        return view('create');
        //$this->form_validation->set_rules('firstname', 'Name', 'required');
        
        // $rules = [
        //     'firstname' => 'required|min_length[3]',
        //     'lastname' => 'required|min_length[3]',
        //     'email' => 'required|valid_email',
        //     'phonenumber' => 'required|numeric|max_length[8]'
        // ];
        // if($this->validate($rules)){
        //     $formModel = new PostModel;
        //     $data = [
        //         'firstname' => $this->request->getVar('firstname'),
        //         'lastname' => $this->request->getVar('lastname'),
        //         'email'  => $this->request->getVar('email'),
        //         'phonenumber'  => $this->request->getVar('phonenumber'),
        //     ];
        //     $formModel->save($data);
        //     return redirect()->to('/posts/welcome');
        // }else{
        //     $data['validation'] = $this->validator;
        //     echo view('create', $data);
        // }        
       
       
    }
    public function store(){
        //helper(['form', 'url']);
        
        $page = new PostModel();
        $data=[
            "email" => $this->request->getPost("email"),
            "first_name" => $this->request->getPost("first_name"),
            "last_name" => $this->request->getPost("last_name"),
            "number" => $this->request->getPost("Phone-Number"),

        ];
         $page->save($data);
        return redirect()->to(base_url('posts/welcome'))->with('status','Created Successfully');
       
    }
    public function edit($id)
    {
        $data = new PostModel();
        $find['post'] = $data->find($id);
        return view('posts/edit',$find);
    }
    public function update($id)
    {
        $find = new PostModel();
        $find->find($id);
        $data=[
            "email" => $this->request->getPost("email"),
            "first_name" => $this->request->getPost("first_name"),
            "last_name" => $this->request->getPost("last_name"),
            "number" => $this->request->getPost("Phone-Number"),

        ];
        $find->update($id, $data);
        return redirect()->to(base_url('posts/welcome'))->with('status','updated successfully');
    }
    public function delete($id = null)
    {
         $delete = new PostModel();
        $delete->delete($id);
        return redirect()->to(base_url('posts/welcome'))->with('status','Deleted successfully');
    //     $delete = $model->where('id', $id)->delete();
     }
}
