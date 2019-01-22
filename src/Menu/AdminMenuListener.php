<?php
/**
 * @category    Sylius-Standard
 * @date        17/09/2018 13:45
 * @author      Piotr Rugała <prugala@divante.co>
 * @copyright   Copyright (c) 2018 Divante Ltd. (https://divante.co)
 */

namespace Prugala\SyliusAllegroPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $newSubmenu = $menu->getChild('configuration');

        $newSubmenu
            ->addChild('allegro-configuration', ['route' => 'prugala_sylius_allegro_configuration'])
            ->setLabel('Allegro')
            ->setLabelAttribute('icon', 'star')
        ;
    }
}
