<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Dialpattern Controller
 *
 * @property \App\Model\Table\DialpatternTable $Dialpattern
 *
 * @method \App\Model\Entity\Dialpattern[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DialpatternController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

     public function beforeFilter(Event $event){
       $this->Auth->allow(['controller'=>'dialpattern','action' => 'index']);
     }

    public function index()
    {
        $this->paginate = [
          'limit'=>'5'
        ];
        //$this->set(compact('dirlist'));
        $dialpattern = $this->paginate($this->Dialpattern->find('all'));
        $this->set('dialpattern', $dialpattern);
    }

    public function search(){
      $search = $this->request->getQuery('q');
      $this->paginate = [
        'limit'=>'10'
      ];


      $dialpattern = $this->paginate($this->Dialpattern->find()->where(['Or'=>['country like'=>'%'.$search.'%',
                                                                              'dialing_code like'=>'%'.$search.'%',
                                                                              'mobile_pattern like'=>'%'.$search.'%',
                                                                              'landline_pattern like'=>'%'.$search.'%']]));
      $this->set('dialpattern', $dialpattern);

    }

    /**
     * View method
     *
     * @param string|null $id Dialpattern id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dialpattern = $this->Dialpattern->get($id, [
            'contain' => [],
        ]);

        $this->set('dialpattern', $dialpattern);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dialpattern = $this->Dialpattern->newEntity();
        if ($this->request->is('post')) {
            $dialpattern = $this->Dialpattern->patchEntity($dialpattern, $this->request->getData());
            if ($this->Dialpattern->save($dialpattern)) {
                //$this->Flash->success(__('The dialpattern has been saved.'));
                $this->Flash->flash('The dial pattern has been saved.',[
                  'params' => [
                  'type' => 'success'
                  ]
                ]);
                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The dial pattern could not be saved. Please, try again.'));
            $this->Flash->flash('The dial pattern could not be saved. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }
        $this->set(compact('dialpattern'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dialpattern id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dialpattern = $this->Dialpattern->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dialpattern = $this->Dialpattern->patchEntity($dialpattern, $this->request->getData());
            if ($this->Dialpattern->save($dialpattern)) {
                //$this->Flash->success(__('The dialpattern has been saved.'));
                $this->Flash->flash('The dial pattern has been saved.',[
                  'params' => [
                  'type' => 'success'
                  ]
                ]);
                return $this->redirect(['action' => 'index']);
            }
            //$this->Flash->error(__('The dialpattern could not be saved. Please, try again.'));
            $this->Flash->flash('The dial pattern could not be saved. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }
        $this->set(compact('dialpattern'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dialpattern id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dialpattern = $this->Dialpattern->get($id);
        if ($this->Dialpattern->delete($dialpattern)) {
            //$this->Flash->success(__('The dialpattern has been deleted.'));
            $this->Flash->flash('The dial pattern has been saved.',[
              'params' => [
              'type' => 'success'
              ]
            ]);
        } else {
            //$this->Flash->error(__('The dialpattern could not be deleted. Please, try again.'));
            $this->Flash->flash('The dial pattern could not be deleted. Please, try again.',[
              'params' => [
              'type' => 'warning'
              ]
            ]);
        }

        return $this->redirect(['action' => 'index']);
    }
}
