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
        #includes the Student php class
        include ('Student.php');
        
        #creates a new array called students
        $students = array();
        
        #adds the first student, John Doe
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        #adds the second student, Albert Einstein
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
        
        #adds the third student, Chun-Yip Tang
        $third = new Student();
        $third->surname = "Tang";
        $third->first_name = "Chun-Yip";
        $third->add_email('home', 'koolman987654321@hotmail.com');
        $third->add_email('work','cytwork@gmail.com');
        $students['c789'] = $third;
        
        #sorts the students by name
        ksort($students);
        
        #prints out the student array according the toString function of the 
        #Student class
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
