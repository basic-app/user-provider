<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\UserProvider\Events;

class LoginEvent extends \BasicApp\Event\BaseEvent
{

    public $provider;

    public $identifier;

    public $userID;

}