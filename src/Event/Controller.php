<?php
/**
 * Created by PhpStorm.
 * User: p1ratrulezzz
 * Date: 18.06.18
 * Time: 14:13
 */

namespace Longman\TelegramBot\Event;


use Longman\TelegramBot\Event\Listeners\ListenerInterface;

class Controller {
    protected $listeners = [];


    public function triggerEvent($name) {
        $event = new Event();

        if (!empty($this->listeners[$name])) {
            /**
             * @var $listener ListenerInterface
             */
            foreach ($this->listeners[$name] as $listener) {
                $listener->onEvent($event);
            }
        }
    }
    public function addEventListener($name, ListenerInterface $listener) {
        $this->listeners[$name][$listener->id()] = $listener;
    }
}