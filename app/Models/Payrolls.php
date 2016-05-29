<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payrolls extends Model {

    protected $table = 'payrolls';
    protected $primaryKey = 'payroll_id';
    public $timestamps = false;
    

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
