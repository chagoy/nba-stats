<?php

namespace App\Repositories;

use App\Player;
use JasonRoman\NbaApi\Client\Client;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerInfoRequest;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerCareerStatsRequest;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerLastNGamesStatsRequest;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerGeneralSplitsStatsRequest;
use JasonRoman\NbaApi\Request\Stats\Stats\Player\PlayerShotsStatsRequest;

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

        if (isset($objectResponse['resultSets'][0]['rowSet'][0])) {

            $data = $objectResponse['resultSets'][0]['rowSet'][0];

            $player->setLast5Wins($data[3]);
            $player->setLast5Losses($data[4]);
            $player->setLast5Min($data[6]);
            $player->setLast5Fgm($data[7]);
            $player->setLast5Fga($data[8]);
            $player->setLast5Fgpct($data[9]);
            $player->setLast5Fg3m($data[10]);
            $player->setLast5Fg3a($data[11]);
            $player->setLast5Fg3pct($data[12]);
            $player->setLast5Ftm($data[13]);
            $player->setLast5Fta($data[14]);
            $player->setLast5Ftpct($data[15]);
            $player->setLast5Oreb($data[16]);
            $player->setLast5Dreb($data[17]);
            $player->setLast5Reb($data[18]);
            $player->setLast5Ast($data[19]);
            $player->setLast5Tov($data[20]);
            $player->setLast5Stl($data[21]);
            $player->setLast5Blk($data[22]);
            $player->setLast5Blka($data[23]);
            $player->setLast5Pf($data[24]);
            $player->setLast5Pfd($data[25]);
            $player->setLast5Pts($data[26]);
            $player->setLast5Plusminus($data[27]);
        }

        return $player;
    }

    public function splits(Player $player)
    {
        $request = PlayerGeneralSplitsStatsRequest::fromArray([
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
            'lastNGames'     => 0,
        ]);

        $response = $this->client->request($request);

        $objectResponse = $response->getArrayFromJson();
        
        $home = $objectResponse['resultSets'][1]['rowSet'][0];
        $away = $objectResponse['resultSets'][1]['rowSet'][1];
        $wins = $objectResponse['resultSets'][2]['rowSet'][0];
        $losses = $objectResponse['resultSets'][2]['rowSet'][1];
        $rest0 = $objectResponse['resultSets'][6]['rowSet'][0];
        $rest1 = $objectResponse['resultSets'][6]['rowSet'][1];
        $rest2 = $objectResponse['resultSets'][6]['rowSet'][2];
        $rest3 = $objectResponse['resultSets'][6]['rowSet'][3];
        $rest4 = $objectResponse['resultSets'][6]['rowSet'][4];

        $player->setHomeWins($home[3]);
        $player->setHomeLosses($home[4]);
        $player->setHomeMin($home[6]);
        $player->setHomeFgm($home[7]);
        $player->setHomeFga($home[8]);
        $player->setHomeFgpct($home[9]);
        $player->setHomeFg3m($home[10]);
        $player->setHomeFg3a($home[11]);
        $player->setHomeFg3pct($home[12]);
        $player->setHomeFtm($home[13]);
        $player->setHomeFta($home[14]);
        $player->setHomeFtpct($home[15]);
        $player->setHomeOreb($home[16]);
        $player->setHomeDreb($home[17]);
        $player->setHomeReb($home[18]);
        $player->setHomeAst($home[19]);
        $player->setHomeTov($home[20]);
        $player->setHomeStl($home[21]);
        $player->setHomeBlk($home[22]);
        $player->setHomeBlka($home[23]);
        $player->setHomePf($home[24]);
        $player->setHomePfd($home[25]);
        $player->setHomePts($home[26]);
        $player->setHomePlusminus($home[27]);

        $player->setAwayWins($away[3]);
        $player->setAwayLosses($away[4]);
        $player->setAwayMin($away[6]);
        $player->setAwayFgm($away[7]);
        $player->setAwayFga($away[8]);
        $player->setAwayFgpct($away[9]);
        $player->setAwayFg3m($away[10]);
        $player->setAwayFg3a($away[11]);
        $player->setAwayFg3pct($away[12]);
        $player->setAwayFtm($away[13]);
        $player->setAwayFta($away[14]);
        $player->setAwayFtpct($away[15]);
        $player->setAwayOreb($away[16]);
        $player->setAwayDreb($away[17]);
        $player->setAwayReb($away[18]);
        $player->setAwayAst($away[19]);
        $player->setAwayTov($away[20]);
        $player->setAwayStl($away[21]);
        $player->setAwayBlk($away[22]);
        $player->setAwayBlka($away[23]);
        $player->setAwayPf($away[24]);
        $player->setAwayPfd($away[25]);
        $player->setAwayPts($away[26]);
        $player->setAwayPlusminus($away[27]);

        $player->setInWinWins($wins[3]);
        $player->setInWinLosses($wins[4]);
        $player->setInWinMin($wins[6]);
        $player->setInWinFgm($wins[7]);
        $player->setInWinFga($wins[8]);
        $player->setInWinFgpct($wins[9]);
        $player->setInWinFg3m($wins[10]);
        $player->setInWinFg3a($wins[11]);
        $player->setInWinFg3pct($wins[12]);
        $player->setInWinFtm($wins[13]);
        $player->setInWinFta($wins[14]);
        $player->setInWinFtpct($wins[15]);
        $player->setInWinOreb($wins[16]);
        $player->setInWinDreb($wins[17]);
        $player->setInWinReb($wins[18]);
        $player->setInWinAst($wins[19]);
        $player->setInWinTov($wins[20]);
        $player->setInWinStl($wins[21]);
        $player->setInWinBlk($wins[22]);
        $player->setInWinBlka($wins[23]);
        $player->setInWinPf($wins[24]);
        $player->setInWinPfd($wins[25]);
        $player->setInWinPts($wins[26]);
        $player->setInWinPlusminus($wins[27]);

        $player->setInLossWins($losses[3]);
        $player->setInLossLosses($losses[4]);
        $player->setInLossMin($losses[6]);
        $player->setInLossFgm($losses[7]);
        $player->setInLossFga($losses[8]);
        $player->setInLossFgpct($losses[9]);
        $player->setInLossFg3m($losses[10]);
        $player->setInLossFg3a($losses[11]);
        $player->setInLossFg3pct($losses[12]);
        $player->setInLossFtm($losses[13]);
        $player->setInLossFta($losses[14]);
        $player->setInLossFtpct($losses[15]);
        $player->setInLossOreb($losses[16]);
        $player->setInLossDreb($losses[17]);
        $player->setInLossReb($losses[18]);
        $player->setInLossAst($losses[19]);
        $player->setInLossTov($losses[20]);
        $player->setInLossStl($losses[21]);
        $player->setInLossBlk($losses[22]);
        $player->setInLossBlka($losses[23]);
        $player->setInLossPf($losses[24]);
        $player->setInLossPfd($losses[25]);
        $player->setInLossPts($losses[26]);
        $player->setInLossPlusminus($losses[27]);

        $player->setNoRestWins($rest0[3]);
        $player->setNoRestLosses($rest0[4]);
        $player->setNoRestMin($rest0[6]);
        $player->setNoRestFgm($rest0[7]);
        $player->setNoRestFga($rest0[8]);
        $player->setNoRestFgpct($rest0[9]);
        $player->setNoRestFg3m($rest0[10]);
        $player->setNoRestFg3a($rest0[11]);
        $player->setNoRestFg3pct($rest0[12]);
        $player->setNoRestFtm($rest0[13]);
        $player->setNoRestFta($rest0[14]);
        $player->setNoRestFtpct($rest0[15]);
        $player->setNoRestOreb($rest0[16]);
        $player->setNoRestDreb($rest0[17]);
        $player->setNoRestReb($rest0[18]);
        $player->setNoRestAst($rest0[19]);
        $player->setNoRestTov($rest0[20]);
        $player->setNoRestStl($rest0[21]);
        $player->setNoRestBlk($rest0[22]);
        $player->setNoRestBlka($rest0[23]);
        $player->setNoRestPf($rest0[24]);
        $player->setNoRestPfd($rest0[25]);
        $player->setNoRestPts($rest0[26]);
        $player->setNoRestPlusminus($rest0[27]);

        $player->setOneDayRestWins($rest1[3]);
        $player->setOneDayRestLosses($rest1[4]);
        $player->setOneDayRestMin($rest1[6]);
        $player->setOneDayRestFgm($rest1[7]);
        $player->setOneDayRestFga($rest1[8]);
        $player->setOneDayRestFgpct($rest1[9]);
        $player->setOneDayRestFg3m($rest1[10]);
        $player->setOneDayRestFg3a($rest1[11]);
        $player->setOneDayRestFg3pct($rest1[12]);
        $player->setOneDayRestFtm($rest1[13]);
        $player->setOneDayRestFta($rest1[14]);
        $player->setOneDayRestFtpct($rest1[15]);
        $player->setOneDayRestOreb($rest1[16]);
        $player->setOneDayRestDreb($rest1[17]);
        $player->setOneDayRestReb($rest1[18]);
        $player->setOneDayRestAst($rest1[19]);
        $player->setOneDayRestTov($rest1[20]);
        $player->setOneDayRestStl($rest1[21]);
        $player->setOneDayRestBlk($rest1[22]);
        $player->setOneDayRestBlka($rest1[23]);
        $player->setOneDayRestPf($rest1[24]);
        $player->setOneDayRestPfd($rest1[25]);
        $player->setOneDayRestPts($rest1[26]);
        $player->setOneDayRestPlusminus($rest1[27]);

        $player->setTwoDayRestWins($rest2[3]);
        $player->setTwoDayRestLosses($rest2[4]);
        $player->setTwoDayRestMin($rest2[6]);
        $player->setTwoDayRestFgm($rest2[7]);
        $player->setTwoDayRestFga($rest2[8]);
        $player->setTwoDayRestFgpct($rest2[9]);
        $player->setTwoDayRestFg3m($rest2[10]);
        $player->setTwoDayRestFg3a($rest2[11]);
        $player->setTwoDayRestFg3pct($rest2[12]);
        $player->setTwoDayRestFtm($rest2[13]);
        $player->setTwoDayRestFta($rest2[14]);
        $player->setTwoDayRestFtpct($rest2[15]);
        $player->setTwoDayRestOreb($rest2[16]);
        $player->setTwoDayRestDreb($rest2[17]);
        $player->setTwoDayRestReb($rest2[18]);
        $player->setTwoDayRestAst($rest2[19]);
        $player->setTwoDayRestTov($rest2[20]);
        $player->setTwoDayRestStl($rest2[21]);
        $player->setTwoDayRestBlk($rest2[22]);
        $player->setTwoDayRestBlka($rest2[23]);
        $player->setTwoDayRestPf($rest2[24]);
        $player->setTwoDayRestPfd($rest2[25]);
        $player->setTwoDayRestPts($rest2[26]);
        $player->setTwoDayRestPlusminus($rest2[27]);

        $player->setThreeDayRestWins($rest3[3]);
        $player->setThreeDayRestLosses($rest3[4]);
        $player->setThreeDayRestMin($rest3[6]);
        $player->setThreeDayRestFgm($rest3[7]);
        $player->setThreeDayRestFga($rest3[8]);
        $player->setThreeDayRestFgpct($rest3[9]);
        $player->setThreeDayRestFg3m($rest3[10]);
        $player->setThreeDayRestFg3a($rest3[11]);
        $player->setThreeDayRestFg3pct($rest3[12]);
        $player->setThreeDayRestFtm($rest3[13]);
        $player->setThreeDayRestFta($rest3[14]);
        $player->setThreeDayRestFtpct($rest3[15]);
        $player->setThreeDayRestOreb($rest3[16]);
        $player->setThreeDayRestDreb($rest3[17]);
        $player->setThreeDayRestReb($rest3[18]);
        $player->setThreeDayRestAst($rest3[19]);
        $player->setThreeDayRestTov($rest3[20]);
        $player->setThreeDayRestStl($rest3[21]);
        $player->setThreeDayRestBlk($rest3[22]);
        $player->setThreeDayRestBlka($rest3[23]);
        $player->setThreeDayRestPf($rest3[24]);
        $player->setThreeDayRestPfd($rest3[25]);
        $player->setThreeDayRestPts($rest3[26]);
        $player->setThreeDayRestPlusminus($rest3[27]);

        $player->setFourDayRestWins($rest4[3]);
        $player->setFourDayRestLosses($rest4[4]);
        $player->setFourDayRestMin($rest4[6]);
        $player->setFourDayRestFgm($rest4[7]);
        $player->setFourDayRestFga($rest4[8]);
        $player->setFourDayRestFgpct($rest4[9]);
        $player->setFourDayRestFg3m($rest4[10]);
        $player->setFourDayRestFg3a($rest4[11]);
        $player->setFourDayRestFg3pct($rest4[12]);
        $player->setFourDayRestFtm($rest4[13]);
        $player->setFourDayRestFta($rest4[14]);
        $player->setFourDayRestFtpct($rest4[15]);
        $player->setFourDayRestOreb($rest4[16]);
        $player->setFourDayRestDreb($rest4[17]);
        $player->setFourDayRestReb($rest4[18]);
        $player->setFourDayRestAst($rest4[19]);
        $player->setFourDayRestTov($rest4[20]);
        $player->setFourDayRestStl($rest4[21]);
        $player->setFourDayRestBlk($rest4[22]);
        $player->setFourDayRestBlka($rest4[23]);
        $player->setFourDayRestPf($rest4[24]);
        $player->setFourDayRestPfd($rest4[25]);
        $player->setFourDayRestPts($rest4[26]);
        $player->setFourDayRestPlusminus($rest4[27]);

        return $player;
    }

    public function shots(Player $player)
    {
        $request = PlayerShotsStatsRequest::fromArray([
            'season' => '2017-18',
            'playerId' => $player->player_id,
            'teamId' => $player->team_id
        ]);

        $response = $this->client->request($request);

        $objectResponse = $response->getArrayFromJson();

        dd($objectResponse);
    }
}