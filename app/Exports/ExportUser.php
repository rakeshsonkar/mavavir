<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class ExportUser implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'Employee Id',
            'Employee Name',
            'Email',
            'Mobile',
            'Source',
            'trade',
            'Address',
            'State',
            'City',
            'status',
            'created_at',
            'Updated_at' 
        ];
    } 

    public function collection()
    {
        $users  = DB::table('users')
        ->leftjoin('states','states.id','=','users.state_id')
        ->leftjoin('cities','cities.id','=','users.city_id')
        ->select('users.employee_id','users.name','users.email','users.mobile','users.source','users.trade','users.address','states.name as state_name','cities.name as city_name','users.status','users.created_at','users.updated_at');
       return $users = $users->get();
    
    }
            
}
