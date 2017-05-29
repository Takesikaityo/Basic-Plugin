<?php

namespace Example;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

        public function onLoad(){
                $this->getLogger()->info("onLoad() が呼び出されました！");
        }

        public function onEnable(){
                $this->getLogger()->info("onEnable() が呼び出されました！");
        }

        public function onDisable(){
                $this->getLogger()->info("onDisable() が呼び出されました！");
        }
}