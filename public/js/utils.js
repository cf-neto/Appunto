function showPasswordToggle(){
    const input = document.getElementById('password');
    const iconLock = document.getElementById('icon-lock');

    if (!iconLock || !input) return;

    iconLock.addEventListener('click', () => {
        const isVisible = input.type === "text";
        input.type = isVisible ? 'password' : 'text';
        iconLock.classList.toggle('bxs-lock', isVisible);
        iconLock.classList.toggle('bxs-lock-open', !isVisible);

    });
};

showPasswordToggle();