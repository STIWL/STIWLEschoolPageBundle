<?php
namespace Esolving\Eschool\Third\EsolvingPageBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideServiceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('esolving_page.menu_builder');
        $definition->setClass('Esolving\Eschool\Third\EsolvingPageBundle\Menu\MenuBuilder');
    }
}