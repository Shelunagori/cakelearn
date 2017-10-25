<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GoldCalculators Controller
 *
 * @property \App\Model\Table\GoldCalculatorsTable $GoldCalculators
 *
 * @method \App\Model\Entity\GoldCalculator[] paginate($object = null, array $settings = [])
 */
class GoldCalculatorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States', 'Cities', 'Carats']
        ];
        $goldCalculators = $this->paginate($this->GoldCalculators);

        $this->set(compact('goldCalculators'));
        $this->set('_serialize', ['goldCalculators']);
    }

    /**
     * View method
     *
     * @param string|null $id Gold Calculator id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $goldCalculator = $this->GoldCalculators->get($id, [
            'contain' => ['States', 'Cities', 'Carats']
        ]);

        $this->set('goldCalculator', $goldCalculator);
        $this->set('_serialize', ['goldCalculator']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $goldCalculator = $this->GoldCalculators->newEntity();
        if ($this->request->is('post')) {
            $goldCalculator = $this->GoldCalculators->patchEntity($goldCalculator, $this->request->getData());
            if ($this->GoldCalculators->save($goldCalculator)) {
                $this->Flash->success(__('The gold calculator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gold calculator could not be saved. Please, try again.'));
        }
        $states = $this->GoldCalculators->States->find('list', ['limit' => 200]);
        $cities = $this->GoldCalculators->Cities->find('list', ['limit' => 200]);
        $carats = $this->GoldCalculators->Carats->find('list', ['limit' => 200]);
        $this->set(compact('goldCalculator', 'states', 'cities', 'carats'));
        $this->set('_serialize', ['goldCalculator']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gold Calculator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $goldCalculator = $this->GoldCalculators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $goldCalculator = $this->GoldCalculators->patchEntity($goldCalculator, $this->request->getData());
            if ($this->GoldCalculators->save($goldCalculator)) {
                $this->Flash->success(__('The gold calculator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gold calculator could not be saved. Please, try again.'));
        }
        $states = $this->GoldCalculators->States->find('list', ['limit' => 200]);
        $cities = $this->GoldCalculators->Cities->find('list', ['limit' => 200]);
        $carats = $this->GoldCalculators->Carats->find('list', ['limit' => 200]);
        $this->set(compact('goldCalculator', 'states', 'cities', 'carats'));
        $this->set('_serialize', ['goldCalculator']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gold Calculator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $goldCalculator = $this->GoldCalculators->get($id);
        if ($this->GoldCalculators->delete($goldCalculator)) {
            $this->Flash->success(__('The gold calculator has been deleted.'));
        } else {
            $this->Flash->error(__('The gold calculator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
