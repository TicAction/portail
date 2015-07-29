<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HomeworksForms Controller
 *
 * @property \App\Model\Table\HomeworksFormsTable $HomeworksForms
 */
class HomeworksFormsController extends AppController
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
        $this->set('homeworksForms', $this->paginate($this->HomeworksForms));
        $this->set('_serialize', ['homeworksForms']);
    }

    /**
     * View method
     *
     * @param string|null $id Homeworks Form id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homeworksForm = $this->HomeworksForms->get($id, [
            'contain' => ['Teachers']
        ]);
        $this->set('homeworksForm', $homeworksForm);
        $this->set('_serialize', ['homeworksForm']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homeworksForm = $this->HomeworksForms->newEntity();
        if ($this->request->is('post')) {
            $homeworksForm = $this->HomeworksForms->patchEntity($homeworksForm, $this->request->data);
            if ($this->HomeworksForms->save($homeworksForm)) {
                $this->Flash->success(__('The homeworks form has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The homeworks form could not be saved. Please, try again.'));
            }
        }
        $teachers = $this->HomeworksForms->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('homeworksForm', 'teachers'));
        $this->set('_serialize', ['homeworksForm']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Homeworks Form id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeworksForm = $this->HomeworksForms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeworksForm = $this->HomeworksForms->patchEntity($homeworksForm, $this->request->data);
            if ($this->HomeworksForms->save($homeworksForm)) {
                $this->Flash->success(__('The homeworks form has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The homeworks form could not be saved. Please, try again.'));
            }
        }
        $teachers = $this->HomeworksForms->Teachers->find('list', ['limit' => 200]);
        $this->set(compact('homeworksForm', 'teachers'));
        $this->set('_serialize', ['homeworksForm']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Homeworks Form id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homeworksForm = $this->HomeworksForms->get($id);
        if ($this->HomeworksForms->delete($homeworksForm)) {
            $this->Flash->success(__('The homeworks form has been deleted.'));
        } else {
            $this->Flash->error(__('The homeworks form could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
