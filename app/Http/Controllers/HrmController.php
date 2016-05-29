<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \LaravelAcl\Library\Form\FormModel;
use \LaravelAcl\Authentication\Models\Permission;
use \LaravelAcl\Authentication\Validators\PermissionValidator;
use View, Redirect, App, Config, Session;

use LaravelAcl\Authentication\Controllers\Controller;

use App\Models\Payrolls;
use \LaravelAcl\Library\Exceptions\JacopoExceptionsInterface;

use App\Http\Requests\HrmPayrollFormRequest;

class HrmController extends Controller
{
    /**
     * Menu admin type
     * @sidebar admin
     */
    public $sidebar_admin = array(

    );
    /**
     * Menu user type
     * @sidebar user
     */
    public $sidebar_user = array(
        
    );
    
    public $data = array(
        
    );
    private $obj_payroll = NULL;

    public function __construct() {
        $this->sidebar_admin = array(
            "Payrolls List" => array('url' => '/admin/hrm/payrolls', 'icon' => '<i class="fa fa-users"></i>'),
            "Add New" => array('url' => '/admin/hrm/add_payroll', 'icon' => '<i class="fa fa-plus-circle"></i>')
        );
        $this->sidebar_user = array(
            "Payrolls List" => array('url' => '/admin/hrm/payrolls', 'icon' => '<i class="fa fa-users"></i>'),
            "Add New" => array('url' => '/admin/hrm/add_payroll', 'icon' => '<i class="fa fa-plus-circle"></i>')
        );
        $this->obj_payroll = new Payrolls();
    }

    public function index() {
        
    }
    
    /**
     * @permission: admin
     * Get list of payroll
     */
    public function getPayrolls() {
        
        $payrolls = Payrolls::all();
        
        $data = array_merge($this->data, array(
            'payrolls' => $payrolls
        ));
        return View::make('vendor/laravel-authentication-acl/admin/hrm/payrolls')->with(['sidebar_items' => $this->sidebar_admin, 'data' => $data]);
                                                                                        
    }
    
    /**
     * @permission: admin
     */
    public function addPayroll(Request $request) {
    }
    /**
     * @permission: admin
     */
    public function editPayroll(Request $request) {
        
        $payroll_id = $request->get('id');
        $payroll = $this->obj_payroll->find($payroll_id);
        
        
        $data = array_merge($this->data, array(
            'payroll' => $payroll
        ));
        return View::make('vendor/laravel-authentication-acl/admin/hrm/edit')->with(['sidebar_items' => $this->sidebar_admin, 'data' => $data]);
    }
    
    public function postPayroll(HrmPayrollFormRequest $request)
    {
        $payroll_id = $request->get('id');
        $payroll = $this->obj_payroll->findById($payroll_id);
        $this->obj_payroll->updatePayroll($payroll);
        return redirect()->route("hrm.edit_payroll",["id" => $payroll_id]);
    }
    
    /**
     * @permission: admin
     */
    public function deletePayroll(Request $request) {
        
    }
    /**
     * @permission: admin
     */
    public function logPayrolls() {
        
    }
    
    /**
     * @permission: admin, user
     */
    public function getPayroll(Request $request) {
    }
}
