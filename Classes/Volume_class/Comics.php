<?php 

namespace Comics;

class Comics extends Volume {
    private int parts;
    private int generation;
    private int publication_date;

    function __construct(int $parts, int $generation, int $publication_date){
        parent::__construct();
        $this ->parts=$parts;
        $this ->generation=$generation;
        $this ->publication_date=$publication_date;
    }

public function GetParts() {
return $this->parts;
}

public function GetGeneration() {
return $this->generation;
}
}

?>