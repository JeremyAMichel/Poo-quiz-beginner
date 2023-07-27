<?php

class Answer
{
    private string $answer;
    private bool $isCorrect;

    public function __construct(string $answer, bool $isCorrect = false)
    {
        $this->setAnswer($answer);
        $this->setIsCorrect($isCorrect);
    }

    /**
     * Set the value of isCorrect
     *
     * @return  self
     */ 
    public function setIsCorrect(bool $isCorrect)
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }

    /**
     * Set the value of answer
     *
     * @return  self
     */ 
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get the value of answer
     */ 
    public function getAnswer()
    {
        return $this->answer;
    }
}