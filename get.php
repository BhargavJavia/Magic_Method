<?php
    class a
    {
        private $obj="name";

        public function __get($name)
        {
            echo "You are trying to run private property($name)";
        }
    }

    $test=new a();
    $test->obj;
?>