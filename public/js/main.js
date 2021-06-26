// filter slide
new Splide( '.splide', {
	type   : '',
	perPage: 11,
	perMove: 1,
    pagination: false,
    start: 0,
} ).mount();



var glide = new Glide('.glide', {
  rewind: false,
  startAt: 2,
  perView: 4,
  focusAt: 2,
  gap: 30
})
glide.mount();



// Media filter
var btnContainer = document.getElementById("filters-media");
var btns = btnContainer.getElementsByClassName("filter-option");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active-1");
    current[0].className = current[0].className.replace(" active-1", "");
    this.className += " active-1";
  });
}




function filtervidfoto(e) {
    const videos = document.querySelectorAll(".glide__slides li"); // select all animal divs
    let filter = e.target.dataset.filter; // grab the value in the event target's data-filter attribute
  
    videos.forEach(vid => {
      vid.classList.contains(filter) // does the vid have the filter in its class list?
      ?  vid.classList.remove('hidden') // if yes, make sure .hidden is not applied
      : vid.classList.add('hidden'); // if no, apply .hidden
    });
  };
 


//   Scholars filter
  var btnContainer1 = document.getElementById("filters-scholars");
var btns1 = btnContainer1.getElementsByClassName("filter-option-scholars");
for (var i = 0; i < btns1.length; i++) {
  btns1[i].addEventListener("click", function() {
    var current1 = document.getElementsByClassName("active-2");
    current1[0].className = current1[0].className.replace(" active-2", "");
    this.className += " active-2";
  });
}




function filterscholars(e) {
    const scholars = document.querySelectorAll(".swiper-wrapper .swiper-slide"); // select all animal divs
    let filter1 = e.target.dataset.filter; // grab the value in the event target's data-filter attribute
  
    scholars.forEach(scholar => {
      scholar.classList.contains(filter1) // does the scholar have the filter in its class list?
      ?  scholar.classList.remove('hidden') // if yes, make sure .hidden is not applied
      : scholar.classList.add('hidden'); // if no, apply .hidden
    });
  };
  
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 6.85,
    spaceBetween: 30,
    // cssMode: true,
    simulateTouch: true,
  });