<?php

namespace FloatingTexter;

use pocketmine\scheduler\Task;

class RefreshTask extends Task{

    private $plugin;

    public function __construct(Main $plugin){
        $this->plugin = $plugin;
    }

    public function onRun(int $currentTick): void{
        foreach($this->plugin->getServer()->getLevels() as $level){
            foreach($level->getEntities() as $entity){
                if($entity instanceof FloatingText){
                    $entity->respawn();
                }
            }
        }
    }
}
