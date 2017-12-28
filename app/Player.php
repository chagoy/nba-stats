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
        $this->basicInfo->birthdate = $birthdate;
    }

    public function setSchool($school)
    {
        $this->basicInfo->school = $school;
    }

    public function setCountry($country) 
    {
        $this->basicInfo->country = $country;
    }

    public function setHeight($height)
    {
        $this->basicInfo->height = $height;
    }

    public function setWeight($weight)
    {
        $this->basicInfo->weight = $weight;
    }

    public function setPosition($position)
    {
        $this->basicInfo->position = $position;
    }
    
    public function setTeamName($name)
    {
        $this->basicInfo->teamName = $name;
    }

    public function setTeamCity($city)
    {
        $this->basicInfo->teamCity = $city;
    }

    public function setDraftYear($year)
    {
        $this->basicInfo->draftYear = $year;
    }

    public function setDraftRound($round)
    {
        $this->basicInfo->draftRound = $round;
    }

    public function setDraftNumber($number)
    {
        $this->basicInfo->draftNumber = $number;
    }

    public function setCareerStats($stats)
    {
        $this->careerStats = $stats;
    }

    public function setLast5Wins($stats)
    {
        $this->last5->wins = $stats;
    }

    public function setLast5Losses($stats)
    {
        $this->last5->losses = $stats;
    }

    public function setLast5Min($stats)
    {
        $this->last5->min = $stats;
    }

    public function setLast5Fgm($stats)
    {
        $this->last5->fgm = $stats;
    }

    public function setLast5Fga($stats)
    {
        $this->last5->fga = $stats;
    }

    public function setLast5Fgpct($stats)
    {
        $this->last5->fgpct = $stats;
    }

    public function setLast5Fg3m($stats)
    {
        $this->last5->fgm = $stats;
    }

    public function setLast5Fg3a($stats)
    {
        $this->last5->fga = $stats;
    }

    public function setLast5Fg3pct($stats)
    {
        $this->last5->fgpct = $stats;
    }

    public function setLast5Ftm($stats)
    {
        $this->last5->ftm = $stats;
    }

    public function setLast5Fta($stats)
    {
        $this->last5->fta = $stats;
    }

    public function setLast5Ftpct($stats)
    {
        $this->last5->ftpct = $stats;
    }

    public function setLast5Oreb($stats)
    {
        $this->last5->oreb = $stats;
    }

    public function setLast5Dreb($stats)
    {
        $this->last5->dreb = $stats;
    }

    public function setLast5Reb($stats)
    {
        $this->last5->reb = $stats;
    }

    public function setLast5Ast($stats)
    {
        $this->last5->ast = $stats;
    }

    public function setLast5Tov($stats)
    {
        $this->last5->tov = $stats;
    }

    public function setLast5Stl($stats)
    {
        $this->last5->stl = $stats;
    }

    public function setLast5Blk($stats)
    {
        $this->last5->blk = $stats;
    }

    public function setLast5Blka($stats)
    {
        $this->last5->blka = $stats;
    }

    public function setLast5Pf($stats)
    {
        $this->last5->pf = $stats;
    }

    public function setLast5Pfd($stats)
    {
        $this->last5->pfd = $stats;
    }

    public function setLast5Pts($stats)
    {
        $this->last5->pts = $stats;
    }

    public function setLast5Plusminus($stats)
    {
        $this->last5->plusminus = $stats;
    }

    public function setHomeWins($stats)
    {
        $this->home->wins = $stats;
    }

    public function setHomeLosses($stats)
    {
        $this->home->losses = $stats;
    }

    public function setHomeMin($stats)
    {
        $this->home->min = $stats;
    }

    public function setHomeFgm($stats)
    {
        $this->home->fgm = $stats;
    }

    public function setHomeFga($stats)
    {
        $this->home->fga = $stats;
    }

    public function setHomeFgpct($stats)
    {
        $this->home->fgpct = $stats;
    }

    public function setHomeFg3m($stats)
    {
        $this->home->fgm = $stats;
    }

    public function setHomeFg3a($stats)
    {
        $this->home->fga = $stats;
    }

    public function setHomeFg3pct($stats)
    {
        $this->home->fgpct = $stats;
    }

    public function setHomeFtm($stats)
    {
        $this->home->ftm = $stats;
    }

    public function setHomeFta($stats)
    {
        $this->home->fta = $stats;
    }

    public function setHomeFtpct($stats)
    {
        $this->home->ftpct = $stats;
    }

    public function setHomeOreb($stats)
    {
        $this->home->oreb = $stats;
    }

    public function setHomeDreb($stats)
    {
        $this->home->dreb = $stats;
    }

    public function setHomeReb($stats)
    {
        $this->home->reb = $stats;
    }

    public function setHomeAst($stats)
    {
        $this->home->ast = $stats;
    }

    public function setHomeTov($stats)
    {
        $this->home->tov = $stats;
    }

    public function setHomeStl($stats)
    {
        $this->home->stl = $stats;
    }

    public function setHomeBlk($stats)
    {
        $this->home->blk = $stats;
    }

    public function setHomeBlka($stats)
    {
        $this->home->blka = $stats;
    }

    public function setHomePf($stats)
    {
        $this->home->pf = $stats;
    }

    public function setHomePfd($stats)
    {
        $this->home->pfd = $stats;
    }

    public function setHomePts($stats)
    {
        $this->home->pts = $stats;
    }

    public function setHomePlusminus($stats)
    {
        $this->home->plusminus = $stats;
    }

    public function setAwayWins($stats)
    {
        $this->away->wins = $stats;
    }

    public function setAwayLosses($stats)
    {
        $this->away->losses = $stats;
    }

    public function setAwayMin($stats)
    {
        $this->away->min = $stats;
    }

    public function setAwayFgm($stats)
    {
        $this->away->fgm = $stats;
    }

    public function setAwayFga($stats)
    {
        $this->away->fga = $stats;
    }

    public function setAwayFgpct($stats)
    {
        $this->away->fgpct = $stats;
    }

    public function setAwayFg3m($stats)
    {
        $this->away->fgm = $stats;
    }

    public function setAwayFg3a($stats)
    {
        $this->away->fga = $stats;
    }

    public function setAwayFg3pct($stats)
    {
        $this->away->fgpct = $stats;
    }

    public function setAwayFtm($stats)
    {
        $this->away->ftm = $stats;
    }

    public function setAwayFta($stats)
    {
        $this->away->fta = $stats;
    }

    public function setAwayFtpct($stats)
    {
        $this->away->ftpct = $stats;
    }

    public function setAwayOreb($stats)
    {
        $this->away->oreb = $stats;
    }

    public function setAwayDreb($stats)
    {
        $this->away->dreb = $stats;
    }

    public function setAwayReb($stats)
    {
        $this->away->reb = $stats;
    }

    public function setAwayAst($stats)
    {
        $this->away->ast = $stats;
    }

    public function setAwayTov($stats)
    {
        $this->away->tov = $stats;
    }

    public function setAwayStl($stats)
    {
        $this->away->stl = $stats;
    }

    public function setAwayBlk($stats)
    {
        $this->away->blk = $stats;
    }

    public function setAwayBlka($stats)
    {
        $this->away->blka = $stats;
    }

    public function setAwayPf($stats)
    {
        $this->away->pf = $stats;
    }

    public function setAwayPfd($stats)
    {
        $this->away->pfd = $stats;
    }

    public function setAwayPts($stats)
    {
        $this->away->pts = $stats;
    }

    public function setAwayPlusminus($stats)
    {
        $this->away->plusminus = $stats;
    }

    public function setInWinWins($stats)
    {
        $this->win->wins = $stats;
    }

    public function setInWinLosses($stats)
    {
        $this->win->losses = $stats;
    }

    public function setInWinMin($stats)
    {
        $this->win->min = $stats;
    }

    public function setInWinFgm($stats)
    {
        $this->win->fgm = $stats;
    }

    public function setInWinFga($stats)
    {
        $this->win->fga = $stats;
    }

    public function setInWinFgpct($stats)
    {
        $this->win->fgpct = $stats;
    }

    public function setInWinFg3m($stats)
    {
        $this->win->fgm = $stats;
    }

    public function setInWinFg3a($stats)
    {
        $this->win->fga = $stats;
    }

    public function setInWinFg3pct($stats)
    {
        $this->win->fgpct = $stats;
    }

    public function setInWinFtm($stats)
    {
        $this->win->ftm = $stats;
    }

    public function setInWinFta($stats)
    {
        $this->win->fta = $stats;
    }

    public function setInWinFtpct($stats)
    {
        $this->win->ftpct = $stats;
    }

    public function setInWinOreb($stats)
    {
        $this->win->oreb = $stats;
    }

    public function setInWinDreb($stats)
    {
        $this->win->dreb = $stats;
    }

    public function setInWinReb($stats)
    {
        $this->win->reb = $stats;
    }

    public function setInWinAst($stats)
    {
        $this->win->ast = $stats;
    }

    public function setInWinTov($stats)
    {
        $this->win->tov = $stats;
    }

    public function setInWinStl($stats)
    {
        $this->win->stl = $stats;
    }

    public function setInWinBlk($stats)
    {
        $this->win->blk = $stats;
    }

    public function setInWinBlka($stats)
    {
        $this->win->blka = $stats;
    }

    public function setInWinPf($stats)
    {
        $this->win->pf = $stats;
    }

    public function setInWinPfd($stats)
    {
        $this->win->pfd = $stats;
    }

    public function setInWinPts($stats)
    {
        $this->win->pts = $stats;
    }

    public function setInWinPlusminus($stats)
    {
        $this->win->plusminus = $stats;
    }

    public function setInLossWins($stats)
    {
        $this->loss->wins = $stats;
    }

    public function setInLossLosses($stats)
    {
        $this->loss->losses = $stats;
    }

    public function setInLossMin($stats)
    {
        $this->loss->min = $stats;
    }

    public function setInLossFgm($stats)
    {
        $this->loss->fgm = $stats;
    }

    public function setInLossFga($stats)
    {
        $this->loss->fga = $stats;
    }

    public function setInLossFgpct($stats)
    {
        $this->loss->fgpct = $stats;
    }

    public function setInLossFg3m($stats)
    {
        $this->loss->fgm = $stats;
    }

    public function setInLossFg3a($stats)
    {
        $this->loss->fga = $stats;
    }

    public function setInLossFg3pct($stats)
    {
        $this->loss->fgpct = $stats;
    }

    public function setInLossFtm($stats)
    {
        $this->loss->ftm = $stats;
    }

    public function setInLossFta($stats)
    {
        $this->loss->fta = $stats;
    }

    public function setInLossFtpct($stats)
    {
        $this->loss->ftpct = $stats;
    }

    public function setInLossOreb($stats)
    {
        $this->loss->oreb = $stats;
    }

    public function setInLossDreb($stats)
    {
        $this->loss->dreb = $stats;
    }

    public function setInLossReb($stats)
    {
        $this->loss->reb = $stats;
    }

    public function setInLossAst($stats)
    {
        $this->loss->ast = $stats;
    }

    public function setInLossTov($stats)
    {
        $this->loss->tov = $stats;
    }

    public function setInLossStl($stats)
    {
        $this->loss->stl = $stats;
    }

    public function setInLossBlk($stats)
    {
        $this->loss->blk = $stats;
    }

    public function setInLossBlka($stats)
    {
        $this->loss->blka = $stats;
    }

    public function setInLossPf($stats)
    {
        $this->loss->pf = $stats;
    }

    public function setInLossPfd($stats)
    {
        $this->loss->pfd = $stats;
    }

    public function setInLossPts($stats)
    {
        $this->loss->pts = $stats;
    }

    public function setInLossPlusminus($stats)
    {
        $this->loss->plusminus = $stats;
    }

    public function setNoRestWins($stats)
    {
        $this->noRest->wins = $stats;
    }

    public function setNoRestLosses($stats)
    {
        $this->noRest->losses = $stats;
    }

    public function setNoRestMin($stats)
    {
        $this->noRest->min = $stats;
    }

    public function setNoRestFgm($stats)
    {
        $this->noRest->fgm = $stats;
    }

    public function setNoRestFga($stats)
    {
        $this->noRest->fga = $stats;
    }

    public function setNoRestFgpct($stats)
    {
        $this->noRest->fgpct = $stats;
    }

    public function setNoRestFg3m($stats)
    {
        $this->noRest->fgm = $stats;
    }

    public function setNoRestFg3a($stats)
    {
        $this->noRest->fga = $stats;
    }

    public function setNoRestFg3pct($stats)
    {
        $this->noRest->fgpct = $stats;
    }

    public function setNoRestFtm($stats)
    {
        $this->noRest->ftm = $stats;
    }

    public function setNoRestFta($stats)
    {
        $this->noRest->fta = $stats;
    }

    public function setNoRestFtpct($stats)
    {
        $this->noRest->ftpct = $stats;
    }

    public function setNoRestOreb($stats)
    {
        $this->noRest->oreb = $stats;
    }

    public function setNoRestDreb($stats)
    {
        $this->noRest->dreb = $stats;
    }

    public function setNoRestReb($stats)
    {
        $this->noRest->reb = $stats;
    }

    public function setNoRestAst($stats)
    {
        $this->noRest->ast = $stats;
    }

    public function setNoRestTov($stats)
    {
        $this->noRest->tov = $stats;
    }

    public function setNoRestStl($stats)
    {
        $this->noRest->stl = $stats;
    }

    public function setNoRestBlk($stats)
    {
        $this->noRest->blk = $stats;
    }

    public function setNoRestBlka($stats)
    {
        $this->noRest->blka = $stats;
    }

    public function setNoRestPf($stats)
    {
        $this->noRest->pf = $stats;
    }

    public function setNoRestPfd($stats)
    {
        $this->noRest->pfd = $stats;
    }

    public function setNoRestPts($stats)
    {
        $this->noRest->pts = $stats;
    }

    public function setNoRestPlusminus($stats)
    {
        $this->noRest->plusminus = $stats;
    }

    public function setOneDayRestWins($stats)
    {
        $this->oneDayRest->wins = $stats;
    }

    public function setOneDayRestLosses($stats)
    {
        $this->oneDayRest->losses = $stats;
    }

    public function setOneDayRestMin($stats)
    {
        $this->oneDayRest->min = $stats;
    }

    public function setOneDayRestFgm($stats)
    {
        $this->oneDayRest->fgm = $stats;
    }

    public function setOneDayRestFga($stats)
    {
        $this->oneDayRest->fga = $stats;
    }

    public function setOneDayRestFgpct($stats)
    {
        $this->oneDayRest->fgpct = $stats;
    }

    public function setOneDayRestFg3m($stats)
    {
        $this->oneDayRest->fgm = $stats;
    }

    public function setOneDayRestFg3a($stats)
    {
        $this->oneDayRest->fga = $stats;
    }

    public function setOneDayRestFg3pct($stats)
    {
        $this->oneDayRest->fgpct = $stats;
    }

    public function setOneDayRestFtm($stats)
    {
        $this->oneDayRest->ftm = $stats;
    }

    public function setOneDayRestFta($stats)
    {
        $this->oneDayRest->fta = $stats;
    }

    public function setOneDayRestFtpct($stats)
    {
        $this->oneDayRest->ftpct = $stats;
    }

    public function setOneDayRestOreb($stats)
    {
        $this->oneDayRest->oreb = $stats;
    }

    public function setOneDayRestDreb($stats)
    {
        $this->oneDayRest->dreb = $stats;
    }

    public function setOneDayRestReb($stats)
    {
        $this->oneDayRest->reb = $stats;
    }

    public function setOneDayRestAst($stats)
    {
        $this->oneDayRest->ast = $stats;
    }

    public function setOneDayRestTov($stats)
    {
        $this->oneDayRest->tov = $stats;
    }

    public function setOneDayRestStl($stats)
    {
        $this->oneDayRest->stl = $stats;
    }

    public function setOneDayRestBlk($stats)
    {
        $this->oneDayRest->blk = $stats;
    }

    public function setOneDayRestBlka($stats)
    {
        $this->oneDayRest->blka = $stats;
    }

    public function setOneDayRestPf($stats)
    {
        $this->oneDayRest->pf = $stats;
    }

    public function setOneDayRestPfd($stats)
    {
        $this->oneDayRest->pfd = $stats;
    }

    public function setOneDayRestPts($stats)
    {
        $this->oneDayRest->pts = $stats;
    }

    public function setOneDayRestPlusminus($stats)
    {
        $this->oneDayRest->plusminus = $stats;
    }

    public function setTwoDayRestWins($stats)
    {
        $this->twoDaysRest->wins = $stats;
    }

    public function setTwoDayRestLosses($stats)
    {
        $this->twoDaysRest->losses = $stats;
    }

    public function setTwoDayRestMin($stats)
    {
        $this->twoDaysRest->min = $stats;
    }

    public function setTwoDayRestFgm($stats)
    {
        $this->twoDaysRest->fgm = $stats;
    }

    public function setTwoDayRestFga($stats)
    {
        $this->twoDaysRest->fga = $stats;
    }

    public function setTwoDayRestFgpct($stats)
    {
        $this->twoDaysRest->fgpct = $stats;
    }

    public function setTwoDayRestFg3m($stats)
    {
        $this->twoDaysRest->fgm = $stats;
    }

    public function setTwoDayRestFg3a($stats)
    {
        $this->twoDaysRest->fga = $stats;
    }

    public function setTwoDayRestFg3pct($stats)
    {
        $this->twoDaysRest->fgpct = $stats;
    }

    public function setTwoDayRestFtm($stats)
    {
        $this->twoDaysRest->ftm = $stats;
    }

    public function setTwoDayRestFta($stats)
    {
        $this->twoDaysRest->fta = $stats;
    }

    public function setTwoDayRestFtpct($stats)
    {
        $this->twoDaysRest->ftpct = $stats;
    }

    public function setTwoDayRestOreb($stats)
    {
        $this->twoDaysRest->oreb = $stats;
    }

    public function setTwoDayRestDreb($stats)
    {
        $this->twoDaysRest->dreb = $stats;
    }

    public function setTwoDayRestReb($stats)
    {
        $this->twoDaysRest->reb = $stats;
    }

    public function setTwoDayRestAst($stats)
    {
        $this->twoDaysRest->ast = $stats;
    }

    public function setTwoDayRestTov($stats)
    {
        $this->twoDaysRest->tov = $stats;
    }

    public function setTwoDayRestStl($stats)
    {
        $this->twoDaysRest->stl = $stats;
    }

    public function setTwoDayRestBlk($stats)
    {
        $this->twoDaysRest->blk = $stats;
    }

    public function setTwoDayRestBlka($stats)
    {
        $this->twoDaysRest->blka = $stats;
    }

    public function setTwoDayRestPf($stats)
    {
        $this->twoDaysRest->pf = $stats;
    }

    public function setTwoDayRestPfd($stats)
    {
        $this->twoDaysRest->pfd = $stats;
    }

    public function setTwoDayRestPts($stats)
    {
        $this->twoDaysRest->pts = $stats;
    }

    public function setTwoDayRestPlusminus($stats)
    {
        $this->twoDaysRest->plusminus = $stats;
    }

    public function setThreeDayRestWins($stats)
    {
        $this->threeDaysRest->wins = $stats;
    }

    public function setThreeDayRestLosses($stats)
    {
        $this->threeDaysRest->losses = $stats;
    }

    public function setThreeDayRestMin($stats)
    {
        $this->threeDaysRest->min = $stats;
    }

    public function setThreeDayRestFgm($stats)
    {
        $this->threeDaysRest->fgm = $stats;
    }

    public function setThreeDayRestFga($stats)
    {
        $this->threeDaysRest->fga = $stats;
    }

    public function setThreeDayRestFgpct($stats)
    {
        $this->threeDaysRest->fgpct = $stats;
    }

    public function setThreeDayRestFg3m($stats)
    {
        $this->threeDaysRest->fgm = $stats;
    }

    public function setThreeDayRestFg3a($stats)
    {
        $this->threeDaysRest->fga = $stats;
    }

    public function setThreeDayRestFg3pct($stats)
    {
        $this->threeDaysRest->fgpct = $stats;
    }

    public function setThreeDayRestFtm($stats)
    {
        $this->threeDaysRest->ftm = $stats;
    }

    public function setThreeDayRestFta($stats)
    {
        $this->threeDaysRest->fta = $stats;
    }

    public function setThreeDayRestFtpct($stats)
    {
        $this->threeDaysRest->ftpct = $stats;
    }

    public function setThreeDayRestOreb($stats)
    {
        $this->threeDaysRest->oreb = $stats;
    }

    public function setThreeDayRestDreb($stats)
    {
        $this->threeDaysRest->dreb = $stats;
    }

    public function setThreeDayRestReb($stats)
    {
        $this->threeDaysRest->reb = $stats;
    }

    public function setThreeDayRestAst($stats)
    {
        $this->threeDaysRest->ast = $stats;
    }

    public function setThreeDayRestTov($stats)
    {
        $this->threeDaysRest->tov = $stats;
    }

    public function setThreeDayRestStl($stats)
    {
        $this->threeDaysRest->stl = $stats;
    }

    public function setThreeDayRestBlk($stats)
    {
        $this->threeDaysRest->blk = $stats;
    }

    public function setThreeDayRestBlka($stats)
    {
        $this->threeDaysRest->blka = $stats;
    }

    public function setThreeDayRestPf($stats)
    {
        $this->threeDaysRest->pf = $stats;
    }

    public function setThreeDayRestPfd($stats)
    {
        $this->threeDaysRest->pfd = $stats;
    }

    public function setThreeDayRestPts($stats)
    {
        $this->threeDaysRest->pts = $stats;
    }

    public function setThreeDayRestPlusminus($stats)
    {
        $this->threeDaysRest->plusminus = $stats;
    }

    public function setFourDayRestWins($stats)
    {
        $this->fourDaysRest->wins = $stats;
    }

    public function setFourDayRestLosses($stats)
    {
        $this->fourDaysRest->losses = $stats;
    }

    public function setFourDayRestMin($stats)
    {
        $this->fourDaysRest->min = $stats;
    }

    public function setFourDayRestFgm($stats)
    {
        $this->fourDaysRest->fgm = $stats;
    }

    public function setFourDayRestFga($stats)
    {
        $this->fourDaysRest->fga = $stats;
    }

    public function setFourDayRestFgpct($stats)
    {
        $this->fourDaysRest->fgpct = $stats;
    }

    public function setFourDayRestFg3m($stats)
    {
        $this->fourDaysRest->fgm = $stats;
    }

    public function setFourDayRestFg3a($stats)
    {
        $this->fourDaysRest->fga = $stats;
    }

    public function setFourDayRestFg3pct($stats)
    {
        $this->fourDaysRest->fgpct = $stats;
    }

    public function setFourDayRestFtm($stats)
    {
        $this->fourDaysRest->ftm = $stats;
    }

    public function setFourDayRestFta($stats)
    {
        $this->fourDaysRest->fta = $stats;
    }

    public function setFourDayRestFtpct($stats)
    {
        $this->fourDaysRest->ftpct = $stats;
    }

    public function setFourDayRestOreb($stats)
    {
        $this->fourDaysRest->oreb = $stats;
    }

    public function setFourDayRestDreb($stats)
    {
        $this->fourDaysRest->dreb = $stats;
    }

    public function setFourDayRestReb($stats)
    {
        $this->fourDaysRest->reb = $stats;
    }

    public function setFourDayRestAst($stats)
    {
        $this->fourDaysRest->ast = $stats;
    }

    public function setFourDayRestTov($stats)
    {
        $this->fourDaysRest->tov = $stats;
    }

    public function setFourDayRestStl($stats)
    {
        $this->fourDaysRest->stl = $stats;
    }

    public function setFourDayRestBlk($stats)
    {
        $this->fourDaysRest->blk = $stats;
    }

    public function setFourDayRestBlka($stats)
    {
        $this->fourDaysRest->blka = $stats;
    }

    public function setFourDayRestPf($stats)
    {
        $this->fourDaysRest->pf = $stats;
    }

    public function setFourDayRestPfd($stats)
    {
        $this->fourDaysRest->pfd = $stats;
    }

    public function setFourDayRestPts($stats)
    {
        $this->fourDaysRest->pts = $stats;
    }

    public function setFourDayRestPlusminus($stats)
    {
        $this->fourDaysRest->plusminus = $stats;
    }

    public function setGeneralShotsGamesPlayed($stats)
    {
        $this->generalShotData->GamesPlayed = $stats;
    }

    public function setGeneralShotsGames($stats)
    {
        $this->generalShotData->Games = $stats;
    }

    public function setGeneralShotsFgaFrequency($stats)
    {
        $this->generalShotData->FgaFrequency = $stats;
    }

    public function setGeneralShotsFgm($stats)
    {
        $this->generalShotData->Fgm = $stats;
    }

    public function setGeneralShotsFga($stats)
    {
        $this->generalShotData->Fga = $stats;
    }

    public function setGeneralShotsFgPct($stats)
    {
        $this->generalShotData->FgPct = $stats;
    }

    public function setGeneralShotsEfgPct($stats)
    {
        $this->generalShotData->EfgPct = $stats;
    }

    public function setGeneralShotsFg2aFrequency($stats)
    {
        $this->generalShotData->Fg2aFrequency = $stats;
    }

    public function setGeneralShotsFg2m($stats)
    {
        $this->generalShotData->Fg2m = $stats;
    }

    public function setGeneralShotsFg2a($stats)
    {
        $this->generalShotData->Fg2a = $stats;
    }

    public function setGeneralShotsFg2Pct($stats)
    {
        $this->generalShotData->Fg2Pct = $stats;
    }

    public function setGeneralShotsFg3aFrequency($stats)
    {
        $this->generalShotData->Fg3aFrequency = $stats;
    }

    public function setGeneralShotsFg3m($stats)
    {
        $this->generalShotData->Fg3m = $stats;
    }

    public function setGeneralShotsFg3a($stats)
    {
        $this->generalShotData->Fg3a = $stats;
    }

    public function setGeneralShotsFg3Pct($stats)
    {
        $this->generalShotData->Fg3Pct = $stats;
    }

    public function setGeneralCatchShootGamesPlayed($stats)
    {
        $this->generalCatchShoot->GamesPlayed = $stats;
    }

    public function setGeneralCatchShootGames($stats)
    {
        $this->generalCatchShoot->Games = $stats;
    }

    public function setGeneralCatchShootFgaFrequency($stats)
    {
        $this->generalCatchShoot->FgaFrequency = $stats;
    }

    public function setGeneralCatchShootFgm($stats)
    {
        $this->generalCatchShoot->Fgm = $stats;
    }

    public function setGeneralCatchShootFga($stats)
    {
        $this->generalCatchShoot->Fga = $stats;
    }

    public function setGeneralCatchShootFgPct($stats)
    {
        $this->generalCatchShoot->FgPct = $stats;
    }

    public function setGeneralCatchShootEfgPct($stats)
    {
        $this->generalCatchShoot->Efg = $stats;
    }

    public function setGeneralCatchShootFg2aFrequency($stats)
    {
        $this->generalCatchShoot->Fg2aFrequency = $stats;
    }

    public function setGeneralCatchShootFg2m($stats)
    {
        $this->generalCatchShoot->Fg2m = $stats;
    }

    public function setGeneralCatchShootFg2a($stats)
    {
        $this->generalCatchShoot->Fg2a = $stats;
    }

    public function setGeneralCatchShootFg2pct($stats)
    {
        $this->generalCatchShoot->Fg2pct = $stats;
    }

    public function setGeneralCatchShootFg3aFrequency($stats)
    {
        $this->generalCatchShoot->Fg3aFrequency = $stats;
    }

    public function setGeneralCatchShootFg3m($stats)
    {
        $this->generalCatchShoot->Fg3m = $stats;
    }

    public function setGeneralCatchShootFg3a($stats)
    {
        $this->generalCatchShoot->Fg3a = $stats;
    }

    public function setGeneralCatchShootFg3Pct($stats)
    {
        $this->generalCatchShoot->Fg3Pct = $stats;
    }

    public function setGeneralPullUpGamesPlayed($stats)
    {
        $this->generalPullUp->GamesPlayed = $stats;
    }

    public function setGeneralPullUpGames($stats)
    {
        $this->generalPullUp->Games = $stats;
    }

    public function setGeneralPullUpFgaFrequency($stats)
    {
        $this->generalPullUp->FgaFrequency = $stats;
    }

    public function setGeneralPullUpFgm($stats)
    {
        $this->generalPullUp->Fgm = $stats;
    }

    public function setGeneralPullUpFga($stats)
    {
        $this->generalPullUp->Fga = $stats;
    }

    public function setGeneralPullUpFgPct($stats)
    {
        $this->generalPullUp->FgPct = $stats;
    }

    public function setGeneralPullUpEfgPct($stats)
    {
        $this->generalPullUp->Efg = $stats;
    }

    public function setGeneralPullUpFg2aFrequency($stats)
    {
        $this->generalPullUp->Fg2aFrequency = $stats;
    }

    public function setGeneralPullUpFg2m($stats)
    {
        $this->generalPullUp->Fg2m = $stats;
    }

    public function setGeneralPullUpFg2a($stats)
    {
        $this->generalPullUp->Fg2a = $stats;
    }

    public function setGeneralPullUpFg2pct($stats)
    {
        $this->generalPullUp->Fg2pct = $stats;
    }

    public function setGeneralPullUpFg3aFrequency($stats)
    {
        $this->generalPullUp->Fg3aFrequency = $stats;
    }

    public function setGeneralPullUpFg3m($stats)
    {
        $this->generalPullUp->Fg3m = $stats;
    }

    public function setGeneralPullUpFg3a($stats)
    {
        $this->generalPullUp->Fg3a = $stats;
    }

    public function setGeneralPullUpFg3Pct($stats)
    {
        $this->generalPullUp->Fg3Pct = $stats;
    }

    public function setGeneralLess10GamesPlayed($stats)
    {
        $this->generalLess10Ft->GamesPlayed = $stats;
    }

    public function setGeneralLess10Games($stats)
    {
        $this->generalLess10Ft->Games = $stats;
    }

    public function setGeneralLess10FgaFrequency($stats)
    {
        $this->generalLess10Ft->FgaFrequency = $stats;
    }

    public function setGeneralLess10Fgm($stats)
    {
        $this->generalLess10Ft->Fgm = $stats;
    }

    public function setGeneralLess10Fga($stats)
    {
        $this->generalLess10Ft->Fga = $stats;
    }

    public function setGeneralLess10FgPct($stats)
    {
        $this->generalLess10Ft->FgPct = $stats;
    }

    public function setGeneralLess10EfgPct($stats)
    {
        $this->generalLess10Ft->Efg = $stats;
    }

    public function setGeneralLess10Fg2aFrequency($stats)
    {
        $this->generalLess10Ft->Fg2aFrequency = $stats;
    }

    public function setGeneralLess10Fg2m($stats)
    {
        $this->generalLess10Ft->Fg2m = $stats;
    }

    public function setGeneralLess10Fg2a($stats)
    {
        $this->generalLess10Ft->Fg2a = $stats;
    }

    public function setGeneralLess10Fg2pct($stats)
    {
        $this->generalLess10Ft->Fg2pct = $stats;
    }

    public function setGeneralLess10Fg3aFrequency($stats)
    {
        $this->generalLess10Ft->Fg3aFrequency = $stats;
    }

    public function setGeneralLess10Fg3m($stats)
    {
        $this->generalLess10Ft->Fg3m = $stats;
    }

    public function setGeneralLess10Fg3a($stats)
    {
        $this->generalLess10Ft->Fg3a = $stats;
    }

    public function setGeneralLess10Fg3Pct($stats)
    {
        $this->generalLess10Ft->Fg3Pct = $stats;
    }

    public function setNoDribbleGamesPlayed($stats)
    {
        $this->noDribble->GamesPlayed = $stats;
    }

    public function setNoDribbleGames($stats)
    {
        $this->noDribble->Games = $stats;
    }

    public function setNoDribbleFgaFrequency($stats)
    {
        $this->noDribble->FgaFrequency = $stats;
    }

    public function setNoDribbleFgm($stats)
    {
        $this->noDribble->Fgm = $stats;
    }

    public function setNoDribbleFga($stats)
    {
        $this->noDribble->Fga = $stats;
    }

    public function setNoDribbleFgPct($stats)
    {
        $this->noDribble->FgPct = $stats;
    }

    public function setNoDribbleEfgPct($stats)
    {
        $this->noDribble->Efg = $stats;
    }

    public function setNoDribbleFg2aFrequency($stats)
    {
        $this->noDribble->Fg2aFrequency = $stats;
    }

    public function setNoDribbleFg2m($stats)
    {
        $this->noDribble->Fg2m = $stats;
    }

    public function setNoDribbleFg2a($stats)
    {
        $this->noDribble->Fg2a = $stats;
    }

    public function setNoDribbleFg2pct($stats)
    {
        $this->noDribble->Fg2pct = $stats;
    }

    public function setNoDribbleFg3aFrequency($stats)
    {
        $this->noDribble->Fg3aFrequency = $stats;
    }

    public function setNoDribbleFg3m($stats)
    {
        $this->noDribble->Fg3m = $stats;
    }

    public function setNoDribbleFg3a($stats)
    {
        $this->noDribble->Fg3a = $stats;
    }

    public function setNoDribbleFg3Pct($stats)
    {
        $this->noDribble->Fg3Pct = $stats;
    }

    public function setOneDribbleGamesPlayed($stats)
    {
        $this->oneDribble->GamesPlayed = $stats;
    }

    public function setOneDribbleGames($stats)
    {
        $this->oneDribble->Games = $stats;
    }

    public function setOneDribbleFgaFrequency($stats)
    {
        $this->oneDribble->FgaFrequency = $stats;
    }

    public function setOneDribbleFgm($stats)
    {
        $this->oneDribble->Fgm = $stats;
    }

    public function setOneDribbleFga($stats)
    {
        $this->oneDribble->Fga = $stats;
    }

    public function setOneDribbleFgPct($stats)
    {
        $this->oneDribble->FgPct = $stats;
    }

    public function setOneDribbleEfgPct($stats)
    {
        $this->oneDribble->Efg = $stats;
    }

    public function setOneDribbleFg2aFrequency($stats)
    {
        $this->oneDribble->Fg2aFrequency = $stats;
    }

    public function setOneDribbleFg2m($stats)
    {
        $this->oneDribble->Fg2m = $stats;
    }

    public function setOneDribbleFg2a($stats)
    {
        $this->oneDribble->Fg2a = $stats;
    }

    public function setOneDribbleFg2pct($stats)
    {
        $this->oneDribble->Fg2pct = $stats;
    }

    public function setOneDribbleFg3aFrequency($stats)
    {
        $this->oneDribble->Fg3aFrequency = $stats;
    }

    public function setOneDribbleFg3m($stats)
    {
        $this->oneDribble->Fg3m = $stats;
    }

    public function setOneDribbleFg3a($stats)
    {
        $this->oneDribble->Fg3a = $stats;
    }

    public function setOneDribbleFg3Pct($stats)
    {
        $this->oneDribble->Fg3Pct = $stats;
    }

    public function setTwoDribbleGamesPlayed($stats)
    {
        $this->twoDribble->GamesPlayed = $stats;
    }

    public function setTwoDribbleGames($stats)
    {
        $this->twoDribble->Games = $stats;
    }

    public function setTwoDribbleFgaFrequency($stats)
    {
        $this->twoDribble->FgaFrequency = $stats;
    }

    public function setTwoDribbleFgm($stats)
    {
        $this->twoDribble->Fgm = $stats;
    }

    public function setTwoDribbleFga($stats)
    {
        $this->twoDribble->Fga = $stats;
    }

    public function setTwoDribbleFgPct($stats)
    {
        $this->twoDribble->FgPct = $stats;
    }

    public function setTwoDribbleEfgPct($stats)
    {
        $this->twoDribble->Efg = $stats;
    }

    public function setTwoDribbleFg2aFrequency($stats)
    {
        $this->twoDribble->Fg2aFrequency = $stats;
    }

    public function setTwoDribbleFg2m($stats)
    {
        $this->twoDribble->Fg2m = $stats;
    }

    public function setTwoDribbleFg2a($stats)
    {
        $this->twoDribble->Fg2a = $stats;
    }

    public function setTwoDribbleFg2pct($stats)
    {
        $this->twoDribble->Fg2pct = $stats;
    }

    public function setTwoDribbleFg3aFrequency($stats)
    {
        $this->twoDribble->Fg3aFrequency = $stats;
    }

    public function setTwoDribbleFg3m($stats)
    {
        $this->twoDribble->Fg3m = $stats;
    }

    public function setTwoDribbleFg3a($stats)
    {
        $this->twoDribble->Fg3a = $stats;
    }

    public function setTwoDribbleFg3Pct($stats)
    {
        $this->twoDribble->Fg3Pct = $stats;
    }

    public function setThreeSixDribbleGamesPlayed($stats)
    {
        $this->threeSixDribble->GamesPlayed = $stats;
    }

    public function setThreeSixDribbleGames($stats)
    {
        $this->threeSixDribble->Games = $stats;
    }

    public function setThreeSixDribbleFgaFrequency($stats)
    {
        $this->threeSixDribble->FgaFrequency = $stats;
    }

    public function setThreeSixDribbleFgm($stats)
    {
        $this->threeSixDribble->Fgm = $stats;
    }

    public function setThreeSixDribbleFga($stats)
    {
        $this->threeSixDribble->Fga = $stats;
    }

    public function setThreeSixDribbleFgPct($stats)
    {
        $this->threeSixDribble->FgPct = $stats;
    }

    public function setThreeSixDribbleEfgPct($stats)
    {
        $this->threeSixDribble->Efg = $stats;
    }

    public function setThreeSixDribbleFg2aFrequency($stats)
    {
        $this->threeSixDribble->Fg2aFrequency = $stats;
    }

    public function setThreeSixDribbleFg2m($stats)
    {
        $this->threeSixDribble->Fg2m = $stats;
    }

    public function setThreeSixDribbleFg2a($stats)
    {
        $this->threeSixDribble->Fg2a = $stats;
    }

    public function setThreeSixDribbleFg2pct($stats)
    {
        $this->threeSixDribble->Fg2pct = $stats;
    }

    public function setThreeSixDribbleFg3aFrequency($stats)
    {
        $this->threeSixDribble->Fg3aFrequency = $stats;
    }

    public function setThreeSixDribbleFg3m($stats)
    {
        $this->threeSixDribble->Fg3m = $stats;
    }

    public function setThreeSixDribbleFg3a($stats)
    {
        $this->threeSixDribble->Fg3a = $stats;
    }

    public function setThreeSixDribbleFg3Pct($stats)
    {
        $this->threeSixDribble->Fg3Pct = $stats;
    }

    public function setSevenDribbleGamesPlayed($stats)
    {
        $this->sevenDribble->GamesPlayed = $stats;
    }

    public function setSevenDribbleGames($stats)
    {
        $this->sevenDribble->Games = $stats;
    }

    public function setSevenDribbleFgaFrequency($stats)
    {
        $this->sevenDribble->FgaFrequency = $stats;
    }

    public function setSevenDribbleFgm($stats)
    {
        $this->sevenDribble->Fgm = $stats;
    }

    public function setSevenDribbleFga($stats)
    {
        $this->sevenDribble->Fga = $stats;
    }

    public function setSevenDribbleFgPct($stats)
    {
        $this->sevenDribble->FgPct = $stats;
    }

    public function setSevenDribbleEfgPct($stats)
    {
        $this->sevenDribble->Efg = $stats;
    }

    public function setSevenDribbleFg2aFrequency($stats)
    {
        $this->sevenDribble->Fg2aFrequency = $stats;
    }

    public function setSevenDribbleFg2m($stats)
    {
        $this->sevenDribble->Fg2m = $stats;
    }

    public function setSevenDribbleFg2a($stats)
    {
        $this->sevenDribble->Fg2a = $stats;
    }

    public function setSevenDribbleFg2pct($stats)
    {
        $this->sevenDribble->Fg2pct = $stats;
    }

    public function setSevenDribbleFg3aFrequency($stats)
    {
        $this->sevenDribble->Fg3aFrequency = $stats;
    }

    public function setSevenDribbleFg3m($stats)
    {
        $this->sevenDribble->Fg3m = $stats;
    }

    public function setSevenDribbleFg3a($stats)
    {
        $this->sevenDribble->Fg3a = $stats;
    }

    public function setSevenDribbleFg3Pct($stats)
    {
        $this->sevenDribble->Fg3Pct = $stats;
    }

    public function setClosestDefenderVeryTightRange($stats)
    {
        $this->closestDefenderVeryTight->Range = $stats;
    }

    public function setClosestDefenderVeryTightGamesPlayed($stats)
    {
        $this->closestDefenderVeryTight->GamesPlayed = $stats;
    }

    public function setClosestDefenderVeryTightGames($stats)
    {
        $this->closestDefenderVeryTight->Games = $stats;
    }

    public function setClosestDefenderVeryTightFgaFrequency($stats)
    {
        $this->closestDefenderVeryTight->FgaFrequency = $stats;
    }

    public function setClosestDefenderVeryTightFgm($stats)
    {
        $this->closestDefenderVeryTight->Fgm = $stats;
    }

    public function setClosestDefenderVeryTightFga($stats)
    {
        $this->closestDefenderVeryTight->Fga = $stats;
    }

    public function setClosestDefenderVeryTightFgPct($stats)
    {
        $this->closestDefenderVeryTight->FgPct = $stats;
    }

    public function setClosestDefenderVeryTightEfgPct($stats)
    {
        $this->closestDefenderVeryTight->EfgPct = $stats;
    }

    public function setClosestDefenderVeryTightFg2aFrequency($stats)
    {
        $this->closestDefenderVeryTight->Fg2aFrequency = $stats;
    }

    public function setClosestDefenderVeryTightFg2m($stats)
    {
        $this->closestDefenderVeryTight->Fg2m = $stats;
    }

    public function setClosestDefenderVeryTightFg2a($stats)
    {
        $this->closestDefenderVeryTight->Fg2a = $stats;
    }

    public function setClosestDefenderVeryTightFg2Pct($stats)
    {
        $this->closestDefenderVeryTight->Fg2Pct = $stats;
    }

    public function setClosestDefenderVeryTightFg3aFrequency($stats)
    {
        $this->closestDefenderVeryTight->Fg3aFrequency = $stats;
    }

    public function setClosestDefenderVeryTightFg3m($stats)
    {
        $this->closestDefenderVeryTight->Fg3m = $stats;
    }

    public function setClosestDefenderVeryTightFg3a($stats)
    {
        $this->closestDefenderVeryTight->Fg3a = $stats;
    }

    public function setClosestDefenderVeryTightFg3Pct($stats)
    {
        $this->closestDefenderVeryTight->Fg3Pct = $stats;
    }

    public function setClosestDefenderTightRange($stats)
    {
        $this->closestDefenderTight->Range = $stats;
    }

    public function setClosestDefenderTightGamesPlayed($stats)
    {
        $this->closestDefenderTight->GamesPlayed = $stats;
    }

    public function setClosestDefenderTightGames($stats)
    {
        $this->closestDefenderTight->Games = $stats;
    }

    public function setClosestDefenderTightFgaFrequency($stats)
    {
        $this->closestDefenderTight->FgaFrequency = $stats;
    }

    public function setClosestDefenderTightFgm($stats)
    {
        $this->closestDefenderTight->Fgm = $stats;
    }

    public function setClosestDefenderTightFga($stats)
    {
        $this->closestDefenderTight->Fga = $stats;
    }

    public function setClosestDefenderTightFgPct($stats)
    {
        $this->closestDefenderTight->FgPct = $stats;
    }

    public function setClosestDefenderTightEfgPct($stats)
    {
        $this->closestDefenderTight->EfgPct = $stats;
    }

    public function setClosestDefenderTightFg2aFrequency($stats)
    {
        $this->closestDefenderTight->Fg2aFrequency = $stats;
    }

    public function setClosestDefenderTightFg2m($stats)
    {
        $this->closestDefenderTight->Fg2m = $stats;
    }

    public function setClosestDefenderTightFg2a($stats)
    {
        $this->closestDefenderTight->Fg2a = $stats;
    }

    public function setClosestDefenderTightFg2Pct($stats)
    {
        $this->closestDefenderTight->Fg2Pct = $stats;
    }

    public function setClosestDefenderTightFg3aFrequency($stats)
    {
        $this->closestDefenderTight->Fg3aFrequency = $stats;
    }

    public function setClosestDefenderTightFg3m($stats)
    {
        $this->closestDefenderTight->Fg3m = $stats;
    }

    public function setClosestDefenderTightFg3a($stats)
    {
        $this->closestDefenderTight->Fg3a = $stats;
    }

    public function setClosestDefenderTightFg3Pct($stats)
    {
        $this->closestDefenderTight->Fg3Pct = $stats;
    }

    public function setClosestDefenderOpenRange($stats)
    {
        $this->closestDefenderOpen->Range = $stats;
    }

    public function setClosestDefenderOpenGamesPlayed($stats)
    {
        $this->closestDefenderOpen->GamesPlayed = $stats;
    }

    public function setClosestDefenderOpenGames($stats)
    {
        $this->closestDefenderOpen->Games = $stats;
    }

    public function setClosestDefenderOpenFgaFrequency($stats)
    {
        $this->closestDefenderOpen->FgaFrequency = $stats;
    }

    public function setClosestDefenderOpenFgm($stats)
    {
        $this->closestDefenderOpen->Fgm = $stats;
    }

    public function setClosestDefenderOpenFga($stats)
    {
        $this->closestDefenderOpen->Fga = $stats;
    }

    public function setClosestDefenderOpenFgPct($stats)
    {
        $this->closestDefenderOpen->FgPct = $stats;
    }

    public function setClosestDefenderOpenEfgPct($stats)
    {
        $this->closestDefenderOpen->EfgPct = $stats;
    }

    public function setClosestDefenderOpenFg2aFrequency($stats)
    {
        $this->closestDefenderOpen->Fg2aFrequency = $stats;
    }

    public function setClosestDefenderOpenFg2m($stats)
    {
        $this->closestDefenderOpen->Fg2m = $stats;
    }

    public function setClosestDefenderOpenFg2a($stats)
    {
        $this->closestDefenderOpen->Fg2a = $stats;
    }

    public function setClosestDefenderOpenFg2Pct($stats)
    {
        $this->closestDefenderOpen->Fg2Pct = $stats;
    }

    public function setClosestDefenderOpenFg3aFrequency($stats)
    {
        $this->closestDefenderOpen->Fg3aFrequency = $stats;
    }

    public function setClosestDefenderOpenFg3m($stats)
    {
        $this->closestDefenderOpen->Fg3m = $stats;
    }

    public function setClosestDefenderOpenFg3a($stats)
    {
        $this->closestDefenderOpen->Fg3a = $stats;
    }

    public function setClosestDefenderOpenFg3Pct($stats)
    {
        $this->closestDefenderOpen->Fg3Pct = $stats;
    }

    public function setClosestDefenderVeryOpenRange($stats)
    {
        $this->closestDefenderVeryOpen->Range = $stats;
    }

    public function setClosestDefenderVeryOpenGamesPlayed($stats)
    {
        $this->closestDefenderVeryOpen->GamesPlayed = $stats;
    }

    public function setClosestDefenderVeryOpenGames($stats)
    {
        $this->closestDefenderVeryOpen->Games = $stats;
    }

    public function setClosestDefenderVeryOpenFgaFrequency($stats)
    {
        $this->closestDefenderVeryOpen->FgaFrequency = $stats;
    }

    public function setClosestDefenderVeryOpenFgm($stats)
    {
        $this->closestDefenderVeryOpen->Fgm = $stats;
    }

    public function setClosestDefenderVeryOpenFga($stats)
    {
        $this->closestDefenderVeryOpen->Fga = $stats;
    }

    public function setClosestDefenderVeryOpenFgPct($stats)
    {
        $this->closestDefenderVeryOpen->FgPct = $stats;
    }

    public function setClosestDefenderVeryOpenEfgPct($stats)
    {
        $this->closestDefenderVeryOpen->EfgPct = $stats;
    }

    public function setClosestDefenderVeryOpenFg2aFrequency($stats)
    {
        $this->closestDefenderVeryOpen->Fg2aFrequency = $stats;
    }

    public function setClosestDefenderVeryOpenFg2m($stats)
    {
        $this->closestDefenderVeryOpen->Fg2m = $stats;
    }

    public function setClosestDefenderVeryOpenFg2a($stats)
    {
        $this->closestDefenderVeryOpen->Fg2a = $stats;
    }

    public function setClosestDefenderVeryOpenFg2Pct($stats)
    {
        $this->closestDefenderVeryOpen->Fg2Pct = $stats;
    }

    public function setClosestDefenderVeryOpenFg3aFrequency($stats)
    {
        $this->closestDefenderVeryOpen->Fg3aFrequency = $stats;
    }

    public function setClosestDefenderVeryOpenFg3m($stats)
    {
        $this->closestDefenderVeryOpen->Fg3m = $stats;
    }

    public function setClosestDefenderVeryOpenFg3a($stats)
    {
        $this->closestDefenderVeryOpen->Fg3a = $stats;
    }

    public function setClosestDefenderVeryOpenFg3Pct($stats)
    {
        $this->closestDefenderVeryOpen->Fg3Pct = $stats;
    }

    public function setClosestDefender10PlusVeryTightRange($stats)
    {
        $this->closestDefender10PlusVeryTight->Range = $stats;
    }

    public function setClosestDefender10PlusVeryTightGamesPlayed($stats)
    {
        $this->closestDefender10PlusVeryTight->GamesPlayed = $stats;
    }

    public function setClosestDefender10PlusVeryTightGames($stats)
    {
        $this->closestDefender10PlusVeryTight->Games = $stats;
    }

    public function setClosestDefender10PlusVeryTightFgaFrequency($stats)
    {
        $this->closestDefender10PlusVeryTight->FgaFrequency = $stats;
    }

    public function setClosestDefender10PlusVeryTightFgm($stats)
    {
        $this->closestDefender10PlusVeryTight->Fgm = $stats;
    }

    public function setClosestDefender10PlusVeryTightFga($stats)
    {
        $this->closestDefender10PlusVeryTight->Fga = $stats;
    }

    public function setClosestDefender10PlusVeryTightFgPct($stats)
    {
        $this->closestDefender10PlusVeryTight->FgPct = $stats;
    }

    public function setClosestDefender10PlusVeryTightEfgPct($stats)
    {
        $this->closestDefender10PlusVeryTight->EfgPct = $stats;
    }

    public function setClosestDefender10PlusVeryTightFg2aFrequency($stats)
    {
        $this->closestDefender10PlusVeryTight->Fg2aFrequency = $stats;
    }

    public function setClosestDefender10PlusVeryTightFg2m($stats)
    {
        $this->closestDefender10PlusVeryTight->Fg2m = $stats;
    }

    public function setClosestDefender10PlusVeryTightFg2a($stats)
    {
        $this->closestDefender10PlusVeryTight->Fg2a = $stats;
    }

    public function setClosestDefender10PlusVeryTightFg2Pct($stats)
    {
        $this->closestDefender10PlusVeryTight->Fg2Pct = $stats;
    }

    public function setClosestDefender10PlusVeryTightFg3aFrequency($stats)
    {
        $this->closestDefender10PlusVeryTight->Fg3aFrequency = $stats;
    }

    public function setClosestDefender10PlusVeryTightFg3m($stats)
    {
        $this->closestDefender10PlusVeryTight->Fg3m = $stats;
    }

    public function setClosestDefender10PlusVeryTightFg3a($stats)
    {
        $this->closestDefender10PlusVeryTight->Fg3a = $stats;
    }

    public function setClosestDefender10PlusVeryTightFg3Pct($stats)
    {
        $this->closestDefender10PlusVeryTight->Fg3Pct = $stats;
    }

    public function setClosestDefender10PlusTightRange($stats)
    {
        $this->closestDefender10PlusTight->Range = $stats;
    }

    public function setClosestDefender10PlusTightGamesPlayed($stats)
    {
        $this->closestDefender10PlusTight->GamesPlayed = $stats;
    }

    public function setClosestDefender10PlusTightGames($stats)
    {
        $this->closestDefender10PlusTight->Games = $stats;
    }

    public function setClosestDefender10PlusTightFgaFrequency($stats)
    {
        $this->closestDefender10PlusTight->FgaFrequency = $stats;
    }

    public function setClosestDefender10PlusTightFgm($stats)
    {
        $this->closestDefender10PlusTight->Fgm = $stats;
    }

    public function setClosestDefender10PlusTightFga($stats)
    {
        $this->closestDefender10PlusTight->Fga = $stats;
    }

    public function setClosestDefender10PlusTightFgPct($stats)
    {
        $this->closestDefender10PlusTight->FgPct = $stats;
    }

    public function setClosestDefender10PlusTightEfgPct($stats)
    {
        $this->closestDefender10PlusTight->EfgPct = $stats;
    }

    public function setClosestDefender10PlusTightFg2aFrequency($stats)
    {
        $this->closestDefender10PlusTight->Fg2aFrequency = $stats;
    }

    public function setClosestDefender10PlusTightFg2m($stats)
    {
        $this->closestDefender10PlusTight->Fg2m = $stats;
    }

    public function setClosestDefender10PlusTightFg2a($stats)
    {
        $this->closestDefender10PlusTight->Fg2a = $stats;
    }

    public function setClosestDefender10PlusTightFg2Pct($stats)
    {
        $this->closestDefender10PlusTight->Fg2Pct = $stats;
    }

    public function setClosestDefender10PlusTightFg3aFrequency($stats)
    {
        $this->closestDefender10PlusTight->Fg3aFrequency = $stats;
    }

    public function setClosestDefender10PlusTightFg3m($stats)
    {
        $this->closestDefender10PlusTight->Fg3m = $stats;
    }

    public function setClosestDefender10PlusTightFg3a($stats)
    {
        $this->closestDefender10PlusTight->Fg3a = $stats;
    }

    public function setClosestDefender10PlusTightFg3Pct($stats)
    {
        $this->closestDefender10PlusTight->Fg3Pct = $stats;
    }

    public function setClosestDefender10PlusOpenRange($stats)
    {
        $this->closestDefender10PlusOpen->Range = $stats;
    }

    public function setClosestDefender10PlusOpenGamesPlayed($stats)
    {
        $this->closestDefender10PlusOpen->GamesPlayed = $stats;
    }

    public function setClosestDefender10PlusOpenGames($stats)
    {
        $this->closestDefender10PlusOpen->Games = $stats;
    }

    public function setClosestDefender10PlusOpenFgaFrequency($stats)
    {
        $this->closestDefender10PlusOpen->FgaFrequency = $stats;
    }

    public function setClosestDefender10PlusOpenFgm($stats)
    {
        $this->closestDefender10PlusOpen->Fgm = $stats;
    }

    public function setClosestDefender10PlusOpenFga($stats)
    {
        $this->closestDefender10PlusOpen->Fga = $stats;
    }

    public function setClosestDefender10PlusOpenFgPct($stats)
    {
        $this->closestDefender10PlusOpen->FgPct = $stats;
    }

    public function setClosestDefender10PlusOpenEfgPct($stats)
    {
        $this->closestDefender10PlusOpen->EfgPct = $stats;
    }

    public function setClosestDefender10PlusOpenFg2aFrequency($stats)
    {
        $this->closestDefender10PlusOpen->Fg2aFrequency = $stats;
    }

    public function setClosestDefender10PlusOpenFg2m($stats)
    {
        $this->closestDefender10PlusOpen->Fg2m = $stats;
    }

    public function setClosestDefender10PlusOpenFg2a($stats)
    {
        $this->closestDefender10PlusOpen->Fg2a = $stats;
    }

    public function setClosestDefender10PlusOpenFg2Pct($stats)
    {
        $this->closestDefender10PlusOpen->Fg2Pct = $stats;
    }

    public function setClosestDefender10PlusOpenFg3aFrequency($stats)
    {
        $this->closestDefender10PlusOpen->Fg3aFrequency = $stats;
    }

    public function setClosestDefender10PlusOpenFg3m($stats)
    {
        $this->closestDefender10PlusOpen->Fg3m = $stats;
    }

    public function setClosestDefender10PlusOpenFg3a($stats)
    {
        $this->closestDefender10PlusOpen->Fg3a = $stats;
    }

    public function setClosestDefender10PlusOpenFg3Pct($stats)
    {
        $this->closestDefender10PlusOpen->Fg3Pct = $stats;
    }

    public function setClosestDefender10PlusVeryOpenRange($stats)
    {
        $this->closestDefender10PlusVeryOpen->Range = $stats;
    }

    public function setClosestDefender10PlusVeryOpenGamesPlayed($stats)
    {
        $this->closestDefender10PlusVeryOpen->GamesPlayed = $stats;
    }

    public function setClosestDefender10PlusVeryOpenGames($stats)
    {
        $this->closestDefender10PlusVeryOpen->Games = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFgaFrequency($stats)
    {
        $this->closestDefender10PlusVeryOpen->FgaFrequency = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFgm($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fgm = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFga($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fga = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFgPct($stats)
    {
        $this->closestDefender10PlusVeryOpen->FgPct = $stats;
    }

    public function setClosestDefender10PlusVeryOpenEfgPct($stats)
    {
        $this->closestDefender10PlusVeryOpen->EfgPct = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFg2aFrequency($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fg2aFrequency = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFg2m($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fg2m = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFg2a($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fg2a = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFg2Pct($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fg2Pct = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFg3aFrequency($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fg3aFrequency = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFg3m($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fg3m = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFg3a($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fg3a = $stats;
    }

    public function setClosestDefender10PlusVeryOpenFg3Pct($stats)
    {
        $this->closestDefender10PlusVeryOpen->Fg3Pct = $stats;
    }

    public function setOverallReboundingFrequency($stat)
    {
        $this->overallRebounding->frequency = $stat;
    }

    public function setOverallReboundingOreb($stat)
    {
        $this->overallRebounding->oreb = $stat;
    }

    public function setOverallReboundingDreb($stat)
    {
        $this->overallRebounding->dreb = $stat;
    }

    public function setOverallReboundingReb($stat)
    {
        $this->overallRebounding->reb = $stat;
    }

    public function setOverallReboundingContestedOreb($stat)
    {
        $this->overallRebounding->contestedOreb = $stat;
    }

    public function setOverallReboundingContestedDreb($stat)
    {
        $this->overallRebounding->contestedDreb = $stat;
    }

    public function setOverallReboundingContestedReb($stat)
    {
        $this->overallRebounding->contestedReb = $stat;
    }

    public function setOverallReboundingContestedRebPct($stat)
    {
        $this->overallRebounding->contestedRebPct = $stat;
    }

    public function setOverallReboundingUncontestedOreb($stat)
    {
        $this->overallRebounding->uncontestedOreb = $stat;
    }

    public function setOverallReboundingUncontestedDreb($stat)
    {
        $this->overallRebounding->uncontestedDreb = $stat;
    }

    public function setOverallReboundingUncontestedReb($stat)
    {
        $this->overallRebounding->uncontestedReb = $stat;
    }

    public function setOverallReboundingUncontestedRebPct($stat)
    {
        $this->overallRebounding->uncontestedRebPct = $stat;
    }

    public function set2ptMissReboundingFrequency($stat)
    {
        $this->rebounding2ptMiss->frequency = $stat;
    }

    public function set2ptMissReboundingOreb($stat)
    {
        $this->rebounding2ptMiss->oreb = $stat;
    }

    public function set2ptMissReboundingDreb($stat)
    {
        $this->rebounding2ptMiss->dreb = $stat;
    }

    public function set2ptMissReboundingReb($stat)
    {
        $this->rebounding2ptMiss->reb = $stat;
    }

    public function set2ptMissReboundingContestedOreb($stat)
    {
        $this->rebounding2ptMiss->contestedOreb = $stat;
    }

    public function set2ptMissReboundingContestedDreb($stat)
    {
        $this->rebounding2ptMiss->contestedDreb = $stat;
    }

    public function set2ptMissReboundingContestedReb($stat)
    {
        $this->rebounding2ptMiss->contestedReb = $stat;
    }

    public function set2ptMissReboundingContestedRebPct($stat)
    {
        $this->rebounding2ptMiss->contestedRebPct = $stat;
    }

    public function set2ptMissReboundingUncontestedOreb($stat)
    {
        $this->rebounding2ptMiss->uncontestedOreb = $stat;
    }

    public function set2ptMissReboundingUncontestedDreb($stat)
    {
        $this->rebounding2ptMiss->uncontestedDreb = $stat;
    }

    public function set2ptMissReboundingUncontestedReb($stat)
    {
        $this->rebounding2ptMiss->uncontestedReb = $stat;
    }

    public function set2ptMissReboundingUncontestedRebPct($stat)
    {
        $this->rebounding2ptMiss->uncontestedRebPct = $stat;
    }

    public function set3ptMissReboundingFrequency($stat)
    {
        $this->rebounding3ptMiss->frequency = $stat;
    }

    public function set3ptMissReboundingOreb($stat)
    {
        $this->rebounding3ptMiss->oreb = $stat;
    }

    public function set3ptMissReboundingDreb($stat)
    {
        $this->rebounding3ptMiss->dreb = $stat;
    }

    public function set3ptMissReboundingReb($stat)
    {
        $this->rebounding3ptMiss->reb = $stat;
    }

    public function set3ptMissReboundingContestedOreb($stat)
    {
        $this->rebounding3ptMiss->contestedOreb = $stat;
    }

    public function set3ptMissReboundingContestedDreb($stat)
    {
        $this->rebounding3ptMiss->contestedDreb = $stat;
    }

    public function set3ptMissReboundingContestedReb($stat)
    {
        $this->rebounding3ptMiss->contestedReb = $stat;
    }

    public function set3ptMissReboundingContestedRebPct($stat)
    {
        $this->rebounding3ptMiss->contestedRebPct = $stat;
    }

    public function set3ptMissReboundingUncontestedOreb($stat)
    {
        $this->rebounding3ptMiss->uncontestedOreb = $stat;
    }

    public function set3ptMissReboundingUncontestedDreb($stat)
    {
        $this->rebounding3ptMiss->uncontestedDreb = $stat;
    }

    public function set3ptMissReboundingUncontestedReb($stat)
    {
        $this->rebounding3ptMiss->uncontestedReb = $stat;
    }

    public function set3ptMissReboundingUncontestedRebPct($stat)
    {
        $this->rebounding3ptMiss->uncontestedRebPct = $stat;
    }

}
