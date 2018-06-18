<?php
/**
 * Created by PhpStorm.
 * User: p1ratrulezzz
 * Date: 18.06.18
 * Time: 14:20
 */

namespace Longman\TelegramBot\Event\Listeners;


abstract class Listener implements ListenerInterface {
    protected $id;
    public function __construct() {
        $this->id = get_class($this);
    }

    public function id() {
        return $this->id;
    }
}