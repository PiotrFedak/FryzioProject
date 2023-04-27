<?php 

namespace School_Books;

class School_Books extends Volume {
    private int publication_date;
    private int core_curriculum;


    function __construct(int $publication_date, int $core_curriculum){
        parent::__construct();
    
        $this ->publication_date=$publication_date;
        $this ->core_curriculum=$core_curriculum;
    }

}


?>