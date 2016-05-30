<?php namespace App\Http\Requests;

use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;

class PayrollValidator extends AbstractValidator
{
    protected static $rules = array(
        'title' => 'required',
        'description'    => 'required',
    );
    
    protected static $messages = [
        'required' => ':attribute yêu cầu nhập',
    ];


    public function __construct()
    {
        Event::listen('validating', function($input)
        {
            static::$rules["payroll_title"][] = "payroll_title,{$input['id']}";
        });
        $this->messages();
    }
    
    public function messages() {
        self::$messages = [
            'title.required' => 'Tiêu đề được yêu cầu nhập',
            'description.required' => 'Mô tả được yêu cầu nhập',
            'required' => ':attribute yêu cầu nhập',
        ];
    }

} 