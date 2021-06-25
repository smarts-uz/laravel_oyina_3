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
glide.mount()






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



  