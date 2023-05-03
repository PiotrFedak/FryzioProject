<?php

use PHP\Classes\Books;
use PHP\Classes\Students;
use PHP\Functions\Book_Reservation;

require "./vendor/autoload.php";

$user=new Students(1,"123","jas@gmail.com",true,0,0);
$book=new Books("Ania i jaś","ewa kwrac",12312312,"erere",1222,true);

$rezerwacja=new Book_Reservation($user,$book);
$rezerwacja->BookReservation();


?>