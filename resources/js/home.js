function getScrollbarWidth() {
    return window.innerWidth - document.documentElement.clientWidth;
}

window.openModal = function (imageUrl) {
    const modal = document.getElementById('imageModal');
    const content = document.getElementById('modalContent');
    const img = document.getElementById('modalImg');

    img.src = imageUrl;

    // Bắt đầu hiện modal và reset class
    modal.classList.remove('hidden');
    requestAnimationFrame(() => {
        modal.classList.add('opacity-100');
        modal.classList.remove('opacity-0');

        content.classList.add('opacity-100', 'scale-100');
        content.classList.remove('opacity-0', 'scale-90');
    });

    // Xử lý overflow
    const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;
    document.body.style.paddingRight = `${scrollBarWidth}px`;
    document.body.style.overflow = 'hidden';
};

window.closeModal = function () {
    const modal = document.getElementById('imageModal');
    const content = document.getElementById('modalContent');
    const img = document.getElementById('modalImg');

    // Fade out ảnh + nền
    content.classList.remove('opacity-100', 'scale-100');
    content.classList.add('opacity-0', 'scale-90');

    modal.classList.remove('opacity-100');
    modal.classList.add('opacity-0');

    // Sau 700ms mới ẩn modal và reset
    setTimeout(() => {
        modal.classList.add('hidden');
        img.src = '';
        document.body.style.overflow = '';
        document.body.style.paddingRight = '0px';
    }, 700); // khớp với duration
};

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('imageModal');
    modal.addEventListener('click', function (e) {
        if (e.target === modal) {
            closeModal();
        }
    });
});