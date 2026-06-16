/* ==========================================================================
   JAVASCRIPT AUTOMATIC WHATSAPP BRIDGE
   ========================================================================== */
   export function initContactForm() {
    const form = document.getElementById('whatsapp-contact-form');

    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault(); 

        // 1. Ambil data dari inputan form
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;
        const service = document.getElementById('service').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;


        const whatsappNumber = "6281212830218";


        const textMessage = 
            `*HALO Readymixnh*\n` +
            `Ada pesan baru dari formulir kontak website:\n\n` +
            `👤 *Nama Pengirim:* ${name}\n` +
            `📧 *Email:* ${email}\n` +
            `📞 *No. HP/WA:* ${phone}\n` +
            `🛠️ *Layanan:* ${service}\n` +
            `📌 *Subject:* ${subject}\n\n` +
            `💬 *Deskripsi Kebutuhan Proyek:*\n"${message}"`;

        const encodedText = encodeURIComponent(textMessage);
        const waUrl = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodedText}`;
        window.open(waUrl, '_blank');
    });
}