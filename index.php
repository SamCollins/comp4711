<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Lab 1
        include ('Student.php');
        
        //Creates the array to hold the student objects
        $students = array();
        
        //Next 3 sections create the students and adds them to the array
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $third = new Student();
        $third->surname = "Collins";
        $third->first_name = "Sam";
        $third->add_email('home','samcollins427@gmail.com');
        $third->add_grade(86);
        $students['g611'] = $third;
        
        //Sorts students based on the key they were entered into the array with
        ksort($students);
        
        //Iterates through the array and displays each student
        foreach ($students as $student) {
            echo $student->toString();
        }
        
        ?>
    </body>
</html>
