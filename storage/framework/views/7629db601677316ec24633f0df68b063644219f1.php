

<?php $__env->startSection('content'); ?>
<?php echo $__env->make("website.banner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="section novi-background bg-cover section-70 section-md-114 bg-default">
            <div class="shell">
                <div class="range range-65 range-xs-center">
                    <div class="cell-md-8 text-md-left">
                        <h2 class="text-bold">Get in Touch</h2>
                        <hr class="divider bg-madison hr-md-left-0">
                        <div class="offset-top-30 offset-md-top-30">
                            <p>You can contact us any way that is convenient for you. We are available 24/7 via 
                                email. You can also use a quick contact form below or visit us personally. We would be
                                happy to answer your questions.</p>
                        </div>
                        <div class="offset-top-30">
                            <form class="rd-mailform text-left" data-form-output="form-output-global"
                                data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                <div class="range range-12">
                                    <div class="cell-sm-6">
                                        <div class="form-group"><label class="form-label form-label-outside"
                                                for="contact-me-name">First name</label><input
                                                class="form-control form-validation-inside" id="contact-me-name"
                                                type="text" name="name" data-constraints="Required"></div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group"><label class="form-label form-label-outside"
                                                for="contact-me-last-name">Last name</label><input
                                                class="form-control form-validation-inside" id="contact-me-last-name"
                                                type="text" name="last-name" data-constraints="Required"></div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group"><label class="form-label form-label-outside"
                                                for="contact-me-email">E-mail</label><input
                                                class="form-control form-validation-inside" id="contact-me-email"
                                                type="email" name="email" data-constraints="Required @Email"></div>
                                    </div>
                                    <div class="cell-sm-6">
                                        <div class="form-group"><label class="form-label form-label-outside"
                                                for="contact-me-phone">Phone</label><input
                                                class="form-control form-validation-inside" id="contact-me-phone"
                                                type="text" name="phone" data-constraints="Required @IsNumeric"></div>
                                    </div>
                                    <div class="cell-xs-12">
                                        <div class="form-group"><label class="form-label form-label-outside"
                                                for="contact-me-message">Message</label><textarea
                                                class="form-control form-validation-inside" id="contact-me-message"
                                                name="message" data-constraints="Required"
                                                style="height: 220px"></textarea></div>
                                    </div>
                                </div>
                                <div class="text-center text-md-left offset-top-20"><button
                                        class="btn btn-icon btn-icon-right" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="cell-xs-10 cell-md-4 text-left">
                        <aside class="aside inset-md-left-30">
                            <div class="aside-item-2">
                                <h6 class="text-bold">Phones</h6>
                                <div>
                                    <div class="hr bg-gray-light offset-top-10"></div>
                                </div>
                                <div class="offset-top-15">
                                    <ul class="list list-unstyled">
                                        <li><span
                                                class="icon novi-icon icon-xs text-madison mdi mdi-phone text-middle"></span><a
                                                class="text-middle inset-left-10 text-dark"
                                                href="tel:1-800-1234-567">+977-9851026668, ,+977-9815356075,</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="aside-item-2">
                                <h6 class="text-bold">E-mail</h6>
                                <div>
                                    <div class="hr bg-gray-light offset-top-10"></div>
                                </div>
                                <div class="offset-top-15">
                                    <ul class="list list-unstyled">
                                        <li><span
                                                class="icon novi-icon icon-xs text-madison mdi mdi-email-outline text-middle"></span><a
                                                class="text-primary text-middle inset-left-10"
                                                href="mailto:info@demolink.org">fortune100.edu.np@gmail.com
                                            </a></li>
                                        <li><span
                                                class="icon novi-icon icon-xs text-madison mdi mdi-email-outline text-middle"></span><a
                                                class="text-primary text-middle inset-left-10"
                                                href="mailto:info@demolink.org">
                                                kashi@fortune100.edu.np</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="aside-item-2">
                                <h6 class="text-bold">Address</h6>
                                <div>
                                    <div class="hr bg-gray-light offset-top-10"></div>
                                </div>
                                <div class="offset-top-15">
                                    <div class="unit unit-horizontal unit-spacing-xs">
                                        <div class="unit-left"><span
                                                class="icon novi-icon icon-xs mdi mdi-map-marker text-madison"></span>
                                        </div>
                                        <div class="unit-body">
                                            <p><a class="text-dark" href="#">Bagbazar-2,Kathnandu ,Napal</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="aside-item-2">
                                <h6 class="text-bold">Opening Hours</h6>
                                <div>
                                    <div class="hr bg-gray-light offset-top-10"></div>
                                </div>
                                <div class="offset-top-15">
                                    <div class="unit unit-horizontal unit-spacing-xs">
                                        <div class="unit-left"><span
                                                class="icon novi-icon icon-xs mdi mdi-calendar-clock text-madison"></span>
                                        </div>
                                        <div class="unit-body">
                                            <div>
                                                <p>Mon-Fri: 8:00am-8:00pm</p>
                                            </div>
                                            <div>
                                                <p>Sat: 8:00am-3:00pm</p>
                                            </div>
                                            <div>
                                                <p>Sun: Closed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="aside-item-2">
                                <h6 class="text-bold">Socials</h6>
                                <div class="hr bg-gray-light offset-top-10"></div>
                                <ul class="list-inline list-inline-xs list-inline-madison">
                                    <li><a class="icon novi-icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"
                                            href="#"></a></li>
                                    <li><a class="icon novi-icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"
                                            href="#"></a></li>

                                    <li><a class="icon novi-icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"
                                            href="#"></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="google-map-container" data-zoom="16">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28255.068002807224!2d85.31229631287229!3d27.720883051294244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a2c8e0076f%3A0xe1ebdbd267c459ae!2sFortune%20Hundred%20(P.)%20Ltd!5e0!3m2!1sen!2snp!4v1658051675953!5m2!1sen!2snp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nabin\Desktop\fortune-hundred\fortune_hundred\resources\views/website/contact.blade.php ENDPATH**/ ?>