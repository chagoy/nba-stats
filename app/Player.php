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


    public function careerStats()
    {
        $client = new Client();

        $request = PlayerProfileRequest::fromArray([
            'playerId' => $this->player_id,
            'leagueId' => '00',
            'perMode' => 'PerGame'
        ]);

        $response = $client->request($request);

        $objectResponse = $response->getArrayFromJson();
        
        return $objectResponse;
    }
}
