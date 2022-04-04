<?php

namespace ToxicGG\TheUnHoly;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use ToxicGG\TheUnHoly\Commands\HolyCommand; // Will be worked on!

class Holy extends PluginBase{

  public function onLoad(): void{
    $this->getLogger()->info("A Demon is tryna latch into the server");
  }
  
  public function onEnable(): void{
    $this->getLogger()->info("A Demon has been enabled in your server");
  }
  
  public function onDisable(): void{
    $this->getLogger()->info("A Demon got burned from pure holy water");
  }
} 
