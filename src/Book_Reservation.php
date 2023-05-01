<?php 

namespace Functions;

use Classes\Users;
use Classes\Volume;

final class Book_Reservation{
    private Users $user;
    private Volume $volume;
    private int $date;
    
    
    function __construct(Users $user, Volume $volume) {

        $this ->user=$user;
        $this ->volume=$volume;
        
       }

      public function BookReservation(){
        $user_id=$this->user->GetUserId();
        $email=$this->user->Getemail();
        $account_status=$this->user->GetAccountStatus();
        $volume_counter=$this->user->GetVolumeCounter();
        $max_volume=$this->user->GetMaxVolumine();
        $title=$this->volume->GetTitle();
        $author=$this->volume->GetAuthor();
        $ISBN=$this->volume->GetISBN();
        $status=$this->volume->GetStatus();

        if($account_status==1){
          if($volume_counter<$max_volume){
            $this->SetDate();
            echo("Ksiązka".$title." ".$author." ".$ISBN." została zaerzerowana dla użytkonwika ".$user_id." o emailu ".$email." w dniu ".$this->date);

          }
          else{
            echo("Maksymalna ilość wypożyczonych książek");
          }
        }
        else{
          echo("Konto jest nie aktywne");
        }

        

      } 

      public function SetDate(){
        $current_date = date('Y-m-d');
        echo $current_date;
        $this ->date = $current_date;
    }

}

?>