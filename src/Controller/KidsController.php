<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kids Controller
 *
 * @property \App\Model\Table\KidsTable $Kids
 */
class KidsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Guardians']
        ];
        $this->set('kids', $this->paginate($this->Kids));
        $this->set('_serialize', ['kids']);
    }

    /**
     * View method
     *
     * @param string|null $id Kid id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kid = $this->Kids->get($id, [
            'contain' => ['Guardians', 'Behaviors', 'Classrooms']
        ]);
        $this->set('kid', $kid);
        $this->set('_serialize', ['kid']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kid = $this->Kids->newEntity();
        if ($this->request->is('post')) {
            $kid = $this->Kids->patchEntity($kid, $this->request->data);
            if ($this->Kids->save($kid)) {
                $this->Flash->success(__('The kid has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kid could not be saved. Please, try again.'));
            }
        }
        $guardians = $this->Kids->Guardians->find('list', ['limit' => 200]);
        $this->set(compact('kid', 'guardians'));
        $this->set('_serialize', ['kid']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kid id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kid = $this->Kids->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kid = $this->Kids->patchEntity($kid, $this->request->data);
            if ($this->Kids->save($kid)) {
                $this->Flash->success(__('The kid has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kid could not be saved. Please, try again.'));
            }
        }
        $guardians = $this->Kids->Guardians->find('list', ['limit' => 200]);
        $this->set(compact('kid', 'guardians'));
        $this->set('_serialize', ['kid']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kid id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kid = $this->Kids->get($id);
        if ($this->Kids->delete($kid)) {
            $this->Flash->success(__('The kid has been deleted.'));
        } else {
            $this->Flash->error(__('The kid could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
