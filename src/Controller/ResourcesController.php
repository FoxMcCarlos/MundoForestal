<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Resources Controller
 *
 * @property \App\Model\Table\ResourcesTable $Resources
 *
 * @method \App\Model\Entity\Resource[] paginate($object = null, array $settings = [])
 */
class ResourcesController extends AppController
{
  public function initialize()
  {
    $this->loadComponent('Flash');
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
        $resources = $this->paginate($this->Resources->find('all',  array('contain' =>  'Contents')));

        $this->set(compact('resources'));
        $this->set('_serialize', ['resources']);
    }

    /**
     * View method
     *
     * @param string|null $id Resource id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $resource = $this->Resources->get($id, [
            'contain' => ['Contents']
        ]);

        $this->set('resource', $resource);
        $this->set('_serialize', ['resource']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $resource = $this->Resources->newEntity();
        if ($this->request->is('post')) {
            $target_dir = "../webroot/img/";
            $target_file = $target_dir.basename($_FILES["files"]["name"]);
            move_uploaded_file($_FILES["files"]["tmp_name"],$target_file);
            $resource = $this->Resources->patchEntity($resource, $this->request->getData());
            if ($this->Resources->save($resource)) {
                $this->Flash->success(__('The resource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resource could not be saved. Please, try again.'));
        }
        $this->set(compact('resource'));
        $this->set('_serialize', ['resource']);
        $this->set('contents',$this->Contents->find('list'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Resource id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $resource = $this->Resources->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $temp = $_FILES["files"]["tmp_name"];
            $target_dir = "../webroot/img/";
            $target_file = $target_dir.basename($_FILES["files"]["name"]);
 	          move_uploaded_file($temp,$target_file);

            $resource = $this->Resources->patchEntity($resource, $this->request->getData());
            if ($this->Resources->save($resource)) {
                $this->Flash->success(__('The resource has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The resource could not be saved. Please, try again.'));
        }
        $this->set(compact('resource'));
        $this->set('_serialize', ['resource']);
        $this->set('contents',$this->Contents->find('list'));
    }




    /**
     * Delete method
     *
     * @param string|null $id Resource id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $resource = $this->Resources->get($id);
        if ($this->Resources->delete($resource)) {
            $this->Flash->success(__('The resource has been deleted.'));
        } else {
            $this->Flash->error(__('The resource could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
