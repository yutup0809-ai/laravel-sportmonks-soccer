<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

class Round extends SoccerAPIClient {

    public function byId($roundId)
    {
        return $this->call('football/rounds/' . $roundId);
    }

    public function bySeasonId($seasonId)
    {
        return $this->call('football/rounds/seasons/' . $seasonId);
    }

}