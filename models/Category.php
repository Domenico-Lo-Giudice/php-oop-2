<?php

class Category {
    protected $name;
    private static $accepted_categories = [
        "Cane",
        "Gatto"
    ]
  
    
    public function __construct(string $name) {
        $this->setName($name);
    }
    
    public function setName($name) {
        if(!is_string($name) || !in_array($name, self::$accepted_categories)) return false
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return $this->name;

}

}
?>
