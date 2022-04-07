const hamburger = document.querySelector("#hamburger");
const sidebar = document.querySelector("#sidebar");

hamburger.addEventListener("click", () => {
  sidebar.classList.toggle("active");
});

const q = document.getElementById("query");
const products = document.querySelectorAll(".product");
const productenDiv = document.querySelector("#producten");

q.addEventListener("input", (event) => {
  productenDiv.innerHTML = "";

  products.forEach((product) => {
    const dataProduct = product.getAttribute("data-product");

    if (dataProduct.indexOf(event.target.value) !== -1) {
      productenDiv.appendChild(product);
    }
  });
});

// const form = document.querySelector("#form");
// const query = document.querySelector("#query");
// const mailIndex = document.querySelector("#mailIndex");

// //popup windows
// mailIndex.addEventListener("click", () => {
//   window.open(
//     "contact.html",
//     "Google",
//     "width=400,height=425,scrollbars=no,toolbar=no,location=no"
//   );
// });

// //Form/searchbar
// form.addEventListener("submit", (e) => {
//   e.preventDefault();
//   const url = "#" + query.value;
//   const win = window.open(url, "_self");
//   win.focus();
// });
