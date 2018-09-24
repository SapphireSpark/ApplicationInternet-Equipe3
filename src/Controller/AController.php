<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * A Controller
 *
 *
 * @method \App\Model\Entity\A[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $a = $this->paginate($this->A);

        $this->set(compact('a'));
    }

    /**
     * View method
     *
     * @param string|null $id A id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $a = $this->A->get($id, [
            'contain' => []
        ]);

        $this->set('a', $a);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $a = $this->A->newEntity();
        if ($this->request->is('post')) {
            $a = $this->A->patchEntity($a, $this->request->getData());
            if ($this->A->save($a)) {
                $this->Flash->success(__('The a has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The a could not be saved. Please, try again.'));
        }
        $this->set(compact('a'));
    }

    /**
     * Edit method
     *
     * @param string|null $id A id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $a = $this->A->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $a = $this->A->patchEntity($a, $this->request->getData());
            if ($this->A->save($a)) {
                $this->Flash->success(__('The a has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The a could not be saved. Please, try again.'));
        }
        $this->set(compact('a'));
    }

    /**
     * Delete method
     *
     * @param string|null $id A id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $a = $this->A->get($id);
        if ($this->A->delete($a)) {
            $this->Flash->success(__('The a has been deleted.'));
        } else {
            $this->Flash->error(__('The a could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
