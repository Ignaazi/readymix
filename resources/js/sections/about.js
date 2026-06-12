// Lightbox preview gambar di seksi About
window.openAboutLightbox = function(imageSrc, titleText) {
    document.getElementById('lightboxImage').src = imageSrc;
    document.getElementById('lightboxCaption').innerText = titleText;
    const aboutModalElement = document.getElementById('aboutLightboxModal');
    const myModal = new bootstrap.Modal(aboutModalElement);
    myModal.show();
};
