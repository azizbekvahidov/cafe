<section class="sidebar">
    <div id="menu" role="navigation">
        <ul class="navigation">
            <li class="menu-dropdown-open-ul" {!! (request()->routeIs('products.index')) ||(request()->routeIs('measures.index')) || (request()->routeIs('categories.index')) || (request()->routeIs('menu.index')  ? 'class="active"' : '') !!}>
                <a href="#">
                    <i class="menu-icon fa fa-check-square"></i>
                    <span>Справочник</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li {!! (request()->routeIs('products.index') ? 'class="active"' : '') !!}>
                        <a href="{{ route('products.index') }}">
                            <i class="fa fa-fw fa-circle-thin"></i> Продукты
                        </a>
                    </li>
                    <li {!! (request()->routeIs('measures.index') ? 'class="active"' : '') !!}>
                        <a href="{{ route('measures.index') }}">
                            <i class="fa fa-fw fa-circle-thin"></i> Ед.измерения
                        </a>
                    </li>
                    <li {!! (request()->routeIs('categories.index') ? 'class="active"' : '') !!}>
                        <a href="{{ route('categories.index') }}">
                            <i class="fa fa-fw fa-circle-thin"></i> Категории
                        </a>
                    </li>
                    <li {!! (request()->routeIs('menu.index') ? 'class="active"' : '') !!}>
                        <a href="{{ route('menu.index') }}">
                            <i class="fa fa-fw fa-circle-thin"></i> Меню
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</section>
