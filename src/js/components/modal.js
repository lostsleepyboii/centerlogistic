const body = document.querySelector('body');

const modalCallback = () => {
  const modal = document.querySelector('#modal-callback');

  if (modal) {
    // модалка
    const modalContent = modal.querySelector('.modal__content')
    const close = modal.querySelector('.modal-close');
  
    // вызов модалки
    const btn = document.querySelectorAll("[data-modal]");  
  
    // форма
    const form = modal.querySelector(".modal__form");
    const fname = modal.querySelector("[name=firstname]");
    const phone = modal.querySelector("[name=phone]");
    const mail = modal.querySelector("[name=email]");  
    // открытие модалки
    btn.forEach(el => {
      el.addEventListener("click", (evt) => {
        evt.preventDefault();
        modal.classList.add("show");
        body.classList.add("lock");
        setTimeout(() => {
          modalContent.classList.add("animate");
        }, 50)
        fname.focus();
      });
    })

    // закрытие модалки
    function modalClose (evt) {
      evt.preventDefault();
      modalContent.classList.remove("animate");
      setTimeout(() => {
        modal.classList.remove("show");
        body.classList.remove('lock');
      }, 200)
    }

    modal.addEventListener('click', modalClose);

    modalContent.addEventListener('click', (evt) => {
      evt.stopPropagation();
    });

    close.addEventListener('click', modalClose);
      
    window.addEventListener('keydown', (evt) => {
      if (evt.keyCode === 27) {
        if (modal.classList.contains("show")) {
          modalClose(evt);
        }
      }
    });

    // валидация формы
    form.addEventListener("submit", (evt) => {
      if (!fname.value || !phone.value || !mail.value) {
        evt.preventDefault();
        console.log("Нужно ввести все данные в таблицу");
      } else {
        console.log("Всё отлично!");
      }
    });
  }
}

const modalThanks = () => {
  const modal = document.querySelector('#modal-thanks');

  if (modal) {
    // модалка
    const modalContent = modal.querySelector('.modal__content')
    const close = modal.querySelector('.modal-close');
    
    // закрытие модалки
    function modalClose (evt) {
      evt.preventDefault();
      modalContent.classList.remove("animate");
      setTimeout(() => {
        modal.classList.remove("show");
        body.classList.remove('lock');
      }, 200)
    }

    modal.addEventListener('click', modalClose);

    modalContent.addEventListener('click', (evt) => {
      evt.stopPropagation();
    });

    close.addEventListener('click', modalClose);
      
    window.addEventListener('keydown', (evt) => {
      if (evt.keyCode === 27) {
        if (modal.classList.contains("show")) {
          modalClose(evt);
        }
      }
    });
  }


}

modalCallback();
modalThanks();