# phpele
php function echo element

<?php

  require_once './function/elephp.php';
  
  $mo=[];    
  
  for($i=0;$i<20;$i++){
      $m['name']=$i;
      $m['age']=$i."old";
      $m['date']=time();
      $m['mdate']="m".time();
      $m['xdate']="x".time();
      $mo[]=$m;
  }
  
  ele_bootstrap();
  
  ele_table($mo,['class'=>'table'],['name','date','date','age']);
  
  
  <h1 class='h1' id='h1' style='color:#FAA'>hello world</h1>
  
  equal
  
  ele_s('h1',['class'=>'h1','id'=>'h1','style'=>'color:#FAA']);
  
    echo 'hello world!';
  
  ele_e('h1')
  
  or
  
  ele_q('h1',['class'=>'h1','id'=>'h1','style'=>'color:#FAA'],"hello world");
