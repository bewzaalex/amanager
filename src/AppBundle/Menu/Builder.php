<?php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        // Homepage menu entry
        $menu->addChild('Home', array('route' => 'homepage'));

        // Cdr menu entry
        $menu->addChild('Cdr', array('route' => 'cdr'));
        $menu['Cdr']->addChild('Search', array('route' => 'cdr'));

        // Cel menu entry
        $menu->addChild('Cel', array('route' => 'cel'));
        $menu['Cel']->addChild('Search', array('route' => 'cel_search'));

        return $menu;
    }
}
