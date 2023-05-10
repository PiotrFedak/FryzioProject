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
//Scenariusze
$date3=new Date();
$date4=new Date();
$date5=new Date();
$date6=new Date();
$date7= new Date();

$user=new Students(1,"123","jas@gmail.com",true,0,0);
$book=new Books("Ania i jaś","ewa kwrac",12312312,"erere",1222,true);
$bibliotekarz=new Librarian("Ryszard","ryszard420@gmail.com","500492666");


echo("").PHP_EOL;
$rezerwacja=new Book_Reservations($user,$book,$date);
$rezerwacja->BookReservation();
echo("").PHP_EOL;


$date1->Setdate(1,5,2023);
$wypozyczenie=new Book_Borrow($user,$bibliotekarz,$rezerwacja,$date1);
$wypozyczenie->BookBorrow();
echo("").PHP_EOL;

echo("").PHP_EOL;
$date2->Setdate(2,6,2023);
$oddanie=new Book_Return($wypozyczenie,$user,$bibliotekarz,$date2);
$oddanie->ReturnBook();
echo("").PHP_EOL;
$scenariusz;
do {
echo("Wybierz scenariusz: ").PHP_EOL;  
echo("Scenariusz 1: Rezerwacja książki").PHP_EOL;  //MVP
echo("Scenariusz 2: Rezygnacja z Rezerwacji").PHP_EOL;  //empty  
echo("Scenariusz 3: Wypożyczenie kasiązki").PHP_EOL;    //half
echo("Scenariusz 4: Oddanie Ksiązki").PHP_EOL;   
$scenariusz=readline("Podaj numer scenariusza :");
echo("$scenariusz");
}while($scenariusz<1 || $scenariusz>4);
echo("NIgger").PHP_EOL;

if($scenariusz==1){

    do{
        echo("Wybierz rodzaj scenariusza: ").PHP_EOL;
        echo("Scenariusza główny - 1").PHP_EOL; 
        echo("Scenariusza alternatywny przekroczony limit wypożyczeń - 2").PHP_EOL; 
        echo("Scenariusza alternatywny brak możliwości rezerwacji: - 3").PHP_EOL;
        echo("Scenariusza alternatywny nie aktywne konto - 4").PHP_EOL;
        $wybór=readline("Podaj numer scenariusza :");
    }
    while($wybór<1 || $wybór>4);

    echo("OK").PHP_EOL;

    if($wybór==1){
        $user=new Students(1,"123","KAmil@gmail.com",true,0,0);
        $book=new Books("JAk zarobić pieniądze na książce","Jordz Biznes",12312312,"Nowa Era",1999,true);
        echo("").PHP_EOL;
        $date3->Setdate(20,5,2023);
        $rezerwacja=new Book_Reservations($user,$book,$date3);
        $rezerwacja->BookReservation();

    }
    if($wybór==2){
        $user=new Students(2,"123","DArek@gmail.com",true,0,5);
        $book=new Books("W Pustyni i w puszczy","Henryk Sienkiewicz",12312312,"Książkix",2137,true);
        echo("").PHP_EOL;
        $date4->Setdate(15,2,2023);
        $rezerwacja=new Book_Reservations($user,$book,$date4);
        $rezerwacja->BookReservation();
}

    if($wybór==3){
        $user=new Students(3,"123","PAweł@gmail.com",true,0,0);
        $book=new Books("KAjko i Kokosz","GAl Anonim",12312312,"Książkix",2137,false);
        echo("").PHP_EOL;
        $date5->Setdate(21,1,2023);
        $rezerwacja=new Book_Reservations($user,$book,$date5);
        $rezerwacja->BookReservation();
    }

    if($wybór==4){
        $user=new Students(3,"123","Makumba@gmail.com",false,0,0);
        $book=new Books("Poezja o Borsukach","Szyszborska",12312312,"Przyrodix",2137,true);
        echo("").PHP_EOL;
        $date6->Setdate(1,1,2023);
        $rezerwacja=new Book_Reservations($user,$book,$date6);
        $rezerwacja->BookReservation();
    }
}

if($scenariusz==2){

        echo("Wybrano Scenariusz 2 Rezygnaccja z rezerwacji: ").PHP_EOL;
        
   
}

if($scenariusz==3){
    do{
        echo("Wybierz rodzaj scenariusza: ").PHP_EOL;
        echo("Scenariusza główny - 1").PHP_EOL;
        echo("Scenariusza alternatywny minął termin reerwacji - 2").PHP_EOL;
        echo("Scenariusza alternatywny brak rezerwacji: - 3").PHP_EOL;
        $wybór=readline("Podaj numer scenariusza :");
    }
    while($wybór<1 || $wybór>3);
    echo("OK").PHP_EOL;

    if($wybór==1){
         
        $user=new Students(1,"123","KAmil@gmail.com",true,0,0);
        $book=new Books("JAk zarobić pieniądze na książce","Jordz Biznes",12312312,"Nowa Era",1999,true);
        echo("").PHP_EOL;
        $date3->Setdate(30,5,2023);
        $rezerwacja=new Book_Reservations($user,$book,$date3);
        $rezerwacja->BookReservation();
        $wypozyczenie=new Book_Borrow($user,$bibliotekarz,$rezerwacja,$date2);
        $wypozyczenie->BookBorrow();
        echo("").PHP_EOL;
    }

    if($wybór==2){
        //Minął termin reerwacji
    }



    if($wybór==3){
        $user=new Students(2,"123","DArek@gmail.com",true,0,5);
        $book=new Books("W Pustyni i w puszczy","Henryk Sienkiewicz",12312312,"Książkix",2137,true);
        echo("").PHP_EOL;
        $date2->Setdate(15,2,2023);
        $rezerwacja=new Book_Reservations($user,$book,$date2);
        $wypozyczenie=new Book_Borrow($user,$bibliotekarz,$rezerwacja,$date2);
        $wypozyczenie->BookBorrow();
        echo("").PHP_EOL;
    }

}

if($scenariusz==4){
    do{
        echo("Wybierz rodzaj scenariusza: ").PHP_EOL;
        echo("Scenariusza główny - 1").PHP_EOL;
        echo("Scenariusza alternatywny ksiązka oddana po terminie - 2").PHP_EOL;
        $wybór=readline("Podaj numer scenariusza :");
    }
    while($wybór<1 || $wybór>2);
    if($wybór==1){
    
    $user=new Students(1,"123","jas@gmail.com",true,0,0);
    $book=new Books("Ania i jaś","ewa kwrac",12312312,"erere",1222,true);
    $bibliotekarz=new Librarian("Ryszard","ryszard420@gmail.com","500492666");


    echo("").PHP_EOL;
    $rezerwacja=new Book_Reservations($user,$book,$date);
    $rezerwacja->BookReservation();
    echo("").PHP_EOL;


    $date1->Setdate(1,5,2023);
    $wypozyczenie=new Book_Borrow($user,$bibliotekarz,$rezerwacja,$date1);
    $wypozyczenie->BookBorrow();
    echo("").PHP_EOL;

    echo("").PHP_EOL;
    $date2->Setdate(17,5,2023);
    $oddanie=new Book_Return($wypozyczenie,$user,$bibliotekarz,$date2);
    $oddanie->ReturnBook();
    echo("").PHP_EOL;
    
    }

    if($wybór==2) {


    }
}



/*
echo("").PHP_EOL;
$date3->Setdate(20,5,2023);
$oddanie=new Book_Return($wypozyczenie,$user,$bibliotekarz,$date3);
$oddanie->BookReturn();
*/


?>