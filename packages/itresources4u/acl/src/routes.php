<?php
/**
 * Created by PhpStorm.
 * User: salauddin
 * Date: 10/9/17
 * Time: 6:29 PM
 */

Route::get("acl-test", function () {
    echo "It is from acl package. Make fun!!!!!!";
});

Route::get('acl-test-controller', 'Itresources4u\Acl\RoleController@aclTest');
Route::get('role-list', 'Itresources4u\Acl\RoleController@index');