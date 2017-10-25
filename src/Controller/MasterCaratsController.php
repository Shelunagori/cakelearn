<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MasterCarats Controller
 *
 * @property \App\Model\Table\MasterCaratsTable $MasterCarats
 *
 * @method \App\Model\Entity\MasterCarat[] paginate($object = null, array $settings = [])
 */
class MasterCaratsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $masterCarats = $this->paginate($this->MasterCarats);

        $this->set(compact('masterCarats'));
        $this->set('_serialize', ['masterCarats']);
    }

    /**
     * View method
     *
     * @param string|null $id Master Carat id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $masterCarat = $this->MasterCarats->get($id, [
            'contain' => []
        ]);

        $this->set('masterCarat', $masterCarat);
        $this->set('_serialize', ['masterCarat']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $masterCarat = $this->MasterCarats->newEntity();
        if ($this->request->is('post')) {
            $masterCarat = $this->MasterCarats->patchEntity($masterCarat, $this->request->getData());
            if ($this->MasterCarats->save($masterCarat)) {
                $this->Flash->success(__('The master carat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The master carat could not be saved. Please, try again.'));
        }
        $this->set(compact('masterCarat'));
        $this->set('_serialize', ['masterCarat']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Master Carat id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $masterCarat = $this->MasterCarats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $masterCarat = $this->MasterCarats->patchEntity($masterCarat, $this->request->getData());
            if ($this->MasterCarats->save($masterCarat)) {
                $this->Flash->success(__('The master carat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The master carat could not be saved. Please, try again.'));
        }
        $this->set(compact('masterCarat'));
        $this->set('_serialize', ['masterCarat']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Master Carat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $masterCarat = $this->MasterCarats->get($id);
        if ($this->MasterCarats->delete($masterCarat)) {
            $this->Flash->success(__('The master carat has been deleted.'));
        } else {
            $this->Flash->error(__('The master carat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
