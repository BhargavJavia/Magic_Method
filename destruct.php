<?php
    class a
    {
        public function __construct()
        {
            echo "This is Constructor.";
        }

        public function hello()
        {
            echo "Hello Everyone";
        }

        public function __destruct()
        {
            echo "This is Destructor.";
        }
    }

    $obj=new a();
    $obj->hello();
?>