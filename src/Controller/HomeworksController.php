<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Homeworks Controller
 *
 * @property \App\Model\Table\HomeworksTable $Homeworks
 */
class HomeworksController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teachers']
        ];
        $this->set('homeworks', $this->paginate($this->Homeworks));
        $this->set('_serialize', ['homeworks']);
    }

    /**
     * View method
     *
     * @param string|null $id Homework id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homework = $this->Homeworks->get($id, [
            'contain' => ['Teachers']
        ]);
        $this->set('homework', $homework);
        $this->set('_serialize', ['homework']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homework = $this->Homeworks->newEntity();
        if ($this->request->is('post')) {
            $homework = $this->Homeworks->patchEntity($homework, $this->request->data);
            if ($this->Homeworks->save($homework)) {
                $this->Flash->success(__('The homework has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The homework could not be saved. Please, try again.'));
            }
        }
        $teachers = $this->Homeworks->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('homework', 'teachers'));
        $this->set('_serialize', ['homework']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Homework id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homework = $this->Homeworks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homework = $this->Homeworks->patchEntity($homework, $this->request->data);
            if ($this->Homeworks->save($homework)) {
                $this->Flash->success(__('The homework has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The homework could not be saved. Please, try again.'));
            }
        }
        $teachers = $this->Homeworks->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('homework', 'teachers'));
        $this->set('_serialize', ['homework']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Homework id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homework = $this->Homeworks->get($id);
        if ($this->Homeworks->delete($homework)) {
            $this->Flash->success(__('The homework has been deleted.'));
        } else {
            $this->Flash->error(__('The homework could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
