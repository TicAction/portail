<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('register');
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user['role'] =="Role_Admin") {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl(['controller'=>"Pages",'action'=>'homepage']));
            }elseif ($user['role'] =="Role_Teacher") {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl(['controller'=>"Pages",'action'=>'homepage']));
            } elseif ($user) {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl(['controller'=>"Pages",'action'=>'index']));
            }else {
                $this->Flash->error(
                    __("Nom d'utilisateur ou mot de passe incorrect"),
                    'default',
                    [],
                    'auth'
                );
            }
        }

    }

    public function register()
    {

        $user = $this->Users->newEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);

            if ($this->Users->save($user)) {
                $this->Flash->success(__("L'utilisateur a été sauvegardé."));
                return $this->redirect(['controller'=>'Pages','action' => 'index']);
            }
            $this->Flash->error(__("Impossible d'ajouter l'utilisateur."));
        }
        $this->set('user', $user);
    }




    public function logout()
    {
        $this->Auth->logout;
        $this->redirect(['controller'=>'Pages','action'=>'homepage']);
    }

}
