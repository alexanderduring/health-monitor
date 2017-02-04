<?php

return array(
    'controllers' => array(
        'invokables' => array(
            Application\Controller\IndexController::class => Application\Controller\IndexController::class
        ),
        'factories' => array(
        )
    ),
    'service_manager' => array(
        'factories' => array(
        )
    ),
    'view_helpers' => array(
        'factories' => array(
            'Menu' => Application\View\Helper\MenuFactory::class
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',

            'application/viewhelper/menu' => __DIR__ . '/../view/viewhelper/menu.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy'
        )
    ),
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => Zend\Mvc\Router\Http\Segment::class,
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => Application\Controller\IndexController::class,
                        'action'     => 'index'
                    )
                )
            ),
            'd3-line-chart-data' => array(
                'type' => Zend\Mvc\Router\Http\Segment::class,
                'options' => array(
                    'route'    => '/d3-line-chart-data',
                    'defaults' => array(
                        'controller' => Application\Controller\IndexController::class,
                        'action'     => 'd3LineChartData'
                    )
                )
            )
        )
    ),
    'menu' => array(
        'Menü' => array(
            'Home' => 'home',
        )
    )
);
