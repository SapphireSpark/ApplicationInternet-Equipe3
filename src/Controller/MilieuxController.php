<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Milieux Controller
 *
 * @property \App\Model\Table\MilieuxTable $Milieux
 *
 * @method \App\Model\Entity\Milieux[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MilieuxController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $milieux = $this->paginate($this->Milieux);

        $this->set(compact('milieux'));
    }

    /**
     * View method
     *
     * @param string|null $id Milieux id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $milieux = $this->Milieux->get($id, [
            'contain' => []
        ]);

        $this->set('milieux', $milieux);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $milieux = $this->Milieux->newEntity();
        if ($this->request->is('post')) {
            $milieux = $this->Milieux->patchEntity($milieux, $this->request->getData());
            if ($this->Milieux->save($milieux)) {
                $this->Flash->success(__('The milieux has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The milieux could not be saved. Please, try again.'));
        }
        $this->set(compact('milieux'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Milieux id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $milieux = $this->Milieux->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $milieux = $this->Milieux->patchEntity($milieux, $this->request->getData());
            if ($this->Milieux->save($milieux)) {
                $this->Flash->success(__('The milieux has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The milieux could not be saved. Please, try again.'));
        }
        $this->set(compact('milieux'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Milieux id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $milieux = $this->Milieux->get($id);
        if ($this->Milieux->delete($milieux)) {
            $this->Flash->success(__('The milieux has been deleted.'));
        } else {
            $this->Flash->error(__('The milieux could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
