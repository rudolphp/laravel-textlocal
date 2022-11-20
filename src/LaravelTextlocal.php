<?php

namespace Rudolphp\LaravelTextlocal;

use Textlocal;

class LaravelTextlocal extends Textlocal
{
    private $sender;

    /**
	 * Instantiate the object
	 * @param $username
	 * @param $hash
	 */
    public function __construct()
    {

        parent::__construct(config('textlocal.username'), config('textlocal.hash'), config('textlocal.apikey'));

        $this->sender = config('textlocal.sender');
    }

    /**
     * @param string $message
     * @param string $receiver
     * @param string $sender
     * @return array|mixed
     * @throws Exception
     */
    public function send($message, $receiver, $sender = '')
    {
        return $this->sendSms([$receiver], $message, $sender != '' ? $sender : $this->sender);
    }
}
