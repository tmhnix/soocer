﻿/* Add to Homescreen v3.2.2 ~ (c) 2015 Matteo Spinelli ~ @license: http://cubiq.org/license */
(function(n,t){function v(){n.removeEventListener("load",v,!1);e=!0}function i(n){return o=o||new i.Class(n)}function l(n,t){for(var i in t)n[i]=t[i];return n}function y(){t.location.hash=="#ath"&&history.replaceState("",n.document.title,t.location.href.split("#")[0]);u.test(t.location.href)&&history.replaceState("",n.document.title,t.location.href.replace(u,"$1"));f.test(t.location.search)&&history.replaceState("",n.document.title,t.location.href.replace(f,"$2"))}var a="addEventListener"in n,e=!1,u,f,o,s,r,h,c;t.readyState==="complete"?e=!0:a&&n.addEventListener("load",v,!1);u=/\/ath(\/)?$/;f=/([\?&]ath=[^&]*$|&ath=[^&]*(&))/;i.intl={de_de:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},da_dk:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},en_us:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},es_es:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},fi_fi:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},fr_fr:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},he_il:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},hu_hu:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},it_it:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},ja_jp:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},ko_kr:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},nb_no:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},pt_br:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},pt_pt:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},nl_nl:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},ru_ru:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},sv_se:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},tr_tr:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},uk_ua:{ios:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>',android:'How to install this app on home screen?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> TUTORIAL<\/div><div id="btnDis" class="btn-dismiss btn btn-link">DISMISS<\/div>'},zh_cn:{ios:'如何安装此应用程式到主画面?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> 观看教学<\/div><div id="btnDis" class="btn-dismiss btn btn-link">不再提示<\/div>',android:'如何安装此应用程式到主画面?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> 观看教学<\/div><div id="btnDis" class="btn-dismiss btn btn-link">不再提示<\/div>'},zh_tw:{ios:'如何安裝此應用程式到主畫面?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> 觀看教學<\/div><div id="btnDis" class="btn-dismiss btn btn-link">不再提示<\/div>',android:'如何安裝此應用程式到主畫面?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> 觀看教學<\/div><div id="btnDis" class="btn-dismiss btn btn-link">不再提示<\/div>'},vi_vn:{ios:'Cách cài đặt ứng dụng ở màn hình chính?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> HƯỚNG DẪN<\/div><div id="btnDis" class="btn-dismiss btn btn-link">BỎ QUA<\/div>',android:'Cách cài đặt ứng dụng ở màn hình chính?<\/div><div class="ath-btn-group"><div id="btnVideos" class="btn-teach-video btn btn-link"><i class="icon icon-video"><\/i> HƯỚNG DẪN<\/div><div id="btnDis" class="btn-dismiss btn btn-link">BỎ QUA<\/div>'}};i.pwa={de_de:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},da_dk:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},en_us:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},es_es:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},fi_fi:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},fr_fr:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},he_il:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},hu_hu:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},it_it:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},ja_jp:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},ko_kr:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},nb_no:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},pt_br:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},pt_pt:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},nl_nl:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},ru_ru:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},sv_se:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},tr_tr:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},uk_ua:{android:'Install this webapp on your phone.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">LATER<\/div><div id="btnInstall" class="btn-install btn btn-link">INSTALL<\/div>'},zh_cn:{android:'将此网页添加到手机主屏幕<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">稍后<\/div><div id="btnInstall" class="btn-install btn btn-link">添加<\/div>'},zh_tw:{android:'將此網頁安裝到手機主畫面<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">稍後<\/div><div id="btnInstall" class="btn-install btn btn-link">安裝<\/div>'},vi_vn:{android:'Hãy cài ứng dụng này trên điện thoại của bạn.<\/div><div class="ath-btn-group"><div id="btnLater" class="btn-later btn btn-link">Để sau<\/div><div id="btnInstall" class="btn-install btn btn-link">Cài Đât<\/div>'}};for(s in i.intl)i.intl[s.substr(0,2)]=i.intl[s];i.defaults={appID:"ATHS",fontSize:15,debug:!1,logging:!1,modal:!1,mandatory:!1,autostart:!0,skipFirstVisit:!1,startDelay:1,lifespan:15,displayPace:1440,maxDisplayCount:0,icon:!0,message:"",validLocation:[],onInit:null,onShow:null,onRemove:null,onAdd:null,onPrivate:null,privateModeOverride:!1,detectHomescreen:!1};r=n.navigator.userAgent;h=n.navigator;l(i,{hasToken:t.location.hash=="#ath"||u.test(t.location.href)||f.test(t.location.search),isRetina:n.devicePixelRatio&&n.devicePixelRatio>1,isIDevice:/iphone|ipod|ipad/i.test(r),isMobileChrome:r.indexOf("Android")>-1&&/Chrome\/[.0-9]*/.test(r)&&r.indexOf("Version")==-1,isMobileIE:r.indexOf("Windows Phone")>-1,language:h.language&&h.language.toLowerCase().replace("-","_")||""});_lan&&console.log("A. _lan:"+_lan.toLowerCase().replace("-","_"));i.language=i.language&&_lan.toLowerCase().replace("-","_")in i.intl?_lan.toLowerCase().replace("-","_"):"en_us";i.language&&console.log("A. ath.language:"+i.language);i.isMobileSafari=i.isIDevice&&r.indexOf("Safari")>-1&&r.indexOf("CriOS")<0;i.OS=i.isIDevice?"ios":i.isMobileChrome?"android":i.isMobileIE?"windows":"unsupported";i.OSVersion=r.match(/(OS|Android) (\d+[_\.]\d+)/);i.OSVersion=i.OSVersion&&i.OSVersion[2]?+i.OSVersion[2].replace("_","."):0;i.isStandalone="standalone"in n.navigator&&n.navigator.standalone;i.isTablet=i.isMobileSafari&&r.indexOf("iPad")>-1||i.isMobileChrome&&r.indexOf("Mobile")<0;i.isCompatible=i.isMobileSafari&&i.OSVersion>=6||i.isMobileChrome;c={lastDisplayTime:0,returningVisitor:!1,displayCount:0,optedout:!1,added:!1};i.removeSession=function(n){try{if(!localStorage)throw new Error("localStorage is not defined");localStorage.removeItem(n||i.defaults.appID)}catch(t){}};i.doLog=function(n){this.options.logging&&console.log(n)};i.Class=function(r){var u,f;if(this.doLog=i.doLog,this.options=l({},i.defaults),l(this.options,r),r&&r.debug&&typeof r.logging=="undefined"&&(this.options.logging=!0),a){if(this.options.mandatory=this.options.mandatory&&("standalone"in n.navigator||this.options.debug),this.options.modal=this.options.modal||this.options.mandatory,this.options.mandatory&&(this.options.startDelay=-.5),this.options.detectHomescreen=this.options.detectHomescreen===!0?"hash":this.options.detectHomescreen,this.options.debug&&(i.isCompatible=!0,i.OS=typeof this.options.debug=="string"?this.options.debug:i.OS=="unsupported"?"android":i.OS,i.OSVersion=i.OS=="ios"?"8":"4"),this.container=t.documentElement,this.session=this.getItem(this.options.appID),this.session=this.session?JSON.parse(this.session):undefined,!i.hasToken||i.isCompatible&&this.session||(i.hasToken=!1,y()),!i.isCompatible){this.doLog("Add to homescreen: not displaying callout because device not supported");return}this.session=this.session||c;try{if(!localStorage)throw new Error("localStorage is not defined");localStorage.getItem(this.options.appID)!="0"&&localStorage.setItem(this.options.appID,JSON.stringify(this.session));i.hasLocalStorage=!0}catch(e){i.hasLocalStorage=!1;this.options.onPrivate&&this.options.onPrivate.call(this)}for(u=!this.options.validLocation.length,f=this.options.validLocation.length;f--;)if(this.options.validLocation[f].test(t.location.href)){u=!0;break}if(this.getItem("addToHome")&&this.optOut(),this.session.optedout){this.doLog("Add to homescreen: not displaying callout because user opted out");return}if(this.session.added){this.doLog("Add to homescreen: not displaying callout because already added to the homescreen");return}if(!u){this.doLog("Add to homescreen: not displaying callout because not a valid location");return}if(i.isStandalone){this.session.added||(this.session.added=!0,this.updateSession(),this.options.onAdd&&i.hasLocalStorage&&this.options.onAdd.call(this));this.doLog("Add to homescreen: not displaying callout because in standalone mode");return}if(this.options.detectHomescreen){if(i.hasToken){y();this.session.added||(this.session.added=!0,this.updateSession(),this.options.onAdd&&i.hasLocalStorage&&this.options.onAdd.call(this));this.doLog("Add to homescreen: not displaying callout because URL has token, so we are likely coming from homescreen");return}this.options.detectHomescreen=="hash"?history.replaceState("",n.document.title,t.location.href+"#ath"):this.options.detectHomescreen=="smartURL"?history.replaceState("",n.document.title,t.location.href.replace(/(\/)?$/,"/ath$1")):history.replaceState("",n.document.title,t.location.href+(t.location.search?"&":"?")+"ath=")}if(!this.session.returningVisitor&&(this.session.returningVisitor=!0,this.updateSession(),this.options.skipFirstVisit)){this.doLog("Add to homescreen: not displaying callout because skipping first visit");return}if(!this.options.privateModeOverride&&!i.hasLocalStorage){this.doLog("Add to homescreen: not displaying callout because browser is in private mode");return}this.ready=localStorage.getItem(this.options.appID)!="0";this.options.onInit&&this.options.onInit.call(this);this.options.autostart&&(this.doLog("Add to homescreen: autostart displaying callout"),this.show())}};i.Class.prototype={events:{load:"_delayedShow",error:"_delayedShow",orientationchange:"resize",resize:"resize",scroll:"resize",click:"remove",touchmove:"_preventDefault",transitionend:"_removeElements",webkitTransitionEnd:"_removeElements",MSTransitionEnd:"_removeElements"},handleEvent:function(n){var t=this.events[n.type];t&&this[t](n)},show:function(r){var f,o,u;if(this.options.autostart&&!e){setTimeout(this.show.bind(this),50);return}if(this.shown){this.doLog("Add to homescreen: not displaying callout because already shown on screen");return}if(f=Date.now(),o=this.session.lastDisplayTime,r!==!0){if(!this.ready){this.doLog("Add to homescreen: not displaying callout because not ready");return}if(f-o<this.options.displayPace*6e4){this.doLog("Add to homescreen: not displaying callout because displayed recently");return}if(this.options.maxDisplayCount&&this.session.displayCount>=this.options.maxDisplayCount){this.doLog("Add to homescreen: not displaying callout because displayed too many times already");return}}this.shown=!0;this.session.lastDisplayTime=f;this.session.displayCount++;this.updateSession();this.applicationIcon=t.querySelector("head link[rel^=apple-touch-icon]");u="";typeof this.options.message=="object"&&i.language in this.options.message?u=this.options.message[i.language][i.OS]:typeof this.options.message=="object"&&i.OS in this.options.message?u=this.options.message[i.OS]:this.options.message in i.intl?u=i.intl[this.options.message][i.OS]:this.options.message!==""?u=this.options.message:i.OS in i.intl[i.language]&&(u=_ATHSType==1?i.pwa[i.language][i.OS]:i.intl[i.language][i.OS]);u='<div class="ath-text">'+u+"<\/div>";this.viewport=t.createElement("div");this.viewport.className="ath-viewport";this.viewport.id="myATHS";this.options.modal&&(this.viewport.className+=" ath-modal");this.options.mandatory&&(this.viewport.className+=" ath-mandatory");this.viewport.style.position="absolute";this.element=t.createElement("div");this.element.className="ath-container ath-"+i.OS+" ath-"+i.OS+(i.OSVersion+"").split(".")[0]+" ath-"+(i.isTablet?"tablet":"phone");this.element.style.cssText="-webkit-transition-property:-webkit-transform,opacity;-webkit-transition-duration:0s;-webkit-transition-timing-function:ease-out;transition-property:transform,opacity;transition-duration:0s;transition-timing-function:ease-out;";this.element.style.webkitTransform="translate3d(0,-"+n.innerHeight+"px,0)";this.element.style.transform="translate3d(0,-"+n.innerHeight+"px,0)";this.options.icon&&this.applicationIcon&&(this.element.className+=" ath-icon",this.img=t.createElement("img"),this.img.className="ath-application-icon",this.img.addEventListener("load",this,!1),this.img.addEventListener("error",this,!1),this.img.src=this.applicationIcon.href,this.element.appendChild(this.img));this.element.innerHTML+=u;this.viewport.style.left="-99999em";this.viewport.appendChild(this.element);this.container.appendChild(this.viewport);this.img?this.doLog("Add to homescreen: not displaying callout because waiting for img to load"):this._delayedShow()},playVideos:function(){var n=t.createElement("div"),r,e,u,f;n.id="divVideos";n.className="teach-video";r=t.createElement("div");r.className="btn right btn-clear";e=t.createElement("i");e.className="icon icon-clear";r.appendChild(e);n.appendChild(r);u=t.createElement("div");f=t.createElement("iframe");i.OS=="ios"?(u.className="tc_panel iOS",f.src="Content/public/AddToHomeScreen/iOS/index.html"):(u.className="tc_panel Android",f.src="Content/public/AddToHomeScreen/Android/index.html");u.appendChild(f);n.appendChild(u);n.style="display: block;";r.addEventListener("click",function(){t.getElementById("divVideos").style="display: none;"}.bind(this));t.body.appendChild(n)},disMiss:function(){localStorage.setItem(this.options.appID,"0")},installPWA:function(){PWAProcess&&PWAProcess()},_delayedShow:function(){setTimeout(this._show.bind(this),this.options.startDelay*1e3+500)},_show:function(){if(n._isBefore==1){var i=this;this.updateViewport();n.addEventListener("resize",this,!1);n.addEventListener("scroll",this,!1);n.addEventListener("orientationchange",this,!1);this.options.modal&&t.addEventListener("touchmove",this,!0);this.options.mandatory||setTimeout(function(){i.element.addEventListener("click",i,!0)},1e3);setTimeout(function(){i.element.style.webkitTransitionDuration="1.2s";i.element.style.transitionDuration="1.2s";i.element.style.webkitTransform="translate3d(0,0,0)";i.element.style.transform="translate3d(0,0,0)"},0);this.options.lifespan&&(this.removeTimer=setTimeout(this.remove.bind(this),this.options.lifespan*1e3));t.getElementById("btnVideos")&&t.getElementById("btnVideos").addEventListener("click",function(){this.playVideos()}.bind(this));t.getElementById("btnDis")&&t.getElementById("btnDis").addEventListener("click",function(){this.disMiss()}.bind(this));t.getElementById("btnInstall")&&t.getElementById("btnInstall").addEventListener("click",function(){this.installPWA()}.bind(this));this.options.onShow&&this.options.onShow.call(this);t.getElementById("element").addEventListener("click",function(){this._removeElements()}.bind(this),{once:!0})}},remove:function(){clearTimeout(this.removeTimer);this.img&&(this.img.removeEventListener("load",this,!1),this.img.removeEventListener("error",this,!1));n.removeEventListener("resize",this,!1);n.removeEventListener("scroll",this,!1);n.removeEventListener("orientationchange",this,!1);t.removeEventListener("touchmove",this,!0);this.element.removeEventListener("click",this,!0);this.element.addEventListener("transitionend",this,!1);this.element.addEventListener("webkitTransitionEnd",this,!1);this.element.addEventListener("MSTransitionEnd",this,!1);this.element.style.webkitTransitionDuration="0.3s";this.element.style.opacity="0"},_removeElements:function(){this.element.removeEventListener("transitionend",this,!1);this.element.removeEventListener("webkitTransitionEnd",this,!1);this.element.removeEventListener("MSTransitionEnd",this,!1);this.viewport&&(this.container.removeChild(this.viewport),this.viewport=null,this.shown=!1,this.options.onRemove&&this.options.onRemove.call(this))},updateViewport:function(){var r,u;this.shown&&(this.viewport.style.width=n.innerWidth+"px",this.viewport.style.height=n.innerHeight+"px",this.viewport.style.left=n.scrollX+"px",this.viewport.style.top=n.scrollY+"px",r=t.documentElement.clientWidth,this.orientation=r>t.documentElement.clientHeight?"landscape":"portrait",u=i.OS=="ios"?this.orientation=="portrait"?screen.width:screen.height:screen.width,this.scale=screen.width>r?1:u/n.innerWidth,this.element.style.fontSize=this.options.fontSize/this.scale+"px")},resize:function(){clearTimeout(this.resizeTimer);this.resizeTimer=setTimeout(this.updateViewport.bind(this),100)},updateSession:function(){i.hasLocalStorage!==!1&&localStorage&&localStorage.getItem(this.options.appID)!="0"&&localStorage.setItem(this.options.appID,JSON.stringify(this.session))},clearSession:function(){this.session=c;this.updateSession()},getItem:function(n){try{if(!localStorage)throw new Error("localStorage is not defined");return localStorage.getItem(n)}catch(t){i.hasLocalStorage=!1}},optOut:function(){this.session.optedout=!0;this.updateSession()},optIn:function(){this.session.optedout=!1;this.updateSession()},clearDisplayCount:function(){this.session.displayCount=0;this.updateSession()},_preventDefault:function(n){n.preventDefault();n.stopPropagation()}};n.addToHomescreen=i})(window,document)