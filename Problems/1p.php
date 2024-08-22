<?php
function removeDuplicates($inputString) {
    $seen = [];
    $result = "";
    $length = strlen($inputString);
    
    for ($i = 0; $i < $length; $i++) {
        $char = $inputString[$i];
        if (!in_array($char, $seen)) {
            $seen[] = $char;
            $result .= $char;
        }
    }
    
    return $result;
}

// Reading input using fgets and fscanf
echo "Enter string: ";
$inputString = trim(fgets(STDIN));

// Removing duplicates
$outputString = removeDuplicates($inputString);

// Outputting the result
echo "Output: " . $outputString . "\n";

