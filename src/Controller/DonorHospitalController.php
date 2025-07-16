<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DonorHospital Controller
 *
 * @property \App\Model\Table\DonorHospitalTable $DonorHospital
 */
class DonorHospitalController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DonorHospital->find();
        $donorHospital = $this->paginate($query);

        $this->set(compact('donorHospital'));
    }

    /**
     * View method
     *
     * @param string|null $id Donor Hospital id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donorHospital = $this->DonorHospital->get($id, contain: []);
        $this->set(compact('donorHospital'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $donorHospital = $this->DonorHospital->newEmptyEntity();
        if ($this->request->is('post')) {
            $donorHospital = $this->DonorHospital->patchEntity($donorHospital, $this->request->getData());
            if ($this->DonorHospital->save($donorHospital)) {
                $this->Flash->success(__('The donor hospital has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donor hospital could not be saved. Please, try again.'));
        }
        $this->set(compact('donorHospital'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Donor Hospital id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donorHospital = $this->DonorHospital->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donorHospital = $this->DonorHospital->patchEntity($donorHospital, $this->request->getData());
            if ($this->DonorHospital->save($donorHospital)) {
                $this->Flash->success(__('The donor hospital has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donor hospital could not be saved. Please, try again.'));
        }
        $this->set(compact('donorHospital'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Donor Hospital id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donorHospital = $this->DonorHospital->get($id);
        if ($this->DonorHospital->delete($donorHospital)) {
            $this->Flash->success(__('The donor hospital has been deleted.'));
        } else {
            $this->Flash->error(__('The donor hospital could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
