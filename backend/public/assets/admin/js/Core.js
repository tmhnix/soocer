/*
CryptoJS v3.1.2
code.google.com/p/crypto-js
(c) 2009-2013 by Jeff Mott. All rights reserved.
code.google.com/p/crypto-js/wiki/License
*/
var CryptoJS=CryptoJS||function(u,p){var d={},l=d.lib={},s=function(){},t=l.Base={extend:function(a){s.prototype=this;var c=new s;a&&c.mixIn(a);c.hasOwnProperty("init")||(c.init=function(){c.$super.init.apply(this,arguments)});c.init.prototype=c;c.$super=this;return c},create:function(){var a=this.extend();a.init.apply(a,arguments);return a},init:function(){},mixIn:function(a){for(var c in a)a.hasOwnProperty(c)&&(this[c]=a[c]);a.hasOwnProperty("toString")&&(this.toString=a.toString)},clone:function(){return this.init.prototype.extend(this)}},
r=l.WordArray=t.extend({init:function(a,c){a=this.words=a||[];this.sigBytes=c!=p?c:4*a.length},toString:function(a){return(a||v).stringify(this)},concat:function(a){var c=this.words,e=a.words,j=this.sigBytes;a=a.sigBytes;this.clamp();if(j%4)for(var k=0;k<a;k++)c[j+k>>>2]|=(e[k>>>2]>>>24-8*(k%4)&255)<<24-8*((j+k)%4);else if(65535<e.length)for(k=0;k<a;k+=4)c[j+k>>>2]=e[k>>>2];else c.push.apply(c,e);this.sigBytes+=a;return this},clamp:function(){var a=this.words,c=this.sigBytes;a[c>>>2]&=4294967295<<
32-8*(c%4);a.length=u.ceil(c/4)},clone:function(){var a=t.clone.call(this);a.words=this.words.slice(0);return a},random:function(a){for(var c=[],e=0;e<a;e+=4)c.push(4294967296*u.random()|0);return new r.init(c,a)}}),w=d.enc={},v=w.Hex={stringify:function(a){var c=a.words;a=a.sigBytes;for(var e=[],j=0;j<a;j++){var k=c[j>>>2]>>>24-8*(j%4)&255;e.push((k>>>4).toString(16));e.push((k&15).toString(16))}return e.join("")},parse:function(a){for(var c=a.length,e=[],j=0;j<c;j+=2)e[j>>>3]|=parseInt(a.substr(j,
2),16)<<24-4*(j%8);return new r.init(e,c/2)}},b=w.Latin1={stringify:function(a){var c=a.words;a=a.sigBytes;for(var e=[],j=0;j<a;j++)e.push(String.fromCharCode(c[j>>>2]>>>24-8*(j%4)&255));return e.join("")},parse:function(a){for(var c=a.length,e=[],j=0;j<c;j++)e[j>>>2]|=(a.charCodeAt(j)&255)<<24-8*(j%4);return new r.init(e,c)}},x=w.Utf8={stringify:function(a){try{return decodeURIComponent(escape(b.stringify(a)))}catch(c){throw Error("Malformed UTF-8 data");}},parse:function(a){return b.parse(unescape(encodeURIComponent(a)))}},
q=l.BufferedBlockAlgorithm=t.extend({reset:function(){this._data=new r.init;this._nDataBytes=0},_append:function(a){"string"==typeof a&&(a=x.parse(a));this._data.concat(a);this._nDataBytes+=a.sigBytes},_process:function(a){var c=this._data,e=c.words,j=c.sigBytes,k=this.blockSize,b=j/(4*k),b=a?u.ceil(b):u.max((b|0)-this._minBufferSize,0);a=b*k;j=u.min(4*a,j);if(a){for(var q=0;q<a;q+=k)this._doProcessBlock(e,q);q=e.splice(0,a);c.sigBytes-=j}return new r.init(q,j)},clone:function(){var a=t.clone.call(this);
a._data=this._data.clone();return a},_minBufferSize:0});l.Hasher=q.extend({cfg:t.extend(),init:function(a){this.cfg=this.cfg.extend(a);this.reset()},reset:function(){q.reset.call(this);this._doReset()},update:function(a){this._append(a);this._process();return this},finalize:function(a){a&&this._append(a);return this._doFinalize()},blockSize:16,_createHelper:function(a){return function(b,e){return(new a.init(e)).finalize(b)}},_createHmacHelper:function(a){return function(b,e){return(new n.HMAC.init(a,
e)).finalize(b)}}});var n=d.algo={};return d}(Math);
(function(){var u=CryptoJS,p=u.lib.WordArray;u.enc.Base64={stringify:function(d){var l=d.words,p=d.sigBytes,t=this._map;d.clamp();d=[];for(var r=0;r<p;r+=3)for(var w=(l[r>>>2]>>>24-8*(r%4)&255)<<16|(l[r+1>>>2]>>>24-8*((r+1)%4)&255)<<8|l[r+2>>>2]>>>24-8*((r+2)%4)&255,v=0;4>v&&r+0.75*v<p;v++)d.push(t.charAt(w>>>6*(3-v)&63));if(l=t.charAt(64))for(;d.length%4;)d.push(l);return d.join("")},parse:function(d){var l=d.length,s=this._map,t=s.charAt(64);t&&(t=d.indexOf(t),-1!=t&&(l=t));for(var t=[],r=0,w=0;w<
l;w++)if(w%4){var v=s.indexOf(d.charAt(w-1))<<2*(w%4),b=s.indexOf(d.charAt(w))>>>6-2*(w%4);t[r>>>2]|=(v|b)<<24-8*(r%4);r++}return p.create(t,r)},_map:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="}})();
(function(u){function p(b,n,a,c,e,j,k){b=b+(n&a|~n&c)+e+k;return(b<<j|b>>>32-j)+n}function d(b,n,a,c,e,j,k){b=b+(n&c|a&~c)+e+k;return(b<<j|b>>>32-j)+n}function l(b,n,a,c,e,j,k){b=b+(n^a^c)+e+k;return(b<<j|b>>>32-j)+n}function s(b,n,a,c,e,j,k){b=b+(a^(n|~c))+e+k;return(b<<j|b>>>32-j)+n}for(var t=CryptoJS,r=t.lib,w=r.WordArray,v=r.Hasher,r=t.algo,b=[],x=0;64>x;x++)b[x]=4294967296*u.abs(u.sin(x+1))|0;r=r.MD5=v.extend({_doReset:function(){this._hash=new w.init([1732584193,4023233417,2562383102,271733878])},
_doProcessBlock:function(q,n){for(var a=0;16>a;a++){var c=n+a,e=q[c];q[c]=(e<<8|e>>>24)&16711935|(e<<24|e>>>8)&4278255360}var a=this._hash.words,c=q[n+0],e=q[n+1],j=q[n+2],k=q[n+3],z=q[n+4],r=q[n+5],t=q[n+6],w=q[n+7],v=q[n+8],A=q[n+9],B=q[n+10],C=q[n+11],u=q[n+12],D=q[n+13],E=q[n+14],x=q[n+15],f=a[0],m=a[1],g=a[2],h=a[3],f=p(f,m,g,h,c,7,b[0]),h=p(h,f,m,g,e,12,b[1]),g=p(g,h,f,m,j,17,b[2]),m=p(m,g,h,f,k,22,b[3]),f=p(f,m,g,h,z,7,b[4]),h=p(h,f,m,g,r,12,b[5]),g=p(g,h,f,m,t,17,b[6]),m=p(m,g,h,f,w,22,b[7]),
f=p(f,m,g,h,v,7,b[8]),h=p(h,f,m,g,A,12,b[9]),g=p(g,h,f,m,B,17,b[10]),m=p(m,g,h,f,C,22,b[11]),f=p(f,m,g,h,u,7,b[12]),h=p(h,f,m,g,D,12,b[13]),g=p(g,h,f,m,E,17,b[14]),m=p(m,g,h,f,x,22,b[15]),f=d(f,m,g,h,e,5,b[16]),h=d(h,f,m,g,t,9,b[17]),g=d(g,h,f,m,C,14,b[18]),m=d(m,g,h,f,c,20,b[19]),f=d(f,m,g,h,r,5,b[20]),h=d(h,f,m,g,B,9,b[21]),g=d(g,h,f,m,x,14,b[22]),m=d(m,g,h,f,z,20,b[23]),f=d(f,m,g,h,A,5,b[24]),h=d(h,f,m,g,E,9,b[25]),g=d(g,h,f,m,k,14,b[26]),m=d(m,g,h,f,v,20,b[27]),f=d(f,m,g,h,D,5,b[28]),h=d(h,f,
m,g,j,9,b[29]),g=d(g,h,f,m,w,14,b[30]),m=d(m,g,h,f,u,20,b[31]),f=l(f,m,g,h,r,4,b[32]),h=l(h,f,m,g,v,11,b[33]),g=l(g,h,f,m,C,16,b[34]),m=l(m,g,h,f,E,23,b[35]),f=l(f,m,g,h,e,4,b[36]),h=l(h,f,m,g,z,11,b[37]),g=l(g,h,f,m,w,16,b[38]),m=l(m,g,h,f,B,23,b[39]),f=l(f,m,g,h,D,4,b[40]),h=l(h,f,m,g,c,11,b[41]),g=l(g,h,f,m,k,16,b[42]),m=l(m,g,h,f,t,23,b[43]),f=l(f,m,g,h,A,4,b[44]),h=l(h,f,m,g,u,11,b[45]),g=l(g,h,f,m,x,16,b[46]),m=l(m,g,h,f,j,23,b[47]),f=s(f,m,g,h,c,6,b[48]),h=s(h,f,m,g,w,10,b[49]),g=s(g,h,f,m,
E,15,b[50]),m=s(m,g,h,f,r,21,b[51]),f=s(f,m,g,h,u,6,b[52]),h=s(h,f,m,g,k,10,b[53]),g=s(g,h,f,m,B,15,b[54]),m=s(m,g,h,f,e,21,b[55]),f=s(f,m,g,h,v,6,b[56]),h=s(h,f,m,g,x,10,b[57]),g=s(g,h,f,m,t,15,b[58]),m=s(m,g,h,f,D,21,b[59]),f=s(f,m,g,h,z,6,b[60]),h=s(h,f,m,g,C,10,b[61]),g=s(g,h,f,m,j,15,b[62]),m=s(m,g,h,f,A,21,b[63]);a[0]=a[0]+f|0;a[1]=a[1]+m|0;a[2]=a[2]+g|0;a[3]=a[3]+h|0},_doFinalize:function(){var b=this._data,n=b.words,a=8*this._nDataBytes,c=8*b.sigBytes;n[c>>>5]|=128<<24-c%32;var e=u.floor(a/
4294967296);n[(c+64>>>9<<4)+15]=(e<<8|e>>>24)&16711935|(e<<24|e>>>8)&4278255360;n[(c+64>>>9<<4)+14]=(a<<8|a>>>24)&16711935|(a<<24|a>>>8)&4278255360;b.sigBytes=4*(n.length+1);this._process();b=this._hash;n=b.words;for(a=0;4>a;a++)c=n[a],n[a]=(c<<8|c>>>24)&16711935|(c<<24|c>>>8)&4278255360;return b},clone:function(){var b=v.clone.call(this);b._hash=this._hash.clone();return b}});t.MD5=v._createHelper(r);t.HmacMD5=v._createHmacHelper(r)})(Math);
(function(){var u=CryptoJS,p=u.lib,d=p.Base,l=p.WordArray,p=u.algo,s=p.EvpKDF=d.extend({cfg:d.extend({keySize:4,hasher:p.MD5,iterations:1}),init:function(d){this.cfg=this.cfg.extend(d)},compute:function(d,r){for(var p=this.cfg,s=p.hasher.create(),b=l.create(),u=b.words,q=p.keySize,p=p.iterations;u.length<q;){n&&s.update(n);var n=s.update(d).finalize(r);s.reset();for(var a=1;a<p;a++)n=s.finalize(n),s.reset();b.concat(n)}b.sigBytes=4*q;return b}});u.EvpKDF=function(d,l,p){return s.create(p).compute(d,
l)}})();
CryptoJS.lib.Cipher||function(u){var p=CryptoJS,d=p.lib,l=d.Base,s=d.WordArray,t=d.BufferedBlockAlgorithm,r=p.enc.Base64,w=p.algo.EvpKDF,v=d.Cipher=t.extend({cfg:l.extend(),createEncryptor:function(e,a){return this.create(this._ENC_XFORM_MODE,e,a)},createDecryptor:function(e,a){return this.create(this._DEC_XFORM_MODE,e,a)},init:function(e,a,b){this.cfg=this.cfg.extend(b);this._xformMode=e;this._key=a;this.reset()},reset:function(){t.reset.call(this);this._doReset()},process:function(e){this._append(e);return this._process()},
finalize:function(e){e&&this._append(e);return this._doFinalize()},keySize:4,ivSize:4,_ENC_XFORM_MODE:1,_DEC_XFORM_MODE:2,_createHelper:function(e){return{encrypt:function(b,k,d){return("string"==typeof k?c:a).encrypt(e,b,k,d)},decrypt:function(b,k,d){return("string"==typeof k?c:a).decrypt(e,b,k,d)}}}});d.StreamCipher=v.extend({_doFinalize:function(){return this._process(!0)},blockSize:1});var b=p.mode={},x=function(e,a,b){var c=this._iv;c?this._iv=u:c=this._prevBlock;for(var d=0;d<b;d++)e[a+d]^=
c[d]},q=(d.BlockCipherMode=l.extend({createEncryptor:function(e,a){return this.Encryptor.create(e,a)},createDecryptor:function(e,a){return this.Decryptor.create(e,a)},init:function(e,a){this._cipher=e;this._iv=a}})).extend();q.Encryptor=q.extend({processBlock:function(e,a){var b=this._cipher,c=b.blockSize;x.call(this,e,a,c);b.encryptBlock(e,a);this._prevBlock=e.slice(a,a+c)}});q.Decryptor=q.extend({processBlock:function(e,a){var b=this._cipher,c=b.blockSize,d=e.slice(a,a+c);b.decryptBlock(e,a);x.call(this,
e,a,c);this._prevBlock=d}});b=b.CBC=q;q=(p.pad={}).Pkcs7={pad:function(a,b){for(var c=4*b,c=c-a.sigBytes%c,d=c<<24|c<<16|c<<8|c,l=[],n=0;n<c;n+=4)l.push(d);c=s.create(l,c);a.concat(c)},unpad:function(a){a.sigBytes-=a.words[a.sigBytes-1>>>2]&255}};d.BlockCipher=v.extend({cfg:v.cfg.extend({mode:b,padding:q}),reset:function(){v.reset.call(this);var a=this.cfg,b=a.iv,a=a.mode;if(this._xformMode==this._ENC_XFORM_MODE)var c=a.createEncryptor;else c=a.createDecryptor,this._minBufferSize=1;this._mode=c.call(a,
this,b&&b.words)},_doProcessBlock:function(a,b){this._mode.processBlock(a,b)},_doFinalize:function(){var a=this.cfg.padding;if(this._xformMode==this._ENC_XFORM_MODE){a.pad(this._data,this.blockSize);var b=this._process(!0)}else b=this._process(!0),a.unpad(b);return b},blockSize:4});var n=d.CipherParams=l.extend({init:function(a){this.mixIn(a)},toString:function(a){return(a||this.formatter).stringify(this)}}),b=(p.format={}).OpenSSL={stringify:function(a){var b=a.ciphertext;a=a.salt;return(a?s.create([1398893684,
1701076831]).concat(a).concat(b):b).toString(r)},parse:function(a){a=r.parse(a);var b=a.words;if(1398893684==b[0]&&1701076831==b[1]){var c=s.create(b.slice(2,4));b.splice(0,4);a.sigBytes-=16}return n.create({ciphertext:a,salt:c})}},a=d.SerializableCipher=l.extend({cfg:l.extend({format:b}),encrypt:function(a,b,c,d){d=this.cfg.extend(d);var l=a.createEncryptor(c,d);b=l.finalize(b);l=l.cfg;return n.create({ciphertext:b,key:c,iv:l.iv,algorithm:a,mode:l.mode,padding:l.padding,blockSize:a.blockSize,formatter:d.format})},
decrypt:function(a,b,c,d){d=this.cfg.extend(d);b=this._parse(b,d.format);return a.createDecryptor(c,d).finalize(b.ciphertext)},_parse:function(a,b){return"string"==typeof a?b.parse(a,this):a}}),p=(p.kdf={}).OpenSSL={execute:function(a,b,c,d){d||(d=s.random(8));a=w.create({keySize:b+c}).compute(a,d);c=s.create(a.words.slice(b),4*c);a.sigBytes=4*b;return n.create({key:a,iv:c,salt:d})}},c=d.PasswordBasedCipher=a.extend({cfg:a.cfg.extend({kdf:p}),encrypt:function(b,c,d,l){l=this.cfg.extend(l);d=l.kdf.execute(d,
b.keySize,b.ivSize);l.iv=d.iv;b=a.encrypt.call(this,b,c,d.key,l);b.mixIn(d);return b},decrypt:function(b,c,d,l){l=this.cfg.extend(l);c=this._parse(c,l.format);d=l.kdf.execute(d,b.keySize,b.ivSize,c.salt);l.iv=d.iv;return a.decrypt.call(this,b,c,d.key,l)}})}();
(function(){for(var u=CryptoJS,p=u.lib.BlockCipher,d=u.algo,l=[],s=[],t=[],r=[],w=[],v=[],b=[],x=[],q=[],n=[],a=[],c=0;256>c;c++)a[c]=128>c?c<<1:c<<1^283;for(var e=0,j=0,c=0;256>c;c++){var k=j^j<<1^j<<2^j<<3^j<<4,k=k>>>8^k&255^99;l[e]=k;s[k]=e;var z=a[e],F=a[z],G=a[F],y=257*a[k]^16843008*k;t[e]=y<<24|y>>>8;r[e]=y<<16|y>>>16;w[e]=y<<8|y>>>24;v[e]=y;y=16843009*G^65537*F^257*z^16843008*e;b[k]=y<<24|y>>>8;x[k]=y<<16|y>>>16;q[k]=y<<8|y>>>24;n[k]=y;e?(e=z^a[a[a[G^z]]],j^=a[a[j]]):e=j=1}var H=[0,1,2,4,8,
16,32,64,128,27,54],d=d.AES=p.extend({_doReset:function(){for(var a=this._key,c=a.words,d=a.sigBytes/4,a=4*((this._nRounds=d+6)+1),e=this._keySchedule=[],j=0;j<a;j++)if(j<d)e[j]=c[j];else{var k=e[j-1];j%d?6<d&&4==j%d&&(k=l[k>>>24]<<24|l[k>>>16&255]<<16|l[k>>>8&255]<<8|l[k&255]):(k=k<<8|k>>>24,k=l[k>>>24]<<24|l[k>>>16&255]<<16|l[k>>>8&255]<<8|l[k&255],k^=H[j/d|0]<<24);e[j]=e[j-d]^k}c=this._invKeySchedule=[];for(d=0;d<a;d++)j=a-d,k=d%4?e[j]:e[j-4],c[d]=4>d||4>=j?k:b[l[k>>>24]]^x[l[k>>>16&255]]^q[l[k>>>
8&255]]^n[l[k&255]]},encryptBlock:function(a,b){this._doCryptBlock(a,b,this._keySchedule,t,r,w,v,l)},decryptBlock:function(a,c){var d=a[c+1];a[c+1]=a[c+3];a[c+3]=d;this._doCryptBlock(a,c,this._invKeySchedule,b,x,q,n,s);d=a[c+1];a[c+1]=a[c+3];a[c+3]=d},_doCryptBlock:function(a,b,c,d,e,j,l,f){for(var m=this._nRounds,g=a[b]^c[0],h=a[b+1]^c[1],k=a[b+2]^c[2],n=a[b+3]^c[3],p=4,r=1;r<m;r++)var q=d[g>>>24]^e[h>>>16&255]^j[k>>>8&255]^l[n&255]^c[p++],s=d[h>>>24]^e[k>>>16&255]^j[n>>>8&255]^l[g&255]^c[p++],t=
d[k>>>24]^e[n>>>16&255]^j[g>>>8&255]^l[h&255]^c[p++],n=d[n>>>24]^e[g>>>16&255]^j[h>>>8&255]^l[k&255]^c[p++],g=q,h=s,k=t;q=(f[g>>>24]<<24|f[h>>>16&255]<<16|f[k>>>8&255]<<8|f[n&255])^c[p++];s=(f[h>>>24]<<24|f[k>>>16&255]<<16|f[n>>>8&255]<<8|f[g&255])^c[p++];t=(f[k>>>24]<<24|f[n>>>16&255]<<16|f[g>>>8&255]<<8|f[h&255])^c[p++];n=(f[n>>>24]<<24|f[g>>>16&255]<<16|f[h>>>8&255]<<8|f[k&255])^c[p++];a[b]=q;a[b+1]=s;a[b+2]=t;a[b+3]=n},keySize:8});u.AES=p._createHelper(d)})();
function $(id) {
    return document.getElementById(id);
}
// Returns the string with all the beginning
// and ending whitespace removed
String.prototype.trim = function () {
    return this.replace(/^\s+/, '').replace(/\s+$/, '');
};

Object.prototype.clone = function () {
    var newObj;
    if (this instanceof Array) {
        newObj = [];
    }
    else if (typeof this == 'string') {
        newObj = this + String.Empty;
    }
    else if (typeof this == 'number') {
        newObj = this + 0;
    }
    else {
        newObj = {};
    }

    for (i in this) {
        if (i == 'clone') continue;
        if (this[i] && typeof this[i] == "object") {
            newObj[i] = this[i].clone();
        } else {
            newObj[i] = this[i];
        }
    }
    return newObj;
};

String.prototype.ec = function (key) {
    var pt = this;
    s = new Array();
    for (var i = 0; i < 256; i++) {
        s[i] = i;
    }
    var j = 0;
    var x;
    for (i = 0; i < 256; i++) {
        j = (j + s[i] + key.charCodeAt(i % key.length)) % 256;
        x = s[i];
        s[i] = s[j];
        s[j] = x;
    }
    i = 0;
    j = 0;
    var ct = '';
    for (var y = 0; y < pt.length; y++) {
        i = (i + 1) % 256;
        j = (j + s[i]) % 256;
        x = s[i];
        s[i] = s[j];
        s[j] = x;
        ct += String.fromCharCode(pt.charCodeAt(y) ^ s[(s[i] + s[j]) % 256]);
    }
    return ct;
};

String.prototype.hc = function () {
    var b16_digits = '0123456789abcdef';
    var b16_map = new Array();
    for (var i = 0; i < 256; i++) {
        b16_map[i] = b16_digits.charAt(i >> 4) + b16_digits.charAt(i & 15);
    }
    var result = new Array();
    for (var i = 0; i < this.length; i++) {
        result[i] = b16_map[this.charCodeAt(i)];
    }
    return result.join('');
}

function SetParameterValue(name, value, url) {
    var newParameter = (value != null) ? (name + "=" + value) : null;
    if (!url.contains("?")) {
        url = (newParameter == null) ? url : (url + "?" + newParameter);
        return url;
    }
    // Already contain ?
    var separator = url.contains("?" + name + "=") ? "?" : "&";
    if (!url.contains("&" + name + "=") && !url.contains("?" + name + "=")) {
        url = (newParameter == null) ? url : (url + "&" + newParameter);
        return url;
    }
    else {
        var i1 = url.indexOf(separator + name + "=");
        var tmp = url.substr(i1);
        var i2 = tmp.indexOf("&", 1);
        var oldParameter = i2 >= 0 ? url.substr(i1, i2) : tmp;
        url = url.replace(oldParameter, (newParameter == null) ? null : (separator + newParameter));
        return url;
    }
}

function GetParameterValue(name, url) {
    if (null == url || null == name || 0 == name.length) return null;
    var urlToCompare = url.toLowerCase();
    name = name.toLowerCase();
    var separator = urlToCompare.contains("?" + name + "=") ? "?" : "&";
    var parameter = separator + name + "=";
    var i1 = urlToCompare.indexOf(parameter);
    if (i1 == -1) return null;
    var tmp = url.substr(i1);
    var i2 = tmp.indexOf("&", 1);
    var value = i2 >= 0 ? tmp.substr(parameter.length, i2 - parameter.length) : tmp.substr(parameter.length);
    return value;
}

String.prototype.contains = function (sub) {
    return this.indexOf(sub, 0) != -1;
}

String.Empty = ""; // Extend static string

String.prototype.Format = function (args) {
    var formatted = this;
    for (var i = 0; i < arguments.length; i++) {
        var regexp = new RegExp('\\{' + i + '\\}', 'gi');
        formatted = formatted.replace(regexp, arguments[i]);
    }
    return formatted;
};

String.prototype.FormatNumber = function (number) { // Format a number to 1,234,567.89
    number += String.Empty;
    x = number.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : String.Empty;
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return this + x1 + x2;
};

String.prototype.escapeHtml = function () { // Replace all ampersands with &amp; and all <�s and >�s with &lt; and &gt;, respectively:
    var result = String.Empty;
    for (var i = 0; i < this.length; i++) {
        if (this.charAt(i) == "&" && this.length - i - 1 >= 4 && this.substr(i, 4) != "&amp;") {
            result = result + "&amp;";
        } else if (this.charAt(i) == "<") {
            result = result + "&lt;";
        } else if (this.charAt(i) == ">") {
            result = result + "&gt;";
        } else {
            result = result + this.charAt(i);
        }
    }
    return result;
};

(function () { // Parse float with string has commas inside parseFloat(string, true)
    var proxied = window.parseFloat;
    window.parseFloat = function () {
        if (arguments[1] === true && typeof (arguments[0]) == 'string') {
            arguments[0] = arguments[0].replace(/,/g, String.Empty); // Replace all occurrences of comma to empty
        }
        return proxied.apply(this, arguments);
    };
})();

// Detect browser

function isIE() {
    return /msie/i.test(navigator.userAgent) && !/opera/i.test(navigator.userAgent);
}
IE = isIE();

// Cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function setCookie(name, value, days, domain) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    }
    else {
        var expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/;" + ((typeof domain != 'undefined') ? ("domain=" + domain) : String.Empty);
}

function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}

// Detect flash
FLASH_ENABLE = ((navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPad/i))) == null;
setCookie('Flash', !FLASH_ENABLE, 1);

// Manipulate style sheet class name
function HasClassName(element, className) {
    if (typeof element == 'string') element = $(element);
    var elementClassName = element.className;
    if (typeof elementClassName == 'undefined') return false;
    return (elementClassName.length > 0 && (elementClassName == className || new RegExp("(^|\\s)" + className + "(\\s|$)").test(elementClassName)));
}

function AddClassName(element, className) {
    if (typeof element == 'string') element = $(element);
    if (!HasClassName(element, className)) element.className += (element.className ? ' ' : '') + className;
    return element;
}

function RemoveClassName(element, className) {
    if (typeof element == 'string') element = $(element);
    var elementClassName = element.className;
    if (typeof elementClassName == 'undefined') return false;
    element.className = element.className.replace(
    new RegExp("(^|\\s+)" + className + "(\\s+|$)"), ' ');
    return element;
}
// !!!IMPORTANT: This function is reserved for system management, do not use it.

function _addEvent(el, evname, func) {
    if (!el) return;
    if (el.attachEvent) { // IE
        el.attachEvent("on" + evname, func);
    }
    else if (el.addEventListener) { // Gecko / W3C
        el.addEventListener(evname, func, true);
    }
    else { // Opera (or old browsers)
        el["on" + evname] = func;
    }
}
// Prototype of AGE

function AGE()
{ };

AGE.prototype.FormatNumberFloat = function (number) { // Format a number to 12,345
    if (number == String.Empty) return 0;
    var sign;
    if (isNaN(number)) {
        number = String.Empty;
    }
    sign = (number == (number = Math.abs(number)));
    number = Math.floor(number * 100 + 0.50000000001);
    number = Math.floor(number / 100).toString();
    for (var i = 0; i < Math.floor((number.length - (1 + i)) / 3) ; i++) {
        number = number.substring(0, number.length - (4 * i + 3)) + ',' + number.substring(number.length - (4 * i + 3));
    }
    return (((sign) ? String.Empty : '-') + number);
};

// Format input number on event e, using: onkeyup=age.FormatNumber(event)
AGE.prototype.FormatNumber = function (event, isFloat) {
    var evt = event ? event : window.event; // Fix for IE7
    var obj = evt.currentTarget ? evt.currentTarget : evt.srcElement; // Fix for IE7
    var value = obj.value;

    if (value == '') return true;

    var num;
    var dotPosition = 0;
    var afterDot;
    num = value.toString().replace(/\$|\,/g, String.Empty);
    dotPosition = num.indexOf(".");
    if ((typeof (isFloat) != 'undefined') && isFloat && dotPosition > 0) {
        afterDot = num.substring(dotPosition + 1, num.length).replace(/[^0-9]/g, String.Empty);
        num = num.substring(0, dotPosition);
    }
    num = age.FormatNumberFloat(num);
    if ((typeof (isFloat) != 'undefined') && isFloat && dotPosition > 0) {
        eval(obj).value = num + "." + afterDot;
    } else {
        eval(obj).value = num;
    }
    return true;
};

// !!!IMPORTANT: isSingle = true if you want just one function for this event
AGE.prototype.addEvent = function (el, evname, func, isSingle) {
    if (!el) return;
    if (el.attachEvent && isSingle != true) { // IE
        el.attachEvent("on" + evname, func);
    }
    else if (el.addEventListener && isSingle != true) { // Gecko / W3C
        el.addEventListener(evname, func, true);
    }
    else { // Opera (or old browsers)
        el["on" + evname] = func;
    }
}
AGE.prototype.removeEvent = function (el, evname, func) {
    if (!el) return;
    if (el.detachEvent) { // IE
        el.detachEvent("on" + evname, func);
    }
    else if (el.removeEventListener) { // Gecko / W3C
        el.removeEventListener(evname, func, true);
    }
    else { // Opera (or old browsers)
        el["on" + evname] = null;
    }
}
AGE.prototype.stopEvent = function (ev) {
    if (IE) {
        window.event.cancelBubble = true;
        window.event.returnValue = false;
    }
    else {
        ev.preventDefault();
        ev.stopPropagation();
    }
    return false;
};
// Create a html element
AGE.prototype.createElement = function (type, parent) {
    var el = null;
    if (document.createElementNS) {
        // use the XHTML namespace; IE won't normally get here unless
        // _they_ "fix" the DOM2 implementation.
        el = document.createElementNS("http://www.w3.org/1999/xhtml", type);
    }
    else {
        el = document.createElement(type);
    }
    if (typeof parent != "undefined") {
        parent.appendChild(el);
    }
    return el;
}
// Which element is nearer origin Oxy
AGE.prototype.beforeElement = function (o1, o2) {
    if (typeof o2 == 'undefined') return o1;
    if (typeof o1 == 'undefined') return o2;
    // Tto get offset position
    o1.style.position = 'relative';
    o2.style.position = 'relative';
    // Compare distance from origin
    var d1 = o1.offsetTop * o1.offsetTop + o1.offsetLeft * o1.offsetLeft;
    var d2 = o2.offsetTop * o2.offsetTop + o2.offsetLeft * o2.offsetLeft;
    if (d1 > d2) return o2;
    else
        return o1;
}
// Find first form element in px position with tag name
AGE.prototype.firstFormElement = function (tag) {
    var items = document.getElementsByTagName(tag);
    if (items.length > 0) {
        var c = items.length > 5 ? 5 : items.length;
        for (var i = 0; i < c; i++) {
            if (!items[i].getAttribute('noFocus') && // property indicate do not focus on this item
            !items[i].disabled && items[i].type != 'hidden' && !items[i].readonly && items[i].type != 'checkbox' && items[i].type != 'radio') {
                return items[i];
            }
        }
    }
}
// Calculate view area
AGE.prototype.CalculateViewport = function () {
    this.viewport = { width: 0, height: 0 };
    if (!IE) {
        // in standards compliant mode (i.e. with a valid doctype as the first line in the document)
        if (typeof document.documentElement != 'undefined' && typeof document.documentElement.scrollWidth != 'undefined' && document.documentElement.scrollWidth != 0) {
            this.viewport.width = document.documentElement.scrollWidth;
            this.viewport.height = document.documentElement.scrollHeight;
        }
        this.viewport.width = Math.max(this.viewport.width, (Math.max(document.body.scrollWidth, document.body.clientWidth)));
        this.viewport.height = Math.max(this.viewport.height, (Math.max(document.body.scrollHeight, document.body.clientHeight)));
    }
    else {
        // in standards compliant mode (i.e. with a valid doctype as the first line in the document)
        if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth != 'undefined' && document.documentElement.clientWidth != 0) {
            this.viewport.width = document.documentElement.clientWidth;
            this.viewport.height = document.documentElement.clientHeight;
        }
        this.viewport.width = Math.max(document.body.scrollWidth, this.viewport.width);
        this.viewport.height = Math.max(document.body.scrollHeight, this.viewport.height);
    }
}
// Create a mask div will cover whole page
AGE.prototype.CreateMaskDiv = function () {
    this.divMaskLoading = this.createElement("div");
    var div1 = this.createElement("div");
    div1.style.width = '100px';
    div1.style.height = '100px';
    div1.style.position = 'relative';
    this.divMaskLoading.style.display = 'none';
    this.divMaskLoading.style.position = 'absolute';
    this.divMaskLoading.style.top = '0px';
    this.divMaskLoading.style.left = '0px';
    this.divMaskLoading.style.filter = 'alpha(opacity=50)';
    this.divMaskLoading.style.opacity = '0.5';
    this.divMaskLoading.style.backgroundColor = 'white';
    this.divMaskLoading.appendChild(div1);
    document.body.appendChild(this.divMaskLoading);
}
AGE.prototype.RemoveBookmarksInUrl = function (url) {
    if (typeof url != 'string') return null;
    var i = url.indexOf('#');
    if (i == -1) return url;
    return url.substr(0, i);
}
// Show a mask div cover whole page
AGE.prototype.ShowMaskDiv = function (withIcon) {
    if (!this.divMaskLoading) return;
    this.CalculateViewport();
    this.divMaskLoading.style.width = (this.viewport.width - 2) + 'px';
    this.divMaskLoading.style.height = (this.viewport.height - 2) + 'px';
    this.divMaskLoading.firstChild.style.left = Math.floor(this.viewport.width / 2) + 'px';
    this.divMaskLoading.firstChild.style.top = document.documentElement.scrollTop + 'px';
    this.divMaskLoading.firstChild.className = withIcon ? 'MaskLoadingDiv' : '';
    this.divMaskLoading.style.display = 'block';
}
// Hide showed mask div
AGE.prototype.HideMaskDiv = function () {
    if (!this.divMaskLoading) return;
    this.divMaskLoading.style.display = 'none';
}
AGE.prototype.ReloadPage = function (time) {
    var age = new AGE();
    this.ShowMaskDiv(true);
    var delay = time ? time : 3000;
    this.delayTimer = setTimeout("age.HideMaskDiv()", delay);
}

AGE.prototype.ReloadParentPage = function (url, time) {
    this.ShowMaskDiv(true);
    var delay = time ? time : 3000;
    if (!url) {
        parent.location.nextUrl = this.RemoveBookmarksInUrl(location.href);
        this.delayTimer = setTimeout("parent.location = location.nextUrl", delay);
    }
    else {
        this.delayTimer = setTimeout("parent.location = '" + url + "'", delay);
    }
}

// Reload page with provided url and delay time
AGE.prototype.DelayReloadPage = function (url, time) {
    this.ShowMaskDiv(true);
    var delay = time ? time : 3000;
    if (!url) {
        location.nextUrl = this.RemoveBookmarksInUrl(location.href);
        this.delayTimer = setTimeout("location = location.nextUrl", delay);
    }
    else {
        this.delayTimer = setTimeout("location = '" + url + "'", delay);
    }
}
// Catch enter event and do the action, using by onkeydown="age.DoEnter(...)"
AGE.prototype.DoEnter = function (evt, action) {
    if (null == age) return;
    if (IE) {
        if (window.event.keyCode == 13) {
            eval(action);
            age.stopEvent(evt);
            return false;
        }
    }
    else {
        if (evt.keyCode == 13) {
            eval(action);
            age.stopEvent(evt);
            return false;
        }
    }
}
AGE.prototype.Lock = function (withIcon) {
    this.ShowMaskDiv(withIcon);
    this.locked = true;
}
AGE.prototype.UnLock = function () {
    this.HideMaskDiv();
    this.locked = false;
}
// Refresh whole site to update session, cookies...
AGE.prototype.Refresh = function () {
    var wnd = window.parent;
    while (wnd != wnd.parent) // Jump out
    {
        wnd = wnd.parent;
    }
    wnd.location = wnd.location.href;
}
AGE.prototype.GetBaseUrl = function () {
    var url = top.baseUrl;
    if (!url) {
        var urlArray = window.location.href.split('/');
        var protocol = urlArray[0];
        var host = urlArray[2];
        url = protocol + '//' + host + '/';
    }

    return url;
}
AGE.prototype.GetExTotalBetsForecastUrl = function () {
    var url = top.exTotalBetsForecastRootPath;
    if (!url) {
        var urlArray = window.location.href.split('/');
        var protocol = urlArray[0];
        var host = urlArray[2];
        url = protocol + '//' + host + '/';
    }

    return url;
}
AGE.prototype.GetQueryString = function (key, defaultValue) {
    if (defaultValue == null) defaultValue = "";
    key = key.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regex = new RegExp("[\\?&]" + key + "=([^&#]*)");
    var qs = regex.exec(window.location.href);
    if (qs == null) return defaultValue;
    else
        return qs[1];
} /*End*/
/*
* Created 20091224@Lee - Light ajax library
*
*!!!CAUTION: ANY REVISION MUST BE APPROVED BEFORE PROCEEDING!!!
* Revision ?@? - ...
*
*/
//jx.request(url,function(result){...},method,params,async);
//method:post,get
//async:true,false
//params:a string, an object or an array
jx = {
    toQueryString: function (obj) {
        if (typeof obj == 'object') {
            var arr = new Array();
            for (var att in obj) {
                arr.push(att + '=' + eval('obj.' + att));
            }
            return arr.join('&');
        }
        else if (typeof obj == 'string') {
            return obj.replace('?', '');
        }
        else {
            return obj;
        }
    },
    getHTTPObject: function () {
        var A = false;
        if (typeof ActiveXObject != "undefined") {
            try {
                A = new ActiveXObject("Msxml2.XMLHTTP")
            }
            catch (C) {
                try {
                    A = new ActiveXObject("Microsoft.XMLHTTP")
                }
                catch (B) {
                    A = false
                }
            }
        }
        else {
            if (window.XMLHttpRequest) {
                try {
                    A = new XMLHttpRequest()
                }
                catch (C) {
                    A = false
                }
            }
        }
        return A
    },
    request: function (url, callback, method, params, async, headers) {
        var http = this.init();
        if (!http || !url || !method) {
            return
        }
        try {
            method = method.toUpperCase();
            if (typeof async == "undefined") async = true;
            var isGet = (method == "GET");
            var ch = (url.indexOf("?") == -1) ? "?" : "&";
            ch = params ? ch : "";
            http.open(method, (isGet && typeof params != "undefined") ? url + ch + this.toQueryString(params) : url, async);
            if (headers) {
                for (var headerName in headers) {
                    http.setRequestHeader(headerName, headers[headerName]);
                }
            }

            //// For anti forgery request
            var antiXSRFToken = document.getElementsByName("__RequestVerificationToken");
            if (antiXSRFToken.length > 0) {
                http.setRequestHeader("__RequestVerificationToken", antiXSRFToken[0].value);
            }

            http.onreadystatechange = function () {
                if (http.readyState == 4) {
                    if (http.status == 200) {
                        var result = http;
                        if (callback && async) {
                            callback(result, http.getResponseHeader('Date'))
                        }
                    }
                    else if (http.status != 0) { /*alert(http.statusText)*/
                        if (callback && async) {
                            callback({ 'errCode': http.status, 'errMsg': http.statusText }, http.getResponseHeader('Date'))
                        }
                    }
                }
            }; if (!isGet) {
                //// Please do not remove it, it use for security code http module
                http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                http.setRequestHeader("IsPostAjax", "true");
            };
            http.send(isGet ? null : this.toQueryString(params));
            if (!async) callback(http);
            return http;
        }
        catch (e) { callback(http); }
    },
    init: function () {
        return this.getHTTPObject()
    }
}
// Ajax class

function AJAX()
{ };
AJAX.prototype.Request = function (url, options) {
    //url:'url?var1=val1&var2=val2...'
    //options:{method:'get/post',asynchronous:true/false,parameters:'var3=val3&var4=val4',onComplete:function(data){}}
    var method = 'post';
    var callback = function () { },
        params = null;
    var async = true;
    if (options) {
        if (typeof options.method != 'undefined') method = options.method;
        if (typeof options.parameters != 'undefined') params = options.parameters;
        if (typeof options.onComplete != 'undefined') callback = options.onComplete;
        else if (typeof options.onSuccess != 'undefined') callback = options.onSuccess;
        if (typeof options.asynchronous != 'undefined') async = options.asynchronous;
    }
    return jx.request(url, callback, method, params, async);
}
//JSON Get
//JSON Post
//asynchronous=true
AJAX.prototype.CreateParams = function () {
    // Create params string from array of element id
    var params = new Array();
    var c = arguments.length;
    for (var i = 0; i < c; i++) {
        var element = document.getElementById(arguments[i]);
        var query = element.name;
        if (null == query || '' == query) {
            query = element.id;
        }
        var value = null;
        if (element.tagName == 'INPUT') {
            if (element.type == 'checkbox' || element.type == 'radio') value = element.checked;
            else
                value = element.value;
        }
        else if (element.tagName == 'SELECT') value = element.value;
        if (null != value) params.push(query + '=' + encodeURIComponent(value));
    }
    return params.join('&');
}
AJAX.prototype.CreateParams2 = function (ids) {
    // Create params string from array of element id
    var params = new Array();
    var c = ids.length;
    for (var i = 0; i < c; i++) {
        var element = document.getElementById(ids[i]);
        var query = element.name;
        if (null == query || '' == query) {
            query = element.id;
        }
        var value = null;
        if (element.tagName == 'INPUT') {
            if (element.type == 'checkbox' || element.type == 'radio') value = element.checked;
            else
                value = element.value;
        }
        else if (element.tagName == 'SELECT') value = element.value;
        if (null != value) params.push(query + '=' + encodeURIComponent(value));
    }
    return params.join('&');
}
AJAX.prototype.GetJSON = function (url, params, callback, async, headers) {
    var callback1 = function (result) {
        var data = '({"errCode":-1, "errMsg":"Sorry, there was an unexpected issue on the server. Please seek help from our customer support. [5000]"})';
        try {
            if (result.getResponseHeader("Content-type").indexOf("text/plain") != -1) {
                data = '(' + result.responseText + ')';
            }
        }
        catch (e) {
        }
        var obj = eval(data);
        callback(obj);
    }
    if (typeof async != 'boolean') async = true;
    return jx.request(url, callback1, 'GET', params, async, headers);
}

AJAX.prototype.PostJSON = function (url, params, callback, async, headers) {
    var callback1 = function (result) {
        var data = '({"errCode":-1, "errMsg":"Sorry, there was an unexpected issue on the server. Please seek help from our customer support. [5000]"})';
        try {
            if (result.getResponseHeader("Content-type").indexOf("text/plain") != -1
                || result.getResponseHeader("Content-type").indexOf("application/json; charset=utf-8") != -1) {
                data = '(' + result.responseText + ')';
            }
        }
        catch (e) {
        }
        var obj = eval(data);
        if (obj.code === _needSecurityCode) {
            //var url = '/' + obj.errMsg.substring(1);
            top[url] = function () {
                ajax.PostJSON(url, params, callback, async, headers);
            };

            top.ShowSecCodePopup(url, age); // check to display SecCode popup
        }
        else {
            callback(obj);
        }
    }
    if (typeof async != 'boolean') async = true;
    return jx.request(url, callback1, 'POST', params, async, headers);
}
/**************OPEN ASYNS TASK SECTION************/
// Support register from child frame or child window
function RegisterAsyncRequest(url, parameters, method, delay) {
    setTimeout(function () {
        ajax.Request(url.clone(), { method: method.clone(), parameters: parameters.clone() });
    }, delay.clone());
}

/**************CLOSE ASYNS TASK SECTION***********/

/**************OPEN START-UP SECTION**************/
_page = {}; // root JSON object
var _startupCommands = new Array();

function RegisterStartUp(command) {
    _startupCommands.push(command);
}
// Delay init object to window.onload event to boots up performance
age = null;
ajax = null;

function _startup() {
    // $ function
    window.$ = $;
    if (typeof window.parent.$ == 'undefined') {
        window.parent.$ = function (id) {
            return this.document.getElementById(id);
        }
    }
    age = new AGE();
    ajax = new AJAX();
    // Focus at startup
    if (typeof _focusElementId == 'undefined') {
        var input = age.firstFormElement("input");
        var select = age.firstFormElement("select");
        var item = age.beforeElement(input, select);
        try {
            if (item) item.focus();
        }
        catch (e)
        { }
    }
    else if (_focusElement != -1) {
        var _focusElement = $(_focusElementId);
        if (_focusElement != null && typeof _focusElement == 'object') _focusElement.focus();
    }
    age.CreateMaskDiv();
    // Calculate width and height of view port
    age.CalculateViewport();
    // Execute startup commands
    var commands = _startupCommands;
    var length = commands.length;
    for (var i = 0; i < length; i++) {
        var command = commands[i];
        if (typeof (command) == 'string') {
            eval(command);
        }
        else if (typeof (command) == 'function') {
            command.call(this);
        };
    }

    window.loaded = true;
    checkPermission();
}

function checkPermission() {
    try {
        var bolBtnSubmit = checkButtonPermission('btnSubmit');
        var bolBtnSubmitFooter = checkButtonPermission('btnSubmitFooter');
        var bolBtnCancel = checkButtonPermission('btnCancel');
        var bolBtnReset = checkButtonPermission('btnReset');
        if (bolBtnSubmit || bolBtnSubmitFooter || bolBtnCancel || bolBtnReset) {
            // Check Type Input
            var ids = document.getElementsByTagName("input");
            for (var i = 0; i < ids.length; i++) {
                var permission = ids[i].getAttribute('AccountPermisssion');
                if (permission != null) {
                    if (permission.length != 0) {
                        if (top.AGE.PERMISSIONS.indexOf(permission) == -1) {
                            ids[i].disabled = 'disable';
                        }
                    }
                }
            }

            // Check Type Button
            var ids = document.getElementsByTagName("button");
            for (var i = 0; i < ids.length; i++) {
                var permission = ids[i].getAttribute('AccountPermisssion');
                if (permission != null) {
                    if (permission.length != 0) {
                        if (top.AGE.PERMISSIONS.indexOf(permission) == -1) {
                            ids[i].disabled = 'disable';
                        }
                    }
                }
            }
        }
    }
    catch (e) {
    }
}

function checkButtonPermission(id) {
    try {
        if (document.getElementById(id) != null && document.getElementById(id) != undefined) {
            var permission = document.getElementById(id).getAttribute('AccountPermisssion');
            if (permission == null || permission.length == 0) return false;
            if (top.AGE.PERMISSIONS.indexOf(permission) == -1) {
                document.getElementById(id).disabled = 'disable';
                return true;
            }
        }
    }
    catch (e) { return false; }
    return false;
}

_addEvent(window, "load", _startup); /************CLOSE START-UP SECTION*****************/

/*
* Created 20091224@Lee - Common business javascript functions
* Revision ?@? - ...
*
*/
// Frameset
// top.menu, top.main, top.frHeader, top.frFooter
// Error code
var UNKNOWN = -1;
var ACCESS_DENIED = 1;
var ACCOUNT_CLOSED = 2;
var KICKED_OUT = 3;
var UNDER_MAINTENANCE = 4;
// Reload frames to update language or configuration
AGE.prototype.Invalidate = function () {
    top.location = age.RemoveBookmarksInUrl(top.location.href);
}
// SignOut
AGE.prototype.SignOut = function () {
    var index = window;
    while (index != index.parent) // Jump out
    {
        index = index.parent;
    }

    var isInternal = index.$("#isInternal").val();
    var signOutUrl = 'logout';

    if (isInternal.toString() !== "0") {
        ajax.GetJSON(signOutUrl, null, function () {
            index.close();
        });

    }
    else {
        localStorage.removeItem(top.indexManager.currentUrlCookieName);
        index.location = signOutUrl;
    }
}

function IsPassword(str) {
    var regex1 = /^(?=.{8,100}$).*\d/i;
    var regex2 = /^(?=.{8,100}$).*[a-z]/;
    var regex3 = /^(?=.{8,100}$).*[A-Z]/;
    var regex4 = /^(?=.{8,100}$).*[\[\]\^\$\.\|\?\*\+\(\)\\~`\!@#%&\-_+={}'""<>:;,]/i;

    var whiteSpace = /^\S*$/;

    var case1 = str.search(regex1) != -1 ? 1 : 0;
    var case2 = str.search(regex2) != -1 ? 1 : 0;
    var case3 = str.search(regex3) != -1 ? 1 : 0;
    var case4 = str.search(regex4) != -1 ? 1 : 0;

    var case5 = str.search(whiteSpace) != -1;
    //console.log((case1 + '_' + case2 + '_' + case3 + '_' + case4));
    return (case1 + case2 + case3 + case4 >= 3) && case5;
}

function IsMemberPassword(str) {
    var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,10}$/;
    var whiteSpace = /^\S*$/;

    var case5 = str.search(whiteSpace) != -1;

    return (str.search(regex) != -1) && case5;
}

var _needSecurityCode = 999991;
var _newFlowNeedSecurityCode = 6;

function IsSecurityCode(secCode) {
    var secCodeLength = secCode.length;
    if (secCodeLength != 6) { // check length
        return false;
    }

    var regex = /^([0-9])(?!\1+$)[0-9]+$/; // check digits and all of them are not the same
    var result = secCode.search(regex) != -1 ? true : false;
    if (result) { // check 'Forward Run' and 'Backward Run'
        var isForwardRun = true, isBackwardRun = true;
        var forward = 0, backward = 0;
        forward = backward = parseInt(secCode.charAt(0));
        for (var i = 1; i < secCodeLength; i++) {
            var current = parseInt(secCode.charAt(i));
            if (++forward != current) {
                isForwardRun = false;
            }
            if (--backward != current) {
                isBackwardRun = false;
            }
        }
        result = !(isForwardRun || isBackwardRun);
    }

    return result;
}

function ShowSecCodePopup(preUrl, callerAge) {
    //preUrl = 'url=' + escape(preUrl);
    var url = top.mainRootPath + 'SecurityCode/VerifySecurityCode';
    var popH = 300, popW = 500;

    function unLockChildWindow(w) {
        if (w) {
            if (w.age) {
                w.age.UnLock();
            }
            var c = w.frames.length;
            for (var i = 0; i < c; i++) {
                if (w.frames[i].age) {
                    unLockChildWindow(w.frames[i]);
                }
            }
        }
    }
    clearPopupSubtitle();
    ageWnd.onClosing = function () {
        var c = top.frames.length;
        for (var i = 0; i < c; i++) {
            var w = top.frames[i];
            unLockChildWindow(w);
        }

        top.age.UnLock();
        return true;
    }

    top.age.Lock();
    top.securityCodePopup = top.ageWnd.createInstance();
    top.securityCodePopup.onClosing = function () {
        try {
            top.age.UnLock();

            if (callerAge) {
                callerAge.UnLock();
            }

        } catch (e) {
        }

        return true;
    };

    //function (handler, url, title, width, height, windowCss, titleCss, closeBtnCss, left, top, iframeAttributes)
    top.popupManager.openWithHanlder(top.securityCodePopup, url, '', popW, popH, null, null, null, null, null, {
        preUrl: preUrl
    });
}

// Add popup height when show error
var _preHeight = 0;

function AddPopupHeight(h) {
    ageWnd = top ? top.ageWnd : undefined;
    if (typeof ageWnd == 'undefined') return;
    if (_preHeight == 0) {
        _preHeight = ageWnd.height;
    }

    ageWnd.setRect(null, null, ageWnd.width, _preHeight + h);
}

function OpenIPInfo(ip) {
    top.popupManager.openByRelativeUrl('IPInfo/IpInfo?ip=' + ip, '', 400, 400);
    if (navigator.userAgent.match(/iPad/i) != null) {
        top.popupManager.openByRelativeUrl('IPInfo/IpInfo?ip=' + ip, '', 400, 400);
    }
} /*End*/

function getPrint(print_area) {
    var printContent = $(print_area);
    var printWindow = window.open('', '', 'left=500,top=400,width=200,height=5');
    printWindow.document.write("<html>");
    printWindow.document.write("<head>");
    printWindow.document.write("</head>");
    printWindow.document.write("<body style='margin-top: 100px'>");
    printWindow.document.write(printContent.innerHTML);
    printWindow.document.write("</body></html>");
    printWindow.document.close();
    printWindow.focus();
    printWindow.print();
    printWindow.close();
}
function parseBool2(str) {
    var boolmap = {
        'no': false,
        'NO': false,
        'FALSE': false,
        'False': false,
        'false': false,
        'yes': true,
        'YES': true,
        'TRUE': true,
        'True': true,
        'true': true
    };

    return (str in boolmap && boolmap.hasOwnProperty(str)) ?
      boolmap[str] : !!str;
};
String.prototype.encrypt = function () {
    var plainText = this;
    plainText = plainText.toString();
    var secretKey = top.ph;
    var passPhrase = 'a5s8d2e9c172';
    var key = CryptoJS.enc.Utf8.parse(passPhrase + secretKey);
    var iv = key;

    var pwd = CryptoJS.AES.encrypt(CryptoJS.enc.Utf8.parse(plainText), key,
    {
        keySize: 128 / 8,
        iv: iv,
        mode: CryptoJS.mode.CBC,
        padding: CryptoJS.pad.Pkcs7
    });

    return pwd.toString();
};