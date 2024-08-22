<?php
    # Write your PHP code from here
    # Function to check if two strings are anagrams
    function areAnagrams($string1, $string2) {
        # If lengths of the strings are not equal, they cannot be anagrams
        if (strlen($string1) != strlen($string2)) {
            return false;
        }

        # Sort both strings
        $sorted_string1 = str_split($string1);
        sort($sorted_string1);
        $sorted_string1 = implode('', $sorted_string1);

        $sorted_string2 = str_split($string2);
        sort($sorted_string2);
        $sorted_string2 = implode('', $sorted_string2);

        # Compare sorted versions of the strings
        return $sorted_string1 == $sorted_string2;
    }

    # Read input from standard input (STDIN)
    $handle = fopen("php://stdin", "r");
    $stringA = trim(fgets($handle));
    $stringB = trim(fgets($handle));
    fclose($handle);

    # Check if the strings are anagrams
    if (areAnagrams($stringA, $stringB)) {
        echo "YES";
    } else {
        echo "NO";
    }
   
