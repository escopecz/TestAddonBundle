<?php
/**
 * @Author  Chad Windnagle
 * @Project TestAddon
 * Date: 4/13/15
 */

$view->extend('MauticCoreBundle:Default:content.html.php');
echo $view['assets']->includeScript('addons/TestAddonBundle/Assets/js/test.js');
echo $view['assets']->includeStylesheet('addons/TestAddonBundle/Assets/css/test.css');
?>
<h1>Test Addon</h1>