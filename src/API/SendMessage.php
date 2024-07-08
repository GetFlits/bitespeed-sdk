<?php

namespace Flits\Bitespeed\API;

use Flits\Bitespeed\BitespeedProvider;

class SendMessage extends BitespeedProvider {

    public $METHOD = "POST";
    public $URL = "whatsapp/messages/send/template";

    function __construct($config) {
        parent::__construct($config);
    }
}
