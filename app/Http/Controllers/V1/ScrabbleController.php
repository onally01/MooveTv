<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Services\Scrabble;
use http\Env\Response;
use Illuminate\Http\Request;

class ScrabbleController extends Controller
{
    protected $scrabble;
    public function __construct(Scrabble $scrabble)
    {
        $this->scrabble = $scrabble;
    }

    public function getScore($word){
        //Only accept letters a - z
        $check = preg_match('/[^A-Za-z]/', $word);

        if (!$check){
            return $this->scrabble->getScore($word);
        }else{
            return response()->json('Please enter only letter A - Z');
        }

    }
}
