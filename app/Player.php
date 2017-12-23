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

}
