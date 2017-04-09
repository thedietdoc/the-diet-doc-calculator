(function(a){function W(a,b){return function(c){return ba(a.call(this,c),b)}}function X(a,b){return function(c){return this.lang().ordinal(a.call(this,c),b)}}function Y(){}function Z(a){na(a),_(this,a)}function $(a){var b=ha(a),c=b.year||0,d=b.month||0,e=b.week||0,f=b.day||0,g=b.hour||0,h=b.minute||0,i=b.second||0,j=b.millisecond||0;this._milliseconds=+j+1e3*i+6e4*h+36e5*g,this._days=+f+7*e,this._months=+d+12*c,this._data={},this._bubble()}function _(a,b){for(var c in b)b.hasOwnProperty(c)&&(a[c]=b[c]);return b.hasOwnProperty("toString")&&(a.toString=b.toString),b.hasOwnProperty("valueOf")&&(a.valueOf=b.valueOf),a}function aa(a){return a<0?Math.ceil(a):Math.floor(a)}function ba(a,b,c){for(var d=Math.abs(a)+"",e=a>=0;d.length<b;)d="0"+d;return(e?c?"+":"":"-")+d}function ca(a,c,d,e){var i,j,f=c._milliseconds,g=c._days,h=c._months;f&&a._d.setTime(+a._d+f*d),(g||h)&&(i=a.minute(),j=a.hour()),g&&a.date(a.date()+g*d),h&&a.month(a.month()+h*d),f&&!e&&b.updateOffset(a),(g||h)&&(a.minute(i),a.hour(j))}function da(a){return"[object Array]"===Object.prototype.toString.call(a)}function ea(a){return"[object Date]"===Object.prototype.toString.call(a)||a instanceof Date}function fa(a,b,c){var g,d=Math.min(a.length,b.length),e=Math.abs(a.length-b.length),f=0;for(g=0;g<d;g++)(c&&a[g]!==b[g]||!c&&ja(a[g])!==ja(b[g]))&&f++;return f+e}function ga(a){if(a){var b=a.toLowerCase().replace(/(.)s$/,"$1");a=P[a]||Q[b]||b}return a}function ha(a){var c,d,b={};for(d in a)a.hasOwnProperty(d)&&(c=ga(d),c&&(b[c]=a[d]));return b}function ia(c){var d,e;if(0===c.indexOf("week"))d=7,e="day";else{if(0!==c.indexOf("month"))return;d=12,e="month"}b[c]=function(f,g){var h,i,j=b.fn._lang[c],k=[];if("number"==typeof f&&(g=f,f=a),i=function(a){var c=b().utc().set(e,a);return j.call(b.fn._lang,c,f||"")},null!=g)return i(g);for(h=0;h<d;h++)k.push(i(h));return k}}function ja(a){var b=+a,c=0;return 0!==b&&isFinite(b)&&(c=b>=0?Math.floor(b):Math.ceil(b)),c}function ka(a,b){return new Date(Date.UTC(a,b+1,0)).getUTCDate()}function la(a){return ma(a)?366:365}function ma(a){return a%4===0&&a%100!==0||a%400===0}function na(a){var b;a._a&&a._pf.overflow===-2&&(b=a._a[h]<0||a._a[h]>11?h:a._a[i]<1||a._a[i]>ka(a._a[g],a._a[h])?i:a._a[j]<0||a._a[j]>23?j:a._a[k]<0||a._a[k]>59?k:a._a[l]<0||a._a[l]>59?l:a._a[m]<0||a._a[m]>999?m:-1,a._pf._overflowDayOfYear&&(b<g||b>i)&&(b=i),a._pf.overflow=b)}function oa(a){a._pf={empty:!1,unusedTokens:[],unusedInput:[],overflow:-2,charsLeftOver:0,nullInput:!1,invalidMonth:null,invalidFormat:!1,userInvalidated:!1,iso:!1}}function pa(a){return null==a._isValid&&(a._isValid=!isNaN(a._d.getTime())&&a._pf.overflow<0&&!a._pf.empty&&!a._pf.invalidMonth&&!a._pf.nullInput&&!a._pf.invalidFormat&&!a._pf.userInvalidated,a._strict&&(a._isValid=a._isValid&&0===a._pf.charsLeftOver&&0===a._pf.unusedTokens.length)),a._isValid}function qa(a){return a?a.toLowerCase().replace("_","-"):a}function ra(a,b){return b.abbr=a,n[a]||(n[a]=new Y),n[a].set(b),n[a]}function sa(a){delete n[a]}function ta(a){var d,e,f,g,c=0,h=function(a){if(!n[a]&&o)try{require("./lang/"+a)}catch(a){}return n[a]};if(!a)return b.fn._lang;if(!da(a)){if(e=h(a))return e;a=[a]}for(;c<a.length;){for(g=qa(a[c]).split("-"),d=g.length,f=qa(a[c+1]),f=f?f.split("-"):null;d>0;){if(e=h(g.slice(0,d).join("-")))return e;if(f&&f.length>=d&&fa(g,f,!0)>=d-1)break;d--}c++}return b.fn._lang}function ua(a){return a.match(/\[[\s\S]/)?a.replace(/^\[|\]$/g,""):a.replace(/\\/g,"")}function va(a){var c,d,b=a.match(s);for(c=0,d=b.length;c<d;c++)U[b[c]]?b[c]=U[b[c]]:b[c]=ua(b[c]);return function(e){var f="";for(c=0;c<d;c++)f+=b[c]instanceof Function?b[c].call(e,a):b[c];return f}}function wa(a,b){return a.isValid()?(b=xa(b,a.lang()),R[b]||(R[b]=va(b)),R[b](a)):a.lang().invalidDate()}function xa(a,b){function d(a){return b.longDateFormat(a)||a}var c=5;for(t.lastIndex=0;c>=0&&t.test(a);)a=a.replace(t,d),t.lastIndex=0,c-=1;return a}function ya(a,b){var c,d=b._strict;switch(a){case"DDDD":return F;case"YYYY":case"GGGG":case"gggg":return d?G:w;case"YYYYYY":case"YYYYY":case"GGGGG":case"ggggg":return d?H:x;case"S":if(d)return D;case"SS":if(d)return E;case"SSS":case"DDD":return d?F:v;case"MMM":case"MMMM":case"dd":case"ddd":case"dddd":return z;case"a":case"A":return ta(b._l)._meridiemParse;case"X":return C;case"Z":case"ZZ":return A;case"T":return B;case"SSSS":return y;case"MM":case"DD":case"YY":case"GG":case"gg":case"HH":case"hh":case"mm":case"ss":case"ww":case"WW":return d?E:u;case"M":case"D":case"d":case"H":case"h":case"m":case"s":case"w":case"W":case"e":case"E":return d?D:u;default:return c=new RegExp(Ga(Fa(a.replace("\\","")),"i"))}}function za(a){var b=(A.exec(a)||[])[0],c=(b+"").match(M)||["-",0,0],d=+(60*c[1])+ja(c[2]);return"+"===c[0]?-d:d}function Aa(a,b,c){var d,e=c._a;switch(a){case"M":case"MM":null!=b&&(e[h]=ja(b)-1);break;case"MMM":case"MMMM":d=ta(c._l).monthsParse(b),null!=d?e[h]=d:c._pf.invalidMonth=b;break;case"D":case"DD":null!=b&&(e[i]=ja(b));break;case"DDD":case"DDDD":null!=b&&(c._dayOfYear=ja(b));break;case"YY":e[g]=ja(b)+(ja(b)>68?1900:2e3);break;case"YYYY":case"YYYYY":case"YYYYYY":e[g]=ja(b);break;case"a":case"A":c._isPm=ta(c._l).isPM(b);break;case"H":case"HH":case"h":case"hh":e[j]=ja(b);break;case"m":case"mm":e[k]=ja(b);break;case"s":case"ss":e[l]=ja(b);break;case"S":case"SS":case"SSS":case"SSSS":e[m]=ja(1e3*("0."+b));break;case"X":c._d=new Date(1e3*parseFloat(b));break;case"Z":case"ZZ":c._useUTC=!0,c._tzm=za(b);break;case"w":case"ww":case"W":case"WW":case"d":case"dd":case"ddd":case"dddd":case"e":case"E":a=a.substr(0,1);case"gg":case"gggg":case"GG":case"GGGG":case"GGGGG":a=a.substr(0,2),b&&(c._w=c._w||{},c._w[a]=b)}}function Ba(a){var c,d,f,l,m,n,o,p,q,r,e=[];if(!a._d){for(f=Da(a),a._w&&null==a._a[i]&&null==a._a[h]&&(m=function(c){var d=parseInt(c,10);return c?c.length<3?d>68?1900+d:2e3+d:d:null==a._a[g]?b().weekYear():a._a[g]},n=a._w,null!=n.GG||null!=n.W||null!=n.E?o=Qa(m(n.GG),n.W||1,n.E,4,1):(p=ta(a._l),q=null!=n.d?Ma(n.d,p):null!=n.e?parseInt(n.e,10)+p._week.dow:0,r=parseInt(n.w,10)||1,null!=n.d&&q<p._week.dow&&r++,o=Qa(m(n.gg),r,q,p._week.doy,p._week.dow)),a._a[g]=o.year,a._dayOfYear=o.dayOfYear),a._dayOfYear&&(l=null==a._a[g]?f[g]:a._a[g],a._dayOfYear>la(l)&&(a._pf._overflowDayOfYear=!0),d=La(l,0,a._dayOfYear),a._a[h]=d.getUTCMonth(),a._a[i]=d.getUTCDate()),c=0;c<3&&null==a._a[c];++c)a._a[c]=e[c]=f[c];for(;c<7;c++)a._a[c]=e[c]=null==a._a[c]?2===c?1:0:a._a[c];e[j]+=ja((a._tzm||0)/60),e[k]+=ja((a._tzm||0)%60),a._d=(a._useUTC?La:Ka).apply(null,e)}}function Ca(a){var b;a._d||(b=ha(a._i),a._a=[b.year,b.month,b.day,b.hour,b.minute,b.second,b.millisecond],Ba(a))}function Da(a){var b=new Date;return a._useUTC?[b.getUTCFullYear(),b.getUTCMonth(),b.getUTCDate()]:[b.getFullYear(),b.getMonth(),b.getDate()]}function Ea(a){a._a=[],a._pf.empty=!0;var d,e,f,g,h,b=ta(a._l),c=""+a._i,i=c.length,k=0;for(f=xa(a._f,b).match(s)||[],d=0;d<f.length;d++)g=f[d],e=(ya(g,a).exec(c)||[])[0],e&&(h=c.substr(0,c.indexOf(e)),h.length>0&&a._pf.unusedInput.push(h),c=c.slice(c.indexOf(e)+e.length),k+=e.length),U[g]?(e?a._pf.empty=!1:a._pf.unusedTokens.push(g),Aa(g,e,a)):a._strict&&!e&&a._pf.unusedTokens.push(g);a._pf.charsLeftOver=i-k,c.length>0&&a._pf.unusedInput.push(c),a._isPm&&a._a[j]<12&&(a._a[j]+=12),a._isPm===!1&&12===a._a[j]&&(a._a[j]=0),Ba(a),na(a)}function Fa(a){return a.replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g,function(a,b,c,d,e){return b||c||d||e})}function Ga(a){return a.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&")}function Ha(a){var b,c,d,e,f;if(0===a._f.length)return a._pf.invalidFormat=!0,void(a._d=new Date(NaN));for(e=0;e<a._f.length;e++)f=0,b=_({},a),oa(b),b._f=a._f[e],Ea(b),pa(b)&&(f+=b._pf.charsLeftOver,f+=10*b._pf.unusedTokens.length,b._pf.score=f,(null==d||f<d)&&(d=f,c=b));_(a,c||b)}function Ia(a){var b,c=a._i,d=I.exec(c);if(d){for(a._pf.iso=!0,b=4;b>0;b--)if(d[b]){a._f=K[b-1]+(d[6]||" ");break}for(b=0;b<4;b++)if(L[b][1].exec(c)){a._f+=L[b][0];break}A.exec(c)&&(a._f+="Z"),Ea(a)}else a._d=new Date(c)}function Ja(b){var c=b._i,d=p.exec(c);c===a?b._d=new Date:d?b._d=new Date(+d[1]):"string"==typeof c?Ia(b):da(c)?(b._a=c.slice(0),Ba(b)):ea(c)?b._d=new Date(+c):"object"==typeof c?Ca(b):b._d=new Date(c)}function Ka(a,b,c,d,e,f,g){var h=new Date(a,b,c,d,e,f,g);return a<1970&&h.setFullYear(a),h}function La(a){var b=new Date(Date.UTC.apply(null,arguments));return a<1970&&b.setUTCFullYear(a),b}function Ma(a,b){if("string"==typeof a)if(isNaN(a)){if(a=b.weekdaysParse(a),"number"!=typeof a)return null}else a=parseInt(a,10);return a}function Na(a,b,c,d,e){return e.relativeTime(b||1,!!c,a,d)}function Oa(a,b,c){var d=e(Math.abs(a)/1e3),f=e(d/60),g=e(f/60),h=e(g/24),i=e(h/365),j=d<45&&["s",d]||1===f&&["m"]||f<45&&["mm",f]||1===g&&["h"]||g<22&&["hh",g]||1===h&&["d"]||h<=25&&["dd",h]||h<=45&&["M"]||h<345&&["MM",e(h/30)]||1===i&&["y"]||["yy",i];return j[2]=b,j[3]=a>0,j[4]=c,Na.apply({},j)}function Pa(a,c,d){var g,e=d-c,f=d-a.day();return f>e&&(f-=7),f<e-7&&(f+=7),g=b(a).add("d",f),{week:Math.ceil(g.dayOfYear()/7),year:g.year()}}function Qa(a,b,c,d,e){var g,h,f=new Date(ba(a,6,!0)+"-01-01").getUTCDay();return c=null!=c?c:e,g=e-f+(f>d?7:0),h=7*(b-1)+(c-e)+g+1,{year:h>0?a:a-1,dayOfYear:h>0?h:la(a-1)+h}}function Ra(a){var c=a._i,d=a._f;return"undefined"==typeof a._pf&&oa(a),null===c?b.invalid({nullInput:!0}):("string"==typeof c&&(a._i=c=ta().preparse(c)),b.isMoment(c)?(a=_({},c),a._d=new Date(+c._d)):d?da(d)?Ha(a):Ea(a):Ja(a),new Z(a))}function Sa(a,c){b.fn[a]=b.fn[a+"s"]=function(a){var d=this._isUTC?"UTC":"";return null!=a?(this._d["set"+d+c](a),b.updateOffset(this),this):this._d["get"+d+c]()}}function Ta(a){b.duration.fn[a]=function(){return this._data[a]}}function Ua(a,c){b.duration.fn["as"+a]=function(){return+this/c}}function Va(a){var c=!1,e=b;"undefined"==typeof ender&&(a?(d.moment=function(){return!c&&console&&console.warn&&(c=!0,console.warn("Accessing Moment through the global scope is deprecated, and will be removed in an upcoming release.")),e.apply(null,arguments)},_(d.moment,e)):d.moment=b)}for(var b,f,c="2.4.0",d=this,e=Math.round,g=0,h=1,i=2,j=3,k=4,l=5,m=6,n={},o="undefined"!=typeof module&&module.exports&&"undefined"!=typeof require,p=/^\/?Date\((\-?\d+)/i,q=/(\-)?(?:(\d*)\.)?(\d+)\:(\d+)(?:\:(\d+)\.?(\d{3})?)?/,r=/^(-)?P(?:(?:([0-9,.]*)Y)?(?:([0-9,.]*)M)?(?:([0-9,.]*)D)?(?:T(?:([0-9,.]*)H)?(?:([0-9,.]*)M)?(?:([0-9,.]*)S)?)?|([0-9,.]*)W)$/,s=/(\[[^\[]*\])|(\\)?(Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|mm?|ss?|S{1,4}|X|zz?|ZZ?|.)/g,t=/(\[[^\[]*\])|(\\)?(LT|LL?L?L?|l{1,4})/g,u=/\d\d?/,v=/\d{1,3}/,w=/\d{1,4}/,x=/[+\-]?\d{1,6}/,y=/\d+/,z=/[0-9]*['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+|[\u0600-\u06FF\/]+(\s*?[\u0600-\u06FF]+){1,2}/i,A=/Z|[\+\-]\d\d:?\d\d/i,B=/T/i,C=/[\+\-]?\d+(\.\d{1,3})?/,D=/\d/,E=/\d\d/,F=/\d{3}/,G=/\d{4}/,H=/[+\-]?\d{6}/,I=/^\s*\d{4}-(?:(\d\d-\d\d)|(W\d\d$)|(W\d\d-\d)|(\d\d\d))((T| )(\d\d(:\d\d(:\d\d(\.\d+)?)?)?)?([\+\-]\d\d:?\d\d|\s*Z)?)?$/,J="YYYY-MM-DDTHH:mm:ssZ",K=["YYYY-MM-DD","GGGG-[W]WW","GGGG-[W]WW-E","YYYY-DDD"],L=[["HH:mm:ss.SSSS",/(T| )\d\d:\d\d:\d\d\.\d{1,3}/],["HH:mm:ss",/(T| )\d\d:\d\d:\d\d/],["HH:mm",/(T| )\d\d:\d\d/],["HH",/(T| )\d\d/]],M=/([\+\-]|\d\d)/gi,N="Date|Hours|Minutes|Seconds|Milliseconds".split("|"),O={Milliseconds:1,Seconds:1e3,Minutes:6e4,Hours:36e5,Days:864e5,Months:2592e6,Years:31536e6},P={ms:"millisecond",s:"second",m:"minute",h:"hour",d:"day",D:"date",w:"week",W:"isoWeek",M:"month",y:"year",DDD:"dayOfYear",e:"weekday",E:"isoWeekday",gg:"weekYear",GG:"isoWeekYear"},Q={dayofyear:"dayOfYear",isoweekday:"isoWeekday",isoweek:"isoWeek",weekyear:"weekYear",isoweekyear:"isoWeekYear"},R={},S="DDD w W M D d".split(" "),T="M D H h m s w W".split(" "),U={M:function(){return this.month()+1},MMM:function(a){return this.lang().monthsShort(this,a)},MMMM:function(a){return this.lang().months(this,a)},D:function(){return this.date()},DDD:function(){return this.dayOfYear()},d:function(){return this.day()},dd:function(a){return this.lang().weekdaysMin(this,a)},ddd:function(a){return this.lang().weekdaysShort(this,a)},dddd:function(a){return this.lang().weekdays(this,a)},w:function(){return this.week()},W:function(){return this.isoWeek()},YY:function(){return ba(this.year()%100,2)},YYYY:function(){return ba(this.year(),4)},YYYYY:function(){return ba(this.year(),5)},YYYYYY:function(){var a=this.year(),b=a>=0?"+":"-";return b+ba(Math.abs(a),6)},gg:function(){return ba(this.weekYear()%100,2)},gggg:function(){return this.weekYear()},ggggg:function(){return ba(this.weekYear(),5)},GG:function(){return ba(this.isoWeekYear()%100,2)},GGGG:function(){return this.isoWeekYear()},GGGGG:function(){return ba(this.isoWeekYear(),5)},e:function(){return this.weekday()},E:function(){return this.isoWeekday()},a:function(){return this.lang().meridiem(this.hours(),this.minutes(),!0)},A:function(){return this.lang().meridiem(this.hours(),this.minutes(),!1)},H:function(){return this.hours()},h:function(){return this.hours()%12||12},m:function(){return this.minutes()},s:function(){return this.seconds()},S:function(){return ja(this.milliseconds()/100)},SS:function(){return ba(ja(this.milliseconds()/10),2)},SSS:function(){return ba(this.milliseconds(),3)},SSSS:function(){return ba(this.milliseconds(),3)},Z:function(){var a=-this.zone(),b="+";return a<0&&(a=-a,b="-"),b+ba(ja(a/60),2)+":"+ba(ja(a)%60,2)},ZZ:function(){var a=-this.zone(),b="+";return a<0&&(a=-a,b="-"),b+ba(ja(a/60),2)+ba(ja(a)%60,2)},z:function(){return this.zoneAbbr()},zz:function(){return this.zoneName()},X:function(){return this.unix()},Q:function(){return this.quarter()}},V=["months","monthsShort","weekdays","weekdaysShort","weekdaysMin"];S.length;)f=S.pop(),U[f+"o"]=X(U[f],f);for(;T.length;)f=T.pop(),U[f+f]=W(U[f],2);for(U.DDDD=W(U.DDD,3),_(Y.prototype,{set:function(a){var b,c;for(c in a)b=a[c],"function"==typeof b?this[c]=b:this["_"+c]=b},_months:"January_February_March_April_May_June_July_August_September_October_November_December".split("_"),months:function(a){return this._months[a.month()]},_monthsShort:"Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"),monthsShort:function(a){return this._monthsShort[a.month()]},monthsParse:function(a){var c,d,e;for(this._monthsParse||(this._monthsParse=[]),c=0;c<12;c++)if(this._monthsParse[c]||(d=b.utc([2e3,c]),e="^"+this.months(d,"")+"|^"+this.monthsShort(d,""),this._monthsParse[c]=new RegExp(e.replace(".",""),"i")),this._monthsParse[c].test(a))return c},_weekdays:"Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),weekdays:function(a){return this._weekdays[a.day()]},_weekdaysShort:"Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"),weekdaysShort:function(a){return this._weekdaysShort[a.day()]},_weekdaysMin:"Su_Mo_Tu_We_Th_Fr_Sa".split("_"),weekdaysMin:function(a){return this._weekdaysMin[a.day()]},weekdaysParse:function(a){var c,d,e;for(this._weekdaysParse||(this._weekdaysParse=[]),c=0;c<7;c++)if(this._weekdaysParse[c]||(d=b([2e3,1]).day(c),e="^"+this.weekdays(d,"")+"|^"+this.weekdaysShort(d,"")+"|^"+this.weekdaysMin(d,""),this._weekdaysParse[c]=new RegExp(e.replace(".",""),"i")),this._weekdaysParse[c].test(a))return c},_longDateFormat:{LT:"h:mm A",L:"MM/DD/YYYY",LL:"MMMM D YYYY",LLL:"MMMM D YYYY LT",LLLL:"dddd, MMMM D YYYY LT"},longDateFormat:function(a){var b=this._longDateFormat[a];return!b&&this._longDateFormat[a.toUpperCase()]&&(b=this._longDateFormat[a.toUpperCase()].replace(/MMMM|MM|DD|dddd/g,function(a){return a.slice(1)}),this._longDateFormat[a]=b),b},isPM:function(a){return"p"===(a+"").toLowerCase().charAt(0)},_meridiemParse:/[ap]\.?m?\.?/i,meridiem:function(a,b,c){return a>11?c?"pm":"PM":c?"am":"AM"},_calendar:{sameDay:"[Today at] LT",nextDay:"[Tomorrow at] LT",nextWeek:"dddd [at] LT",lastDay:"[Yesterday at] LT",lastWeek:"[Last] dddd [at] LT",sameElse:"L"},calendar:function(a,b){var c=this._calendar[a];return"function"==typeof c?c.apply(b):c},_relativeTime:{future:"in %s",past:"%s ago",s:"a few seconds",m:"a minute",mm:"%d minutes",h:"an hour",hh:"%d hours",d:"a day",dd:"%d days",M:"a month",MM:"%d months",y:"a year",yy:"%d years"},relativeTime:function(a,b,c,d){var e=this._relativeTime[c];return"function"==typeof e?e(a,b,c,d):e.replace(/%d/i,a)},pastFuture:function(a,b){var c=this._relativeTime[a>0?"future":"past"];return"function"==typeof c?c(b):c.replace(/%s/i,b)},ordinal:function(a){return this._ordinal.replace("%d",a)},_ordinal:"%d",preparse:function(a){return a},postformat:function(a){return a},week:function(a){return Pa(a,this._week.dow,this._week.doy).week},_week:{dow:0,doy:6},_invalidDate:"Invalid date",invalidDate:function(){return this._invalidDate}}),b=function(b,c,d,e){return"boolean"==typeof d&&(e=d,d=a),Ra({_i:b,_f:c,_l:d,_strict:e,_isUTC:!1})},b.utc=function(b,c,d,e){var f;return"boolean"==typeof d&&(e=d,d=a),f=Ra({_useUTC:!0,_isUTC:!0,_l:d,_i:b,_f:c,_strict:e}).utc()},b.unix=function(a){return b(1e3*a)},b.duration=function(a,c){var f,g,h,d=a,e=null;return b.isDuration(a)?d={ms:a._milliseconds,d:a._days,M:a._months}:"number"==typeof a?(d={},c?d[c]=a:d.milliseconds=a):(e=q.exec(a))?(f="-"===e[1]?-1:1,d={y:0,d:ja(e[i])*f,h:ja(e[j])*f,m:ja(e[k])*f,s:ja(e[l])*f,ms:ja(e[m])*f}):(e=r.exec(a))&&(f="-"===e[1]?-1:1,h=function(a){var b=a&&parseFloat(a.replace(",","."));return(isNaN(b)?0:b)*f},d={y:h(e[2]),M:h(e[3]),d:h(e[4]),h:h(e[5]),m:h(e[6]),s:h(e[7]),w:h(e[8])}),g=new $(d),b.isDuration(a)&&a.hasOwnProperty("_lang")&&(g._lang=a._lang),g},b.version=c,b.defaultFormat=J,b.updateOffset=function(){},b.lang=function(a,c){var d;return a?(c?ra(qa(a),c):null===c?(sa(a),a="en"):n[a]||ta(a),d=b.duration.fn._lang=b.fn._lang=ta(a),d._abbr):b.fn._lang._abbr},b.langData=function(a){return a&&a._lang&&a._lang._abbr&&(a=a._lang._abbr),ta(a)},b.isMoment=function(a){return a instanceof Z},b.isDuration=function(a){return a instanceof $},f=V.length-1;f>=0;--f)ia(V[f]);for(b.normalizeUnits=function(a){return ga(a)},b.invalid=function(a){var c=b.utc(NaN);return null!=a?_(c._pf,a):c._pf.userInvalidated=!0,c},b.parseZone=function(a){return b(a).parseZone()},_(b.fn=Z.prototype,{clone:function(){return b(this)},valueOf:function(){return+this._d+6e4*(this._offset||0)},unix:function(){return Math.floor(+this/1e3)},toString:function(){return this.clone().lang("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ")},toDate:function(){return this._offset?new Date(+this):this._d},toISOString:function(){var a=b(this).utc();return 0<a.year()&&a.year()<=9999?wa(a,"YYYY-MM-DD[T]HH:mm:ss.SSS[Z]"):wa(a,"YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]")},toArray:function(){var a=this;return[a.year(),a.month(),a.date(),a.hours(),a.minutes(),a.seconds(),a.milliseconds()]},isValid:function(){return pa(this)},isDSTShifted:function(){return!!this._a&&(this.isValid()&&fa(this._a,(this._isUTC?b.utc(this._a):b(this._a)).toArray())>0)},parsingFlags:function(){return _({},this._pf)},invalidAt:function(){return this._pf.overflow},utc:function(){return this.zone(0)},local:function(){return this.zone(0),this._isUTC=!1,this},format:function(a){var c=wa(this,a||b.defaultFormat);return this.lang().postformat(c)},add:function(a,c){var d;return d="string"==typeof a?b.duration(+c,a):b.duration(a,c),ca(this,d,1),this},subtract:function(a,c){var d;return d="string"==typeof a?b.duration(+c,a):b.duration(a,c),ca(this,d,-1),this},diff:function(a,c,d){var g,h,e=b(a),f=6e4*(this.zone()-e.zone());return c=ga(c),"year"===c||"month"===c?(g=432e5*(this.daysInMonth()+e.daysInMonth()),h=12*(this.year()-e.year())+(this.month()-e.month()),h+=(this-b(this).startOf("month")-(e-b(e).startOf("month")))/g,h-=6e4*(this.zone()-b(this).startOf("month").zone()-(e.zone()-b(e).startOf("month").zone()))/g,"year"===c&&(h/=12)):(g=this-e,h="second"===c?g/1e3:"minute"===c?g/6e4:"hour"===c?g/36e5:"day"===c?(g-f)/864e5:"week"===c?(g-f)/6048e5:g),d?h:aa(h)},from:function(a,c){return b.duration(this.diff(a)).lang(this.lang()._abbr).humanize(!c)},fromNow:function(a){return this.from(b(),a)},calendar:function(){var a=this.diff(b().zone(this.zone()).startOf("day"),"days",!0),c=a<-6?"sameElse":a<-1?"lastWeek":a<0?"lastDay":a<1?"sameDay":a<2?"nextDay":a<7?"nextWeek":"sameElse";return this.format(this.lang().calendar(c,this))},isLeapYear:function(){return ma(this.year())},isDST:function(){return this.zone()<this.clone().month(0).zone()||this.zone()<this.clone().month(5).zone()},day:function(a){var b=this._isUTC?this._d.getUTCDay():this._d.getDay();return null!=a?(a=Ma(a,this.lang()),this.add({d:a-b})):b},month:function(a){var d,c=this._isUTC?"UTC":"";return null!=a?"string"==typeof a&&(a=this.lang().monthsParse(a),"number"!=typeof a)?this:(d=this.date(),this.date(1),this._d["set"+c+"Month"](a),this.date(Math.min(d,this.daysInMonth())),b.updateOffset(this),this):this._d["get"+c+"Month"]()},startOf:function(a){switch(a=ga(a)){case"year":this.month(0);case"month":this.date(1);case"week":case"isoWeek":case"day":this.hours(0);case"hour":this.minutes(0);case"minute":this.seconds(0);case"second":this.milliseconds(0)}return"week"===a?this.weekday(0):"isoWeek"===a&&this.isoWeekday(1),this},endOf:function(a){return a=ga(a),this.startOf(a).add("isoWeek"===a?"week":a,1).subtract("ms",1)},isAfter:function(a,c){return c="undefined"!=typeof c?c:"millisecond",+this.clone().startOf(c)>+b(a).startOf(c)},isBefore:function(a,c){return c="undefined"!=typeof c?c:"millisecond",+this.clone().startOf(c)<+b(a).startOf(c)},isSame:function(a,c){return c="undefined"!=typeof c?c:"millisecond",+this.clone().startOf(c)===+b(a).startOf(c)},min:function(a){return a=b.apply(null,arguments),a<this?this:a},max:function(a){return a=b.apply(null,arguments),a>this?this:a},zone:function(a){var c=this._offset||0;return null==a?this._isUTC?c:this._d.getTimezoneOffset():("string"==typeof a&&(a=za(a)),Math.abs(a)<16&&(a*=60),this._offset=a,this._isUTC=!0,c!==a&&ca(this,b.duration(c-a,"m"),1,!0),this)},zoneAbbr:function(){return this._isUTC?"UTC":""},zoneName:function(){return this._isUTC?"Coordinated Universal Time":""},parseZone:function(){return"string"==typeof this._i&&this.zone(this._i),this},hasAlignedHourOffset:function(a){return a=a?b(a).zone():0,(this.zone()-a)%60===0},daysInMonth:function(){return ka(this.year(),this.month())},dayOfYear:function(a){var c=e((b(this).startOf("day")-b(this).startOf("year"))/864e5)+1;return null==a?c:this.add("d",a-c)},quarter:function(){return Math.ceil((this.month()+1)/3)},weekYear:function(a){var b=Pa(this,this.lang()._week.dow,this.lang()._week.doy).year;return null==a?b:this.add("y",a-b)},isoWeekYear:function(a){var b=Pa(this,1,4).year;return null==a?b:this.add("y",a-b)},week:function(a){var b=this.lang().week(this);return null==a?b:this.add("d",7*(a-b))},isoWeek:function(a){var b=Pa(this,1,4).week;return null==a?b:this.add("d",7*(a-b))},weekday:function(a){var b=(this.day()+7-this.lang()._week.dow)%7;return null==a?b:this.add("d",a-b)},isoWeekday:function(a){return null==a?this.day()||7:this.day(this.day()%7?a:a-7)},get:function(a){return a=ga(a),this[a]()},set:function(a,b){return a=ga(a),"function"==typeof this[a]&&this[a](b),this},lang:function(b){return b===a?this._lang:(this._lang=ta(b),this)}}),f=0;f<N.length;f++)Sa(N[f].toLowerCase().replace(/s$/,""),N[f]);Sa("year","FullYear"),b.fn.days=b.fn.day,b.fn.months=b.fn.month,b.fn.weeks=b.fn.week,b.fn.isoWeeks=b.fn.isoWeek,b.fn.toJSON=b.fn.toISOString,_(b.duration.fn=$.prototype,{_bubble:function(){var e,f,g,h,a=this._milliseconds,b=this._days,c=this._months,d=this._data;d.milliseconds=a%1e3,e=aa(a/1e3),d.seconds=e%60,f=aa(e/60),d.minutes=f%60,g=aa(f/60),d.hours=g%24,b+=aa(g/24),d.days=b%30,c+=aa(b/30),d.months=c%12,h=aa(c/12),d.years=h},weeks:function(){return aa(this.days()/7)},valueOf:function(){return this._milliseconds+864e5*this._days+this._months%12*2592e6+31536e6*ja(this._months/12)},humanize:function(a){var b=+this,c=Oa(b,!a,this.lang());return a&&(c=this.lang().pastFuture(b,c)),this.lang().postformat(c)},add:function(a,c){var d=b.duration(a,c);return this._milliseconds+=d._milliseconds,this._days+=d._days,this._months+=d._months,this._bubble(),this},subtract:function(a,c){var d=b.duration(a,c);return this._milliseconds-=d._milliseconds,this._days-=d._days,this._months-=d._months,this._bubble(),this},get:function(a){return a=ga(a),this[a.toLowerCase()+"s"]()},as:function(a){return a=ga(a),this["as"+a.charAt(0).toUpperCase()+a.slice(1)+"s"]()},lang:b.fn.lang,toIsoString:function(){var a=Math.abs(this.years()),b=Math.abs(this.months()),c=Math.abs(this.days()),d=Math.abs(this.hours()),e=Math.abs(this.minutes()),f=Math.abs(this.seconds()+this.milliseconds()/1e3);return this.asSeconds()?(this.asSeconds()<0?"-":"")+"P"+(a?a+"Y":"")+(b?b+"M":"")+(c?c+"D":"")+(d||e||f?"T":"")+(d?d+"H":"")+(e?e+"M":"")+(f?f+"S":""):"P0D"}});for(f in O)O.hasOwnProperty(f)&&(Ua(f,O[f]),Ta(f.toLowerCase()));Ua("Weeks",6048e5),b.duration.fn.asMonths=function(){return(+this-31536e6*this.years())/2592e6+12*this.years()},b.lang("en",{ordinal:function(a){var b=a%10,c=1===ja(a%100/10)?"th":1===b?"st":2===b?"nd":3===b?"rd":"th";return a+c}}),o?(module.exports=b,Va(!0)):"function"==typeof define&&define.amd?define("moment",function(c,d,e){return e.config&&e.config()&&e.config().noGlobal!==!0&&Va(e.config().noGlobal===a),b}):Va()}).call(this);