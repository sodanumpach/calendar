<?php
class calendar{

    public function showDay($date,$month){
        $date = "2021-$month-$date';
        $unixTimeatamp = strtotime($date);
        $dayOfweek = date("1",$unixTimeatamp);
        return $dayOfweek;
    }

}