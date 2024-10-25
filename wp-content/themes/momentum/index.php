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

<!-- S: Navbar -->
<header class="fixed w-full top-[32px] left-0 z-[99]">
    <div class="container max-w-[1200px] mx-auto px-6 sm:px-8 lg:px-8 peer-checked/nav:hidden">
        <div class="header-float bg-white rounded-[80px] relative flex items-center justify-between p-[16px] lg:px-[32px] shadow-lg h-[72px] lg:h-[108px] w-full">
            <input type="checkbox" name="navbar-toggle" id="navbar-toggle" class="peer absolute opacity-0 pointer-events-none">
            <h1 class="navbar-brand">
                <a href="#hero">
                    <img src="<?= get_logo() ?>" alt="logo" width="199" height="40" class="logo hidden lg:inline-block">
                    <img src="<?= get_site_icon_url() ?>" alt="logo" width="40" height="40" class="logo-sm w-[40px] aspect-[1/1] inline-block lg:hidden">
                </a>
            </h1>
            <nav class="navbar-nav hidden lg:block peer-checked:block lg:static absolute top-0 left-0 pt-[100px] pb-[28px] lg:p-0 lg:z-[unset] z-[-1] w-full lg:w-auto bg-white rounded-[24px] lg:rounded-none">
                <ul class="navbar-menu flex flex-col lg:flex-row items-center gap-[32px]">
                    <?php foreach(wp_get_nav_menu_items('Header') as $menu) : ?>
                        <?php if($menu->title === 'Consult With Us'): ?>
                            <li class="navbar-item flex items-center">
                                <a href="<?= $menu->url ?>" target="_blank" class="btn truncate navbar-link p-4 font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
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
            <a href="<?= $menu->url ?>" target="_blank" class="btn truncate navbar-link lg:hidden py-3 px-4 peer-checked:hidden font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
                <span class="flex items-center justify-center gap-2 lg:gap-3">
                    Consult With Us <i class="fa fa-whatsapp text-[23px] lg:text-[26px]"></i>
                </span>
            </a>
            <label for="navbar-toggle" class="w-[36px] h-[36px] bg-[#F5DF4D] lg:hidden rounded-full relative">
                <span class="bar-1 w-[18px] h-[2px] bg-[#3A3A3A] rounded-[20px] absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-4px] transition duration-200"></span>
                <span class="bar-2 w-[18px] h-[2px] bg-[#3A3A3A] rounded-[20px] absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[4px] transition duration-200"></span>
            </label>
        </div>
    </div>
</header>
<!-- E: Navbar -->

<main id="content">

    <!-- S: Hero -->
    <section id="hero" class="hero bg-[#D4C2AD] w-full pt-[148px] lg:pt-[172px] pb-[44px]">
        <div class="container lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto">
            <div class="max-w-[800px] mx-auto bg-white px-[24px] lg:px-[40px] py-[24px]">

                <div class="flex justify-between items-center mb-[16px]">
                    <div class="flex items-center gap-2">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/hero-logo.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="hero logo">
                        <span class="font-semibold text-[12px] lg:text-[16px]">buildmomentum.id</span>
                    </div>
                    <img src="<?= get_stylesheet_directory_uri() . '/img/icon-more.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="hero logo">
                </div>

                <div class="mb-[24px] py-[30px] lg:py-[43px] px-[24px] lg:px-[47px] bg-[#F5DF4D] text-[#3A3A3A]">

                    <h2 class="text-[24px] leading-[30px] lg:leading-[unset] lg:text-[40px] font-bold lg:whitespace-normal whitespace-pre-line">Corporate
                        Communication Team
                    </h2>
                    <div class="w-full h-[2px] lg:h-[3px] bg-[#3A3A3A] mb-3"></div>
                    <h3 class="text-[24px] leading-[30px] lg:leading-[unset] lg:text-[40px] font-bold mb-6">
                        Lagi Cari Agensi untuk Handle Media Sosial Perusahaan? Tapi...
                    </h3>
                    <ul class="flex flex-col gap-2">
                        <li class="flex items-start lg:items-center gap-2 lg:gap-3 text-[12px] lg:text-[18px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-check.png' ?>" alt="icon check" width="16" height="16">
                            Capek sama agensi sebelumnya yang gak bisa diandalkan?
                        </li>
                        <li class="flex items-start lg:items-center gap-2 lg:gap-3 text-[12px] lg:text-[18px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-check.png' ?>" alt="icon check" width="16" height="16">
                            Tim internal lagi fokus sama project-project lain?
                        </li>
                        <li class="flex items-start lg:items-center gap-2 lg:gap-3 text-[12px] lg:text-[18px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-check.png' ?>" alt="icon check" width="16" height="16">
                            Takut agensi slow respon dan ngilang?
                        </li>
                        <li class="flex items-start lg:items-center gap-2 lg:gap-3 text-[12px] lg:text-[18px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-check.png' ?>" alt="icon check" width="16" height="16">
                            Punya pengalaman buruk sama agensi yang gak bisa capai KPI?
                        </li>
                    </ul>

                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-[16px] lg:gap-[36px]">
                        <div class="flex items-center gap-1 lg:gap-2 text-[12px] lg:text-[20px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-like.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="icon">
                            428
                        </div>
                        <div class="flex items-center gap-1 lg:gap-2 text-[12px] lg:text-[20px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-comment.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="icon">
                            156
                        </div>
                        <div class="flex items-center gap-1 lg:gap-2 text-[12px] lg:text-[20px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-share.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="icon">
                            87
                        </div>
                    </div>

                    <img src="<?= get_stylesheet_directory_uri() . '/img/icon-bookmark.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="icon">
                </div>

            </div>
        </div>
    </section>
    <!-- E: Hero -->

    <!-- S: Partners -->
    <section id="partners" class="partners w-full py-[32px] lg:py-[50px] bg-[#3A3A3A]">
        <div class="max-w-[2400px] mx-auto overflow-hidden">
            <div class="marquee partners-wrap flex items-center gap-8 lg:gap-16 w-[200%] overflow-hidden">
                <div class="partner-logos flex items-center gap-8 lg:gap-16 flex-none">
                    <?php foreach(range(1, 9) as $i): ?>
                        <img src="<?= get_stylesheet_directory_uri() . '/img/partner-'. $i .'.png' ?>" alt="partner-<?= $i ?>" class="max-h-[25px] lg:max-h-[40px]">
                    <?php endforeach; ?>
                </div>
                <div class="partner-logos flex items-center gap-8 lg:gap-16 flex-none">
                    <?php foreach(range(1, 9) as $i): ?>
                        <img src="<?= get_stylesheet_directory_uri() . '/img/partner-'. $i .'.png' ?>" alt="partner-<?= $i ?>" class="max-h-[25px] lg:max-h-[40px]">
                    <?php endforeach; ?>
                </div>
                <div class="partner-logos flex items-center gap-8 lg:gap-16 flex-none">
                    <?php foreach(range(1, 9) as $i): ?>
                        <img src="<?= get_stylesheet_directory_uri() . '/img/partner-'. $i .'.png' ?>" alt="partner-<?= $i ?>" class="max-h-[25px] lg:max-h-[40px]">
                    <?php endforeach; ?>
                </div>
                <div class="partner-logos flex items-center gap-8 lg:gap-16 flex-none">
                    <?php foreach(range(1, 9) as $i): ?>
                        <img src="<?= get_stylesheet_directory_uri() . '/img/partner-'. $i .'.png' ?>" alt="partner-<?= $i ?>" class="max-h-[25px] lg:max-h-[40px]">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- E: Partners -->

    <!-- S: About -->
    <section id="about" class="about bg-[#F5DF4D] py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[45px]">
            <div class="grid lg:grid-cols-[1fr,640px] rounded-[16px] overflow-hidden">
                <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/about-display.png' ?>)] bg-cover bg-center aspect-[312/208] lg:aspect-[unset]"></div>
                <div class="p-[24px] lg:p-[48px] flex flex-col gap-[20px] lg:gap-[36px] bg-white items-start">
                    <h2 class="text-[22px] lg:text-[36px] font-heading font-bold">
                        Hi, Meet Momentum!
                    </h2>
                    <div class="flex flex-col gap-[16px] font-semibold text-[12px] lg:text-[18px]">
                        <p>Sebagai digital agency yang fokus bikin Perusahaanmu lebih Digitally Profitable di media sosial, kami membantu:</p>
                        <ul class="flex flex-col gap-2">
                            <li class="flex items-start lg:items-center gap-2 lg:gap-3">
                                <img src="<?= get_stylesheet_directory_uri() . '/img/icon-check.png' ?>" alt="icon check" width="16" height="16">
                                Bangun Engagement yang bikin audiens betah follow akunmu,
                            </li>
                            <li class="flex items-start lg:items-center gap-2 lg:gap-3">
                                <img src="<?= get_stylesheet_directory_uri() . '/img/icon-check.png' ?>" alt="icon check" width="16" height="16">
                                Buat Creative Content yang relatable sama target audiensmu,
                            </li>
                            <li class="flex items-start lg:items-center gap-2 lg:gap-3">
                                <img src="<?= get_stylesheet_directory_uri() . '/img/icon-check.png' ?>" alt="icon check" width="16" height="16">
                                Convert followers pasif kamu jadi komunitas yang aktif!
                            </li>
                        </ul>
                    </div>
                    <a href="" target="_blank" class="btn truncate select-none py-2 lg:py-3 px-3 lg:px-4 text-[12px] lg:text-[18px] font-semibold rounded-[30px] border-[#3A3A3A] border inline-block">
                        <span class="flex items-center justify-center gap-2 lg:gap-3">
                            Konsultasi dengan Expert Team Kami
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-call.png' ?>" alt="call" width="28" height="28" class="w-[16px] lg:w-[28px]">
                        </span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-[1fr,1fr,1fr]">
                <div class="flex flex-col lg:flex-row items-center justify-center gap-2 lg:gap-7 border-r-[2px] border-[#3A3A3A]">
                    <div class="text-[30px] lg:text-[64px] font-bold leading-[1]">300+</div>
                    <div class="whitespace-pre-line text-[12px] lg:text-[20px] font-bold leading-[14px] lg:leading-[28px]">Brands
                        Consulted</div>
                </div>
                <div class="flex flex-col lg:flex-row items-center justify-center gap-2 lg:gap-7 border-r-[2px] border-[#3A3A3A]">
                    <div class="text-[30px] lg:text-[64px] font-bold leading-[1]">100k</div>
                    <div class="whitespace-pre-line text-[12px] lg:text-[20px] font-bold leading-[14px] lg:leading-[28px]">Leads
                    Generated</div>
                </div>
                <div class="flex flex-col lg:flex-row items-center justify-center gap-2 lg:gap-7">
                    <div class="text-[30px] lg:text-[64px] font-bold leading-[1]">97%</div>
                    <div class="whitespace-pre-line text-[12px] lg:text-[20px] font-bold leading-[14px] lg:leading-[28px]">Client's
                        Satisfaction</div>
                </div>
            </div>
        </div>
    </section>
    <!-- E: About -->

    <!-- S: Service -->
    <section id="service" class="service mt-[68px] py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <h2 class="text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center">Our Promise To You</h2>
            <div class="grid lg:grid-cols-2 gap-[22px] lg:gap-[37px] w-full">
                <div class="grid grid-cols-[1fr,1fr] lg:grid-cols-[1fr,290px] rounded-[16px] overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/service-1.png' ?>)] bg-cover bg-center"></div>
                    <div class="p-[24px] lg:p-[37px] flex flex-col gap-[16px] bg-white items-start">
                        <h3 class="text-[12px] lg:text-[20px] font-bold">More Impact</h3>
                        <p class="text-[12px] lg:text-[18px]">Di saat agensi lain hanya mengejar likes, followers, dan engagement saja, Momentum lebih fokus mengubah audiens jadi komunitas aktif melalui campaign yang impactful!</p>
                    </div>
                </div>
                <div class="grid grid-cols-[1fr,1fr] lg:grid-cols-[1fr,290px] rounded-[16px] overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/service-2.png' ?>)] bg-cover bg-center"></div>
                    <div class="p-[24px] lg:p-[37px] flex flex-col gap-[16px] bg-white items-start">
                        <h3 class="text-[12px] lg:text-[20px] font-bold">Top-of-Mind Brand</h3>
                        <p class="text-[12px] lg:text-[18px]">Kami berjanji akan membuat brandmu menjadi the Top-of-Mind brand yang akan disukai target market di industrimu dan bersaing dengan market leader.</p>
                    </div>
                </div>
                <div class="grid grid-cols-[1fr,1fr] lg:grid-cols-[1fr,290px] rounded-[16px] overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/service-3.png' ?>)] bg-cover bg-center"></div>
                    <div class="p-[24px] lg:p-[37px] flex flex-col gap-[16px] bg-white items-start">
                        <h3 class="text-[12px] lg:text-[20px] font-bold">Data-driven Strategy</h3>
                        <p class="text-[12px] lg:text-[18px]">Di Momentum, kami tidak hanya menerka-nerka. Framework social media management kami dimulai dengan riset sebelum membuat strategi yang unik untuk perusahaanmu.</p>
                    </div>
                </div>
                <div class="grid grid-cols-[1fr,1fr] lg:grid-cols-[1fr,290px] rounded-[16px] overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/service-4.png' ?>)] bg-cover bg-center"></div>
                    <div class="p-[24px] lg:p-[37px] flex flex-col gap-[16px] bg-white items-start">
                        <h3 class="text-[12px] lg:text-[20px] font-bold">Committed Experts</h3>
                        <p class="text-[12px] lg:text-[18px]">Kesuksesanmu adalah kesuksesan kami. Momentum memberikan komitmen penuh melalui tim kami yang fast respone untuk menjawab semua permasalahanmu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- E: Service -->

    <!-- S: Testimonial -->
    <section id="testimonial" class="testimonial py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <h2 class="text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center">Let's Hear What Others Say</h2>
            <div class="grid lg:grid-cols-4 gap-[22px] lg:gap-[24px] lg:max-w-[unset] max-w-[282px]">
                <div class="p-[24px] bg-white rounded-[16px] flex flex-col gap-[22px]">
                    <div class="flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/testi-user-1.png' ?>" width="40" height="40" alt="user">
                        <span class="font-semibold text-[18px]">Mas Amri</span>
                    </div>
                    <p class="text-[12px] lg:text-[14px]">
                        5 tahun terakhir cuma fokus dapet leads dari offline. Setelah dibantu Momentum, sekarang bisa dapetin 100an leads per hari dari sosmed. mantap poll , super sekali!
                    </p>
                    <p class="text-[12px] lg:text-[14px]">
                        Nathin - Maklon Herbal
                    </p>
                </div>
                <div class="p-[24px] bg-white rounded-[16px] flex flex-col gap-[22px]">
                    <div class="flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/testi-user-2.png' ?>" width="40" height="40" alt="user">
                        <span class="font-semibold text-[18px]">Agustinus Setiawan</span>
                    </div>
                    <p class="text-[12px] lg:text-[14px]">
                        Branding Viva Wisata jadi lebih terarah, kami juga merasakan sekali kebanjiran leads. Thank you bgt buat Momentum, sukses terus! Dan yang pasti kita gak akan berhenti kerjasama, thankyou!!
                    </p>
                    <p class="text-[12px] lg:text-[14px]">
                        Viva Wisata - Tour & Travel
                    </p>
                </div>
                <div class="p-[24px] bg-white rounded-[16px] flex flex-col gap-[22px]">
                    <div class="flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/testi-user-3.png' ?>" width="40" height="40" alt="user">
                        <span class="font-semibold text-[18px]">Joko Suyanto</span>
                    </div>
                    <p class="text-[12px] lg:text-[14px]">
                        5 tahun terakhir cuma fokus dapet leads dari offline. Setelah dibantu Momentum, sekarang bisa dapetin 100an leads per hari dari sosmed. mantap poll , super sekali!
                    </p>
                    <p class="text-[12px] lg:text-[14px]">
                        Faesthetic - Skincare
                    </p>
                </div>
                <div class="p-[24px] bg-white rounded-[16px] flex flex-col gap-[22px]">
                    <div class="flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/testi-user-4.png' ?>" width="40" height="40" alt="user">
                        <span class="font-semibold text-[18px]">Joko Suyanto</span>
                    </div>
                    <p class="text-[12px] lg:text-[14px]">
                        5 tahun terakhir cuma fokus dapet leads dari offline. Setelah dibantu Momentum, sekarang bisa dapetin 100an leads per hari dari sosmed. mantap poll , super sekali!
                    </p>
                    <p class="text-[12px] lg:text-[14px]">
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
    <section id="cta" class="cta py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <div class="bg-[#F5DF4D] rounded-[24px] grid lg:grid-cols-[600px,1fr] gap-[32px] lg:gap-[37px] w-full p-[24px] lg:pt-0 pb-0 lg:px-[76px]">
                <div class="flex flex-col items-start gap-[22px] lg:gap-[37px] lg:py-14">
                    <h2 class="text-[22px] lg:text-[40px] font-bold font-heading">Ready to Build Your Top of Mind
                        Brand Through Social Media?</h2>
                    <a href="" target="_blank" class="btn truncate select-none py-2 lg:py-3 px-3 lg:px-4 text-[12px] lg:text-[18px] font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
                        <span class="flex items-center justify-center gap-2 lg:gap-3">
                            Konsultasi dengan Expert Team Kami
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-call-white.png' ?>" alt="call" width="28" height="28" class="w-[16px] lg:w-[28px]">
                        </span>
                    </a>
                </div>
                <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/cta.png' ?>)] bg-contain bg-bottom bg-no-repeat aspect-[264/165] lg:aspect-[unset]">

                </div>
            </div>
        </div>
    </section>
    <!-- E: Call to Action -->

    <!-- S: Digital Service -->
    <section id="digital-service" class="digital-service py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <h2 class="text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center">Our Digital Services</h2>
            <div class="grid lg:grid-cols-3 gap-[24px] w-full">
                <div class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/digital-service-1.png' ?>)] w-full bg-cover bg-center aspect-[324/220]"></div>
                    <div class="p-[20px] lg:p-[24px] text-center font-bold text-[16px] lg:text-[24px]">
                        Organic Special Media
                    </div>
                </div>
                <div class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/digital-service-2.png' ?>)] w-full bg-cover bg-center aspect-[324/220]"></div>
                    <div class="p-[20px] lg:p-[24px] text-center font-bold text-[16px] lg:text-[24px]">
                        Paid (PPC) Social Media
                    </div>
                </div>
                <div class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/digital-service-3.png' ?>)] w-full bg-cover bg-center aspect-[324/220]"></div>
                    <div class="p-[20px] lg:p-[24px] text-center font-bold text-[16px] lg:text-[24px]">
                        SEO, SEM & E-Commerce
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- E: Digital Service -->

    <!-- S: Portfolio -->
    <section id="portfolio" class="portfolio py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <h2 class="text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center">Our Proud Works</h2>
            <div class="grid lg:grid-cols-3 gap-[24px] w-full">
                <?php
                 $portfolios = [
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
                 foreach($portfolios as $i => $porto):
                 ?>
                <div class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                    <div class="py-3 px-4 flex items-center gap-3">
                        <img src="<?= get_stylesheet_directory_uri() . '/img/porto-logo-'. ($i+1) .'.png' ?>" alt="logo" width="32" height="32 ">
                        <span class="font-semibold text-[16px] lg:text-[18px]"><?= $porto ?></span>
                    </div>
                    <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/porto-poster-'. ($i+1) .'.png' ?>)] w-full bg-cover bg-center aspect-[1/1]"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- E: Portfolio -->

    <!-- S: QA -->
    <section id="qa" class="qa py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <h2 class="text-center text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center">Got Questions? Look No Further!</h2>
            <p class="text-center text-[14px] lg:text-[22px]">It's natural to have some questions. Here are some we generally get.</p>
            <div class="flex flex-col gap-[21px] w-full">

                <div class="accordion">
                    <input id="qa-1" type="radio" name="qa" class="peer absolute pointer-events-none opacity-0 input-qa">
                    <label for="qa-1" class="lg:py-3 lg:px-7 py-3 px-4 bg-white transition duration-200 peer-checked-lg:rounded-[24px] lg:rounded-[30px] rounded-[8px] border border-[#3A3A3A] flex flex-col w-full cursor-pointer select-none">
                        <span class="flex items-center justify-between w-full">
                            <p class="text-[12px] lg:text-[20px] font-bold">Apa yang membedakan Momentum dari Agensi Social Media Management lainnya?</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-chevron-down.png' ?>" alt="icon chevron down" width="32" height="32" class="transition duration-200 lg:w-[32px] lg:h-[32px] w-[24px] h-[24px]">
                        </span>
                        <span class="accordion-content pt-2 lg:pt-4 text-[12px] lg:text-[16px]">
                            Kami bukan advertising atau social media agency yang berfokus membuat konten, mengejar likes atau followers saja. Fokus kami adalah mengubah social media kamu menjadi lead generator machine dan membangun komunitas untuk brand perusahaanmu.
                        </span>
                    </label>
                </div>

                <div class="accordion">
                    <input id="qa-2" type="radio" name="qa" class="peer absolute pointer-events-none opacity-0 input-qa">
                    <label for="qa-2" class="lg:py-3 lg:px-7 py-3 px-4 bg-white transition duration-200 peer-checked-lg:rounded-[24px] lg:rounded-[30px] rounded-[8px] border border-[#3A3A3A] flex flex-col w-full cursor-pointer select-none">
                        <span class="flex items-center justify-between w-full">
                            <p class="text-[12px] lg:text-[20px] font-bold">Apa saja yang termasuk dalam layanan Social Media Management Momentum?</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-chevron-down.png' ?>" alt="icon chevron down" width="32" height="32" class="transition duration-200 lg:w-[32px] lg:h-[32px] w-[24px] h-[24px]">
                        </span>
                        <span class="accordion-content pt-2 lg:pt-4 text-[12px] lg:text-[16px]">
                            Semua projek Social Media Management di Momentum dimulai dari Research (internal, target market, kompetitor, dan industri), sebelum akhirnya dilanjutkan dengan menentukan Target Market utamamu. Setelah itu, Momentum akan membuat Brand Campaign dan menentukan channel sebelum melanjutkan ke Media Buying untuk memastikan keefektifan budget digital marketing-mu.
                        </span>
                    </label>
                </div>

                <div class="accordion">
                    <input id="qa-3" type="radio" name="qa" class="peer absolute pointer-events-none opacity-0 input-qa">
                    <label for="qa-3" class="lg:py-3 lg:px-7 py-3 px-4 bg-white transition duration-200 peer-checked-lg:rounded-[24px] lg:rounded-[30px] rounded-[8px] border border-[#3A3A3A] flex flex-col w-full cursor-pointer select-none">
                        <span class="flex items-center justify-between w-full">
                            <p class="text-[12px] lg:text-[20px] font-bold">Berapa lama projek Social Media Manegement di Momentum berlangsung?</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-chevron-down.png' ?>" alt="icon chevron down" width="32" height="32" class="transition duration-200 lg:w-[32px] lg:h-[32px] w-[24px] h-[24px]">
                        </span>
                        <span class="accordion-content pt-2 lg:pt-4 text-[12px] lg:text-[16px]">
                            Waktu yang dibutuhkan untuk melihat keberhasilan Social Media Manegement tidak instan, terlebih jika ingin membangun komunitas yang aktif. Momentum menerapkan sistem management selama 6 hingga 12 bulan untuk mendapatkan hasil yang maksimal.
                        </span>
                    </label>
                </div>

                <div class="accordion">
                    <input id="qa-4" type="radio" name="qa" class="peer absolute pointer-events-none opacity-0 input-qa">
                    <label for="qa-4" class="lg:py-3 lg:px-7 py-3 px-4 bg-white transition duration-200 peer-checked-lg:rounded-[24px] lg:rounded-[30px] rounded-[8px] border border-[#3A3A3A] flex flex-col w-full cursor-pointer select-none">
                        <span class="flex items-center justify-between w-full">
                            <p class="text-[12px] lg:text-[20px] font-bold">Industri apa yang menjadi spesialisasi dari Momentum?</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-chevron-down.png' ?>" alt="icon chevron down" width="32" height="32" class="transition duration-200 lg:w-[32px] lg:h-[32px] w-[24px] h-[24px]">
                        </span>
                        <span class="accordion-content pt-2 lg:pt-4 text-[12px] lg:text-[16px]">
                            Selama lebih dari 7 tahun berdiri, kami telah berhasil membantu ratusan Perusahaan, yang kebanyakan berada di industri properti, teknologi, banking & finance, healthcare, edukasi, wellness & beauty, retail dan bisnis lainnya.
                        </span>
                    </label>
                </div>

                <div class="accordion">
                    <input id="qa-5" type="radio" name="qa" class="peer absolute pointer-events-none opacity-0 input-qa">
                    <label for="qa-5" class="lg:py-3 lg:px-7 py-3 px-4 bg-white transition duration-200 peer-checked-lg:rounded-[24px] lg:rounded-[30px] rounded-[8px] border border-[#3A3A3A] flex flex-col w-full cursor-pointer select-none">
                        <span class="flex items-center justify-between w-full">
                            <p class="text-[12px] lg:text-[20px] font-bold">Berapakah estimasi harga yang harus kami keluarkan?</p>
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-chevron-down.png' ?>" alt="icon chevron down" width="32" height="32" class="transition duration-200 lg:w-[32px] lg:h-[32px] w-[24px] h-[24px]">
                        </span>
                        <span class="accordion-content pt-2 lg:pt-4 text-[12px] lg:text-[16px]">
                            Investment value sangat bergantung pada kompleksitas projek dan goal yang ingin dicapai. Kami menyediakan beberapa paket Social Media Management dan juga projek yang bisa dikustom tergantung dengan kebutuhan bisnismu. Untuk lebih jelasnya silahkan hubungi kami di sini.
                        </span>
                    </label>
                </div>

            </div>
        </div>
    </section>
    <!-- E: QA -->

    <!-- S: Call to Action Bottom -->
    <section id="cta-bottom" class="cta-bottom py-[44px] lg:py-[80px] relative">
        <div class="absolute pointer-events-none bg-[#3A3A3A] h-[50%] w-full bottom-0 left-0 z-[0] translate-y-[2px]"></div>
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center relative z-[1]">
            <div class="bg-[#F5DF4D] rounded-[24px] grid lg:grid-cols-[600px,1fr] gap-[32px] lg:gap-[37px] w-full p-[24px] pb-0 lg:px-[76px]">
                <div class="flex flex-col items-start gap-[22px] lg:gap-[37px] lg:py-14">
                    <h2 class="text-[22px] lg:text-[40px] font-bold font-heading">Ready to Build Your Top of Mind
                        Brand Through Social Media?</h2>
                    <a href="" target="_blank" class="btn truncate select-none py-2 lg:py-3 px-3 lg:px-4 text-[12px] lg:text-[18px] font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
                        <span class="flex items-center justify-center gap-2 lg:gap-3">
                            Konsultasi dengan Expert Team Kami
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-call-white.png' ?>" alt="call" width="28" height="28" class="w-[16px] lg:w-[28px]">
                        </span>
                    </a>
                </div>
                <div class="bg-[url(<?= get_stylesheet_directory_uri() . '/img/cta.png' ?>)] bg-contain bg-bottom bg-no-repeat aspect-[264/165] lg:aspect-[unset]">

                </div>
            </div>
        </div>
    </section>
    <!-- E: Call to Action Bottom -->

</main>

<!-- S: Footer -->
<footer id="footer" class="footer py-[44px] lg:py-[80px] bg-[#3A3A3A] text-white">
    <div class="container px-6 sm:px-8 lg:px-8 max-w-[1200px] mx-auto flex flex-col gap-8 lg:gap-32 lg:items-center">
        <div class="flex flex-col gap-8 lg:gap-12 w-full">
            <img src="<?= get_stylesheet_directory_uri() . '/img/logo-long-white.png' ?>" alt="logo" width="240" height="45" class="lg:w-[240px] w-[120px]">
            <div class="flex flex-col gap-8 lg:flex-row justify-between w-full">
                <div class="text-[10px] lg:text-[14px] whitespace-pre-line max-w-[560px]">PT Momentum Kreasi Indonesia

                    Momentum adalah konsultan dan agensi Social Media Management yang membantu perusahaanmu membuat Profitable Brand & Digital Strategy yang kuat dan unik.

                    Fokus kami adalah membuat perusahaanmu menjadi THE Top-of-Mind Brand, dan pastinya meningkatkan brand awareness, engagement serta mengembangkan komunitas Brand-mu.</div>
                <div class="text-[10px] lg:text-[14px] whitespace-pre-line max-w-[172px]">Consult With Us:

                    P. (6221) 2228-1759
                    M. (6281) 2300-97-323
                    E. hello@buildmomentum.id

                    Rukan Citta Graha, Blok 1J
                    Kebon Jeruk, Jakarta 11520</div>
            </div>
        </div>
        <p class="text-[8px] lg:text-[12px]">© Copyright 2024 MOMENTUM, All Rights Reserved.</p>
    </div>
</footer>
<!-- E: Footer -->

<?php wp_footer() ?>
</body>
</html>