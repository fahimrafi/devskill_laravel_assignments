

<?php

// this code is to run in cmd ***************

$givenSet= array(1,2,3,4,5);

function powerSet($array) {
    // add the empty set
    $results = array(array());

    foreach ($array as $element) {
        foreach ($results as $combination) {
            $results[] = array_merge(array($element), $combination);
        }
    }

    return $results;
}


print_r(powerSet($givenSet));
