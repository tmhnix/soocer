﻿function GestureClass(n){var t={onSelected:null,onClosed:null,onChangeUser:null,onClearUser:null,isFirst:!1,showTip:!1,userName:"",lastDots:4,hideLine:!1,autoHideLine:!1,loginRemain:"",loginUser:"",users:[],copyright:"",addAccount:"",mySwiper:null,blockGesture:!1},u={lbl_LockMsg_SetPWDSucc:"",lbl_LockRem_WrongPWD:"",lbl_LockMsg_ConfirmPWD:"",lbl_LockRem_4Point:"",lbl_LockMsg_SetPWD:"",lbl_LockView:"",lbl_note:"",lbl_LockMsg_KeepUser:"",lbl_Skip:"",lbl_ok:""},f={"en-US":{h:"Forget gesture password?",p1:"Please tap",p2:"to login and reset gesture password in setting page."},"zh-TW":{h:"忘記手勢密碼?",p1:"請點擊",p2:"回登入頁面，並且進入設定頁面重新設定手勢密碼。"},"zh-CN":{h:"忘记手势密码?",p1:"请点击",p2:"回登入页面，并且进入设定页面重新设定手势密码。"},"zh-CHS":{h:"忘记手势密码?",p1:"请点击",p2:"回登入页面，并且进入设定页面重新设定手势密码。"},"vi-VN":{h:"Quên hình vẽ mật khẩu?",p1:"Vui lòng bấm vào",p2:"để đăng nhập và thay đổi hình vẽ mật khẩu trong phần thiết lập."},"th-TH":{h:"Forget gesture password?",p1:"Please tap",p2:"to login and reset gesture password in setting page."},"id-ID":{h:"Forget gesture password?",p1:"Please tap",p2:"to login and reset gesture password in setting page."},"ja-JP":{h:"Forget gesture password?",p1:"Please tap",p2:"to login and reset gesture password in setting page."},"hi-IN":{h:"Forget gesture password?",p1:"Please tap",p2:"to login and reset gesture password in setting page."},"ko-KR":{h:"Forget gesture password?",p1:"Please tap",p2:"to login and reset gesture password in setting page."}},r={settingAction:{dispatch:{onSelected:function(){t.blockGesture==!1&&r.settingAction[r.settingStatus].onSelected()}},smallUnLock:{onSelected:function(){if($(".loading").show(),typeof t.onSelected=="function")t.onSelected(r.userPattern,this.onSuccess,this.onFail)},onSuccess:function(){$("#lockHeading").html("");$(".patt-holder").removeClass("patt-error");$(".patt-holder").addClass("patt-success");setTimeout(function(){r.pattern.reset()},300)},onFail:function(n,i){if($("#lockHeading").html("<span class='mhn-lock-failure'>"+i+"<\/span>"),$(".patt-holder").removeClass("patt-success"),$(".patt-holder").addClass("patt-error"),n==401){if(t.autoHideLine=!0,t.blockGesture=!0,typeof t.onClearUser=="function")t.onClearUser($("#gesUser").text());$("li.active").remove()}$(".loading").hide();setTimeout(function(){r.pattern.reset()},500);navigator.vibrate=navigator.vibrate||navigator.webkitVibrate||navigator.mozVibrate||navigator.msVibrate;navigator.vibrate&&navigator.vibrate(1e3)}},sm2_unLock:{onSelected:function(){if($(".loading").show(),typeof t.onSelected=="function")t.onSelected(r.userPattern,this.onSuccess,this.onFail)},onSuccess:function(){$("#lockHeading").html("");$(".patt-holder").removeClass("patt-error");$(".patt-holder").addClass("patt-success");setTimeout(function(){r.pattern.reset()},300)},onFail:function(n,i){if($("#lockHeading").html("<span class='mhn-lock-failure'>"+i+"<\/span>"),$(".patt-holder").removeClass("patt-success"),$(".patt-holder").addClass("patt-error"),n==401){if(t.autoHideLine=!0,t.blockGesture=!0,typeof t.onClearUser=="function")t.onClearUser($("#gesUser").text());$("li.active").remove()}$(".loading").hide();setTimeout(function(){r.pattern.reset()},500);navigator.vibrate=navigator.vibrate||navigator.webkitVibrate||navigator.mozVibrate||navigator.msVibrate;navigator.vibrate&&navigator.vibrate(1e3)}},unLock:{onSelected:function(){if($(".loading").show(),typeof t.onSelected=="function")t.onSelected(r.userPattern,this.onSuccess,this.onFail)},onSuccess:function(){$("#lockHeading").html("");$(".patt-holder").removeClass("patt-error");$(".patt-holder").addClass("patt-success");setTimeout(function(){r.pattern.reset()},300)},onFail:function(n,i){if($("#lockHeading").html("<span class='mhn-lock-failure'>"+i+"<\/span>"),$(".patt-holder").removeClass("patt-success"),$(".patt-holder").addClass("patt-error"),n==401){if(t.autoHideLine=!0,t.blockGesture=!0,typeof t.onClearUser=="function")t.onClearUser($("#gesUser").text());$("li.active").remove()}$(".loading").hide();setTimeout(function(){r.pattern.reset()},500);navigator.vibrate=navigator.vibrate||navigator.webkitVibrate||navigator.mozVibrate||navigator.msVibrate;navigator.vibrate&&navigator.vibrate(1e3)}},setting:{onSelected:function(){r.checkPattern==""?r.settingAction.setting.onConfirmStart():r.checkPattern==r.userPattern?($(".loading").show(),this.onSuccess(),r.checkPattern=""):this.onFail()},onSuccess:function(){if($("#lockHeading").html("<span>"+u.lbl_LockMsg_SetPWDSucc+"<\/span>"),$("#lockNote").hide(),$("#lockSuccess").show(),$(".patt-holder").addClass("patt-success"),$(".patt-holder").off("touchstart mousedown"),setTimeout(function(){r.pattern.reset()},600),t.onSelected)t.onSelected(r.checkPattern);$(".loading").hide()},onFail:function(){$("#lockHeading").html("<span class='mhn-lock-failure'>"+u.lbl_LockRem_WrongPWD+"<\/span>");$(".patt-holder").removeClass("patt-success");setTimeout(function(){r.pattern.reset();$("#lockHeading").html("<span>"+u.lbl_LockMsg_ConfirmPWD+"<\/span>")},1e3)},onConfirmStart:function(){r.checkPattern==""?r.userPattern.length>=t.lastDots?($("#lockHeading").html("<span>"+u.lbl_LockMsg_ConfirmPWD+"<\/span>"),$(".patt-holder").addClass("patt-success"),r.checkPattern=r.userPattern,setTimeout(function(){r.pattern.reset()},1e3)):($("#lockHeading").html("<span class='mhn-lock-failure'>"+u.lbl_LockRem_4Point+"<\/span>"),setTimeout(function(){r.pattern.reset()},1e3)):alert("Opps! Why r u here?")}},sm2_setting:{onSelected:function(){r.checkPattern==""?r.settingAction.setting.onConfirmStart():r.checkPattern==r.userPattern?($(".loading").show(),this.onSuccess(),r.checkPattern=""):this.onFail()},onSuccess:function(){if($("#lockHeading").html("<span>"+u.lbl_LockMsg_SetPWDSucc+"<\/span>"),$("#lockNote").hide(),$("#lockSuccess").css("display","Flex"),$(".patt-holder").addClass("patt-success"),$(".patt-holder").off("touchstart mousedown"),setTimeout(function(){r.pattern.reset()},600),t.onSelected)t.onSelected(r.checkPattern);$(".loading").hide()},onFail:function(){$("#lockHeading").html("<span class='mhn-lock-failure'>"+u.lbl_LockRem_WrongPWD+"<\/span>");$(".patt-holder").removeClass("patt-success");setTimeout(function(){r.pattern.reset();$("#lockHeading").html("<span>"+u.lbl_LockMsg_ConfirmPWD+"<\/span>")},1e3)},onConfirmStart:function(){r.checkPattern==""&&(r.userPattern.length>=t.lastDots?($("#lockHeading").html("<span>"+u.lbl_LockMsg_ConfirmPWD+"<\/span>"),$(".patt-holder").addClass("patt-success"),r.checkPattern=r.userPattern,setTimeout(function(){r.pattern.reset()},1e3)):($("#lockHeading").html("<span class='mhn-lock-failure'>"+u.lbl_LockRem_4Point+"<\/span>"),setTimeout(function(){r.pattern.reset()},1e3)))}}},settingStatus:"",userPattern:"",checkPattern:"",pattern:null,setup:function(n){this.settingStatus="undefined"==typeof n?this.settingName.unLock:n;r.checkPattern="";this.lock();this.filter();this.colors()},lock:function(){$(".mhn-ui-page").hide();$(".mhn-ui-page.page-lock").show();$(".panel-heading").html("");r.pattern=new PatternLock(".mhn-lock",{margin:15});r.pattern.checkForPattern(r.checkPattern)},filter:function(){$(".mhn-ui-filter .mhn-ui-btn").click(function(){$(this).toggleClass("active");$(".mhn-ui-filter-list").toggle(100)});$(".mhn-ui-filter-list>div").click(function(){var n=$(this).data("filter"),t;$(this).siblings().removeAttr("class");$(this).addClass("active");t=function(n){$(".mhn-ui-apps .mhn-ui-col").fadeOut(400);$('.mhn-ui-apps .mhn-ui-col[data-filter="'+n+'"]').fadeIn(400)};switch(n){case"all":$(".mhn-ui-apps .mhn-ui-col").fadeIn(400);break;case"general":t(n);break;case"social":t(n);break;case"credits":t(n)}$(".mhn-ui-filter-list").toggle(100);$(".mhn-ui-filter .mhn-ui-btn").removeClass("active");$(".mhn-ui-page-title").text($(this).text())})},colors:function(){$(".mhn-ui-icon span").on("mouseover",function(){$(this).css("background",$(this).data("color"))}).on("mouseout",function(){$(this).removeAttr("style")})},closeGesture:function(){$(i).hide();$(i).remove();i=null;typeof t.onClosed=="function"&&t.onClosed()}},o=function(n,i){function h(n){for(var o=n.holder,u=n.option,r=u.matrix,i=u.margin,t=u.radius,f=['<ul class="patt-wrap" style="padding:'+i+'px">'],e=0,s=r[0]*r[1];s>e;e++)f.push('<li class="patt-circ" style="margin:'+i+"px; width : "+2*t+"px; height : "+2*t+"px; -webkit-border-radius: "+t+"px; -moz-border-radius: "+t+"px; border-radius: "+t+'px; "><div class="patt-dots"><\/div><\/li>');f.push("<\/ul>");o.html(f.join("")).css({width:r[1]*(2*t+2*i)+2*i+"px",height:r[0]*(2*t+2*i)+2*i+"px"});n.pattCircle=n.holder.find(".patt-circ")}function c(n,t,i,r){var u=t-n,f=r-i;return{length:Math.ceil(Math.sqrt(u*u+f*f)),angle:Math.round(180*Math.atan2(f,u)/Math.PI)}}function e(){}function f(n,t){var l=this,a=l.token=Math.random(),r=u[a]=new e,s=r.holder=i(n),c;0!=s.length&&(r.object=l,t=r.option=i.extend({},f.defaults,t),h(r),s.addClass("patt-holder"),"static"==s.css("position")&&s.css("position","relative"),s.on("touchstart mousedown",function(n){p.call(this,n,l)}),r.option.onDraw=t.onDraw||o,c=t.mapper,r.mapperFunc="object"==typeof c?function(n){return c[n]}:"function"==typeof c?c:o,r.option.mapper=null)}var a=window,v=document,y,o=function(){},u={},p=function(n,t){var r,e,o,s,f;n.preventDefault();r=u[t.token];r.disabled||(r.option.patternVisible||r.holder.addClass("patt-hidden"),e="touchstart"==n.type?"touchmove":"mousemove",o="touchstart"==n.type?"touchend":"mouseup",i(this).on(e+".pattern-move",function(n){l.call(this,n,t)}),i(v).one(o,function(){w.call(this,n,t)}),s=r.holder.find(".patt-wrap"),f=s.offset(),r.wrapTop=f.top,r.wrapLeft=f.left,t.reset())},l=function(n,r){var y,o,nt,k,tt,w,ut;n.preventDefault();var st=n.pageX||n.originalEvent.touches[0].pageX,ht=n.pageY||n.originalEvent.touches[0].pageY,f=u[r.token],ft=f.pattCircle,l=f.patternAry,et=f.option.lineOnMove,e=f.getIdxFromPoint(st,ht),b=e.idx,ot=f.mapperFunc(b)||b;if(l.length>0&&(y=c(f.lineX1,e.x,f.lineY1,e.y),t.autoHideLine===!0?f.line.css({width:y.length+10+"px",transform:"rotate("+y.angle+"deg)",display:"none"}):f.line.css({width:y.length+10+"px",transform:"rotate("+y.angle+"deg)"})),b){if(-1==l.indexOf(ot)){if(nt=i(ft[b-1]),f.lastPosObj){for(var a=f.lastPosObj,s=a.i,h=a.j,p=Math.abs(e.i-s),v=Math.abs(e.j-h);(0==p&&v>1||0==v&&p>1||v==p&&v>1)&&(h!=e.j||s!=e.i);)s=p?Math.min(e.i,s)+1:s,h=v?Math.min(e.j,h)+1:h,p=Math.abs(e.i-s),v=Math.abs(e.j-h),k=(h-1)*f.option.matrix[1]+s,tt=f.mapperFunc(k)||k,-1==l.indexOf(tt)&&(i(ft[k-1]).addClass("hovered"),l.push(tt));o=[];e.j-a.j>0?o.push("s"):e.j-a.j<0?o.push("n"):0;e.i-a.i>0?o.push("e"):e.i-a.i<0?o.push("w"):0;o=o.join("-")}t.autoHideLine!==!0&&nt.addClass("hovered");l.push(ot);var d=f.option.margin,g=f.option.radius,it=(e.i-1)*(2*d+2*g)+2*d+g,rt=(e.j-1)*(2*d+2*g)+2*d+g;1!=l.length&&(w=c(f.lineX1,it,f.lineY1,rt),t.autoHideLine===!0?f.line.css({width:w.length+10+"px",transform:"rotate("+w.angle+"deg)",display:"none"}):f.line.css({width:w.length+10+"px",transform:"rotate("+w.angle+"deg)"}),et||f.line.show());o&&(f.lastElm.addClass(o+" dir"),f.line.addClass(o+" dir"));ut=i('<div class="patt-lines" style="top:'+(rt-5)+"px; left:"+(it-5)+'px"><\/div>');f.line=ut;f.lineX1=it;f.lineY1=rt;f.holder.append(ut);et||f.line.hide();f.lastElm=nt}f.lastPosObj=e}},w=function(n,t){n.preventDefault();var i=u[t.token],f=i.patternAry.join("");f.length>0&&(s(f,f==r.checkPattern),i.holder.off(".pattern-move").removeClass("patt-hidden"),f&&(i.option.onDraw(f),i.line.remove(),i.rightPattern==""||i.rightPattern==f?r.settingAction.dispatch.onSelected():(r.settingAction.dispatch.onSelected(),t.error())))};e.prototype={constructor:e,getIdxFromPoint:function(n,t){var r=this.option,u=r.matrix,f=n-this.wrapLeft,e=t-this.wrapTop,c=null,o=r.margin,i=2*r.radius+2*o,s=Math.ceil(f/i),h=Math.ceil(e/i),l=f%i,a=e%i;return s<=u[1]&&h<=u[0]&&l>2*o&&a>2*o&&(c=(h-1)*u[1]+s),{idx:c,i:s,j:h,x:f,y:e}}};f.prototype={constructor:f,option:function(n,t){var i=u[this.token],r=i.option;return t===y?r[n]:(r[n]=t,void(("margin"==n||"matrix"==n||"radius"==n)&&h(i)))},getPattern:function(){return u[this.token].patternAry.join("")},setPattern:function(n){var e=u[this.token],t=e.option,s=t.matrix,i=t.margin,r=t.radius,f;if(t.enableSetPattern)for(this.reset(),e.wrapLeft=0,e.wrapTop=0,f=0;f<n.length;f++){var h=n[f]-1,v=h%s[1],y=Math.floor(h/s[1]),c=v*(2*i+2*r)+2*i+r,a=y*(2*i+2*r)+2*i+r;l.call(null,{pageX:c,pageY:a,preventDefault:o,originalEvent:{touches:[{pageX:c,pageY:a}]}},this)}},enable:function(){var n=u[this.token];n.disabled=!1},disable:function(){var n=u[this.token];n.disabled=!0},reset:function(){var n=u[this.token];n.pattCircle.removeClass("hovered dir s n w e s-w s-e n-w n-e");n.holder.find(".patt-lines").remove();n.patternAry=[];n.lastPosObj=null;n.holder.removeClass("patt-error patt-success");n.rightPattern=r.checkPattern},error:function(){u[this.token].holder.addClass("patt-error")},checkForPattern:function(n){var t=u[this.token];t.rightPattern=n}};f.defaults={matrix:[3,3],margin:20,radius:25,patternVisible:!0,lineOnMove:!0,enableSetPattern:!1};a.PatternLock=f;r.setup(n)},s=function(n){r.userPattern=n},h=function(n){var ut,e,v,o,s,y,ft,p,w,b,f,k,d,et,h,g,c,nt,l,tt,a,it,rt;i=document.createElement("div");$(i).attr("id","lockViewDiv");i.className="pagePanel gesturePwdPanel setFirst in";ut=document.createElement("div");ut.className="modal-backdrop in";$(ut).css({height:"736px"}).appendTo($(i));e=document.createElement("div");e.className="main";v=document.createElement("div");v.className="header";o=document.createElement("div");o.className="main-bar";s=document.createElement("a");s.className="btn text-hide";y=document.createElement("i");y.className="icon icon-back";ft=document.createElement("span");ft.innerText="Back";p=document.createElement("div");p.className="title";n.first!==!0&&(i.className="pagePanel gesturePwdPanel in");$(y).appendTo($(s));$(ft).appendTo($(s));$(s).appendTo($(o));$(p).appendTo($(o));$(o).appendTo($(v));w=document.createElement("div");w.className="content";b=document.createElement("div");b.className="content-scroller";f=document.createElement("div");f.className="panel panel-default mhn-lock-wrap";k=document.createElement("div");k.className="panel-heading mhn-lock-title";$(k).attr("id","lockHeading").appendTo($(f));d=document.createElement("div");d.className="panel-body";et=document.createElement("div");et.className="mhn-lock";$(et).css({width:"270px",height:"270px",position:"relative"}).appendTo($(d));$(d).appendTo($(f));h=document.createElement("div");h.className="panel-footer panel-note";g=document.createElement("div");g.className="title";$(g).appendTo($(h));c=document.createElement("div");c.className="box";nt=document.createElement("div");nt.className="box-flex";$(nt).appendTo($(c));l=document.createElement("div");l.className="btn btn-link btn-skip";$(l).appendTo($(c));$(c).appendTo($(h));$(h).attr("id","lockNote").appendTo($(f));tt=document.createElement("div");tt.className="panel-footer panel-success";a=document.createElement("div");a.className="btn btn-primary";$(a).appendTo($(tt));$(tt).attr("id","lockSuccess").appendTo($(f));$(f).appendTo($(b));$(b).appendTo($(w));$(v).appendTo($(e));$(w).appendTo($(e));$(e).appendTo($(i));it=document.createElement("div");it.className="loading";rt=document.createElement("i");rt.className="icon-loading";$(rt).html("<span><\/span><span><\/span><span><\/span><span><\/span>");$(rt).appendTo($(it));$(it).css({display:"none"}).appendTo($(i));$(y).bind("click",function(){console.log(r.settingStatus+" / "+GestureSettingType.setting);r.settingStatus===GestureSettingType.setting&&r.checkPattern!==""?(r.checkPattern="",$(".panel-heading").html("<span>"+u.lbl_LockMsg_SetPWD+"<\/span>")):($(i).hide(),$(i).remove(),i=null,typeof t.onClosed=="function"&&t.onClosed())});$(l).bind("click",function(){$(i).hide();$(i).remove();i=null;typeof t.onClosed=="function"&&t.onClosed()});$(a).bind("click",function(){$(i).hide();$(i).remove();i=null;typeof t.onClosed=="function"&&t.onClosed()});setTimeout(function(){p.innerText=u.lbl_LockView;k.innerHTML=u.lbl_LockMsg_SetPWD;g.innerHTML=u.lbl_note+":";nt.innerHTML=u.lbl_LockMsg_KeepUser;l.innerHTML=u.lbl_Skip;a.innerHTML=u.lbl_ok},10)},c=function(n){var f,h,a,c,o,r,l,s;e=document.createElement("div");e.className="content_title";i=document.createElement("div");$(i).attr("id","lockViewDiv");i.className=n.first==!0?"gesturepw setFirst":"gesturepw";f=document.createElement("div");f.className="mhn-lock-wrap";h=document.createElement("div");h.className="mhn-lock-title";$(h).attr("id","lockHeading").appendTo($(f));a=document.createElement("div");a.className="mhn-lock patt-holder";$(a).css({width:"270px",height:"270px",position:"relative"}).appendTo($(f));$(f).appendTo($(i));r=document.createElement("div");r.className="gesturepw_comment";c=document.createElement("div");c.className="gesturepw_text";o=document.createElement("div");o.className="btn";$(c).appendTo($(r));$(o).appendTo($(r));$(r).attr("id","lockNote").appendTo($(i));r=document.createElement("div");r.className="gesturepw_comment";l=document.createElement("div");l.className="btn-group";s=document.createElement("div");s.className="btn btn-secondary";$(s).appendTo($(l));$(l).attr("id","lockSuccess").appendTo($(i));$(o).bind("click",function(){$(i).hide();$(i).remove();$(e).remove();i=null;e=null;typeof t.onClosed=="function"&&t.onClosed()});$(s).bind("click",function(){$(i).hide();$(i).remove();$(e).remove();i=null;e=null;typeof t.onClosed=="function"&&t.onClosed()});setTimeout(function(){e.innerText=u.lbl_LockView;h.innerText=u.lbl_LockMsg_SetPWD;c.innerText=u.lbl_note+":"+u.lbl_LockMsg_KeepUser;o.innerHTML=u.lbl_Skip;s.innerHTML=u.lbl_ok},10)},l=function(n){var b,e,o,r,u,et,l,ot,s,a,h,v,st,k,y,ht,p,ct,lt,d,w,at,g,nt,tt,c,it,rt,pt,vt,ut,ft,yt;if(i=document.createElement("div"),$(i).attr("id","lockViewDiv"),i.className="gestureInputPage in",b=document.createElement("div"),b.className="modal-backdrop",$(b).attr("id","gBackdrop").appendTo(i),e=document.createElement("div"),e.className="gestureInputPanel mhn-lock-wrap",o=document.createElement("div"),o.className="block-account",r=document.createElement("div"),r.className="account-dropdown",u=document.createElement("div"),u.className="btn",et=document.createElement("i"),et.className="icon icon-account",$(et).appendTo($(u)),l=document.createElement("span"),l.className="text-username",l.id="gesUser",$(l).appendTo($(u)),ot=document.createElement("span"),ot.className="caret",$(ot).appendTo($(u)),$(u).appendTo($(r)),s=document.createElement("ul"),s.className="dropdown-menu",t.users.length>1){for(a in t.users)h=document.createElement("li"),t.users[a]==t.userName&&(h.className="active"),v=document.createElement("a"),st=document.createElement("i"),st.className="icon icon-account",$(st).appendTo($(v)),k=document.createElement("span"),k.className="text-username",k.innerText=t.users[a],$(k).appendTo($(v)),$(v).appendTo($(h)),y=document.createElement("a"),y.className="btn btn-clear",ht=document.createElement("i"),ht.className="icon icon-clear",$(ht).appendTo($(y)),$(y).attr("id","Clear_"+a).appendTo($(h)),p=document.createElement("a"),p.className="btn btn-delete",ct=document.createElement("i"),ct.className="icon icon-delete-outline",$(ct).appendTo($(p)),$(p).attr("id","Delete_"+a).appendTo($(h)),$(h).appendTo($(s)),$(v).bind("click",function(){$("li").removeClass("active");$(this).parent().addClass("active");var n=$(this).text();if($("#gesUser").text(n),typeof t.onChangeUser=="function")t.onChangeUser(n);t.blockGesture=!1;t.autoHideLine=t.hideLine;$("#lockHeading").html(t.loginRemain);$(r).removeClass("open");$(".delete").removeClass("delete");$("#gBackdrop").hide()}),$(y).bind("click",function(){$(".delete").removeClass("delete");var n=$(this).parent();n.addClass("delete")}),$(p).bind("click",function(){var f=$(this).parent(),e=f.find(".text-username").text(),n=$(this).parent().parent(),i,u;if($(this).parent().remove(),f.hasClass("active")){if(i=n.find("li:first-child"),i.addClass("active"),u=i.find(".text-username").text(),$("#gesUser").text(u),typeof t.onChangeUser=="function")t.onChangeUser(u);$("#lockHeading").html(t.loginRemain)}if(n.find(".icon-clear").length<=1&&n.parent().addClass("single"),typeof t.onClearUser=="function")t.onClearUser(e);$(r).removeClass("open");$("#gBackdrop").hide()});$(u).bind("click",function(){$(r).addClass("open");$("#gBackdrop").show()})}else $(r).addClass("single");lt=document.createElement("li");lt.className="divider";$(lt).appendTo($(s));d=document.createElement("li");d.className="addAccount";w=document.createElement("a");at=document.createElement("i");at.className="icon icon-account-add";g=document.createElement("span");g.className="text-username";g.innerText=t.addAccount;$(at).appendTo($(w));$(g).appendTo($(w));$(w).appendTo($(d));$(d).appendTo($(s));$(s).appendTo($(r));$(r).attr("id","userSelecter").appendTo($(o));nt=document.createElement("div");nt.className="btn btn-keypad";tt=document.createElement("i");tt.className="icon icon-keypad";$(tt).appendTo($(nt));$(nt).attr("id","toKeyPad").appendTo($(o));t.showTip==!0&&(c=document.createElement("div"),c.className="tooltip-panel in",it=document.createElement("div"),it.className="btn btn-clear",rt=document.createElement("i"),rt.className="icon icon-clear",$(rt).appendTo($(it)),$(it).appendTo($(c)),pt=document.createElement("h2"),$(pt).attr("id","H2Tip").append(f[n.lang].h).appendTo($(c)),vt=document.createElement("p"),$(vt).append(f[n.lang].p1+" <span class='sampleicon'><i class='icon icon-keypad'><\/i><\/span> "+f[n.lang].p2),$(vt).attr("id","PTip").appendTo($(c)),$(c).attr("id","GesTip").appendTo($(o)),$(rt).bind("click",function(){$("#GesTip").removeClass("in")}));$(o).appendTo($(e));ut=document.createElement("div");ut.className="panel-heading mhn-lock-title";$(ut).attr("id","lockHeading").appendTo($(e));ft=document.createElement("div");ft.className="panel-body";yt=document.createElement("div");yt.className="mhn-lock";$(yt).css({width:"270px",height:"270px",position:"relative"}).appendTo($(ft));$(ft).appendTo($(e));$(e).appendTo($(i));$(tt).bind("click",function(){$(i).hide();$(i).remove();i=null;typeof t.onClosed=="function"&&t.onClosed()});$(w).bind("click",function(){$(i).hide();$(i).remove();i=null;typeof t.onClosed=="function"&&t.onClosed()});$(b).bind("click",function(){$("#userSelecter").removeClass("open");$(".delete").removeClass("delete");$("#gBackdrop").hide()});setTimeout(function(){l.innerHTML=t.userName;ut.innerHTML=t.loginRemain},10)},a=function(n){var w,e,r,u,ft,c,et,o,l,s,a,ot,b,v,st,y,ht,ct,k,p,lt,d,g,nt,h,tt,it,yt,at,rt,ut,vt;if(i=document.createElement("div"),$(i).attr("id","gestureInput"),i.className="gestureInputPanel mhn-lock-wrap",w=document.createElement("div"),w.className="modal-backdrop backdrop-gesture",$(w).attr("id","gBackdrop").appendTo(i),e=document.createElement("div"),e.className="block-account",r=document.createElement("div"),r.className="account-dropdown",u=document.createElement("div"),u.className="btn",ft=document.createElement("i"),ft.className="icon icon-account",$(ft).appendTo($(u)),c=document.createElement("span"),c.className="text-username",c.id="gesUser",$(c).appendTo($(u)),et=document.createElement("span"),et.className="caret",$(et).appendTo($(u)),$(u).appendTo($(r)),o=document.createElement("ul"),o.className="dropdown-menu",t.users.length>1){for(l in t.users)s=document.createElement("li"),t.users[l]==t.userName&&(s.className="active"),a=document.createElement("a"),ot=document.createElement("i"),ot.className="icon icon-account",$(ot).appendTo($(a)),b=document.createElement("span"),b.className="text-username",b.innerText=t.users[l],$(b).appendTo($(a)),$(a).appendTo($(s)),v=document.createElement("a"),v.className="btn btn-clear",st=document.createElement("i"),st.className="icon icon-clear",$(st).appendTo($(v)),$(v).attr("id","Clear_"+l).appendTo($(s)),y=document.createElement("a"),y.className="btn btn-delete",ht=document.createElement("i"),ht.className="icon icon-delete-outline",$(ht).appendTo($(y)),$(y).attr("id","Delete_"+l).appendTo($(s)),$(s).appendTo($(o)),$(a).bind("click",function(){$("li").removeClass("active");$(this).parent().addClass("active");var n=$(this).text();if($("#gesUser").text(n),typeof t.onChangeUser=="function")t.onChangeUser(n);t.blockGesture=!1;t.autoHideLine=t.hideLine;$("#lockHeading").html(t.loginRemain);$(r).removeClass("open");$(".delete").removeClass("delete");$("#gBackdrop").hide()}),$(v).bind("click",function(){$(".delete").removeClass("delete");var n=$(this).parent();n.addClass("delete")}),$(y).bind("click",function(){var f=$(this).parent(),e=f.find(".text-username").text(),n=$(this).parent().parent(),i,u;if($(this).parent().remove(),f.hasClass("active")){if(i=n.find("li:first-child"),i.addClass("active"),u=i.find(".text-username").text(),$("#gesUser").text(u),typeof t.onChangeUser=="function")t.onChangeUser(u);$("#lockHeading").html(t.loginRemain)}if(n.find(".icon-clear").length<=1&&n.parent().addClass("single"),typeof t.onClearUser=="function")t.onClearUser(e);$(r).removeClass("open");$("#gBackdrop").hide()});$(u).bind("click",function(){$(r).addClass("open");$("#gBackdrop").show()})}else $(r).addClass("single");ct=document.createElement("li");ct.className="divider";$(ct).appendTo($(o));k=document.createElement("li");k.className="addAccount";p=document.createElement("a");lt=document.createElement("i");lt.className="icon icon-account-add";d=document.createElement("span");d.className="text-username";d.innerText=t.addAccount;$(lt).appendTo($(p));$(d).appendTo($(p));$(p).appendTo($(k));$(k).appendTo($(o));$(o).appendTo($(r));$(r).attr("id","userSelecter").appendTo($(e));g=document.createElement("div");g.className="btn btn-keypad";nt=document.createElement("i");nt.className="icon icon-keypad";$(nt).appendTo($(g));$(g).appendTo($(e));t.showTip==!0&&(h=document.createElement("div"),h.className="tooltip-panel in",tt=document.createElement("div"),tt.className="btn btn-clear",it=document.createElement("i"),it.className="icon icon-clear",$(it).appendTo($(tt)),$(tt).appendTo($(h)),yt=document.createElement("h2"),$(yt).attr("id","H2Tip").append(f[n.lang].h).appendTo($(h)),at=document.createElement("p"),$(at).append(f[n.lang].p1+" <span class='sampleicon'><i class='icon icon-keypad'><\/i><\/span> "+f[n.lang].p2),$(at).attr("id","PTip").appendTo($(h)),$(h).attr("id","GesTip").appendTo($(e)),$(it).bind("click",function(){$("#GesTip").removeClass("in")}));$(e).appendTo($(i));rt=document.createElement("div");rt.className="panel-heading mhn-lock-title";$(rt).attr("id","lockHeading").appendTo($(i));ut=document.createElement("div");ut.className="panel-body";vt=document.createElement("div");vt.className="mhn-lock";$(vt).css({width:"270px",height:"270px",position:"relative"}).appendTo($(ut));$(ut).appendTo($(i));$(nt).bind("click",function(){$(i).hide();$(i).remove();i=null;typeof t.onClosed=="function"&&t.onClosed()});$(p).bind("click",function(){$(i).hide();$(i).remove();i=null;typeof t.onClosed=="function"&&t.onClosed()});$(w).bind("click",function(){$("#userSelecter").removeClass("open");$(".delete").removeClass("delete");$("#gBackdrop").hide()});setTimeout(function(){c.innerHTML=t.userName;rt.innerHTML=t.loginRemain},10)},v=function(n){var k,c,e,r,u,et,l,ot,o,a,s,v,st,d,y,ht,p,ct,lt,g,w,at,nt,tt,it,h,rt,ut,pt,vt,b,ft,yt;if(i=document.createElement("div"),$(i).attr("id","lockViewDiv"),i.className="gestureInputPage",k=document.createElement("div"),k.className="modal-backdrop",$(k).attr("id","gBackdrop").appendTo(i),c=document.createElement("div"),c.className="gesturepw",e=document.createElement("div"),e.className="block-account",r=document.createElement("div"),r.className="account-dropdown",u=document.createElement("div"),u.className="btn",et=document.createElement("i"),et.className="icon icon-account",$(et).appendTo($(u)),l=document.createElement("span"),l.className="text-username",l.id="gesUser",$(l).appendTo($(u)),ot=document.createElement("span"),ot.className="caret",$(ot).appendTo($(u)),$(u).appendTo($(r)),o=document.createElement("ul"),o.className="dropdown-menu",t.users.length>1){for(a in t.users)s=document.createElement("li"),t.users[a]==t.userName&&(s.className="active"),v=document.createElement("a"),st=document.createElement("i"),st.className="icon icon-account",$(st).appendTo($(v)),d=document.createElement("span"),d.className="text-username",d.innerText=t.users[a],$(d).appendTo($(v)),$(v).appendTo($(s)),y=document.createElement("a"),y.className="btn btn-clear",ht=document.createElement("i"),ht.className="icon icon-clear",$(ht).appendTo($(y)),$(y).attr("id","Clear_"+a).appendTo($(s)),p=document.createElement("a"),p.className="btn btn-delete",ct=document.createElement("i"),ct.className="icon icon-delete-outline",$(ct).appendTo($(p)),$(p).attr("id","Delete_"+a).appendTo($(s)),$(s).appendTo($(o)),$(v).bind("click",function(){$("li").removeClass("active");$(this).parent().addClass("active");var n=$(this).text();if($("#gesUser").text(n),typeof t.onChangeUser=="function")t.onChangeUser(n);t.blockGesture=!1;t.autoHideLine=t.hideLine;$("#lockHeading").html(t.loginRemain);$(r).removeClass("open");$(".delete").removeClass("delete");$("#gBackdrop").hide()}),$(y).bind("click",function(){$(".delete").removeClass("delete");var n=$(this).parent();n.addClass("delete")}),$(p).bind("click",function(){var f=$(this).parent(),e=f.find(".text-username").text(),n=$(this).parent().parent(),i,u;if($(this).parent().remove(),f.hasClass("active")){if(i=n.find("li:first-child"),i.addClass("active"),u=i.find(".text-username").text(),$("#gesUser").text(u),typeof t.onChangeUser=="function")t.onChangeUser(u);$("#lockHeading").html(t.loginRemain)}if(n.find(".icon-clear").length<=1&&n.parent().addClass("single"),typeof t.onClearUser=="function")t.onClearUser(e);$(r).removeClass("open");$("#gBackdrop").hide()});$(u).bind("click",function(){$(r).addClass("open");$("#gBackdrop").show()})}else $(r).addClass("single");lt=document.createElement("li");lt.className="divider";$(lt).appendTo($(o));g=document.createElement("li");g.className="addAccount";w=document.createElement("a");at=document.createElement("i");at.className="icon icon-account-add";nt=document.createElement("span");nt.className="text-username";nt.innerText=t.addAccount;$(at).appendTo($(w));$(nt).appendTo($(w));$(w).appendTo($(g));$(g).appendTo($(o));$(o).appendTo($(r));$(r).attr("id","userSelecter").appendTo($(e));tt=document.createElement("div");tt.className="btn btn-keypad";it=document.createElement("i");it.className="icon icon-keypad";$(it).appendTo($(tt));$(tt).attr("id","toKeyPad").appendTo($(e));t.showTip==!0&&(h=document.createElement("div"),h.className="tooltip-panel in",rt=document.createElement("div"),rt.className="btn btn-clear",ut=document.createElement("i"),ut.className="icon icon-clear",$(ut).appendTo($(rt)),$(rt).appendTo($(h)),pt=document.createElement("h2"),$(pt).attr("id","H2Tip").append(f[n.lang].h).appendTo($(h)),vt=document.createElement("p"),$(vt).append(f[n.lang].p1+" <span class='sampleicon'><i class='icon icon-keypad'><\/i><\/span> "+f[n.lang].p2),$(vt).attr("id","PTip").appendTo($(h)),$(h).attr("id","GesTip").appendTo($(e)),$(ut).bind("click",function(){$("#GesTip").removeClass("in")}));$(e).appendTo($(c));b=document.createElement("div");b.className="mhn-lock-wrap";ft=document.createElement("div");ft.className="mhn-lock-title";$(ft).attr("id","lockHeading").appendTo($(b));yt=document.createElement("div");yt.className="mhn-lock patt-holder";$(yt).css({width:"270px",height:"270px",position:"relative"}).appendTo($(b));$(b).appendTo($(c));$(c).appendTo(i);$(it).bind("click",function(){$(i).hide();$(i).remove();i=null;typeof t.onClosed=="function"&&t.onClosed()});$(w).bind("click",function(){$(i).hide();$(i).remove();i=null;typeof t.onClosed=="function"&&t.onClosed()});$(k).bind("click",function(){$("#userSelecter").removeClass("open");$(".delete").removeClass("delete");$("#gBackdrop").hide()});setTimeout(function(){l.innerHTML=t.userName;ft.innerHTML=t.loginRemain},10)},i=null,e=null;t.userName=n.userName?n.userName:"";t.loginRemain=n.loginRemain?n.loginRemain:"";t.loginUser=n.loginUser?n.loginUser:"";t.copyright=n.copyright?n.copyright:"";t.myAD=n.ad?n.ad:null;t.showTip=n.showTip?n.showTip:!1;t.addAccount=n.addAcc?n.addAcc:"";t.users=n.users?n.users.slice():[];t=$.extend(t,{onSelected:n.mcb,onClosed:n.ccb,onChangeUser:n.ucb,onClearUser:n.crcb});document.getElementById("lockViewDiv")||(n.lockType===GestureSettingType.setting?(u=n.Message,h(n),n.parent?$(i).appendTo($("#"+n.parent)):$(i).appendTo($("body"))):n.lockType===GestureSettingType.sm2_setting?(u=n.Message,c(n),n.parent?($("#"+n.parent).html(""),$(e).appendTo($("#"+n.parent)),$(i).appendTo($("#"+n.parent))):($(e).appendTo($("#"+n.parent)),$(i).appendTo($("body")))):n.lockType===GestureSettingType.smallUnLock?(t.users.indexOf(t.userName)<0&&t.users.unshift(t.userName),a(n),n.parent?$(i).appendTo($("#"+n.parent)):$(i).appendTo($("body"))):n.lockType===GestureSettingType.sm2_unLock?(v(n),n.parent?$(i).appendTo($("#"+n.parent)):$(i).appendTo($("body"))):(t.users.indexOf(t.userName)<0&&t.users.unshift(t.userName),l(n),n.parent?$(i).appendTo($("#"+n.parent)):$(i).appendTo($("body"))),o(n.lockType,n.t))}var GestureSettingType={unLock:"unLock",setting:"setting",smallUnLock:"smallUnLock",sm2_setting:"sm2_setting",sm2_unLock:"sm2_unLock"}