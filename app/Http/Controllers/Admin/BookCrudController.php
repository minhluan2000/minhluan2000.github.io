<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BookRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BookCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BookCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Book::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/book');
        CRUD::setEntityNameStrings('book', 'books');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id')->label('Mã sách');
        CRUD::column('book_name')->label('Tên sách');
        // CRUD::column('image');
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'image',
            'width' => '100px',
            'height' => 'auto'
        ]);
        CRUD::column('author')->label('Tác giả');
        CRUD::column('publisher_name')->label('Nhà xuất bản');
        CRUD::column('publish_year')->label('Năm xuất bản');
        CRUD::column('category_name')->label('Danh mục');
        CRUD::column('quantity')->label('Số lượng');
        CRUD::column('old_price')->label('Giá cũ');
        CRUD::column('price')->label('Giá');
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
        CRUD::setValidation(BookRequest::class);

        // CRUD::field('id');
        CRUD::field('book_name')->label('Tên sách');
        CRUD::field('image')->label('Image')->type('upload')->upload(true);
        CRUD::field('author')->label('Tác giả');
        CRUD::field('publisher_name')->label('Nhà xuất bản');
        CRUD::field('publish_year')->label('Năm xuất bản')->type('month');
        CRUD::field('category_name')->label('Danh mục');
        CRUD::field('quantity')->label('Số lượng')->type('number');
        CRUD::field('old_price')->label('Giá cũ');
        CRUD::field('price')->label('Giá');
        CRUD::field('status')->label('Trạng thái');
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
