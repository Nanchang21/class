<?php

if(isset($_POST["check"])){
    $a = $_POST["num1"];
    $b = $_POST["num2"];
    if($a > $b){
        print("First Number Entered Is Greater");
            if($b > $a){
                print("Second Number Entered Is Greater");
            }
    }
}



if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $score = $_POST["score"];
    print($name ."<br>");
    print("Grade: "); 
    if($score < 45){
        print(" F ");
    }elseif($score >=45 && $score <=49){
        print(" D ");
    }elseif($score >=50 && $score <=59){
        print(" C ");
    }elseif($score >=60 && $score <=69){
        print(" B ");
    }elseif($score >=70 && $score <=100){
        print(" A ");
    }else{
        print("Please Enter A number In a Range Of 1 To 100");
    }
}


if(isset($_POST["checkNum"])){
    $num = $_POST["number"];
    switch($num){
        case(1):
            print("You Picked Number 1");
            break;
        case(2):
            print("You Picked Number 2");
            break;
        case(3):
            print("You Picked Number 3");
            break;
        case(4):
            print("You Picked Number 4");
            break;
        case(5):
            print("You Picked Number ");
            break;
        default:
        print("Please Enter A Number In A Range Of 1 To 5");
    }
}
?>