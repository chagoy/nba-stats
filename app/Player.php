<?php

namespace App;

use App\Repositories\PlayersRepository;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function setSchool($school)
    {
        $this->school = $school;
    }

    public function setCountry($country) 
    {
        $this->country = $country;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }
    
    public function setTeamName($name)
    {
        $this->teamName = $name;
    }

    public function setTeamCity($city)
    {
        $this->teamCity = $city;
    }

    public function setDraftYear($year)
    {
        $this->draftYear = $year;
    }

    public function setDraftRound($round)
    {
        $this->draftRound = $round;
    }

    public function setDraftNumber($number)
    {
        $this->draftNumber = $number;
    }

    public function setCareerStats($stats)
    {
        $this->careerStats = $stats;
    }

    public function setLast5Wins($stats)
    {
        $this->last5Wins = $stats;
    }

    public function setLast5Losses($stats)
    {
        $this->last5Losses = $stats;
    }

    public function setLast5Min($stats)
    {
        $this->last5Min = $stats;
    }

    public function setLast5Fgm($stats)
    {
        $this->last5Fgm = $stats;
    }

    public function setLast5Fga($stats)
    {
        $this->last5Fga = $stats;
    }

    public function setLast5Fgpct($stats)
    {
        $this->last5Fgpct = $stats;
    }

    public function setLast5Fg3m($stats)
    {
        $this->last5Fgm = $stats;
    }

    public function setLast5Fg3a($stats)
    {
        $this->last5Fga = $stats;
    }

    public function setLast5Fg3pct($stats)
    {
        $this->last5Fgpct = $stats;
    }

    public function setLast5Ftm($stats)
    {
        $this->last5Ftm = $stats;
    }

    public function setLast5Fta($stats)
    {
        $this->last5Fta = $stats;
    }

    public function setLast5Ftpct($stats)
    {
        $this->last5Ftpct = $stats;
    }

    public function setLast5Oreb($stats)
    {
        $this->last5Oreb = $stats;
    }

    public function setLast5Dreb($stats)
    {
        $this->last5Dreb = $stats;
    }

    public function setLast5Reb($stats)
    {
        $this->last5Reb = $stats;
    }

    public function setLast5Ast($stats)
    {
        $this->last5Ast = $stats;
    }

    public function setLast5Tov($stats)
    {
        $this->last5Tov = $stats;
    }

    public function setLast5Stl($stats)
    {
        $this->last5Stl = $stats;
    }

    public function setLast5Blk($stats)
    {
        $this->last5Blk = $stats;
    }

    public function setLast5Blka($stats)
    {
        $this->last5Blka = $stats;
    }

    public function setLast5Pf($stats)
    {
        $this->last5Pf = $stats;
    }

    public function setLast5Pfd($stats)
    {
        $this->last5Pfd = $stats;
    }

    public function setLast5Pts($stats)
    {
        $this->last5Pts = $stats;
    }

    public function setLast5Plusminus($stats)
    {
        $this->last5Plusminus = $stats;
    }

    public function setHomeWins($stats)
    {
        $this->homeWins = $stats;
    }

    public function setHomeLosses($stats)
    {
        $this->homeLosses = $stats;
    }

    public function setHomeMin($stats)
    {
        $this->homeMin = $stats;
    }

    public function setHomeFgm($stats)
    {
        $this->homeFgm = $stats;
    }

    public function setHomeFga($stats)
    {
        $this->homeFga = $stats;
    }

    public function setHomeFgpct($stats)
    {
        $this->homeFgpct = $stats;
    }

    public function setHomeFg3m($stats)
    {
        $this->homeFgm = $stats;
    }

    public function setHomeFg3a($stats)
    {
        $this->homeFga = $stats;
    }

    public function setHomeFg3pct($stats)
    {
        $this->homeFgpct = $stats;
    }

    public function setHomeFtm($stats)
    {
        $this->homeFtm = $stats;
    }

    public function setHomeFta($stats)
    {
        $this->homeFta = $stats;
    }

    public function setHomeFtpct($stats)
    {
        $this->homeFtpct = $stats;
    }

    public function setHomeOreb($stats)
    {
        $this->homeOreb = $stats;
    }

    public function setHomeDreb($stats)
    {
        $this->homeDreb = $stats;
    }

    public function setHomeReb($stats)
    {
        $this->homeReb = $stats;
    }

    public function setHomeAst($stats)
    {
        $this->homeAst = $stats;
    }

    public function setHomeTov($stats)
    {
        $this->homeTov = $stats;
    }

    public function setHomeStl($stats)
    {
        $this->homeStl = $stats;
    }

    public function setHomeBlk($stats)
    {
        $this->homeBlk = $stats;
    }

    public function setHomeBlka($stats)
    {
        $this->homeBlka = $stats;
    }

    public function setHomePf($stats)
    {
        $this->homePf = $stats;
    }

    public function setHomePfd($stats)
    {
        $this->homePfd = $stats;
    }

    public function setHomePts($stats)
    {
        $this->homePts = $stats;
    }

    public function setHomePlusminus($stats)
    {
        $this->homePlusminus = $stats;
    }

    public function setAwayWins($stats)
    {
        $this->awayWins = $stats;
    }

    public function setAwayLosses($stats)
    {
        $this->awayLosses = $stats;
    }

    public function setAwayMin($stats)
    {
        $this->awayMin = $stats;
    }

    public function setAwayFgm($stats)
    {
        $this->awayFgm = $stats;
    }

    public function setAwayFga($stats)
    {
        $this->awayFga = $stats;
    }

    public function setAwayFgpct($stats)
    {
        $this->awayFgpct = $stats;
    }

    public function setAwayFg3m($stats)
    {
        $this->awayFgm = $stats;
    }

    public function setAwayFg3a($stats)
    {
        $this->awayFga = $stats;
    }

    public function setAwayFg3pct($stats)
    {
        $this->awayFgpct = $stats;
    }

    public function setAwayFtm($stats)
    {
        $this->awayFtm = $stats;
    }

    public function setAwayFta($stats)
    {
        $this->awayFta = $stats;
    }

    public function setAwayFtpct($stats)
    {
        $this->awayFtpct = $stats;
    }

    public function setAwayOreb($stats)
    {
        $this->awayOreb = $stats;
    }

    public function setAwayDreb($stats)
    {
        $this->awayDreb = $stats;
    }

    public function setAwayReb($stats)
    {
        $this->awayReb = $stats;
    }

    public function setAwayAst($stats)
    {
        $this->awayAst = $stats;
    }

    public function setAwayTov($stats)
    {
        $this->awayTov = $stats;
    }

    public function setAwayStl($stats)
    {
        $this->awayStl = $stats;
    }

    public function setAwayBlk($stats)
    {
        $this->awayBlk = $stats;
    }

    public function setAwayBlka($stats)
    {
        $this->awayBlka = $stats;
    }

    public function setAwayPf($stats)
    {
        $this->awayPf = $stats;
    }

    public function setAwayPfd($stats)
    {
        $this->awayPfd = $stats;
    }

    public function setAwayPts($stats)
    {
        $this->awayPts = $stats;
    }

    public function setAwayPlusminus($stats)
    {
        $this->awayPlusminus = $stats;
    }

    public function setInWinWins($stats)
    {
        $this->winWins = $stats;
    }

    public function setInWinLosses($stats)
    {
        $this->winLosses = $stats;
    }

    public function setInWinMin($stats)
    {
        $this->winMin = $stats;
    }

    public function setInWinFgm($stats)
    {
        $this->winFgm = $stats;
    }

    public function setInWinFga($stats)
    {
        $this->winFga = $stats;
    }

    public function setInWinFgpct($stats)
    {
        $this->winFgpct = $stats;
    }

    public function setInWinFg3m($stats)
    {
        $this->winFgm = $stats;
    }

    public function setInWinFg3a($stats)
    {
        $this->winFga = $stats;
    }

    public function setInWinFg3pct($stats)
    {
        $this->winFgpct = $stats;
    }

    public function setInWinFtm($stats)
    {
        $this->winFtm = $stats;
    }

    public function setInWinFta($stats)
    {
        $this->winFta = $stats;
    }

    public function setInWinFtpct($stats)
    {
        $this->winFtpct = $stats;
    }

    public function setInWinOreb($stats)
    {
        $this->winOreb = $stats;
    }

    public function setInWinDreb($stats)
    {
        $this->winDreb = $stats;
    }

    public function setInWinReb($stats)
    {
        $this->winReb = $stats;
    }

    public function setInWinAst($stats)
    {
        $this->winAst = $stats;
    }

    public function setInWinTov($stats)
    {
        $this->winTov = $stats;
    }

    public function setInWinStl($stats)
    {
        $this->winStl = $stats;
    }

    public function setInWinBlk($stats)
    {
        $this->winBlk = $stats;
    }

    public function setInWinBlka($stats)
    {
        $this->winBlka = $stats;
    }

    public function setInWinPf($stats)
    {
        $this->winPf = $stats;
    }

    public function setInWinPfd($stats)
    {
        $this->winPfd = $stats;
    }

    public function setInWinPts($stats)
    {
        $this->winPts = $stats;
    }

    public function setInWinPlusminus($stats)
    {
        $this->winPlusminus = $stats;
    }

    public function setInLossWins($stats)
    {
        $this->lossWins = $stats;
    }

    public function setInLossLosses($stats)
    {
        $this->lossLosses = $stats;
    }

    public function setInLossMin($stats)
    {
        $this->lossMin = $stats;
    }

    public function setInLossFgm($stats)
    {
        $this->lossFgm = $stats;
    }

    public function setInLossFga($stats)
    {
        $this->lossFga = $stats;
    }

    public function setInLossFgpct($stats)
    {
        $this->lossFgpct = $stats;
    }

    public function setInLossFg3m($stats)
    {
        $this->lossFgm = $stats;
    }

    public function setInLossFg3a($stats)
    {
        $this->lossFga = $stats;
    }

    public function setInLossFg3pct($stats)
    {
        $this->lossFgpct = $stats;
    }

    public function setInLossFtm($stats)
    {
        $this->lossFtm = $stats;
    }

    public function setInLossFta($stats)
    {
        $this->lossFta = $stats;
    }

    public function setInLossFtpct($stats)
    {
        $this->lossFtpct = $stats;
    }

    public function setInLossOreb($stats)
    {
        $this->lossOreb = $stats;
    }

    public function setInLossDreb($stats)
    {
        $this->lossDreb = $stats;
    }

    public function setInLossReb($stats)
    {
        $this->lossReb = $stats;
    }

    public function setInLossAst($stats)
    {
        $this->lossAst = $stats;
    }

    public function setInLossTov($stats)
    {
        $this->lossTov = $stats;
    }

    public function setInLossStl($stats)
    {
        $this->lossStl = $stats;
    }

    public function setInLossBlk($stats)
    {
        $this->lossBlk = $stats;
    }

    public function setInLossBlka($stats)
    {
        $this->lossBlka = $stats;
    }

    public function setInLossPf($stats)
    {
        $this->lossPf = $stats;
    }

    public function setInLossPfd($stats)
    {
        $this->lossPfd = $stats;
    }

    public function setInLossPts($stats)
    {
        $this->lossPts = $stats;
    }

    public function setInLossPlusminus($stats)
    {
        $this->lossPlusminus = $stats;
    }

    public function setNoRestWins($stats)
    {
        $this->noRestWins = $stats;
    }

    public function setNoRestLosses($stats)
    {
        $this->noRestLosses = $stats;
    }

    public function setNoRestMin($stats)
    {
        $this->noRestMin = $stats;
    }

    public function setNoRestFgm($stats)
    {
        $this->noRestFgm = $stats;
    }

    public function setNoRestFga($stats)
    {
        $this->noRestFga = $stats;
    }

    public function setNoRestFgpct($stats)
    {
        $this->noRestFgpct = $stats;
    }

    public function setNoRestFg3m($stats)
    {
        $this->noRestFgm = $stats;
    }

    public function setNoRestFg3a($stats)
    {
        $this->noRestFga = $stats;
    }

    public function setNoRestFg3pct($stats)
    {
        $this->noRestFgpct = $stats;
    }

    public function setNoRestFtm($stats)
    {
        $this->noRestFtm = $stats;
    }

    public function setNoRestFta($stats)
    {
        $this->noRestFta = $stats;
    }

    public function setNoRestFtpct($stats)
    {
        $this->noRestFtpct = $stats;
    }

    public function setNoRestOreb($stats)
    {
        $this->noRestOreb = $stats;
    }

    public function setNoRestDreb($stats)
    {
        $this->noRestDreb = $stats;
    }

    public function setNoRestReb($stats)
    {
        $this->noRestReb = $stats;
    }

    public function setNoRestAst($stats)
    {
        $this->noRestAst = $stats;
    }

    public function setNoRestTov($stats)
    {
        $this->noRestTov = $stats;
    }

    public function setNoRestStl($stats)
    {
        $this->noRestStl = $stats;
    }

    public function setNoRestBlk($stats)
    {
        $this->noRestBlk = $stats;
    }

    public function setNoRestBlka($stats)
    {
        $this->noRestBlka = $stats;
    }

    public function setNoRestPf($stats)
    {
        $this->noRestPf = $stats;
    }

    public function setNoRestPfd($stats)
    {
        $this->noRestPfd = $stats;
    }

    public function setNoRestPts($stats)
    {
        $this->noRestPts = $stats;
    }

    public function setNoRestPlusminus($stats)
    {
        $this->noRestPlusminus = $stats;
    }

    public function setOneDayRestWins($stats)
    {
        $this->oneDayRestWins = $stats;
    }

    public function setOneDayRestLosses($stats)
    {
        $this->oneDayRestLosses = $stats;
    }

    public function setOneDayRestMin($stats)
    {
        $this->oneDayRestMin = $stats;
    }

    public function setOneDayRestFgm($stats)
    {
        $this->oneDayRestFgm = $stats;
    }

    public function setOneDayRestFga($stats)
    {
        $this->oneDayRestFga = $stats;
    }

    public function setOneDayRestFgpct($stats)
    {
        $this->oneDayRestFgpct = $stats;
    }

    public function setOneDayRestFg3m($stats)
    {
        $this->oneDayRestFgm = $stats;
    }

    public function setOneDayRestFg3a($stats)
    {
        $this->oneDayRestFga = $stats;
    }

    public function setOneDayRestFg3pct($stats)
    {
        $this->oneDayRestFgpct = $stats;
    }

    public function setOneDayRestFtm($stats)
    {
        $this->oneDayRestFtm = $stats;
    }

    public function setOneDayRestFta($stats)
    {
        $this->oneDayRestFta = $stats;
    }

    public function setOneDayRestFtpct($stats)
    {
        $this->oneDayRestFtpct = $stats;
    }

    public function setOneDayRestOreb($stats)
    {
        $this->oneDayRestOreb = $stats;
    }

    public function setOneDayRestDreb($stats)
    {
        $this->oneDayRestDreb = $stats;
    }

    public function setOneDayRestReb($stats)
    {
        $this->oneDayRestReb = $stats;
    }

    public function setOneDayRestAst($stats)
    {
        $this->oneDayRestAst = $stats;
    }

    public function setOneDayRestTov($stats)
    {
        $this->oneDayRestTov = $stats;
    }

    public function setOneDayRestStl($stats)
    {
        $this->oneDayRestStl = $stats;
    }

    public function setOneDayRestBlk($stats)
    {
        $this->oneDayRestBlk = $stats;
    }

    public function setOneDayRestBlka($stats)
    {
        $this->oneDayRestBlka = $stats;
    }

    public function setOneDayRestPf($stats)
    {
        $this->oneDayRestPf = $stats;
    }

    public function setOneDayRestPfd($stats)
    {
        $this->oneDayRestPfd = $stats;
    }

    public function setOneDayRestPts($stats)
    {
        $this->oneDayRestPts = $stats;
    }

    public function setOneDayRestPlusminus($stats)
    {
        $this->oneDayRestPlusminus = $stats;
    }

    public function setTwoDayRestWins($stats)
    {
        $this->twoDayRestWins = $stats;
    }

    public function setTwoDayRestLosses($stats)
    {
        $this->twoDayRestLosses = $stats;
    }

    public function setTwoDayRestMin($stats)
    {
        $this->twoDayRestMin = $stats;
    }

    public function setTwoDayRestFgm($stats)
    {
        $this->twoDayRestFgm = $stats;
    }

    public function setTwoDayRestFga($stats)
    {
        $this->twoDayRestFga = $stats;
    }

    public function setTwoDayRestFgpct($stats)
    {
        $this->twoDayRestFgpct = $stats;
    }

    public function setTwoDayRestFg3m($stats)
    {
        $this->twoDayRestFgm = $stats;
    }

    public function setTwoDayRestFg3a($stats)
    {
        $this->twoDayRestFga = $stats;
    }

    public function setTwoDayRestFg3pct($stats)
    {
        $this->twoDayRestFgpct = $stats;
    }

    public function setTwoDayRestFtm($stats)
    {
        $this->twoDayRestFtm = $stats;
    }

    public function setTwoDayRestFta($stats)
    {
        $this->twoDayRestFta = $stats;
    }

    public function setTwoDayRestFtpct($stats)
    {
        $this->twoDayRestFtpct = $stats;
    }

    public function setTwoDayRestOreb($stats)
    {
        $this->twoDayRestOreb = $stats;
    }

    public function setTwoDayRestDreb($stats)
    {
        $this->twoDayRestDreb = $stats;
    }

    public function setTwoDayRestReb($stats)
    {
        $this->twoDayRestReb = $stats;
    }

    public function setTwoDayRestAst($stats)
    {
        $this->twoDayRestAst = $stats;
    }

    public function setTwoDayRestTov($stats)
    {
        $this->twoDayRestTov = $stats;
    }

    public function setTwoDayRestStl($stats)
    {
        $this->twoDayRestStl = $stats;
    }

    public function setTwoDayRestBlk($stats)
    {
        $this->twoDayRestBlk = $stats;
    }

    public function setTwoDayRestBlka($stats)
    {
        $this->twoDayRestBlka = $stats;
    }

    public function setTwoDayRestPf($stats)
    {
        $this->twoDayRestPf = $stats;
    }

    public function setTwoDayRestPfd($stats)
    {
        $this->twoDayRestPfd = $stats;
    }

    public function setTwoDayRestPts($stats)
    {
        $this->twoDayRestPts = $stats;
    }

    public function setTwoDayRestPlusminus($stats)
    {
        $this->twoDayRestPlusminus = $stats;
    }

    public function setThreeDayRestWins($stats)
    {
        $this->threeDayRestWins = $stats;
    }

    public function setThreeDayRestLosses($stats)
    {
        $this->threeDayRestLosses = $stats;
    }

    public function setThreeDayRestMin($stats)
    {
        $this->threeDayRestMin = $stats;
    }

    public function setThreeDayRestFgm($stats)
    {
        $this->threeDayRestFgm = $stats;
    }

    public function setThreeDayRestFga($stats)
    {
        $this->threeDayRestFga = $stats;
    }

    public function setThreeDayRestFgpct($stats)
    {
        $this->threeDayRestFgpct = $stats;
    }

    public function setThreeDayRestFg3m($stats)
    {
        $this->threeDayRestFgm = $stats;
    }

    public function setThreeDayRestFg3a($stats)
    {
        $this->threeDayRestFga = $stats;
    }

    public function setThreeDayRestFg3pct($stats)
    {
        $this->threeDayRestFgpct = $stats;
    }

    public function setThreeDayRestFtm($stats)
    {
        $this->threeDayRestFtm = $stats;
    }

    public function setThreeDayRestFta($stats)
    {
        $this->threeDayRestFta = $stats;
    }

    public function setThreeDayRestFtpct($stats)
    {
        $this->threeDayRestFtpct = $stats;
    }

    public function setThreeDayRestOreb($stats)
    {
        $this->threeDayRestOreb = $stats;
    }

    public function setThreeDayRestDreb($stats)
    {
        $this->threeDayRestDreb = $stats;
    }

    public function setThreeDayRestReb($stats)
    {
        $this->threeDayRestReb = $stats;
    }

    public function setThreeDayRestAst($stats)
    {
        $this->threeDayRestAst = $stats;
    }

    public function setThreeDayRestTov($stats)
    {
        $this->threeDayRestTov = $stats;
    }

    public function setThreeDayRestStl($stats)
    {
        $this->threeDayRestStl = $stats;
    }

    public function setThreeDayRestBlk($stats)
    {
        $this->threeDayRestBlk = $stats;
    }

    public function setThreeDayRestBlka($stats)
    {
        $this->threeDayRestBlka = $stats;
    }

    public function setThreeDayRestPf($stats)
    {
        $this->threeDayRestPf = $stats;
    }

    public function setThreeDayRestPfd($stats)
    {
        $this->threeDayRestPfd = $stats;
    }

    public function setThreeDayRestPts($stats)
    {
        $this->threeDayRestPts = $stats;
    }

    public function setThreeDayRestPlusminus($stats)
    {
        $this->threeDayRestPlusminus = $stats;
    }

    public function setFourDayRestWins($stats)
    {
        $this->fourDayRestWins = $stats;
    }

    public function setFourDayRestLosses($stats)
    {
        $this->fourDayRestLosses = $stats;
    }

    public function setFourDayRestMin($stats)
    {
        $this->fourDayRestMin = $stats;
    }

    public function setFourDayRestFgm($stats)
    {
        $this->fourDayRestFgm = $stats;
    }

    public function setFourDayRestFga($stats)
    {
        $this->fourDayRestFga = $stats;
    }

    public function setFourDayRestFgpct($stats)
    {
        $this->fourDayRestFgpct = $stats;
    }

    public function setFourDayRestFg3m($stats)
    {
        $this->fourDayRestFgm = $stats;
    }

    public function setFourDayRestFg3a($stats)
    {
        $this->fourDayRestFga = $stats;
    }

    public function setFourDayRestFg3pct($stats)
    {
        $this->fourDayRestFgpct = $stats;
    }

    public function setFourDayRestFtm($stats)
    {
        $this->fourDayRestFtm = $stats;
    }

    public function setFourDayRestFta($stats)
    {
        $this->fourDayRestFta = $stats;
    }

    public function setFourDayRestFtpct($stats)
    {
        $this->fourDayRestFtpct = $stats;
    }

    public function setFourDayRestOreb($stats)
    {
        $this->fourDayRestOreb = $stats;
    }

    public function setFourDayRestDreb($stats)
    {
        $this->fourDayRestDreb = $stats;
    }

    public function setFourDayRestReb($stats)
    {
        $this->fourDayRestReb = $stats;
    }

    public function setFourDayRestAst($stats)
    {
        $this->fourDayRestAst = $stats;
    }

    public function setFourDayRestTov($stats)
    {
        $this->fourDayRestTov = $stats;
    }

    public function setFourDayRestStl($stats)
    {
        $this->fourDayRestStl = $stats;
    }

    public function setFourDayRestBlk($stats)
    {
        $this->fourDayRestBlk = $stats;
    }

    public function setFourDayRestBlka($stats)
    {
        $this->fourDayRestBlka = $stats;
    }

    public function setFourDayRestPf($stats)
    {
        $this->fourDayRestPf = $stats;
    }

    public function setFourDayRestPfd($stats)
    {
        $this->fourDayRestPfd = $stats;
    }

    public function setFourDayRestPts($stats)
    {
        $this->fourDayRestPts = $stats;
    }

    public function setFourDayRestPlusminus($stats)
    {
        $this->fourDayRestPlusminus = $stats;
    }

    public function setGeneralShotsGamesPlayed($stats)
    {
        $this->generalShotsGamesPlayed = $stats;
    }

    public function setGeneralShotsGames($stats)
    {
        $this->generalShotsGames = $stats;
    }

    public function setGeneralShotsFgaFrequency($stats)
    {
        $this->generalShotsFgaFrequency = $stats;
    }

    public function setGeneralShotsFgm($stats)
    {
        $this->generalShotsFgm = $stats;
    }

    public function setGeneralShotsFga($stats)
    {
        $this->generalShotsFga = $stats;
    }

    public function setGeneralShotsFgPct($stats)
    {
        $this->generalShotsFgPct = $stats;
    }

    public function setGeneralShotsEfgPct($stats)
    {
        $this->generalShotsEfgPct = $stats;
    }

    public function setGeneralShotsFg2aFrequency($stats)
    {
        $this->generalShotsFg2aFrequency = $stats;
    }

    public function setGeneralShotsFg2m($stats)
    {
        $this->generalShotsFg2m = $stats;
    }

    public function setGeneralShotsFg2a($stats)
    {
        $this->generalShotsFg2a = $stats;
    }

    public function setGeneralShotsFg2Pct($stats)
    {
        $this->generalShotsFg2Pct = $stats;
    }

    public function setGeneralShotsFg3aFrequency($stats)
    {
        $this->generalShotsFg3aFrequency = $stats;
    }

    public function setGeneralShotsFg3m($stats)
    {
        $this->generalshotsFg3m = $stats;
    }

    public function setGeneralShotsFg3a($stats)
    {
        $this->generalShotsFg3a = $stats;
    }

    public function setGeneralShotsFg3Pct($stats)
    {
        $this->generalShotsFg3Pct = $stats;
    }

    public function setGeneralCatchShootGamesPlayed($stats)
    {
        $this->generalCatchShootGamesPlayed = $stats;
    }

    public function setGeneralCatchShootGames($stats)
    {
        $this->generalCatchShootGames = $stats;
    }

    public function setGeneralCatchShootFgaFrequency($stats)
    {
        $this->generalCatchShootFgaFrequency = $stats;
    }

    public function setGeneralCatchShootFgm($stats)
    {
        $this->generalCatchShootFgm = $stats;
    }

    public function setGeneralCatchShootFga($stats)
    {
        $this->generalCatchShootFga = $stats;
    }

    public function setGeneralCatchShootFgPct($stats)
    {
        $this->generalCatchShootFgPct = $stats;
    }

    public function setGeneralCatchShootEfgPct($stats)
    {
        $this->generalCatchShootEfg = $stats;
    }

    public function setGeneralCatchShootFg2aFrequency($stats)
    {
        $this->generalCatchShootFg2aFrequency = $stats;
    }

    public function setGeneralCatchShootFg2m($stats)
    {
        $this->generalCatchShootFg2m = $stats;
    }

    public function setGeneralCatchShootFg2a($stats)
    {
        $this->generalCatchShootFg2a = $stats;
    }

    public function setGeneralCatchShootFg2pct($stats)
    {
        $this->generalCatchShootFg2pct = $stats;
    }

    public function setGeneralCatchShootFg3aFrequency($stats)
    {
        $this->generalCatchShootFg3aFrequency = $stats;
    }

    public function setGeneralCatchShootFg3m($stats)
    {
        $this->generalCatchShootFg3m = $stats;
    }

    public function setGeneralCatchShootFg3a($stats)
    {
        $this->generalCatchShootFg3a = $stats;
    }

    public function setGeneralCatchShootFg3Pct($stats)
    {
        $this->generalCatchShootFg3Pct = $stats;
    }

    public function setGeneralPullUpGamesPlayed($stats)
    {
        $this->generalPullUpGamesPlayed = $stats;
    }

    public function setGeneralPullUpGames($stats)
    {
        $this->generalPullUpGames = $stats;
    }

    public function setGeneralPullUpFgaFrequency($stats)
    {
        $this->generalPullUpFgaFrequency = $stats;
    }

    public function setGeneralPullUpFgm($stats)
    {
        $this->generalPullUpFgm = $stats;
    }

    public function setGeneralPullUpFga($stats)
    {
        $this->generalPullUpFga = $stats;
    }

    public function setGeneralPullUpFgPct($stats)
    {
        $this->generalPullUpFgPct = $stats;
    }

    public function setGeneralPullUpEfgPct($stats)
    {
        $this->generalPullUpEfg = $stats;
    }

    public function setGeneralPullUpFg2aFrequency($stats)
    {
        $this->generalPullUpFg2aFrequency = $stats;
    }

    public function setGeneralPullUpFg2m($stats)
    {
        $this->generalPullUpFg2m = $stats;
    }

    public function setGeneralPullUpFg2a($stats)
    {
        $this->generalPullUpFg2a = $stats;
    }

    public function setGeneralPullUpFg2pct($stats)
    {
        $this->generalPullUpFg2pct = $stats;
    }

    public function setGeneralPullUpFg3aFrequency($stats)
    {
        $this->generalPullUpFg3aFrequency = $stats;
    }

    public function setGeneralPullUpFg3m($stats)
    {
        $this->generalPullUpFg3m = $stats;
    }

    public function setGeneralPullUpFg3a($stats)
    {
        $this->generalPullUpFg3a = $stats;
    }

    public function setGeneralPullUpFg3Pct($stats)
    {
        $this->generalPullUpFg3Pct = $stats;
    }

    public function setGeneralLess10GamesPlayed($stats)
    {
        $this->generalLess10GamesPlayed = $stats;
    }

    public function setGeneralLess10Games($stats)
    {
        $this->generalLess10Games = $stats;
    }

    public function setGeneralLess10FgaFrequency($stats)
    {
        $this->generalLess10FgaFrequency = $stats;
    }

    public function setGeneralLess10Fgm($stats)
    {
        $this->generalLess10Fgm = $stats;
    }

    public function setGeneralLess10Fga($stats)
    {
        $this->generalLess10Fga = $stats;
    }

    public function setGeneralLess10FgPct($stats)
    {
        $this->generalLess10FgPct = $stats;
    }

    public function setGeneralLess10EfgPct($stats)
    {
        $this->generalLess10Efg = $stats;
    }

    public function setGeneralLess10Fg2aFrequency($stats)
    {
        $this->generalLess10Fg2aFrequency = $stats;
    }

    public function setGeneralLess10Fg2m($stats)
    {
        $this->generalLess10Fg2m = $stats;
    }

    public function setGeneralLess10Fg2a($stats)
    {
        $this->generalLess10Fg2a = $stats;
    }

    public function setGeneralLess10Fg2pct($stats)
    {
        $this->generalLess10Fg2pct = $stats;
    }

    public function setGeneralLess10Fg3aFrequency($stats)
    {
        $this->generalLess10Fg3aFrequency = $stats;
    }

    public function setGeneralLess10Fg3m($stats)
    {
        $this->generalLess10Fg3m = $stats;
    }

    public function setGeneralLess10Fg3a($stats)
    {
        $this->generalLess10Fg3a = $stats;
    }

    public function setGeneralLess10Fg3Pct($stats)
    {
        $this->generalLess10Fg3Pct = $stats;
    }

    public function setNoDribbleGamesPlayed($stats)
    {
        $this->noDribbleGamesPlayed = $stats;
    }

    public function setNoDribbleGames($stats)
    {
        $this->noDribbleGames = $stats;
    }

    public function setNoDribbleFgaFrequency($stats)
    {
        $this->noDribbleFgaFrequency = $stats;
    }

    public function setNoDribbleFgm($stats)
    {
        $this->noDribbleFgm = $stats;
    }

    public function setNoDribbleFga($stats)
    {
        $this->noDribbleFga = $stats;
    }

    public function setNoDribbleFgPct($stats)
    {
        $this->noDribbleFgPct = $stats;
    }

    public function setNoDribbleEfgPct($stats)
    {
        $this->noDribbleEfg = $stats;
    }

    public function setNoDribbleFg2aFrequency($stats)
    {
        $this->noDribbleFg2aFrequency = $stats;
    }

    public function setNoDribbleFg2m($stats)
    {
        $this->noDribbleFg2m = $stats;
    }

    public function setNoDribbleFg2a($stats)
    {
        $this->noDribbleFg2a = $stats;
    }

    public function setNoDribbleFg2pct($stats)
    {
        $this->noDribbleFg2pct = $stats;
    }

    public function setNoDribbleFg3aFrequency($stats)
    {
        $this->noDribbleFg3aFrequency = $stats;
    }

    public function setNoDribbleFg3m($stats)
    {
        $this->noDribbleFg3m = $stats;
    }

    public function setNoDribbleFg3a($stats)
    {
        $this->noDribbleFg3a = $stats;
    }

    public function setNoDribbleFg3Pct($stats)
    {
        $this->noDribbleFg3Pct = $stats;
    }

    public function setOneDribbleGamesPlayed($stats)
    {
        $this->oneDribbleGamesPlayed = $stats;
    }

    public function setOneDribbleGames($stats)
    {
        $this->oneDribbleGames = $stats;
    }

    public function setOneDribbleFgaFrequency($stats)
    {
        $this->oneDribbleFgaFrequency = $stats;
    }

    public function setOneDribbleFgm($stats)
    {
        $this->oneDribbleFgm = $stats;
    }

    public function setOneDribbleFga($stats)
    {
        $this->oneDribbleFga = $stats;
    }

    public function setOneDribbleFgPct($stats)
    {
        $this->oneDribbleFgPct = $stats;
    }

    public function setOneDribbleEfgPct($stats)
    {
        $this->oneDribbleEfg = $stats;
    }

    public function setOneDribbleFg2aFrequency($stats)
    {
        $this->oneDribbleFg2aFrequency = $stats;
    }

    public function setOneDribbleFg2m($stats)
    {
        $this->oneDribbleFg2m = $stats;
    }

    public function setOneDribbleFg2a($stats)
    {
        $this->oneDribbleFg2a = $stats;
    }

    public function setOneDribbleFg2pct($stats)
    {
        $this->oneDribbleFg2pct = $stats;
    }

    public function setOneDribbleFg3aFrequency($stats)
    {
        $this->oneDribbleFg3aFrequency = $stats;
    }

    public function setOneDribbleFg3m($stats)
    {
        $this->oneDribbleFg3m = $stats;
    }

    public function setOneDribbleFg3a($stats)
    {
        $this->oneDribbleFg3a = $stats;
    }

    public function setOneDribbleFg3Pct($stats)
    {
        $this->oneDribbleFg3Pct = $stats;
    }

    public function setTwoDribbleGamesPlayed($stats)
    {
        $this->twoDribbleGamesPlayed = $stats;
    }

    public function setTwoDribbleGames($stats)
    {
        $this->twoDribbleGames = $stats;
    }

    public function setTwoDribbleFgaFrequency($stats)
    {
        $this->twoDribbleFgaFrequency = $stats;
    }

    public function setTwoDribbleFgm($stats)
    {
        $this->twoDribbleFgm = $stats;
    }

    public function setTwoDribbleFga($stats)
    {
        $this->twoDribbleFga = $stats;
    }

    public function setTwoDribbleFgPct($stats)
    {
        $this->twoDribbleFgPct = $stats;
    }

    public function setTwoDribbleEfgPct($stats)
    {
        $this->twoDribbleEfg = $stats;
    }

    public function setTwoDribbleFg2aFrequency($stats)
    {
        $this->twoDribbleFg2aFrequency = $stats;
    }

    public function setTwoDribbleFg2m($stats)
    {
        $this->twoDribbleFg2m = $stats;
    }

    public function setTwoDribbleFg2a($stats)
    {
        $this->twoDribbleFg2a = $stats;
    }

    public function setTwoDribbleFg2pct($stats)
    {
        $this->twoDribbleFg2pct = $stats;
    }

    public function setTwoDribbleFg3aFrequency($stats)
    {
        $this->twoDribbleFg3aFrequency = $stats;
    }

    public function setTwoDribbleFg3m($stats)
    {
        $this->twoDribbleFg3m = $stats;
    }

    public function setTwoDribbleFg3a($stats)
    {
        $this->twoDribbleFg3a = $stats;
    }

    public function setTwoDribbleFg3Pct($stats)
    {
        $this->twoDribbleFg3Pct = $stats;
    }

    public function setThreeSixDribbleGamesPlayed($stats)
    {
        $this->threeSixDribbleGamesPlayed = $stats;
    }

    public function setThreeSixDribbleGames($stats)
    {
        $this->threeSixDribbleGames = $stats;
    }

    public function setThreeSixDribbleFgaFrequency($stats)
    {
        $this->threeSixDribbleFgaFrequency = $stats;
    }

    public function setThreeSixDribbleFgm($stats)
    {
        $this->threeSixDribbleFgm = $stats;
    }

    public function setThreeSixDribbleFga($stats)
    {
        $this->threeSixDribbleFga = $stats;
    }

    public function setThreeSixDribbleFgPct($stats)
    {
        $this->threeSixDribbleFgPct = $stats;
    }

    public function setThreeSixDribbleEfgPct($stats)
    {
        $this->threeSixDribbleEfg = $stats;
    }

    public function setThreeSixDribbleFg2aFrequency($stats)
    {
        $this->threeSixDribbleFg2aFrequency = $stats;
    }

    public function setThreeSixDribbleFg2m($stats)
    {
        $this->threeSixDribbleFg2m = $stats;
    }

    public function setThreeSixDribbleFg2a($stats)
    {
        $this->threeSixDribbleFg2a = $stats;
    }

    public function setThreeSixDribbleFg2pct($stats)
    {
        $this->threeSixDribbleFg2pct = $stats;
    }

    public function setThreeSixDribbleFg3aFrequency($stats)
    {
        $this->threeSixDribbleFg3aFrequency = $stats;
    }

    public function setThreeSixDribbleFg3m($stats)
    {
        $this->threeSixDribbleFg3m = $stats;
    }

    public function setThreeSixDribbleFg3a($stats)
    {
        $this->threeSixDribbleFg3a = $stats;
    }

    public function setThreeSixDribbleFg3Pct($stats)
    {
        $this->threeSixDribbleFg3Pct = $stats;
    }

    public function setSevenDribbleGamesPlayed($stats)
    {
        $this->sevenDribbleGamesPlayed = $stats;
    }

    public function setSevenDribbleGames($stats)
    {
        $this->sevenDribbleGames = $stats;
    }

    public function setSevenDribbleFgaFrequency($stats)
    {
        $this->sevenDribbleFgaFrequency = $stats;
    }

    public function setSevenDribbleFgm($stats)
    {
        $this->sevenDribbleFgm = $stats;
    }

    public function setSevenDribbleFga($stats)
    {
        $this->sevenDribbleFga = $stats;
    }

    public function setSevenDribbleFgPct($stats)
    {
        $this->sevenDribbleFgPct = $stats;
    }

    public function setSevenDribbleEfgPct($stats)
    {
        $this->sevenDribbleEfg = $stats;
    }

    public function setSevenDribbleFg2aFrequency($stats)
    {
        $this->sevenDribbleFg2aFrequency = $stats;
    }

    public function setSevenDribbleFg2m($stats)
    {
        $this->sevenDribbleFg2m = $stats;
    }

    public function setSevenDribbleFg2a($stats)
    {
        $this->sevenDribbleFg2a = $stats;
    }

    public function setSevenDribbleFg2pct($stats)
    {
        $this->sevenDribbleFg2pct = $stats;
    }

    public function setSevenDribbleFg3aFrequency($stats)
    {
        $this->sevenDribbleFg3aFrequency = $stats;
    }

    public function setSevenDribbleFg3m($stats)
    {
        $this->sevenDribbleFg3m = $stats;
    }

    public function setSevenDribbleFg3a($stats)
    {
        $this->sevenDribbleFg3a = $stats;
    }

    public function setSevenDribbleFg3Pct($stats)
    {
        $this->sevenDribbleFg3Pct = $stats;
    }

    public function setClosestDefenderVeryTightRange($stats)
    {
        $this->closestDefenderVeryTightRange = $stats;
    }

    public function setClosestDefenderVeryTightGamesPlayed($stats)
    {
        $this->closestDefenderVeryTightGamesPlayed = $stats;
    }

    public function setClosestDefenderVeryTightGames($stats)
    {
        $this->closestDefenderVeryTightGames = $stats;
    }

    public function setClosestDefenderVeryTightFgaFrequency($stats)
    {
        $this->closestDefenderVeryTightFgaFrequency = $stats;
    }

    public function setClosestDefenderVeryTightFgm($stats)
    {
        $this->closestDefenderVeryTightFgm = $stats;
    }

    public function setClosestDefenderVeryTightFga($stats)
    {
        $this->closestDefenderVeryTightFga = $stats;
    }

    public function setClosestDefenderVeryTightFgPct($stats)
    {
        $this->closestDefenderVeryTightFgPct = $stats;
    }

    public function setClosestDefenderVeryTightEfgPct($stats)
    {
        $this->closestDefenderVeryTightEfgPct = $stats;
    }

    public function setClosestDefenderVeryTightFg2aFrequency($stats)
    {
        $this->closestDefenderVeryTightFg2aFrequency = $stats;
    }

    public function setClosestDefenderVeryTightFg2m($stats)
    {
        $this->closestDefenderVeryTightFg2m = $stats;
    }

    public function setClosestDefenderVeryTightFg2a($stats)
    {
        $this->closestDefenderVeryTightFg2a = $stats;
    }

    public function setClosestDefenderVeryTightFg2Pct($stats)
    {
        $this->closestDefenderVeryTightFg2Pct = $stats;
    }

    public function setClosestDefenderVeryTightFg3aFrequency($stats)
    {
        $this->closestDefenderVeryTightFg3aFrequency = $stats;
    }

    public function setClosestDefenderVeryTightFg3m($stats)
    {
        $this->closestDefenderVeryTightFg3m = $stats;
    }

    public function setClosestDefenderVeryTightFg3a($stats)
    {
        $this->closestDefenderVeryTightFg3a = $stats;
    }

    public function setClosestDefenderVeryTightFg3Pct($stats)
    {
        $this->closestDefenderVeryTightFg3Pct = $stats;
    }

    public function setClosestDefenderTightRange($stats)
    {
        $this->closestDefenderTightRange = $stats;
    }

    public function setClosestDefenderTightGamesPlayed($stats)
    {
        $this->closestDefenderTightGamesPlayed = $stats;
    }

    public function setClosestDefenderTightGames($stats)
    {
        $this->closestDefenderTightGames = $stats;
    }

    public function setClosestDefenderTightFgaFrequency($stats)
    {
        $this->closestDefenderTightFgaFrequency = $stats;
    }

    public function setClosestDefenderTightFgm($stats)
    {
        $this->closestDefenderTightFgm = $stats;
    }

    public function setClosestDefenderTightFga($stats)
    {
        $this->closestDefenderTightFga = $stats;
    }

    public function setClosestDefenderTightFgPct($stats)
    {
        $this->closestDefenderTightFgPct = $stats;
    }

    public function setClosestDefenderTightEfgPct($stats)
    {
        $this->closestDefenderTightEfgPct = $stats;
    }

    public function setClosestDefenderTightFg2aFrequency($stats)
    {
        $this->closestDefenderTightFg2aFrequency = $stats;
    }

    public function setClosestDefenderTightFg2m($stats)
    {
        $this->closestDefenderTightFg2m = $stats;
    }

    public function setClosestDefenderTightFg2a($stats)
    {
        $this->closestDefenderTightFg2a = $stats;
    }

    public function setClosestDefenderTightFg2Pct($stats)
    {
        $this->closestDefenderTightFg2Pct = $stats;
    }

    public function setClosestDefenderTightFg3aFrequency($stats)
    {
        $this->closestDefenderTightFg3aFrequency = $stats;
    }

    public function setClosestDefenderTightFg3m($stats)
    {
        $this->closestDefenderTightFg3m = $stats;
    }

    public function setClosestDefenderTightFg3a($stats)
    {
        $this->closestDefenderTightFg3a = $stats;
    }

    public function setClosestDefenderTightFg3Pct($stats)
    {
        $this->closestDefenderTightFg3Pct = $stats;
    }

    public function setClosestDefenderOpenRange($stats)
    {
        $this->closestDefenderOpenRange = $stats;
    }

    public function setClosestDefenderOpenGamesPlayed($stats)
    {
        $this->closestDefenderOpenGamesPlayed = $stats;
    }

    public function setClosestDefenderOpenGames($stats)
    {
        $this->closestDefenderOpenGames = $stats;
    }

    public function setClosestDefenderOpenFgaFrequency($stats)
    {
        $this->closestDefenderOpenFgaFrequency = $stats;
    }

    public function setClosestDefenderOpenFgm($stats)
    {
        $this->closestDefenderOpenFgm = $stats;
    }

    public function setClosestDefenderOpenFga($stats)
    {
        $this->closestDefenderOpenFga = $stats;
    }

    public function setClosestDefenderOpenFgPct($stats)
    {
        $this->closestDefenderOpenFgPct = $stats;
    }

    public function setClosestDefenderOpenEfgPct($stats)
    {
        $this->closestDefenderOpenEfgPct = $stats;
    }

    public function setClosestDefenderOpenFg2aFrequency($stats)
    {
        $this->closestDefenderOpenFg2aFrequency = $stats;
    }

    public function setClosestDefenderOpenFg2m($stats)
    {
        $this->closestDefenderOpenFg2m = $stats;
    }

    public function setClosestDefenderOpenFg2a($stats)
    {
        $this->closestDefenderOpenFg2a = $stats;
    }

    public function setClosestDefenderOpenFg2Pct($stats)
    {
        $this->closestDefenderOpenFg2Pct = $stats;
    }

    public function setClosestDefenderOpenFg3aFrequency($stats)
    {
        $this->closestDefenderOpenFg3aFrequency = $stats;
    }

    public function setClosestDefenderOpenFg3m($stats)
    {
        $this->closestDefenderOpenFg3m = $stats;
    }

    public function setClosestDefenderOpenFg3a($stats)
    {
        $this->closestDefenderOpenFg3a = $stats;
    }

    public function setClosestDefenderOpenFg3Pct($stats)
    {
        $this->closestDefenderOpenFg3Pct = $stats;
    }

    public function setClosestDefenderVeryOpenRange($stats)
    {
        $this->closestDefenderVeryOpenRange = $stats;
    }

    public function setClosestDefenderVeryOpenGamesPlayed($stats)
    {
        $this->closestDefenderVeryOpenGamesPlayed = $stats;
    }

    public function setClosestDefenderVeryOpenGames($stats)
    {
        $this->closestDefenderVeryOpenGames = $stats;
    }

    public function setClosestDefenderVeryOpenFgaFrequency($stats)
    {
        $this->closestDefenderVeryOpenFgaFrequency = $stats;
    }

    public function setClosestDefenderVeryOpenFgm($stats)
    {
        $this->closestDefenderVeryOpenFgm = $stats;
    }

    public function setClosestDefenderVeryOpenFga($stats)
    {
        $this->closestDefenderVeryOpenFga = $stats;
    }

    public function setClosestDefenderVeryOpenFgPct($stats)
    {
        $this->closestDefenderVeryOpenFgPct = $stats;
    }

    public function setClosestDefenderVeryOpenEfgPct($stats)
    {
        $this->closestDefenderVeryOpenEfgPct = $stats;
    }

    public function setClosestDefenderVeryOpenFg2aFrequency($stats)
    {
        $this->closestDefenderVeryOpenFg2aFrequency = $stats;
    }

    public function setClosestDefenderVeryOpenFg2m($stats)
    {
        $this->closestDefenderVeryOpenFg2m = $stats;
    }

    public function setClosestDefenderVeryOpenFg2a($stats)
    {
        $this->closestDefenderVeryOpenFg2a = $stats;
    }

    public function setClosestDefenderVeryOpenFg2Pct($stats)
    {
        $this->closestDefenderVeryOpenFg2Pct = $stats;
    }

    public function setClosestDefenderVeryOpenFg3aFrequency($stats)
    {
        $this->closestDefenderVeryOpenFg3aFrequency = $stats;
    }

    public function setClosestDefenderVeryOpenFg3m($stats)
    {
        $this->closestDefenderVeryOpenFg3m = $stats;
    }

    public function setClosestDefenderVeryOpenFg3a($stats)
    {
        $this->closestDefenderVeryOpenFg3a = $stats;
    }

    public function setClosestDefenderVeryOpenFg3Pct($stats)
    {
        $this->closestDefenderVeryOpenFg3Pct = $stats;
    }

}
