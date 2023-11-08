<?php
class Team {
private $teamName;
private $totalPoints;
private $otalGames;
private $totalGoals;
}

    public function __construct($teamName)
    {
        $this->teamName = $teamName;
        $this->totalPoints = 0;
        $this->totalGoals = 0;
        $this->totalGames = 0;
    }

    #calculate score
    public function finalScore($homeTeamScore, $opposingTeamScore)
    {
        #Updated 
        $this->totalGames += 1;

        #Calculate points and update points
        if ($homeTeamScore > $opposingTeamScore) {
            // The home Team have won
            $this->totalPoints += 3;
        } elseif ($homeTeamScore == $opposingTeamScore) {
            // There was a Draw
            $this->totalPoints += 1;
        }

        #total goals
        $this->totalGoals += $homeTeamScore;
    }

    public function getTeamName()
    {
        return $this->teamName;
    }

    public function getTotalPoints()
    {
        return $this->totalPoints;
    }

    public function getTotalGoals()
    {
        return $this->totalGoals;
    }

    public function getTotalGames()
    {
        return $this->totalGames;
    }
}

?>  
    
    
    
    
}