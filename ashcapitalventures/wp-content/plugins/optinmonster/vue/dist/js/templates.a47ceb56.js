(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["templates"],{"93c6":function(e,t,a){var i=a("6a5c"),n=a("6747");function s(e,t,a,s){return null==e?[]:(n(t)||(t=null==t?[]:[t]),a=s?void 0:a,n(a)||(a=null==a?[]:[a]),i(e,t,a))}e.exports=s},"9fe3":function(e,t,a){"use strict";var i=a("ad51"),n=a.n(i);n.a},ad51:function(e,t,a){},b0d4:function(e,t,a){"use strict";a.r(t);var i=function(){var e=this,t=e.$createElement,a=e._self._c||t;return e.reachedCampaignLimit?a("templates-limit-exceeded"):a("core-page",{attrs:{title:"Select a Campaign Type:",classes:"templates-wrapper"}},[a("common-alerts",{attrs:{alerts:e.alerts}}),a("div",{staticClass:"templates-content"},[a("templates-types"),a("templates-filters"),a("div",{staticClass:"omapi-content-area"},[a("templates-upsell-alerts"),e.hasTemplates?a("div",{staticClass:"omapi-template-listing-wrap"},[a("templates-grid",{attrs:{templates:e.selectedTemplates}}),e.isLoading?a("svg-loading",{style:{margin:"0 auto"}}):e._e()],1):e.isLoading?a("div",{staticClass:"archie-loader-wrapper"},[a("div",[a("core-loading",{staticClass:"loader"})],1)]):a("div",{staticClass:"no-templates-available"},[a("core-alert",{attrs:{type:e.validType?"info":"warn"}},[a("div",{staticClass:"alert-message"},[e._v("\n\t\t\t\t\t\t"+e._s(e.noTemplatesMessage)+"\n\t\t\t\t\t")])])],1)],1)],1),a("campaigns-modal-create-campaign"),a("templates-modal-not-connected"),a("templates-modal-no-access")],1)},n=[],s=(a("8e6e"),a("456d"),a("ac6a"),a("7f7f"),a("386d"),a("55dd"),a("6762"),a("2fdb"),a("7514"),a("bd86")),r=a("9b02"),o=a.n(r),c=a("93c6"),l=a.n(c),p=a("8103"),m=a.n(p),d=a("9c6cf"),u=a("2f62");function f(e,t){var a=Object.keys(e);return Object.getOwnPropertySymbols&&a.push.apply(a,Object.getOwnPropertySymbols(e)),t&&(a=a.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),a}function h(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?f(a,!0).forEach(function(t){Object(s["a"])(e,t,a[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):f(a).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))})}return e}var v=Object(u["a"])("templates"),g=v.mapState,b=v.mapActions,y=v.mapGetters,w={created:function(){var e=this;this.listenApiLoaded(),document.addEventListener("om.Main.getCampaigns",d["e"]),document.addEventListener("om.Campaigns.init",d["b"]),document.addEventListener("om.Optin.init",d["f"]),document.addEventListener("om.Campaign.afterShow",d["d"]),document.addEventListener("om.Campaign.startClose",d["c"]),this.$store.subscribe(function(t,a){var i=["templates/setLoadingPreview","templates/setPreviewing"];-1===i.indexOf(t.type)&&(Object(d["a"])(),e.$store.commit("templates/setLoadingPreview",""),e.$store.commit("templates/setPreviewing",""))}),this.$store.dispatch("campaigns/fetchDashboard").catch(function(){}),this.loadApi()},beforeDestroy:function(){document.removeEventListener("om.Main.getCampaigns",d["e"]),document.removeEventListener("om.Campaigns.init",d["b"]),document.removeEventListener("om.Optin.init",d["f"]),document.removeEventListener("om.Campaign.afterShow",d["d"]),document.removeEventListener("om.Campaign.startClose",d["c"])},computed:h({},g(["activeType","search","sort","popular","templates"]),{},y(["typePermitted","featured","filters","filterGamified","validType"]),{alerts:function(){return this.$get("$store.state.alerts",[])},isLoading:function(){return this.$store.getters.isLoading("templates")},popularTemplates:function(){var e=this.popular[this.activeType];return e&&e.length?this.order(e):[]},featuredTemplates:function(){var e=this.featured[this.activeType];return e&&e.length?this.order(e):[]},showableTemplates:function(){var e=this,t=function(t,a){return!e.filters[t].length||!e.filters[t].find(function(e){return!a.includes(e)})},a=["popular","featured"].includes(this.sort)?"".concat(this.sort,"Templates"):"templates",i=this[a].filter(function(t){return""===e.search||t.name.toLowerCase().includes(e.search.toLowerCase())}).filter(function(a){var i="mobile"===e.filters.device?a.mobile:!a.mobile;if(!i)return!1;var n=["goals","categories","tags"];return!n.find(function(e){return!t(e,a[e].map(function(e){return e.id}))})});return this.order(i)},selectedTemplates:function(){var e=this;return this.showableTemplates.filter(function(t){return e.filterGamified?t.tags.find(function(e){return 1===e.id}):t.type===e.activeType})},hasTemplates:function(){return this.selectedTemplates.length},shouldShowUpsells:function(){return!!this.$store.getters.connected&&!this.typePermitted(this.activeType)},noTemplatesMessage:function(){return this.validType?"No templates available for your current selection.":"".concat(m()(this.activeType)," is not a valid type. Please select one of the options above.")},reachedCampaignLimit:function(){if(!this.$store.getters.connected)return!1;var e=this.$get("$store.state.campaigns.totalCampaignsCount",0),t=o()(this.$store.getters.userAttribute("limits",{}),"campaigns",10);return e>t}}),mounted:function(){this.fetchTemplateData().catch(function(){}),this.$bus.$emit("dashboard-view-mounted","templates")},methods:h({},b(["fetchTemplateData"]),{listenApiLoaded:function(){var e=this,t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"addEventListener";["om.Api.init","om.Main.init","om.Campaigns.init","om.Campaign.init"].forEach(function(a){return document[t](a,e.setApiLoaded)})},loadApi:function(){var e=document.getElementById("omwpapi-templates-apijs");if(!e){var t=document.getElementsByTagName("head")[0]||document.documentElement;e=document.createElement("script"),e.type="text/javascript",e.id="omwpapi-templates-apijs",e.src=this.$urls.apiJs(),e.async=!0,e.dataset.account=56690,e.dataset.user=50374,this.$env.isProduction()||(e.dataset.env=this.$env.isDevelopment()?"dev":this.$env.currentEnv),t.appendChild(e)}},setApiLoaded:function(e){this.listenApiLoaded("removeEventListener"),this.$store.commit("templates/apiLoaded")},applyFilters:function(e){this.$bus.$emit("applied-bulk-filter"),this.$store.commit("templates/appliedFilters",e)},order:function(e){var t=this;return l()(e,function(e){return"recent"===t.sort?-t.$moment(e.created_at).valueOf():e.name})}})},L=w,C=(a("9fe3"),a("2877")),T=Object(C["a"])(L,i,n,!1,null,null,null);t["default"]=T.exports}}]);
//# sourceMappingURL=templates.a47ceb56.js.map