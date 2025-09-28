
<!-- MAIN-SIDEBAR -->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<div class="sticky">
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidemenu">
            <ul class="side-menu">
                <li class="side-item side-item-category">Main</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('members.index') }}">
                        <i class="fas fa-users fs-6 side-menu__icon"></i>
                        <span class="side-menu__label">Members</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('promotions.index') }}">
                        <i class="fas fa-tags fs-6 side-menu__icon"></i>
                        <span class="side-menu__label">Promotions</span>
                    </a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('member-rewards.index') }}">
                        <i class="fas fa-award fs-6 side-menu__icon"></i>
                        <span class="side-menu__label">Member Rewards</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>
