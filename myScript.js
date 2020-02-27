function navSlide(){
    let element = document.querySelector('.nav-hidden');
    element.classList.toggle("nav-slide-in");
}
window.onclick = closeNav; // execute function when there is a click anywhere on the window

function closeNav(event){
    var event = event.target.classList;
    let element = document.querySelector('.nav-hidden');
    if(event != 'nav-toggle' && element.classList.contains('nav-slide-in')){ //checks if the click is not equal to the element that has a class called nav-toggle and that nav element has a class list called nav-slide-in
        element.classList.toggle("nav-slide-in"); // toggle the nav-slide-in class
    }
}
