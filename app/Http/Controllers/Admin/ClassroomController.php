<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classroom;
use App\Models\User;
use App\Http\Requests\ClassroomRequest;

class ClassroomController extends Controller
{
    public function index(){
        $classroom=Classroom::select('*')
        ->with('author')
        ->paginate(10);
        $user=User::select('*')->paginate(10);
        return view('screens.backend.classroom',[
            'classroom'=>$classroom,
            'user'=>$user
        ]);
    }
    public function store_classroom(ClassroomRequest $request){

       $classroom=new Classroom();
       $classroom->fill($request->all());
       $classroom->user_id=1;
       $classroom->save();
       if ($classroom) {
        $output=view('layouts.blade_api.class',['classroom'=>Classroom::select('*')->with('author')->paginate(10)])->render();
        }
    return Response()->json($output,200);
    }
    public function update_classroom(ClassroomRequest $request){

        $classroom=Classroom::where('id',$request->id)->get();
        $classroom[0]->update([
            'name'=>$request->name,
            'desc'=>$request->desc,
        ]);
        if ($classroom) {
            $output=view('layouts.blade_api.class',['classroom'=>Classroom::select('*')->with('author')->paginate(10)])->render();
            }
        return Response()->json($output,200);

    }
    public function change_status(Request $request){

         $classroom = Classroom::where('id',$request->change_status)->first();
            if($classroom->status==1){
                $classroom->status=0;
            }else{
                $temp= $classroom->status=1;
            }
            $classroom->save();
        $output=view('layouts.blade_api.class',['classroom'=>Classroom::select('*')->with('author')->paginate(10)])->render();
        return Response()->json($output,200);
    }
    public function search(Request $request){
        if ($request->ajax()) {
            $classroom = Classroom::where('name', 'LIKE', '%' . $request->search . '%')->with('author')->get();
            if ($classroom) {
                $output=view('layouts.blade_api.class',compact('classroom'))->render();
                }
            return Response()->json($output,200);
        }
    }
    public function fillter(Request $request){
        if ($request->ajax()) {

            $classroom=Classroom::where('user_id',$request->fillter)->get();
            if ($classroom) {
                $output=view('layouts.blade_api.class',compact('classroom'))->with('author')->render();
                }
                return Response()->json($output,200);
            }
    }

}
