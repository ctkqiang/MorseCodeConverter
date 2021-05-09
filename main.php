<?php
    class MorseCode
    {
        /**
         * Convert string to morse
         *
         * @param string $string
         * @return string
         */
        function stringToMorse($string)
        {
            $stringParts = str_split(strtolower($string));

            // Define the dictionary
            $morseDictionary = [
                'a' => '.-',
                'b' => '-...',
                'c' => '-.-.',
                'd' => '-..',
                'e' => '.',
                'f' => '..-.',
                'g' => '--.',
                'h' => '....',
                'i' => '..',
                'j' => '.---',
                'k' => '-.-',
                'l' => '.-..',
                'm' => '--',
                'n' => '-.',
                'o' => '---',
                'p' => '.--.',
                'q' => '--.-',
                'r' => '.-.',
                's' => '...',
                't' => '-',
                'u' => '..-',
                'v' => '...-',
                'w' => '.--',
                'x' => '-..-',
                'y' => '-.--',
                'z' => '--..',
                '0' => '-----',
                '1' => '.----',
                '2' => '..---',
                '3' => '...--',
                '4' => '....-',
                '5' => '.....',
                '6' => '-....',
                '7' => '--...',
                '8' => '---..',
                '9' => '----.',
                '.' => '.-.-.-',
                ',' => '--..--',
                '?' => '..--..',
                '/' => '-..-.',
                ' ' => ' ',
            ];

            $morse = '';

            foreach ($stringParts as $stringPart) 
            {
                if (array_key_exists($stringPart, $morseDictionary)) 
                {
                    $morse .= $morseDictionary[$stringPart]." ";
                }
            }

            echo "Original Text => ".$string;
            echo "\n";
            echo "Converted Text => ".$morse;

            return $morse;
        }
    }

    $input = readline("Enter text you wanted to convert to morse code: ");

    $app = new MorseCode();
    $app -> stringToMorse($input);
?>