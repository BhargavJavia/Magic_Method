<?php
    class a
    {
        private $name;

        public function show()
        {
            echo $this->name;
        }
        
        public function __get($property)
        {
            echo "Your are trying to access Non-existing or private property($property)";
        }

        public function __set($property, $value)
        {
            if(property_exists($this , $property))
            {
                $this->$property = $value;
            }else
            {
                echo "property does not exist:$property";
            }
        }
    }

    $obj=new a();
    $obj->name="Bhargav Javia";
    $obj->show();
?>