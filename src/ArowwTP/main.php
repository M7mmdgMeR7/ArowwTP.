<?php

namespace ArowwTP;

use pocketmine\plugin\PluginBase
use pocketmine\command\CommandSender

class Main extends PluginBase{

public function OnEnable(){ $this->getLogger()->info(Color:GREEN."ArowwTPplugin Enable");

   }

public function OnDisable(){ $this->getLogger()->info(Color:RED."ArowwTPplugin Disable");

  }
public function onCommand(Command $sender Command $cmd, $label, array, $args)
                switch ($cmd->getName())  {
        case "ArowwHelp"
      if($sender instanceof Player){
                                             

       }
                                                      



                                                                          public function onShoot (\pocketmine\event\entity\EntityShootBowEvent $event)
		{
				$shooter = $event->getEntity();
				if ($shooter instanceof Player) {
					$id = $shooter->getID();
					$this->launch[$id] = (bool) true;
				}
		}
		
		function onHit (\pocketmine\event\entity\ProjectileHitEvent $event)
		{
				$entity = $event->getEntity();
				$level = $entity->getLevel();
				if ($entity instanceof Arrow) {
					$shooter = $entity->shootingEntity;
					$pos = $entity->getPosition();
					if ($shooter instanceof Player) {
						$id = $shooter->getID();
						$shoot = $this->launch[$id];
						if ($pos instanceof Position and isset($shoot)) {
							$level->removeEntity($entity);
							$event->teleport($pos);
							unset($this->launch[$id]);
						}
					}
				}
		}

        

