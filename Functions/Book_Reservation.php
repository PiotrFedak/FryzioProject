<?php 

namespace Book_Reservation;

final class Book_Reservation{
    private Users user;
    private Volume volume;
    private int date;
    
    
    function __construct(Users $user, Volume $volume) {

        $this ->user=$user;
        $this ->volume=$volume;
        
       }

      public function BookReservation(){
        
        this ->

      } 

      public function SetDate(int $Date){
        $this ->date = $Date;
    }

}

?>