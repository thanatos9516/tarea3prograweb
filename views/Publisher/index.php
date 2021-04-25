<!DOCTYPE html>
<!-- file: views/book.php -->
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
     <table>
      <tr><th>Name</th><th>Book</th>
          <th>Author</th><th>Phone</th></tr>
       <?php foreach ($publishers as $pub) { ?>
      <tr><td><a href="publisher/<?php echo $pub['id'] ?>"/>
          <?php echo $pub['name'] ?></a></td>
          <td><a href="publisher/<?php echo $pub['id'] ?>"/>
          <?php echo $pub['book'] ?></a></td>
          <td><a href="author/<?php echo $pub['id'] ?>"/>
          <?php echo $pub['author'] ?></a></td>
          <td><?php echo $pub['phone'] ?></td></tr>
       <?php } ?>
     </table>
     <a class="button button-primary" href="/">Back</a>
     <a class="button button-primary" href="/book">Book</a>
     <a class="button button-primary" href="/author">Author</a>
    </div>
   </div>
 </div>
</body>
