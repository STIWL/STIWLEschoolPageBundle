<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Builder
 *
 * @author luchin
 */

namespace Esolving\Eschool\Third\EsolvingPageBundle\Menu;

use Esolving\PageBundle\Menu\MenuBuilder as BaseBuilder;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder extends BaseBuilder {

    public function pageMenu(Request $request) {
        $response = parent::pageMenu($request);
        $menu = $response;
        if ($this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
            $myAccount = $menu->addChild($this->container->get('translator')->trans('my_account', array(), $this->translationDomain))->setAttribute('class', 'has-sub')->setExtra('html', '<div class="arrow"></div>');
            $myAccount->addChild($this->container->get('translator')->trans('go_to_campus', array(), $this->translationDomain), array(
                'route' => 'esolving_eschool_userB_index')
            );
            $myAccount->addChild($this->container->get('translator')->trans('administration', array(), $this->translationDomain), array(
                'route' => 'sonata_admin_dashboard')
            );
            $myAccount->addChild($this->container->get('translator')->trans('log_out', array(), $this->translationDomain), array(
                'route' => 'logout'
            ));
        }
        return $menu;
    }

}

?>
