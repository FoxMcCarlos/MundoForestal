<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Scientificnames Controller
 *
 * @property \App\Model\Table\ScientificnamesTable $Scientificnames
 *
 * @method \App\Model\Entity\Scientificname[] paginate($object = null, array $settings = [])
 */
class ScientificnamesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $scientificnames = $this->paginate($this->Scientificnames);

        $this->set(compact('scientificnames'));
        $this->set('_serialize', ['scientificnames']);
    }

    /**
     * View method
     *
     * @param string|null $id Scientificname id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scientificname = $this->Scientificnames->get($id, [
            'contain' => []
        ]);

        $this->set('scientificname', $scientificname);
        $this->set('_serialize', ['scientificname']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scientificname = $this->Scientificnames->newEntity();
        if ($this->request->is('post')) {
            $scientificname = $this->Scientificnames->patchEntity($scientificname, $this->request->getData());
            if ($this->Scientificnames->save($scientificname)) {
                $this->Flash->success(__('The scientificname has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scientificname could not be saved. Please, try again.'));
        }
        $this->set(compact('scientificname'));
        $this->set('_serialize', ['scientificname']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Scientificname id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scientificname = $this->Scientificnames->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scientificname = $this->Scientificnames->patchEntity($scientificname, $this->request->getData());
            if ($this->Scientificnames->save($scientificname)) {
                $this->Flash->success(__('The scientificname has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scientificname could not be saved. Please, try again.'));
        }
        $this->set(compact('scientificname'));
        $this->set('_serialize', ['scientificname']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Scientificname id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $scientificname = $this->Scientificnames->get($id);
        if ($this->Scientificnames->delete($scientificname)) {
            $this->Flash->success(__('The scientificname has been deleted.'));
        } else {
            $this->Flash->error(__('The scientificname could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
