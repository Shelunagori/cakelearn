<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use Cake\View\View;

/**
 * MasterStores Controller
 *
 * @property \App\Model\Table\MasterStoresTable $MasterStores
 *
 * @method \App\Model\Entity\MasterStore[] paginate($object = null, array $settings = [])
 */
class MasterStoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Vendors']
        ];
        $masterStores = $this->paginate($this->MasterStores);

        $this->set(compact('masterStores'));
        $this->set('_serialize', ['masterStores']);
    }

    /**
     * View method
     *
     * @param string|null $id Master Store id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $masterStore = $this->MasterStores->get($id, [
            'contain' => ['Vendors', 'PurchaseDetails']
        ]);

        $this->set('masterStore', $masterStore);
        $this->set('_serialize', ['masterStore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $masterStore = $this->MasterStores->newEntity();
        if ($this->request->is('post')) {
			
			$files=$this->request->data['logo'];
			$ext=explode('/',$files['type']);
			$this->request->data['logo']='Logo'.time().'.'.$ext[1];			
			
            $masterStore = $this->MasterStores->patchEntity($masterStore, $this->request->getData());
            if ($store_data = $this->MasterStores->save($masterStore)) {
				
				$store_data_id=$store_data->id; 
				
				$dir = new Folder(WWW_ROOT . 'img/logos/'.$store_data_id, true, 0755);
				$file_path = str_replace("\\","/",WWW_ROOT).'img/logos/'.$store_data_id;
				
				move_uploaded_file($files['tmp_name'], $file_path.'/' . $this->request->data['logo']);				
				
				
                $this->Flash->success(__('The master store has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The master store could not be saved. Please, try again.'));
        }
        $vendors = $this->MasterStores->Vendors->find('list', ['limit' => 200]);
        $this->set(compact('masterStore', 'vendors'));
        $this->set('_serialize', ['masterStore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Master Store id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $masterStore = $this->MasterStores->get($id, [
            'contain' => []
        ]);
	
        if ($this->request->is(['patch', 'post', 'put'])) {
    
		    $files=$this->request->data['logo'];
			if(empty($files['error']))
			{
				$image_name='profile'.$id.'.jpg';
				$this->request->data['logo']=$image_name;			 
			}
			else
			{
				unset($this->request->data['logo']);
			}

			$masterStore = $this->MasterStores->patchEntity($masterStore, $this->request->getData());
            if ($this->MasterStores->save($masterStore)) {
				
				if(empty($files['error']))
				{
					$dir = new Folder(WWW_ROOT . 'img/logos/'.$id, true, 0755);
					$file_path = str_replace("\\","/",WWW_ROOT).'img/logos/'.$id;
					move_uploaded_file($files['tmp_name'], $file_path.'/' . $image_name);
				}				
				
                $this->Flash->success(__('The master store has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The master store could not be saved. Please, try again.'));
        }
        $vendors = $this->MasterStores->Vendors->find('list', ['limit' => 200]);
        $this->set(compact('masterStore', 'vendors'));
        $this->set('_serialize', ['masterStore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Master Store id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $masterStore = $this->MasterStores->get($id);
		$query->update()
			->set(['is_deleted' => 1])
			->where(['id' => $id])
			->execute();
        if ($this->MasterStores->delete($masterStore)) {
            $this->Flash->success(__('The master store has been deleted.'));
        } else {
            $this->Flash->error(__('The master store could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
