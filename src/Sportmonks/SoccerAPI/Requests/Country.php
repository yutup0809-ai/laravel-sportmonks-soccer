<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

class Country extends SoccerAPIClient {

    public function all()
    {
        return $this->callData('core/countries');
    }

    public function byId($countryId)
    {
        return $this->call('core/countries/' . $countryId);
    }

}