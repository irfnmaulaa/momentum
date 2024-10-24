<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= get_bloginfo('name') ?></title>
    <meta name="description" content="Official website of Oaza Spa.">
    <meta name="keywords" content="spa, bali">
    <meta name="author" content="Ahmad Irfan Maulana">

    <!-- Theme Color -->
    <meta name="theme-color" content="#FFFFFF">

    <!-- Favicon -->
    <link rel="icon" href="<?= get_site_icon_url() ?>" type="image/png">

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="<?= site_url() ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Oaza - Official Website">
    <meta property="og:description" content="Official website of Oaza.">
    <meta property="og:image" content="<?= get_template_directory_uri() . '/img/oaza.jpg' ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= site_url() ?>">
    <meta property="twitter:title" content="Oaza - Official Website">
    <meta property="twitter:description" content="Official website of Oaza.">
    <meta property="twitter:image" content="<?= get_template_directory_uri() . '/img/oaza.jpg' ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= site_url() ?>">

    <?php wp_head() ?>
</head>
<body class="font-body overflow-x-hidden">

    <main id="content">

        <!-- S: Navbar -->
        <header id="navbar" class="z-[99] w-full bg-white fixed top-0 left-0 h-[72px] lg:h-[120px] rounded-bl-[32px] lg:rounded-bl-[80px] rounded-br-[32px] lg:rounded-br-[80px] shadow">
            <div class="w-full h-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <input type="checkbox" id="navbar-toggle" class="peer opacity-0 absolute pointer-events-none"/>
                <h1 class="navbar-brand">
                    <a href="#hero">
                        <img src="<?= get_logo() ?>" alt="logo" width="240" height="77" class="logo hidden lg:inline-block">
                        <img src="<?= get_site_icon_url() ?>" alt="logo" width="40" height="40" class="logo-sm w-[40px] aspect-[1/1] inline-block lg:hidden">
                    </a>
                </h1>
                <label for="navbar-toggle" class="w-[32px] aspect-[1/1] bg-[#DD924F] rounded-full relative lg:hidden">
                    <span class="bar-1 w-[18px] h-[2px] bg-white rounded-[20px] absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-4px] transition duration-200"></span>
                    <span class="bar-2 w-[18px] h-[2px] bg-white rounded-[20px] absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[4px] transition duration-200"></span>
                </label>
                <nav class="navbar-nav lg:block fixed lg:relative lg:z-[2] top-0 left-0 w-full lg:w-auto bg-white z-[-1] rounded-bl-[32px] lg:rounded-bl-[0] rounded-br-[32px] shadow lg:shadow-none lg:rounded-br-[0] h-[0] peer-checked:h-[352px] lg:h-[auto] transition duration-200 overflow-hidden">
                    <ul class="navbar-menu flex flex-col lg:flex-row items-center gap-8 lg:gap-12 text-[18px] text-[#AD5F38] font-semibold mt-5 p-8 lg:p-0 mt-[60px] lg:mt-0">
                        <?php foreach(wp_get_nav_menu_items('navbar') as $menu) : ?>
                        <?php if($menu->title === 'Book Appointment'): ?>
                            <li class="navbar-item">
                                <a href="<?= $menu->url ?>" target="_blank" class="navbar-link inline-block py-3 px-5 cursor-pointer rounded-full bg-[#DD924F] text-white active:bg-[#AD5F38] transition duration-[50]">
                                <span class="flex items-center justify-center gap-2 lg:gap-3">
                                    Book Appointment <i class="fa fa-whatsapp text-[23px] lg:text-[26px]"></i>
                                </span>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="navbar-item">
                                <a href="<?= $menu->url ?>" class="navbar-link inline-block hover:text-[#DD924F] transition duration-100"><?= $menu->title ?></a>
                            </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- E: Navbar -->

        <!-- S: Hero -->
        <section id="hero" class="w-full lg:h-[100vh] min-h-[640px] lg:min-h-[721px] relative overflow-x-hidden">

            <?php if ($sliders = get_field('hero')) : ?>
            <div class="hero-slider w-full h-full min-h-[640px] grid grid-cols-[repeat(<?= count($sliders) ?>,100vw)] transition duration-[1s]" data-status="<?= get_field('disable_hero_slider', get_the_ID()) ? 'disabled' : 'enabled'; ?>">
                <?php foreach(array_values($sliders) as $i => $slider) : ?>
                <?php if($i == 0 || !get_field('disable_hero_slider', get_the_ID())): ?>
                <div class="hero-bg w-full h-full bg-[url(<?= $slider['image'] ?>)] bg-cover bg-[center_100%] pt-[120px] pb-24">
                    <div class="container w-full h-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center lg:items-start flex-col text-white gap-6 text-center lg:text-start">
                        <h2 data-aos="fade-left" class="text-[40px] lg:text-[80px] leading-[48px] lg:leading-[96px] font-heading italic whitespace-pre-line"><?= $slider['title'] ?></h2>
                        <p data-aos="fade-left" data-aos-delay="100" data-aos-duration="800" class="text-[18px] leading-[26px] lg:text-[24px] lg:leading-[36px] max-w-[535px]"><?= $slider['description'] ?></p>
                        <?php if(!empty($slider['link'])): ?>
                        <a data-aos="fade-left" data-aos-delay="200" data-aos-duration="600" href="<?= $slider['link']['url'] ?>" class="hero-slider-cta inline-block py-3 px-5 cursor-pointer rounded-full bg-[#DD924F] text-white text-[16px] lg:text-[24px] mt-3 lg:mt-5 active:bg-[#AD5F38] transition duration-[50]">
                            <span class="flex items-center gap-3">
                                <?= $slider['link']['title'] ?> <img src="<?= get_template_directory_uri() . '/img/arrow-down.png' ?>" alt="arrow down" width="24" height="24" class="w-[24px] aspect-[1/1] arrow-bounce-animation">
                            </span>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if(!get_field('disable_hero_slider', get_the_ID())): ?>
            <div class="hero-slider-navigation absolute left-0 bottom-8 lg:bottom-16 w-full hero-slider-navigation">
                <div class="container max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex justify-end items-center gap-4 lg:gap-6">
                    <?php foreach(array_values($sliders) as $i => $slider) : ?>
                            <a href="" class="hero-slider-navigation-link w-[12px] lg:w-[18px] aspect-[1/1] <?= $i === 0 ? 'bg-white active' : 'bg-[#AD5F38]' ?> rounded-full hero-dot" data-target-index="<?= $i ?>"></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </section>
        <!-- E: Hero -->

        <!-- S: About -->
        <section id="about" class="bg-[#526A52] text-[#EEE2CA] py-20 lg:py-40">
            <div class="w-full h-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center flex-col gap-12 text-center">
                <h2 data-aos="fade-in" class="text-[32px] lg:text-[48px] font-heading italic whitespace-pre-line lg:whitespace-normal"><?= get_field('about_title', get_the_ID()) ?></h2>
                <p data-aos="fade-in" data-aos-delay="200" data-aos-duration="1000" class="text-[20px] lg:text-[24px] font-semibold">
                    <?= get_field('about_description', get_the_ID()) ?>
                </p>
            </div>
        </section>
        <!-- E: About -->

        <!-- S: Testimonial -->
        <section id="testimonial" class="bg-white pt-20 pb-10 lg:pt-40 lg:pb-20">
            <div class="w-full h-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center flex-col gap-6 lg:gap-10">
                <h2 data-aos="fade-in" class="text-[32px] lg:text-[48px] font-heading italic text-[#AD5F38] text-center whitespace-pre-line lg:whitespace-normal"><?= get_field('testimo_title', get_the_ID()) ?></h2>
                <?php if (get_field('testimonial_display', get_the_ID()) === 'Video'): ?>
                    <iframe data-aos="fade-up" class="max-w-[960px] w-full h-auto aspect-[960/540] rounded-[24px] mx-auto" width="960" height="540" src="<?= youtubeUrlToEmbed(get_field('testimonial_video_url', get_the_ID())) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <?php else: ?>
                    <?php if($boxes = get_field('testimonial_boxes', get_the_ID())): ?>
                    <div class="grid lg:grid-cols-3 gap-[1.5rem]">
                        <?php foreach(array_values($boxes) as $i => $box): ?>
                        <?php
                            $aos = 'fade-right';
                            if (($i + 1) % 2 === 0) {
                                $aos = 'zoom-in';
                            } elseif (($i + 1) % 3 === 0) {
                                $aos = 'fade-left';
                            }
                        ?>
                        <div data-aos="<?= $aos ?>" class="testimonial-item bg-[#EEE2CA] p-7 rounded-[24px] flex flex-col gap-4">
                            <div class="grid grid-cols-[48px,1fr] lg:grid-cols-[80px,1fr] gap-[18px] lg:gap-[24px] items-center">
                                <img src="<?= $box['photo'] ?>" alt="user1" width="80" height="80" class="w-full aspect-[1/1]">
                                <div>
                                    <h3 class="text-[20px] lg:text-[28px] text-[#AD5F38] font-semibold"><?= $box['name'] ?></h3>
                                    <div class="flex items-center gap-1 lg:gap-3">
                                        <?php foreach(range(1, $box['rating_count']) as $i => $star): ?>
                                        <img src="<?= get_template_directory_uri() . '/img/star.png' ?>" alt="star" width="24" height="24" class="w-[21px] aspect-[1/1]" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="text-[#AD5F38] text-[16px] lg:text-[20px] leading-[24px] lg:leading-[28px]">
                                <p>
                                    <?= $box['description'] ?>
                                </p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </section>
        <!-- E: Testimonial -->

        <!-- S: Service -->
        <section id="service" class="bg-white pt-10 pb-20 lg:pt-20 lg:pb-40">
            <div class="w-full h-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center flex-col gap-12">
                <h2 data-aos="fade-in" class="text-[32px] lg:text-[48px] font-heading italic text-[#AD5F38] text-center whitespace-pre-line lg:whitespace-normal"><?= get_field('service_title', get_the_ID()) ?></h2>
                <?php if($boxes = get_field('service_boxes', get_the_ID())): ?>
                <div class="grid lg:grid-cols-3 gap-[1.5rem]">
                    <?php foreach(array_values($boxes) as $i => $box): ?>
                    <?php
                        $aos = 'fade-up-right';
                        $bg_color = '#BCA088';
                        if (($i + 1) % 2 === 0) {
                            $aos = 'fade-up';
                            $bg_color = '#AD5F38';
                        } elseif (($i + 1) % 3 === 0) {
                            $aos = 'fade-up-left';
                            $bg_color = '#DD924F';
                        }
                    ?>
                    <div data-aos="<?= $aos ?>" class="service-item bg-[<?= $bg_color ?>] pt-9 pb-7 px-7 rounded-tl-[200px] rounded-tr-[200px] rounded-bl-[16px] rounded-br-[16px] flex flex-col gap-5 text-white text-center items-center justify-between">
                        <img data-aos="fade-in" src="<?= $box['icon'] ?>" alt="service-1" width="80" height="80" class="w-[80px] aspect-[1/1]">
                        <h3 data-aos="fade-in" data-aos-delay="100" class="text-[32px] font-semibold leading-[40px] max-w-[240px]"><?= $box['title'] ?></h3>
                        <div data-aos="fade-in" data-aos-delay="200" data-aos-duration="800" class="text-white flex flex-col gap-4 text-[20px] leading-[28px]">
                            <?= $box['description'] ?>
                        </div>
                        <?php if(!empty($box['link'])) : ?>
                        <a href="<?= $box['link']['url'] ?>" target="_blank" class="inline-block py-3 px-5 cursor-pointer rounded-full bg-white text-[#AD5F38] text-[20px] mt-4 font-semibold active:bg-[#DD924F] active:text-white transition duration-[50]">
                            <span class="flex items-center justify-center gap-2 lg:gap-3">
                            <?= $box['link']['title'] ?> <i class="fa fa-whatsapp text-[23px] lg:text-[26px]"></i>
                            </span>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php if($prices = get_field('service_price_list', get_the_ID())): ?>
                <div data-aos="zoom-in" class="flex flex-col lg:flex-row items-center justify-between gap-1 lg:gap-[1rem] max-w-[809px] w-full p-4 px-6 bg-[#EEE2CA] text-[#AD5F38] text-[24px] font-bold rounded-[24px] mt-[-24px]">
                    <?php foreach(array_values($prices) as $i => $price): ?>
                        <?php if($i == 0): ?>
                                <span><span class="hidden lg:inline">Price: </span><?= $price ?></span>
                        <?php else: ?>
                                <span><?= $price ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php if($addon = get_field('service_add_on', get_the_ID())): ?>
                <h2 data-aos="fade-in" class="text-[32px] lg:text-[48px] font-heading italic text-[#AD5F38] text-center"><?= $addon['title'] ?></h2>
                <div data-aos="fade-up" class="max-w-[809px] w-full bg-[#526A52] flex flex-col items-center text-center gap-5 text-[#EEE2CA] p-9 rounded-[24px]">
                    <img data-aos="fade-up" data-aos-delay="100" src="<?= $addon['box']['icon'] ?>" alt="service-4" width="80" height="80" class="w-[56px] lg:w-[80px] aspect-[1/1]">
                    <h3 data-aos="fade-in" data-aos-delay="300" class="text-[24px] leading-[28px]"><?= $addon['box']['title'] ?></h3>
                    <p data-aos="fade-in" data-aos-delay="400" data-aos-duration="800" class="text-[16px] leading-[24px]">
                        <?= $addon['box']['description'] ?>
                    </p>
                </div>
                <div data-aos="fade-in" class="inline-block lg:flex items-center justify-center lg:max-w-[210px] lg:w-full p-4 px-6 bg-[#EEE2CA] text-[#AD5F38] text-[20px] lg:text-[24px] font-bold rounded-[24px] mt-[-24px]">
                    <?= $addon['additional'] ?>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- E: Service -->

        <!-- S: Contact -->
        <section id="contact" class="bg-white">
            <div class="w-full relative">
                <div class="absolute left-0 bottom-0 h-[50%] w-full bg-[#AD5F38] pointer-events-none" id="contact-bg-half"></div>
                <div class="relative z-2 w-full h-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center flex-col gap-12">
                    <div data-aos="fade-left" class="w-full bg-[#EEE2CA] p-6 lg:p-8 grid lg:grid-cols-[400px,1fr] gap-12 rounded-[24px] lg:rounded-[40px]">
                        <div class="relative">
                            <iframe data-aos="fade-left" data-aos-delay="100" class="w-full aspect-[1/1] rounded-[16px]" src="<?= extractSrcFromIframe(get_field('contact_maps', get_the_ID())) ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <?php if($coordinate = get_field('coordinate', get_the_ID())): ?>
                            <a href="https://www.google.com/maps/dir/?api=1&destination=<?= $coordinate ?>" class="absolute top-0 left-0 z-[2] w-full h-full" target="_blank"></a>
                            <?php endif; ?>
                        </div>
                        <div class="flex flex-col gap-6 lg:gap-12 justify-center">
                            <h2 class="font-heading text-[32px] lg:text-[48px] text-[#AD5F38] italic text-center whitespace-pre-line lg:whitespace-normal"><?= get_field('contact_title', get_the_ID()) ?></h2>
                            <div class="flex flex-wrap gap-4 lg:gap-6 justify-center text-white ">

                                <?php
                                $location_link = get_field('contact_location_link', get_the_ID());
                                $whatsapp_link = get_field('contact_whatsapp_link', get_the_ID());
                                $instagram_link = get_field('contact_instagram_link', get_the_ID());
                                $email_link = get_field('contact_mail_link', get_the_ID());
                                ?>

                                <?php if(!empty($location_link)) : ?>
                                <a href="<?= $location_link['url'] ?>" target="_blank" class="inline-block py-3 px-4 bg-[#BCA088] rounded-full text-[16px] lg:text-[20px] flex items-start lg:items-center gap-2 active:bg-[#DD924F] active:text-white transition duration-[50]">
                                    <img src="<?= get_template_directory_uri() . '/img/icon-location.png' ?>" alt="location" width="28" height="28" class="w-[20px] lg:w-[28px] mt-1 lg:mt-0 aspect-[1/1]">
                                    <?= $location_link['title'] ?>
                                </a>
                                <?php endif; ?>

                                <?php if(!empty($whatsapp_link)) : ?>
                                <a href="<?= $whatsapp_link['url'] ?>" target="_blank" class="inline-block py-3 px-4 bg-[#BCA088] rounded-full text-[16px] lg:text-[20px] flex items-start lg:items-center gap-2 active:bg-[#DD924F] active:text-white transition duration-[50]">
                                    <img src="<?= get_template_directory_uri() . '/img/icon-phone.png' ?>" alt="phone" width="28" height="28" class="w-[20px] lg:w-[28px] aspect-[1/1]">
                                    <?= $whatsapp_link['title'] ?>
                                </a>
                                <?php endif; ?>

                                <?php if(!empty($instagram_link)) : ?>
                                <a href="<?= $instagram_link['url'] ?>" target="_blank" class="inline-block py-3 px-4 bg-[#BCA088] rounded-full text-[16px] lg:text-[20px] flex items-start lg:items-center gap-2 active:bg-[#DD924F] active:text-white transition duration-[50]">
                                    <img src="<?= get_template_directory_uri() . '/img/icon-instagram.png' ?>" alt="instagram" width="28" height="28" class="w-[20px] lg:w-[28px] aspect-[1/1]">
                                    <?= $instagram_link['title'] ?>
                                </a>
                                <?php endif; ?>

                                <?php if(!empty($email_link)) : ?>
                                <a href="<?= $email_link['url'] ?>" target="_blank" class="inline-block py-3 px-4 bg-[#BCA088] rounded-full text-[16px] lg:text-[20px] flex items-start lg:items-center gap-2 active:bg-[#DD924F] active:text-white transition duration-[50]">
                                    <img src="<?= get_template_directory_uri() . '/img/icon-mail.png' ?>" alt="mail" width="28" height="28" class="w-[20px] lg:w-[28px] aspect-[1/1]">
                                    <?= $email_link['title'] ?>
                                </a>
                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="contact-bottom" class="w-full bg-[#AD5F38] py-20 lg:py-40 mt-[-2px]">
                <div class="w-full h-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center flex-col gap-12">
                    <div class="grid lg:grid-cols-[320px,1fr] gap-16 lg:gap-24">
                        <div data-aos="fade-right" id="bg-contact" class="w-full aspect-[320/360] bg-[url(<?= get_field('cta_image', get_the_ID()) ?>)] bg-[length:100%_auto] bg-[center_-100px] rounded-tl-[200px] rounded-tr-[200px] rounded-bl-[16px] rounded-br-[16px]"></div>
                        <div class="text-center flex flex-col justify-end items-center gap-6 lg:gap-10">
                            <h2 data-aos="fade-left" class="font-heading italic text-[#EEE2CA] text-[32px] lg:text-[64px] leading-[40px] lg:leading-[80px] max-w-[313px] lg:max-w-[636px]"><?= get_field('cta_title', get_the_ID()) ?></h2>

                            <?php
                            $cta_link = get_field('cta_link', get_the_ID());
                            ?>

                            <?php if(!empty($cta_link)) : ?>
                            <a data-aos="fade-left" data-aos-delay="100" href="<?= $cta_link['url'] ?>" class="navbar-link inline-block py-3 px-5 cursor-pointer rounded-full bg-[#DD924F] text-white text-[16px] lg:text-[24px] mt-5 active:bg-[#AD5F38] transition duration-[50]">
                                <span class="flex items-center gap-2">
                                    <?= $cta_link['title'] ?> <img src="<?= get_template_directory_uri() . '/img/arrow-down.png' ?>" alt="arrow down" width="24" height="24" class="w-[24px] aspect-[1/1] arrow-bounce-animation-up">
                                </span>
                            </a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- E: Contact -->

    </main>

    <!-- S: Footer -->
    <footer id="footer" class="bg-[#EEE2CA] text-[#AD5F38] lg:pt-[150px] lg:pb-[130px] py-24">
        <div class="w-full h-full max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 flex justify-center items-center flex-col gap-12 text-center">
            <h2>
                <img data-aos="zoom-in" src="<?= get_field('footer_image', get_the_ID()) ?>" alt="logo" width="200" height="131" class="w-[160px] lg:w-[200px]"/>
            </h2>
            <p data-aos="fade-in" data-aos-duration="800" data-aos-delay="100" class="text-[16px] lg:text-[18px] max-w-[800px] leading-[24px] lg:leading-[28px]">
                <?= get_field('footer_description', get_the_ID()) ?>
            </p>
            <p data-aos="fade-in" data-aos-duration="800" data-aos-delay="200" class="text-[16px] lg:text-[18px]">
                <?= get_field('footer_copyright', get_the_ID()) ?>
            </p>
        </div>
    </footer>
    <!-- E: Footer -->

    <?php wp_footer() ?>
</body>
</html>