<?php 

namespace Users;


abstract class Users {

   private int User_id;
   private string password;
   private string email;
   private bool account_status;
   private int penalty_counter;
   private int volume_counter;
   private int max_volume;


   function __construct(int $User_id,string $password, string $email, bool $account_status, int $penalty_counter, int $volume_counter, int $max_volume) {

    $this ->User_id=$User_id;
    $this ->password=$password;
    $this ->email=$email;
    $this ->account_status=$account_status;
    $this ->penalty_counter=$penalty_counter;
    $this ->volume_counter=$volume_counter;
    $this ->max_volume=$max_volume;
   }

   public function Getemail() {
    return $this->email;
    }

    public function Setemail(string $mail){
        $this->email=$mail;
    }

    public function Getpassword() {
        return  $this->password;
    }
    
    public function Setpassword(string $password ){
        $this ->status = $password;
    }

    public function GetAccountStatus() {
        return $this->account_status;
    }

    public function SetAccountStatus(bool $status){
        $this->account_status=$status;
    }

    public function Getpenalty_counter() {
        return $this->penalty_counter;
    }


    public function Setpenalty_counter(int $penalty_counter) {
            $this ->status = $penalty_counter;
    }

}

?>