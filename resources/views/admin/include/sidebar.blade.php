<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php
        $permission = Auth::guard('administration')->user();
    ?>
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('/')}}assets/backend/admin/dist/img/logo.webp" alt="AleshaMart" class="brand-image">
        <span class="brand-text font-weight-light">AleshaMart Panel</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style="margin-bottom: 20px;">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('/')}}assets/backend/admin/dist/img/admin.png" class="img-circle elevation-2" alt="Admin">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::guard('administration')->user()->fullname }}
                </a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                     <li class="nav-item">
                         <a href="{{ route('admin.dashboard') }}" class="nav-link">
                             <i class="nav-icon fas fa-th"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>

                 {{-- Management Modules  --}}
                    @if($permission->can('admin.view') || $permission->can('group.view') || $permission->can('roles.view') || $permission->can('permission.view') || $permission->can('notification.view') || $permission->can('support.view'))
                    <li class="sidenav-heading">Management Modules</li>
                    @endif
                    @if($permission->can('admin.create') || $permission->can('admin.view') || $permission->can('admin.edit') || $permission->can('admin.delete'))
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Admin
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             @if($permission->can('admin.view'))
                             <li class="nav-item">
                                 <a href="{{ route('admins.index')}}" class="nav-link">
                                 <i class="fa fa-bars nav-icon"></i>
                                 <p>Admin List</p>
                                 </a>
                             </li>
                             @endif
                             @if($permission->can('admin.create'))
                             <li class="nav-item">
                                 <a href="{{ route('admins.create')}}" class="nav-link">
                                 <i class="fa fa-plus nav-icon"></i>
                                 <p>New Admin</p>
                                 </a>
                             </li>
                             @endif
                         </ul>
                     </li>
                    @endif
                    {{-- @if($permission->can('group.create') || $permission->can('group.view') || $permission->can('group.edit') || $permission->can('group.delete'))
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                             <i class="nav-icon fas fa-tachometer-alt"></i>
                             <p>
                                 Group
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             @if($permission->can('group.view'))
                             <li class="nav-item">
                                 <a href="{{ route('group.index')}}" class="nav-link">
                                 <i class="fa fa-bars nav-icon"></i>
                                 <p>Group List</p>
                                 </a>
                             </li>
                             @endif
                             @if($permission->can('group.create'))
                             <li class="nav-item">
                                 <a href="{{ route('group.create')}}" class="nav-link">
                                 <i class="fa fa-plus nav-icon"></i>
                                 <p>New Group</p>
                                 </a>
                             </li>
                             @endif
                         </ul>
                     </li>
                    @endif --}}
                    @if($permission->can('roles.create') || $permission->can('roles.view') || $permission->can('roles.edit') || $permission->can('roles.delete'))
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                             Role
                             <i class="right fas fa-angle-left"></i>
                           </p>
                         </a>
                         <ul class="nav nav-treeview">
                             @if($permission->can('roles.view'))
                             <li class="nav-item">
                                 <a href="{{ route('role.index')}}" class="nav-link">
                                 <i class="fa fa-bars nav-icon"></i>
                                 <p>Role List</p>
                                 </a>
                             </li>
                             @endif
                             @if($permission->can('roles.create'))
                             <li class="nav-item">
                                 <a href="{{ route('role.create')}}" class="nav-link">
                                 <i class="fa fa-plus nav-icon"></i>
                                 <p>New Role</p>
                                 </a>
                             </li>
                             @endif
                         </ul>
                     </li>
                    @endif
                    @if($permission->can('permission.create') || $permission->can('permission.view') || $permission->can('permission.edit') || $permission->can('permission.delete'))
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                             Permission
                             <i class="right fas fa-angle-left"></i>
                           </p>
                         </a>
                         <ul class="nav nav-treeview">
                             @if($permission->can('permission.view'))
                             <li class="nav-item">
                                 <a href="{{ route('permission.index')}}" class="nav-link">
                                 <i class="fa fa-bars nav-icon"></i>
                                 <p>Permission List</p>
                                 </a>
                             </li>
                             @endif
                             @if($permission->can('permission.create'))
                             <li class="nav-item">
                                 <a href="{{ route('permission.create')}}" class="nav-link">
                                 <i class="fa fa-plus nav-icon"></i>
                                 <p>New Permission</p>
                                 </a>
                             </li>
                             @endif
                         </ul>
                     </li>
                    @endif
                    @if($permission->can('notification.create') || $permission->can('notification.view') || $permission->can('notification.edit') || $permission->can('notification.delete') || $permission->can('notification.type') || $permission->can('notification.userType'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-genderless"></i>
                        <p>
                            Notification
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if($permission->can('notification.view'))
                            <li class="nav-item">
                                <a href="{{ route('notification.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Notification List</p>
                                </a>
                            </li>
                            @endif
                            @if($permission->can('notification.create'))
                            <li class="nav-item">
                                <a href="{{ route('admin.create.notification')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Create Notification</p>
                                </a>
                            </li>
                            @endif
                            @if($permission->can('notification.type'))
                            <li class="nav-item">
                                <a href="{{ route('notification.type')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Notification Type</p>
                                </a>
                            </li>
                            @endif
                            @if($permission->can('notification.userType'))
                            <li class="nav-item">
                                <a href="{{ route('notification.user.type')}}" class="nav-link">
                                    <i class="fa fa-bars nav-icon"></i>
                                    <p>Notification User Type</p>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if($permission->can('support.compose') || $permission->can('support.inbox') || $permission->can('support.sentmail') || $permission->can('support.draftmail'))
                     <li class="nav-item">
                         <a href="#" class="nav-link">
                           <i class="nav-icon fa fa-genderless"></i>
                           <p>
                             Support
                             <i class="right fas fa-angle-left"></i>
                           </p>
                         </a>
                         <ul class="nav nav-treeview">
                             @if($permission->can('support.compose'))
                             <li class="nav-item">
                                 <a href="{{ route('admin.newmail')}}" class="nav-link">
                                 <i class="fa fa-plus nav-icon"></i>
                                 <p>Compose Mail</p>
                                 </a>
                             </li>
                             @endif
                             @if($permission->can('support.inbox'))
                             <li class="nav-item">
                                 <a href="{{ route('admin.mailbox')}}" class="nav-link">
                                 <i class="fa fa-bars nav-icon"></i>
                                 <p>Inbox</p>
                                 </a>
                             </li>
                             @endif
                             @if($permission->can('support.sentmail'))
                             <li class="nav-item">
                                 <a href="{{ route('admin.sentmail')}}" class="nav-link">
                                 <i class="fa fa-envelope nav-icon"></i>
                                 <p>Sent Mail</p>
                                 </a>
                             </li>
                             @endif
                             @if($permission->can('support.draftmail'))
                             <li class="nav-item">
                                 <a href="{{ route('admin.draftmail')}}" class="nav-link">
                                 <i class="fa fa-envelope nav-icon"></i>
                                 <p>Draft Mail</p>
                                 </a>
                             </li>
                             @endif
                         </ul>
                     </li>
                    @endif

                {{-- Customer Modules  --}}
                    @if($permission->can('customer.create') || $permission->can('customer.view') || $permission->can('customer.edit') || $permission->can('customer.delete'))
                    <li class="sidenav-heading">Customer Modules</li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Customer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        @if($permission->can('customer.view'))
                            <li class="nav-item">
                                <a href="{{ route('customer.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Customer List</p>
                                </a>
                            </li>
                        @endif
                        @if($permission->can('customer.create'))
                            <li class="nav-item">
                                <a href="{{ route('customer.create')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Customer</p>
                                </a>
                            </li>
                        @endif
                        </ul>
                    </li>
                    @endif
                    @if($permission->can('guest.view') || $permission->can('guest.edit') || $permission->can('guest.delete'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Guest
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        @if($permission->can('guest.view'))
                            <li class="nav-item">
                                <a href="{{ route('admin.guest.list')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Guest List</p>
                                </a>
                            </li>
                        @endif
                        </ul>
                    </li>
                    @endif

                {{-- Merchant Modules --}}
                @if($permission->can('seller.view') || $permission->can('sellerMenu.view') || $permission->can('sellerContent.view'))
                <li class="sidenav-heading">Seller Modules</li>
                @endif
                @if($permission->can('seller.create') || $permission->can('seller.view') || $permission->can('seller.edit') || $permission->can('seller.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Seller
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('seller.view'))
                        <li class="nav-item">
                            <a href="{{ route('merchant.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Seller List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('seller.create'))
                        <li class="nav-item">
                            <a href="{{ route('merchant.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Seller</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('sellerMenu.create') || $permission->can('sellerMenu.view') || $permission->can('sellerMenu.edit') || $permission->can('sellerMenu.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Seller Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('sellerMenu.view'))
                        <li class="nav-item">
                            <a href="{{ route('sellermenus.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Seller Menu List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('sellerMenu.create'))
                        <li class="nav-item">
                            <a href="{{ route('sellermenus.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Seller Menu</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('sellerContent.create') || $permission->can('sellerContent.view') || $permission->can('sellerContent.edit') || $permission->can('sellerContent.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Seller Content
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('sellerContent.view'))
                        <li class="nav-item">
                            <a href="{{ route('sellercontents.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Seller Content List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('sellerContent.create'))
                        <li class="nav-item">
                            <a href="{{ route('sellercontents.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Seller Content</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
            
                {{-- Account Modules --}}
                {{-- <li class="sidenav-heading">Account Modules</li>
                <li class="nav-item">
                    <a href="{{route('admin.seller.balance')}}" class="nav-link">
                        <i class="fas fa-landmark mr-2"></i>
                        <p>
                             Finance Report
                        </p>
                    </a>
                </li> --}}

                {{-- Setup Modules --}}
                @if($permission->can('returnIssue.view') || $permission->can('brand.view') || $permission->can('news.view'))
                <li class="sidenav-heading">Setup Modules</li>
                @endif
                @if($permission->can('returnIssue.create') || $permission->can('returnIssue.view') || $permission->can('returnIssue.edit') || $permission->can('returnIssue.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-user"></i>
                    <p>
                        Return Issue
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('returnIssue.view'))
                        <li class="nav-item">
                            <a href="{{ route('returncause.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Return Issue List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('returnIssue.create'))
                        <li class="nav-item">
                            <a href="{{ route('returncause.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Return Issue</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('brand.create') || $permission->can('brand.view') || $permission->can('brand.edit') || $permission->can('brand.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-bars nav-icon"></i>
                        <p>
                            Brand
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('brand.view'))
                        <li class="nav-item">
                            <a href="{{ route('brand.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Brand List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('brand.create'))
                        <li class="nav-item">
                            <a href="{{ route('brand.create')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Brand</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('news.create') || $permission->can('news.view') || $permission->can('news.edit') || $permission->can('news.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-newspaper"></i>
                    <p>
                        News
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('news.view'))
                        <li class="nav-item">
                            <a href="{{ route('news.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>News List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('news.create'))
                        <li class="nav-item">
                            <a href="{{ route('news.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New News</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif

            {{-- Category Modules --}}
                @if($permission->can('category.view') || $permission->can('firstCat.view') || $permission->can('secondCat.view') || $permission->can('lastCat.view') || $permission->can('catVariation.view'))
                <li class="sidenav-heading">Category Modules</li>
                @endif
                @if($permission->can('category.create') || $permission->can('category.view') || $permission->can('category.edit') || $permission->can('category.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-list"></i>
                    <p>
                        Category
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('category.view'))
                        <li class="nav-item">
                            <a href="{{ route('category.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Category List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('category.create'))
                        <li class="nav-item">
                            <a href="{{ route('category.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Category</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('firstCat.create') || $permission->can('firstCat.view') || $permission->can('firstCat.edit') || $permission->can('firstCat.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-list-ol"></i>
                    <p>
                        First Step
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('firstCat.view'))
                        <li class="nav-item">
                            <a href="{{ route('subcategory.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>First Category List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('firstCat.create'))
                        <li class="nav-item">
                            <a href="{{ route('subcategory.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New First Category</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('secondCat.create') || $permission->can('secondCat.view') || $permission->can('secondCat.edit') || $permission->can('secondCat.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-list-ol"></i>
                    <p>
                        Second step
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('secondCat.view'))
                        <li class="nav-item">
                            <a href="{{ route('subsubcategory.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Second Category List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('secondCat.create'))
                        <li class="nav-item">
                            <a href="{{ route('subsubcategory.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Second Category</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('lastCat.create') || $permission->can('lastCat.view') || $permission->can('lastCat.edit') || $permission->can('lastCat.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-list-ol"></i>
                    <p>
                        Last step
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('lastCat.view'))
                        <li class="nav-item">
                            <a href="{{ route('lastcategory.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Last Category List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('lastCat.create'))
                        <li class="nav-item">
                            <a href="{{ route('lastcategory.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Last Category</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('catVariation.create') || $permission->can('catVariation.view') || $permission->can('catVariation.edit') || $permission->can('catVariation.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-list"></i>
                    <p>
                        Category Variation
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('catVariation.view'))
                        <li class="nav-item">
                            <a href="{{ route('category_variation.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Variation List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('catVariation.create'))
                        <li class="nav-item">
                            <a href="{{ route('category_variation.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Variation</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif

            {{-- Functional Modules --}}
                @if($permission->can('product.view') || $permission->can('order.view') || $permission->can('poGenerate.view'))
                <li class="sidenav-heading">Functional Modules</li>
                @endif
                @if($permission->can('product.create') || $permission->can('product.view') || $permission->can('product.edit') || $permission->can('product.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-store-alt"></i>
                    <p>
                        Product
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('product.view'))
                        <li class="nav-item">
                            <a href="{{ route('product.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Product List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('product.feature'))
                        <li class="nav-item">
                            <a href="{{ route('product.feature')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Feature Product</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('product.create'))
                        <li class="nav-item">
                            <a href="{{ route('product.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Product</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('order.view') || $permission->can('order.reports'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-align-center"></i>
                    <p>
                        Order
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('order.view'))
                        <li class="nav-item">
                            <a href="{{ route('admin.orderlist')}}" class="nav-link">
                            <i class="fa fa-check-circle ml-2 mr-2"></i>
                            <p> Manage Order</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('order.reports'))
                        <li class="nav-item">
                            <a href="{{ route('admin.order.reports')}}" class="nav-link">
                            <i class="fa fa-registered ml-2 mr-2"></i>
                            <p> Order Reports</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-list"></i>
                    <p>
                        Alesha Card
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cupon.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Alesha Card List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cupon.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Alesha Card</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-list"></i>
                    <p>
                        Alesha Card User
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cupon_user.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Alesha Card User List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cupon_user.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Alesha Card User</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- @if($permission->can('poGenerate.view'))
				<li class="nav-item">
                    <a href="{{route('admin.generate.po')}}" class="nav-link">
                    <i class="nav-icon fa fa-align-center"></i>
                    <p>
                        PO Generate
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if($permission->can('product.view'))
                        <li class="nav-item">
                            <a href="{{route('admin.view.generated.po')}}" class="nav-link">
                                <i class="nav-icon fa fa-align-center"></i>
                                <p>
                                    View Generated PO
                                </p>
                            </a>
                        </li>
                        @endif
                        @if($permission->can('product.create'))
                        <li class="nav-item">
                            <a href="{{route('admin.po.log')}}" class="nav-link">
                                <i class="nav-icon fa fa-align-center"></i>
                                <p>
                                    PO Log
                                </p>
                            </a>
                        </li>
                        @endif
                        </ul>
                </li>
                @endif --}}

            {{-- PO Modules --}}
                @if($permission->can('po.generate') || $permission->can('po.generatedViewPO') || $permission->can('po.log'))
                <li class="sidenav-heading">Purchase Order Modules</li>
                @endif
                @if($permission->can('po.generate'))
                <li class="nav-item">
                    <a href="{{route('admin.generate.po')}}" class="nav-link">
                        <i class="nav-icon fa fa-align-center"></i>
                        <p>
                            PO Generate
                        </p>
                    </a>
                </li>
                @endif
                @if($permission->can('po.generatedViewPO'))
                <li class="nav-item">
                    <a href="{{route('admin.view.generated.po')}}" class="nav-link">
                        <i class="nav-icon fa fa-align-center"></i>
                        <p>
                            View Generated PO
                        </p>
                    </a>
                </li>
                @endif
                @if($permission->can('po.log'))
                <li class="nav-item">
                    <a href="{{route('admin.po.log')}}" class="nav-link">
                        <i class="nav-icon fa fa-align-center"></i>
                        <p>
                            PO Log
                        </p>
                    </a>
                </li>
                @endif

                {{-- Reward Modules --}}
                @if($permission->can('rewardCat.view') || $permission->can('partnerManage.view') || $permission->can('partnerRewardVal.view') || $permission->can('earningProcess.view') || $permission->can('rewardValue.view'))
                <li class="sidenav-heading">Reward Modules</li>
                @endif
                @if($permission->can('rewardCat.create') || $permission->can('rewardCat.view') || $permission->can('rewardCat.edit') || $permission->can('rewardCat.delete'))
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                                <p>
                                    Reward Category
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            @if($permission->can('rewardCat.view'))
                                <li class="nav-item">
                                    <a href="{{ route('rewards-category.index')}}" class="nav-link">
                                        <i class="fas fa-ellipsis-v nav-icon"></i>
                                        <p>Reward Category List</p>
                                    </a>
                                </li>
                            @endif
                            @if($permission->can('rewardCat.create'))
                                <li class="nav-item">
                                    <a href="{{ route('rewards-category.create')}}" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>New Reward Category</p>
                                    </a>
                                </li>
                            @endif
                            </ul>
                        </li>
                @endif
                @if($permission->can('partnerManage.create') || $permission->can('partnerManage.view') || $permission->can('partnerManage.edit') || $permission->can('partnerManage.delete'))
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                                <p>
                                    Partner Manage
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            @if($permission->can('partnerManage.view'))
                                <li class="nav-item">
                                    <a href="{{ route('partner-manage.index')}}" class="nav-link">
                                        <i class="fas fa-ellipsis-v nav-icon"></i>
                                        <p>Partner Manage List</p>
                                    </a>
                                </li>
                            @endif
                            @if($permission->can('partnerManage.create'))
                                <li class="nav-item">
                                    <a href="{{ route('partner-manage.create')}}" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>New Partner Manage</p>
                                    </a>
                                </li>
                            @endif
                            </ul>
                        </li>
                @endif
                @if($permission->can('partnerRewardVal.create') || $permission->can('partnerRewardVal.view') || $permission->can('partnerRewardVal.edit') || $permission->can('partnerRewardVal.delete'))
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                                <p>
                                    Partners' Reward Value
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            @if($permission->can('partnerRewardVal.view'))
                                <li class="nav-item">
                                    <a href="{{ route('partner-rewards-value.index')}}" class="nav-link">
                                        <i class="fas fa-ellipsis-v nav-icon"></i>
                                        <p>Partners' Reward Value List</p>
                                    </a>
                                </li>
                            @endif
                            @if($permission->can('partnerRewardVal.create'))
                                <li class="nav-item">
                                    <a href="{{ route('partner-rewards-value.create')}}" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>New Partners' Reward Value</p>
                                    </a>
                                </li>
                            @endif
                            </ul>
                        </li>
                @endif
                @if($permission->can('earningProcess.create') || $permission->can('earningProcess.view') || $permission->can('earningProcess.edit') || $permission->can('earningProcess.delete'))
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                                <p>
                                    Earning Process
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            @if($permission->can('earningProcess.view'))
                                <li class="nav-item">
                                    <a href="{{ route('rewards-earning.index')}}" class="nav-link">
                                        <i class="fas fa-ellipsis-v nav-icon"></i>
                                        <p>Earning Process List</p>
                                    </a>
                                </li>
                            @endif
                            @if($permission->can('earningProcess.create'))
                                <li class="nav-item">
                                    <a href="{{ route('rewards-earning.create')}}" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>New Earning Process</p>
                                    </a>
                                </li>
                            @endif
                            </ul>
                        </li>
                @endif
                @if($permission->can('rewardValue.create') || $permission->can('rewardValue.view') || $permission->can('rewardValue.edit') || $permission->can('rewardValue.delete'))
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-arrow-alt-circle-right"></i>
                                <p>
                                    Reward Values
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                            @if($permission->can('rewardValue.view'))
                                <li class="nav-item">
                                    <a href="{{ route('rewards-value.index')}}" class="nav-link">
                                        <i class="fas fa-ellipsis-v nav-icon"></i>
                                        <p>Reward Value List</p>
                                    </a>
                                </li>
                            @endif
                            @if($permission->can('rewardValue.create'))
                                <li class="nav-item">
                                    <a href="{{ route('rewards-value.create')}}" class="nav-link">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>New Rewards Value</p>
                                    </a>
                                </li>
                            @endif
                            </ul>
                        </li>
                @endif

            {{-- Campaign Modules --}}
                <!--<li class="sidenav-heading">Campaign Modules</li>-->
                <!--<li class="nav-item">-->
                <!--    <a href="#" class="nav-link">-->
                <!--        <i class="nav-icon fa fa-list"></i>-->
                <!--        <p>-->
                <!--            Campaign-->
                <!--            <i class="right fas fa-angle-left"></i>-->
                <!--        </p>-->
                <!--    </a>-->
                <!--    <ul class="nav nav-treeview">-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign.index')}}" class="nav-link">-->
                <!--                <i class="fa fa-bars nav-icon"></i>-->
                <!--                <p>Campaign List</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign.active')}}" class="nav-link">-->
                <!--                <i class="fa fa-bars nav-icon"></i>-->
                <!--                <p>Active Campaign</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign.create')}}" class="nav-link">-->
                <!--                <i class="fa fa-plus nav-icon"></i>-->
                <!--                <p>New Campaign</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--    <a href="#" class="nav-link">-->
                <!--        <i class="nav-icon fa fa-list"></i>-->
                <!--        <p>-->
                <!--            Sub Campaign-->
                <!--            <i class="right fas fa-angle-left"></i>-->
                <!--        </p>-->
                <!--    </a>-->
                <!--    <ul class="nav nav-treeview">-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign_sub.index')}}" class="nav-link">-->
                <!--                <i class="fa fa-bars nav-icon"></i>-->
                <!--                <p>Sub Campaign List</p>-->
                <!--            </a>-->
                <!--        </li>-->
                        
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign_sub.create')}}" class="nav-link">-->
                <!--                <i class="fa fa-plus nav-icon"></i>-->
                <!--                <p>New Sub Campaign</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--{{-- <li class="nav-item">-->
                <!--    <a href="#" class="nav-link">-->
                <!--        <i class="nav-icon fa fa-list"></i>-->
                <!--        <p>-->
                <!--            Campaign Seller Assign-->
                <!--            <i class="right fas fa-angle-left"></i>-->
                <!--        </p>-->
                <!--    </a>-->
                <!--    <ul class="nav nav-treeview">-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign_seller.index')}}" class="nav-link">-->
                <!--                <i class="fa fa-bars nav-icon"></i>-->
                <!--                <p>Assigned Seller List</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign_seller.active')}}" class="nav-link">-->
                <!--                <i class="fa fa-bars nav-icon"></i>-->
                <!--                <p>Active Assigned Seller</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign_seller.create')}}" class="nav-link">-->
                <!--                <i class="fa fa-plus nav-icon"></i>-->
                <!--                <p>New Assigned Seller</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li> --}}-->
                <!--<li class="nav-item">-->
                <!--    <a href="#" class="nav-link">-->
                <!--        <i class="nav-icon fa fa-list"></i>-->
                <!--        <p>-->
                <!--            Campaign Product-->
                <!--            <i class="right fas fa-angle-left"></i>-->
                <!--        </p>-->
                <!--    </a>-->
                <!--    <ul class="nav nav-treeview">-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign_product.allproducts')}}" class="nav-link">-->
                <!--                <i class="fa fa-bars nav-icon"></i>-->
                <!--                <p>Seller's Product List</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li class="nav-item">-->
                <!--            <a href="{{ route('campaign_product.index')}}" class="nav-link">-->
                <!--                <i class="fa fa-bars nav-icon"></i>-->
                <!--                <p>Assigned Product List</p>-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->

            {{-- Website Modules --}}
                @if($permission->can('offer.view') || $permission->can('regularOffer.view') || $permission->can('banner.view') || $permission->can('menu.view') || $permission->can('content.view') || $permission->can('faq.view') || $permission->can('faqTopic.view') || $permission->can('service.view') || $permission->can('blogCat.view') || $permission->can('blog.view') || $permission->can('comProfile.view'))
                    <li class="sidenav-heading">Website Modules</li>
                @endif
                @if($permission->can('offer.create') || $permission->can('offer.view') || $permission->can('offer.edit') || $permission->can('offer.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Offer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if($permission->can('offer.view')) 
                        <li class="nav-item">
                            <a href="{{ route('offer.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Offer List</p>
                            </a>
                        </li>
                        @endif
                        @if($permission->can('offer.create'))
                        <li class="nav-item">
                            <a href="{{ route('offer.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Offer</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('regularOffer.create') || $permission->can('regularOffer.view') || $permission->can('regularOffer.edit') || $permission->can('regularOffer.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Regular Offer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('regularOffer.view'))
                        <li class="nav-item">
                            <a href="{{ route('special_offer.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Regular Offer List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('regularOffer.create'))
                        <li class="nav-item">
                            <a href="{{ route('special_offer.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Regular Offer</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('banner.create') || $permission->can('banner.view') || $permission->can('banner.edit') || $permission->can('banner.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Banner
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('banner.view'))
                        <li class="nav-item">
                            <a href="{{ route('banner.index')}}" class="nav-link">
                            <i class="fa fa-bars nav-icon"></i>
                            <p>Banner List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('banner.create'))
                        <li class="nav-item">
                            <a href="{{ route('banner.create')}}" class="nav-link">
                            <i class="fa fa-plus nav-icon"></i>
                            <p>New Banner</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('menu.create') || $permission->can('menu.view') || $permission->can('menu.edit') || $permission->can('menu.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Menu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    @if($permission->can('menu.view'))
                        <li class="nav-item">
                            <a href="{{ route('menu.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Menu List</p>
                            </a>
                        </li>
                    @endif
                    @if($permission->can('menu.create'))
                        <li class="nav-item">
                            <a href="{{ route('menu.create')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Menu</p>
                            </a>
                        </li>
                    @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('content.create') || $permission->can('content.view') || $permission->can('content.edit') || $permission->can('content.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Content
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if($permission->can('content.view'))
                        <li class="nav-item">
                            <a href="{{ route('content.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Content List</p>
                            </a>
                        </li>
                        @endif
                        @if($permission->can('content.create'))
                        <li class="nav-item">
                            <a href="{{ route('content.create')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Content</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('faq.create') || $permission->can('faq.view') || $permission->can('faq.edit') || $permission->can('faq.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Faq
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if($permission->can('faq.view'))
                        <li class="nav-item">
                            <a href="{{ route('faq.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Faq List</p>
                            </a>
                        </li>
                        @endif
                        @if($permission->can('faq.create'))
                        <li class="nav-item">
                            <a href="{{ route('faq.create')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Faq</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('faqTopic.create') || $permission->can('faqTopic.view') || $permission->can('faqTopic.edit') || $permission->can('faqTopic.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Faq Topic
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if($permission->can('faqTopic.view'))
                        <li class="nav-item">
                            <a href="{{ route('faqtopic.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Faq Topic List</p>
                            </a>
                        </li>
                        @endif
                        @if($permission->can('faqTopic.create'))
                        <li class="nav-item">
                            <a href="{{ route('faqtopic.create')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Faq Topic</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('service.create') || $permission->can('service.view') || $permission->can('service.edit') || $permission->can('service.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Service
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if($permission->can('service.view'))
                        <li class="nav-item">
                            <a href="{{ route('service.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Service List</p>
                            </a>
                        </li>
                        @endif
                        @if($permission->can('service.create'))
                        <li class="nav-item">
                            <a href="{{ route('service.create')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Service</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('blogCat.create') || $permission->can('blogCat.view') || $permission->can('blogCat.edit') || $permission->can('blogCat.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Blog Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if($permission->can('blogCat.view'))
                        <li class="nav-item">
                            <a href="{{ route('blogcategory.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Blog Category List</p>
                            </a>
                        </li>
                        @endif
                        @if($permission->can('blogCat.create'))
                        <li class="nav-item">
                            <a href="{{ route('blogcategory.create')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Blog Category</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('blog.create') || $permission->can('blog.view') || $permission->can('blog.edit') || $permission->can('blog.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if($permission->can('blog.view'))
                        <li class="nav-item">
                            <a href="{{ route('blog.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Blog List</p>
                            </a>
                        </li>
                        @endif
                        @if($permission->can('blog.create'))
                        <li class="nav-item">
                            <a href="{{ route('blog.create')}}" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>New Blog</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if($permission->can('comProfile.view') || $permission->can('comProfile.edit') || $permission->can('comProfile.delete'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Company Profile
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if($permission->can('comProfile.view'))
                        <li class="nav-item">
                            <a href="{{ route('companyprofile.index')}}" class="nav-link">
                                <i class="fa fa-bars nav-icon"></i>
                                <p>Company Profile List</p>
                            </a>
                        </li>
                        @endif
                    </ul>

                </li>
                @endif
            </ul>
        </nav>


        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
