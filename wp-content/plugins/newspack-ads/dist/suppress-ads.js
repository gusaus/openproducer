(()=>{"use strict";var e={r:e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function o(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function r(e,t){return r=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},r(e,t)}function i(e){return i=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},i(e)}function u(e){return u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},u(e)}function c(e,t){if(t&&("object"===u(t)||"function"==typeof t))return t;if(void 0!==t)throw new TypeError("Derived constructors may only return object or undefined");return function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e)}function s(e){var t=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}();return function(){var n,o=i(e);if(t){var r=i(this).constructor;n=Reflect.construct(o,arguments,r)}else n=o.apply(this,arguments);return c(this,n)}}e.r(t);const p=window.wp.element,a=window.wp.plugins,f=window.wp.editPost,l=window.wp.i18n,d=window.wp.components,w=window.wp.compose,y=window.wp.data;var __=l.__,b=function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),Object.defineProperty(e,"prototype",{writable:!1}),t&&r(e,t)}(a,e);var t,i,u,c=s(a);function a(){return n(this,a),c.apply(this,arguments)}return t=a,(i=[{key:"render",value:function(){var e=this.props,t=e.newspack_ads_suppress_ads,n=e.updateSuppressAds;return(0,p.createElement)(f.PluginDocumentSettingPanel,{name:"newspack-ad-free",title:__("Newspack Ads Settings","newspack"),className:"newspack-subtitle"},(0,p.createElement)(d.ToggleControl,{label:__("Don't show ads on this post or page","newspack"),checked:t,onChange:function(e){n(e)}}))}}])&&o(t.prototype,i),u&&o(t,u),Object.defineProperty(t,"prototype",{writable:!1}),a}(p.Component),m=(0,w.compose)([(0,y.withSelect)((function(e){return{newspack_ads_suppress_ads:e("core/editor").getEditedPostAttribute("meta").newspack_ads_suppress_ads}})),(0,y.withDispatch)((function(e){return{updateSuppressAds:function(t){e("core/editor").editPost({meta:{newspack_ads_suppress_ads:t}})}}}))])(b);(0,a.registerPlugin)("plugin-document-setting-panel-newspack-suppress-ads",{render:m,icon:null});var _=window;for(var h in t)_[h]=t[h];t.__esModule&&Object.defineProperty(_,"__esModule",{value:!0})})();