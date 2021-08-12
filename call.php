<?php
    class a
    {
        private $first_name;
        private $last_name;


        private function setname($fname , $lname)
        {
            $this->first_name = $fname;
            $this->last_name = $lname;
        }

        public function __call($method, $args)
        {
            if(method_exists($this, $method))
            {
                call_user_func_array([$this, $method] , $args);
            }else
            {
                echo "Method does not exist:$method";
            }
        }
    }

    $obj=new a();
    $obj->setname("Bhargav", "Javia");
    echo "<pr>";
    print_r($obj);
    echo "</pr>";
?>