<?php
/**
 * @Author  Chad Windnagle
 * @Project TestAddon
 * Date: 4/13/15
 */

namespace MauticAddon\TestAddonBundle\Controller;

use Mautic\CoreBundle\Controller\FormController;

/**
 * Class AddonController
 */
class TestController extends FormController
{
    /**
     * @param int $page
     */
    public function indexAction ($page = 1)
    {
        $tmpl = $this->request->isXmlHttpRequest() ? $this->request->get('tmpl', 'index') : 'index';

        return $this->delegateView(array(
                'viewParameters'  => array(
                    'tmpl' => $tmpl,
             ),
             'contentTemplate' => 'TestAddonBundle:Test:index.html.php',
           )
        );
    }
}