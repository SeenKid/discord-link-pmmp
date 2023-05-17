<?php

namespace discordinvite;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener {

    // Envoie un message sur la console comme quoi le plugin fonctionne
    public function onEnable(): void {
        $this->getLogger()->notice("Le plugin DiscordInvite fonctionne.");
    }

    // Si la commande est /discord et que c'est un joueur qui l'a fait, on lui envoie un lien du discord
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if($command->getName() == "discord") {
            if($sender instanceof Player) {
                $sender->sendMessage("Rejoins notre discord juste ici : https://discord.gg/neP8xEV6p8");
            }
        }
        return true;
    }
}