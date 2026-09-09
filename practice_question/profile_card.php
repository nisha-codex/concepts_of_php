<?php

echo ("enter your name:");
$name = readline();

echo ("enter your age:");
$age = readline();

echo ("enter your course:");
$course = readline();

$enroll = True;

echo ("\n------------- student profile --------");

// using double quotes
echo ("\nName = $name\nAge = $age\nCourse = $course\nEnrollment = $enroll\n");

// using single quotes
echo ('\n\nName = $name\nAge = $age\nCourse = $course\nEnrollment = $enroll');