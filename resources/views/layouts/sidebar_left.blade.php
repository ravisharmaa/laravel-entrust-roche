<aside id="sidebar_main">
    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="index-2.html" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="{{ asset('alt_air/assets/img/logo_main.png') }}" alt="" height="15" width="71"/>
                <img class="logo_light" src="{{ asset('alt_air/assets/img/logo_main_white.png') }}" alt="" height="15" width="71"/>
            </a>
            <a href="index-2.html" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="{{ asset('alt_air/assets/img/logo_main_small.png') }}" alt="" height="32" width="32"/>
                <img class="logo_light" src="{{ asset('alt_air/assets/img/logo_main_small_light.png') }}" alt="" height="32" width="32"/>
            </a>
        </div>
        <div class="sidebar_actions">
            <select id="lang_switcher" name="lang_switcher">
                <option value="gb" selected>English</option>
            </select>
        </div>
    </div>

    <div class="menu_section">
        <ul>
            <li class="current_section" title="Dashboard">
                <a href="{{url('/home')}}">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard</span>
                </a>
            </li>
            <li class="current_section" title="Dashboard">
                <a href="{{url('/users')}}">
                    <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                    <span class="menu_title">Users</span>
                </a>
            </li>
            <li class="current_section" title="Dashboard">
                <a href="{{url('/roles')}}">
                    <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                    <span class="menu_title">Roles</span>
                </a>
            </li>
            <li class="current_section" title="Dashboard">
                <a href="{{url('/permissions')}}">
                    <span class="menu_icon"><i class="material-icons">vpn_key</i></span>
                    <span class="menu_title">Permissions</span>
                </a>
            </li>

            <li title="Chats">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                    <span class="menu_title">Chats</span>
                </a>
                <ul>
                    <li><a href="page_chat.html">Regular Chat</a></li>
                    <li><a href="page_chat_small.html">Chatboxes</a></li>
                </ul>

            </li>
        </ul>
    </div>
</aside>