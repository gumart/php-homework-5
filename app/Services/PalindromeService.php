<?php

namespace App\Services;

class PalindromeService
{
    private static function strrev_enc($string)
    {
	    $string = iconv('utf-8', 'windows-1251', $string);

	    $string = strrev($string);

	    $string = iconv('windows-1251', 'utf-8', $string);
	    
        return $string;
    }
    
    public static function isPalindrome($string)
    {
        $modifiedString = str_replace(' ', '', $string);
        $modifiedString = str_replace('.', '', $modifiedString);
        $modifiedString = str_replace(',', '', $modifiedString);
        $modifiedString = str_replace('?', '', $modifiedString);
        $modifiedString = str_replace('!', '', $modifiedString);
        $modifiedString = str_replace(':', '', $modifiedString);

        $modifiedString = mb_strtolower($modifiedString);

        if ($modifiedString == PalindromeService::strrev_enc($modifiedString)){
            return true;
        } else {
            return false;
        }
    }
}