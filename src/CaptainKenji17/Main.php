<?php

namespace CaptainKenji17;

/*
* Edit by Skull3x
* Will be making different sets of copies from 		* this code for each and every type of weapon in 		* my kits! Credit to CaptainKenji17
*/

use pocketmine\event\player\PlayerItemHeldEvent;

use pocketmine\Player;

use pocketmine\event\Listener;

use pocketmine\event\entity\EntityDamageEvent;

use pocketmine\event\entity\EntityDamageByEntityEvent;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\TextFormat as Color;

use pocketmine\Server;

use pocketmine\entity\Effect;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->saveDefaultConfig();
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
        	$this->getServer()->getLogger()->info(Color::AQUA . "DiamondSwordSkill Enabled!");
	}
	
    public function onDamage(EntityDamageEvent $event){
		if($event instanceof EntityDamageByEntityEvent){
			$damager = $event->getDamager();
			$entity = $event->getEntity();
			if($damager instanceof Player){
				if($damager->getInventory()->getItemInHand()->getId() === 276){
					$event->setknockBack($this->getConfig()->get("KnockBack-Power"));
					  $effect1 = Effect::getEffect (5);
		$effect1->setDuration (50 * 99);
		$effect1->setAmplifier (2);
		$effect1->setVisible(false);
                              $level = $damager->getLevel();
                              $damager->addEffect($effect1);
          $damager->getLevel()->addSound($fizz);
          $player->getLevel()->addSound($fizz);
                }
            }
        }
    }
}

public function onItemHeld(PlayerItemHeldEvent $event){
if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 276){
$event->getPlayer()->sendTip("§e-= §bDIAMOND KIT §e=-");
}
}
