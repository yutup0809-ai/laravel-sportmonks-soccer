<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class League extends SoccerAPIClient {

    public function all()
    {
        return $this->callData('football/leagues');
    }

    public function byId($competitionId)
    {
        return $this->call('football/leagues/' . $competitionId);
    }

}