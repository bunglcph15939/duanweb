<?php

namespace App\Imports;

use App\Models\UserClassroom;
use Exception;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportFileUserClass implements ToCollection,WithHeadingRow
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
    
    // public function model(array $row)
    // {
    //     dd($row);
    //     foreach ($row as $key => $value) {
            
    //     }
    //     return UserClassroom::create([
    //         'user_id' => $row['user_id'],
    //         'classroom_id' => $this->id,

            
    //     ]);
    // }

    

    public function collection(Collection $rows)
    {   
        $userListID = $rows->pluck('user_id')->all();
        $userListID = array_filter($userListID, fn($val) => $val != null);
        $validator = Validator::make(['user_id' => $userListID], [
            'user_id' => 'required|array',

        ]);

        if($validator->fails()){
            throw new Exception('Vui lòng chọn tệp người dùng chính xác');
        }

        $users = UserClassroom::where('classroom_id', '=', $this->id)
                            ->pluck('user_id')->all();
        foreach ($rows as $row) {
            if (!in_array($row['user_id'], $users)) {
                UserClassroom::create([
                    'user_id' => $row['user_id'],
                    'classroom_id' => $this->id, 
                ]);
            }
        }
    }
}
