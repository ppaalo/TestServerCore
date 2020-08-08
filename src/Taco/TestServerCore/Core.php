<?php

/*             _             _____                 
     /\       | |           |  __ \                
    /  \   ___| |_ _ __ __ _| |  | | _____   _____ 
   / /\ \ / __| __| '__/ _` | |  | |/ _ \ \ / / __|
  / ____ \\__ \ |_| | | (_| | |__| |  __/\ V /\__ \
 /_/    \_\___/\__|_|  \__,_|_____/ \___| \_/ |___/
                                                   
                                                   

Copyright (C) 2020  TWRRR (github.com/twrrr)

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

namespace Taco\TestServerCore;

use pocketmine\plugin\PluginBase;

class Core extends PluginBase {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents(new CoreListener($this), $this);
        $this->getLogger->Info("\n TestCore Enabled \n GoodLuck With Your Plugins!");
    }
}
