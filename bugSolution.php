function foo($a, $b) {
  //Check if both variables are numeric before comparing
  if (is_numeric($a) && is_numeric($b)){
    if ($a > $b) {
      return $a;
    } else {
      return $b; 
    }
  } else {
    return "Error: Inputs must be numbers";
  }
}

//More robust solution using a ternary operator
function foo($a, $b) {
  return is_numeric($a) && is_numeric($b) ? ($a > $b ? $a : $b) : "Error: Inputs must be numbers";
}
