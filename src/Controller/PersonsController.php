<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Persons Controller
 *
 * @property \App\Model\Table\PersonsTable $Persons
 *
 * @method \App\Model\Entity\Person[] paginate($object = null, array $settings = [])
 */
class PersonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set(['title' => 'Personas', 'isAdmin' => true]);
        $persons = $this->paginate($this->Persons);

        $this->set(compact('persons'));
        $this->set('_serialize', ['persons']);
    }

    /**
     * View method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->set(['title' => 'Consultando persona', 'isAdmin' => true]);
        $person = $this->Persons->get($id, [
            'contain' => []
        ]);

        $this->set('person', $person);
        $this->set('_serialize', ['person']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set(['title' => 'Agregando persona', 'isAdmin' => true]);
        $person = $this->Persons->newEntity();
        $errorUploading = false;
        if (isset ($_FILES['photo']['error']) && ($_FILES['photo']['error'] != 0)) {
            $this->Flash->error(__('Problem uploading file, image too big?'));
            $errorUploading = true;
        }
        if ((!$errorUploading) && $this->request->is('post')) {
            $person = $this->Persons->patchEntity($person, $this->request->getData());
            $person->about_id=1;
            if ($this->Persons->save($person)) {
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The person could not be saved. Please, try again.'));
        }
        $this->set(compact('person'));
        $this->set('_serialize', ['person']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->set(['title' => 'Editando persona', 'isAdmin' => true]);
        $person = $this->Persons->get($id, [
            'contain' => []
        ]);
        $errorUploading = false;
        if (isset ($_FILES['photo']['error']) && ($_FILES['photo']['error'] != 0)) {
            $this->Flash->error(__('Problem uploading file, image too big?'));
            $errorUploading = true;
        }
        if ((!$errorUploading) && $this->request->is(['patch', 'post', 'put'])) {
            $person = $this->Persons->patchEntity($person, $this->request->getData());
            $person->about_id=1;
            if ($this->Persons->save($person)) {
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The person could not be saved. Please, try again.'));
        }
        $this->set(compact('person'));
        $this->set('_serialize', ['person']);
    }
    
    

    /**
     * Delete method
     *
     * @param string|null $id Person id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->set(['title' => 'Eliminando persona', 'isAdmin' => true]);
        $this->request->allowMethod(['post', 'delete']);
        $person = $this->Persons->get($id);
        if ($this->Persons->delete($person)) {
            $this->Flash->success(__('The person has been deleted.'));
        } else {
            $this->Flash->error(__('The person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
