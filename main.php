// Do NOT edit nor remove any existing code when testing or submitting
  function mainFunction($input) {
    // Place your code here
    $number = (int)substr($input, 0, -2);
    switch (substr($input, -2)) {
      case "km":
        $number *= 1000;
        break;
      case "cm":
        $number /= 100;
        break;
      case "mm":
        $number /= 1000;
        break;
    }
    return $number;
  };
    
