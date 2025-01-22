document.getElementById("load-html").addEventListener("click", function () {
  // URL of the HTML page to fetch
  const url = "page.html"; // Replace with your HTML file's path

  // Fetch the HTML content
  fetch(url)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Failed to fetch HTML content.");
      }
      return response.text(); // Parse response as text
    })
    .then((html) => {
      // Display the HTML content inside the modal
      document.getElementById("modal-content").innerHTML = html;

      // Show the modal and overlay
      document.getElementById("modal").style.display = "block";
      document.getElementById("modal-overlay").style.display = "block";
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});

// Close the modal when the overlay or button is clicked
document.querySelector(".close-btn").addEventListener("click", function () {
  document.getElementById("modal").style.display = "none";
  document.getElementById("modal-overlay").style.display = "none";
});

document.getElementById("modal-overlay").addEventListener("click", function () {
  document.getElementById("modal").style.display = "none";
  document.getElementById("modal-overlay").style.display = "none";
});
