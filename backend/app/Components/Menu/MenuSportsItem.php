<?php 

  namespace App\Components\Menu;
  
  class MenuSportsItem {
    private $top;
    private $sports;
    
    function __construct($_top, $_sports) {
        $this->top = $_top;
        $this->sports = $_sports;
    }
    
    public function getTop() {
        return $this->top;
    }
    
    public function getSports() {
        return $this->sports;
    }
    
    public function setTop($_top) {
        $this->top = $_top;
    }
    
    public function setSports($_sports) {
        $this->sports = $_sports;
    }
  }
?>