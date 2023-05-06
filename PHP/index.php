<?php

use PHP\Classes\Books;
use PHP\Classes\Date;
use PHP\Classes\Students;
use PHP\Classes\Librarian;
use PHP\Functions\Book_Borrow;
use PHP\Functions\Book_Reservations;
use PHP\Functions\Book_Return;

require "./vendor/autoload.php";
$date=new Date();
$date1=new Date();
$date2=new Date();

$user=new Students(1,"123","jas@gmail.com",true,0,0);
$book=new Books("Ania i jaś","ewa kwrac",12312312,"erere",1222,true);
$bibliotekarz=new Librarian("Ryszard","ryszard420@gmail.com","500492666");


echo("").PHP_EOL;
$rezerwacja=new Book_Reservations($user,$book,$date);
$rezerwacja->BookReservation();
echo("").PHP_EOL;


$date1->Setdate(30,5,2023);
$wypozyczenie=new Book_Borrow($user,$bibliotekarz,$rezerwacja,$date1);
$wypozyczenie->BookBorrow();
echo("").PHP_EOL;

echo("").PHP_EOL;
$date2->Setdate(2,6,2023);
$oddanie=new Book_Return($wypozyczenie,$user,$bibliotekarz,$date2);
$oddanie->ReturnBook();
echo("").PHP_EOL;

?>