<?php

namespace Taco\TestServerCore;

use pocketmine\plugin\PluginBase;

class Core extends PluginBase {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new CoreListener($this), $this);
        $this->getLogger->Info("\n TestCore Enabled \n GoodLuck With Your Plugins!");
    }
}
