<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'controller' => 'Posts',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Posts',
                'action' => 'home',
            ]
        ]);
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        if (isset ($this->Auth)) {
            $this->set('username', $this->Auth->user('username'));
        }
        $this->set('adminNavbarCommonElements', '
            <li class=heading><a href="/users/logout">Cerrar Sesión</a></li>
            <hr />
            <li class=heading><a href="/about/Edit">'.__("About").'</a></li>
            <li class=heading><a href="/persons/index">Personas</a></li>
            <li class=heading><a href="/contacts/index">Contacto</a></li>
            <li class=heading><a href="/questions/index">Preguntas frecuentes</a></li>
            <li class=heading><a href="/comments">'.__("Comments").'</a></li>
            <li class=heading><a href="/gallery">'.__("Gallery").'</a></li>
            <li class=heading><a href="/posts">'.__("Posts").'</a></li>
            <li class=heading><a href="/users">'.__("Users").'</a></li>
            <hr />
        ');
    }
}
