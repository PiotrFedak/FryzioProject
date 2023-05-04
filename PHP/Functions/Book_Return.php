<?php 

namespace PHP\Functions;
use PHP\Classes\Users;
use PHP\Classes\Librarian;
use PHP\Classes\Volume;
use PHP\Functions\Book_Borrow;
use PHP\Interface\GetVolume;

final class Book_Return{
    private Book_Borrow $book_borrow;
    private Users $users;
    private Librarian $librarian;
    private Volume $volume;
    private int $date;

    public function __construct(Book_Borrow $borrow, Users $user, Librarian $librarian){
        $this->book_borrow = $borrow;
        $this->users = $user;
        $this->librarian = $librarian;
        $this->volume=$this->book_borrow->GetVolume();
    }

    public function ReturnBook(){
        $user_id=$this->users->GetUserId();
        $ISBN=$this->volume->GetISBN();
        $date=$this->book_borrow->GetDate();
        $librarian=$this->librarian->GetLName();
        if($this->date>1){
            $this->users->SetVolumeCounter(-1);
            $this->volume->SetStatus(true);
            echo("Użytkownik ".$user_id." oddał książkę ".$ISBN." w terminie dnia".$date." zakartekowane przez ".$librarian).PHP_EOL;
        }
        else{
            echo("Ksiązka po terminie").PHP_EOL;
        }
    
        
        
        
    }

    public function GetDate(){
        $current_date = date('dmY');
        $this->date = $current_date;
    }





}



    
    

?>