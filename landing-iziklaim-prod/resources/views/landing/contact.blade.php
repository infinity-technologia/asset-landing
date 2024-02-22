<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>HUBUNGI KAMI</h2>
        </div>
        <div>
            <iframe style="border:0; width: 100%; height: 370px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.026138083!2d106.79381367429939!3d-6.260287261289012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f19fc87b7f21%3A0xbc89ee2fd675bfd5!2sPT%20Medlinx%20Asia%20Teknologi!5e0!3m2!1sid!2sid!4v1688370161423!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Lokasi:</h4>
                        <p>PT. Medlinx Asia Teknologi
                            <br>Jl. RS. Fatmawati No 7, 12140 Jakarta Selatan
                        </p>
                    </div>
                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>Sales@medlinx.co.id</p>
                    </div>
                    <div class="phone">
                        <i class="bi bi-telephone"></i>
                        <h4>Telepon:</h4>
                        <p>+6221 8062 7982</p>
                    </div>
                    <div class="whatsapp">
                        <i class="bi bi-whatsapp"></i>
                        <h4>WhatsApp:</h4>
                        <p>0815 8454 8909</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-5 mt-lg-0">
                <form method="post" action="#" role="form" class="contact-form" id="contact-form">
                    @csrf
                    <div class="row gy-2 gx-md-3">
                        <div class="col-md-6 form-group">
                            <label class="form-label required">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label required">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label required">Institusi</label>
                            <select class="form-select" name="institusi" id="institusi">
                                <option value="">-- Pilih Institusi --</option>
                                <option value="Rumah sakit">Rumah sakit</option>
                                <option value="Klinik, Lab, Optik, Apotek">Klinik, Lab, Optik, Apotek</option>
                                <option value="Insurance/TPA/ASO">Insurance/TPA/ASO</option>
                                <option value="Corporate">Corporate</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="form-label required">Subjek</label>
                            <input type="text" class="form-control" name="subjek" id="subjek" required>
                        </div>
                        <div class="form-group col-12">
                            <label class="form-label required">Pesan</label>
                            <textarea class="form-control" name="pesan" id="pesan" rows="5" required></textarea>
                        </div>
                        {!! htmlFormSnippet() !!}
                        @if($errors->has('g-recaptcha-response'))
                        <div>
                            <small class="text-danger">{{ $errors->first('g-recaptcha-response') }}</small>
                        </div>
                        @endif
                        <div class="my-3 col-12">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center text-sm-start d-grid d-sm-block">
                            <button type="submit">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>