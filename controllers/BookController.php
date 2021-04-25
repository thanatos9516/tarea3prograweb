<?php
  // file: controllers/BookController.php

  require_once('Book.php');

  class BookController extends Controller {

    public function index() {  
      return view('book/index',
       ['books'=>Book::all(),
        'title'=>'books List']);
    }

    public function show($id) {
      $bok = Book::find($id);
      return view('book/show',
        ['book'=>$bok,
         'title'=>'Book Detail']);
    }

    public function create() {
      return view('book/create',
        ['title'=>'Book Create']);
    } 

    public function store() {
      $title = Input::get('title');
      $edition = Input::get('edition');
      $copyright = Input::get('copyright');
      $language = Input::get('language');
      $pages = Input::get('pages');
      $autores_id = Input::get('autores_id');
      $editoriales_id = Input::get('editoriales_id');
      $item = ['title'=>$title,'edition'=>$edition,
               'copyright'=>$copyright,'language'=>$language,
               'pages'=>$pages, 'autores_id'=>$autores_id, 'editoriales_id'=>$editoriales_id];
       Book::create($item);
      return redirect('/book');
    }
    
    public function edit($id) {
      $bok = Book::find($id);
      return view('book/edit',
        ['book'=>$bok,
         'title'=>'Book Edit']);
    }
    
    public function update($_,$id) {
      $title = Input::get('title');
      $edition = Input::get('edition');
      $copyright = Input::get('copyright');
      $language = Input::get('language');
      $pages = Input::get('pages');
      $autores_id = Input::get('autores_id');
      $editoriales_id = Input::get('editoriales_id');
      $item = ['title'=>$title,'edition'=>$edition,
               'copyright'=>$copyright,'language'=>$language,
               'pages'=>$pages, 'autores_id'=>$autores_id, 'editoriales_id'=>$editoriales_id];
      Book::update($id,$item);
      return redirect('/book');
    } 
    
    public function destroy($id) {  
      Book::destroy($id);
      return redirect('/book');
    }
  }
?>