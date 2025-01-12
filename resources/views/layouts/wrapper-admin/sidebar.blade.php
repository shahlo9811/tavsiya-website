<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary d-flex flex-column flex-shrink-0">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
         aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Kompaniya nomi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                       href="{{ route('admin.main.index') }}">
                        <svg class="bi">
                            <use xlink:href="#house-fill"/>
                        </svg>
                        Asosiy sahifalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('admin.post.index') }}">
                        <svg class="bi">
                            <use xlink:href="#file-earmark"/>
                        </svg>
                        Potslar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2"
                       href="{{ route('admin.category.index') }}">
                        <svg class="bi">
                            <use xlink:href="#cart"/>
                        </svg>
                        Kategoriyalar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('admin.user.index') }}">
                        <svg class="bi">
                            <use xlink:href="#people"/>
                        </svg>
                        Foydalanuvchilar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('admin.tag.index') }}">
                        <svg class="bi">
                            <use xlink:href="#graph-up"/>
                        </svg>
                        Ediketlar
                    </a>
                </li>
            </ul>

{{--            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">--}}
{{--                <span>Saved reports</span>--}}
{{--                <a class="link-secondary" href="#" aria-label="Add a new report">--}}
{{--                    <svg class="bi">--}}
{{--                        <use xlink:href="#plus-circle"/>--}}
{{--                    </svg>--}}
{{--                </a>--}}
{{--            </h6>--}}
{{--            <ul class="nav flex-column mb-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link d-flex align-items-center gap-2" href="#">--}}
{{--                        <svg class="bi">--}}
{{--                            <use xlink:href="#file-earmark-text"/>--}}
{{--                        </svg>--}}
{{--                        Current month--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link d-flex align-items-center gap-2" href="#">--}}
{{--                        <svg class="bi">--}}
{{--                            <use xlink:href="#file-earmark-text"/>--}}
{{--                        </svg>--}}
{{--                        Last quarter--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link d-flex align-items-center gap-2" href="#">--}}
{{--                        <svg class="bi">--}}
{{--                            <use xlink:href="#file-earmark-text"/>--}}
{{--                        </svg>--}}
{{--                        Social engagement--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link d-flex align-items-center gap-2" href="#">--}}
{{--                        <svg class="bi">--}}
{{--                            <use xlink:href="#file-earmark-text"/>--}}
{{--                        </svg>--}}
{{--                        Year-end sale--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">

                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('main.index') }}">
                        <svg class="bi">
                            <use xlink:href="#file-earmark-text"/>
                        </svg>
                        Blogning bosh sahifasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2"
                       href="{{ route('personal.main.index') }}">
                        <svg class="bi">
                            <use xlink:href="#people"/>
                        </svg>
                        Profil
                    </a>
                </li>
                <li class="nav-item">
    <form class="nav-link d-flex align-items-center gap-2" action="{{ route('logout') }}" method="POST" style="display: flex; align-items: center; gap: 0.5rem; background: none; border: none; padding: 0; cursor: pointer;">
        @csrf
        <button type="submit" style="display: flex; align-items: center; gap: 0.5rem; background: none; border: none; color: inherit; font: inherit; cursor: pointer;">
            <svg class="bi">
                <use xlink:href="#door-closed"/>
            </svg>
            Tizimdan chiqish
        </button>
    </form>
</li>

            </ul>
        </div>
    </div>
</div>
