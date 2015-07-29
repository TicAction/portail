<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Behaviors Controller
 *
 * @property \App\Model\Table\BehaviorsTable $Behaviors
 */
class BehaviorsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Kids']
        ];
        $this->set('behaviors', $this->paginate($this->Behaviors));
        $this->set('_serialize', ['behaviors']);
    }

    /**
     * View method
     *
     * @param string|null $id Behavior id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $behavior = $this->Behaviors->get($id, [
            'contain' => ['Kids']
        ]);
        $this->set('behavior', $behavior);
        $this->set('_serialize', ['behavior']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $behavior = $this->Behaviors->newEntity();
        if ($this->request->is('post')) {
            $behavior = $this->Behaviors->patchEntity($behavior, $this->request->data);
            if ($this->Behaviors->save($behavior)) {
                $this->Flash->success(__('The behavior has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The behavior could not be saved. Please, try again.'));
            }
        }
        $kids = $this->Behaviors->Kids->find('list', ['limit' => 200]);
        $this->set(compact('behavior', 'kids'));
        $this->set('_serialize', ['behavior']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Behavior id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $behavior = $this->Behaviors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $behavior = $this->Behaviors->patchEntity($behavior, $this->request->data);
            if ($this->Behaviors->save($behavior)) {
                $this->Flash->success(__('The behavior has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The behavior could not be saved. Please, try again.'));
            }
        }
        $kids = $this->Behaviors->Kids->find('list', ['limit' => 200]);
        $this->set(compact('behavior', 'kids'));
        $this->set('_serialize', ['behavior']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Behavior id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $behavior = $this->Behaviors->get($id);
        if ($this->Behaviors->delete($behavior)) {
            $this->Flash->success(__('The behavior has been deleted.'));
        } else {
            $this->Flash->error(__('The behavior could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
