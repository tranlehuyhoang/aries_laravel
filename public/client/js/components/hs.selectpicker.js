(function(a){'use strict';a.HSCore.components.HSSelectPicker={_baseConfig:{},pageCollection:a(),init:function(b,c){if(this.collection=b&&a(b).length?a(b):a(),!!a(b).length)return this.config=c&&a.isPlainObject(c)?a.extend({},this._baseConfig,c):this._baseConfig,this.config.itemSelector=b,this.initSelectPicker(),this.pageCollection},initSelectPicker:function(){var b=this,c=b.pageCollection;this.collection.each(function(b,d){var e=a(d);e.selectpicker(),e.on("loaded.bs.select",function(){var a=e.siblings(".dropdown-menu ").find(".bs-searchbox"),b=e.data("searchbox-classes");b&&a.addClass(b)}),c=c.add(e)})},method:function(){for(var b=this,c=[],d=1;d<arguments.length;d++)c.push(arguments[d]);b.collection.each(function(b,d){var e=a(d);e.selectpicker.apply(e,c)})}}})(jQuery);