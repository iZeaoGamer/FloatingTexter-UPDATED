<?php

namespace FloatingTexter;

use pocketmine\scheduler\Task;

class SpawnTask extends Task{

    /** @var FloatingText */
    public $floatingText;
    public $plugin;

    public function __construct(Main $plugin, FloatingText $floatingText){
        $this->plugin = $plugin;
        $this->floatingText = $floatingText;
    }

    public function onRun(int $currentTick): void{
        $this->floatingText->spawnToAll();
    }
}
