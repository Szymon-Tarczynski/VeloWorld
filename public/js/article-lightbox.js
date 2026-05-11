(function () {
    document.addEventListener('DOMContentLoaded', () => {

        const lightbox = document.getElementById('lightbox-article');
        const lightboxImg = document.getElementById('lightbox-article-img');
        const images = document.querySelectorAll('.gallery-grid img');

        if (!lightbox || !lightboxImg || images.length === 0) return;

        images.forEach(img => {
            img.addEventListener('click', () => {
                const full = img.dataset.full || img.src;
                lightboxImg.src = full;
                lightbox.classList.add('open');
                document.body.style.overflow = 'hidden';
            });
        });

        lightbox.addEventListener('click', () => {
            lightbox.classList.remove('open');
            lightboxImg.src = '';
            document.body.style.overflow = '';
        });

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape' && lightbox.classList.contains('open')) {
                lightbox.classList.remove('open');
                lightboxImg.src = '';
                document.body.style.overflow = '';
            }
        });

    });
})();
