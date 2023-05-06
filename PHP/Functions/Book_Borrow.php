<?php 


namespace PHP\Functions;

use PHP\Classes\Date;
use PHP\Classes\Users;
use PHP\Classes\Librarian;
use PHP\Classes\Volume;
use PHP\Functions\Book_Reservations;
use PHP\Functions\GetVolume;


final class Book_Borrow implements GetVolume{

    private Users $user;
    private Volume $volume;
    private Librarian $librarian;
    private Book_Reservations $book_reservation;
    private Date $dateborrow;
    private bool $reservation_status;
    private Date $datereservation;


    public function __construct(Users $user,Librarian $librarian,Book_Reservations $book_reservation, Date $d){
        $this->user=$user;
        $this->librarian=$librarian;
        $this->book_reservation=$book_reservation;
        $this->volume=$book_reservation->GetVolume();
        $this->reservation_status=$this->book_reservation->GetReservationStatus();
        $this->dateborrow=$d;
        $this->datereservation=$this->book_reservation->GetReservationDate();
    }

    public function BookBorrow(){
            $user_id=$this->user->GetUserId();
            $account_status=$this->user->GetAccountStatus();    
            $volume_counter=$this->user->GetVolumeCounter();
            $max_volume=$this->user->GetMaxVolume();
            $title=$this->volume->GetTitle();
            $author=$this->volume->GetAuthor();
            $ISBN=$this->volume->GetISBN();
            $date=$this->book_reservation->GetReservationDate();
            $l_name=$this->librarian->GetLName();

        if($account_status==1){
          if($volume_counter<$max_volume){
            if($this->reservation_status==true){
            $this->user->SetVolumeCounter(1);
            echo("Ksiązka ".$title." ".$author." ".$ISBN." została wyporzyczona przez użytkonwika ".$user_id." pod czas pracy ".$l_name." w dniu ".$this->dateborrow->getDay()." ".$this->dateborrow->GetMonth()." ".$this->dateborrow->GetYear()).PHP_EOL;
            }
            else{
                echo("Minał czas rezerwacji").PHP_EOL;
            }

          }
          else{
            echo("Maksymalna ilość wypożyczonych książek").PHP_EOL;
          }
        }
        else{
          echo("Konto jest nie aktywne").PHP_EOL;
        }

        
        }

    public function GetVolume(){
      return $this->volume;
    }  

    public function GetDateBorrow(){
      return $this->dateborrow;
    }

}
    
    

?>