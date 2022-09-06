<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdministratorRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

use function PHPSTORM_META\type;

/**
 * Class AdministratorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AdministratorCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Administrator::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/administrator');
        CRUD::setEntityNameStrings('administrator', 'administrators');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id')->label('Mã NV');
        CRUD::column('username')->label('Username');
        CRUD::column('admin_name')->label('Tên NV');
        CRUD::column('email')->label('Email');
        CRUD::column('password')->label('Password');
        CRUD::column('phone')->label('SĐT');
        CRUD::column('address')->label('Địa chỉ');
        CRUD::column('role')->label('Phân quyền');
        CRUD::column('status')->label('Trạng thái');
        CRUD::column('created_at')->label('Ngày tạo');
        CRUD::column('updated_at')->label('Ngày sửa');

        $this->crud->disableResponsiveTable();
        $this->crud->setDefaultPageLength(10);
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(AdministratorRequest::class);

        // CRUD::field('id');
        CRUD::field('username')->label('Username');
        CRUD::field('admin_name')->label('Tên NV');
        CRUD::field('email')->label('Email')->type('email');
        CRUD::field('password')->label('Password')->type('password');
        CRUD::field('phone')->label('SĐT')->type('number');
        CRUD::field('address')->label('Địa chỉ');
        CRUD::field('role')->label('Phân quyền')->type('select_from_array')
                        ->options(['nvkho' => 'NV Kho','nvbanhang' => 'NV Bán hàng'])
                        ->allows_null(false)
                        ->default('nvkho');
        // CRUD::field('status');
        CRUD::field('created_at')->label('Ngày tạo');
        CRUD::field('updated_at')->label('Ngày sửa');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
