<div id="PopDiv" ng-show="show" style="display: inline; width: 640px; position: absolute; visibility: visible; z-index: 1000; top: 50px; left: 50px;">
	<div class="popupW">
        <div id="PopTitle" class="popupWTitle" style="cursor: move;">
        	<span>
                <div class="popWIcon"></div>
                <div id="PopTitleText" class="popWTitleContain">Chọn Giải Đấu</div>
                <div id="PopCloser" ng-click="closeLeague()" class="popWClose" title="ĐÓNG"></div>
            </span>
        </div>
        <div id="oPopContainer" class="popWContain"><div class="popWTableArea">
            <div class="popWCheckAll">
                <input id="chkLFAll" name="LF" type="checkbox" value="0" onclick="checkAll();">Kiểm Tra Tất Cả	
                <span style="display: "><input id="chkSave" name="chkSave" type="checkbox" value="0"> Remember My League</span>
                <div class="popWCheckBtn">
                    <a href="#" name="Submit" class="button mark" onclick="go();"><span>Truy Cập</span></a>
                    <a href="#" name="cancel" class="button" ng-click="closeLeague()"><span>Hủy</span></a> 
                </div>
            </div>
            <div id="SportArea_1" class="popWBlueArea">
                <div class="header">
                    <span class="icon" onclick="SportControl(1);" style="display:block;"></span>
                    <input id="chkSport_1" type="checkbox" style="display:none;" onclick="checkAllBySport(1);" name="chkSport_1"><span class="title" onclick="SportControl(1);">Bóng đá</span>
                </div>
                <div class="content">
                    <div class="line"></div>
                    <table class="popWSelectTab" width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>
                        @foreach($leagues as $league)
                        <tr valign="top" align="left" style="line-height:16px;">
                            <td width="23" style="vertical-align: top;">
                                <input id="700" type="checkbox" style="margin:2px;padding:0; display:block;" value="700" onclick="checkLeague();" name="LF">
                            </td>
                            <td width="270" style="vertical-align: top;">{{$league[0]->name}}<br></td>
                            <td width="1"> </td>
                            @if(isset($league[1]))
                            <td width="23" style="vertical-align: top;">
                                <input id="10716" type="checkbox" style="margin:2px;padding:0; display:block;" value="10716" onclick="checkLeague();" name="LF">
                            </td>
                            <td width="270" style="vertical-align: top;">{{$league[1]->name}}<br></td>
                            <td width="1"> </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div></div>
            <div class="popWCheckAll">
                <div class="popWCheckBtn">
                    <a href="#" name="Submit" class="button mark" onclick="go();"><span>Truy Cập</span></a>
                    <a href="#" name="cancel" class="button" ng-click="closeLeague()"><span>Hủy</span></a> 				
                </div>
            </div>
        </div></div>
    </div>
</div>