// script.js

// Product data
const products = [
    {
        name: "Product 1",
        price: 99.99,
        image: "product1.jpg",
        stock: 5,
    },
    {
        name: "Product 2",
        price: 79.99,
        image: "product2.jpg",
        stock: 3,
    },
    {
        name: "Product 3",
        price: 129.99,
        image: "product3.jpg",
        stock: 8,
    },
    // Add more products as needed
];

// JavaScript code to dynamically generate carousel items

const carouselInner = document.querySelector(".carousel-inner");

// Loop through the products and create carousel items
for (let i = 0; i < products.length; i++) {
    const product = products[i];
    const carouselItem = document.createElement("div");
    carouselItem.classList.add("carousel-item");

    if (i === 0) {
        carouselItem.classList.add("active");
    }

    const card = document.createElement("div");
    card.classList.add("col-md-4");
    card.innerHTML = `
        <div class="card">
            <img src="${product.image}" alt="${product.name}">
            <div class="card-body">
                <h5 class="card-title">${product.name}</h5>
                <p class="card-text">Price: $${product.price.toFixed(2)}</p>
                <a href="#" class="btn btn-primary">Order Now</a>
            </div>
        </div>
    `;

    carouselItem.appendChild(card);
    carouselInner.appendChild(carouselItem);
}

// Show the first carousel item (product)
const firstCarouselItem = carouselInner.querySelector(".carousel-item");
firstCarouselItem.classList.add("active");

//heartbutton function
var heartBtn=document.getElementById('heart-btn');
function Toggle(){
    if(heartBtn.style.color=="red"){
        heartBtn.style.color= "grey"
    }
    else{
        heartBtn.style.color="red"
    }
}