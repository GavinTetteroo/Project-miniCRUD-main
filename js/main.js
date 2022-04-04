const hamburger = document.querySelector("#hamburger")
const sidebar = document.querySelector("#sidebar")

hamburger.addEventListener("click", () => {
    sidebar.classList.toggle("active")
})

const f = document.getElementById('form');
      const q = document.getElementById('query');
      

      function submitted(event) {
        event.preventDefault();
        const url = '#' + q.value;  
        const win = window.open (url, '_self  ');
        win.focus();
      }

      f.addEventListener('submit', submitted);






















      
      const form = document.querySelector("#form");
const query = document.querySelector("#query");
const mailIndex = document.querySelector("#mailIndex");

//popup windows
mailIndex.addEventListener("click", () => {
  window.open(
    "contact.html",
    "Google",
    "width=400,height=425,scrollbars=no,toolbar=no,location=no"
  );
});

//Form/searchbar
form.addEventListener("submit", (e) => {
  e.preventDefault();
  const url = "#" + query.value;
  const win = window.open(url, "_self");
  win.focus();
});