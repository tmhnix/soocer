<?php 

  namespace App\Components\Menu;
  
  class MenuSubItem {
    private $name;
    private $icon;
    private $value;
    private $is_live;
    private $is_new;
    private $link;
    function __construct($_name, $_icon, $_value, $_is_live = false, $_is_new = false, $_link = '#/') {
        $this->name = $_name;
        $this->icon = $_icon;
        $this->value = $_value;
        $this->is_live = $_is_live;
        $this->is_new = $_is_new;
        $this->link = $_link;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getIsLive() {
        return $this->is_live;
    }
    
    public function getIsNew() {
        return $this->is_new;
    }
    
    public function getIcon() {
        return $this->icon;
    }
    
    public function getValue() {
        return $this->value;
    }
    
    public function setName($_name) {
        $this->name = $_name;
    }
    
    public function setIcon($_icon) {
        $this->icon = $_icon;
    }
    
    public function setValue($_value) {
        $this->value = $_value;
    }

    public function setLink($_link) {
        $this->link = $_link;
    }
    public function getLink() {
        return $this->link;
    }
  }
?>