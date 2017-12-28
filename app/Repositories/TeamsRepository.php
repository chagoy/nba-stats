<?php

namespace App\Repositories;

use Illuminate\Http\Request;

class TeamsRepository 
{
    public function __construct()
    {
        $this->client = new Client();
    }

    
}

//JasonRoman\NbaApi\Request\Stats\Stats\TeamAndPlayer\TeamAndPlayerVsPlayersRequest <- select how teams play with people on the court on both sides. you can specify rockets vs cavs with harden and james both on the court and generate stats.
//JasonRoman\NbaApi\Request\Stats\Stats\Team\TeamPlayerOnOffSummaryRequest <- a basic summary of how teams fair with players on and off the court. not really useful because you can't see the rest of the stuff. maybe as a brief summar
