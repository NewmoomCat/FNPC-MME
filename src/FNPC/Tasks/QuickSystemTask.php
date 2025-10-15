<?php
namespace FNPC\Tasks;

/*
Copyright © 2016 FENGberd All right reserved.
GitHub Project:
https://github.com/fengberd/FNPC
*/
use pocketmine\scheduler\PluginTask;

use FNPC\Main;
use FNPC\npc\NPC;

class QuickSystemTask extends PluginTask
{
	private $plugin;
	
	public function __construct(Main $plugin)
	{
		parent::__construct($plugin);
		$this->plugin=$plugin;
	}
	
	public function onRun($currentTick)
	{
		$this->plugin=$this->getOwner();
		NPC::tick();
	}
}
?>
