import.meta.glob([ '../images/**', ]);

const avatarButton = document.getElementById('avatarButton');
const modal = document.getElementById('modal');
const logoutButton = document.getElementById('logout');
const registerLoginButtons = document.getElementById('registerLoginButtons');

avatarButton.addEventListener('click', () => {
    modal.classList.toggle('hidden');
});

logoutButton.addEventListener('click', () => {
    avatarButton.classList.add('hidden');

    modal.classList.add('hidden');

    registerLoginButtons.classList.remove('hidden');
});




document.addEventListener('click', (event) => {
    if (!avatarButton.contains(event.target) && !modal.contains(event.target)) {
        modal.classList.add('hidden');
    }
});



// modal status











