<?php
namespace EnchantItem;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentEntry;
use pocketmine\item\enchantment\EnchantmentList;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
class EnchantItem extends PluginBase implements Listener{
public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}
public function onTap(PlayerInteractEvent $event){
$player = $event->getPlayer();
if ($event->getBlock ()->getId () == Item::MOBSPAWNER) {
$enchantment = Enchantment::getEnchantment(9);
$enchantment->setLevel(1);
$item = $player->getInventory()->getItemInHand();
$item->addEnchantment($enchantment);
$p->sendMessage(TextFormat::RED."Enchantment Successful!");
}
}
}
