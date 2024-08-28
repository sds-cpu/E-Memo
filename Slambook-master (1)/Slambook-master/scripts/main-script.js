function countChars(countfrom,displayto,maxlimit) {
		  var len = maxlimit-document.getElementById(countfrom).value.length;
		  document.getElementById(displayto).innerHTML = len;
		}

jQuery(document).ready(function(){
  // Add smooth scrolling to all links
  jQuery(".smoothScroll").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      jQuery('html, body').animate({
        scrollTop: jQuery(hash).offset().top
      }, 600, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        //window.location.hash = hash;
      });
    } // End if
  });

});

function openMenu(){
	var div = document.getElementById("openMenu");
  var bubble1 = document.getElementById("position1");
  var bubble2 = document.getElementById("position2");
  var bubble3 = document.getElementById("position3");
	//var li = document.getElementByClass("slideDown")
	if(div.classList.contains("showMenu")){
    
    bubble1.classList.remove("pullDown");
    bubble2.classList.remove("pullDown");
    bubble3.classList.remove("pullDown");
    bubble1.classList.remove("move-up-down");
    bubble2.classList.remove("move-up-down");
    bubble3.classList.remove("move-up-down");
		div.classList.remove("showMenu");
		div.style.display = "none";
	}
	else{
		div.classList.add("showMenu");
    bubble1.classList.add("pullDown");
    bubble2.classList.add("pullDown");
    bubble3.classList.add("pullDown");
    setTimeout(function(){ bubble1.classList.add("move-up-down"); }, 1000);
    setTimeout(function(){ bubble2.classList.add("move-up-down"); }, 1000);
    setTimeout(function(){ bubble3.classList.add("move-up-down"); }, 1000);
	}
	//div.classList.add("slideDown");
}

function openAcctModal() {
    var modal = document.getElementById('account-modal');
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeAcctModal() {
    var modal = document.getElementById('account-modal');
    modal.style.display = "none";
}

function closeX(x) {
    x.classList.toggle("change");
}

function openSlamModal() {
    var modal = document.getElementById('slam-modal');
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeSlamModal() {
    var modal = document.getElementById('slam-modal');
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  var modal = document.getElementById('slam-modal');
    if (event.target == modal) {
        modal.style.display = "none";
    }

    var modal1 = document.getElementById('account-modal');
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

function openSIModal() {
    var modal = document.getElementById('SI-modal');
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function closeSIModal() {
    var modal = document.getElementById('SI-modal');
    modal.style.display = "none";
}

/*$(document).ready(function() {
    $('#example').DataTable( {
        "paging":   false,
        "order": [[ 3, "desc" ]],
        "info":     false
    } );
} );*/

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 7000); // Change image every 3 seconds
}
