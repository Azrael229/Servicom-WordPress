(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[38],{362:function(e,t,c){"use strict";c.r(t),c.d(t,"Block",(function(){return p}));var n=c(0),o=c(1),r=c(4),s=c.n(r),a=c(24),u=c(86),i=c(48),l=c(84),b=c(2);const w=e=>{const{reviews:t}=e,c=t?Object(o.sprintf)(/* translators: %s is referring to the total of reviews for a product */
Object(o._n)("(%s customer review)","(%s customer reviews)",t,"woocommerce"),t):Object(o.__)("(X customer reviews)","woocommerce");return Object(n.createElement)("span",{className:"wc-block-components-product-rating-counter__reviews_count"},Object(n.createElement)(b.Disabled,null,Object(n.createElement)("a",{href:"/"},c)))},p=e=>{const{textAlign:t,shouldDisplayMockedReviewsWhenProductHasNoReviews:c}=e,o=Object(u.a)(e),{parentClassName:r}=Object(a.useInnerBlockLayoutContext)(),{product:i}=Object(a.useProductDataContext)(),b=(e=>{const t=Object(l.a)(e.review_count)?e.review_count:parseInt(e.review_count,10);return Number.isFinite(t)&&t>0?t:0})(i),p=s()(o.className,"wc-block-components-product-rating-counter",{[`${r}__product-rating`]:r,[`has-text-align-${t}`]:t});if(b||c)return Object(n.createElement)("div",{className:p,style:o.style},Object(n.createElement)("div",{className:"wc-block-components-product-rating-counter__container"},Object(n.createElement)(w,{reviews:b})))};t.default=Object(i.withProductDataContext)(p)}}]);