const ratingsEl = document.querySelectorAll(".rating");
const sendBtn = document.querySelector("#send");
const panel = document.querySelector("#panel");

ratingsEl.forEach((el) => {
  el.addEventListener("click", () => {
    ratingsEl.forEach((innerEl) => {
      innerEl.classList.remove("active");
    });

    el.classList.add("active");
  });
});

sendBtn.addEventListener("click", () => {
  panel.innerHTML = `
		<i class="fas fa-heart"></i>
		<strong>Thank you!</strong>
		<p>I'll use your feedback to improve my website!.</p>
		<button class="btn" id="done">Done</button>
    document.getElementById("doneBtn").onclick = function () {
      location.href = "main\index.html";
    }
	`;
});