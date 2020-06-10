<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GroupList Controller
 *
 * @property \App\Model\Table\GroupListTable $GroupList
 *
 * @method \App\Model\Entity\GroupList[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GroupListController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $groupList = $this->paginate($this->GroupList);

        $this->set(compact('groupList'));
    }

    /**
     * View method
     *
     * @param string|null $id Group List id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $groupList = $this->GroupList->get($id, [
            'contain' => [],
        ]);

        $this->set('groupList', $groupList);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $groupList = $this->GroupList->newEntity();
        if ($this->request->is('post')) {
            $groupList = $this->GroupList->patchEntity($groupList, $this->request->getData());
            if ($this->GroupList->save($groupList)) {
                $this->Flash->success(__('The group list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The group list could not be saved. Please, try again.'));
        }
        $this->set(compact('groupList'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Group List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $groupList = $this->GroupList->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $groupList = $this->GroupList->patchEntity($groupList, $this->request->getData());
            if ($this->GroupList->save($groupList)) {
                $this->Flash->success(__('The group list has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The group list could not be saved. Please, try again.'));
        }
        $this->set(compact('groupList'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Group List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $groupList = $this->GroupList->get($id);
        if ($this->GroupList->delete($groupList)) {
            $this->Flash->success(__('The group list has been deleted.'));
        } else {
            $this->Flash->error(__('The group list could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
