<?php
    class student
    {
        public $name;
        public $course;

        public function __construct($n)
        {
            $this->name =$n;
        }

        public function setcourse(course $c)
        {
            $this->course =$c;
        }

        public function __clone()
        {
            $this->course = clone $this->course;
        }
    
    }

    class course
    {
        public $cname;
        public function __construct($cn)
        {
            $this->cname =$cn;
        }
    }

    $student1=new student('Bhargav Patel');
    $course1=new course('PHP');

    $student1->setcourse($course1);

    $student2 = clone $student1;

    $student2->name = 'Het Bhatt';
    $student2->course = 'Gaming Animation';

    print_r($student1);
    print_r($student2);
?>