<?php
namespace mvc\training;

interface Gradeable{

    public function grade() : float;
}


interface Rateable{


    public function rate(int $rate);
}



abstract class AbstractXBlock{

protected $field0 = "f0";
private $field1 = "f1";
public $field2 = "f2";


abstract function render();



}

class TextXBlock extends AbstractXBlock {

    public function __construct(public string $text)
    {

    }

    function render()
    {
        echo $this->text;
    }

    public function grade(): float
    {
        return 4;
    }
}

abstract class ProblemXBlock extends AbstractXBlock implements  Gradeable, Rateable {

    private $_rate;
    public float $grade=0;
    public function __construct(public string $problem)
    {

    }

    public function rate(int $rate){
        $this->_rate = $rate;
    }

    public function grade() : float{
        $this->grade = 5;
      return  $this->grade ;
    }
}


class TextProblemXBlock extends ProblemXBlock {

    public function __construct(public string $text)
    {

    }

    function render()
    {
        echo $this->text;
    }

    public function grade(): float
    {
        return 4;
    }
}


class MathProblemXBlock extends ProblemXBlock{

    public function __construct(public string $problem)
    {
    }

    function render()
    {
         echo $this->problem;
    }

}


class ProblemSet{

    private array $problems = [];

    public function addProblem(ProblemXBlock $xblock){
        array_push($this->problems,$xblock);
    }

    function gradeProblemSet(){
        foreach ($this->problems as $xblock){
            echo $xblock->grade();
            echo  "<br>";

        }
    }


    function renderProblemSet(){
        foreach ($this->problems as $xblock){
           $xblock->render();
           echo  "<br>";
        }
    }

}


$text = new TextProblemXBlock("tekst");
$text1 = new TextProblemXBlock("tekst1");

$math1 =  new MathProblemXBlock("problem 1");
$math2 =  new MathProblemXBlock("problem 2");

$course = new ProblemSet();
$course->addProblem($text);
$course->addProblem($math1);
$course->addProblem($text1);
$course->addProblem($math2);

$course->renderProblemSet();
$course->gradeProblemSet();
