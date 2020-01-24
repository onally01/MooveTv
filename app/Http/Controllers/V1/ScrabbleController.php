<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Services\Scrabble;
use Illuminate\Http\Request;

class ScrabbleController extends Controller
{
    protected $scrabble;
    public function __construct(Scrabble $scrabble)
    {
        $this->scrabble = $scrabble;
    }

    public function getScore($word){
        return $this->scrabble->getScore($word);
    }
}
