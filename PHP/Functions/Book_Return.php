<?php 

namespace PHP\Functions;
use PHP\Classes\Users;
use PHP\Classes\Librarian;
use PHP\Classes\Volume;
use PHP\Functions\Book_Reservation;
use PHP\Interface\GetVolume;

final class Book_Return{
    private BookBorrow $book_borrow;
    private Users $users;
    private Librarian $librarian;

    public function __construct(BookBorrow $borrow, Users $user, Librarian $librarian){
        $this->book_borrow = $borrow;
        $this->users = $user;
        $this->librarian = $librarian;
    }

    public function ReturnBook(){
        $user_id=$this->users->GetUserId();
        $ISBN=$this->volume->GetISBN();
        $date=$this->book_borrow->GetDate();
        $librarian=$this->librarian->GetLName();
        //Miejsce na if z datą który będzie date-date fajnie


        $this->user->SetVolumeCounter(-1);
        
        $book=$this->book_borrow->GetVolume();
        
    }

    public function GetDate(){
        $current_date = date('d-m-Y');
        $this ->date = $current_date;
    }




}



    
    

?>