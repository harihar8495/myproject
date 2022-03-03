<?php
class Gender
{
    public function __call($gender_function, $gender_arguments)
    {

        echo "$gender_function :".implode(' ', $gender_arguments)."\n";

    }
}
$gender = new Gender();

$gender->genderCategory('male','female','others');

/*
 * output:
 * genderCategory :male female others
 */