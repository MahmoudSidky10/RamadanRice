!function(){"use strict";var n=function(n){var e=n;return{get:function(){return e},set:function(n){e=n}}},e=tinymce.util.Tools.resolve("tinymce.PluginManager"),t=function(n){return{isFullscreen:function(){return null!==n.get()}}},r=function(){},o=function(n){return function(){return n}};function u(n){for(var e=[],t=1;t<arguments.length;t++)e[t-1]=arguments[t];return function(){for(var t=[],r=0;r<arguments.length;r++)t[r]=arguments[r];var o=e.concat(t);return n.apply(null,o)}}var i=o(!1),c=o(!0),l=function(){return f},f=function(){var n=function(n){return n.isNone()},e=function(n){return n()},t=function(n){return n};return{fold:function(n,e){return n()},is:i,isSome:i,isNone:c,getOr:t,getOrThunk:e,getOrDie:function(n){throw new Error(n||"error: getOrDie called on none.")},getOrNull:o(null),getOrUndefined:o(void 0),or:t,orThunk:e,map:l,each:r,bind:l,exists:i,forall:c,filter:l,equals:n,equals_:n,toArray:function(){return[]},toString:o("none()")}}(),a=function(n){var e=o(n),t=function(){return u},r=function(e){return e(n)},u={fold:function(e,t){return t(n)},is:function(e){return n===e},isSome:c,isNone:i,getOr:e,getOrThunk:e,getOrDie:e,getOrNull:e,getOrUndefined:e,or:t,orThunk:t,map:function(e){return a(e(n))},each:function(e){e(n)},bind:r,exists:r,forall:r,filter:function(e){return e(n)?u:f},toArray:function(){return[n]},toString:function(){return"some("+n+")"},equals:function(e){return e.is(n)},equals_:function(e,t){return e.fold(i,(function(e){return t(n,e)}))}};return u},s={some:a,none:l,from:function(n){return null==n?f:a(n)}},m=function(){return e=function(n){return n.unbind()},t=n(s.none()),r=function(){return t.get().each(e)},{clear:function(){r(),t.set(s.none())},isSet:function(){return t.get().isSome()},set:function(n){r(),t.set(s.some(n))}};var e,t,r},d=function(n){return function(e){return r=typeof(t=e),(null===t?"null":"object"===r&&(Array.prototype.isPrototypeOf(t)||t.constructor&&"Array"===t.constructor.name)?"array":"object"===r&&(String.prototype.isPrototypeOf(t)||t.constructor&&"String"===t.constructor.name)?"string":r)===n;var t,r}},h=function(n){return function(e){return typeof e===n}},v=d("string"),g=d("array"),p=h("boolean"),y=function(n){return!function(n){return null==n}(n)},w=h("function"),b=h("number"),S=Array.prototype.push,E=function(n,e){for(var t=n.length,r=new Array(t),o=0;o<t;o++){var u=n[o];r[o]=e(u,o)}return r},F=function(n,e){for(var t=0,r=n.length;t<r;t++){e(n[t],t)}},T=function(n,e){for(var t=[],r=0,o=n.length;r<o;r++){var u=n[r];e(u,r)&&t.push(u)}return t},x=function(n,e){return function(n){for(var e=[],t=0,r=n.length;t<r;++t){if(!g(n[t]))throw new Error("Arr.flatten item "+t+" was not an array, input: "+n);S.apply(e,n[t])}return e}(E(n,e))},D=function(n){return function(n,e){return e>=0&&e<n.length?s.some(n[e]):s.none()}(n,0)},k=Object.keys,C=function(n){return void 0!==n.style&&w(n.style.getPropertyValue)},O=function(n){if(null==n)throw new Error("Node cannot be null or undefined");return{dom:n}},A={fromHtml:function(n,e){var t=(e||document).createElement("div");if(t.innerHTML=n,!t.hasChildNodes()||t.childNodes.length>1)throw console.error("HTML does not have a single root node",n),new Error("HTML must have a single root node");return O(t.childNodes[0])},fromTag:function(n,e){var t=(e||document).createElement(n);return O(t)},fromText:function(n,e){var t=(e||document).createTextNode(n);return O(t)},fromDom:O,fromPoint:function(n,e,t){return s.from(n.dom.elementFromPoint(e,t)).map(O)}},N=("undefined"!=typeof window?window:Function("return this;")(),function(n){return function(e){return function(n){return n.dom.nodeType}(e)===n}}),M=N(1),P=N(3),L=N(9),q=N(11),H=function(n,e){var t=n.dom;if(1!==t.nodeType)return!1;var r=t;if(void 0!==r.matches)return r.matches(e);if(void 0!==r.msMatchesSelector)return r.msMatchesSelector(e);if(void 0!==r.webkitMatchesSelector)return r.webkitMatchesSelector(e);if(void 0!==r.mozMatchesSelector)return r.mozMatchesSelector(e);throw new Error("Browser lacks native selectors")},R=function(n){return A.fromDom(n.dom.ownerDocument)},V=function(n){return function(n){return s.from(n.dom.parentNode).map(A.fromDom)}(n).map(W).map((function(e){return T(e,(function(e){return t=e,!(n.dom===t.dom);var t}))})).getOr([])},W=function(n){return E(n.dom.childNodes,A.fromDom)},B=w(Element.prototype.attachShadow)&&w(Node.prototype.getRootNode),j=o(B),z=B?function(n){return A.fromDom(n.dom.getRootNode())}:function(n){return L(n)?n:R(n)},I=function(n){var e,t=z(n);return q(e=t)&&y(e.dom.host)?s.some(t):s.none()},U=function(n){return A.fromDom(n.dom.host)},_=function(n){return y(n.dom.shadowRoot)},K=function(n){var e=P(n)?n.dom.parentNode:n.dom;if(null==e||null===e.ownerDocument)return!1;var t,r,o=e.ownerDocument;return I(A.fromDom(e)).fold((function(){return o.body.contains(e)}),(t=K,r=U,function(n){return t(r(n))}))},X=function(n,e,t){!function(n,e,t){if(!(v(t)||p(t)||b(t)))throw console.error("Invalid call to Attribute.set. Key ",e,":: Value ",t,":: Element ",n),new Error("Attribute value was not simple");n.setAttribute(e,t+"")}(n.dom,e,t)},Y=function(n,e){var t=n.dom.getAttribute(e);return null===t?void 0:t},G=function(n,e){n.dom.removeAttribute(e)},J=function(n,e){var t=n.dom;!function(n,e){for(var t=k(n),r=0,o=t.length;r<o;r++){var u=t[r];e(n[u],u)}}(e,(function(n,e){!function(n,e,t){if(!v(t))throw console.error("Invalid call to CSS.set. Property ",e,":: Value ",t,":: Element ",n),new Error("CSS value must be a string: "+t);C(n)&&n.style.setProperty(e,t)}(t,e,n)}))},Q=function(n,e){return C(n)?n.style.getPropertyValue(e):""},Z=function(n){var e,t,r=A.fromDom(function(n){if(j()&&y(n.target)){var e=A.fromDom(n.target);if(M(e)&&_(e)&&n.composed&&n.composedPath){var t=n.composedPath();if(t)return D(t)}}return s.from(n.target)}(n).getOr(n.target)),o=function(){return n.stopPropagation()},u=function(){return n.preventDefault()},i=(e=u,t=o,function(){for(var n=[],r=0;r<arguments.length;r++)n[r]=arguments[r];return e(t.apply(null,n))});return function(n,e,t,r,o,u,i){return{target:n,x:e,y:t,stop:r,prevent:o,kill:u,raw:i}}(r,n.clientX,n.clientY,o,u,i,n)},$=function(n,e,t,r,o){var i=function(n,e){return function(t){n(t)&&e(Z(t))}}(t,r);return n.dom.addEventListener(e,i,o),{unbind:u(nn,n,e,i,o)}},nn=function(n,e,t,r){n.dom.removeEventListener(e,t,r)},en=c,tn=function(n,e,t){return function(n,e,t,r){return $(n,e,t,r,!1)}(n,e,en,t)},rn=function(n,e){return{left:n,top:e,translate:function(t,r){return rn(n+t,e+r)}}},on=rn,un=function(n){var e=void 0===n?window:n;return s.from(e.visualViewport)},cn=function(n,e,t,r){return{x:n,y:e,width:t,height:r,right:n+t,bottom:e+r}},ln=function(n){var e=void 0===n?window:n,t=e.document,r=function(n){var e=void 0!==n?n.dom:document,t=e.body.scrollLeft||e.documentElement.scrollLeft,r=e.body.scrollTop||e.documentElement.scrollTop;return on(t,r)}(A.fromDom(t));return un(e).fold((function(){var n=e.document.documentElement,t=n.clientWidth,o=n.clientHeight;return cn(r.left,r.top,t,o)}),(function(n){return cn(Math.max(n.pageLeft,r.left),Math.max(n.pageTop,r.top),n.width,n.height)}))},fn=function(n,e,t){return un(t).map((function(t){var r=function(n){return e(Z(n))};return t.addEventListener(n,r),{unbind:function(){return t.removeEventListener(n,r)}}})).getOrThunk((function(){return{unbind:r}}))},an=tinymce.util.Tools.resolve("tinymce.dom.DOMUtils"),sn=tinymce.util.Tools.resolve("tinymce.Env"),mn=tinymce.util.Tools.resolve("tinymce.util.Delay"),dn=function(n,e){n.fire("FullscreenStateChanged",{state:e})},hn=function(n){return n.getParam("fullscreen_native",!1,"boolean")},vn=function(n){var e=A.fromDom(n.getElement());return I(e).map(U).getOrThunk((function(){return function(n){var e=n.dom.body;if(null==e)throw new Error("Body is not available yet");return A.fromDom(e)}(R(e))}))},gn=function(n){return n.dom===(void 0!==(e=R(n).dom).fullscreenElement?e.fullscreenElement:void 0!==e.msFullscreenElement?e.msFullscreenElement:void 0!==e.webkitFullscreenElement?e.webkitFullscreenElement:null);var e},pn=function(n,e,t){return T(function(n,e){for(var t=w(e)?e:i,r=n.dom,o=[];null!==r.parentNode&&void 0!==r.parentNode;){var u=r.parentNode,c=A.fromDom(u);if(o.push(c),!0===t(c))break;r=u}return o}(n,t),e)},yn=function(n){return function(n,e){var t,r=void 0===e?document:e.dom;return 1!==(t=r).nodeType&&9!==t.nodeType&&11!==t.nodeType||0===t.childElementCount?[]:E(r.querySelectorAll(n),A.fromDom)}(n)},wn=function(n,e,t){return pn(n,(function(n){return H(n,e)}),t)},bn=function(n,e){return function(n,e){return T(V(n),e)}(n,(function(n){return H(n,e)}))},Sn="data-ephox-mobile-fullscreen-style",En="position:absolute!important;",Fn="top:0!important;left:0!important;margin:0!important;padding:0!important;width:100%!important;height:100%!important;overflow:visible!important;",Tn=sn.os.isAndroid(),xn=function(n){var e=function(n,e){var t=n.dom,r=window.getComputedStyle(t).getPropertyValue(e);return""!==r||K(n)?r:Q(t,e)}(n,"background-color");return void 0!==e&&""!==e?"background-color:"+e+"!important":"background-color:rgb(255,255,255)!important;"},Dn=an.DOM,kn=un().fold((function(){return{bind:r,unbind:r}}),(function(e){var t,r=(t=n(s.none()),{clear:function(){return t.set(s.none())},set:function(n){return t.set(s.some(n))},isSet:function(){return t.get().isSome()},on:function(n){return t.get().each(n)}}),o=m(),u=m(),i=mn.throttle((function(){document.body.scrollTop=0,document.documentElement.scrollTop=0,window.requestAnimationFrame((function(){r.on((function(n){return J(n,{top:e.offsetTop+"px",left:e.offsetLeft+"px",height:e.height+"px",width:e.width+"px"})}))}))}),50);return{bind:function(n){r.set(n),i(),o.set(fn("resize",i)),u.set(fn("scroll",i))},unbind:function(){r.on((function(){o.clear(),u.clear()})),r.clear()}}})),Cn=function(n,e){var t,r,o,u,i,c=document.body,l=document.documentElement,f=n.getContainer(),a=A.fromDom(f),m=vn(n),d=e.get(),h=A.fromDom(n.getBody()),v=sn.deviceType.isTouch(),g=f.style,p=n.iframeElement.style,y=function(n){n(c,"tox-fullscreen"),n(l,"tox-fullscreen"),n(f,"tox-fullscreen"),I(a).map((function(n){return U(n).dom})).each((function(e){n(e,"tox-fullscreen"),n(e,"tox-shadowhost")}))},w=function(){var t,r;v&&(t=n.dom,r=yn("["+Sn+"]"),F(r,(function(n){var e=Y(n,Sn);"no-styles"!==e?J(n,t.parseStyle(e)):G(n,"style"),G(n,Sn)}))),y(Dn.removeClass),kn.unbind(),s.from(e.get()).each((function(n){return n.fullscreenChangeHandler.unbind()}))};if(d)d.fullscreenChangeHandler.unbind(),hn(n)&&gn(m)&&(r=R(m),(o=r.dom).exitFullscreen?o.exitFullscreen():o.msExitFullscreen?o.msExitFullscreen():o.webkitCancelFullScreen&&o.webkitCancelFullScreen()),p.width=d.iframeWidth,p.height=d.iframeHeight,g.width=d.containerWidth,g.height=d.containerHeight,g.top=d.containerTop,g.left=d.containerLeft,t=d.scrollPos,window.scrollTo(t.x,t.y),e.set(null),dn(n,!1),w(),n.off("remove",w);else{var b=tn(R(m),void 0!==document.fullscreenElement?"fullscreenchange":void 0!==document.msFullscreenElement?"MSFullscreenChange":void 0!==document.webkitFullscreenElement?"webkitfullscreenchange":"fullscreenchange",(function(t){hn(n)&&(gn(m)||null===e.get()||Cn(n,e))})),S={scrollPos:(i=ln(window),{x:i.x,y:i.y}),containerWidth:g.width,containerHeight:g.height,containerTop:g.top,containerLeft:g.left,iframeWidth:p.width,iframeHeight:p.height,fullscreenChangeHandler:b};v&&function(n,e,t){var r=function(e){return function(t){var r=Y(t,"style"),o=void 0===r?"no-styles":r.trim();o!==e&&(X(t,Sn,o),J(t,n.parseStyle(e)))}},o=wn(e,"*"),u=x(o,(function(n){return bn(n,"*:not(.tox-silver-sink)")})),i=xn(t);F(u,r("display:none!important;")),F(o,r(En+Fn+i)),r((!0===Tn?"":En)+Fn+i)(e)}(n.dom,a,h),p.width=p.height="100%",g.width=g.height="",y(Dn.addClass),kn.bind(a),n.on("remove",w),e.set(S),hn(n)&&((u=m.dom).requestFullscreen?u.requestFullscreen():u.msRequestFullscreen?u.msRequestFullscreen():u.webkitRequestFullScreen&&u.webkitRequestFullScreen()),dn(n,!0)}},On=function(n,e){return function(t){t.setActive(null!==e.get());var r=function(n){return t.setActive(n.state)};return n.on("FullscreenStateChanged",r),function(){return n.off("FullscreenStateChanged",r)}}};e.add("fullscreen",(function(e){var r=n(null);return e.inline||(function(n,e){n.addCommand("mceFullScreen",(function(){Cn(n,e)}))}(e,r),function(n,e){n.ui.registry.addToggleMenuItem("fullscreen",{text:"Fullscreen",icon:"fullscreen",shortcut:"Meta+Shift+F",onAction:function(){return n.execCommand("mceFullScreen")},onSetup:On(n,e)}),n.ui.registry.addToggleButton("fullscreen",{tooltip:"Fullscreen",icon:"fullscreen",onAction:function(){return n.execCommand("mceFullScreen")},onSetup:On(n,e)})}(e,r),e.addShortcut("Meta+Shift+F","","mceFullScreen")),t(r)}))}();
//# sourceMappingURL=plugin.js.map
