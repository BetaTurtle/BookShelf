<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Register extends Eloquent {
        protected $guarded = array();
        protected $table = 'users'; // table name
       // public $timestamps = 'false' ; // to disable default timestamp fields

        // model function to store form data to database
        public static function saveFormData($data)
        {
        	$data['password']=Hash::make($data['password']);
            DB::table('users')->insert($data);
        }


}