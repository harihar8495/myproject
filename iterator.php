<?php
function getIterable(iterable $fruit){
    foreach($fruit as $fruits){
        print_r($fruits);
    }
}
$berries = ['cherry','strawberry','mango','orange'];
getIterable($berries);
