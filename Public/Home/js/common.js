;/*!/lib/prototype/function.bind.js*/
define("mcycle:lib/prototype/function.bind",function(){Function.prototype.bind||(Function.prototype.bind=function(t){if("function"!=typeof this)throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");var n=Array.prototype.slice.call(arguments,1),o=this,i=function(){},r=function(){var r=this instanceof i?this:t||this,e=n.concat(Array.prototype.slice.call(arguments));return o.apply(r,e)};return i.prototype=this.prototype,r.prototype=new i,r})});
;/*!/lib/eventEmitter/eventEmitter.js*/
define("mcycle:lib/eventEmitter/eventEmitter",function(t,e,n){"use strict";var i=function(){this._events={}};i.prototype.emitter=function(t,e){if(this._events&&this._events[t]){var n=0,i=this._events[t],o=i.length;for(n;o>n;n++)try{i[n].apply(this,e)}catch(r){console.error.call(i[n],r)}return this}},i.prototype.register=function(t,e){return"function"!=typeof e?void console.error.call(this,"Callback is not a function!"):(this._events[t]||(this._events[t]=[]),this._events[t].push(e),this)},i.prototype.cancellation=function(t,e){if(this._events&&this._events[t]){var n=0,i=this._events[t],o=i.length;for(n;o>n;n++)if(i[n]===e)return i.splice(n,1),this;return this}},i.prototype.on=i.prototype.register,i.prototype.off=i.prototype.cancellation,n.exports=i});
;/*!/lib/selectmenu/selectmenu.js*/
define("mcycle:lib/selectmenu/selectmenu",function(t,e,i){var s=t("common:lib/jquery/jquery-1.11.3"),n=t("mcycle:lib/eventEmitter/eventEmitter");t("mcycle:lib/prototype/function.bind");var o=function(){return n.apply(this,arguments),this.init.apply(this,arguments)};o.prototype=new n,o.prototype.constructor=o,o.prototype.defaultOptions={placeholder:"",select:"",text:"",value:"",name:"",listTextKey:"",listValueKey:"",data:null},o.prototype.init=function(t){return this.options=t=s.extend({},this.defaultOptions,t),this.$element=s(t.selector).addClass("mz-selectmenu"),this.$show=s('<input type="text" readonly="readonly" tabindex="-1" />').appendTo(this.$element).attr("placeholder",t.placeholder).val(t.text),this.$value=s('<input type="hidden" tabindex="-1" />').appendTo(this.$element).val(t.value).attr("name",t.name),this.$downmenu=s('<div class="mz-downmenu" />').appendTo("body"),this.value=t.value,this.text=t.text,this.setDownmenu(t.data),this.bind(),this},o.prototype.bind=function(){var t=this;this.$show.on("click",function(){t.emitter("click",arguments),t._setPosition(),t.$downmenu.slideDown(50),t.emitter("show",arguments)}),this.$show.on("blur",function(){setTimeout(function(){t.$downmenu.slideUp(50),t.emitter("blur",arguments)},200)})},o.prototype._setPosition=function(){var t=this.$element.offset();this.$downmenu.css({top:t.top+this.$element.height(),left:t.left,width:this.$element.outerWidth()-2})},o.prototype.setData=function(t,e){if(void 0==t&&void 0==e)return this;if(void 0==t&&e){if(!this.listObject)return this;s.each(this.listObject,function(i,s){var n=this.options.listValueKey?s[this.options.listValueKey]:s;n==e&&(t=this.options.listTextKey?s[this.options.listTextKey]:i)}.bind(this))}else if(void 0==e&&t){if(!this.listObject)return this;s.each(this.listObject,function(i,s){var n=this.options.listTextKey?s[this.options.listTextKey]:i;n==t&&(e=this.options.listValueKey?s[this.options.listValueKey]:s)}.bind(this))}return this.$show.val(t),this.$value.val(e),this.value=e,this.text=t,this},o.prototype.setDownmenu=function(t){if(t){var e=this;return this.listObject=t,this.$ul=s("<ul />"),s.each(t,function(t,i){var n=this;this._text=e.options.listTextKey?this[e.options.listTextKey]:t,this._value=e.options.listValueKey?this[e.options.listValueKey]:i,s("<li />").appendTo(e.$ul).text(this._text).on("click",function(){e.emitter("select",[n._text,n._value,e.text,e.value]),n._text!=e.text&&(e.$show.val(n._text),e.$value.val(n._value),e.value=n._value,e.text=n._text,e.emitter("change",[n._text,n._value,e.text,e.value])),e.$downmenu.slideUp(50)})}),this.$downmenu.html(e.$ul),this}},o.prototype.clear=function(){return this.$value.val(""),this.$show.val(""),this.$downmenu.empty(),this.value="",this.text="",this},i.exports=o});
;/*!/lib/citys/citys.js*/
define("mcycle:lib/citys/citys",function(t,e,i){t("mcycle:lib/prototype/function.bind");var a=t("common:lib/jquery/jquery-1.11.3"),r=t("mcycle:lib/eventEmitter/eventEmitter"),n=t("mcycle:lib/selectmenu/selectmenu"),h=function(){return r.apply(this,arguments),this.data={provice:{id:"",text:""},city:{id:"",text:""},street:{id:"",text:""},area:{id:"",text:""},other:""},this.init.apply(this,arguments)};h.prototype=new r,h.prototype.constructor=h,h.prototype.levelArray=["provice","city","street","area"],h.prototype.cityData={provice:{index:0,data:{}},city:{index:1,data:{}},street:{index:2,data:{}},area:{index:3,data:{}}},h.prototype.defaultOptions={alert:function(t){alert(t)},selector:"",isShowOhterInput:!1,provice:{placeholder:"省/直辖市",name:""},city:{placeholder:"城市",name:""},street:{placeholder:"区/县",name:""},area:{placeholder:"乡镇/街道",name:""},other:{placeholder:"其他",name:""}},h.prototype.init=function(t){this.options=t=a.extend({},this.defaultOptions,t);var e=this,i="<div />";this.DOMS={provice:a(i),city:a(i),street:a(i),area:a(i)},this.$otherInput=a(i).addClass("mz-selectmenu other").append('<input type="text" placeholder="'+this.options.other.placeholder+'" />').hide(),this.$otherInput.children().attr("name",t.other.name),this.$element=a(t.selector).append(this.DOMS.provice,this.DOMS.city,this.DOMS.street,this.DOMS.area,this.$otherInput),a.each(this.DOMS,function(i){e.DOMS[i]=new n({selector:this,placeholder:e.options[i].placeholder,name:t[i].name,listValueKey:"code",listTextKey:"name"}).on("change",e._handleChange.bind(e,i)).on("click",e._handleClick.bind(e,i))}),this.$otherInput.on("input propertychange","input",function(){e.data.other=a(this).val(),e.emitter("change",["other",e.data.other,null,e.getData()])})},h.prototype.clear=function(t){t=t||0;for(var e=t;e<this.levelArray.length;e++){var i=this.levelArray[e];this.DOMS[i].clear(),this.data[i]={id:"",text:""}}this.data.other="",this.$otherInput.hide().children().val("")},h.prototype.setData=function(t){return a.each(t,function(t,e){"other"!=t&&this.DOMS[t].setData(e.text,e.id)}.bind(this)),this.data=a.extend(!0,{},this.data,t),0==this.data.area.id&&this.options.isShowOhterInput&&this.$otherInput.show().children().val(this.data.other),this},h.prototype.getData=function(){return a.extend(!0,{},this.data)},h.prototype._handleClick=function(t){var e=Array.prototype.slice.call(arguments);e.push(this.getData()),this.emitter("click",e);var i=this.cityData[t].index,a=this.levelArray[i-1]||"provice",r=this.data[a].id;this.DOMS[t].$ul||!r&&0!=i||this._getData(t,r,function(e){this.DOMS[t].setDownmenu(e)})},h.prototype._handleChange=function(t,e,i){var a=this.cityData[t].index;if(e&&(this.data[t].id=i,this.data[t].text=e,this.clear(a+1),this.emitter("change",[t,e,i,this.getData()])),a==this.levelArray.length-1)return void(0==i&&this.options.isShowOhterInput&&this.$otherInput.show());var r=this.levelArray[a+1];this._getData(r,i,function(t){this.DOMS[r].setDownmenu(t),1==t.length&&this.DOMS[r].setData(t[0].name,t[0].code)&&this._handleChange(r,t[0].name,t[0].code)})},h.prototype._getData=function(t,e,i){return e=e||0,this.cityData[t].data[e]?void i.call(this,this.cityData[t].data[e]):void a.ajax({url:"http://area.meizu.com/area/child/query/"+e,dataType:"jsonp",success:function(a){a.success?(this.cityData[t].data[e]=a.data,i.call(this,a.data)):this.options.alert(a.errorMsg)}.bind(this),error:function(){this.options.alert("服务器忙")}.bind(this)})},i.exports=h});
;/*!/lib/dialog/dialog.js*/
define("mcycle:lib/dialog/dialog",function(t,i,s){"use strict";var e=t("common:lib/jquery/jquery-1.11.3"),n=t("mcycle:lib/eventEmitter/eventEmitter"),o=function(){return n.apply(this,arguments),this.init.apply(this,arguments)};o.prototype=new n,o.prototype.constructor=o,o.prototype.html={mask:'<div class="mask" />',dialog:['<div class="main">','<div class="title"></div>','<div class="content"></div>','<div class="btns"></div>',"</div>"].join(""),successBtn:'<div class="btn success">确定</div>',cancleBtn:'<div class="btn cancel">取消</div>'},o.prototype.init=function(t){return t?(this.$dialog=e(this.html.dialog),this.setContent(t.content,t.title),this.$dialog.find(".btns").html(this.html.successBtn+(t.isAlert?"":this.html.cancleBtn)),this.mask=e(this.html.mask).html(this.$dialog),this._bind(),this):void 0},o.prototype.setContent=function(t,i){i&&e(".title",this.$dialog).html(i),t&&e(".content",this.$dialog).html(t)},o.prototype._bind=function(){var t=this;e(".success",this.$dialog).on("click",function(i){t.emitter("success",[i,t]),t.hide()}),e(".cancel",this.$dialog).on("click",function(i){t.emitter("cancel",[i,t]),t.hide()})},o.prototype.show=function(){return this.setContent.apply(this,arguments),this.isBody?this.mask.show():(this.mask.appendTo("body"),this.isBody=!0),this.emitter("show",[this]),this},o.prototype.hide=function(){return this.mask.hide(),this.emitter("hide",[this]),this},o.prototype.destroy=function(){return this.mask.detach(),this.isBody=!1,this.emitter("destory",[this]),this},s.exports=o});
;/*!/lib/loading/loading.js*/
define("mcycle:lib/loading/loading",function(n,i,o){var d=n("common:lib/jquery/jquery-1.11.3"),a=function(){var n='<div class="loading-mask"><div class="loading" /></div>',i=function(i){i=i||"body";var o=d(i).children(".loading-mask");0==o.length&&(o=d(n).appendTo(i)),o.show()},o=function(n){n=n||"body",d(n).children(".loading-mask").hide()};return{show:i,hide:o}}();o.exports=a});
;/*!/lib/helper/modalApplier.js*/
define("mcycle:lib/helper/modalApplier",function(e,n,r){var i=e("common:lib/jquery/jquery-1.11.3"),o=function(e,n){if(e&&n){var r;return i.each(e,function(e,i){("number"==typeof i||"string"==typeof i)&&(r=new RegExp("{{"+e+"}}","g"),n=n.replace(r,i+""))}),n}};r.exports=o});
;/*!/lib/helper/pushUrl.js*/
define("mcycle:lib/helper/pushUrl",function(e,o,n){var t=e("common:lib/jquery/jquery-1.11.3"),i=function(e,o){var n="?";t.each(e,function(e,o){n+=e+"="+encodeURI(o)+"&"});var i=window.location.pathname+n.substr(0,n.length-1);o?window.history.replaceState?window.history.replaceState(e,null,i):window.location.replace(i):window.history.pushState?window.history.pushState(e,null,i):window.location.href=i};n.exports=i});
;/*!/lib/page/page.js*/
define("mcycle:lib/page/page",function(t,i,s){"use strict";var a=t("common:lib/jquery/jquery-1.11.3"),e=t("mcycle:lib/eventEmitter/eventEmitter"),o=function(){return e.apply(this,arguments),this.init.apply(this,arguments)};o.prototype=new e,o.prototype.constructor=o,o.prototype.HTML={big:'<ul class="mz-page-list"><ul>',min:'<div class="prev"><div class="triangle"></div></div><div class="next">下一页<div class="triangle"></div></div>',leftBtn:'<li class="prev {{className}}"><div class="triangle"></div></li>',page:'<li class="page {{className}}" data-page="{{pageNum}}"></li>',point:'<li class="point"></li>',rightBtn:'<li class="next {{className}}"><div class="triangle"></div></li>'},o.prototype.defaultOption={activePage:1,minShowPageNum:7,pageSize:8,isInitGetPage:!0,totalPage:0,totalNum:0},o.prototype.init=function(t){this.options=a.extend({},this.defaultOption,t),this.$body=a(this.options.selector).addClass("mz-page-box").append(this.HTML.big).hide(),this.$minBody=a(this.options.minSelector).addClass("mz-min-page-box").append(this.HTML.min).hide(),this.options.isInitGetPage?this.options.callback&&a.isFunction(this.options.callback)&&this.options.callback.call(this,this.options.activePage):this.options.totalNum&&this.options.totalNum&&this.callPage({activePage:this.options.activePage,totalNum:this.options.totalNum}),this._bind()},o.prototype._buildPage=function(t,i){var s=[],a=function(t,i){var s=new RegExp("{{pageNum}}","g");return this.HTML.page.replace(s,t).replace("{{className}}",i?"active":"")};if(s.push(this.HTML.leftBtn.replace("{{className}}",1==t?"disabled":"")),i<=this.options.minShowPageNum)for(var e=1;i>=e;e++)s.push(a.call(this,e,e==t));else{var o=this.options.minShowPageNum-2;if(o>=t){for(var e=1;o+1>=e;e++)s.push(a.call(this,e,e==t));s.push(this.HTML.point),s.push(a.call(this,i,!1))}else if(t>i-o){s.push(a.call(this,1,!1)),s.push(this.HTML.point);for(var e=i-o;i>=e;e++)s.push(a.call(this,e,e==t))}else{s.push(a.call(this,1,!1)),s.push(this.HTML.point);for(var e=t-2;t+2>=e;e++)s.push(a.call(this,e,e==t));s.push(this.HTML.point),s.push(a.call(this,i,!1))}}return s.push(this.HTML.rightBtn.replace("{{className}}",t==i?"disabled":"")),s.join("")},o.prototype.callPage=function(t){if(!t)return!1;this.options.activePage=parseInt(t.activePage),this.options.totalNum=Math.ceil(t.totalNum/this.options.pageSize)||1;var i=this._buildPage(this.options.activePage,this.options.totalNum);this.$body.children("ul").html(i),this.$body.show(),this.$minBody.show()},o.prototype._bind=function(){var t=this;this.$body.on("click",".page:not(.disabled)",function(){var i=a(this).data("page");t.options.callback.call(t,i)}),this.$body.on("click",".prev:not(.disabled),.next:not(.disabled)",function(){var i=a(this).hasClass("prev")?t.options.activePage-1:t.options.activePage+1;t.options.callback.call(t,i)})},s.exports=o});
;/*!/lib/prototype/date.format.js*/
define("mcycle:lib/prototype/date.format",function(){Date.prototype.format||(Date.prototype.format=function(t){t=t||"yyyy-MM-dd hh:mm:ss";var e={"M+":this.getMonth()+1,"d+":this.getDate(),"h+":this.getHours(),"m+":this.getMinutes(),"s+":this.getSeconds(),"q+":Math.floor((this.getMonth()+3)/3),S:this.getMilliseconds()};/(y+)/.test(t)&&(t=t.replace(RegExp.$1,(this.getFullYear()+"").substr(4-RegExp.$1.length)));for(var s in e)new RegExp("("+s+")").test(t)&&(t=t.replace(RegExp.$1,1==RegExp.$1.length?e[s]:("00"+e[s]).substr((""+e[s]).length)));return t})});
;/*!/widgets/search/search.js*/
define("mcycle:widgets/search/search",function(e,t,n){"use strict";e("mcycle:lib/prototype/function.bind");var i=e("common:lib/jquery/jquery-1.11.3"),s=function(){return this.query="",this.init.apply(this,arguments)};s.prototype.init=function(e){this.$input=e.input,this.isShow=!1,this.$downmenu=i('<div class="search-downmenu" />').appendTo("body"),this.bindEven()},s.prototype.bindEven=function(){var e=this,t="hover",n=".search-tips-select";this.$downmenu.on("click",n,function(){var e=i(this).data("tid");window.location.href="/repo/appraisal/"+e}),this.$downmenu.on("mouseover",n,function(){i(this).addClass(t)}).on("mouseout",n,function(){i(this).removeClass(t)}),this.$input.on("keydown",function(i){if(e.isShow&&(38==i.keyCode||40==i.keyCode)){var s=e.$downmenu.find(n),o=s.length;if(0!=o){var a=s.filter("."+t).index();if(38==i.keyCode){a=-1==a?o-2:a,s.eq(a).removeClass(t);var h=s.eq(a-1).addClass(t).data("name")}else{a=a==o-1?-1:a,s.eq(a).removeClass(t);var h=s.eq(a+1).addClass(t).data("name")}e.$input.val(h)}}})},s.prototype.showMenu=function(){var e=this;this.$ul&&this.$ul.children.length&&this.$downmenu.slideDown(50,function(){e.isShow=!0})},s.prototype.hideMenu=function(){var e=this;this.$downmenu.slideUp(50,function(){e.isShow=!1})},s.prototype.bind=function(){var e=this;this.$input.on("blur",function(){setTimeout(function(){e.hideMenu()},200)}),this.$input.on("focus",function(){e.showMenu()})},s.prototype._setPosition=function(){var e=this.$input.offset();this.$downmenu.css({top:e.top+this.$input.height(),left:e.left-1,width:this.$input.outerWidth()+2})},s.prototype.setMenu=function(e){var t=this,n=e.length>10?10:e.length;this.$ul=i('<ul class="search-tips-list" />');for(var s=0;n>s;s++)(function(){var e=this;i('<li class="search-tips-select" />').text(this.name).data({name:e.name,tid:e.tid}).appendTo(t.$ul)}).call(e[s]);this._setPosition(),this.$downmenu.html(this.$ul),e.length>0?this.showMenu():this.hideMenu()},s.prototype.handleExpand=function(e){var t=this;this.query=e,this.expanding=i.ajax({url:"/repo/type/expand",data:{q:e},success:function(e){200==e.code&&t.setMenu(e.data)}})};var o={$searchBox:i(".mcycle-search-box"),bind:function(){var e=this;this.$searchBox.on("click",".mcycle-search-btn",this.handleQuery),this.$searchBox.on("keypress",".mcycle-search-input",function(t){var n=i(this).parents(".mcycle-search-box").data("search");13==t.keyCode&&(n.hideMenu(),e.handleQuery())}),navigator.userAgent.indexOf("MSIE 8.0")>0&&i(".mcycle-search-input",this.$searchBox).on("keyup",this.handleInput),this.$searchBox.on("input",".mcycle-search-input",this.handleInput)},handleInput:function(){var e=i(this).parents(".mcycle-search-box").data("search"),t=i(this).val();return clearTimeout(e.timeout),""==t?void e.hideMenu():t==e.query?void e.showMenu():void(e.timeout=setTimeout(function(){e.expanding&&e.expanding.abort&&e.expanding.abort(),e.handleExpand(t)},150))},handleQuery:function(){var e=i.trim(o.$searchBox.children(".mcycle-search-input").val());e&&(o.isInSearchPage?o.handleSearch&&i.isFunction(o.handleSearch)&&o.handleSearch(e):window.location.href="/repo/search?q="+encodeURIComponent(e))},init:function(e,t){var n=this;this.isInSearchPage=!!e,this.handleSearch=t,this.$searchBox.each(function(){i(this).data("search",new s({input:i(this).children(n.searchInputSelector)}))}),this.bind()}};n.exports=o});