<?php

namespace App\Repositories;

use App\Player;
use JasonRoman\NbaApi\Client\Client;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerInfoRequest;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerCareerStatsRequest;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerLastNGamesStatsRequest;

class PlayersRepository
{
    public function __construct()
    {
        $this->client = new Client();
    }

    public function playerInfo(Player $player)
    {
        $request  = PlayerInfoRequest::fromArray([
            'playerId' => $player->player_id,
            'leagueId' => '00'
        ]);

        $response = $this->client->request($request);

        $objectResponse = $response->getArrayFromJson();
               
        $player->setBirthdate($objectResponse['resultSets'][0]['rowSet'][0][6]);
        $player->setSchool($objectResponse['resultSets'][0]['rowSet'][0][7]);
        $player->setCountry($objectResponse['resultSets'][0]['rowSet'][0][8]);
        $player->setHeight($objectResponse['resultSets'][0]['rowSet'][0][10]);
        $player->setWeight($objectResponse['resultSets'][0]['rowSet'][0][11]);
        $player->setPosition($objectResponse['resultSets'][0]['rowSet'][0][14]);
        $player->setTeamName($objectResponse['resultSets'][0]['rowSet'][0][17]);
        $player->setTeamCity($objectResponse['resultSets'][0]['rowSet'][0][20]);
        $player->setDraftYear($objectResponse['resultSets'][0]['rowSet'][0][26]);
        $player->setDraftRound($objectResponse['resultSets'][0]['rowSet'][0][27]);
        $player->setDraftNumber($objectResponse['resultSets'][0]['rowSet'][0][28]);

        return $player;
        
    }

    public function careerStats(Player $player)
    {
        $request = PlayerCareerStatsRequest::fromArray([
            'playerId' => $player->player_id,
            //'teamId' => $player->team_id,
            //'season' => '2016-17',
            'leagueId' => '00',
            'perMode' => 'PerGame'
        ]);

        $response = $this->client->request($request);

        $objectResponse = $response->getArrayFromJson();
        
        $player->setCareerStats($objectResponse['resultSets'][0]['rowSet']);

        return $player;
    }

    public function last5(Player $player)
    {
        $request = PlayerLastNGamesStatsRequest::fromArray([
            'measureType'    => 'Base',
            'perMode'        => 'PerGame',
            'plusMinus'      => false,
            'paceAdjust'     => false,
            'rank'           => false,
            'leagueId'       => '00',
            'season'         => '2017-18',
            'seasonType'     => 'Regular Season',
            'poRound'        => 0,
            'playerId'       => $player->player_id,
            'outcome'        => null,
            'location'       => null,
            'month'          => 0,
            'seasonSegment'  => null,
            'dateFrom'       => null,
            'dateTo'         => null,
            'opponentTeamId' => 0,
            'vsConference'   => null,
            'vsDivision'     => null,
            'gameSegment'    => null,
            'period'         => 0,
            'shotClockRange' => null,
            'lastNGames'     => 5,
        ]);

        $response = $this->client->request($request);

        $objectResponse = $response->getArrayFromJson();

        $player->setLast5($objectResponse['resultSets'][0]['rowSet'][0]);

        return $player;
    }

}