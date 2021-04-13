<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">

        {{-- Dashboard Link --}}
        {{-- @if (auth('admin')->user()->can('browse dashboard')) --}}
            <li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
                <a href="{{ route('dashboard.index') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">@lang('aside-menu.dashboard')</span>
                            <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span>
                        </span>
                    </span>
                </a>
            </li>
        {{-- @endif --}}
        <li class="m-menu__section ">
            <h4 class="m-menu__section-text">@lang('aside-menu.featured')</h4>
            <i class="m-menu__section-icon flaticon-more-v2"></i>
        </li>

        {{-- Admin Link --}}
        {{-- @if (auth('admin')->user()->can('browse admin')) --}}
            <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.admins')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">@lang('aside-menu.admins')</span></span></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('admin.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.admins')</span></a></li>
                        <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('admin.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_admin')</span></a></li>
                    </ul>
                </div>
            </li>
        {{-- @endif --}}

        {{-- User Link --}}
        <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.users')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Users</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('user.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.users')</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('user.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_user')</span></a></li>
                </ul>
            </div>
        </li>

        {{-- Category Link --}}
        <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.categories')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Categories</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('category.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.categories')</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('category.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_category')</span></a></li>
                </ul>
            </div>
        </li>

        {{-- Slider Link --}}
        <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.sliders')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Sliders</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('slider.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.sliders')</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('slider.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_slider')</span></a></li>
                </ul>
            </div>
        </li>

        {{-- Color Link --}}
        <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.colors')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">@lang('aside-menu.colors')</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('color.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.colors')</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('color.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_color')</span></a></li>
                </ul>
            </div>
        </li>

        {{-- Size Link --}}
        <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.sizes')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">@lang('aside-menu.sizes')</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('size.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.sizes')</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('size.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_size')</span></a></li>
                </ul>
            </div>
        </li>

        {{-- Brand Link --}}
        <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.brands')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">@lang('aside-menu.brands')</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('brand.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.brands')</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('brand.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_brand')</span></a></li>
                </ul>
            </div>
        </li>

        {{-- Product Link --}}
        <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.products')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">@lang('aside-menu.products')</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('product.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.products')</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('product.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_product')</span></a></li>
                </ul>
            </div>
        </li>

        {{-- Coupon Link --}}
        <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.coupons')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">@lang('aside-menu.coupons')</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('coupon.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.coupons')</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('coupon.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_coupon')</span></a></li>
                </ul>
            </div>
        </li>

        {{-- Order Link --}}
        <li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
            <a href="{{ route('order.index') }}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-line-graph"></i>
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">@lang('aside-menu.orders')</span>
                        <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span>
                    </span>
                </span>
            </a>
        </li>

        {{-- Role Link --}}
        <li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">@lang('aside-menu.roles')</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu " m-hidden-height="80" style="display: none; overflow: hidden;"><span class="m-menu__arrow"></span>
                <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Roles</span></span></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('role.index') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.roles')</span></a></li>
                    <li class="m-menu__item " aria-haspopup="true"><a href="{{ route('role.create') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">@lang('aside-menu.add_role')</span></a></li>
                </ul>
            </div>
        </li>

        {{-- Setting Link --}}
        <li class="m-menu__item " aria-haspopup="true">
            <a href="{{ route('setting.index') }}" class="m-menu__link ">
                <i class="m-menu__link-icon flaticon-line-graph"></i>
                <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">@lang('aside-menu.setting')</span>
                    </span>
                </span>
            </a>
        </li>

    </ul>
</div>
