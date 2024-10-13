@foreach ($LEFT_MENU as $i => $menu)
    <div class="widgetPanel sportsMenu special" ng-class="{'collapse': !menu.{{ $i }}}">
        <div class="glyphIcon icon-widgetCollapse" title="Collapse the Widget Panel"></div>
        <div class="heading {{ $menu->getIcon() }} currentMain" title="Mọi môn thể thao"
            ng-click="menu.{{ $i }}=!menu.{{ $i }}">

            @if ($menu->getType() == 'menu')
                <div class="text">
                    {{ $menu->getName() }}
                </div>
                <span
                    ng-class="{'icon-arrowCircle-down': !menu.{{ $i }}, 'icon-arrowCircle-up': menu.{{ $i }}}" />
            @endif
            @if ($menu->getType() == 'link')
                <div class="text">
                    {{ $menu->getName() }}
                </div>
                <!--<span class="c-icon c-icon--foreign" />-->
            @endif
            @if ($menu->getType() == 'sabagame')
                <div class="text" onClick="openSabagame()">
                    {{ $menu->getName() }}
                </div>

                <script>
                    function getCookie(name) {
                        const value = `; ${document.cookie}`;
                        const parts = value.split(`; ${name}=`);
                        if (parts.length === 2) return parts.pop().split(';').shift();
                    }

                    function openSabagame(e) {
                        popupwindow('{{ env('SABAGAME_URL') }}?session=' + getCookie('laravel_session') + '&domain=' + window.location
                            .protocol +
                            '//' + window.location.host, 800, 500)

                    }

                    function popupwindow(url, title, w, h) {
                        var left = (screen.width / 2) - (w / 2);
                        var top = (screen.height / 2) - (h / 2);
                        return window.open(url, title,
                            'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' +
                            w + ', height=' + h + ', top=' + top + ', left=' + left);
                    }
                </script>
            @endif

        </div>
        <?php
        $sports = $menu->getSports();
        $sports_idselected = $sports ? $menu->getSports()->getIdSelected() : -1;
        $sports_items = $sports ? $menu->getSports()->getItems() : [];
        $sports_selected = $sports ? $sports_items[$sports_idselected] : null;
        
        $show_list = null;
        $index = -1;
        
        if ($menu->getSubMenu() != null) {
            if (count($menu->getSubMenu()) > 10) {
                $show_list = array_chunk($menu->getSubMenu(), 6);
                $index = 0;
            } else {
                $show_list = [0 => $menu->getSubMenu()];
                $index = 0;
            }
        }
        
        ?>
        @if ($menu->getType() && $menu->getType() != 'link')
            <div class="contentArea">
                <div class="nav-widgetPanel  icon-sportsMenu-today threeColum">
                    @foreach ($sports_items as $y => $submenu)
                        <div class="item {{ $sports_idselected == $y ? 'active' : '' }} icon-sportsMenu-early"
                            title="{{ $submenu->getName() }}"><span class="itemContent"><span
                                    class="text">{{ $submenu->getName() }}</span></span></div>
                        <!--<div class="item  icon-sportsMenu-live" title="Trực tiếp">-->
                        <!--	<span class="itemContent">-->
                        <!--		<span class="text">Trực tiếp</span>-->
                        <!--		<div class="alertArea">-->
                        <!--			<div class="alert">68</div>-->
                        <!--		</div>-->
                        <!--	</span>-->
                        <!--</div>-->
                    @endforeach
                </div>
                <ul class="category today">
                    @if ($sports_selected != null)
                        <li class="category-sportList icon-sport1">
                            <div class="category-sportList-container">
                                <div class="category-sportList-main"
                                    title="{{ $sports_selected->getSubMenu()->getTop()->getName() }}">
                                    <span class="sportName">
                                        {{ $sports_selected->getSubMenu()->getTop()->getName() }}
                                    </span>
                                    <span class="amount">
                                        ({{ $sports_selected->getSubMenu()->getTop()->getValue() }})
                                    </span>
                                </div>
                                <div class="floatRight">
                                    @if ($sports_selected->getSubMenu()->getTop()->getIsLive())
                                        <button class="flexible accent smallBtn btn-live">
                                            Trực tiếp
                                        </button>
                                    @endif
                                </div>
                            </div>
                            <ul class="category-sub">
                                @foreach ($sports_selected->getSubMenu()->getSports() as $y => $submenu)
                                    <li class="category-sub-list">
                                        <a href="{{ $submenu->getLink() }}"><span class="betTypeName" style="
                                            float: left;
                                            color: #545454;
                                        " title="{{ $submenu->getName() }}">{{ $submenu->getName() }}</span>
                                            <span class="amount " style="
                                        float: left;
                                        color: #545454;
                                    ">({{ $submenu->getValue() }})</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                    @if ($index >= 0)
                        @foreach ($show_list[$index] as $y => $submenu)
                            <li class="category-sportList {{ $submenu->getIcon() }}">
                                <div class="category-sportList-container">
                                    <div class="category-sportList-main" title="{{ $submenu->getName() }}">
                                        <a href="{{ $submenu->getLink() }}">
                                            <span class="sportName" style="
                                            float: left;
                                            color: #545454;
                                        " title="{{ $submenu->getName() }}">{{ $submenu->getName() }}</span>
                                            @if ($submenu->getValue() != '' && $submenu->getValue() != null)
                                                <span class="amount" style="color: #545454;">({{ $submenu->getValue() }})</span>
                                            @endif
                                        </a>
                                    </div>
                                    @if ($submenu->getIsNew())
                                        <div class="floatRight"><span class="smallBtn flexible icon-new">Mới</span>
                                        </div>
                                    @else
                                        <div class="floatRight">
                                            @if ($submenu->getIsLive())
                                                <button class="flexible accent btn-live smallBtn">Trực tiếp</button>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                        @if ($index < count($show_list) - 1)
                            <button class="category-sportList show-more">
                                <span>Xem thêm</span>
                                <span class="icon-arrow-down">

                                </span>
                            </button>
                        @endif
                    @endif
                </ul>
            </div>
        @endif
    </div>
@endforeach
