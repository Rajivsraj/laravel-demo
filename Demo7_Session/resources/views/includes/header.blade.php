<header>
    <div id="wrap">
        <div class="logo"><img src="{{ url('assets/images/logo.png') }}" border="0"></div>
        <div class="topmenu">
            <ul>
                <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li><a href="change-password.html">Change Password</a>&nbsp;|</li>
                @if (session('login_username'))
                    <li><a href="change-password.html">{{ session('login_username') }}</a>&nbsp;|</li>
                @endif

                <li><a href="{{ route('name_logout') }}"><img src="{{ url('assets/images/logout.png') }}" width="16"
                            height="16" border="0" align="absmiddle">&nbsp;&nbsp;Logout</a>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</header>
<nav>
    <ul id="qm0" class="qmmc">
        <li><a href="admin.html" class="qmactive">Dashboard</a></li>
        <li><a href="#">Product</a>
            <ul>
                <li><a href="{{route('name_main_cat_list')}}">Add Category</a></li>
                <li><a href="{{route('name_list_sub_category')}}">Add Sub Category</a></li>

                <li><a href="product.html">Add Product</a></li>
            </ul>
        </li>
        <!-- <li><a href="#">CCTV</a>
      <ul>
      <li><a href="product-brand.html">Add Brand</a></li>
      <li><a href="cctv.html">Add Product</a></li>
      </ul>
  </li> -->


    </ul>
</nav>
