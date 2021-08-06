<?php

namespace LunarMoon72\TestCode4;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

use pocketmine\event\Listener

class Main extends PluginBase implements Listener{
   public function onEnabled(){
   	$this->getServer()->getPluginManager()->registerEvents($this,$this);
   	$this->getLogger()->info("Plugin is Enabled");
	}
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
		switch($cmd->getName()){
			case "perm"
			  if($player->hasPermission("testcode4.cmd")){
			  	if($sender instanceof Player){
			  		$sender->sendMessage("This command only works for players!");
			  	}else{
			  		if(!isset($args[0]) or (is_int($args[0]) and $args[0] > 0)){
			  			$args[0] = 4;
			  		}
			  	    $sender->getInventory()->addItem(Item::get(1, 0, $args[0])); 
			  	    $sender->sendMessage("You have recived" .count $args[0].);
			  	}   
                    
			  }
		}     break;
	}
}   return true;
