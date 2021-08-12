<?php
    class student
    {
        public $course;
        private $first_name;
        private $last_name;

        public function setname($fname,$lname)
        {
            $this->first_name=$fname;
            $this->last_name=$lname;
        }

        public function __isset($property)
        {
            echo isset($this->$property);
        }
    }

    $obj=new student();
    $obj->course="PHP";
    $obj->setname("Bhargav","Javia");
    echo isset($obj->fname);
?>