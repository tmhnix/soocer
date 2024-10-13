<?php 

  namespace App\Components\Menu;
  
  class MenuItem {
    private $name;
    private $icon;
    private $sub_menu = null;
    private $menu = null;
    private $sports = null;
    private $type = null;
    
    function __construct($_name, $_icon, $_menu = null, $_sub_menu = null, $_sports = null, $_type = 'menu') {
        $this->name = $_name;
        $this->icon = $_icon;
        $this->menu = $_menu;
        $this->sub_menu = $_sub_menu;
        $this->sports = $_sports;
        $this->type = $_type;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getType() {
        return $this->type;
    }
    
    public function getSubMenu() {
        return $this->sub_menu;
    }
    
    public function getIcon() {
        return $this->icon;
    }
    
    public function getMenu() {
        return $this->menu;
    }
    
    public function getSports() {
        return $this->sports;
    }
    
    public function setName($_name) {
        $this->name = $_name;
    }
    
    public function setIcon($_icon) {
        $this->icon = $_icon;
    }
    
    public function setSubMenu($_sub_menu) {
        $this->sub_menu = $_sub_menu;
    }
    
    public function setMenu($_menu) {
        $menu = $_menu;
    }
    
    public function addItem($_item) {
        $menu[count($menu)] = $_item;
    }
    
    public function addMenu($_menu) {
        $sub_menu[count($sub_menu)] = $_menu;
    }
    
  }
?>