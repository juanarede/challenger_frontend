import.meta.glob([ '../images/**', ]);


const avatarButtons = document.querySelectorAll('.avatarButton');
const modals = document.querySelectorAll('.modal');
const logoutButtons = document.querySelectorAll('.logoutButton');
const registerLoginButtons = document.querySelectorAll('.registerLoginButtons');
avatarButtons.forEach((button, index) => {
    button.addEventListener('click', () => {

        modals[index].classList.toggle('hidden');
    });
});

logoutButtons.forEach((button, index) => {
    button.addEventListener('click', () => {

        avatarButtons[index].classList.add('hidden');

        modals[index].classList.add('hidden');

        registerLoginButtons[index].classList.remove('hidden');
    });
});

document.addEventListener('click', (event) => {
    avatarButtons.forEach((button, index) => {
        if (!button.contains(event.target) && !modals[index].contains(event.target)) {
            modals[index].classList.add('hidden');
        }
    });
});




















