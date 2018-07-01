<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Botanicalfamilies Controller
 *
 * @property \App\Model\Table\BotanicalfamiliesTable $Botanicalfamilies
 *
 * @method \App\Model\Entity\Botanicalfamily[] paginate($object = null, array $settings = [])
 */
class BotanicalfamiliesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $botanicalfamilies = $this->paginate($this->Botanicalfamilies);

        $this->set(compact('botanicalfamilies'));
        $this->set('_serialize', ['botanicalfamilies']);
    }

    /**
     * View method
     *
     * @param string|null $id Botanicalfamily id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $botanicalfamily = $this->Botanicalfamilies->get($id, [
            'contain' => []
        ]);

        $this->set('botanicalfamily', $botanicalfamily);
        $this->set('_serialize', ['botanicalfamily']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $botanicalfamily = $this->Botanicalfamilies->newEntity();
        if ($this->request->is('post')) {
            $botanicalfamily = $this->Botanicalfamilies->patchEntity($botanicalfamily, $this->request->getData());
            if ($this->Botanicalfamilies->save($botanicalfamily)) {
                $this->Flash->success(__('The botanicalfamily has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The botanicalfamily could not be saved. Please, try again.'));
        }
        $this->set(compact('botanicalfamily'));
        $this->set('_serialize', ['botanicalfamily']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Botanicalfamily id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $botanicalfamily = $this->Botanicalfamilies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $botanicalfamily = $this->Botanicalfamilies->patchEntity($botanicalfamily, $this->request->getData());
            if ($this->Botanicalfamilies->save($botanicalfamily)) {
                $this->Flash->success(__('The botanicalfamily has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The botanicalfamily could not be saved. Please, try again.'));
        }
        $this->set(compact('botanicalfamily'));
        $this->set('_serialize', ['botanicalfamily']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Botanicalfamily id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $botanicalfamily = $this->Botanicalfamilies->get($id);
        if ($this->Botanicalfamilies->delete($botanicalfamily)) {
            $this->Flash->success(__('The botanicalfamily has been deleted.'));
        } else {
            $this->Flash->error(__('The botanicalfamily could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
