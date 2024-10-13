<?php 

  namespace App\Components\Menu;
  
  class MenuSports {
    private $id_selected;
    private $items;
    
    function __construct($_id_selected, $_items) {
        $this->id_selected = $_id_selected;
        $this->items = $_items;
    }
    
    public function getIdSelected() {
        return $this->id_selected;
    }
    
    public function getItems() {
        return $this->items;
    }
    
    public function setIdSelected($_id_selected) {
        $this->id_selected = $_id_selected;
    }
    
    public function setItems($_items) {
        $this->items = $_items;
    }
  }
?>