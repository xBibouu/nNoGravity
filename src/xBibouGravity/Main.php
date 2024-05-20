<?php

namespace xBibouGravity;

use pocketmine\block\VanillaBlocks;
use pocketmine\event\block\BlockUpdateEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    protected function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }

    public function OnUpdate(BlockUpdateEvent $event)
    {
        $block = $event->getBlock();

        if ($block->getTypeId() === VanillaBlocks::SAND()->getTypeId() || $block->getTypeId() === VanillaBlocks::GRAVEL()->getTypeId()){
            $event->cancel();
        }
    }
}