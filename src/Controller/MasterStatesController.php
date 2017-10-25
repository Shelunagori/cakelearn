<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MasterStates Controller
 *
 * @property \App\Model\Table\MasterStatesTable $MasterStates
 *
 * @method \App\Model\Entity\MasterState[] paginate($object = null, array $settings = [])
 */
class MasterStatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($id = null)
    {
		$this->viewBuilder()->layout('index_layout');
		
		if($id){ 
			$MasterStates = $this->MasterStates->get($id, [
            'contain' => []
			]);
		}else{
			 $MasterStates = $this->MasterStates->newEntity();
		} 
        if ($this->request->is(['patch', 'post', 'put'])) {
            $MasterStates = $this->MasterStates->patchEntity($MasterStates, $this->request->data); 
			if ($this->MasterStates->save($MasterStates)) {
				$this->Flash->success(__('The State has been saved.')); 
                return $this->redirect(['action' => 'index']);
			} else {
				$this->Flash->error(__('The State could not be saved. Please, try again.'));
			}
        }
		$state_shows = $this->MasterStates->find()->where(['MasterStates.is_delete ='=>0]); 
        $this->set(compact('MasterStates','state_shows'));
        $this->set('_serialize', ['MasterStates']);		
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $state = $this->MasterStates->get($id);
		$this->request->data['is_delete']=1;	
         if ($this->request->is(['patch', 'post', 'put'])) {
            $state = $this->MasterStates->patchEntity($state, $this->request->data);
            if ($this->MasterStates->save($state)) {
                $this->Flash->error(__('States has been Deleted'));
                return $this->redirect(['action' => 'index']);
            } 
        }
    }
	
}
