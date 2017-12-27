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

        $generalShotData = $objectResponse['resultSets'][0]['rowSet'][0];
        $generalCatchShoot = $objectResponse['resultSets'][1]['rowSet'][0];
        $generalPullUp = $objectResponse['resultSets'][1]['rowSet'][1];
        $generalLess10 = $objectResponse['resultSets'][1]['rowSet'][2];
        $noDribble = $objectResponse['resultSets'][3]['rowSet'][0];
        $oneDribble = $objectResponse['resultSets'][3]['rowSet'][1];
        $twoDribble = $objectResponse['resultSets'][3]['rowSet'][2];
        $threeSixDribble = $objectResponse['resultSets'][3]['rowSet'][3];
        $sevenDribble = $objectResponse['resultSets'][3]['rowSet'][4];
        $closestDefenderVeryTight = $objectResponse['resultSets'][4]['rowSet'][0];
        $closestDefenderTight = $objectResponse['resultSets'][4]['rowSet'][1];
        $closestDefenderOpen = $objectResponse['resultSets'][4]['rowSet'][2];
        $closestDefenderVeryOpen = $objectResponse['resultSets'][4]['rowSet'][3];

        $player->setGeneralShotsGamesPlayed($generalShotData[3]);
        $player->setGeneralShotsGames($generalShotData[4]);
        $player->setGeneralShotsFgaFrequency($generalShotData[6]);
        $player->setGeneralShotsFgm($generalShotData[7]);
        $player->setGeneralShotsFga($generalShotData[8]);
        $player->setGeneralShotsFgPct($generalShotData[9]);
        $player->setGeneralShotsEfgPct($generalShotData[10]);
        $player->setGeneralShotsFg2aFrequency($generalShotData[11]);
        $player->setGeneralShotsFg2m($generalShotData[12]);
        $player->setGeneralShotsFg2a($generalShotData[13]);
        $player->setGeneralShotsFg2Pct($generalShotData[14]);
        $player->setGeneralShotsFg3aFrequency($generalShotData[15]);
        $player->setGeneralShotsFg3m($generalShotData[16]);
        $player->setGeneralShotsFg3a($generalShotData[17]);
        $player->setGeneralShotsFg3Pct($generalShotData[18]);

        $player->setGeneralCatchShootGamesPlayed($generalCatchShoot[3]);
        $player->setGeneralCatchShootGames($generalCatchShoot[4]);
        $player->setGeneralCatchShootFgaFrequency($generalCatchShoot[6]);
        $player->setGeneralCatchShootFgm($generalCatchShoot[7]);
        $player->setGeneralCatchShootFga($generalCatchShoot[8]);
        $player->setGeneralCatchShootFgPct($generalCatchShoot[9]);
        $player->setGeneralCatchShootEfgPct($generalCatchShoot[10]);
        $player->setGeneralCatchShootFg2aFrequency($generalCatchShoot[11]);
        $player->setGeneralCatchShootFg2m($generalCatchShoot[12]);
        $player->setGeneralCatchShootFg2a($generalCatchShoot[13]);
        $player->setGeneralCatchShootFg2Pct($generalCatchShoot[14]);
        $player->setGeneralCatchShootFg3aFrequency($generalCatchShoot[15]);
        $player->setGeneralCatchShootFg3m($generalCatchShoot[16]);
        $player->setGeneralCatchShootFg3a($generalCatchShoot[17]);
        $player->setGeneralCatchShootFg3Pct($generalCatchShoot[18]);

        $player->setGeneralPullUpGamesPlayed($generalPullUp[3]);
        $player->setGeneralPullUpGames($generalPullUp[4]);
        $player->setGeneralPullUpFgaFrequency($generalPullUp[6]);
        $player->setGeneralPullUpFgm($generalPullUp[7]);
        $player->setGeneralPullUpFga($generalPullUp[8]);
        $player->setGeneralPullUpFgPct($generalPullUp[9]);
        $player->setGeneralPullUpEfgPct($generalPullUp[10]);
        $player->setGeneralPullUpFg2aFrequency($generalPullUp[11]);
        $player->setGeneralPullUpFg2m($generalPullUp[12]);
        $player->setGeneralPullUpFg2a($generalPullUp[13]);
        $player->setGeneralPullUpFg2Pct($generalPullUp[14]);
        $player->setGeneralPullUpFg3aFrequency($generalPullUp[15]);
        $player->setGeneralPullUpFg3m($generalPullUp[16]);
        $player->setGeneralPullUpFg3a($generalPullUp[17]);
        $player->setGeneralPullUpFg3Pct($generalPullUp[18]);

        $player->setGeneralLess10GamesPlayed($generalLess10[3]);
        $player->setGeneralLess10Games($generalLess10[4]);
        $player->setGeneralLess10FgaFrequency($generalLess10[6]);
        $player->setGeneralLess10Fgm($generalLess10[7]);
        $player->setGeneralLess10Fga($generalLess10[8]);
        $player->setGeneralLess10FgPct($generalLess10[9]);
        $player->setGeneralLess10EfgPct($generalLess10[10]);
        $player->setGeneralLess10Fg2aFrequency($generalLess10[11]);
        $player->setGeneralLess10Fg2m($generalLess10[12]);
        $player->setGeneralLess10Fg2a($generalLess10[13]);
        $player->setGeneralLess10Fg2Pct($generalLess10[14]);
        $player->setGeneralLess10Fg3aFrequency($generalLess10[15]);
        $player->setGeneralLess10Fg3m($generalLess10[16]);
        $player->setGeneralLess10Fg3a($generalLess10[17]);
        $player->setGeneralLess10Fg3Pct($generalLess10[18]);

        $player->setNoDribbleGamesPlayed($noDribble[3]);
        $player->setNoDribbleGames($noDribble[4]);
        $player->setNoDribbleFgaFrequency($noDribble[6]);
        $player->setNoDribbleFgm($noDribble[7]);
        $player->setNoDribbleFga($noDribble[8]);
        $player->setNoDribbleFgPct($noDribble[9]);
        $player->setNoDribbleEfgPct($noDribble[10]);
        $player->setNoDribbleFg2aFrequency($noDribble[11]);
        $player->setNoDribbleFg2m($noDribble[12]);
        $player->setNoDribbleFg2a($noDribble[13]);
        $player->setNoDribbleFg2Pct($noDribble[14]);
        $player->setNoDribbleFg3aFrequency($noDribble[15]);
        $player->setNoDribbleFg3m($noDribble[16]);
        $player->setNoDribbleFg3a($noDribble[17]);
        $player->setNoDribbleFg3Pct($noDribble[18]);

        $player->setOneDribbleGamesPlayed($oneDribble[3]);
        $player->setOneDribbleGames($oneDribble[4]);
        $player->setOneDribbleFgaFrequency($oneDribble[6]);
        $player->setOneDribbleFgm($oneDribble[7]);
        $player->setOneDribbleFga($oneDribble[8]);
        $player->setOneDribbleFgPct($oneDribble[9]);
        $player->setOneDribbleEfgPct($oneDribble[10]);
        $player->setOneDribbleFg2aFrequency($oneDribble[11]);
        $player->setOneDribbleFg2m($oneDribble[12]);
        $player->setOneDribbleFg2a($oneDribble[13]);
        $player->setOneDribbleFg2Pct($oneDribble[14]);
        $player->setOneDribbleFg3aFrequency($oneDribble[15]);
        $player->setOneDribbleFg3m($oneDribble[16]);
        $player->setOneDribbleFg3a($oneDribble[17]);
        $player->setOneDribbleFg3Pct($oneDribble[18]);

        $player->setTwoDribbleGamesPlayed($twoDribble[3]);
        $player->setTwoDribbleGames($twoDribble[4]);
        $player->setTwoDribbleFgaFrequency($twoDribble[6]);
        $player->setTwoDribbleFgm($twoDribble[7]);
        $player->setTwoDribbleFga($twoDribble[8]);
        $player->setTwoDribbleFgPct($twoDribble[9]);
        $player->setTwoDribbleEfgPct($twoDribble[10]);
        $player->setTwoDribbleFg2aFrequency($twoDribble[11]);
        $player->setTwoDribbleFg2m($twoDribble[12]);
        $player->setTwoDribbleFg2a($twoDribble[13]);
        $player->setTwoDribbleFg2Pct($twoDribble[14]);
        $player->setTwoDribbleFg3aFrequency($twoDribble[15]);
        $player->setTwoDribbleFg3m($twoDribble[16]);
        $player->setTwoDribbleFg3a($twoDribble[17]);
        $player->setTwoDribbleFg3Pct($twoDribble[18]);

        $player->setThreeSixDribbleGamesPlayed($threeSixDribble[3]);
        $player->setThreeSixDribbleGames($threeSixDribble[4]);
        $player->setThreeSixDribbleFgaFrequency($threeSixDribble[6]);
        $player->setThreeSixDribbleFgm($threeSixDribble[7]);
        $player->setThreeSixDribbleFga($threeSixDribble[8]);
        $player->setThreeSixDribbleFgPct($threeSixDribble[9]);
        $player->setThreeSixDribbleEfgPct($threeSixDribble[10]);
        $player->setThreeSixDribbleFg2aFrequency($threeSixDribble[11]);
        $player->setThreeSixDribbleFg2m($threeSixDribble[12]);
        $player->setThreeSixDribbleFg2a($threeSixDribble[13]);
        $player->setThreeSixDribbleFg2Pct($threeSixDribble[14]);
        $player->setThreeSixDribbleFg3aFrequency($threeSixDribble[15]);
        $player->setThreeSixDribbleFg3m($threeSixDribble[16]);
        $player->setThreeSixDribbleFg3a($threeSixDribble[17]);
        $player->setThreeSixDribbleFg3Pct($threeSixDribble[18]);

        $player->setSevenDribbleGamesPlayed($sevenDribble[3]);
        $player->setSevenDribbleGames($sevenDribble[4]);
        $player->setSevenDribbleFgaFrequency($sevenDribble[6]);
        $player->setSevenDribbleFgm($sevenDribble[7]);
        $player->setSevenDribbleFga($sevenDribble[8]);
        $player->setSevenDribbleFgPct($sevenDribble[9]);
        $player->setSevenDribbleEfgPct($sevenDribble[10]);
        $player->setSevenDribbleFg2aFrequency($sevenDribble[11]);
        $player->setSevenDribbleFg2m($sevenDribble[12]);
        $player->setSevenDribbleFg2a($sevenDribble[13]);
        $player->setSevenDribbleFg2Pct($sevenDribble[14]);
        $player->setSevenDribbleFg3aFrequency($sevenDribble[15]);
        $player->setSevenDribbleFg3m($sevenDribble[16]);
        $player->setSevenDribbleFg3a($sevenDribble[17]);
        $player->setSevenDribbleFg3Pct($sevenDribble[18]);

        $player->setClosestDefenderVeryTightRange($closestDefenderVeryTight[5]);
        $player->setClosestDefenderVeryTightGamesPlayed($closestDefenderVeryTight[3]);
        $player->setClosestDefenderVeryTightGames($closestDefenderVeryTight[4]);
        $player->setClosestDefenderVeryTightFgaFrequency($closestDefenderVeryTight[6]);
        $player->setClosestDefenderVeryTightFgm($closestDefenderVeryTight[7]);
        $player->setClosestDefenderVeryTightFga($closestDefenderVeryTight[8]);
        $player->setClosestDefenderVeryTightFgPct($closestDefenderVeryTight[9]);
        $player->setClosestDefenderVeryTightEfgPct($closestDefenderVeryTight[10]);
        $player->setClosestDefenderVeryTightFg2aFrequency($closestDefenderVeryTight[11]);
        $player->setClosestDefenderVeryTightFg2m($closestDefenderVeryTight[12]);
        $player->setClosestDefenderVeryTightFg2a($closestDefenderVeryTight[13]);
        $player->setClosestDefenderVeryTightFg2Pct($closestDefenderVeryTight[14]);
        $player->setClosestDefenderVeryTightFg3aFrequency($closestDefenderVeryTight[15]);
        $player->setClosestDefenderVeryTightFg3m($closestDefenderVeryTight[16]);
        $player->setClosestDefenderVeryTightFg3a($closestDefenderVeryTight[17]);
        $player->setClosestDefenderVeryTightFg3Pct($closestDefenderVeryTight[18]);

        $player->setClosestDefenderTightRange($closestDefenderTight[5]);
        $player->setClosestDefenderTightGamesPlayed($closestDefenderTight[3]);
        $player->setClosestDefenderTightGames($closestDefenderTight[4]);
        $player->setClosestDefenderTightFgaFrequency($closestDefenderTight[6]);
        $player->setClosestDefenderTightFgm($closestDefenderTight[7]);
        $player->setClosestDefenderTightFga($closestDefenderTight[8]);
        $player->setClosestDefenderTightFgPct($closestDefenderTight[9]);
        $player->setClosestDefenderTightEfgPct($closestDefenderTight[10]);
        $player->setClosestDefenderTightFg2aFrequency($closestDefenderTight[11]);
        $player->setClosestDefenderTightFg2m($closestDefenderTight[12]);
        $player->setClosestDefenderTightFg2a($closestDefenderTight[13]);
        $player->setClosestDefenderTightFg2Pct($closestDefenderTight[14]);
        $player->setClosestDefenderTightFg3aFrequency($closestDefenderTight[15]);
        $player->setClosestDefenderTightFg3m($closestDefenderTight[16]);
        $player->setClosestDefenderTightFg3a($closestDefenderTight[17]);
        $player->setClosestDefenderTightFg3Pct($closestDefenderTight[18]);

        $player->setClosestDefenderOpenRange($closestDefenderOpen[5]);
        $player->setClosestDefenderOpenGamesPlayed($closestDefenderOpen[3]);
        $player->setClosestDefenderOpenGames($closestDefenderOpen[4]);
        $player->setClosestDefenderOpenFgaFrequency($closestDefenderOpen[6]);
        $player->setClosestDefenderOpenFgm($closestDefenderOpen[7]);
        $player->setClosestDefenderOpenFga($closestDefenderOpen[8]);
        $player->setClosestDefenderOpenFgPct($closestDefenderOpen[9]);
        $player->setClosestDefenderOpenEfgPct($closestDefenderOpen[10]);
        $player->setClosestDefenderOpenFg2aFrequency($closestDefenderOpen[11]);
        $player->setClosestDefenderOpenFg2m($closestDefenderOpen[12]);
        $player->setClosestDefenderOpenFg2a($closestDefenderOpen[13]);
        $player->setClosestDefenderOpenFg2Pct($closestDefenderOpen[14]);
        $player->setClosestDefenderOpenFg3aFrequency($closestDefenderOpen[15]);
        $player->setClosestDefenderOpenFg3m($closestDefenderOpen[16]);
        $player->setClosestDefenderOpenFg3a($closestDefenderOpen[17]);
        $player->setClosestDefenderOpenFg3Pct($closestDefenderOpen[18]);

        $player->setClosestDefenderVeryOpenRange($closestDefenderVeryOpen[5]);
        $player->setClosestDefenderVeryOpenGamesPlayed($closestDefenderVeryOpen[3]);
        $player->setClosestDefenderVeryOpenGames($closestDefenderVeryOpen[4]);
        $player->setClosestDefenderVeryOpenFgaFrequency($closestDefenderVeryOpen[6]);
        $player->setClosestDefenderVeryOpenFgm($closestDefenderVeryOpen[7]);
        $player->setClosestDefenderVeryOpenFga($closestDefenderVeryOpen[8]);
        $player->setClosestDefenderVeryOpenFgPct($closestDefenderVeryOpen[9]);
        $player->setClosestDefenderVeryOpenEfgPct($closestDefenderVeryOpen[10]);
        $player->setClosestDefenderVeryOpenFg2aFrequency($closestDefenderVeryOpen[11]);
        $player->setClosestDefenderVeryOpenFg2m($closestDefenderVeryOpen[12]);
        $player->setClosestDefenderVeryOpenFg2a($closestDefenderVeryOpen[13]);
        $player->setClosestDefenderVeryOpenFg2Pct($closestDefenderVeryOpen[14]);
        $player->setClosestDefenderVeryOpenFg3aFrequency($closestDefenderVeryOpen[15]);
        $player->setClosestDefenderVeryOpenFg3m($closestDefenderVeryOpen[16]);
        $player->setClosestDefenderVeryOpenFg3a($closestDefenderVeryOpen[17]);
        $player->setClosestDefenderVeryOpenFg3Pct($closestDefenderVeryOpen[18]);

        return $player;
    }
}