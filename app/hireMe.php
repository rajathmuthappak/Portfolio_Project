<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class hireMe extends Model
{
   public function getData(){
    $hire_me = DB::table('hire_me')->where('Active', '=', 'Y')->get();
    $level1 = collect($hire_me)->where('job_type', 'B');
    $level2 = collect($hire_me)->whereIn('job_type', ['B', 'I']);
    $level3 = collect($hire_me)->whereIn('job_type', ['I', 'A']);

    $level1Cost = $level1->sum('job_rate');
    $level2Cost = $level1->sum('job_rate');
    $level3Cost = $level1->sum('job_rate');

    $hire_me = array(
        "level1" => $level1,
        "level2" => $level2,
        "level3" => $level3,
        "level1Cost" => $level1Cost,
        "level2Cost" => $level2Cost,
        "level3Cost" => $level3Cost
    );
    return $hire_me;
   }
}
