<?php

namespace App\Admin\Http\Controllers\Employee;

use App\Admin\Http\Controllers\Controller;
use App\Admin\Http\Requests\Employee\EmployeeRequest;
use App\Admin\Repositories\Employee\EmployeeRepositoryInterface;
use App\Admin\Services\Employee\EmployeeServiceInterface;
use App\Admin\DataTables\Employee\EmployeeDataTable;
use App\Enums\Gender;
use App\Enums\Employee\EmployeeRole;

class EmployeeController extends Controller
{
    public function __construct(
        EmployeeRepositoryInterface $repository,
        EmployeeServiceInterface $service
    ){

        parent::__construct();

        $this->repository = $repository;
        $this->service = $service;
    }

    public function getView(){
        return [
            'index' => 'admin.employee.index',
            'create' => 'admin.employee.create',
            'edit' => 'admin.employee.edit'
        ];
    }

    public function getRoute(){
        return [
            'index' => 'admin.employee.index',
            'create' => 'admin.employee.create',
            'edit' => 'admin.employee.edit',
            'delete' => 'admin.employee.delete'
        ];
    }
    public function index(EmployeeDataTable $dataTable){
        return $dataTable->render($this->view['index'], [
            'breadcrums' => $this->crums->add(__('employee'))
        ]);
    }

    public function create(){
        return view($this->view['create'], [
            'gender' => Gender::asSelectArray(),
            'roles' => EmployeeRole::asSelectArray(),
            'breadcrums' => $this->crums->add(__('employee'), route($this->route['index']))->add(__('add'))

        ]);
    }

    public function store(EmployeeRequest $request){
//        dd(123);
        $response = $this->service->store($request);

        if($response){
            return $request->input('submitter') == 'save'
                    ? to_route($this->route['edit'], $response->id)->with('success', __('notifySuccess'))
                    : to_route($this->route['index'])->with('success', __('notifySuccess'));
        }

        return back()->with('error', __('notifyFail'))->withInput();
    }

    /**
     * @throws \Exception
     */
    public function edit($id){

        $instance = $this->repository->findOrFail($id);
        return view(
            $this->view['edit'],
            [
                'employee' => $instance,
                'gender' => Gender::asSelectArray(),
                'roles' => EmployeeRole::asSelectArray(),
                'breadcrums' => $this->crums->add(__('employee'), route($this->route['index']))->add(__('edit'))
            ],
        );
    }

    public function update(EmployeeRequest $request)
    {
        $this->data = $request->validated();
        // Update the other fields in the employee record
        if(isset($this->data['password']) && $this->data['password']) {
            $this->data['password'] = bcrypt($this->data['password']);
        } else {
            unset($this->data['password']);
        }
        // Pass the entire validated data to the repository for update
        return $this->repository->update($this->data['id'], $this->data);
    }


    public function delete($id){

        $this->service->delete($id);

        return to_route($this->route['index'])->with('success', __('notifySuccess'));
    }
}
