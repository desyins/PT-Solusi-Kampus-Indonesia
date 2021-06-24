<?php

$angka = 1;

while($angka <= 100){
    if($angka % 3 == 0){
        echo 'Foo';
    }
    elseif ($angka % 5 == 0) {
        echo 'Bar';
    }
    elseif($angka % 3 == 0 && $angka % 5 == 0){
        echo 'FooBar';
    }
    else{
    	echo $angka;
    }
    echo '<br/>';
    $angka++;
}

?>