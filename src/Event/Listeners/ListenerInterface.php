<?php
/**
 * Created by PhpStorm.
 * User: p1ratrulezzz
 * Date: 18.06.18
 * Time: 14:05
 */

namespace Longman\TelegramBot\Event\Listeners;


use Longman\TelegramBot\Event\EventInterface;

interface ListenerInterface {
    public function onEvent(EventInterface $event);
    public function id();
}