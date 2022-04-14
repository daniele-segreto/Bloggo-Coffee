<x-layout>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('images/about.jpg') }}" alt="about" />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">Bloggo Cofee</span>
                                <span class="section-heading-lower">Buon caffè, buon lavoro</span>
                            </h2>
                            <p>“Qualità significa fare le cose bene quando nessuno ti sta guardando.” “Mettersi insieme è un inizio, rimanere insieme è un progresso, lavorare insieme un successo.” “L'unico modo per evitare di esseredepressi è non avere abbastanza tempo libero per domandarsi se se si è felici o no.”</p>
                            <p class="mb-0">
                                <!-- We guarantee that you will fall in
                                <em>lust</em> -->
                                “Rifiutate di accedere a una carriera solo perché vi assicura una pensione. La migliore pensione è il possesso di un cervello in piena attività che vi permetta di continuare a pensare ‘usque ad finem’, ‘fino alla fine’.”
                            </p>
                            <p class="mt-3">
                                <b>Publica il tuo post.</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">

                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-5">
                            <span class="section-heading-upper">Prendi un caffè, e...</span>
                            <span class="section-heading-lower">Posta sul blog</span>
                        </h2>
                        
                    <!-- Contact-->
                    <section class="page-section" id="contact">
                            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                                <div class="col-lg-6">
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- * * SB Forms Contact Form * *-->
                                    <!-- * * * * * * * * * * * * * * *-->
                                    <!-- This form is pre-integrated with SB Forms.-->
                                    <!-- To make this form functional, sign up at-->
                                    <!-- https://startbootstrap.com/solution/contact-forms-->
                                    <!-- to get an API token!-->
                                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                        <!-- Title input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                            <label for="name">Titolo</label>
                                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                        </div>
                                        <!-- Subtitle address input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="subtitle" type="text" placeholder="daniele.segreto@example.com" data-sb-validations="required,text" />
                                            <label for="text">Sottotitolo</label>
                                            <div class="invalid-feedback" data-sb-feedback="text:required">An text is required.</div>
                                            <div class="invalid-feedback" data-sb-feedback="text:text">text is not valid.</div>
                                        </div>
                                        <!-- Image input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="img" type="img" placeholder="(123) 456-7890" data-sb-validations="required" />
                                            <label for="img">Immagine</label>
                                            <div class="invalid-feedback" data-sb-feedback="img:required">A img number is required.</div>
                                        </div>
                                        <!-- Message input-->
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                            <label for="message">Messagio</label>
                                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                        </div>
                                        <!-- Submit success message-->
                                        <!---->
                                        <!-- This is what your users will see when the form-->
                                        <!-- has successfully submitted-->
                                        <div class="d-none" id="submitSuccessMessage">
                                            <div class="text-center mb-3">
                                                <div class="fw-bolder">Form submission successful!</div>
                                                To activate this form, sign up at
                                                <br />
                                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                            </div>
                                        </div>
                                        <!-- Submit error message-->
                                        <!---->
                                        <!-- This is what your users will see when there is-->
                                        <!-- an error submitting the form-->
                                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                        <!-- Submit Button-->
                                        <div class="d-grid intro-button mx-auto"><button class="btn btn-primary btn-xl" id="submitButton" type="submit" href="#!">Pubblica</button></div>
                                    </form>
                                </div>
                            </div>

                            <p class="address mb-5">
                                <em>
                                    <strong>Via Roma,177</strong>
                                    <br />
                                    Palermo, Sicilia
                                </em>
                            </p>
                            <p class="mb-0">
                                <small><em>Per collaborazioni</em></small>
                                <br />
                                091.506919
                            </p>

                        </div>

                        
                    </div>
                </div>
            </div>
    </section>
</x-layout>