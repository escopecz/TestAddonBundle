<?php
/**
 * @Author  Chad Windnagle
 * @Project TestAddon
 * Date: 4/13/15
 */

return array(
    'name'        => 'Test Addon',
    'description' => 'Test Addon for testing Mautic',
    'version'     => '1.0',
    'author'      => 'Chad Windnagle',

    'routes'   => array(
        'main' => array(
            'test_addon_index' => array(
                'path'       => '/test/{page}',
                'controller' => 'TestAddonBundle:Test:index'
            ),
        )
    )
);