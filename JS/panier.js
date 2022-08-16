var total = document.querySelector(".text-price").innerHTML;
const prices = document.querySelectorAll(".price");

totaux = parseInt(total);

prices.forEach(price => {
    const prix = parseInt(price.innerHTML);
    totaux = totaux + prix;
});
total = totaux;
console.log(total)