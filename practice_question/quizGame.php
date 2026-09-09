
<?php
   echo("************************************** Welcome To My Computer Quiz ********************");

$playing = strtolower(readline("\nDo you want to play:(y/n)"));

if ($playing !="y"){
    exit;
}

else{
   
    echo ("\nRULES FOR THE GAME: \n\t\t For Correct Answer = +1 \n\t\t For Incorrect Answer = -1");
    echo ("\nOkay !!! let's begin our match:");
    $score=0;
    $correctAns = 0;
    $wrongAns = 0;
}

$answer = readline("\n\n 1) What is the full form of CPU ? \n\t a)central processor unit \t\t b)central processing unit \n\t c)central program utility \t\t d) i dont know");

if (strtolower($answer)=="b"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;
    
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;
    
}
 
$answer = readline("\n\n 2) What is the full form of HTML ? \n\t a)hyper text markup language \t\t b)high text machine language \n\t c)hyper transfer markup language \t\t d) i dont know");

if (strtolower($answer)=="a"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;
    
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;
    
}

$answer = readline("\n\n 3) What is the full form of RAM ? \n\t a)read access memory \t\t b)random access memory \n\t c)run access memory \t\t d) i dont know");

if (strtolower($answer)=="b"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;   
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;    
}

$answer = readline("\n\n 4) What is the full form of WWW ? \n\t a)world wide web \t\t b)world web wide \n\t c)web world wide \t\t d) i dont know
");

if (strtolower($answer)=="a"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;  
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;    
}

$answer = readline("\n\n 5) What is the full form of LAN ? \n\t a)large area network \t\t b)local area network \n\t c)local access network \t\t d) i dont know");

if (strtolower($answer)=="b"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;   
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;   
}

$answer = readline("\n\n 6) What is the full form of URL ? \n\t a)uniform resource locator \t\t b)universal resource link \n\t c)uniform reference locator \t\t d) i dont know");

if (strtolower($answer)=="a"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;   
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;   
}

$answer = readline("\n\n 7) What is the full form of OS ? \n\t a)open software \t\t b)operating system \n\t c)operating software \t\t d) i dont know");

if (strtolower($answer)=="b"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;   
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;   
}

$answer = readline("\n\n 8) What is the full form of SQL ? \n\t a)structured query language \t\t b)simple query language \n\t c)standard question language \t\t d) i dont know");

if (strtolower($answer)=="a"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;   
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;   
}

$answer = readline("\n\n 9) What is the full form of GUI ? \n\t a)graphical user interface \t\t b)general user interface \n\t c)graphical universal interface \t\t d) i dont know");

if (strtolower($answer)=="a"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;   
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;   
}

$answer = readline("\n\n 10) What is the full form of HTTP ? \n\t a)hyper transfer text \t\t\t b)high text transfer protocol \n\t c)hyper text transfer protocol \t\t d) i dont know
");

if (strtolower($answer)=="c"){
    echo ("    >> Correct");
    $score += 1;
    $correctAns += 1;   
}

else{
    echo ("    >> Incorrect !!");
    $score -= 1;
    $wrongAns += 1;   
}


echo ("\n\n-----------------------------------------------------\n");
echo ("\n\t........ let's check your score ..........");
echo ("\n\ttotal question : 10");
echo ("\n\ttotal correct answer: $correctAns");
echo ("\n\ttotal incorrect answer: $wrongAns");
echo ("\n\ttotal score : $score");