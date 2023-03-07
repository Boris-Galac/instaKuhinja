
<form class="contact-form" method="POST" name="contact-form">

                                <div class="contact__form-input">
                                    <label for="full-name">Ime i Prezime</label>
                                    <input
                                        type="text"
                                        id="full-name"
                                        name="full-name"
                                        placeholder="John Doe"
                                        required
                                        aria-required="true"
                                    />
                                </div>
                                <div class="contact__form-input">
                                    <label for="email">Email:</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="email@gmail.com"
                                        required
                                        aria-required="true"
                                    />
                                </div>
                                <div class="contact__form-input">
                                    <label for="message">Vaša poruka:</label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="4"
                                        placeholder="Ostavite nam poruku..."
                                        required
                                        role="textbox"
                                        aria-required="true"
                                    ></textarea>
                                </div>
                                <button class="contact-submit-btn" type="submit" name="submit">
                                    <div class="svg-wrapper-1">
                                        <div class="svg-wrapper">
                                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                                        </svg>
                                        </div>
                                    </div>
                                    <span class="contact-submit-btn__label">Pošalji poruku</span>
                                </button>

                               </form>