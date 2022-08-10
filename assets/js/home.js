const accordionItemHeaders = document.querySelectorAll(".accordion");

accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", function () {
       this.classList.toggle("active")
    });
})

