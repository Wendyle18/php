//menu icon
document.querySelector('.menu-icon').addEventListener('click', function() {
    this.classList.toggle('clicked');
    });

// Add Ticket Panel
var modal = document.getElementById("myModal");
var btn = document.getElementById("ticketbutton");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function (){
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
  }
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }