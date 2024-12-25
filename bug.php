function foo($a, $b) {
  if ($a > $b) {
    return $a;
  } else {
    return $b; 
  }
}

//The above function looks correct, but it has a bug.  Can you spot it?

//Hint: Consider the case where $a and $b are not numbers.