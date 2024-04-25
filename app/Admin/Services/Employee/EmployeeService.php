<?php

namespace App\Admin\Services\Employee;

use App\Admin\Services\Employee\EmployeeServiceInterface;
use  App\Admin\Repositories\Employee\EmployeeRepositoryInterface;
use Illuminate\Http\Request;

class EmployeeService implements EmployeeServiceInterface
{
    /**
     * Current Object instance
     *
     * @var array
     */
    protected $data;

    protected $repository;

    public function __construct(EmployeeRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function store(Request $request){

        $this->data = $request->validated();
        $this->data['password'] = bcrypt($this->data['password']);

        return $this->repository->create($this->data);
    }

    public function update(Request $request)
    {
        $this->data = $request->validated();

        // Ensure that the role field is updated if it exists in the request
        if(isset($this->data['roles'])) {
            $employee = $this->repository->findOrFail($this->data['id']);
            $employee->roles = $this->data['roles'];
            $employee->save();
        }

        // Remove the role field from the data to prevent it from being updated twice
        unset($this->data['roles']);

        // Update the other fields in the employee record
        if(isset($this->data['password']) && $this->data['password']) {
            $this->data['password'] = bcrypt($this->data['password']);
        } else {
            unset($this->data['password']);
        }

        return $this->repository->update($this->data['id'], $this->data);
    }
    public function delete($id){
        return $this->repository->delete($id);

    }

}
