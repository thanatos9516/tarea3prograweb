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
          id="name" value="<?php echo $publisher['name']; ?>">
      </div>
      <div class="six columns">
       <label for="bookInput">Book</label>
       <input class="u-full-width" type="text" readonly
          id="book" value="<?php echo $publisher['book']; ?>">
      </div>
     </div>
     <div class="row">
      <div class="six columns">
       <label for="authorlInput">Email</label>
       <input class="u-full-width" type="text" readonly
          id="author" value="<?php echo $publisher['author']; ?>">
      </div>
      <div class="six columns">
       <label for="phoneInput">Phone</label>
       <input class="u-full-width" type="tel" readonly
         id="phone" value="<?php echo $publisher['phone']; ?>">
      </div>
     <a class="button button-primary" href="/publisher">Back</a>
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
