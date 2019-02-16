<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


/**
 * Contents Controller
 *
 * @property \App\Model\Table\ContentsTable $Contents
 *
 * @method \App\Model\Entity\Content[] paginate($object = null, array $settings = [])
 */
class ContentsController extends AppController
{
  public function initialize()
  {
    $this->loadComponent('Flash');
    $this->loadModel('Categories');
    $this->loadModel('Botanicalfamilies');
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
        $contents = $this->paginate($this->Contents);
        $withRelations = $this->Contents->loadInto($contents, ['Categories','Botanicalfamilies']);
        $this->set(compact('contents'));
        $this->set('_serialize', ['contents']);
    }

    /**
     * View method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $content = $this->Contents->get($id, [
            'contain' => ['Categories','Botanicalfamilies']
        ]);


        $this->set('content', $content);
        $this->set('_serialize', ['content']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */

    public function add()
    {

        $content = $this->Contents->newEntity();
        if ($this->request->is('post')) {
            $content = $this->Contents->patchEntity($content, $this->request->getData());
            if ($this->Contents->save($content)) {
                $this->Flash->success(__('The content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The content could not be saved. Please, try again.'));
        }
        $this->set(compact('content'));
        $this->set('_serialize', ['content']);
        $this->set('categories',$this->Categories->find('list'));
        $this->set('families',$this->Botanicalfamilies->find('list'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {


        $content = $this->Contents->get($id, [
            'contain' => ['Categories','Botanicalfamilies']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $content = $this->Contents->patchEntity($content, $this->request->getData());
            if ($this->Contents->save($content)) {
                $this->Flash->success(__('The content has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The content could not be saved. Please, try again.'));
        }
        $this->set(compact('content'));
        $this->set('_serialize', ['content']);
        $this->set('categories',$this->Categories->find('list'));
        $this->set('families',$this->Botanicalfamilies->find('list'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $content = $this->Contents->get($id);
        if ($this->Contents->delete($content)) {
            $this->Flash->success(__('The content has been deleted.'));
        } else {
            $this->Flash->error(__('The content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
