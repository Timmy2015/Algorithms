 <?php
 //get random numbers
    // $arrs=array();
    // for($i=0;$i<100;$i++){
    //     //mt:Mersenne Twister speed is 4times to libc
    //      $arrs[]=mt_rand(0,100);
    // }
    // sort($arrs);
    // shuffle($arrs);
    
    //get random but repeat method 1
    //  $n=10;
    //  $offset=97;
    //  $arr=range(1,10000,5);
    //  shuffle($arr);
    //  $arrs=array_slice($arr,$offset,$n);
    //  sort($arrs);
     
     //get random but repeat method 2
    //  $numbers = range(1, 20);
   /* //  srand((float)microtime() * 1000000);*/
    //  shuffle($numbers);
     /*list()把数组中的值赋给一些变量
     each()返回{键名为0，1，key和 value}数组中当前的键／值对并将数组指针向前移动一步，在执行 each() 之后，
     数组指针将停留在数组中的下一个单元或者当碰到数组结尾时停留在最后一个单元!
     */
    //  while (list(, $number) = each($numbers))
    //  {
    //   echo "$number ";
    //  } 
     
    //  get random but repeat method 3
    $arrs = array();
    $n=10;
     while (count($arrs) < $n)
        {
          $arrs[] = mt_rand(5,10000);
    //array_unique() 先将值作为字符串排序，然后对每个值只保留第一个遇到的键名
          $arrs = array_unique($arrs);
        }
        //join as implode mean break Array to a string 
        //print as echo just can output string & variable but Array
        echo join(',',$arrs);
    //  var_dump($numbers);