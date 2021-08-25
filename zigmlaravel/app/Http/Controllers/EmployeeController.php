<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
    // ALL OF THESE ARE FUNCTION NEED TO BE CALL INORDER TO USE.

    //get all employee to be call by file api same as below
    public function getEmployee(){
         return response()->json(Employee::all(),200);
    }


    // RETRIEVE DATA  BY ITS ID
    public function getEmployeebyID($id){

        $employee = Employee::find($id);

        if(is_null($employee)){
            
            return response()->json(['message' => 'Employee Not Found'],404);
        }
        return response()->json($employee::find($id),200);
       
   }




   //ADD NEW DATA OR EMPLOYEE TO THE DATABASE
   public function addEmployee(Request $request){
       $employee = Employee::create($request->all());
       return response($employee,201);


   }


   //UPDATE DATA FUNCTION FROM THE DATABASE
   public function updateEmployee(Request $request, $id) {
    $employee = Employee::find($id);
    if(is_null($employee)) {
        return response()->json(['message' => 'Employee Not Found'], 404);
    }
    $employee->update($request->all());
    return response($employee, 200);
}

   
   //DELETE DATA BY SPECIFIC ID FROM DATABASE
   public function deleteEmployee(Request $request, $id) {
    $employee = Employee::find($id);
    if(is_null($employee)) {
        return response()->json(['message' => 'Employee Not Found'], 404);
    }
    $employee->delete();
    return response()->json(null, 204);
}





}
