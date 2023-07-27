<?php

class Qcm
{
    private array $questions;

    /**
     * Get the value of questions
     */ 
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add a question to the quiz
     */ 
    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }


    /**
     * Generate the view of the quiz
     */
    public function generate()
    {
        foreach($this->getQuestions() as $question){
            echo $question->getQuestion() . '<br><br>';

            foreach($question->getAnswers() as $answer){
                echo $answer->getAnswer() . '<br>';
            }

            echo '<br><br>';
        }
    }
  
}