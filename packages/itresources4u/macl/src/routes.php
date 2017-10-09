<?php
/**
 * Created by PhpStorm.
 * User: salauddin
 * Date: 10/9/17
 * Time: 3:48 PM
 */

Route::get('test', function () {
    echo "I am ready to be used. Have fun!!!!!!!!!!!!";
});

Route::get('role-list', 'Itresources4u\Macl\RoleController@index');