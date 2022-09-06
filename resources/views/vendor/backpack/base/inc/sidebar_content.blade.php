{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<!-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon la la-question"></i> Tags</a></li> -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-list"></i> Quản lý Danh mục</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-box"></i> Quản lý Đơn hàng</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('book') }}"><i class="nav-icon la la-book"></i> Quản lý Sách</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('publisher') }}"><i class="nav-icon la la-industry"></i> Quản lý Nhà xuất bản</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('member') }}"><i class="nav-icon la la-users"></i> Quản lý Khách hàng</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('administrator') }}"><i class="nav-icon la la-user"></i> Quản lý Nhân viên</a></li>