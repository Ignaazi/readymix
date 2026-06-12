// Fungsi menyalin teks pada tombol copy di seksi Home
window.copyText = function(buttonElement) {
    const textToCopy = buttonElement.parentElement.querySelector('.copy-target').innerText;
    navigator.clipboard.writeText(textToCopy).then(() => {
        const icon = buttonElement.querySelector('i');
        icon.className = 'bi bi-check-lg text-success';
        setTimeout(() => { icon.className = 'bi bi-copy'; }, 1500);
    }).catch(err => {
        console.error('Gagal menyalin teks: ', err);
    });
};

// Counter animasi statistik di seksi Home
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    const duration = 1000; 
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = Math.ceil(target / (duration / 16));
            if (count < target) {
                counter.innerText = count + increment > target ? target : count + increment;
                setTimeout(updateCount, 16); 
            } else { 
                counter.innerText = target; 
            }
        };
        updateCount();
    });
});
