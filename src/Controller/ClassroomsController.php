<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Classrooms Controller
 *
 * @property \App\Model\Table\ClassroomsTable $Classrooms
 */
class ClassroomsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Teachers', 'Kids']
        ];
        $this->set('classrooms', $this->paginate($this->Classrooms));
        $this->set('_serialize', ['classrooms']);
    }

    /**
     * View method
     *
     * @param string|null $id Classroom id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classroom = $this->Classrooms->get($id, [
            'contain' => ['Teachers', 'Kids']
        ]);
        $this->set('classroom', $classroom);
        $this->set('_serialize', ['classroom']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classroom = $this->Classrooms->newEntity();
        if ($this->request->is('post')) {
            $classroom = $this->Classrooms->patchEntity($classroom, $this->request->data);
            if ($this->Classrooms->save($classroom)) {
                $this->Flash->success(__('The classroom has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The classroom could not be saved. Please, try again.'));
            }
        }
        $teachers = $this->Classrooms->Teachers->find('list', ['limit' => 200]);
        $kids = $this->Classrooms->Kids->find('list', ['limit' => 200]);
        $this->set(compact('classroom', 'teachers', 'kids'));
        $this->set('_serialize', ['classroom']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Classroom id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classroom = $this->Classrooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classroom = $this->Classrooms->patchEntity($classroom, $this->request->data);
            if ($this->Classrooms->save($classroom)) {
                $this->Flash->success(__('The classroom has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The classroom could not be saved. Please, try again.'));
            }
        }
        $teachers = $this->Classrooms->Teachers->find('list', ['limit' => 200]);
        $kids = $this->Classrooms->Kids->find('list', ['limit' => 200]);
        $this->set(compact('classroom', 'teachers', 'kids'));
        $this->set('_serialize', ['classroom']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Classroom id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classroom = $this->Classrooms->get($id);
        if ($this->Classrooms->delete($classroom)) {
            $this->Flash->success(__('The classroom has been deleted.'));
        } else {
            $this->Flash->error(__('The classroom could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
