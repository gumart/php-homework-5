<?php

namespace App\Http\Controllers;

use App\Http\Requests\PalindromeRequest;
use App\Services\PalindromeService;

class PalindromeController extends Controller
{
    private $palindromeService;

    public function __construct(PalindromeService $palindromeSerivce)
    {
        $this->palindromeService = $palindromeSerivce;
    }

    public function isPalindrome(PalindromeRequest $palindromeRequest)
    {
        $result = $this->palindromeService->isPalindrome($palindromeRequest->string);

        return response($result, 200);
    }

}
