<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\PersonsTable;
/**
 * About Controller
 *
 * @property \App\Model\Table\AboutTable $About
 *
 * @method \App\Model\Entity\About[] paginate($object = null, array $settings = [])
 */
class AboutController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
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
       // $persons = $this->Persons->newEntity();
        //$about = $this->About->get($id, [
        $about = $this->About->get(5, [
            'contain' => []
        ]);
        $this->set('about', $about);
        $this->set('_serialize', ['about']);
        
        
        $persons = PersonsTable::get('Persons')->find()->all();
        // = $this->paginate($this->Persons);

        $this->set(compact('persons'));
        $this->set('_serialize', ['persons']);
        
        //$persons = $this->paginate($this->About);
        //$this->set('persons',$this->Persons->find('all'));
        //$this->set(compact('persons'));
    /*    
        $query = $persons->find('all');
        //$results = $query->all();
        $this->set(compact('results'));*/
        //$this->set('_serialize', ['persons']);
        $this->set('isAdmin', true);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
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
       // $about = $this->About->get($id, [
       $about = $this->About->get(5, [
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
    /*
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $about = $this->About->get($id);
        if ($this->About->delete($about)) {
            $this->Flash->success(__('The about has been deleted.'));
        } else {
            $this->Flash->error(__('The about could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }*/
}
