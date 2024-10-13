
<style>
.c-modal {
    --c-av-modal-heading-text: #fff;
    --c-av-modal-heading-bg: linear-gradient(to bottom, #7591c1 0%, #7591c1 100%);
    --c-av-modal-heading-btn-hover-bg: #879fc9;
    --c-av-modal-heading-icon: #adbed6;
    --c-av-modal-heading-icon-hover: #fff;
    --c-av-modal-heading-icon-border: #526fa0;
    --c-av-modal-heading-img: linear-gradient(to bottom, #7591c1 0%, #7591c1 100%);
    --c-av-modal-text: #545454;
    --c-av-modal-bg: #ececec;
    --c-av-modal-bg2: #ececec;
    --c-av-modal-promo-bg: #545454;
    --c-av-modal-promo-text: #fff;
    --c-av-modal-result-primary: #5574a7;
    --c-av-modal-result-title-text: #fff;
    --c-av-modal-result-title-bg: #a3a3a3;
    --c-av-modal-result-title-border: #cdcdcd;
    --c-av-modal-result-league-bg: #b1b1b1;
    --c-av-modal-result-league-border: #a3a3a3;
    --c-av-modal-result-row-bg: #fff;
}
.c-modal {
    display: flex;
    align-items: center;
    flex-direction: column;
    margin: 0 auto;
    width: 25%;
    min-width: 24rem;
    max-width: 60rem;
    border-radius: var(--c-av-border-radius);
    box-shadow: var(--c-av-box-shadow);
    position: fixed;
    top: 30vh;
    left: 0;
    right: 0;
}
.c-modal {
    z-index: 10;
}
.c-modal__heading {
    display: flex;
    justify-content: start;
    align-items: center;
    width: 100%;
    height: 2rem;
    max-height: 2rem;
    min-height: 2rem;
    padding-left: 0.5rem;
    border-radius: var(--c-av-border-radius) var(--c-av-border-radius) 0 0;
    position: relative;
    color: var(--c-av-modal-heading-text);
    background-color: var(--c-av-modal-heading-bg);
    background: var(--c-av-modal-heading-img);
}
.c-icon {
    flex: 0 0 auto;
    display: inline-flex;
    position: relative;
    align-self: center;
}
.c-icon {
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    text-decoration: none;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.c-modal__heading .c-text {
    padding-right: 0.5rem;
    margin-right: auto;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 1.3;
    overflow: hidden;
}
.c-icon+.c-text {
    margin-left: 0.25rem;
}
.c-text {
    word-break: break-word;
    font-family: var(--c-av-body-font-family);
}
.c-modal__heading .c-text {
    padding-right: 0.5rem;
    margin-right: auto;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 1.3;
    overflow: hidden;
}
.c-modal__container {
    width: 100%;
    padding: 0.25rem;
    border-radius: 0 0 3px 3px;
    color: var(--c-av-modal-text);
    background-color: var(--c-av-modal-bg);
    position: relative;
}
.c-modal__content {
    padding: 0 2rem;
}
.c-modal .c-text-strong {
    font-weight: 500;
    padding: 0.25rem 0;
    color: #000000;
}
.c-modal__content .c-btn-group {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
}
.c-modal__content .c-btn {
    min-width: 33%;
    padding: 0.325rem 0;
}
.c-btn {
    --c-av-bettype-btn-help-text: #fff;
}
.c-btn {
    --c-av-btn-default-text: #545454;
    --c-av-btn-default-bg: #cdcdcd;
    --c-av-btn-default-hover-bg: silver;
    --c-av-btn-default-img: none;
    --c-av-btn-default-hover-img: none;
    --c-av-btn-default-hover-filter: none;
    --c-av-btn-default-border-color: #cdcdcd;
    --c-av-btn-primary-text: #fff;
    --c-av-btn-primary-bg: transparent;
    --c-av-btn-primary-hover-bg: transparent;
    --c-av-btn-primary-img: linear-gradient(to bottom, #7591c1 0%, #5574a7 100%);
    --c-av-btn-primary-hover-img: linear-gradient(to bottom, #879fc9 0%, #6582b1 100%);
    --c-av-btn-primary-hover-filter: none;
    --c-av-btn-primary-border-color: transparent;
    --c-av-btn-secondary-text: #fff;
    --c-av-btn-secondary-bg: transparent;
    --c-av-btn-secondary-hover-bg: #ff942b;
    --c-av-btn-secondary-img: linear-gradient(to bottom, #ff942b 0%, #f77a00 100%);
    --c-av-btn-secondary-hover-img: none;
    --c-av-btn-secondary-hover-filter: none;
    --c-av-btn-secondary-border-color: transparent;
    --c-av-btn-bet-text: #fff;
    --c-av-btn-bet-bg: transparent;
    --c-av-btn-bet-hover-bg: #ff942b;
    --c-av-btn-bet-img: linear-gradient(to bottom, #ff942b 0%, #f77a00 100%);
    --c-av-btn-bet-hover-img: var(--c-av-btn-bet-img);
    --c-av-btn-bet-hover-filter: brightness(110%);
    --c-av-btn-bet-border-color: transparent;
    --c-av-btn-add-parlay-text: #fff;
    --c-av-btn-add-parlay-bg: transparent;
    --c-av-btn-add-parlay-hover-bg: transparent;
    --c-av-btn-add-parlay-img: linear-gradient(to bottom, #7591c1 0%, #5574a7 100%);
    --c-av-btn-add-parlay-hover-img: var(--c-av-btn-add-parlay-img);
    --c-av-btn-add-parlay-hover-filter: brightness(110%);
    --c-av-btn-add-parlay-border-color: transparent;
    --c-av-btn-disable-text: #a3a3a3;
    --c-av-btn-disable-bg: #cdcdcd;
    --c-av-btn-messange-border-color: transparent;
    --c-av-btn-focus-shadow-outline: rgba(0,0,0,0.25);
    --c-av-btn-focus-shadow-inline: #fff;
    --c-av-btn-clear-text: #545454;
    --c-av-btn-clear-hover-text: #fff;
    --c-av-btn-clear-hover-bg: #7c7c7c;
    --c-av-btn-fastmarket-text: #fff;
    --c-av-btn-fastmarket-bg: #b53f39;
    --c-av-btn-fastmarket-border: transparent;
    --c-av-btn-fastmarket-hover-text: #fff;
    --c-av-btn-fastmarket-hover-bg: #ca5d57;
    --c-av-btn-time-machine-text: #fff;
    --c-av-btn-time-machine-bg: transparent;
    --c-av-btn-time-machine-bg-img: linear-gradient(to bottom, #7591c1 0%, #5574a7 100%);
    --c-av-btn-time-machine-border: transparent;
    --c-av-btn-time-machine-hover-text: #fff;
    --c-av-btn-time-machine-hover-bg: transparent;
    --c-av-btn-time-machine-hover-bg-img: linear-gradient(to bottom, #879fc9 0%, #6582b1 100%);
    --c-av-btn-music-tv-icon-video-text: #fff;
    --c-av-btn-music-tv-icon-video-bg: #b53f39;
    --c-av-btn-more-lines-text: #545454;
}
.c-btn--primary {
    color: var(--c-av-btn-primary-text);
    background-color: var(--c-av-btn-primary-bg);
    background-image: var(--c-av-btn-primary-img);
    border-color: var(--c-av-btn-primary-border-color, transparent);
}
.c-btn {
    --c-av-btn-border-width: 1px;
    flex: 0 0 auto;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 0.125rem 0.5rem;
    min-height: 1.375rem;
    line-height: 1;
    border-width: var(--c-av-btn-border-width);
    border-color: transparent;
    border-radius: var(--c-av-border-radius);
    outline: none;
    cursor: pointer;
    transition: .2s ease;
}
</style>
<div id="popNewversion" style="display: none;">
	<div id="popupPanelx" style="display: none" class="popupPanel-small-center promo">
		<div class="heading-noMoving" style="display: none;">
			<div class="text">title</div>
		</div>
		<div class="contentArea welcomeNewVersion">
			<div data-reactroot="" id="welv2">
				<h1>Chào mừng bạn đến trải nghiệm phiên bản mới của chúng tôi!</h1>
				<ul>
					<li class="icon-tick">Cập nhật Tỷ lệ cược liên tục bởi công nghệ Push</li>
					<li class="icon-tick">Cược nhanh</li>
					<li class="icon-tick">Thiết Kế Web Có Độ Phản Hồi Cao</li>
					<li class="icon-tick">Nhiều hơn nữa…</li>
				</ul>
				<div class="btnArea">
					<div onclick="javascript:showStep2()" id="flatBtn" class="flatBtn">TIẾP THEO</div>
					<div class="flatBtn secondary" onclick="javascript:HidePromoPage()">BỎ QUA</div>
					<a class="tertiary" onclick="javascript:PromoDoNotShowAgain()">Không hiển thị nữa</a>
				</div>
			</div>
		</div>
	</div>


	<div id="popupPanel2x" class="popupPanel-small-center promo" style="display: none;">
		<div class="heading-noMoving" style="display: none;">
			<div class="text">title</div>
		</div>
		<div class="contentArea slides">
			<div data-reactroot="">
				<div class="slides-container">
					<div class="slides-control">
						<div class="slides-control" style="width: 580px; height: 450px;">
							<div id="promo1" name="howtouse" class="slides-control-item step step1" style="width: 580px; height: 450px; top: 0px; left: 0px;">
								<div class="imgBox">
									<div class="txt step1-left" title="Tự động làm mới">Tự động làm mới</div>
									<div class="txt step1-right" title="Làm mới thủ công">Làm mới thủ công</div>
								</div>
								<div class="txtBox">
									<h2>Cập nhật Tỷ lệ cược liên tục bởi công nghệ Push</h2>
									<p>Bạn luôn được cập nhật tỷ lệ cược mới nhất mà không cần nhấn nút làm mới trang..</p>
								</div>
							</div>
							<div id="promo2" name="howtouse" class="slides-control-item step step2" style="width: 580px; height: 450px; top: 0px; left: 0px; display: none;">
								<div class="imgBox">
									<div class="step3-left" title="Đặt cược">Đặt cược</div>
									<div class="step3-right" title="Max">Max</div>
								</div>
								<div class="txtBox">
									<h2>Cược nhanh</h2>
									<p>Tiện ích Cược Nhanh xuất hiện nhanh gọn và trực quan, giúp đơn giản hóa thao tác và dể dàng hơn cho quá trình đặt cược.</p>
								</div>
							</div>
							<div id="promo3" name="howtouse"  class="slides-control-item step step3" style="width: 580px; height: 450px; top: 0px; left: 0px; display: none;">
								<div class="imgBox">
									<div class="txt step4-left" title="Độ phân giải cao">Độ phân giải cao</div>
									<div class="txt step4-right" title="Độ phân giải thấp">Độ phân giải thấp</div>
								</div>
								<div class="txtBox">
									<h2>Thiết Kế Web Có Độ Phản Hồi Cao</h2>
									<p>Trải nghiệm bố cục màn hình có tính linh hoạt cao để thích ứng với kích thước màn hình trình duyệt ưa thích của bạn.</p>
								</div>
							</div>
						</div>
						<div class="slides-pagination">
							<a id="spPrev" onclick="javascript:goToPre()" class="slides-btn-prev" style="display: none;"></a>
							<a id="sp1" onclick="javascript:goToStep(1)" name="spBtns" class="slides-pagination-item active"></a>
							<a id="sp2" onclick="javascript:goToStep(2)"  name="spBtns" class="slides-pagination-item"></a>
							<a id="sp3" onclick="javascript:goToStep(3)" name="spBtns" class="slides-pagination-item"></a>
							<a id="spNext" onclick="javascript:goToNext()" class="slides-btn-next"></a>
						</div>
					</div>
				</div>
				<div class="btnArea">
					<div id="btnStart" class="flatBtn" onclick="javascript:PromoDoNotShowAgain()" title="BẮT ĐẦU BÂY GIỜ">BẮT ĐẦU BÂY GIỜ</div>
					<div id="btnSkip" style="display: block;" onclick="javascript:HidePromoPage()" class="flatBtn secondary" title="BỎ QUA">BỎ QUA</div>
					<a class="tertiary" onclick="javascript:PromoDoNotShowAgain()">Không hiển thị nữa</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="overlay-alertMessage" style="display: none;">
    <div id="popupPanel" class="c-modal">
        <div class="c-modal__heading"><i class="c-icon"></i>
            <span class="c-text" title="Thông Báo">Thông Báo</span>
        </div>
        <div class="c-modal__container">
            <div class="c-modal__content">
                <div class="c-text-strong">Phiên bản này được thiết kế để sử dụng cho máy tính để bàn. Nếu bạn truy cập trên các thiết bị khác, một số hành vi ngoài mong đợi có thể xuất hiện.
                </div>
                <div class="c-btn-group">
                    <div tabindex="0" class="c-btn c-btn--primary" title="OK">OK</div>
                </div>
            </div>
        </div>
        <div id="extendOverlay">
            
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('.c-btn--primary').click(function () {
            $(this).closest('.overlay-alertMessage').removeClass('overlay').html('');
        });
    });

	checkMain();
	var step = 1;
	function checkMain() {
		if (typeof(Storage) !== "undefined") {
			init();
		}
	}

	function init(argument) {
		if (!checkIfNew()) {
			showStep1();
		}
		if(mobileAndTabletcheck()) {
		    
		    const isPopup = localStorage.getItem('isPopupTablet');
		    console.log('isPopup = ', isPopup);
		    if(isPopup === null) {
		        console.log('xxxx');
		        $('.overlay-alertMessage').addClass('overlay').show();
		        localStorage.setItem('isPopupTablet', true);
		    }
		}
	}

	function showStep1() {
		$('#popNewversion').show();
	}

	function goToStep(key) {
		step = key;
		$('.slides-control .step').hide();
		$('.slides-control .step'+key).show();
		$('.slides-pagination a').removeClass('active');
		$('.slides-pagination #sp'+key).addClass('active');
		$('.slides-pagination a').show();
		if (step == 1) {
			$('#spPrev').hide();
		}
		if (step == 3) {
			$('#spNext').hide();
			$('#btnStart').show();
			$('#btnSkip').hide();
		} else {
			$('#btnStart').hide();
			$('#btnSkip').show();
		}
	}

	function goToNext() {
		if (step == 3) {
			return;
		}
		step++;
		goToStep(step);
	}

	function goToPre() {
		if (step == 1) {
			return;
		}
		step--;
		goToStep(step);
	}

	function showStep2() {
		$('#popupPanel').hide();
		$('#popupPanel2').show();
	}

	function checkIfNew() {
		return localStorage.getItem('KEY_VERSION_V2') || sessionStorage.getItem('KEY_VERSION_V2');
	}

	function PromoDoNotShowAgain() {
		localStorage.setItem('KEY_VERSION_V2', 'DONTSHOW');
		$('#popNewversion').hide();
	}

	function HidePromoPage(argument) {
		sessionStorage.setItem('KEY_VERSION_V2', 'DONTSHOW');
		$('#popNewversion').hide();
	}

	function mobileAndTabletcheck() {
		var check = false;
		(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
		return check;
	};
</script>
