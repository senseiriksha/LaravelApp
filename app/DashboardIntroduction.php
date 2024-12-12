<?php

namespace App;

class DashboardIntroduction implements DashboardIntroductionInterface
{
    public function getName(string $ime)
    {
        echo "Moje ime je {$ime}";
    }
}