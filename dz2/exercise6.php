<?php
/**
 * Created by PhpStorm.
 * User: ingvar73
 * Date: 12.08.2016
 * Time: 3:25
 */

//echo 'Текущее дата/время в unix: '.time().'<br>';
//echo 'Текущее дата/время #1: '.date('d.m.Y H:i',time()).'<br>';
//echo 'Текущее дата/время #2: '.date('d.m.Y H:i').'<br>';
//echo '=======================================================<br>';
//
//$mt = mktime(0,0,0,0,0,0);
//echo $mt.'<br>';
//echo 'Преобразовано mktime: '.$mt.'<br>';
//echo 'Дата/время: '.date('d.m.Y H:i', $mt).'<br>';
//echo '=======================================================<br>';

$mt = mktime(0,0,0,1,1,1970);
echo $mt.'<br>';
echo 'Преобразовано mktime: '.$mt.'<br>';
echo 'Дата/время: '.date('d.m.Y H:i', $mt).'<br>';
echo '=======================================================<br>';

$mt = mktime(3,0,0,1,1,1970);
echo $mt.'<br>';
echo 'Преобразовано mktime: '.$mt.'<br>';
echo 'Дата/время: '.date('d.m.Y H:i', $mt).'<br>';
echo '=======================================================<br>';