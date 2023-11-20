//boutton on off
const buttonsComponent = document.querySelector('.buttons');
const buttonsToggle = document.querySelector('.buttons__toggle');

buttonsToggle.addEventListener('click', toggleButtons);

function toggleButtons() {
	buttonsToggle.classList.toggle('buttons__toggle--active');
	buttonsComponent.classList.toggle('buttons--active');
	document.activeElement.blur();
}

//texte multiple
const multipleTextSpan = document.querySelector('.multiple-text');
const texts = ['développeuse', 'étudiante en bts sio'];
let index = 0;
setInterval(function() {
    multipleTextSpan.textContent = texts[index];
    index = (index + 1) % texts.length;
}, 2000);

//education
const cardControllers = document.querySelectorAll("[data-card-controller]");

cardControllers.forEach(controller => {
  controller.addEventListener("click", (e) => {
    const card = e.currentTarget.parentElement.parentElement;
    const isVisible = card.dataset.visible;

    if (isVisible === "false") {
      card.setAttribute("data-visible", true);
    } else {
      card.setAttribute("data-visible", false);
    }
  })
})
