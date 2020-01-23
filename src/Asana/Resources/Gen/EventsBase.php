<?php

namespace Asana\Resources\Gen;

class EventsBase {

    /**
    * @param Asana/Client client  The client instance
    */
    public function __construct($client)
    {
        $this->client = $client;
    }

    public function getEvents($params = array(), $options = array()) {
        /** Get events on a resource
         *
         * @param $params : 
         * @return response
         */
        $path = "/events";
        return $this->client->get($path, $params, $options);
    }
}
