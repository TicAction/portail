<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StudentsUsers Controller
 *
 * @property \App\Model\Table\StudentsUsersTable $StudentsUsers
 */
class StudentsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'Users']
        ];
        $this->set('studentsUsers', $this->paginate($this->StudentsUsers));
        $this->set('_serialize', ['studentsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Students User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studentsUser = $this->StudentsUsers->get($id, [
            'contain' => ['Students', 'Users']
        ]);
        $this->set('studentsUser', $studentsUser);
        $this->set('_serialize', ['studentsUser']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studentsUser = $this->StudentsUsers->newEntity();
        if ($this->request->is('post')) {
            $studentsUser = $this->StudentsUsers->patchEntity($studentsUser, $this->request->data);
            if ($this->StudentsUsers->save($studentsUser)) {
                $this->Flash->success(__('The students user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The students user could not be saved. Please, try again.'));
            }
        }
        $students = $this->StudentsUsers->Students->find('list', ['limit' => 200]);
        $users = $this->StudentsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('studentsUser', 'students', 'users'));
        $this->set('_serialize', ['studentsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Students User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studentsUser = $this->StudentsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studentsUser = $this->StudentsUsers->patchEntity($studentsUser, $this->request->data);
            if ($this->StudentsUsers->save($studentsUser)) {
                $this->Flash->success(__('The students user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The students user could not be saved. Please, try again.'));
            }
        }
        $students = $this->StudentsUsers->Students->find('list', ['limit' => 200]);
        $users = $this->StudentsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('studentsUser', 'students', 'users'));
        $this->set('_serialize', ['studentsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Students User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studentsUser = $this->StudentsUsers->get($id);
        if ($this->StudentsUsers->delete($studentsUser)) {
            $this->Flash->success(__('The students user has been deleted.'));
        } else {
            $this->Flash->error(__('The students user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
