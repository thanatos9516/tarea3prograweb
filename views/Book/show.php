<!DOCTYPE html>
<!-- file: views/professor/show.php -->
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/normalize.css">
<link rel="stylesheet" href="/css/skeleton.css">
</head>
<body>
 <div class="container">
  <div class="row">
   <div class="eleven column" style="margin-top: 10%">
    <h2><?php echo $title ?></h2>
    <form>
     <div class="row">
      <div class="six columns">
       <label for="nameInput">Name</label>
       <input class="u-full-width" type="text" readonly
          id="name" value="<?php echo $book['name']; ?>">
      </div>
      <div class="six columns">
       <label for="authorInput">Author</label>
       <input class="u-full-width" type="text" readonly
          id="author" value="<?php echo $book['author']; ?>">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="publisherInput">Publisher</label>
       <input class="u-full-width" type="text" readonly
          id="publisher" value="<?php echo $book['publisher']; ?>">
      </div>
     <a class="button button-primary" href="/book">Back</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
