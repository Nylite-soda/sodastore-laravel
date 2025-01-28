import { renderNavBarandFooter, renderStoreHeader } from "../shop/scripts/utils/rendering.js";
import { getFromStorage, saveToStorage } from "../shop/scripts/utils/storage.js";
import { cart } from "./cart.js";
import dayjs from 'https://unpkg.com/dayjs@1.11.10/esm/index.js';


cart

export let orders  = getFromStorage("orders") || [];

export function getOrdersFromCart(cart){
    cart.forEach(item => {
        orders.unshift({
            id: item.id,
            quantity: item.quantity,
            deliveryOptionId: item.deliveryOptionId,
            date: dayjs().format("dddd, MMMM D"),
            tracking: {
                status: "Pending",
                location: "University of Ibadan"
            }
        });
    });
    saveToStorage('orders', orders)
    console.log(orders);
}

// export function generateOrderHTML(orders){
//     const ordersList = document.querySelector(".js-orders-container");

//     if (orders.length === 0) {
//         ordersList.innerHTML = `
//             <div class="empty-cart flex">
//                 No Orders Yet!. <a href="/shopreview" class="heading-link link-primary">Continue shopping</a>
//             </div>
//         `;
//         return;
//     }
//     for (let orderItem of orders) {
//             let matchingProduct = findProduct(orderItem.id);
    
//             const deliveryOptionId = Number(orderItem.deliveryOptionId);
    
//             const deliveryOption = getDeliveryOptions(deliveryOptionId);
            
//             let deliveryDate = generateDeliveryDate(deliveryOption);
    
//             orderSummary.innerHTML += `
//                 <div class="cart-item-container
//                     js-cart-item-container-${matchingProduct.id}">
//                     <div class="delivery-date">
//                         Delivery Date: ${deliveryDate}
//                     </div>
    
//                     <div class="cart-item-details-grid">
//                         <div class="details flex">
//                             <img class="product-image"
//                                 src=${matchingProduct["image"]}>
    
//                             <div class="cart-item-details">
//                                 <div class="product-name">
//                                     ${matchingProduct["name"]}
//                                 </div>
//                                 <div class="product-rating-container flex">
//                                     <img class="product-rating-stars"
//                                         src="images/ratings/rating-${matchingProduct["rating"].stars * 10}.png">
//                                     <div class="product-rating-count link-primary">
//                                         (${matchingProduct["rating"].count} Reviews)
//                                     </div>
//                                 </div>
//                                 <div class="product-price">
//                                     ${formatToNaira(matchingProduct["priceCents"])}
//                                 </div>
//                                 <div class="product-quantity">
//                                     <span class="flex quantity-display">
//                                         Quantity
//                                         <div class="update-qty flex"><button class="qty qty-left" data-product-id=${cartItem.id}>-</button><div class="qty qty-value flex">${cartItem.quantity}</div><button class="qty qty-right" data-product-id=${cartItem.id}>+</button></div>
//                                     </span>
//                                     <span class="delete-quantity-link js-delete-quantity-link link-primary" data-product-id=${matchingProduct.id}>
//                                         <svg class="bin" width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
//                                             <path d="M3.15789 26.8421C3.15789 28.5837 4.57421 30 6.31579 30H22.1053C23.8468 30 25.2632 28.5837 25.2632 26.8421V7.89474H3.15789V26.8421ZM6.31579 11.0526H22.1053L22.1068 26.8421H6.31579V11.0526ZM18.9474 3.15789V0H9.47368V3.15789H0V6.31579H28.4211V3.15789H18.9474Z" fill="#45322C"/>
//                                             <path d="M9.47363 14.2105H12.6315V23.6842H9.47363V14.2105ZM15.7894 14.2105H18.9473V23.6842H15.7894V14.2105Z" fill="#45322C"/>
//                                         </svg>
//                                         Delete
//                                     </span>
//                                 </div>
//                             </div>
//                         </div>
    
//                         <div class="delivery-options">
//                             <div class="delivery-options-title">
//                                 Choose a delivery option:
//                             </div>
                            
//                             ${renderDeliveryOptions(matchingProduct, cartItem)}
//                         </div>
//                     </div>
//                 </div>
//             `;
//         }
// }

function generateOrderHTML(orders) {
    const itemsHTML = orders.map(item => `
      <div class="order-item">
        <div class="item-image">
          <img src="${item.image}" alt="${item.name}" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="item-details">
          <h3>${item.name}</h3>
          <p>Quantity: ${item.quantity}</p>
          <p>Price: ${item.price}</p>
        </div>
      </div>
    `).join('');

    return `
      <div class="order-card">
        <div class="order-header">
          <div>
            <h2>Order ${order.id}</h2>
            <p>Placed on ${formatDate(order.date)}</p>
          </div>
          <div>
            <strong>Status: ${order.status}</strong>
          </div>
        </div>
        <div class="order-items">
          ${itemsHTML}
        </div>
        <div class="tracking-status">
          <div class="status-dot"></div>
          <div>
            <strong>${order.tracking.status}</strong>
            <p>${order.tracking.location}</p>
          </div>
        </div>
        <div class="order-actions">
          <button onclick="trackOrder('${order.id}')">Track Order</button>
          <button onclick="viewDetails('${order.id}')">View Details</button>
        </div>
      </div>
    `;
}

// generateOrderHTML(orders)