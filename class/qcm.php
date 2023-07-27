<?php

class qcm
{
    private $questions = [];

    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }

    public function generate()
    {
        foreach ($this->questions as $question) {
            echo $question->display();
        }
    }
}
