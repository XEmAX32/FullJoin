<?php

/*
#############################################
               --> FULLJOIN <--
             --> By @AryToNeX <--
   --> Follow me on Twitter: @AryToNeX <--
--> And also in PocketMine Forums: @ToNeX <--
#############################################
*/

# Okay let's do this! ;D

namespace FullJoin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerKickEvent;

class Main extends PluginBase implements Listener{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info(TextFormat::GREEN . "FullJoin enabled!");
  }
  
  public function onDisable(){
    $this->getLogger()->info(TextFormat::RED . "FullJoin disabled!");
  }
  
  public function onPlayerKick(PlayerKickEvent $event){
    $player = $event->getPlayer();
		  if($player->hasPermission("fulljoin.join") and $event->getReason() === "disconnectionScreen.serverFull"){
			  $event->setCancelled(true);
		  }
	
	}
  public function onJoin(PlayerJoinEvent $e){
$player = $e->getPlayer();
if($player->hasPermission("fulljoin.join"){
$player->sendMessage(TextFormat::BLUE . "You succesfully join the server");
   }
}
