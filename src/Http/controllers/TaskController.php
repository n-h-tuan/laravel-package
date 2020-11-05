<?php

namespace Tuanhoang\Demopackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Tuanhoang\Demopackage\Models\Task;

class TaskController extends Controller
{
    public function index(){
        return response()->json(Task::all());
    }
    public function create(){
        $tasks = ["reading","listening","writing","speaking"];
        foreach ($tasks as $item) {
            Task::create([
                "name" => $item,
                "deadline_at" => Carbon::now()->addDays(4),
            ]);
        }
        return response()->json('Tạo task thành công');
    }
}
