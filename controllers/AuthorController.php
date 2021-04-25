<?php
  // file: controllers/AuthorController.php

  require_once('models/Author.php');

  class AuthorController extends Controller {

    public function index() {  
      return view('author/index',
       ['authors'=>Author::all(),
        'title'=>'Authors List']);
    }

    public function show($id) {
      $auth = Author::find($id);
      return view('author/show',
        ['author'=>$auth,
         'title'=>'Author Detail']);
    }

    public function create() {
      return view('author/create',
        ['title'=>'Author Create']);
    }  

    public function store() {
      $author = Input::get('author');
      $nationality = Input::get('nationality');
      $birth_year = Input::get('birth_year');
      $fields = Input::get('fields');
      $item = ['author'=>$author,'nationality'=>$nationality,
               'birth_year'=>$birth_year,'fields'=>$fields];
       Author::create($item);
      return redirect('/author');
    }
    
    public function edit($id) {
      $auth = Author::find($id);
      return view('author/edit',
        ['author'=>$auth,
         'title'=>'Author Edit']);
    }
    
    public function update($_,$id) {
      $author = Input::get('author');
      $nationality = Input::get('nationality');
      $birth_year = Input::get('birth_year');
      $fields = Input::get('fields');
      $item = ['author'=>$author,'nationality'=>$nationality,
               'birth_year'=>$birth_year,'fields'=>$fields];
      Author::update($id,$item);
      return redirect('/author');
    } 
    
    public function destroy($id) {  
      Author::destroy($id);
      return redirect('/author');
    }
    
  }
?>