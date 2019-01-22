<?php

declare(strict_types=1);

namespace Prugala\SyliusAllegroPlugin;

use Prugala\SyliusAllegroPlugin\DependencyInjection\PrugalaSyliusAllegroExtension;
use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class PrugalaSyliusAllegroPlugin extends Bundle
{
    use SyliusPluginTrait;

    public function getContainerExtension(): PrugalaSyliusAllegroExtension
    {
        $class = $this->getContainerExtensionClass();
        return new $class();
    }

    public function getContainerExtensionClass(): string
    {
        return PrugalaSyliusAllegroExtension::class;
    }
}
