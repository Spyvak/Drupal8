<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ExampleController implements ControllerInterface {

    public static function create(ContainerInterface $container) {
        return new static($container->get('module_handler'));
    }

    /**
     * This will return the output of the example page.
     */
    public function examplePage() {
        return array(
            '#markup' => t('Это тестовая страничка.'),
        );
    }

}