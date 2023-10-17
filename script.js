function showContent(contentId) {
    // Hide all content divs
    var contents = document.querySelectorAll('.content');
    for (var i = 0; i < contents.length; i++) {
        contents[i].style.display = 'none';
    }

    // Show the selected content
    var selectedContent = document.getElementById(contentId + '-content');
    if (selectedContent) {
        selectedContent.style.display = 'block';
    }
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the modal content element
var modalContent = document.getElementById("modal-content");

// Get all media items
var mediaItems = document.querySelectorAll(".media-item img");

// Loop through each media item and add a click event listener
mediaItems.forEach(function(mediaItem) {
  mediaItem.addEventListener("click", function() {
    // Get the content of the clicked media item (you can fetch this content from a database or any other source)
    var content = "Content related to the clicked image goes here.";

    // Set the modal content
    modalContent.innerHTML = content;

    // Display the modal
    modal.style.display = "block";
  });
});

// Get the close button of the modal and close the modal when clicked
var closeBtn = document.getElementsByClassName("close")[0];
closeBtn.onclick = function() {
  modal.style.display = "none";
};

// Close the modal when the user clicks outside the modal content
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
