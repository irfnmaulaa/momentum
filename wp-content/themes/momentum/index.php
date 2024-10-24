<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= get_bloginfo('name') ?></title>
    <meta name="description" content="Branding Agency in Jakarta That'll Transform Your Business into A Digitally Profitable Brand. Let's Talk to See How We Can Work Together!">
    <meta name="keywords" content="momentum,id">
    <meta name="author" content="Ahmad Irfan Maulana">

    <!-- Theme Color -->
    <meta name="theme-color" content="#FFFFFF">

    <!-- Favicon -->
    <link rel="icon" href="<?= get_site_icon_url() ?>" type="image/png">

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="<?= site_url() ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Branding Agency Jakarta - Build Momentum">
    <meta property="og:description" content="Branding Agency in Jakarta That'll Transform Your Business into A Digitally Profitable Brand. Let's Talk to See How We Can Work Together!">
    <meta property="og:image" content="<?= get_template_directory_uri() . '/img/momentum.png' ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= site_url() ?>">
    <meta property="twitter:title" content="Branding Agency Jakarta - Build Momentum">
    <meta property="twitter:description" content="Branding Agency in Jakarta That'll Transform Your Business into A Digitally Profitable Brand. Let's Talk to See How We Can Work Together!">
    <meta property="twitter:image" content="<?= get_template_directory_uri() . '/img/momentum.png' ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= site_url() ?>">

    <?php wp_head() ?>
</head>
<body class="font-body overflow-x-hidden text-[#3A3A3A] bg-[#F5F5F5]">

<main id="content">

    <!-- S: Navbar -->
    <header class="fixed w-full max-w-[1200px] top-[32px] left-[50%] translate-x-[-50%] translate-x- h-[108px] bg-white rounded-[80px] flex items-center justify-between px-[32px] z-[99] shadow-lg">
        <h1 class="navbar-brand">
            <a href="#hero">
                <img src="<?= get_logo() ?>" alt="logo" width="199" height="40" class="logo hidden lg:inline-block">
                <img src="<?= get_site_icon_url() ?>" alt="logo" width="40" height="40" class="logo-sm w-[40px] aspect-[1/1] inline-block lg:hidden">
            </a>
        </h1>
        <nav class="navbar-nav">
            <ul class="navbar-menu flex items-center gap-[32px]">
                <?php foreach(wp_get_nav_menu_items('Header') as $menu) : ?>
                    <?php if($menu->title === 'Consult With Us'): ?>
                        <li class="navbar-item">
                            <a href="<?= $menu->url ?>" target="_blank" class="navbar-link p-4 font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
                                <span class="flex items-center justify-center gap-2 lg:gap-3">
                                    Consult With Us <i class="fa fa-whatsapp text-[23px] lg:text-[26px]"></i>
                                </span>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="navbar-item">
                            <a href="<?= $menu->url ?>" class="navbar-link transition duration-100 font-semibold">
                                <?= $menu->title ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <!-- E: Navbar -->

    <!-- S: Hero -->
    <section id="hero" class="hero bg-[#D4C2AD] w-full pt-[172px] pb-[32px]">
        <div class="container max-w-[1200px] mx-auto">
            <div class="max-w-[800px] mx-auto bg-white px-[40px] py-[24px]">

                <div class="flex justify-between items-center mb-[16px]">
                    <div class="flex items-center gap-2">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/hero-logo.png' ?>" width="32" height="32" alt="hero logo">
                        <span class="font-semibold">buildmomentum.id</span>
                    </div>
                    <img src="<?= get_stylesheet_directory_uri() . '/img/icon-more.png' ?>" width="32" height="32" alt="hero logo">
                </div>

                <div class="mb-[24px] py-[43px] px-[47px] bg-[#F5DF4D] text-[#3A3A3A]">

                    <h2 class="text-[40px] font-bold">
                        Corporate Communication Team
                    </h2>
                    <div class="w-full h-[3px] bg-[#3A3A3A] mb-3"></div>
                    <h3 class="text-[40px] font-bold mb-6">
                        Lagi Cari Agensi untuk Handle Media Sosial Perusahaan? Tapi...
                    </h3>
                    <ul class="flex flex-col gap-2">
                        <li class="flex items-center gap-4 text-[18px] font-semibold">
                            <i class="fa fa-check-circle-o"></i>
                            Capek sama agensi sebelumnya yang gak bisa diandalkan?
                        </li>
                        <li class="flex items-center gap-4 text-[18px] font-semibold">
                            <i class="fa fa-check-circle-o"></i>
                            Tim internal lagi fokus sama project-project lain?
                        </li>
                        <li class="flex items-center gap-4 text-[18px] font-semibold">
                            <i class="fa fa-check-circle-o"></i>
                            Takut agensi slow respon dan ngilang?
                        </li>
                        <li class="flex items-center gap-4 text-[18px] font-semibold">
                            <i class="fa fa-check-circle-o"></i>
                            Punya pengalaman buruk sama agensi yang gak bisa capai KPI?
                        </li>
                    </ul>

                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-[36px]">
                        <div class="flex items-center gap-2 text-[20px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-like.png' ?>" width="32" height="32" alt="icon">
                            428
                        </div>
                        <div class="flex items-center gap-2 text-[20px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-comment.png' ?>" width="32" height="32" alt="icon">
                            156
                        </div>
                        <div class="flex items-center gap-2 text-[20px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-share.png' ?>" width="32" height="32" alt="icon">
                            87
                        </div>
                    </div>

                    <img src="<?= get_stylesheet_directory_uri() . '/img/icon-bookmark.png' ?>" width="32" height="32" alt="icon">
                </div>

            </div>
        </div>
    </section>
    <!-- E: Hero -->

    <!-- S: Partners -->
    <section id="partners" class="partners w-full py-[50px] bg-[#3A3A3A]">
        <div class="container w-full max-w-[1200px] flex items-center gap-8 mx-auto">
            <?php foreach(range(1, 9) as $i): ?>
                <img src="<?= get_stylesheet_directory_uri() . '/img/partner-'. $i .'.png' ?>" alt="partner-<?= $i ?>">
            <?php endforeach; ?>
        </div>
    </section>
    <!-- E: Partners -->

    <!-- S: About -->
    <section id="about" class="about bg-[#F5DF4D] py-[80px]">
        <div class="container max-w-[1200px] mx-auto flex flex-col gap-[45px]">
            <div class="grid grid-cols-[1fr,640px] rounded-[16px] overflow-hidden">
                <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/about-display.png' ?>)] bg-cover bg-center"></div>
                <div class="p-[48px] flex flex-col gap-[36px] bg-white items-start">
                    <h2 class="text-[36px] font-heading font-bold">
                        Hi, Meet Momentum!
                    </h2>
                    <div class="flex flex-col gap-[16px] font-semibold text-[18px]">
                        <p>Sebagai digital agency yang fokus bikin Perusahaanmu lebih Digitally Profitable di media sosial, kami membantu:</p>
                        <ul class="flex flex-col gap-2">
                            <li class="flex items-center gap-3">
                                <i class="fa fa-check-circle-o"></i>
                                Bangun Engagement yang bikin audiens betah follow akunmu,
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa fa-check-circle-o"></i>
                                Buat Creative Content yang relatable sama target audiensmu,
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa fa-check-circle-o"></i>
                                Convert followers pasif kamu jadi komunitas yang aktif!
                            </li>
                        </ul>
                    </div>
                    <a href="" target="_blank" class="py-3 px-4 text-[18px] font-semibold rounded-[30px] border-[#3A3A3A] border inline-block">
                        <span class="flex items-center justify-center gap-2 lg:gap-3">
                            Konsultasi dengan Expert Team Kami
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-call.png' ?>" alt="call" width="28" height="28">
                        </span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-[1fr,1fr,1fr]">
                <div class="flex items-center justify-center gap-7 border-r-[2px] border-[#3A3A3A]">
                    <div class="text-[64px] font-bold leading-[1]">300+</div>
                    <div class="whitespace-pre-line text-[20px] font-bold leading-[28px]">Brands
                        Consulted</div>
                </div>
                <div class="flex items-center justify-center gap-7 border-r-[2px] border-[#3A3A3A]">
                    <div class="text-[64px] font-bold leading-[1]">100k</div>
                    <div class="whitespace-pre-line text-[20px] font-bold leading-[28px]">Leads
                    Generated</div>
                </div>
                <div class="flex items-center justify-center gap-7">
                    <div class="text-[64px] font-bold leading-[1]">97%</div>
                    <div class="whitespace-pre-line text-[20px] font-bold leading-[28px]">Client's
                        Satisfaction</div>
                </div>
            </div>
        </div>
    </section>
    <!-- E: About -->

    <!-- S: Service -->
    <section id="service" class="service mt-[68px] py-[80px]">
        <div class="container max-w-[1200px] mx-auto flex flex-col gap-[52px] items-center">
            <h2 class="text-[40px] font-bold font-heading whitespace-pre-line text-center">Our Promise To You</h2>
            <div class="grid grid-cols-2 gap-[37px] w-full">
                <div class="grid grid-cols-[1fr,290px] rounded-[16px] overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/service-1.png' ?>)] bg-cover bg-center"></div>
                    <div class="p-[37px] flex flex-col gap-[16px] bg-white items-start">
                        <h3 class="text-[20px] font-bold">More Impact</h3>
                        <p class="text-[18px]">Di saat agensi lain hanya mengejar likes, followers, dan engagement saja, Momentum lebih fokus mengubah audiens jadi komunitas aktif melalui campaign yang impactful!</p>
                    </div>
                </div>
                <div class="grid grid-cols-[1fr,290px] rounded-[16px] overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/service-2.png' ?>)] bg-cover bg-center"></div>
                    <div class="p-[37px] flex flex-col gap-[16px] bg-white items-start">
                        <h3 class="text-[20px] font-bold">Top-of-Mind Brand</h3>
                        <p class="text-[18px]">Kami berjanji akan membuat brandmu menjadi the Top-of-Mind brand yang akan disukai target market di industrimu dan bersaing dengan market leader.</p>
                    </div>
                </div>
                <div class="grid grid-cols-[1fr,290px] rounded-[16px] overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/service-3.png' ?>)] bg-cover bg-center"></div>
                    <div class="p-[37px] flex flex-col gap-[16px] bg-white items-start">
                        <h3 class="text-[20px] font-bold">Data-driven Strategy</h3>
                        <p class="text-[18px]">Di Momentum, kami tidak hanya menerka-nerka. Framework social media management kami dimulai dengan riset sebelum membuat strategi yang unik untuk perusahaanmu.</p>
                    </div>
                </div>
                <div class="grid grid-cols-[1fr,290px] rounded-[16px] overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/service-4.png' ?>)] bg-cover bg-center"></div>
                    <div class="p-[37px] flex flex-col gap-[16px] bg-white items-start">
                        <h3 class="text-[20px] font-bold">Committed Experts</h3>
                        <p class="text-[18px]">Kesuksesanmu adalah kesuksesan kami. Momentum memberikan komitmen penuh melalui tim kami yang fast respone untuk menjawab semua permasalahanmu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- E: Service -->

    <!-- S: Testimonial -->
    <section id="testimonial" class="testimonial py-[80px]">
        <div class="container max-w-[1200px] mx-auto flex flex-col gap-[52px] items-center">
            <h2 class="text-[40px] font-bold font-heading whitespace-pre-line text-center">Let’s Hear What Others Say</h2>
            <div class="grid grid-cols-4 gap-[24px]">
                <div class="p-[24px] bg-white rounded-[16px] flex flex-col gap-[22px]">
                    <div class="flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/testi-user-1.png' ?>" width="40" height="40" alt="user">
                        <span class="font-semibold text-[18px]">Mas Amri</span>
                    </div>
                    <p class="text-[14px]">
                        5 tahun terakhir cuma fokus dapet leads dari offline. Setelah dibantu Momentum, sekarang bisa dapetin 100an leads per hari dari sosmed. mantap poll , super sekali!
                    </p>
                    <p class="text-[14px]">
                        Nathin - Maklon Herbal
                    </p>
                </div>
                <div class="p-[24px] bg-white rounded-[16px] flex flex-col gap-[22px]">
                    <div class="flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/testi-user-2.png' ?>" width="40" height="40" alt="user">
                        <span class="font-semibold text-[18px]">Agustinus Setiawan</span>
                    </div>
                    <p class="text-[14px]">
                        Branding Viva Wisata jadi lebih terarah, kami juga merasakan sekali kebanjiran leads. Thank you bgt buat Momentum, sukses terus! Dan yang pasti kita gak akan berhenti kerjasama, thankyou!!
                    </p>
                    <p class="text-[14px]">
                        Viva Wisata - Tour & Travel
                    </p>
                </div>
                <div class="p-[24px] bg-white rounded-[16px] flex flex-col gap-[22px]">
                    <div class="flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/testi-user-3.png' ?>" width="40" height="40" alt="user">
                        <span class="font-semibold text-[18px]">Joko Suyanto</span>
                    </div>
                    <p class="text-[14px]">
                        5 tahun terakhir cuma fokus dapet leads dari offline. Setelah dibantu Momentum, sekarang bisa dapetin 100an leads per hari dari sosmed. mantap poll , super sekali!
                    </p>
                    <p class="text-[14px]">
                        Faesthetic - Skincare
                    </p>
                </div>
                <div class="p-[24px] bg-white rounded-[16px] flex flex-col gap-[22px]">
                    <div class="flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/testi-user-4.png' ?>" width="40" height="40" alt="user">
                        <span class="font-semibold text-[18px]">Joko Suyanto</span>
                    </div>
                    <p class="text-[14px]">
                        5 tahun terakhir cuma fokus dapet leads dari offline. Setelah dibantu Momentum, sekarang bisa dapetin 100an leads per hari dari sosmed. mantap poll , super sekali!
                    </p>
                    <p class="text-[14px]">
                        Jtrip.id - Private Tour Jepang
                    </p>
                </div>
            </div>
            <div class="max-w-[800px]">
                <iframe width="800" height="450" src="https://www.youtube.com/embed/8aZdmgULYuo?si=vtoCvLmG6aVx2j0P" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- E: Testimonial -->

    <!-- S: Call to Action -->
    <section id="cta" class="cta py-[80px]">
        <div class="container max-w-[1200px] mx-auto flex flex-col gap-[52px] items-center">
            <div class="bg-[#F5DF4D] rounded-[24px] grid grid-cols-[6fr,4fr] gap-[37px] w-full px-[76px]">
                <div class="flex flex-col items-start gap-[37px] py-14">
                    <h2 class="text-[40px] font-bold font-heading">Ready to Build Your Top of Mind
                        Brand Through Social Media?</h2>
                    <a href="" target="_blank" class="py-3 px-4 text-[18px] font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
                        <span class="flex items-center justify-center gap-2 lg:gap-3">
                            Konsultasi dengan Expert Team Kami
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-call-white.png' ?>" alt="call" width="28" height="28">
                        </span>
                    </a>
                </div>
                <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/cta.png' ?>)] bg-contain bg-bottom bg-no-repeat">

                </div>
            </div>
        </div>
    </section>
    <!-- E: Call to Action -->

    <!-- S: Digital Service -->
    <section id="digital-service" class="digital-service py-[80px]">
        <div class="container max-w-[1200px] mx-auto flex flex-col gap-[52px] items-center">
            <h2 class="text-[40px] font-bold font-heading whitespace-pre-line text-center">Our Digital Services</h2>
            <div class="grid grid-cols-3 gap-[24px] w-full">
                <div class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/digital-service-1.png' ?>)] w-full bg-cover bg-center aspect-[324/220]"></div>
                    <div class="p-[24px] text-center font-bold text-[24px]">
                        Organic Soecial Media
                    </div>
                </div>
                <div class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/digital-service-2.png' ?>)] w-full bg-cover bg-center aspect-[324/220]"></div>
                    <div class="p-[24px] text-center font-bold text-[24px]">
                        Paid (PPC) Social Media
                    </div>
                </div>
                <div class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/digital-service-3.png' ?>)] w-full bg-cover bg-center aspect-[324/220]"></div>
                    <div class="p-[24px] text-center font-bold text-[24px]">
                        SEO, SEM & E-Commerce
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- E: Digital Service -->

    <!-- S: Portfolio -->
    <section id="portfolio" class="portfolio py-[80px]">
        <div class="container max-w-[1200px] mx-auto flex flex-col gap-[52px] items-center">
            <h2 class="text-[40px] font-bold font-heading whitespace-pre-line text-center">Our Proud Works</h2>
            <div class="grid grid-cols-3 gap-[24px] w-full">
                <?php
                 $portofolios = [
                         'Orangedentalhouse',
                         'Sayakaya.id',
                         'Nathinofficial',
                         'Viooptical',
                         'Vivawisata',
                         'Superspringid',
                         'Jtrip.id',
                         'Houseoflittlebunny.id',
                         'Faestheticofficial',
                 ];
                 foreach($portofolios as $i => $porto):
                 ?>
                <div class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                    <div class="py-3 px-4 flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/porto-logo-'. ($i+1) .'.png' ?>" alt="logo" width="32" height="32 ">
                        <span class="font-semibold text-[18px]"><?= $porto ?></span>
                    </div>
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/porto-poster-'. ($i+1) .'.png' ?>)] w-full bg-cover bg-center aspect-[1/1]"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- E: Portfolio -->

    <!-- S: QA -->

    <!-- E: QA -->

    <!-- S: Call to Action Bottom -->
    <section id="cta-bottom" class="cta-bottom py-[80px] relative">
        <div class="absolute pointer-events-none bg-[#3A3A3A] h-[50%] w-full bottom-0 left-0 z-[0] translate-y-[2px]"></div>
        <div class="container max-w-[1200px] mx-auto flex flex-col gap-[52px] items-center relative z-[1]">
            <div class="bg-[#F5DF4D] rounded-[24px] grid grid-cols-[6fr,4fr] gap-[37px] w-full px-[76px]">
                <div class="flex flex-col items-start gap-[37px] py-14">
                    <h2 class="text-[40px] font-bold font-heading">Ready to Build Your Top of Mind
                        Brand Through Social Media?</h2>
                    <a href="" target="_blank" class="py-3 px-4 text-[18px] font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
                        <span class="flex items-center justify-center gap-2 lg:gap-3">
                            Konsultasi dengan Expert Team Kami
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-call-white.png' ?>" alt="call" width="28" height="28">
                        </span>
                    </a>
                </div>
                <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/cta.png' ?>)] bg-contain bg-bottom bg-no-repeat">

                </div>
            </div>
        </div>
    </section>
    <!-- E: Call to Action Bottom -->

    <!-- S: Footer -->

    <!-- E: Footer -->

<?php wp_footer() ?>
</body>
</html>