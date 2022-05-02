<!-- Side Bar Inc -->
<nav>
    <a href="#0" aria-label="forecastr logo" class="logo">
        <svg width="140" height="49">
            <use xlink:href="#logo"></use>
        </svg>
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
        <svg width="20" height="20" aria-hidden="true">
            <use xlink:href="#down"></use>
        </svg>
    </button>
    <ul class="admin-menu">
        <li class="menu-heading">
            <h3>Admin</h3>
        </li>
        <li>
            <a href="{{ route('dashboard') }}">
                <svg>
                    <use xlink:href="#pages"></use>
                </svg>
                <span>Dashboard</span>
            </a>
        </li>
        
        <li>
            <a href="{{ route('list_events') }}">
                <svg>
                    <use xlink:href="#trends"></use>
                </svg>
                <span>Events</span>
            </a>
        </li>

        <li>
            <a href="{{ route('view_org') }}">
                <svg>
                    <use xlink:href="#users"></use>
                </svg>
                <span>Organisation</span>
            </a>
        </li>
        <!-- <li>
            <a href="#0">
                <svg>
                    <use xlink:href="#collection"></use>
                </svg>
                <span>Collection</span>
            </a>
        </li> -->
        <!-- <li>
            <a href="#0">
                <svg>
                    <use xlink:href="#comments"></use>
                </svg>
                <span>Comments</span>
            </a>
        </li> -->
        <!-- <li>
            <a href="#0">
                <svg>
                    <use xlink:href="#appearance"></use>
                </svg>
                <span>Appearance</span>
            </a>
        </li> -->
        <!-- <li class="menu-heading">
            <h3>Settings</h3>
        </li> -->
        <!-- <li>
            <a href="#0">
                <svg>
                    <use xlink:href="#settings"></use>
                </svg>
                <span>Settings</span>
            </a>
        </li> -->
        <!-- <li>
            <a href="#0">
                <svg>
                    <use xlink:href="#options"></use>
                </svg>
                <span>Options</span>
            </a>
        </li> -->
        <!-- <li>
            <a href="#0">
                <svg>
                    <use xlink:href="#charts"></use>
                </svg>
                <span>Charts</span>
            </a>
        </li> -->
        <li>
            <div class="switch">
                <input type="checkbox" id="mode" checked>
                <label for="mode">
                    <span></span>
                    <span>Dark</span>
                </label>
            </div>
            <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                <svg aria-hidden="true">
                    <use xlink:href="#collapse"></use>
                </svg>
                <span>Collapse</span>
            </button>
        </li>
    </ul>
</nav>
<!-- End Side Bar Inc -->
