<?php

namespace App\Http\Controllers;

use App\Player;
use App\Repositories\PlayersRepository;
use Illuminate\Http\Request;
use JasonRoman\NbaApi\Client\Client;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerDefenseStatsRequest;
use Illuminate\Config\Repository;

class TestController extends Controller
{

    public function index()
    {
       
    }

    public function show(Player $player)
    {

        $info = new PlayersRepository();

        $data = $info->playerInfo($player);
        $data = $info->careerStats($player);
        $data = $info->last5($player);

        return view('welcome', compact('data'));
    }
}

// go to nba.com/player
// web.php -> controller -> getPlayer
// getPlayer calls $player->info 
// model Player uses model/interface
// interface -> info() queries the service to use api
// api returns the data 
// call method for hydration
// hydrate() = new Player()
// inside player there are methods to assign fields
// player->points_per_game = returnedData.fields[43]
// at the end
// return player
// this should be returned back to the controller where you get it in the view to use