(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[44],{366:function(o,c,t){"use strict";t.r(c),t.d(c,"Block",(function(){return l}));var n=t(0),e=t(1),s=t(4),r=t.n(s),a=t(24),i=t(86),k=t(48);t(397);const l=o=>{const{className:c}=o,t=Object(i.a)(o),{parentClassName:s}=Object(a.useInnerBlockLayoutContext)(),{product:k}=Object(a.useProductDataContext)();if(!k.id)return null;const l=!!k.is_in_stock,u=k.low_stock_remaining,d=k.is_on_backorder;return Object(n.createElement)("div",{className:r()(c,{[`${s}__stock-indicator`]:s,"wc-block-components-product-stock-indicator--in-stock":l,"wc-block-components-product-stock-indicator--out-of-stock":!l,"wc-block-components-product-stock-indicator--low-stock":!!u,"wc-block-components-product-stock-indicator--available-on-backorder":!!d,...o.isDescendantOfAllProducts&&{[t.className]:t.className,"wc-block-components-product-stock-indicator wp-block-woocommerce-product-stock-indicator":!0}}),...o.isDescendantOfAllProducts&&{style:t.style}},(({isInStock:o=!1,isLowStock:c=!1,lowStockAmount:t=null,isOnBackorder:n=!1})=>c&&null!==t?Object(e.sprintf)(/* translators: %d stock amount (number of items in stock for product) */
Object(e.__)("%d left in stock","woocommerce"),t):n?Object(e.__)("Available on backorder","woocommerce"):o?Object(e.__)("In stock","woocommerce"):Object(e.__)("Out of stock","woocommerce"))({isInStock:l,isLowStock:!!u,lowStockAmount:u,isOnBackorder:d}))};c.default=Object(k.withProductDataContext)(l)},397:function(o,c){}}]);