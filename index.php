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
include('Student.php');
$students = array();
$first = new Student();
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com');
$first->status = "Freshman";
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
$second->status = "Freshman";
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

$third = new Student();
$third->surname = "Chen";
$third->first_name = "Weiliang";
$third->add_email('home','984964478@qq.com');
$third->add_email('work','A01160038@bcit.ca');
$third->status = "Freshman";
$third->add_grade(95);
$third->add_grade(75);
$third->add_grade(55);
$students['c789'] = $third;

$fourth = new Student();
$fourth->surname = "Nana";
$fourth->first_name = "Ouyang";
$fourth->add_email('home','Nana@Ouyang.com');
$fourth->add_email('work','Ouyang@Nana.com');
$fourth->status = "Freshman";
$fourth->add_grade(95);
$fourth->add_grade(75);
$fourth->add_grade(55);
$students['n520'] = $fourth;

foreach($students as $student)
echo $student->toString();


        ?>
    </body>
</html>
