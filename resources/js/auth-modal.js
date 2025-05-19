window.toggleAuthModal = function () {
    const path = window.location.pathname;
    if (path === '/login' || path === '/register') return;

    const modal = document.getElementById('authModal');
    const inner = document.getElementById('authModalInner');

    if (!modal || !inner) return;

    if (modal.classList.contains('hidden')) {
        // Hiện modal
        modal.classList.remove('hidden');
        requestAnimationFrame(() => {
            modal.classList.add('opacity-100');
            modal.classList.remove('opacity-0');

            inner.classList.add('opacity-100', 'scale-100');
            inner.classList.remove('opacity-0', 'scale-90');
        });

        // Click ra ngoài thì tắt
        const clickOutside = (e) => {
            if (e.target === modal) toggleAuthModal();
        };
        modal.addEventListener('click', clickOutside, { once: true });
    } else {
        // Ẩn modal
        const modal = document.getElementById('authModal');
        const inner = document.getElementById('authModalInner');

        modal.classList.remove('opacity-100');
        modal.classList.add('opacity-0');
        inner.classList.remove('opacity-100', 'scale-100');
        inner.classList.add('opacity-0', 'scale-90');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 700);
    }
};
