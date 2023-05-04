<?php 

namespace PHP\Functions;

use PHP\Classes\Users;
use PHP\Classes\Volume;


interface GetVolume{
  public function getVolume();

}


final class Book_Reservation implements GetVolume{
    private Users $user;
    private Volume $volume;
    private string $date;
    private bool $status_reservation=false;

    
    function __construct(Users $user, Volume $volume) {

        $this ->user=$user;
        $this ->volume=$volume;
        
       }

      public function BookReservation(){
        $user_id=$this->user->GetUserId();
        $email=$this->user->Getemail();
        $account_status=$this->user->GetAccountStatus();
        $volume_counter=$this->user->GetVolumeCounter();
        $max_volume=$this->user->GetMaxVolume();
        $title=$this->volume->GetTitle();
        $author=$this->volume->GetAuthor();
        $ISBN=$this->volume->GetISBN();
        $status=$this->volume->GetStatus();

        if($account_status==1){
          if($volume_counter<$max_volume){
            $this->SetDate();
            echo("Ksiązka".$title." ".$author." ".$ISBN." została zaerzerowana dla użytkonwika ".$user_id." o emailu ".$email." w dniu ".$this->date);
            $this->status_reservation=true;

          }
          else{
            echo("Maksymalna ilość wypożyczonych książek");
          }
        }
        else{
          echo("Konto jest nie aktywne");
        }

        

      } 

      public function GetReservationStatus(){
          $this->status_reservation;
      }

      public function GetReservationDate(){
          return $this->date;
      }


      public function GetVolume(){
        return $this->volume;
      }  

      public function SetDate(){
        $current_date = date('d-m-Y');
        $this ->date = $current_date;
    }

}

?>