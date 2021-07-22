<?php
namespace Core;

class H
{
    public static function dnd($data) {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die();
    }
    
    public static function dnc($data) {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
    }
    
    public static function weekDays() {
        $weekday = [
            "Mon"=>"Monday",
            "Tue"=>"Tuesday",
            "Wed"=>"Wednesday",
            "Thr"=>"Thursday",
            "Fri"=>"Friday",
            "Sat"=>"Saturday",
            "Sun"=>"Sunday"
        ];
        return $weekday;
    }
    
    public static function months() {
        $month = [
            "Jan"=>"January",
            "Feb"=>"Febuary",
            "Mar"=>"March",
            "Apr"=>"April",
            "May"=>"May",
            "Jun"=>"June",
            "Jul"=>"July",
            "Aug"=>"August",
            "Sep"=>"September",
            "Oct"=>"October",
            "Nov"=>"November",
            "Dec"=>"December"
        ];
        return $month;
    }
    public static function monthsIndex() {
        $month = [
            "01"=>"Jan",
            "02"=>"Feb",
            "03"=>"Mar",
            "04"=>"Apr",
            "05"=>"May",
            "06"=>"Jun",
            "07"=>"Jul",
            "08"=>"Aug",
            "09"=>"Sep",
            "10"=>"Oct",
            "11"=>"Nov",
            "12"=>"Dec"
        ];
        return $month;
    }

    public static function dateDiff($date = null){
        if(!$date) return NULL;
        $current_date_time = date_create();
        $prev_date_time = date_create($date);
        $diff = date_diff($current_date_time, $prev_date_time);
        if ($diff->y != 0){
            return ($diff->y>1)? $diff->y . " Years Ago": $diff->y. " Year Ago";
        }elseif ($diff->m != 0) {
            return ($diff->m>1)? $diff->m . " Months Ago": $diff->m. " Month Ago";
        }elseif ($diff->d != 0) {
            return ($diff->d>1)? $diff->d . " Days Ago": $diff->d. " Day Ago";
        }elseif ($diff->h != 0) {
            return ($diff->h>1)? $diff->h . " Hours Ago": $diff->h. " Hour Ago";
        }elseif ($diff->i != 0) {
            return ($diff->i>1)? $diff->i . " Minutes Ago": $diff->i. " Minuite Ago";
        }elseif ($diff->s != 0) {
            return ($diff->s>1)? $diff->s . " Seconds Ago": $diff->s. " Second Ago";
        }
    }

    public static function formatTime($date_time){
        return date("H:i A", strtotime($date_time));
    }
    
    public static function dayNight() {
        $daynight = [
            "Am"=>"AM",
            "Pm"=>"PM"
        ];
        return $daynight;
    }
    
    public static function currentPage() {
        $currentPage = $_SERVER['REQUEST_URI'];
        if($currentPage == PROOT || $currentPage == PROOT.'home/index') {
            $currentPage = PROOT . 'home';
        }
        return $currentPage;
    }
    
    public static function getObjectProperties($obj) {
        return get_object_vars($obj);
    }

    public static function limit_text($text, $limit){
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }
}
