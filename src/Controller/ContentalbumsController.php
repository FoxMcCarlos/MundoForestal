<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Contentalbums Controller
 *
 * @property \App\Model\Table\ContentalbumsTable $Contentalbums
 * @property \App\Model\Table\ContentsTable $Contens
 * @property \App\Model\Table\AlbumsTable $Albums
 *
 * @method \App\Model\Entity\Contentalbum[] paginate($object = null, array $settings = [])
 */
class ContentalbumsController extends AppController
{




  public function initialize()
  {
    $this->loadComponent('Flash');
    $this->loadModel('Albums');
    $this->loadModel('Contents');
    $this->loadComponent('Auth');
  }

  public function beforeFilter(Event $event)
   {
       parent::beforeFilter($event);
       // Allow users to register and logout.
       // You should not add the "login" action to allow list. Doing so would
       // cause problems with normal functioning of AuthComponent.

       $this->Auth->deny(['add','index','edit','view','delete']);

   }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contentalbums = $this->paginate($this->Contentalbums);
        $withRelations = $this->Contentalbums->loadInto($contentalbums, ['Contents','Albums']);
        $this->set(compact('contentalbums'));
        $this->set('_serialize', ['contentalbums']);
    }

    /**
     * View method
     *
     * @param string|null $id Contentalbum id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contentalbum = $this->Contentalbums->get($id, [
            'contain' => ['Contents','Albums']
        ]);

        $this->set('contentalbum', $contentalbum);
        $this->set('_serialize', ['contentalbum']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $contentalbum = $this->Contentalbums->newEntity();
        if ($this->request->is('post')) {
            $contentalbum = $this->Contentalbums->patchEntity($contentalbum, $this->request->getData());
            if ($this->Contentalbums->save($contentalbum)) {
                $this->Flash->success(__('The contentalbum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contentalbum could not be saved. Please, try again.'));
        }
        $this->set(compact('contentalbum'));
        $this->set('_serialize', ['contentalbum']);
        $this->set('albums',$this->Albums->find('list'));
        $this->set('contents',$this->Contents->find('list'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contentalbum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $contentalbum = $this->Contentalbums->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contentalbum = $this->Contentalbums->patchEntity($contentalbum, $this->request->getData());
            if ($this->Contentalbums->save($contentalbum)) {
                $this->Flash->success(__('The contentalbum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contentalbum could not be saved. Please, try again.'));
        }
        $this->set(compact('contentalbum'));
        $this->set('_serialize', ['contentalbum']);
        $this->set('albums',$this->Albums->find('list'));
        $this->set('contents',$this->Contents->find('list'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contentalbum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contentalbum = $this->Contentalbums->get($id);
        if ($this->Contentalbums->delete($contentalbum)) {
            $this->Flash->success(__('The contentalbum has been deleted.'));
        } else {
            $this->Flash->error(__('The contentalbum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
