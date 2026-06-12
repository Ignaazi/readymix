<section id="contact-section" class="py-5 bg-light">
    <div class="container py-md-5">
        
        <!-- HEADER SECTION (SEO Friendly) -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="contact-main-title text-dark">HUBUNGI KAMI</h2>
                <div class="contact-title-line mx-auto"></div>
                <p class="text-muted mt-3 max-w-600 mx-auto fs-5">
                    Punya pertanyaan mengenai mutu beton atau rencana pengecoran proyek Anda? Tim kami siap melayani Anda sepenuh hati.
                </p>
            </div>
        </div>

        <div class="row g-4">
            
            <!-- SEBELAH KIRI: KARTU INFORMASI (Mengikuti Layout Kiri image_b3c420.png) -->
            <div class="col-lg-4 d-flex flex-column gap-3">
                
                <!-- Our Office -->
                <div class="contact-info-card p-4 d-flex align-items-center gap-3 bg-white shadow-sm border-0">
                    <div class="icon-box-wrapper bg-red-soft text-red">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-1 text-dark fs-5">Our Office</h4>
                        <p class="text-secondary mb-0 lh-sm small">Jl. Raya Readymix Utama No. 88, Bekasi, Jawa Barat</p>
                    </div>
                </div>

                <!-- Call Us -->
                <div class="contact-info-card p-4 d-flex align-items-center gap-3 bg-white shadow-sm border-0">
                    <div class="icon-box-wrapper bg-blue-soft text-blue">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-1 text-dark fs-5">Call Us</h4>
                        <p class="text-secondary mb-0 lh-sm small">+62 812-1283-0218</p>
                        <p class="text-secondary mb-0 lh-sm small">(021) 8888-9999</p>
                    </div>
                </div>

                <!-- Email Us -->
                <div class="contact-info-card p-4 d-flex align-items-center gap-3 bg-white shadow-sm border-0">
                    <div class="icon-box-wrapper bg-yellow-soft text-yellow">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-1 text-dark fs-5">Email Us</h4>
                        <p class="text-secondary mb-0 lh-sm small">marketing@readymixbeton.co.id</p>
                        <p class="text-secondary mb-0 lh-sm small">support@readymixbeton.co.id</p>
                    </div>
                </div>

                <!-- Working Hours -->
                <div class="contact-info-card p-4 d-flex align-items-center gap-3 bg-white shadow-sm border-0">
                    <div class="icon-box-wrapper bg-green-soft text-green">
                        <i class="bi bi-clock-fill"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-1 text-dark fs-5">Working Hours</h4>
                        <p class="text-secondary mb-0 lh-sm small">Mon - Fri: 8:00 AM - 5:00 PM</p>
                        <p class="text-secondary mb-0 lh-sm small">Sat: 8:00 AM - 1:00 PM</p>
                    </div>
                </div>

            </div>

            <!-- SEBELAH KANAN: FORMULIR PESAN (Mengikuti Layout Kanan image_b3c420.png) -->
            <div class="col-lg-8">
                <div class="contact-form-container p-4 p-md-5 bg-white shadow-sm h-100">
                    <form action="#" method="POST">
                        @csrf
                        
                        <div class="row g-3 mb-3">
                            <!-- Your Name -->
                            <div class="col-md-6">
                                <label for="name" class="visually-hidden">Your Name</label>
                                <input type="text" id="name" name="name" class="form-control custom-input" placeholder="Your Name" required>
                            </div>
                            <!-- Your Email -->
                            <div class="col-md-6">
                                <label for="email" class="visually-hidden">Your Email</label>
                                <input type="email" id="email" name="email" class="form-control custom-input" placeholder="Your Email" required>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label for="phone" class="visually-hidden">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-control custom-input" placeholder="Phone Number" required>
                            </div>
                            <!-- Select Service (Sesuai Karakter Bisnis Beton) -->
                            <div class="col-md-6">
                                <label for="service" class="visually-hidden">Select a Service</label>
                                <select id="service" name="service" class="form-select custom-select" required>
                                    <option value="" disabled selected hidden>Select a Service</option>
                                    <option value="readymix">Pemesanan Beton Readymix</option>
                                    <option value="pompa">Sewa Pompa Beton (Concrete Pump)</option>
                                    <option value="survey">Permintaan Survey Lokasi</option>
                                    <option value="lainnya">Konsultasi / Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="mb-3">
                            <label for="subject" class="visually-hidden">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control custom-input" placeholder="Subject" required>
                        </div>

                        <!-- Message TextArea -->
                        <div class="mb-4">
                            <label for="message" class="visually-hidden">Describe your requirements...</label>
                            <textarea id="message" name="message" rows="5" class="form-control custom-input custom-textarea" placeholder="Describe your project requirements..." required></textarea>
                        </div>

                        <!-- Submit Button (Gaya 3D Block Merah Sesuai Tema Website Anda) -->
                        <div>
                            <button type="submit" class="btn btn-submit-action shadow-sm">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>
