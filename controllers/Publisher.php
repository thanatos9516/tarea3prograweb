<?php
  // file: Publisher.php

class Publisher extends Model {

  static $publisher = [
    ['id'=>4056,'name'=>'Editorial Costa Rica ','book'=>'C# .Net Developer',
     'author'=>'Juan Perez','phone'=>'8944556'], 
     ['id'=>4056,'name'=>'Editorial Costa Rica ','book'=>'C# .Net Developer',
     'author'=>'Juan Perez','phone'=>'8944556'], 
     ['id'=>4056,'name'=>'Editorial Costa Rica ','book'=>'C# .Net Developer',
     'author'=>'Juan Perez','phone'=>'8944556'], 
     ['id'=>4056,'name'=>'Editorial Costa Rica ','book'=>'C# .Net Developer',
     'author'=>'Juan Perez','phone'=>'8944556'], 
     ['id'=>4056,'name'=>'Editorial Costa Rica ','book'=>'C# .Net Developer',
     'author'=>'Juan Perez','phone'=>'8944556'], 
  ];

  public static function all() { 
    return self::$publishers; 
  }

  public static function find($id) {
    foreach (self::$publishers as $key => $pub)
      if ($pub['id'] == $id) return $pub;
    return [];
  }
}
?>