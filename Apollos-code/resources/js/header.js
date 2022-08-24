
window.addEventListener("scroll", function(){
    const header = document.querySelector("header");
    const box_header = this.document.getElementById("box-h")

    header.classList.toggle("sticky", window.scrollY > 0);
    box_header.classList.toggle("sticky2", window.scrollY > 0);



});