(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["dashboard"],{"81e0":function(e,t,r){"use strict";var a=r("f51f"),o=r.n(a);o.a},ec95:function(e,t,r){"use strict";r.r(t);var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("core-page",[r("common-alerts",{attrs:{id:"dashboard-alerts",alerts:e.alerts}}),e.isLoading?r("core-loading"):e._e(),r("div",{staticClass:"omapi-dash omapi-card__flex"},[e.connected?e.dismissedWelcomeBack?e._e():r("common-welcome-back-box"):r("common-welcomebox",{attrs:{cardType:e.connected?"dismiss":"permanent",learnMore:!0},scopedSlots:e._u([{key:"afterButtons",fn:function(){return[r("core-button",{staticClass:"omapi-create-campaign__link-more",attrs:{href:e.$urls.docs("getting-started-optinmonster-wordpress-checklist","WelcomeBox"),target:"_blank",rel:"noopener noreferrer",linkStyle:!0,arrow:!0}},[e._v("\n\t\t\t\t\tRead the Getting Started Guide\n\t\t\t\t")])]},proxy:!0}],null,!1,3939029944)},[e._v("\n\t\t\tInstantly grow your email list, get more leads and increase sales with the #1 most powerful conversion optimization toolkit in the world.\n\t\t\t")]),r("dashboard-stats-widget"),r("div",{staticClass:"omapi-dash__cards-wrapper omapi-dash__cards-wrapper__left"},[r("dashboard-template-select-widget")],1),r("div",{staticClass:"omapi-dash__cards-wrapper omapi-dash__cards-wrapper__right"},[r("dashboard-top-campaigns-widget"),r("dashboard-resources-widget")],1)],1)],1)},o=[],s=(r("8e6e"),r("ac6a"),r("456d"),r("bd86")),n=r("2f62");function c(e,t){var r=Object.keys(e);return Object.getOwnPropertySymbols&&r.push.apply(r,Object.getOwnPropertySymbols(e)),t&&(r=r.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),r}function i(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?c(r,!0).forEach(function(t){Object(s["a"])(e,t,r[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):c(r).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))})}return e}var d={beforeCreate:function(){this.$store.dispatch("dashboard/fetch")},computed:i({},Object(n["f"])(["alerts"]),{},Object(n["f"])("dashboard",["dismissedWelcomeBack"]),{},Object(n["d"])(["connected"]),{isLoading:function(){return this.$store.getters.isLoading("plugins")}}),methods:{}},l=d,p=(r("81e0"),r("2877")),u=Object(p["a"])(l,a,o,!1,null,null,null);t["default"]=u.exports},f51f:function(e,t,r){}}]);
//# sourceMappingURL=dashboard.db15a80a.js.map