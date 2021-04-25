<?php
  // file: controllers/PublisherController.php

  require_once('Publisher.php');

  class PublisherController extends Controller {

    public function index() {  
      return view('publisher/index',
       ['publishers'=>Publisher::all(),
        'title'=>'publishers List']);
    }

    public function show($id) {
      $pub = Publisher::find($id);
      return view('publisher/show',
        ['publisher'=>$pub,
         'title'=>'Publisher Detail']);
    }
  
    public function create() {
      return view('publisher/create',
        ['title'=>'Publisher Create']);
    } 

    public function store() {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $item = ['publisher'=>$publisher,'country'=>$country,
               'founded'=>$founded,'genere'=>$genere];
       Publisher::create($item);
      return redirect('/publisher');
    }
    
    public function edit($id) {
      $pub = Publisher::find($id);
      return view('publisher/edit',
        ['publisher'=>$pub,
         'title'=>'Publisher Edit']);
    }
    
    public function update($_,$id) {
      $publisher = Input::get('publisher');
      $country = Input::get('country');
      $founded = Input::get('founded');
      $genere = Input::get('genere');
      $item = ['publisher'=>$publisher,'country'=>$country,
               'founded'=>$founded,'genere'=>$genere];
      Publisher::update($id,$item);
      return redirect('/publisher');
    } 
    
    public function destroy($id) {  
      Publisher::destroy($id);
      return redirect('/publisher');
    }
  }
?>