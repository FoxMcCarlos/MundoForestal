<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Covers Controller
 *
 * @property \App\Model\Table\CoversTable $Covers
 *
 * @method \App\Model\Entity\Cover[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoversController extends AppController
{
  public function initialize()
  {
    $this->loadComponent('Flash');
    $this->loadModel('Albums');
}
    /**
     * Index method
     *
    * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $covers = $this->paginate($this->Covers->find('all',  array('contain' =>  'Albums')));

        $this->set(compact('covers'));
        $this->set('_serialize', ['covers']);
    }

    /**
     * View method
     *
     * @param string|null $id Cover id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      $cover = $this->Covers->get($id, [
          'contain' => ['Albums']
      ]);

        $this->set('cover', $cover);
        $this->set('_serialize', ['cover']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cover = $this->Covers->newEntity();
        if ($this->request->is('post')) {
            $target_dir = "../webroot/img/";
            $target_file = $target_dir.basename($_FILES["files"]["name"]);
            move_uploaded_file($_FILES["files"]["tmp_name"],$target_file);
            $cover = $this->Covers->patchEntity($cover, $this->request->getData());
            if ($this->Covers->save($cover)) {
                $this->Flash->success(__('The cover has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cover could not be saved. Please, try again.'));
        }
        $this->set(compact('cover'));
        $this->set('_serialize', ['cover']);
        $this->set('albums',$this->Albums->find('list'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cover id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cover = $this->Covers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $temp = $_FILES["files"]["tmp_name"];
            $target_dir = "../webroot/img/";
            $target_file = $target_dir.basename($_FILES["files"]["name"]);
 	          move_uploaded_file($temp,$target_file);

            $cover = $this->Covers->patchEntity($cover, $this->request->getData());
            if ($this->Covers->save($cover)) {
                $this->Flash->success(__('The cover has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cover could not be saved. Please, try again.'));
        }
        $this->set(compact('cover'));
        $this->set('_serialize', ['cover']);
        $this->set('albums',$this->Albums->find('list'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cover id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cover = $this->Covers->get($id);
        if ($this->Covers->delete($cover)) {
            $this->Flash->success(__('The cover has been deleted.'));
        } else {
            $this->Flash->error(__('The cover could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
