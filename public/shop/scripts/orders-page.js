import { cart, emptyCart, findProduct, updateCartQuantity } from "../../data/cart.js";
import { getOrdersFromCart, orders } from "../../data/orders.js";
import { formatToNaira } from "./utils/moneyUtil.js";
import { renderNavBarandFooter, renderStoreHeader } from "./utils/rendering.js";
import { saveToStorage } from "./utils/storage.js";
import dayjs from 'https://unpkg.com/dayjs@1.11.10/esm/index.js';



renderNavBarandFooter();
renderStoreHeader();

 // Sample order data
//  const orders = [
//     {
//       id: "ORD-001",
//       date: "2024-01-15",
//       status: "Delivered",
//       items: [
//         {
//           name: "Leather Handbag",
//           price: "$129.99",
//           quantity: 1,
//           image: "/api/placeholder/100/100"
//         },
//         {
//           name: "Silk Scarf",
//           price: "$45.99",
//           quantity: 2,
//           image: "/api/placeholder/100/100"
//         }
//       ],
//       tracking: {
//         status: "Package delivered",
//         location: "New York, NY"
//       }
//     },
//     {
//       id: "ORD-002",
//       date: "2024-01-18",
//       status: "In Transit",
//       items: [
//         {
//           name: "Classic Watch",
//           price: "$299.99",
//           quantity: 1,
//           image: "/api/placeholder/100/100"
//         }
//       ],
//       tracking: {
//         status: "In transit",
//         location: "Chicago, IL"
//       }
//     }
//   ];

  function formatDate(dateString) {
    return new Date(dateString).toLocaleDateString('en-US', {
      year: 'numeric',
      month: 'long',
      day: 'numeric'
    });
  }

  function generateOrderHTML(order) {
    // const itemsHTML = order.items.map(item => `
    //   <div class="order-item">
    //     <div class="item-image">
    //       <img src="${item.image}" alt="${item.name}" style="width: 100%; height: 100%; object-fit: cover;">
    //     </div>
    //     <div class="item-details">
    //       <h3>${item.name}</h3>
    //       <p>Quantity: ${item.quantity}</p>
    //       <p>Price: ${item.price}</p>
    //     </div>
    //   </div>
    // `).join('');

    // return `
    //   <div class="order-card">
    //     <div class="order-header">
    //       <div>
    //         <h2>Order ${order.id}</h2>
    //         <p>Placed on ${formatDate(order.date)}</p>
    //       </div>
    //       <div>
    //         <strong>Status: ${order.status}</strong>
    //       </div>
    //     </div>
    //     <div class="order-items">
    //       ${itemsHTML}
    //     </div>
    //     <div class="tracking-status">
    //       <div class="status-dot"></div>
    //       <div>
    //         <strong>${order.tracking.status}</strong>
    //         <p>${order.tracking.location}</p>
    //       </div>
    //     </div>
    //     <div class="order-actions">
    //       <button onclick="trackOrder('${order.id}')">Track Order</button>
    //       <button onclick="viewDetails('${order.id}')">View Details</button>
    //     </div>
    //   </div>
    // `;
  }

  function trackOrder(orderId) {
    alert(`Tracking order: ${orderId}`);
  }

  function viewDetails(orderId) {
    alert(`Viewing details for order: ${orderId}`);
  }

  // Generate and insert orders HTML
document.getElementById('ordersContainer1').innerHTML = 
  orders.map(order => generateOrderHTML(order)).join('');

const today = dayjs().format("dddd, MMMM D");

function generateMainOrderList(orders){
    const orderList = document.querySelector(".js-orders-container1");
    orderList.innerHTML = ``;

    if (orders.length === 0) {
        orderList.innerHTML = `
            <div class="empty-cart flex">
                No Orders Yet!. <a href="/shopreview" class="heading-link link-primary">Continue shopping</a>
            </div>
        `;
        return;
    }

    orders.forEach(item => {
        let matchingProduct = findProduct(item.id);

        orderList.innerHTML += `
        <div class="order-card">
            <div class="order-header">
                <div>
                    <h2>Order ${item.id}</h2>
                    <p>Placed on ${today}</p>
                </div>
                <div>
                    <strong>Status: ${item.tracking.status}</strong>
                </div>
            </div>
            <div class="order-items">
                <div class="order-item">
                    <div class="item-image">
                        <img src="${matchingProduct.image}" alt="${matchingProduct.name}" style="width: 100%; height: auto; object-fit: cover;">
                    </div>
                    <div class="item-details">
                        <h3>${matchingProduct.name}</h3>
                        <p>Quantity: ${item.quantity}</p>
                        <p>Price: ${formatToNaira(matchingProduct["priceCents"])}</p>
                    </div>
                </div>
            </div>
            <div class="tracking-status">
                <div class="status-dot"></div>
                <div>
                    <strong>${item.tracking.status}</strong>
                    <p>${item.tracking.location}</p>
                </div>
            </div>
            <div class="order-actions">
                <button onclick="trackOrder('${item.id}')">Track Order</button>
                <button onclick="viewDetails('${item.id}')">View Details</button>
            </div>
        </div>
        `
    });
}




generateMainOrderList(orders);