   <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
       
          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{ route('merchant.profile') }}" class="menu-link">
                <div data-i18n="Analytics">Merchant Profile</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('merchant.menus') }}" class="menu-link">
                <div data-i18n="Analytics">Menu</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('customer') }}" class="menu-link">
                <div data-i18n="Analytics">Customer</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ route('merchant.orders') }}" class="menu-link">
                <div data-i18n="Analytics">Order</div>
              </a>
            </li>
            <li class="menu-item">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
            </li>
          </ul>
        </aside>