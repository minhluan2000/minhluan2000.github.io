<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Order::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/order');
        CRUD::setEntityNameStrings('order', 'orders');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id')->label('Mã đơn hàng');
        CRUD::column('book_name')->label('Tên sách');
        CRUD::column('image')->label('Hình ảnh');
        CRUD::column('author')->label('Tác giả');
        CRUD::column('nhaXB')->label('Nhà xuất bản');
        CRUD::column('old_price')->label('Giá cũ')->type('number')
            ->suffix(' đ');
        CRUD::column('price')->label('Giá')->type('number')
            ->suffix(' đ');
        CRUD::column('quantity')->label('Số lượng');
        CRUD::column('total_price')->label('Tổng tiền')->type('number')
            ->suffix(' đ');
        CRUD::column('order_date')->label('Ngày đặt hàng');
        CRUD::column('payment_status')->label('Trạng thái thanh toán')->type('select_from_array')
            ->options([
                '1' => 'Chờ duyệt', '2' => 'Xác nhận đơn hàng', '3' => 'Đang giao hàng',
                '4' => 'Giao hàng thành công', '5' => 'Hoàn tất đơn hàng'
            ]);
        CRUD::column('payment_methods')->label('Phương thức thanh toán')->type('select_from_array')
            ->options(['1' => 'Thanh toán khi nhận hàng', '2' => 'Thanh toán bằng VNPAY']);
        CRUD::column('note')->label('Ghi chú');
        CRUD::column('created_at')->label('Ngày tạo');
        CRUD::column('updated_at')->label('Ngày sửa');

        $this->crud->disableResponsiveTable();
        $this->crud->setDefaultPageLength(10);

        $this->crud->denyAccess('create');
        // $this->crud->allowAccess('show');


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
        CRUD::setValidation(OrderRequest::class);

        // CRUD::field('id');
        CRUD::field('book_name')->label('Tên sách');
        CRUD::field('image')->label('Hình ảnh');
        CRUD::field('author')->label('Tác giả');
        CRUD::field('nhaXB')->label('Nhà xuất bản');
        CRUD::field('old_price')->label('Giá cũ')->type('number')
            ->prefix('đ');
        CRUD::field('price')->label('Giá')->type('number')
            ->prefix('đ');
        CRUD::field('quantity')->label('Số lượng');
        CRUD::field('total_price')->label('Tổng tiền')->type('number')
            ->prefix('đ');
        CRUD::field('order_date')->label('Ngày đặt hàng');
        CRUD::field('payment_status')->label('Trạng thái thanh toán')->type('select_from_array')
            ->options([
                '1' => 'Chờ duyệt', '2' => 'Xác nhận đơn hàng', '3' => 'Đang giao hàng',
                '4' => 'Giao hàng thành công', '5' => 'Hoàn tất đơn hàng'
            ])
            ->alows_null(false)
            ->default('1');
        CRUD::field('payment_methods')->label('Phương thức thanh toán')->type('select_from_array')
            ->options(['1' => 'Thanh toán khi nhận hàng', '2' => 'Thanh toán bằng VNPAY'])
            ->allows_null(false)
            ->default('1');
        CRUD::field('note')->label('Ghi chú');
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
