<style type="text/css">
    .widgetArea::-webkit-scrollbar {
        width: 0px;
    }

    .widgetArea:hover::-webkit-scrollbar {
        width: 2px;
    }

    /* Track */
    .widgetArea::-webkit-scrollbar-track {
        background: #f1f1f1; 
    }

    /* Handle */
    .widgetArea::-webkit-scrollbar-thumb {
        background: #888; 
    }

    /* Handle on hover */
    .widgetArea::-webkit-scrollbar-thumb:hover {
        background: #555; 
    }
    .widgetArea.active{
        overflow-y:auto;
        overflow-x: hidden;
    }
    .widgetArea{
        overflow-x: inherit;
    }
    .scroll-panel{
        height: auto;
    }
    .sportsMenu.collapse .heading[class*="icon-sport"]{
        display: flex;
    }
    .widgetPanel {
        border-radius: 0.1875rem;
        background-color: #FFFF;
        position: relative;
        margin-bottom: 0.5em;
        box-shadow: 0 0 0.1rem 0 rgb(0 0 0 / 40%);
    }
    .group .heading.current {
        background: #FFFFFF;
        color: #5574a7;
    }
    .group .heading.current:hover {
        background: #FFFFFF;
    }
    .nav-widgetPanel {
        background: #ececec;
        border-color: #ececec;
        border-width: 1px;
        border-radius: 0.1875rem;
        margin: 0px 5px;
    }
    .icon-betList-bets .active {
        background: #FFFFFF;
        border: 1px solid #ececec;
        border-radius: 0.1875rem;
    }
    .icon-betSlip-single .active {
        background: #FFFFFF;
        border: 1px solid #ececec;
        border-radius: 0.1875rem;
    }
    
    .group .heading {
        color: #545454;
        font-weight: normal;
    }
    .icon-betSlip .text {
        color: #545454 !important;
        font-weight: normal;
    }
    .icon-betList .text {
        color: #545454 !important;
        font-weight: normal;
    }
    .current .text {
        color: #5574a7 !important;
        font-weight: bold;
    }
    .icon-betList-bets .itemContent .text {
        color: #545454 !important;
        font-weight: normal;
    }
    .icon-betList-bets::before {
        color: #545454 !important;
    }
    .icon-betList-waiting .itemContent .text {
        color: #545454 !important;
        font-weight: normal;
    }
    .icon-betList-waiting::before {
        color: #545454 !important;
    }
    .icon-betList-void .itemContent .text {
        color: #545454 !important;
        font-weight: normal;
    }
    .icon-betList-void::before {
        color: #545454 !important;
    }
    
    .icon-betSlip-single .itemContent .text {
        color: #545454 !important;
        font-weight: normal;
    }
    .icon-betSlip-single::before {
        color: #545454 !important;
    }
    
    .icon-betSlip-parlay .itemContent .text {
        color: #545454 !important;
        font-weight: normal;
    }
    .icon-betSlip-parlay::before {
        color: #545454 !important;
    }
</style>
<div class="sidebar-first" ng-controller="LeftV2Controller">
    <div id="leftBar" class="wrapper">
        <div class="widgetArea" ng-class="{'active': !menu.account}">
            <button class="setting collapseExpand"></button>
            <div class="scroll-panel" >
                <div class="scroll-content" >
                    <div class="widgePanelGroup" >
                        @include('web.v2.layout.account')
                        <div left-bet-v2></div>
                    </div>
                    <div class="widgetPanel sportsMenu special collapse" >
                        <!-- <div class="glyphIcon icon-widgetCollapse" title="Collapse the Widget Panel" ></div>
                        <div class="heading icon-sportWorldcup swap" title="Cúp Thế Giới 2018" >
                            <div class="adorn" ></div>
                            <div class="text" >Cúp Thế Giới 2018</div>
                        </div> -->
                        <!-- <div class="contentArea">
                            <div class="nav-widgetPanel  icon-sportsMenu-today threeColum">
                                <div class="item  icon-sportsMenu-early" title="Sớm">
                                    <span class="itemContent">
                                        <span class="text">Sớm</span>
                                    </span>
                                </div>
                                <div class="item active icon-sportsMenu-today" title="Sự kiện hôm nay">
                                    <span class="itemContent">
                                        <span class="text">Sự kiện hôm nay</span>
                                    </span>
                                </div>
                                <div class="item  icon-sportsMenu-live" title="Trực tiếp" >
                                    <span class="itemContent" >
                                        <span class="text">Trực tiếp</span>
                                    </span>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="bottomArea" ></div> -->
                    </div>
                    @include('web.v2.layout.menu')
                </div>
            </div>
        </div>
    </div>
</div>
