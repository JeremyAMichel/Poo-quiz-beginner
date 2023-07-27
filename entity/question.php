<?php

class Question
{
    private string $question;
    private array $answers;
    private string $explanation;

    public function __construct(string $question)
    {
        $this->setQuestion($question);
    }

    

    /**
     * Set the value of explanation
     *
     * @return  self
     */ 
    public function setExplanation(string $explanation)
    {
        $this->explanation = $explanation;

        return $this;
    }

    /**
     * Set the value of question
     *
     * @return  self
     */ 
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get the value of question
     */ 
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Get the value of answers
     */ 
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Add an answer to the question
     */ 
    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;
    }

    

    
}