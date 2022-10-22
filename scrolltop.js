
// Get the button
let mybutton = document.getElementById("scrolltop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

// When the user clicks on the button, scroll to the top of the document
function top() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
