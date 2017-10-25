<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MasterUsers Controller
 *
 * @property \App\Model\Table\MasterUsersTable $MasterUsers
 *
 * @method \App\Model\Entity\MasterUser[] paginate($object = null, array $settings = [])
 */
class MasterUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $masterUsers = $this->paginate($this->MasterUsers);

        $this->set(compact('masterUsers'));
        $this->set('_serialize', ['masterUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Master User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $masterUser = $this->MasterUsers->get($id, [
            'contain' => ['CashBackDetails', 'CheckInDetails', 'PurchaseDetails']
        ]);

        $this->set('masterUser', $masterUser);
        $this->set('_serialize', ['masterUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $masterUser = $this->MasterUsers->newEntity();
        if ($this->request->is('post')) {
            $masterUser = $this->MasterUsers->patchEntity($masterUser, $this->request->getData());
			
            if ($this->MasterUsers->save($masterUser)) {
                $this->Flash->success(__('The master user has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The master user could not be saved. Please, try again.'));
        }
        $this->set(compact('masterUser'));
        $this->set('_serialize', ['masterUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Master User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $masterUser = $this->MasterUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $masterUser = $this->MasterUsers->patchEntity($masterUser, $this->request->getData());
            if ($this->MasterUsers->save($masterUser)) {
                $this->Flash->success(__('The master user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The master user could not be saved. Please, try again.'));
        }
        $this->set(compact('masterUser'));
        $this->set('_serialize', ['masterUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Master User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $masterUser = $this->MasterUsers->get($id);
		$query->update()
			->set(['is_deleted' => 1])
			->where(['id' => $id])
			->execute();
        if ($this->MasterUsers->delete($masterUser)) {
            $this->Flash->success(__('The master user has been deleted.'));
        } else {
            $this->Flash->error(__('The master user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
