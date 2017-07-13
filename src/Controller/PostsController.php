<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Posts Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 *
 * @method \App\Model\Entity\Post[] paginate($object = null, array $settings = [])
 */
class PostsController extends AppController
{
    public function beforeFilter (Event $event) {
        parent::beforeFilter ($event);
        $this->Auth->allow (['home', 'view']);
    }

    /**
     * Implements homepage functionality.
     */
    public function home()
    {
		$this->set('title', 'Qué pereza la presa');
        $posts = $this->paginate($this->Posts, ['order' => ['created' => 'desc']]);

        $this->set('content', 'Sleep');
        $this->set(compact('posts'));
        $this->set('_serialize', ['posts']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->set(['title' => 'Administración de publicaciones', 'isAdmin' => true]);
		$this->set('isAdmin', true);
        $posts = $this->paginate($this->Posts);

        $this->set(compact('posts'));
        $this->set('_serialize', ['posts']);
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comment = $this->Posts->Comments->newEntity();
        if ($this->request->is('post')) {
            $comment = $this->Posts->Comments->patchEntity($comment, $this->request->getData());
            $comment->post_id = $id;
            if ($this->Posts->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));

            } else {
                $this->Flash->error(__('The comment could not be saved. Please, try again.'));
            }
        }
        $post = $this->Posts->get($id, [
            'contain' => ['Comments']
        ]);
        $this->set('post', $post);
        $this->set(compact('comment', 'posts'));
        $this->set('_serialize', ['post']);
        $this->set(['title' => $post->title]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Posts->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $this->set(compact('post'));
        $this->set('_serialize', ['post']);
        $this->set('title', 'Creando nuevo post');
        $this->set('isAdmin', true);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if ($this->Posts->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $this->set(compact('post'));
        $this->set('_serialize', ['post']);
        $this->set('title', 'Editando: '.$post ['title']);
        $this->set('isAdmin', true);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
}
