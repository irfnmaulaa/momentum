<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= get_bloginfo('name') ?></title>
    <meta name="description" content="Momentum adalah konsultan dan agensi Social Media Management yang membantu perusahaanmu membuat Profitable Brand & Digital Strategy yang kuat dan unik. Fokus kami adalah membuat perusahaanmu menjadi THE Top-of-Mind Brand, dan pastinya meningkatkan brand awareness, engagement serta mengembangkan komunitas Brand-mu.">
    <meta name="keywords" content="momentum,id">
    <meta name="author" content="Ahmad Irfan Maulana">

    <!-- Theme Color -->
    <meta name="theme-color" content="#FFFFFF">

    <!-- Favicon -->
    <link rel="icon" href="<?= get_site_icon_url() ?>" type="image/png">

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="<?= site_url() ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= get_bloginfo('name') ?>">
    <meta property="og:description" content="Momentum adalah konsultan dan agensi Social Media Management yang membantu perusahaanmu membuat Profitable Brand & Digital Strategy yang kuat dan unik. Fokus kami adalah membuat perusahaanmu menjadi THE Top-of-Mind Brand, dan pastinya meningkatkan brand awareness, engagement serta mengembangkan komunitas Brand-mu.">
    <meta property="og:image" content="<?= get_template_directory_uri() . '/img/momentum.png' ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= site_url() ?>">
    <meta property="twitter:title" content="<?= get_bloginfo('name') ?>">
    <meta property="twitter:description" content="Momentum adalah konsultan dan agensi Social Media Management yang membantu perusahaanmu membuat Profitable Brand & Digital Strategy yang kuat dan unik. Fokus kami adalah membuat perusahaanmu menjadi THE Top-of-Mind Brand, dan pastinya meningkatkan brand awareness, engagement serta mengembangkan komunitas Brand-mu.">
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
                                <a href="<?= $menu->url ?>" class="navbar-link transition duration-100 font-semibold hover:text-[#000000]">
                                    <?= $menu->title ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div class="lg:hidden peer-checked:hidden flex items-center justify-end flex-1 px-3">
                <a href="<?= $menu->url ?>" target="_blank" class="btn truncate navbar-link py-3 px-4 font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
                    <span class="flex items-center justify-center gap-2 lg:gap-3">
                        Consult With Us <i class="fa fa-whatsapp text-[23px] lg:text-[26px]"></i>
                    </span>
                </a>
            </div>
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

                    <?php if($rolling_text = get_field('rolling_text', get_the_ID())): ?>
                    <div class="rolling-text-container relative overflow-hidden">
                        <?php foreach(explode('--', $rolling_text) as $i => $text): ?>
                            <?php if($i == 0): ?>
                                <h2 class="rolling-text text-[24px] leading-[30px] lg:leading-[unset] lg:text-[40px] font-bold lg:whitespace-normal whitespace-pre-line"><?= $text ?></h2>
                            <?php else: ?>
                                <h2 class="rolling-text absolute top-0 translate-y-[-100%] text-[24px] leading-[30px] lg:leading-[unset] lg:text-[40px] font-bold lg:whitespace-normal whitespace-pre-line"><?= $text ?></h2>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <div class="w-full h-[2px] lg:h-[3px] bg-[#3A3A3A] mb-3"></div>

                    <?php if($title = get_field('title', get_the_ID())): ?>
                    <h3 class="text-[24px] leading-[30px] lg:leading-[unset] lg:text-[40px] font-bold mb-6"><?= $title ?></h3>
                    <?php endif; ?>

                    <?php if($items = get_field('items', get_the_ID())): ?>
                    <ul class="flex flex-col gap-2">
                        <?php foreach(explode("\n", $items) as $item): ?>
                        <li class="flex items-start lg:items-center gap-2 lg:gap-3 text-[12px] lg:text-[18px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-check.png' ?>" alt="icon check" width="16" height="16">
                            <?= $item ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>

                </div>

                <?php if($counter = get_field('header_counter', get_the_ID())): ?>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-[16px] lg:gap-[36px]">
                        <div class="flex items-center gap-1 lg:gap-2 text-[12px] lg:text-[20px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-like.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="icon">
                            <span class="counter" data-duration="2000">
                                <?= $counter['like_count'] ?>
                            </span>
                        </div>
                        <div class="flex items-center gap-1 lg:gap-2 text-[12px] lg:text-[20px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-comment.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="icon">
                            <span class="counter" data-duration="2100">
                                <?= $counter['comment_count'] ?>
                            </span>
                        </div>
                        <div class="flex items-center gap-1 lg:gap-2 text-[12px] lg:text-[20px] font-semibold">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/icon-share.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="icon">
                            <span class="counter" data-duration="2200">
                                <?= $counter['shared_count'] ?>
                            </span>
                        </div>
                    </div>

                    <img src="<?= get_stylesheet_directory_uri() . '/img/icon-bookmark.png' ?>" class="w-[20px] lg:w-[32px]" width="32" height="32" alt="icon">
                </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- E: Hero -->

    <?php if($partners = get_field('partners', get_the_ID())): ?>
    <!-- S: Partners -->
    <section id="partners" class="partners w-full py-[32px] lg:py-[50px] bg-[#3A3A3A]">
        <div class="max-w-[2400px] mx-auto overflow-hidden">
            <div class="marquee partners-wrap flex items-center gap-8 lg:gap-16 w-[200%] overflow-hidden">
                <?php foreach(range(1, 4) as $i): ?>
                    <div class="partner-logos flex items-center gap-8 lg:gap-16 flex-none">
                        <?php foreach($partners as $partner): ?>
                            <img src="<?= get_field('partner_logo', $partner->ID) ?>" alt="<?= $partner->post_title ?>" class="max-h-[25px] lg:max-h-[40px]">
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- E: Partners -->
    <?php endif; ?>

    <!-- S: About -->
    <section id="about" class="about bg-[#F5DF4D] py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[45px]">
            <div class="grid lg:grid-cols-[1fr,640px] rounded-[16px] overflow-hidden bg-white" data-aos="fade-up">
                <?php if($about_image = get_field('about_image', get_the_ID())): ?>
                <div class="bg-[url(<?= $about_image ?>)] bg-cover bg-center aspect-[312/208] lg:aspect-[unset]"></div>
                <?php endif; ?>
                <div class="p-[24px] lg:p-[48px] flex flex-col gap-[20px] lg:gap-[36px] items-start">

                    <?php if($about_title = get_field('about_title', get_the_ID())): ?>
                    <h2 data-aos="fade-up" class="text-[22px] lg:text-[36px] font-heading font-bold"><?= $about_title ?></h2>
                    <?php endif; ?>

                    <div data-aos="fade-up" class="flex flex-col gap-[16px] font-semibold text-[12px] lg:text-[18px]">
                        <?php if($about_description = get_field('about_description', get_the_ID())): ?>
                            <p><?= $about_description ?></p>
                        <?php endif; ?>
                        <?php if($about_items = get_field('about_items', get_the_ID())): ?>
                            <ul class="flex flex-col gap-2">
                                <?php foreach(explode("\n", $about_items) as $item): ?>
                                    <li class="flex items-start lg:items-center gap-2 lg:gap-3">
                                        <img src="<?= get_stylesheet_directory_uri() . '/img/icon-check.png' ?>" alt="icon check" width="16" height="16">
                                        <?= $item ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <?php if($about_cta = get_field('about_cta', get_the_ID())): ?>
                    <a data-aos="zoom-in-right" href="<?= $about_cta['url'] ?>" target="<?= $about_cta['target'] ?>" class="btn truncate select-none py-2 lg:py-3 px-3 lg:px-4 text-[12px] lg:text-[18px] font-semibold rounded-[30px] border-[#3A3A3A] border inline-block transition duration-400 hover:bg-[#3A3A3A] hover:text-white">
                        <span class="flex items-center justify-center gap-2 lg:gap-3">
                            <?= $about_cta['title'] ?>
                            <i class="fa fa-whatsapp text-[23px] lg:text-[26px]"></i>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <?php if($counter = get_field('about_counter', get_the_ID())): ?>
            <div class="grid grid-cols-[1fr,1fr,1fr]">
                <?php if(!empty($counter['counter_1'])): ?>
                    <div class="flex flex-col lg:flex-row items-center justify-center gap-2 lg:gap-7 border-r-[2px] border-[#3A3A3A]">
                        <div class="text-[30px] lg:text-[64px] font-bold leading-[1]"><span class="counter" data-duration="1500"><?= $counter['counter_1']['counter_number'] ?></span><?= $counter['counter_1']['counter_unit'] ?></div>
                        <div class="whitespace-pre-line text-[12px] lg:text-[20px] font-bold leading-[14px] lg:leading-[28px]"><?= $counter['counter_1']['counter_caption'] ?></div>
                    </div>
                <?php endif; ?>

                <?php if(!empty($counter['counter_2'])): ?>
                    <div class="flex flex-col lg:flex-row items-center justify-center gap-2 lg:gap-7 border-r-[2px] border-[#3A3A3A]">
                        <div class="text-[30px] lg:text-[64px] font-bold leading-[1]"><span class="counter" data-duration="1700"><?= $counter['counter_2']['counter_number'] ?></span><?= $counter['counter_2']['counter_unit'] ?></div>
                        <div class="whitespace-pre-line text-[12px] lg:text-[20px] font-bold leading-[14px] lg:leading-[28px]"><?= $counter['counter_2']['counter_caption'] ?></div>
                    </div>
                <?php endif; ?>

                <?php if(!empty($counter['counter_3'])): ?>
                    <div class="flex flex-col lg:flex-row items-center justify-center gap-2 lg:gap-7">
                        <div class="text-[30px] lg:text-[64px] font-bold leading-[1]"><span class="counter" data-duration="1900"><?= $counter['counter_3']['counter_number'] ?></span><?= $counter['counter_3']['counter_unit'] ?></div>
                        <div class="whitespace-pre-line text-[12px] lg:text-[20px] font-bold leading-[14px] lg:leading-[28px]"><?= $counter['counter_3']['counter_caption'] ?></div>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

        </div>
    </section>
    <!-- E: About -->

    <!-- S: Service -->
    <section id="service" class="service mt-[68px] py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <?php if($title = get_field('our_promise_title', get_the_ID())): ?>
            <h2 data-aos="fade-up" class="text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center"><?= $title ?></h2>
            <?php endif; ?>

            <div class="grid lg:grid-cols-2 gap-[22px] lg:gap-[37px] w-full">
                <?php foreach(range(1, 4) as $i): ?>
                <?php if($our_promise = get_field('our_promise_' . $i, get_the_ID())): ?>
                <div data-aos="<?= $i % 2 === 0 ? 'fade-up-left' : 'fade-up-right' ?>" class="grid grid-cols-[1fr,1fr] lg:grid-cols-[1fr,290px] rounded-[16px] overflow-hidden">
                    <div class="bg-[url(<?= $our_promise['image'] ?>)] bg-cover bg-center"></div>
                    <div class="p-[24px] lg:p-[37px] flex flex-col gap-[16px] bg-white items-start">
                        <h3 class="text-[12px] lg:text-[20px] font-bold"><?= $our_promise['title'] ?></h3>
                        <p class="text-[12px] lg:text-[18px]"><?= $our_promise['description'] ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- E: Service -->

    <!-- S: Testimonial -->
    <section id="testimonial" class="testimonial py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <?php if($title = get_field('testimonial_title', get_the_ID())): ?>
            <h2 data-aos="fade-up" class="text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center"><?= $title ?></h2>
            <?php endif; ?>

            <div class="grid lg:grid-cols-4 gap-[22px] lg:gap-[24px] lg:max-w-[unset] max-w-[282px]">
                <?php foreach(range(1, 4) as $i): ?>
                    <?php if($testimonial = get_field('testimonial_' . $i, get_the_ID())): ?>
                        <div data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>" class="p-[24px] bg-white rounded-[16px] flex flex-col gap-[22px]">
                            <div class="flex items-center gap-3">
                                <img src="<?= $testimonial['profile']['photo'] ?>" width="40" height="40" alt="user">
                                <span class="font-semibold text-[18px]"><?= $testimonial['profile']['name'] ?></span>
                            </div>
                            <p class="text-[12px] lg:text-[14px]"><?= $testimonial['description'] ?></p>
                            <p class="text-[12px] lg:text-[14px]"><?= $testimonial['project'] ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <?php if($testimonial_video = get_field('testimonial_video_desktop', get_the_ID())): ?>
            <div data-aos="zoom-in-up" class="testimonial-video max-w-[800px] relative hidden lg:block">
                <video src="<?= $testimonial_video['video'] ?>" class="testimonial-video-player w-full" controls></video>
                <div class="testimonial-video-btn absolute w-full h-full bg-black bg-[url(<?= $testimonial_video['poster'] ?>)] bg-contain bg-no-repeat bg-center left-0 top-0 flex items-center justify-center group cursor-pointer">
                    <div class="w-[50px] h-[50px] rounded-full border-2 border-white flex items-center justify-center group-hover:border-[#F5DF4D] transition duration-200 group-hover:scale-[1.2]">
                        <div class="w-[20px] h-[25px] translate-x-[10%] border-2 bg-white group-hover:bg-[#F5DF4D] group-hover:border-[#F5DF4D] transition duration-200" style="clip-path: polygon(100% 50%, 0 0, 0 100%);"></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if($testimonial_video = get_field('testimonial_video_mobile', get_the_ID())): ?>
            <div data-aos="zoom-in-up" class="testimonial-video max-w-[600px] relative block lg:hidden">
                <video src="<?= $testimonial_video['video'] ?>" class="testimonial-video-player w-full" controls></video>
                <div class="testimonial-video-btn absolute w-full h-full bg-black bg-[url(<?= $testimonial_video['poster'] ?>)] bg-contain bg-no-repeat bg-center left-0 top-0 flex items-center justify-center group cursor-pointer">
                    <div class="w-[50px] h-[50px] rounded-full border-2 border-white flex items-center justify-center group-hover:border-[#F5DF4D] transition duration-200 group-hover:scale-[1.2]">
                        <div class="w-[20px] h-[25px] translate-x-[10%] border-2 bg-white group-hover:bg-[#F5DF4D] group-hover:border-[#F5DF4D] transition duration-200" style="clip-path: polygon(100% 50%, 0 0, 0 100%);"></div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- E: Testimonial -->

    <!-- S: Call to Action -->
    <section id="cta" class="cta py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <div data-aos="fade-up" class="bg-[#F5DF4D] rounded-[24px] grid lg:grid-cols-[600px,1fr] gap-[32px] lg:gap-[37px] w-full p-[24px] lg:pt-0 pb-0 lg:px-[76px]">
                <div class="flex flex-col items-start gap-[22px] lg:gap-[37px] lg:py-14">
                    <?php if($title = get_field('cta_top_title', get_the_ID())): ?>
                    <h2 class="text-[22px] lg:text-[40px] font-bold font-heading"><?= $title ?></h2>
                    <?php endif; ?>

                    <?php if($link = get_field('cta_top_link', get_the_ID())): ?>
                    <a data-aos="zoom-in-right" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>" class="btn truncate select-none py-2 lg:py-3 px-3 lg:px-4 text-[12px] lg:text-[18px] font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
                        <span class="flex items-center justify-center gap-2 lg:gap-3">
                            <?= $link['title'] ?>
                            <i class="fa fa-whatsapp text-[23px] lg:text-[26px]"></i>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>
                <?php if($image = get_field('cta_top_image', get_the_ID())): ?>
                <div class="bg-[url(<?= $image ?>)] bg-contain bg-bottom bg-no-repeat aspect-[264/165] lg:aspect-[unset]"></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- E: Call to Action -->

    <!-- S: Digital Service -->
    <section id="digital-service" class="digital-service py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <?php if($title = get_field('digital_service_title', get_the_ID())): ?>
            <h2 data-aos="fade-up" class="text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center"><?= $title ?></h2>
            <?php endif; ?>

            <div class="grid lg:grid-cols-3 gap-[24px] w-full">
                <?php foreach(range(1, 4) as $i): ?>
                    <?php if($digital_service = get_field('digital_service_' . $i, get_the_ID())): ?>
                        <div data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>" class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                            <div class="bg-[url(<?= $digital_service['image'] ?>)] w-full bg-cover bg-center aspect-[324/220]"></div>
                            <div class="p-[20px] lg:p-[24px] text-center font-bold text-[16px] lg:text-[24px]">
                                <?= $digital_service['caption'] ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- E: Digital Service -->

    <!-- S: Portfolio -->
    <section id="portfolio" class="portfolio py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <?php if($title = get_field('portfolio_title', get_the_ID())): ?>
            <h2 data-aos="fade-up" class="text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center"><?= $title ?></h2>
            <?php endif; ?>

            <?php if($items = get_field('portfolio_items', get_the_ID())): ?>
                <div class="grid lg:grid-cols-3 gap-[24px] w-full">
                    <?php foreach($items as $i => $porto): ?>
                        <div data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 100 ?>" class="bg-white rounded-[8px] flex flex-col overflow-hidden">
                            <div class="py-3 px-4 flex items-center gap-3">
                                <img src="<?= get_field('brand', $porto->ID)['logo'] ?>" alt="logo" width="32" height="32 ">
                                <span class="font-semibold text-[16px] lg:text-[18px]"><?= get_field('brand', $porto->ID)['name'] ?></span>
                            </div>
                            <div class="bg-[url(<?= get_field('poster', $porto->ID) ?>)] w-full bg-cover bg-center aspect-[1/1]"></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- E: Portfolio -->

    <!-- S: QA -->
    <section id="qa" class="qa py-[44px] lg:py-[80px]">
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center">
            <?php if($title = get_field('qa_title', get_the_ID())): ?>
            <h2 data-aos="fade-up" class="text-center text-[22px] lg:text-[40px] font-bold font-heading whitespace-pre-line text-center"><?= $title ?></h2>
            <?php endif; ?>
            <?php if($description = get_field('qa_subtitle', get_the_ID())): ?>
            <p data-aos="fade-up" class="text-center text-[14px] lg:text-[22px]"><?= $description ?></p>
            <?php endif; ?>
            <?php if($questions = get_field('questions', get_the_ID())): ?>
                <div class="flex flex-col gap-[21px] w-full">

                    <?php foreach(explode("--", $questions) as $i => $question): ?>
                    <?php $explode = explode("-", trim($question)); ?>
                    <div data-aos="fade-up" class="accordion">
                        <input id="qa-<?= $i ?>" type="radio" name="qa" class="peer absolute pointer-events-none opacity-0 input-qa">
                        <label for="qa-<?= $i ?>" class="lg:py-3 lg:px-7 py-3 px-4 bg-white transition duration-200 peer-checked-lg:rounded-[24px] lg:rounded-[30px] rounded-[8px] border border-[#3A3A3A] flex flex-col w-full cursor-pointer select-none">
                            <span class="flex items-center justify-between w-full">
                                <p class="text-[12px] lg:text-[20px] font-bold"><?= $explode[0] ?></p>
                                <img src="<?= get_stylesheet_directory_uri() . '/img/icon-chevron-down.png' ?>" alt="icon chevron down" width="32" height="32" class="transition duration-200 lg:w-[32px] lg:h-[32px] w-[24px] h-[24px]">
                            </span>
                            <span class="accordion-content pt-2 lg:pt-4 text-[12px] lg:text-[16px]">
                                <?= $explode[1] ?>
                            </span>
                        </label>
                    </div>
                    <?php endforeach; ?>

                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- E: QA -->

    <!-- S: Call to Action Bottom -->
    <section id="cta-bottom" class="cta-bottom py-[44px] lg:py-[80px] relative">
        <div class="absolute pointer-events-none bg-[#3A3A3A] h-[50%] w-full bottom-0 left-0 z-[0] translate-y-[2px]"></div>
        <div class="container px-6 sm:px-8 lg:px-8 max-w-[420px] lg:max-w-[1200px] mx-auto flex flex-col gap-[32px] lg:gap-[52px] items-center relative z-[1]">
            <div data-aos="fade-up" class="bg-[#F5DF4D] rounded-[24px] grid lg:grid-cols-[600px,1fr] gap-[32px] lg:gap-[37px] w-full p-[24px] pb-0 lg:px-[76px]">
                <div class="flex flex-col items-start gap-[22px] lg:gap-[37px] lg:py-14">
                    <?php if($title = get_field('cta_bottom_title', get_the_ID())): ?>
                    <h2 class="text-[22px] lg:text-[40px] font-bold font-heading"><?= $title ?></h2>
                    <?php endif; ?>
                    <?php if($link = get_field('cta_bottom_link', get_the_ID())): ?>
                    <a data-aos="zoom-in-right" href="<?= $link['url'] ?>" target="<?= $link['target'] ?>" class="btn truncate select-none py-2 lg:py-3 px-3 lg:px-4 text-[12px] lg:text-[18px] font-semibold rounded-[30px] bg-[#3A3A3A] text-white inline-block">
                        <span class="flex items-center justify-center gap-2 lg:gap-3">
                            <?= $link['title'] ?>
                            <i class="fa fa-whatsapp text-[23px] lg:text-[26px]"></i>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>
                <?php if($image = get_field('cta_bottom_image', get_the_ID())): ?>
                    <div class="bg-[url(<?= $image ?>)] bg-contain bg-bottom bg-no-repeat aspect-[264/165] lg:aspect-[unset]"></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- E: Call to Action Bottom -->

</main>

<!-- S: Footer -->
<footer id="footer" class="footer py-[44px] lg:py-[80px] bg-[#3A3A3A] text-white">
    <div class="container px-6 sm:px-8 lg:px-8 max-w-[1200px] mx-auto flex flex-col gap-8 lg:gap-32 lg:items-center">
        <div class="flex flex-col gap-8 lg:gap-12 w-full">
            <?php if($footer_logo = get_field('footer_logo', get_the_ID())): ?>
            <img src="<?= $footer_logo ?>" alt="logo" width="240" height="45" class="lg:w-[240px] w-[120px]">
            <?php endif; ?>

            <div class="flex flex-col gap-8 lg:flex-row justify-between w-full">
                <?php if($footer_description = get_field('footer_description', get_the_ID())): ?>
                    <div class="text-[10px] lg:text-[14px] whitespace-pre-line max-w-[560px]"><?= $footer_description ?></div>
                <?php endif; ?>
                <?php if($footer_contact = get_field('footer_contact', get_the_ID())): ?>
                    <div class="text-[10px] lg:text-[14px] whitespace-pre-line max-w-[172px]"><?= $footer_contact ?></div>
                <?php endif; ?>
            </div>
        </div>
        <?php if($footer_copyright = get_field('footer_copyright', get_the_ID())): ?>
            <p class="text-[8px] lg:text-[12px]"><?= $footer_copyright ?></p>
        <?php endif; ?>
    </div>
</footer>
<!-- E: Footer -->

<?php wp_footer() ?>
</body>
</html>