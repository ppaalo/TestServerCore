<?php

namespace Taco\TestServerCore;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\server\QueryRegenerateEvent;

class CoreListener implements Listener {
    public function Join(PlayerJoinEvent $event) {
        $event->setJoinMessage("");
    }
    public function Quit(PlayerQuitEvent $event) {
        $event->setQuitMessage("");
    }
    public function onQuery(QueryRegenerateEvent $event) {
        $event->setMaxPlayerCount($event->getPlayerCount() + 1);
    }
}
