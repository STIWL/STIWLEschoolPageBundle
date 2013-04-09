<?php

/**
 * Description of EsolvingEschoolPageBundle
 *
 * @author Luis Alberto Sánchez Saldaña <luis22989@hotmail.com>
 */
namespace Esolving\Eschool\Third\EsolvingPageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Esolving\Eschool\Third\EsolvingPageBundle\DependencyInjection\Compiler\OverrideServiceCompilerPass;

class EsolvingEschoolThirdEsolvingPageBundle extends Bundle {
    public function getParent() {
        return "EsolvingPageBundle";
    }
    
//    public function build(ContainerBuilder $container)
//    {
//        parent::build($container);
//
//        $container->addCompilerPass(new OverrideServiceCompilerPass());
//    }
}

?>
