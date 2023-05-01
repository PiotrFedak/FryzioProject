<?php
use Functions\Book_Reservation;
use Classes\Users_class\Students;
use Classes\Volume_class\Books;

require "./vendor/autoload.php";




$user=new Students(1,"123","jas@gmail.com",true,0,0);
$book=new Books("Ania i jaś","ewa kwrac",12312312,"erere",1222,true);

$rezerwacja=new Book_Reservation($user,$book);
$rezerwacja->BookReservation();


?>