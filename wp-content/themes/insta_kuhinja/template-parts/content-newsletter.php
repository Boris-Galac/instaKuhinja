    <section class="newsletter">
        <div class="container">
            <h2 class="title section-title" data-name="Newsletter">Newsletter</h2>
            <div class="form-container-inner">
                <h6 class="title newsletter-title">Pretplatite se na newsletter</h6>
                <p class="newsletter-description">Ukoliko želite primati neke od mojih recepata ili pak neke obavijesti vezano za blog, slobodno se pretplatite.</p>
                <!-- <form class="form" method="post" name="newsletter-form">
                    <input class="form-input" type="text" placeholder="Upišite svoju mail adresu" required>
                    <button class="btn form-btn" type="submit">
                        <i class="ri-mail-send-line"></i>
                    </button>
                </form> -->
                <?php dynamic_sidebar('newsletter-widget'); ?>
            </div>
        </div>
    </section>