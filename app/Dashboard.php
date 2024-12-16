<?php

namespace App;

class Dashboard
{
    public function __construct(public DashboardIntroductionInterface $introduction, public DashboardIntroductionInterface $introductioni)
    {
        
    }

    public function welcome()
    {
        // Returns predefined name
        return $this->introduction->getName("Antonio");
        return $this->introductioni->getName("Mirko");
    }
}