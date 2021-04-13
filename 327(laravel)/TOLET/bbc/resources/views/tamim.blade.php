<?php
include('F:\Fall2020\cse327-sec03 (NBM)\Project_Basha-bhara-chai(to_let)MickyMouse\fall2020.cse327.3.11\TOLET\bbc\resources\views\simple_html_dom.php');

//$html = file_get_html('https://www.bproperty.com/en/dhaka/apartments-for-rent/');


$url = "https://www.bproperty.com/en/dhaka/apartments-for-rent/";
$html = file_get_html($url);
$dom = new domDocument ;
@$dom->loadHTML($html);



//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$tamimhasans = array("", "", "","", "", "","", "", "","", "", "","", "", "","", "","", "", "","", "");

// $con=mysqli_connect('127.0.0.1','root','','laravel_bbc');



$titles= $html->find('h2._7f17f34f',0);

// DB::delete('delete from houseads');
$t=2;
$m=1;
 $i=0;
 $j=0;
 $k=0;
foreach($tamimhasans as $tamimhasans){
  

$titles= $html->find('h2._7f17f34f',$i)->plaintext;
echo $titles;
$costs= $html->find('span.f343d9ce',$i)->plaintext;

$localareas= $html->find('div._7afabd84',$i)->plaintext;

$pictus= $html->find('picture._219b7e0a',$j)->innertext;
echo $pictus;
$beds= $html->find('span.b6a29bc0',$k)->plaintext;

$baths= $html->find('span.b6a29bc0',$m)->plaintext;

$sizes= $html->find('span.b6a29bc0',$t)->plaintext;


DB::insert('insert into houseads (  title,	cost,	area,	pic,	bed,	bath,	size) values ( ?,?, ?,?, ?,?, ?)', [$titles,$costs,$localareas
 ,$pictus,$beds,$baths,$sizes]);

echo "<br/>";

  $t=$t+3;
  $m=$m+3;
  $k=$k+3;
  $j=$j+2;
  $i++;
}
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


?>