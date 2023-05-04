<?php

use PHP\Classes\Books;
use PHP\Classes\Students;
use PHP\Classes\Librarian;
use PHP\Functions\Book_Reservation;
use PHP\Functions\Book_Borrow;

require "./vendor/autoload.php";

$user=new Students(1,"123","jas@gmail.com",true,0,0);
$book=new Books("Ania i jaś","ewa kwrac",12312312,"erere",1222,true);
$bibliotekarz=new Librarian("Ryszard","ryszard420@gmail.com","500492666");

$rezerwacja=new Book_Reservation($user,$book);
$rezerwacja->BookReservation();
echo("").PHP_EOL;
$wypozyczenie=new Book_Borrow($user,$bibliotekarz,$rezerwacja);
$wypozyczenie->BookBorrow();
echo("").PHP_EOL;

?>