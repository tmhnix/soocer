<html lang="en">
@include('admin/layouts/meta')
<body>
    <div id="page-popup" class="modal fade hidden" role="dialog" aria-labelledby="myModalLabel"
        style="opacity: 1; overflow: visible;">
        <div class="modal-dialog ex-modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="icon icon-close close" data-dismiss="modal" aria-label="Đóng"><span
                            aria-hidden="true"></span></button>
                    <h4 class="modal-title" id="result-detail-title"><span class="popup-title" id="popup-title"></span>
                    </h4>
                </div>
                <div class="modal-body">
                    <iframe frameborder="0" allowtransparency="true" marginheight="0" marginwidth="0" scrolling="auto"
                        id="popup-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade message-modal" id="userMessageModal" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body" id="userMessageModalBody">
                    <button type="button" class="icon icon-close close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"></span></button>
                    <div id="msg-content">
                        <p class="not-shown-message">Dear Valued Customer: [GDG] Temporarily removed from the Website
                            until further Notice. Sorry for the inconvenience caused. </p>
                    </div>
                    <a class="link hide showmore-container">Thêm</a>
                    <a class="link hide showless-container">Rút gọn</a>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layouts.menu')
    <!-- @yield('menu') -->
    <div class="content-wrapper" id="content-wrapper">
        <!-- Searchbar for mobile -->
        <div class="top-search-bar">
            <span class="icon-search"></span>
            <input type="text" class="top-search-input typeahead" placeholder="Tài khoản" data-provide="typeahead"
                autocomplete="off">
            <span class="icon-close"></span>
        </div>

        @include('admin.layouts.head')

        <main class="content" id="content" data-default-url="/portal/agentHome">
            @yield('content')
        </main>
        <div class="float-section">
            <div class="progress-box hide" id="progress-box" data-toggle="modal">
                <span class="icon-progress"></span>
                <span class="txt-progress">Đang xử lý dữ liệu.</span>
            </div>
        </div>
    </div>
    @include('admin.layouts.bottom')
</body>

</html>