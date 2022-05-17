<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('about_us_access')
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.requested-products.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/requested-products") || request()->is("admin/requested-products/*") ? "c-active" : "" }}">
                <i class="fa fa-line-chart c-sidebar-nav-icon">

                </i>
                {{ __('Requested Product') }}
            </a>
        </li>
        @endcan
        @can('request_order_access')
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.request-orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/request-orders") || request()->is("admin/request-orders/*") ? "c-active" : "" }}">
                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.requestOrder.title') }}
            </a>
        </li>
        @endcan

        @can('about_us_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-info-circle c-sidebar-nav-icon">

                    </i>
                    {{ __('About Taraf') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('about_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.abouts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/abouts") || request()->is("admin/abouts/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">
            
                                </i>
                                {{ trans('cruds.about.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('vision_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.visions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/visions") || request()->is("admin/visions/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-eye c-sidebar-nav-icon">
            
                            </i>
                            {{ trans('cruds.vision.title') }}
                        </a>
                    </li>
                    @endcan
        @can('mission_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.missions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/missions") || request()->is("admin/missions/*") ? "c-active" : "" }}">
                    <i class="fa-fw fab fa-font-awesome-flag c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.mission.title') }}
                </a>
            </li>
        @endcan
        @can('value_access')
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.values.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/values") || request()->is("admin/values/*") ? "c-active" : "" }}">
                <i class="fa-fw fas fa-angle-double-up c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.value.title') }}
            </a>
        </li>
        @endcan
        @can('goal_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.goals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/goals") || request()->is("admin/goals/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-bullseye c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.goal.title') }}
                </a>
            </li>
        @endcan
        @can('social_media_link_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.social-media-links.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/social-media-links") || request()->is("admin/social-media-links/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.socialMediaLink.title') }}
                </a>
            </li>
        @endcan
        @can('contact_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.contacts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contact.title') }}
                </a>
            </li>
        @endcan
                </ul>
            </li>
        @endcan
        @can('service_access')
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.services.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/services") || request()->is("admin/services/*") ? "c-active" : "" }}">
                <i class="fa-fw fas fa-hands-helping c-sidebar-nav-icon">
                    
                </i>
                {{ __('Our Services') }}
            </a>
        </li>
        @endcan
        @can('about_us_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                    </i>
                    {{ __('Our Products') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    
                    @can('category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-tags c-sidebar-nav-icon">
            
                                </i>
                                {{ trans('cruds.category.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('product_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.products.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cart-arrow-down c-sidebar-nav-icon">
            
                                </i>
                                {{ trans('cruds.product.title') }}
                            </a>
                        </li>
                    @endcan
                
                </ul>
        </li>
        @endcan
        
        @can('gallery_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.galleries.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/galleries") || request()->is("admin/galleries/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-images c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.gallery.title') }}
                </a>
            </li>
        @endcan
        @can('client_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.clients.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('Clients/Partners') }}
                </a>
            </li>
        @endcan
        @can('post_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.posts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/posts") || request()->is("admin/posts/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-paperclip c-sidebar-nav-icon">

                    </i>
                    {{ __('Blog') }}
                </a>
            </li>
        @endcan
        @can('user_management_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.userManagement.title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @can('permission_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.permission.title') }}
                        </a>
                    </li>
                @endcan
                @can('role_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.role.title') }}
                        </a>
                    </li>
                @endcan
                @can('user_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                            </i>
                            {{ trans('cruds.user.title') }}
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
        @endcan
        @can('about_us_access')
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-shopping-cart c-sidebar-nav-icon">

                    </i>
                    {{ __('Settings') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('setting_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.settings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/settings") || request()->is("admin/settings/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-cog c-sidebar-nav-icon">
        
                            </i>
                            {{ __('Website Settings') }}
                        </a>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif


                </ul>
        </li>
        @endcan
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>