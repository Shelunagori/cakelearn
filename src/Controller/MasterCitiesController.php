<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MasterCities Controller
 *
 * @property \App\Model\Table\MasterCitiesTable $MasterCities
 *
 * @method \App\Model\Entity\MasterCity[] paginate($object = null, array $settings = [])
 */
class MasterCitiesController extends AppController
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
			$masterCities = $this->MasterCities->get($id, [
            'contain' => ['MasterStates']
			]);
		}else{
			$masterCities = $this->MasterCities->newEntity();
		}
        if ($this->request->is(['patch', 'post', 'put'])) {
            $masterCities = $this->MasterCities->patchEntity($masterCities, $this->request->data);
            if ($this->MasterCities->save($masterCities)) {
                $this->Flash->success(__('The city has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The city could not be saved. Please, try again.'));
            }
        }
			
		$cities = $this->MasterCities->find()->where(['MasterCities.is_deleted ='=>0])->contain(['MasterStates']);
		
		$states = $this->MasterCities->MasterStates->find('list')->where(['MasterStates.is_delete ='=>0]);		
        //pr($states->toArray()); exit;
		$this->set(compact('masterCities','states','cities'));
        $this->set('_serialize', ['masterCities']);		

    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $id = $this->MasterCities->get($id);
		$this->request->data['is_deleted']=1;	
         if ($this->request->is(['patch', 'post', 'put'])) {
            $Cities = $this->MasterCities->patchEntity($id, $this->request->data);
           
			if ($this->MasterCities->save($Cities)) {
                $this->Flash->error(__('Data has been Deleted'));
                return $this->redirect(['action' => 'index']);
            } 
        }
    }
}
