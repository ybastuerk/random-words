<?php
namespace Ybastuerk\RandomWords;

class Sentence{
    private string $sentence = '';

    /**
     * Gets the original sentence
     *
     * @return string
     */
    public function getSentence()
    {
        return $this->sentence;
    }

    /**
     * @param string $sentence
     */
    private function setSentence($sentence)
    {
        $this->sentence = trim($sentence);
    }


    function __construct($sentence){

        //$this->sentence = $sentence;
    $this->setSentence(($sentence));
    }
public function getRandomUpperSentence(): string {
        return strtoupper($this->getRandomSentence());
}
    public function getRandomSentence(): string{
        $words = explode(' ', $this->sentence);

        // More than one word
        if (count($words)>0){

            $result = shuffle($words);

            if ($result === true){
                return implode(' ', $words);
            }
        }
        return $this->sentence;
    }
}