<?php
interface Interviewer
{
    public function askQuestion();
}

class Developer implements Interviewer
{
    public function askQuestion()
    {
        echo 'Asking about design patterns!';
    }
}

class CommunityExecutive implements Interviewer
{
    public function askQuestion()
    {
        echo 'Asking about community builing!';
    }
}

abstract class HiringManager
{
    //Factory Method
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestion();
    }
}

class DevelopmentManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}

class MarketingManager extends HiringManager
{
    protected function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}

$devManager = new DevelopmentManager();
$devManager->takeInterview();

echo "\n";

$marketingManager = new MarketingManager();
$marketingManager->takeInterview();
