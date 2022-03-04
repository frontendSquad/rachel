var eyeBtn = Array.from(document.querySelectorAll('.passDisplay'));
    eyeBtn.forEach(e => {
        e.addEventListener('click', function () {
            let passwordWrapper = e.closest('.passwordWrapper');
            let passInput = passwordWrapper.querySelector('input');
            if (passInput.classList.contains('passInput')) {
                if (passInput.type == 'password') {
                    passInput.setAttribute('type', 'text');
                    this.setAttribute('class', 'bi bi-eye-fill enter-icon right-icon position-absolute passDislay');
                }
                else {
                    passInput.setAttribute('type', 'password');
                    this.setAttribute('class', 'bi bi-eye-slash enter-icon right-icon position-absolute passDislay');
                }
            }
        })
    });