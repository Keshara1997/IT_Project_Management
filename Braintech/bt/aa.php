<?php

$no1  = 13;
$no2  = 10;
$no3  = 5;


if($no1  > $no2){
	if($no1 > $no3){
        echo $no1;
    }else{
        echo $no3;
    }
}else if($no2 > $no3){
    echo $no2;
}else{
    echo $no3;
}
		