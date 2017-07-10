<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Gallery Controller
 *
 * @property \App\Model\Table\GalleryTable $Gallery
 *
 * @method \App\Model\Entity\Gallery[] paginate($object = null, array $settings = [])
 */
class GalleryController extends AppController
{
    public function beforeFilter (Event $event) {
        parent::beforeFilter ($event);
        $this->Auth->allow (['list']);
    }
    /**
     * Shows all the images.
     */
    public function list () {
        $this->set('title', 'Galería');
        $gallery = $this->paginate($this->Gallery)->toArray();

        $this->set(compact('gallery'));
        $this->set('_serialize', ['gallery']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set(['title' => 'Galería', 'isAdmin' => true]);
        $gallery = $this->paginate($this->Gallery);

        $this->set(compact('gallery'));
        $this->set('_serialize', ['gallery']);
    }

    /**
     * View method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->set(['title' => 'Galería', 'isAdmin' => true]);
        $gallery = $this->Gallery->get($id, [
            'contain' => []
        ]);

        $this->set('gallery', $gallery);
        $this->set('_serialize', ['gallery']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set(['title' => 'Agregando en galería', 'isAdmin' => true]);
        $gallery = $this->Gallery->newEntity();
        if ($this->request->is('post')) {
            $gallery = $this->Gallery->patchEntity($gallery, $this->request->getData());
            if ($this->Gallery->save($gallery)) {
                $this->Flash->success(__('The gallery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gallery could not be saved. Please, try again.'));
        }
        $this->set(compact('gallery'));
        $this->set('_serialize', ['gallery']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gallery = $this->Gallery->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gallery = $this->Gallery->patchEntity($gallery, $this->request->getData());
            if ($this->Gallery->save($gallery)) {
                $this->Flash->success(__('The gallery has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gallery could not be saved. Please, try again.'));
        }
        $this->set(compact('gallery'));
        $this->set('_serialize', ['gallery']);
        $this->set(['title' => 'Editando en galería', 'isAdmin' => true]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gallery = $this->Gallery->get($id);
        if ($this->Gallery->delete($gallery)) {
            $this->Flash->success(__('The gallery has been deleted.'));
        } else {
            $this->Flash->error(__('The gallery could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
