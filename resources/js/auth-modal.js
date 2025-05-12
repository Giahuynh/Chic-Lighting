window.toggleAuthModal = function () {
    const path = window.location.pathname;
    if (path === '/login' || path === '/register') return; // Không hiện popup khi đã vào login/register

    const modal = document.getElementById('authModal');
    if (!modal) return;

    const inner = modal.querySelector('.modal-animate');

    if (modal.classList.contains('hidden')) {
        // MỞ popup
        modal.classList.remove('hidden');

        // Reset animation
        if (inner) {
            inner.style.animation = 'none';
            void inner.offsetWidth; // trigger reflow
            inner.style.animation = '';
            inner.classList.add('modal-animate');
        }

        // Đóng khi click nền
        modal.addEventListener('click', (e) => {
            if (e.target === modal) modal.classList.add('hidden');
        });
    } else {
        // ĐÓNG popup
        modal.classList.add('hidden');
    }
};
