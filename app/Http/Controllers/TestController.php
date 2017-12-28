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
        $data = $info->splits($player);
        $data = $info->shots($player);
        $data = $info->rebounds($player);

        return view('welcome', compact('data'));
    }
}