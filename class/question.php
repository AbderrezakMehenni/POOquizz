<?php

class question
{
    private $body;
    private $answers = [];
    private $explanation;

    public function __construct($body)
    {
        $this->body = $body;
    }

    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;
    }

    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;
    }

    public function display()
    {
        $html = "<p>{$this->body}</p>\n";
        foreach ($this->answers as $answer) {
            $html .= $answer->display();
        }
        $html .= "<p>{$this->explanation}</p>\n";
        return $html;
    }
}
