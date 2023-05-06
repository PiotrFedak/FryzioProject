<?php 

namespace PHP\Functions;

use PHP\Classes\Users;

final class Expired_Book {
    private Users $user;
    const Penautli = 10;
    
    
    public function __construct(Users $u){
        $this->user=$u;
    }
    
    public function ReturnExpiredBook(){
        $user_id=$this->user->GetUserId();
        $this->user->Setpenalty_counter($this::Penautli);
        $this->user->SetVolumeCounter(-1);
        echo("Naliczono kare w wyskości ".$this::Penautli." dla użytkownika ".$user_id).PHP_EOL;
    }
        
    
}

    

?>