<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MilieuxStages Controller
 *
 *
 * @method \App\Model\Entity\MilieuxStage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MilieuxStagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $milieuxStages = $this->paginate($this->MilieuxStages);

        $this->set(compact('milieuxStages'));
    }

    /**
     * View method
     *
     * @param string|null $id Milieux Stage id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $milieuxStage = $this->MilieuxStages->get($id, [
            'contain' => []
        ]);

        $this->set('milieuxStage', $milieuxStage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $milieuxStage = $this->MilieuxStages->newEntity();
        if ($this->request->is('post')) {
            $milieuxStage = $this->MilieuxStages->patchEntity($milieuxStage, $this->request->getData());
            if ($this->MilieuxStages->save($milieuxStage)) {
                $this->Flash->success(__('The milieux stage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The milieux stage could not be saved. Please, try again.'));
        }
        $this->set(compact('milieuxStage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Milieux Stage id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $milieuxStage = $this->MilieuxStages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $milieuxStage = $this->MilieuxStages->patchEntity($milieuxStage, $this->request->getData());
            if ($this->MilieuxStages->save($milieuxStage)) {
                $this->Flash->success(__('The milieux stage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The milieux stage could not be saved. Please, try again.'));
        }
        $this->set(compact('milieuxStage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Milieux Stage id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $milieuxStage = $this->MilieuxStages->get($id);
        if ($this->MilieuxStages->delete($milieuxStage)) {
            $this->Flash->success(__('The milieux stage has been deleted.'));
        } else {
            $this->Flash->error(__('The milieux stage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
