<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * About Controller
 *
 * @property \App\Model\Table\AboutTable $About
 *
 * @method \App\Model\Entity\About[] paginate($object = null, array $settings = [])
 */
class AboutController extends AppController
{

    public function beforeFilter (Event $event) {
        parent::beforeFilter ($event);
        $this->Auth->allow (['view']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set(['title' => 'Acerca de nosotros', 'isAdmin' => true]);
        $about = $this->paginate($this->About);

        $this->set(compact('about'));
        $this->set('_serialize', ['about']);
    }

    /**
     * View method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->set(['title' => 'Acerca de nosotros']);
        $about = $this->About->get(1, [
            'contain' => ['Persons']
        ]);
        $contador=0;
        $this->set('contador', $contador);
        $this->set('about', $about);
        $this->set(compact('person', 'about'));
        $this->set('_serialize', ['about']);
        $this->set(['title' => "About us"]);
        $this->set('isAdmin', true);
        /*$about = $this->About->get($id, [
            'contain' => ['Persons']
        ]);

        $this->set('about', $about);
        $this->set('_serialize', ['about']);*/
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set(['title' => 'Agregando en acerca de nosotros', 'isAdmin' => true]);
        $about = $this->About->newEntity();
        if ($this->request->is('post')) {
            $about = $this->About->patchEntity($about, $this->request->getData());
            if ($this->About->save($about)) {
                $this->Flash->success(__('The about has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about could not be saved. Please, try again.'));
        }
        $this->set(compact('about'));
        $this->set('_serialize', ['about']);
    }

    /**
     * Edit method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->set(['title' => 'Editando acerca de nosotros', 'isAdmin' => true]);
        $about = $this->About->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $about = $this->About->patchEntity($about, $this->request->getData());
            if ($this->About->save($about)) {
                $this->Flash->success(__('The about has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about could not be saved. Please, try again.'));
        }
        $this->set(compact('about'));
        $this->set('_serialize', ['about']);
    }

    /**
     * Delete method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->set(['title' => 'Elinimar acerca de nosotros', 'isAdmin' => true]);
        $this->request->allowMethod(['post', 'delete']);
        $about = $this->About->get($id);
        if ($this->About->delete($about)) {
            $this->Flash->success(__('The about has been deleted.'));
        } else {
            $this->Flash->error(__('The about could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
