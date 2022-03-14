<footer role="contentinfo">
    <div class="nhsuk-footer" id="nhsuk-footer">
        <div class="nhsuk-width-container">
            <h2 class="nhsuk-u-visually-hidden">Support links</h2>
            <ul class="nhsuk-footer__list">
                <li class="nhsuk-footer__list-item">
                    <a class="nhsuk-footer__list-item-link" href="https://www.leadershipacademy.nhs.uk/accessibility/">Accessibility</a>
                </li>
                <li class="nhsuk-footer__list-item">
                    <a class="nhsuk-footer__list-item-link" href="https://www.leadershipacademy.nhs.uk/sitemap/">Sitemap</a>
                </li>
                <li class="nhsuk-footer__list-item">
                    <a class="nhsuk-footer__list-item-link" href="https://www.leadershipacademy.nhs.uk/terms-and-conditions/">Terms & Conditions</a>
                </li>
                <li class="nhsuk-footer__list-item">
                    <a class="nhsuk-footer__list-item-link" href="https://www.leadershipacademy.nhs.uk/privacy/">Privacy</a>
                </li>
                <li class="nhsuk-footer__list-item">
                    <a class="nhsuk-footer__list-item-link" href="https://www.leadershipacademy.nhs.uk/how-we-use-our-cookies/">How we use our cookies</a>
                </li>
                <li class="nhsuk-footer__list-item">
                    <a class="nhsuk-footer__list-item-link" href="{{ Route::has('contact-us') && route('contact-us') }}">Contact Us</a>
                </li>
            </ul>
            <p class="nhsuk-footer__copyright">&copy; Copyright, NHS Leadership Academy Digital Team
                <?php echo (date("Y")); ?>, <span>v<?php echo config('app.version', '1.0.x'); ?></span>
            </p>
        </div>
    </div>
</footer>
