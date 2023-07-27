<?php

class answer
{
    const bonne_reponse = true;

    private $text;
    private $isCorrect;

    public function __construct($text, $isCorrect = false)
    {
        $this->text = $text;
        $this->isCorrect = $isCorrect;
    }

    public function display()
    {
        $html = "<input type='radio' name='answers' value='{$this->text}'> {$this->text}<br>\n";
        return $html;
    }
}