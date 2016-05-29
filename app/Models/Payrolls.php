<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payrolls extends Model {

    protected $table = 'payrolls';
    protected $primaryKey = 'payroll_id';
    public $timestamps = false;
    
    protected $fillable = [ "payroll_title",
                            "payroll_desccription", 
                            "payroll_date"];

    protected $guarded = ["payroll_id"];
    
    public function findById($id) {
        $payroll = self::find($id);
        return $payroll;
    }
    public function updatePayroll($payroll){
        $payroll = self::find($payroll->payroll_id);
        $payroll->payroll_title = 'aaa';
        $payroll->save();
    }
}
