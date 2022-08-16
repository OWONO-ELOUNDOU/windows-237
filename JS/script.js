// display on scroll effect
/*const ratio = .1
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}

const handleIntersect = function(entries, observer){
    entries.forEach(function (entry){
        if(entry.intersectionRatio > ratio){
            entry.target.classList.add('reveal-visible')
            observer.unobserve(entry.target)
        }
    })
}

document.documentElement.classList.add('reveal-loaded')
const observer = new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('[class*="reveal-"]').forEach(function (r){
    observer.observe(r)
})
// display on scroll effect end

// dropdown menu
const selectBtn = document.querySelector(".select-btn"),
      item = document.querySelector(".item");

selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});

item.addEventListener("click", () => {
    item.classList.toggle("checked");
})
*/

//details section js
const detailBtn = document.querySelector("#details-btn");
const details = document.querySelector("#details");

detailBtn.addEventListener("click", () => {
    details.classList.toggle('show');
})

// display submenu
const daily = document.querySelector(".daily");
const demand = document.querySelector(".demand");
const free = document.querySelector(".free");

const dailyInfo = document.querySelector(".daily-info");
const demandImg = document.querySelector(".demand-img");
const freeImg = document.querySelector(".free-img");


daily.addEventListener("click", () => {
    dailyInfo.classList.toggle("show");
    if(demandImg.classList.contains("show") || freeImg.classList.contains("show")) {
        demandImg.classList.remove("show");
        freeImg.classList.remove("show");
    }
})
demand.addEventListener("click", () => {
    demandImg.classList.toggle("show");
    if(dailyInfo.classList.contains("show") || freeImg.classList.contains("show")) {
        dailyInfo.classList.remove("show");
        freeImg.classList.remove("show");
    }
})
free.addEventListener("click", () => {
    freeImg.classList.toggle("show");
    if(dailyInfo.classList.contains("show") || demandImg.classList.contains("show")) {
        demandImg.classList.remove("show");
        dailyInfo.classList.remove("show");
    }
})

// Redirection
const activities = document.querySelectorAll("p.menu-item");

activities.forEach(activity => {
    activity.addEventListener("click", () => {
        window.location.href = "activity.php"
    })
});

const dImg = document.querySelector(".dImg");

dImg.addEventListener("click", () => {
    window.location.href = "login.php"
})