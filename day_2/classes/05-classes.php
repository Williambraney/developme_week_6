<?php

require __DIR__ . "/vendor/autoload.php";

class Stringy
{
    private $word;

    public function __construct($word)
    {
        $this->word = $word;
    }
    public function lower()
    {
        return strtolower($this->word);
    }
    public function upper()
    {
        return strtoupper($this->word);
    }
    public function append($blah)
    {
        $this->blah = $blah;
        return "$this->word$this->blah";
    }
    public function repeat()
    {
        return str_repeat($this->word, 5);
    }
}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"