/*! For license information please see password.jevNdNVsv.js.LICENSE.txt */
(()=>{"use strict";var e={932:(e,t,o)=>{o.r(t)}},t={};function o(r){var n=t[r];if(void 0!==n)return n.exports;var i=t[r]={exports:{}};return e[r](i,i.exports,o),i.exports}o.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return o.d(t,{a:t}),t},o.d=(e,t)=>{for(var r in t)o.o(t,r)&&!o.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),o.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{const e=jQuery;var t=o.n(e);o(932),function(){let e=t()(".woocommerce-Input--text[name=password]");if(!PMPRUtil.isEmpty(e)){let o=PMPRUtil.getSettingByPath("icons");if(!PMPRUtil.isEmpty(o))for(let r in o)e.after(t()(o[r]))}t()(document).on("click",".toggle-password",(function(o){let r,n=t()(this),i=n.parent(),s=(i.find("input[name=password]"),i.find(".toggle-password.d-none"));n.is(".show")?r="text":n.is(".hide")&&(r="password"),n.addClass("d-none"),s.removeClass("d-none"),e.attr("type",r)}))}()})()})();