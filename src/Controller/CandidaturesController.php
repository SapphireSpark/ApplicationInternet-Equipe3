<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Candidatures Controller
 *
 * @property \App\Model\Table\CandidaturesTable $Candidatures
 *
 * @method \App\Model\Entity\Candidature[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CandidaturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offers', 'Users']
        ];
        $candidatures = $this->paginate($this->Candidatures);

        $this->set(compact('candidatures'));
    }

    /**
     * View method
     *
     * @param string|null $id Candidature id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $candidature = $this->Candidatures->get($id, [
            'contain' => ['Offers', 'Users']
        ]);

        $this->set('candidature', $candidature);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $candidature = $this->Candidatures->newEntity();
        if ($this->request->is('post')) {
            $candidature = $this->Candidatures->patchEntity($candidature, $this->request->getData());
            if ($this->Candidatures->save($candidature)) {
                $this->Flash->success(__('The candidature has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The candidature could not be saved. Please, try again.'));
        }
        $offers = $this->Candidatures->Offers->find('list', ['limit' => 200]);
        $users = $this->Candidatures->Users->find('list', ['limit' => 200]);
        $this->set(compact('candidature', 'offers', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Candidature id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $candidature = $this->Candidatures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $candidature = $this->Candidatures->patchEntity($candidature, $this->request->getData());
            if ($this->Candidatures->save($candidature)) {
                $this->Flash->success(__('The candidature has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The candidature could not be saved. Please, try again.'));
        }
        $offers = $this->Candidatures->Offers->find('list', ['limit' => 200]);
        $users = $this->Candidatures->Users->find('list', ['limit' => 200]);
        $this->set(compact('candidature', 'offers', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Candidature id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $candidature = $this->Candidatures->get($id);
        if ($this->Candidatures->delete($candidature)) {
            $this->Flash->success(__('The candidature has been deleted.'));
        } else {
            $this->Flash->error(__('The candidature could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
