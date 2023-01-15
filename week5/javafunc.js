let container = document.querySelector(".greet-js");
let timeNow = new Date().getHours();
let greeting =
  timeNow >= 5 && timeNow < 12
    ? "Good Morning"
    : timeNow >= 12 && timeNow < 18
    ? "Good Afternoon"
    : "Good evening";
container.innerHTML = `${greeting}`;

function submitFeedback() {
  var formData = new FormData();
  formData.append("name", document.getElementById("name").value);
  formData.append("email", document.getElementById("email").value);
  formData.append("feedback", document.getElementById("feedback").value);
  
  // Use fetch or XMLHttpRequest to send the data to the server
  fetch("/submit-feedback", {
      method: "POST",
      body: formData
  })
  .then(function(response) {
      console.log(response);
  })
  .catch(function(error) {
      console.log(error);
  });
}