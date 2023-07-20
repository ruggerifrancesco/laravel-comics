<footer>
    <!-- Main Footer -->
    <section class="main-footer">
        <div class="wrapper">

            <div class="links-wrapper">
                <div class="footer-col">
                    <h4>Dc Comics</h4>
                    <ul class="list-container">
                        <FooterLinksDcComics v-for="referral in dcComicsItemsList"
                            :item="referral.item"
                            :link="referral.link"
                            />
                    </ul>
                    <h4>Shop</h4>
                    <ul>
                        <FooterLinksShopVue v-for="referral in shopItemsList"
                            :item="referral.item"
                            :link="referral.link"
                            />
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Dc</h4>
                    <ul>
                        <FooterLinksDc v-for="referral in dcItemsList"
                            :item="referral.item"
                            :link="referral.link"
                            />
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Sites</h4>
                    <ul>
                        <FooterLinksSites v-for="referral in siteItemsList"
                            :item="referral.item"
                            :link="referral.link"
                            />
                    </ul>
                </div>
            </div>

            <!-- Logo Background -->
            <div class="background-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="background logo">
            </div>
        </div>
    </section>

    <!-- Second Footer -->
    <section class="miscellaneous-footer">
        <div class="wrapper">

            <div class="miscellaneous-wrapper">
                <div class="signUp-btn-container">
                    <button type="button" class="btn btn-outline-primary" id="signUp-btn">
                        Sign Up Now!
                    </button>
                </div>

                <div class="socials-container">
                    <span class="social-title">Follow Us</span>
                <AppSocialsListVue v-for="social in socialList"
                    :name="social.socialName"
                    :link="social.link"
                    :icon="social.srcIcon"/>
                </div>
            </div>
        </div>
    </section>
</footer>