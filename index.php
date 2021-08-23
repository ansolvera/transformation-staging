<?php
// require_once '../common/gtgmember/index.php';

// $version = filter_input(INPUT_GET, 'version');
// $form_id = '9af8bfcb85c3650fedbf00311911d828';

// if ($version == 'p') {
    // $form_id = '382852f2be4335c8f673ce9ea6c1d8a8';
// }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matthew Hussey Virtual Retreat</title>
    <link rel="shortcut icon" type="image/svg" href="static/img/favicon.svg">

    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="main.css">

    <!-- ALPINE JS -->
    <script src="https://unpkg.com/alpinejs" defer></script>

    <!-- EMBLA CAROUSEL -->
    <script src="https://unpkg.com/embla-carousel/embla-carousel.umd.js" defer></script>

    <?php // include_once("../common/includes/vwo-async-tracking.php"); ?>

</head>

<body>
    <?php // include_once("../common/includes/ga-tracking.php") ?>

    <!-- HEADER -->
    <header id="header" class="header shadow-2xl">
        <div class="container">
            <div id="header__top" class="flex-row justify-between items-center">
                <a id="header__brand" href="/">
                    <img src="static/img/mh-logo-white.svg" alt="Matthew Hussey logo">
                </a>
                <div id="countdown" class="is-hidden-for-small-screens">
                    <div class="text-center">
                        <p id="countdown__heading">Act Now - Registration Closes September 19th</p>
                    </div>
                    <div class="flex-row justify-center items-center">
                        <div class="countdown__wrapper flex-col justify-center items-center">
                            <p id="days" class="text-3xl">000</p>
                            <h3 id="dayslabel" class="text-xs text-center">Days</h3>
                        </div>
                        <div class="countdown__wrapper flex-col justify-center items-center">
                            <p id="hours" class="text-3xl">000</p>
                            <h3 id="hourslabel" class="text-xs text-center">Hours</h3>
                        </div>
                        <div class="countdown__wrapper flex-col justify-center items-center">
                            <p id="minutes" class="text-3xl">000</p>
                            <h3 id="minuteslabel" class="text-xs text-center">Minutes</h3>
                        </div>
                        <div class="countdown__wrapper flex-col justify-center items-center">
                            <p id="seconds" class="text-3xl">000</p>
                            <h3 id="secondslabel" class="text-xs text-center">Seconds</h3>
                        </div>
                    </div>
                </div>
                <a href="#book-now" class="btn is-small is-hidden-for-mobile">Book Now</a>
                <div id="hamburger" class="is-hidden-for-desktop" x-data="{ open: false }">
                    <div id="hamburger__icon" class="flex-col justify-center items-center" @click="open = true">
                        <img src="static/img/menu.svg" alt="Mobile menu icon" x-show="!open">
                        <img src="static/img/x-icon.svg" alt="Close icon" x-show="open">
                    </div>
                    <nav id="hamburger__menu" class="flex-col justify-start items-stretch" x-show="open" @click.away="open = false">
                        <a href="#expect" class="hamburger__link" @click="open = false">Why attend?</a>
                        <a href="#who" class="hamburger__link" @click="open = false">Who is this for?</a>
                        <a href="#lives" class="hamburger__link" @click="open = false">The lives we've changed</a>
                        <a href="#faq" class="hamburger__link" @click="open = false">FAQs</a>
                        <a href="#book-now" id="hamburger__cta" class="btn is-large" @click="open = false">Book Now</a>
                    </nav>
                </div>
            </div>
            <div id="header__bottom" class="is-hidden-for-mobile">
                <nav id="navigation" class="flex-row justify-center items-center">
                    <a href="#expect" class="navigation__link">Why attend?</a>
                    <a href="#who" class="navigation__link">Who is this for?</a>
                    <a href="#lives" class="navigation__link">The lives we've changed</a>
                    <a href="#faq" class="navigation__link">FAQs</a>
                </nav>
            </div>
        </div>
    </header>

    <main id="main">

        <!-- HERO SECTION -->
        <section id="hero" class="section">
            <h1 class="sr-only">Matthew Hussey Virtual Retreat</h1>
            <div id="hero__video-wrapper">
                <div class="flex-row justify-center items-center">
                    <div id="ribbon" class="flex-row justify-between items-center shadow-lg">
                        <img src="static/img/volume-icon.svg" alt="Volume icon" class="mr-16">
                        <p class="text-sm text-center mr-16"><u><strong>Click here</strong> to unmute the video</u></p>
                        <img id="close" src="static/img/x-icon.svg" alt="Close icon">
                    </div>
                </div>
                <div id="hero__video" class="shadow-2xl" style="padding:56.25% 0 0 0;position:relative;">
                    <iframe id="video" src="https://player.vimeo.com/video/565736228?badge=0&autopause=0player_id=0&autoplay=1&muted=1app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="MHVR Sizzle VSL_2.mp4"></iframe>
                </div>
                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>
        </section>

        <!-- PROOF SECTION -->
        <section id="proof" class="section py-80">
            <div class="container">
                <div class="grid-cols-6 gap-64 place-items-center">
                    <img id="netflix" src="static/img/netflix-logo.svg" alt="Netflix logo" class="proof__logo" loading="lazy">
                    <img id="insider" src="static/img/bi-logo.svg" alt="Business Insider logo" class="proof__logo" loading="lazy">
                    <img id="nyt" src="static/img/nyt-logo.svg" alt="New York Times logo" class="proof__logo is-hidden-for-mobile" loading="lazy">
                    <img id="nyt-alt" src="static/img/nyt-logo-alt.svg" alt="New York Times logo" class="proof__logo large is-hidden-for-desktop" loading="lazy">
                    <img id="gma" src="static/img/gma-logo.svg" alt="Good Morning America logo" class="proof__logo large" loading="lazy">
                    <img id="abc" src="static/img/abc-logo.svg" alt="ABC logo" class="proof__logo" loading="lazy">
                    <img id="iheartradio" src="static/img/iheartradio-logo.svg" alt="iHeartRadio logo" class="proof__logo large" loading="lazy">
                </div>
            </div>
        </section>

        <!-- TRANSFORM YOUR LIFE -->
        <section id="transform" class="section is-gray py-120">
            <div class="container">
                <article class="prose mb-80">
                    <h2 class="text-center mb-80">Transform your life and claim your happiness <span class="gold-text">now</span></h2>
                    <div class="prose__content">
                        <div id="transform__intro">
                            <div id="transform__intro__left" class="flex-col justify-center items-center">
                                <div id="polaroid">
                                    <picture>
                                        <source type="image/webp" srcset="static/img/matt_transform.webp"/>
                                        <img src="static/img/matt_transform.png" alt="A photograph of Matthew Hussey sitting outside" loading="lazy">
                                    </picture>
                                </div>
                            </div>
                            <div id="transform__intro__right">
                                <p>I’m Matthew Hussey, industry leading dating expert, world-renowned personal development coach and <em>New York Times</em> best-selling author.</p>
                            </div>
                        </div>
                        <p class="unstyled">For the past 14 years, I’ve coached millions from around the globe through my digital platforms and live events and in that time have developed a reputation for helping people achieve the life they’ve always dreamed of.</p>
                        <p>The pinnacle of my life's work is my <em>Live Retreat</em> program, the purpose of which is to take people through a fully immersive process to transform every aspect of not just their lifestyle, but their <span class="highlight"><strong>mindset, relationships, emotional well being</strong></span> and <span class="highlight"><strong>core confidence</strong></span> too.</p>
                        <p>There’s no denying that these unprecedented times have been something none of us could have ever planned for. It was the first time in over 10 years that we’ve had to postpone our <em>Live Retreat</em>, (and the <em>Retreats</em> mean the world to me and my team).</p>
                        <p>But instead of focusing on what we couldn’t do, we decided to figure out what we could do and adapt to the situation, even when the conditions weren’t perfect. And so, we created the <em>Matthew Hussey Virtual Retreat</em>.</p>
                        <p>This 3-day live stream event has been custom-designed by me and my incredible team to bring the same immersive magic of the <em>Live Retreat</em> straight to your computer in the comfort of your own home.</p>
                        <p>Being able to bring the <em>Virtual Retreat</em> to people all over the world during this time has been a truly special experience, and the feedback has been nothing short of incredible.</p>
                        <p>That's why we’re doing it AGAIN this September 24th - 26th and I want YOU to join me.</p>
                        <p>I’ve gone to great lengths to make this experience truly life-changing. During these 3 unique and powerful days, I’m going to hand you <span class="highlight"><strong>the same proven tools and life-changing processes</strong></span> from my <em>Live Retreat</em> that has transformed thousands of lives for over a decade, with <span class="highlight"><strong>content customized and contextualized for this unprecedented time,</strong></span> so you can transform your life, too.</p>
                        <p>I’ll take you through the life-changing process LIVE online, alongside my team and an incredible tribe who are on the same journey and are there to support you every step of the way.</p>
                    </div>
                    <div class="callout is-white my-80">
                        <h3 class="text-center mb-20">Begin creating the life you want, starting today</h3>
                        <p class="text-center">Just like it has for so many people like you, the <em>Matthew Hussey Virtual Retreat</em> can help you now, more than ever to...</p>
                        <hr/>
                        <ul class="checklist">
                            <li class="checklist__item">Create a new Blueprint for Happiness</li>
                            <li class="checklist__item">Reframe your losses, reclaim your strength and transform your story into something beautiful</li>
                            <li class="checklist__item">Design crystal clear goals to gain clarity around your direction and establish rituals that will set you up for an incredible future</li>
                            <li class="checklist__item">Build an incredible tribe of like-minded people all over the world to support your journey</li>
                            <li class="checklist__item">Discover the secret to being happy every day, regardless of your circumstances</li>
                            <li class="checklist__item">Claim your Core Confidence once and for all</li>
                            <li class="checklist__item">And, learn a process that you can take with you after the <em>Virtual Retreat</em> and replicate over and over, to get the same transformational results on your own.</li>
                        </ul>
                    </div>
                    <div class="callout is-dark mb-80">
                        <h3 class="text-center mb-20">Over the course of 3 immersive days together, you'll experience:</h3>
                        <hr/>
                        <ul class="checklist">
                            <li class="checklist__item"><strong>Daily LIVE coaching</strong> with me and my dad, Steve</li>
                            <li class="checklist__item"><strong>Life-changing visualizations</strong></li>
                            <li class="checklist__item"><strong>In-depth Q&A sessions</strong> with me</li>
                            <li class="checklist__item"><strong>Daily light workouts</strong> with professional fitness coaches to kickstart your health goals</li>
                            <li class="checklist__item"><strong>Powerful gratitude meditation sessions</strong> led by my brother, Stephen</li>
                            <li class="checklist__item"><strong>Nightly LIVE magical experiences and celebrations</strong></li>
                            <li class="checklist__item"><strong>All streamed live to your computer, in the comfort of your home.</strong></li>
                        </ul>
                        <hr/>
                        <h4 class="text-xl text-center uppercase mb-20">As well as:</h4>
                        <div id="callout__grid" class="grid-cols-2">
                            <div class="flex-col justify-start items-start">
                                <ul id="sub-checklist__left">
                                    <li class="sub-checklist__item">2 live preparation sessions prior to Sept. 24</li>
                                    <li class="sub-checklist__item">A very special welcome gift</li>
                                    <li class="sub-checklist__item">2 weeks of UNLIMITED access to the event recordings</li>
                                </ul>
                            </div>
                            <div class="flex-col justify-start items-start">
                                <ul id="sub-checklist__right">
                                    <li class="sub-checklist__item">A comprehensive "Cheat-Sheet" FILLED with notes from the event</li>
                                    <li class="sub-checklist__item">A private Facebook community where you will meet and keep FRIENDS for life from this experience</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p><em><strong><u>AND</u></strong> when you choose to attend one of our transformational LIVE events in person before December 31, 2022, the full cost of your Virtual Retreat will be put toward that ticket price (ask for more details).</em> </p>
                </article>
                <picture>
                    <source type="image/webp" srcset="static/img/collage.webp"/>
                    <img id="collage" src="static/img/collage-alt.png" alt="A collage of images taken from the previous Matthew Hussey Virtual Retreat." loading="lazy">
                </picture>
            </div>
        </section>

        <!-- READY TO LEVEL UP -->
        <section id="level" class="section py-120 is-dark-gray">
            <div id="level__overlay"></div>
            <div class="container">
                <article class="prose">
                    <h2 class="text-center mb-80">Ready to join us? Talk to a <em>retreat</em> specialist today!</h2>
                    <p class="text-center"><strong>Important:</strong> My team of Retreat Specialists has very limited availability this close to our event, and appointments are first-come, first-serve. <strong>Book your appointment today before registration closes September 19th.</strong></p>
                    <div class="flex-row justify-center items-center mb-80">
                        <a href="#book-now" class="btn is-large is-hidden">Register now</a>
                    </div>
                    <div class="grid-cols-2 gap-32">
                        <div class="testimonial flex-col justify-start items-start">
                            <div class="testimonial__bubble mb-40">
                                <p class="text-base">“There aren't enough words to describe what Matthew Hussey's Retreat did for me. I was at a point in my life where I felt stuck. Stuck inside my comfort zone and didn't know how to get out. Matthew’s Retreat <strong>didn't just change my life, it gave me life again</strong>.”</p>
                            </div>
                            <div class="flex-row justify-start items-center">
                                <div class="avatar shadow-md mr-16">
                                    <picture>
                                        <source type="image/webp" srcset="static/img/valerie.webp"/>
                                        <img src="static/img/valerie.png" alt="Photo of Valerie D." loading="lazy">
                                    </picture>
                                </div>
                                <div class="details text-base">
                                    <p>Valerie D.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial flex-col justify-start items-start">
                            <div class="testimonial__bubble mb-40">
                                <p class="text-base">“I attended the <em>Virtual Retreat</em> in March 2021 which has helped me to <strong>release past pain and look forward to my future</strong>. I feel more confident about communicating my needs in relationships and it has also helped me in trying to shed people-pleasing tendencies. I am able to reframe negative thoughts more quickly. I have more resilience in dating and more faith in abundance rather than adopting a scarcity mindset.”</p>
                            </div>
                            <div class="flex-row justify-start items-center">
                                <div class="avatar shadow-md mr-16">
                                    <picture>
                                        <source type="image/webp" srcset="static/img/navneet.webp"/>
                                        <img src="static/img/navneet.png" alt="Photo of Navneet J." loading="lazy">
                                    </picture>
                                </div>
                                <div class="details text-base">
                                    <p>Navneet J.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- WHAT CAN YOU EXPECT -->
        <section id="expect" class="section py-120">
            <div class="container">
                <article class="prose">
                    <h2 class="text-6xl text-center mb-80">What can you expect at the <em>MH Virtual Retreat</em>?</h2>
                    <div class="prose__content">
                        <p>This extraordinary 3-day event brings together extraordinary people from all over the world with a burning desire to transform their lives from the inside out.</p>
                        <p>I'll be personally guiding you through a process that ultimately gives you the two essential tools you can use to achieve absolutely everything you want.</p>
                        <ol>
                            <li>A Blueprint For Your Ideal Life</li>
                            <li>The Core Confidence to Take Action and Create It</li>
                        </ol>
                    </div>
                    <div class="callout is-beige my-80">
                        <h3 class="text-center">Here are the strategies we'll use to get you there:</h3>
                        <hr/>
                        <ul class="checklist">
                            <li class="checklist__item">We'll look at your long-held (and outdated) limiting beliefs about your identity and help you <strong>define who you want to be, starting NOW.</strong></li>
                            <li class="checklist__item">You'll complete a series of exercises designed by me to <strong>break through those barriers that have been holding you back</strong> from the things you deserve most, like love, success, friendship, health, happiness and self-acceptance.</li>
                            <li class="checklist__item">I'll show you how to <strong>silence your excuses once and for all</strong> and tap into your emotional energy to achieve your goals.</li>
                            <li class="checklist__item">You'll learn how to manage your emotions so you can <strong>banish overwhelm and procrastination,</strong> overcome fear, and get off the emotional rollercoaster. For good.</li>
                        </ul>
                    </div>
                    <div>
                        <p>And finally, I'll take you through a life-changing experience that will make you believe, once and for all, that you are beyond "good enough" — <span class="highlight"><strong>You are worthy of the best in life ...</strong></span></p>
                        <p>... even if you've never felt this way before, I will help you get to this place during our 3 days together.</p>
                        <p>No more looking outside for validation, no more telling yourself you'll be &quot;good enough&quot; once you hit that next milestone ... <span class="highlight"><strong>you will walk away from the <em>Virtual Retreat</em> with an unshakeable core confidence.</strong></span></p>
                    </div>

                </article>
            </div>
        </section>

        <!-- WHO IS THIS EVENT FOR -->
        <section id="who" class="section py-120 is-gray is-hidden-for-small-screens">
            <div class="container">
                <h2 class="text-center mb-80">Who is this event for?</h2>
                <div class="tabs grid-cols-2 gap-64" x-data="{ tab: 'one' }">
                    <div class="tabs__wrapper flex-col justify-start items-stetch">
                        <a href="#" :class="{ 'is-active': tab === 'one' }" class="tab" @click.prevent="tab = 'one'">
                            <div class="flex-col justify-start items-start">
                                <h3 class="text-xl">You're Stuck in a Rut / At a Crossroads / In Transition</h3>
                            </div>
                        </a>
                        <a href="#" :class="{ 'is-active': tab === 'two' }" class="tab" @click.prevent="tab = 'two'">
                            <div class="flex-col justify-start items-start">
                                <h3 class="text-xl">Your Love Life Isn't Where You Want It to Be</h3>
                            </div>
                        </a>
                        <a href="#" :class="{ 'is-active': tab === 'three' }" class="tab" @click.prevent="tab = 'three'">
                            <div class="flex-col justify-start items-start">
                                <h3 class="text-xl">You Want to Get More Intentional About Your Actions and Stop Coasting</h3>
                            </div>
                        </a>
                        <a href="#" :class="{ 'is-active': tab === 'four' }" class="tab" @click.prevent="tab = 'four'">
                            <div class="flex-col justify-start items-start">
                                <h3 class="text-xl">You Want to Develop True Core Confidence and Self-Esteem</h3>
                            </div>
                        </a>
                        <a href="#" :class="{ 'is-active': tab === 'five' }" class="tab" @click.prevent="tab = 'five'">
                            <div class="flex-col justify-start items-start">
                                <h3 class="text-xl">You’re Looking To Keep Momentum and Level Up</h3>
                            </div>
                        </a>
                    </div>
                    <div class="tab__content-wrapper">
                        <div class="tab__content" x-show="tab === 'one'">
                            <p class="text-lg">Do you feel like you’re in a rut right now? That doesn’t mean your life is bad, it just means you know you need a change, but there’s something preventing you from making it. Maybe you’re obsessing over which is the right direction. Or maybe you think you know but you’re afraid of ‘How do I do it?’ or ‘What’s the first step?’ If you want to change your life, this 3 day event is going to help you decide what you really want, determine your life’s direction and show you how to get out of your own way so that you can start living it.</p>
                        </div>
                        <div class="tab__content" x-show="tab === 'two'">
                            <p class="text-lg">Is your love life still not where you’d hoped it would be by now? If you feel like no amount of dating advice has changed your love life, there may be deeper things holding it back. There are three things that create an incredible love life. The first is our confidence, the second is how we communicate our value to somebody else and the third is building a life that someone wants to be a part of. Any one of these 3 things not being where it should be has the potential to derail our entire love life. If you want to learn how to master all 3, then the <em>Virtual Retreat</em> is something that you must be a part of.</p>
                        </div>
                        <div class="tab__content" x-show="tab === 'three'">
                            <p class="text-lg">Are you tired of going through the motions and living on auto-pilot? The <em>Virtual Retreat</em> is going to show you how to get back out there and design what you want to happen as a result of this chapter. We’ll be looking at the intention behind every aspect of your lifestyle. What goals you’re setting for yourself, what books you’re going to read, where you’re going to visit, what you’re going to create, what your spare time looks like, what you’re going to transform in terms of your own limiting beliefs, your own confidence, your own piece of mind. And more importantly, we’re going to be looking at WHY you want to make these new choices. Intention is so important and we’re going to spend those 3 days getting really clear about what we want to do in our lives over the next 12 months.</p>
                        </div>
                        <div class="tab__content" x-show="tab === 'four'">
                            <p class="text-lg">Did you think that with everything you've achieved in your life you’d feel more confident than you actually do by now? You see, people think confidence is this mysterious thing. It’s not. There is a practical roadmap to building confidence that involves how we talk to ourselves, how we forgive ourselves and building a life that makes us proud. If you want to learn this roadmap with me over 3 days of coaching immersion to transform your confidence once and for all, then the <em>Virtual Retreat</em> is for you.</p>
                        </div>
                        <div class="tab__content" x-show="tab === 'five'">
                            <p class="text-lg">Maybe you’re already doing great and just want to work on yourself to take things to the next level. There’s sometimes this perception that we should only be seeking out personal growth when things aren’t going the way we want, but the most successful people I’ve ever met are those who double down when things are going well. So if you’re just looking for some external influence and guidance to help you level up and keep your momentum going, then you’re going to love this program.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHO IS THIS EVENT FOR MOBILE -->
        <section id="who-mobile" class="section py-120 is-hidden-for-large-screens">
            <div class="container">
                <h2 class="text-center mb-80">Who is this event for?</h2>
                <div id="who-mobile__wrapper">
                    <div class="who" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>You're Stuck in a Rut / At a Crossroads / In Transition</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="who__answer" x-show.transition="open">Do you feel like you’re in a rut right now? That doesn’t mean your life is bad, it just means you know you need a change, but there’s something preventing you from making it. Maybe you’re obsessing over which is the right direction. Or maybe you think you know but you’re afraid of ‘How do I do it?’ or ‘What’s the first step?’ If you want to change your life, this 3 day event is going to help you decide what you really want, determine your life’s direction and show you how to get out of your own way so that you can start living it.</p>
                    </div>
                    <div class="who" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>Your Love Life Isn't Where You Want It to Be</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="who__answer" x-show.transition="open">Is your love life still not where you’d hoped it would be by now? If you feel like no amount of dating advice has changed your love life, there may be deeper things holding it back. There are three things that create an incredible love life. The first is our confidence, the second is how we communicate our value to somebody else and the third is building a life that someone wants to be a part of. Any one of these 3 things not being where it should be has the potential to derail our entire love life. If you want to learn how to master all 3, then the <em>Virtual Retreat</em> is something that you must be a part of.</p>
                    </div>
                    <div class="who" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>You Want to Get More Intentional About Your Actions and Stop Coasting</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="who__answer" x-show.transition="open">Are you tired of going through the motions and living on auto-pilot? The <em>Virtual Retreat</em> is going to show you how to get back out there and design what you want to happen as a result of this chapter. We’ll be looking at the intention behind every aspect of your lifestyle. What goals you’re setting for yourself, what books you’re going to read, where you’re going to visit, what you’re going to create, what your spare time looks like, what you’re going to transform in terms of your own limiting beliefs, your own confidence, your own piece of mind. And more importantly, we’re going to be looking at WHY you want to make these new choices. Intention is so important and we’re going to spend those 3 days getting really clear about what we want to do in our lives over the next 12 months.</p>
                    </div>
                    <div class="who" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>You Want to Develop True Core Confidence and Self-Esteem</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="who__answer" x-show.transition="open">Did you think that with everything you've achieved in your life you’d feel more confident than you actually do by now? You see, people think confidence is this mysterious thing. It’s not. There is a practical roadmap to building confidence that involves how we talk to ourselves, how we forgive ourselves and building a life that makes us proud. If you want to learn this roadmap with me over 3 days of coaching immersion to transform your confidence once and for all, then the <em>Virtual Retreat</em> is for you.</p>
                    </div>
                    <div class="who" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>You’re Looking To Keep Momentum and Level Up</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="who__answer" x-show.transition="open">Maybe you’re already doing great and just want to work on yourself to take things to the next level. There’s sometimes this perception that we should only be seeking out personal growth when things aren’t going the way we want, but the most successful people I’ve ever met are those who double down when things are going well. So if you’re just looking for some external influence and guidance to help you level up and keep your momentum going, then you’re going to love this program.</p>
                    </div>
            </div>
        </section>

        <!-- READY TO BOOK-->
        <section id="ready" class="section py-120 is-dark-gray">
            <div id="ready__overlay"></div>
            <div class="container">
                <div class="grid-cols-2 gap-64">
                    <div class="testimonial flex-col justify-start items-start">
                        <div class="testimonial__bubble mb-40">
                            <p class="text-base">“<strong>The Matthew Hussey Retreat was life changing for me.</strong> Matthew over delivers in a way which frankly should not be possible for one human being. His energy is unmatched and his passion for helping and inspiring people is palpable. Matt’s authenticity really shines through as he effortlessly delivers his material in a way which touches people deeply, whilst driving them towards growth and success. Over the next 12 months I was able to easily achieve the goals I had set on the Retreat and my resilience was so much stronger, which allowed me to navigate the challenges of the lockdown with ease. I am so grateful for this experience and <strong>would highly recommend the Matthew Hussey Retreat to everyone.</strong> Thank you so much!”</p>
                        </div>
                        <div class="flex-row justify-start items-center">
                            <div class="avatar shadow-md mr-16">
                                <picture>
                                    <source type="image/webp" srcset="static/img/gillian.webp"/>
                                    <img src="static/img/gillian.png" alt="Photo of Gillian E." loading="lazy">
                                </picture>
                            </div>
                            <div class="details text-base">
                                <p>Gillian E.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-col justify-center items-center">
                        <div class="cta flex-col justify-center items-center">
                            <h3 class="text-center mb-40">Ready to book?</h3>
                            <p class="text-center mb-40"><strong>Registration Closes September 19th.</strong> Book Your Session with a Retreat Specialist TODAY! <em>(Sessions with our Retreat Specialists are VERY limited this close to the event)</em></p>
                            <div class="countdown--small is-hidden-for-small-screens mb-40">
                                <div class="flex-row justify-center items-center">
                                    <div class="countdown__wrapper--small flex-col justify-center items-center">
                                        <p class="days text-2xl">000</p>
                                        <h3 id="dayslabel" class="text-xs text-center">Days</h3>
                                    </div>
                                    <div class="countdown__wrapper--small flex-col justify-center items-center">
                                        <p class="hours text-2xl">000</p>
                                        <h3 id="hourslabel" class="text-xs text-center">Hours</h3>
                                    </div>
                                    <div class="countdown__wrapper--small flex-col justify-center items-center">
                                        <p class="minutes text-2xl">000</p>
                                        <h3 id="minuteslabel" class="text-xs text-center">Minutes</h3>
                                    </div>
                                    <div class="countdown__wrapper--small flex-col justify-center items-center">
                                        <p class="seconds text-2xl">000</p>
                                        <h3 id="secondslabel" class="text-xs text-center">Seconds</h3>
                                    </div>
                                </div>
                            </div>
                            <a href="#book-now" class="btn is-large">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- THE LIVES WE'VE CHANGED -->
        <section id="lives" class="section py-120">
            <div class="container">
                <article class="prose mb-40">
                    <div class="prose__content">
                        <h2 class="text-center">The Lives We've Changed</h2>
                        <p class="text-center">The feedback from our last two <em>Virtual Retreats</em> has been nothing short of incredible. Hear what some of our recent graduates are saying about the program.</p>
                    </div>
                </article>
                <div class="flex-row justify-center items-center mb-80">
                    <a href="#book-now" class="btn is-large">Register Now</a>
                </div>

                <!-- CAROUSEL COMPONENT -->
                <div class="embla">
                    <div class="embla__viewport">
                        <div class="embla__container">
                            <div id="terry" class="embla__slide flex-col justify-center items-start">
                                <div class="thumbnail">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="https://player.vimeo.com/video/488219968?badge=0&autopause=0&player_id=0&app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Terry - Virtual Retreat Story"></iframe>
                                    </div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                                <p>"After my divorce from a 31 year marriage I was lost. Thanks to the <em>Virtual Retreat</em> I know that I have the tools to rebuild my life and to discover who I am and what I want out of it."</p>
                            </div>
                            <div id="liz" class="embla__slide flex-col justify-center items-star">
                                <div class="thumbnail">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="https://player.vimeo.com/video/488289804?badge=0&autopause=0&player_id=0&app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Liz - Virtual Retreat Story"></iframe>
                                    </div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                                <p>"I had gotten to a point in my life where I was stuck and I wasn't quite sure how to get myself out of it. Now a month on from the event I feel so much more confident and open to new opportunities."</p>
                            </div>
                            <div id="poppy" class="embla__slide">
                                <div class="thumbnail">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="https://player.vimeo.com/video/488318971?badge=0autopause=0player_id=0app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="I'm the Most Authentic Version of Me - Poppy's Virtual Retreat Story"></iframe>
                                    </div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                                <p>"I was struggling to get over my breakup. I was seeing a therapist, a breakup coach, spiritual healers, hypnotists and none of it worked. Now thanks to the <em>Virtual Retreat</em> I've never been happier. The 1% shifts have become big changes."</p>
                            </div>
                            <div id="noname1" class="embla__slide">
                                <div class="thumbnail">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="https://player.vimeo.com/video/488318767?badge=0autopause=0player_id=0app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="I Could Feel the Love - Virtual Retreat Story"></iframe>
                                    </div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                                <p>"It had everything I needed to hear. I was surprised how much I could feel the love and passion from the team and community. The love and support is really precious and the friendships that I've made out of this <em>Retreat</em> mean the world to me."</p>
                            </div>
                            <div id="anna" class="embla__slide">
                                <div class="thumbnail">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="https://player.vimeo.com/video/488317725?badge=0&autopause=0player_id=0app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="I'm a CEO Now - Anna's Virtual Retreat Story"></iframe>
                                    </div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                                <p>"What surprised me the most was how quickly it worked. It wasn't days later, I felt lighter, more confident and freer seconds after tasks on the <em>Virtual Retreat</em>. I feel more dynamic and fun again. It's been such a benefit to me and my family. Thank you so much."</p>
                            </div>
                            <div id="noname2" class="embla__slide">
                                <div class="thumbnail">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="https://player.vimeo.com/video/488762548?badge=0autopause=0player_id=0app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="It Felt Like I Was There - Virtual Retreat Story"></iframe>
                                    </div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                                <p>"The experience was beyond. Everything and more. It didn't even feel like a <em>Virtual Retreat</em>. It just felt like I was right there in the room with you. This opened up new doors for me that I'm not able to shut and I just love it. This was exactly what I needed."</p>
                            </div>
                            <div id="montage" class="embla__slide">
                                <div class="thumbnail">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="https://player.vimeo.com/video/381048387?badge=0autopause=0player_id=0app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="What Would You Tell Someone Considering a Retreat?"></iframe>
                                    </div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                                <p>"You will come out of here feeling like a new person. You’ll have a new lease of life, and you’ll want to go forwards. You’ll be excited to get back to your life and make changes."</p>
                            </div>
                        </div>
                        <div class="embla__btn-wrapper left flex-col justify-center items-center">
                            <button class="embla__prev flex-row justify-center items-center">
                                <img src="static/img/arrow-left.svg" alt="Left arrow" loading="lazy">
                            </button>
                        </div>
                        <div class="embla__btn-wrapper right flex-col justify-center items-center">
                            <button class="embla__next flex-row justify-center items-center">
                                <img src="static/img/arrow-right.svg" alt="Right arrow" loading="lazy">
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- BONUS -->
        <section id="bonus" class="section py-120 is-gray is-hidden">
            <div class="container">
                <h2 class="text-center mb-80">Special Limited-Time Bonuses</h2>
                <div class="callout is-white mb-80">
                    <div class="bonus__img-wrapper shadow-2xl mb-40">
                        <picture>
                            <source type="image/webp" srcset="static/img/matt_qa.webp"/>
                            <img src="static/img/matt_qa.jpg" alt="A photo of Matthew Hussey pointing at an easel pad" class="bonus__img">
                        </picture>
                    </div>
                    <div class="flex-col justify-start items-center">
                        <h4 class="mb-20">A Very Special Q&A With Matthew</h4>
                        <p>You won’t want to miss this opportunity to <span class="highlight"><strong>join Matthew LIVE</strong></span> where he will answer your questions and prepare you to make this <em>Virtual Retreat</em> the BEST experience you have ever taken part in! We take that seriously.</p>
                    </div>
                </div>
                <div class="callout is-white">
                    <div class="bonus__img-wrapper shadow-2xl mb-40">
                        <picture>
                            <source type="image/webp" srcset="static/img/matt_free.webp"/>
                            <img src="static/img/matt_free.jpg" alt="A photo of Matthew Hussey dancing with a DJ" class="bonus__img">
                        </picture>
                    </div>
                    <div class="flex-col justify-start items-center">
                        <h4 class="mb-20">Special Surprises Each Month Leading Up to the <em>Virtual Retreat</em></h4>
                        <p>Locking in your spot guarantees you access to ALL special bonuses released between now and the September event. We can't spoil the surprise yet, but we have some <span class="highlight"><strong>incredible</strong></span> stuff in store for you.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ARE YOU READY TO INVEST -->
        <section id="invest-section" class="section py-120 is-dark-gray">
            <div id="invest__overlay"></div>
            <div class="container">
                <div class="helmet prose mb-80">
                    <h2 class="text-6xl text-center mb-80">Are you ready to invest </br> in <span class="beige-text">yourself</span> this year?</h2>
                    <p>I have a hand-picked team of incredible <em>Retreat</em> Specialists who are dedicated to speaking on the phone with my <em>Retreat</em> applicants.</p>
                    <p>They are on hand to hear your story, talk you through the <em>Virtual Retreat</em> and answer any questions you may have. Even if you decide not to attend, I can promise that the call itself will be worthwhile to help you clarify your goals...</p>
                    <p><strong>But hurry,</strong> appointments are first-come, first-serve. This Virtual Retreat is already the BIGGEST event we've ever put on and my team have <em>very limited availability</em> this close to the event.</p> 
                    <p>If you're even remotely interested in joining our <em>Virtual Retreat</em> this year, <strong>I <em>highly</em> recommend locking in your free session with a <em>Retreat</em> Specialist TODAY while we still have spots.</strong></p>
                    <p class="text-center"><strong>Book Your Call Now - Event Registration Closes In:</strong></p>
                    <div class="countdown--small is-hidden-for-small-screens mb-40">
                        <div class="flex-row justify-center items-center">
                            <div class="countdown__wrapper flex-col justify-center items-center">
                                <p class="days text-3xl">000</p>
                                <h3 id="dayslabel" class="text-xs text-center">Days</h3>
                            </div>
                            <div class="countdown__wrapper flex-col justify-center items-center">
                                <p class="hours text-3xl">000</p>
                                <h3 id="hourslabel" class="text-xs text-center">Hours</h3>
                            </div>
                            <div class="countdown__wrapper flex-col justify-center items-center">
                                <p class="minutes text-3xl">000</p>
                                <h3 id="minuteslabel" class="text-xs text-center">Minutes</h3>
                            </div>
                            <div class="countdown__wrapper flex-col justify-center items-center">
                                <p class="seconds text-3xl">000</p>
                                <h3 id="secondslabel" class="text-xs text-center">Seconds</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORM COMPONENT -->
                <div id="book-now" class="callout is-transparent mb-80">
                    <h3 class="text-center mb-40">Book Your Free Session Now By Filling Out The Form Below</h3>
                    <form accept-charset="UTF-8" action="https://ee122.infusionsoft.com/app/form/process/<?php echo $form_id; ?>" id="inf_form_<?php echo $form_id; ?>" class="form infusion-form" method="POST">
                        <input name="inf_form_xid" type="hidden" value="<?php echo $form_id; ?>" />
                        <input name="inf_form_name" type="hidden" value="Virtual Retreat Optin Form&#a;(Round Robin)" />
                        <input name="infusionsoft_version" type="hidden" value="1.70.0.375214" />
                        <div class="infusion-field mb-10">
                            <input id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" required>
                        </div>
                        <div class="infusion-field mb-10">
                            <input id="inf_field_LastName" name="inf_field_LastName" placeholder="Last Name *" type="text" required>
                        </div>
                        <div class="infusion-field mb-10">
                            <input id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" required>
                        </div>
                        <div class="infusion-field mb-40">
                            <input id="inf_field_Phone1" name="inf_field_Phone1" placeholder="Phone Number *" type="text">
                        </div>
                        <div class="infusion-field">
                            <input id="inf_custom_utmadgroup" name="inf_custom_utmadgroup" placeholder="utm_adgroup" type="hidden"/>
                        </div>
                        <div class="infusion-field">
                            <input id="inf_custom_utmcampaign" name="inf_custom_utmcampaign" placeholder="utm_campaign" type="hidden"/>
                        </div>
                        <div class="infusion-field">
                            <input id="inf_custom_utmcontent" name="inf_custom_utmcontent" placeholder="utm_content" type="hidden"/>
                        </div>
                        <div class="infusion-field">
                            <input id="inf_custom_utmmedium" name="inf_custom_utmmedium" placeholder="utm_medium" type="hidden"/>
                        </div>
                        <div class="infusion-field">
                            <input id="inf_custom_utmsource" name="inf_custom_utmsource" placeholder="utm_source" type="hidden"/>
                        </div>
                        <div class="infusion-field">
                            <input id="inf_custom_utmterm" name="inf_custom_utmterm" placeholder="utm_term" type="hidden"/>
                        </div>
                        <div class="infusion-submit">
                            <button id="recaptcha_<?php echo $form_id; ?>" class="btn infusion-recaptcha" type="submit">Submit</button>
                        </div>
                        <?php //echo get_form_hidden_fields(); ?>
                    </form>
                </div>
                <div class="helmet mb-80">
                    <p class="text-center">*Appointments are first-come, first serve and limited availability this close to the event. If you don't book your call now, I can't promise my team will availability later. <strong>Lock in your appointment now before event registration closes September 19th.</strong>*</p>
                </div>
                <div class="grid-cols-2 gap-32">
                    <div class="testimonial flex-col justify-start items-start">
                        <div class="testimonial__bubble mb-40">
                            <p class="text-base">“After attending the <em>Virtual Retreat</em>... <strong>My life changed completely. I finally have the courage to follow my dreams,</strong> transform my life and live the life I was always dreaming about. It is a long journey but at least I know what I have to do now. In my love life, I'm still searching for 'THE ONE' but with everything I learned from Matthew I see dating from a completely new perspective."</p>
                        </div>
                        <div class="flex-row justify-start items-center">
                            <div class="avatar shadow-md mr-16">
                                <picture>
                                    <source type="image/webp" srcset="static/img/jana.webp"/>
                                    <img src="static/img/jana.png" alt="Photo of Jana A." loading="lazy">
                                </picture>
                            </div>
                            <div class="details text-base">
                                <p>Jana A.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial flex-col justify-start items-start">
                        <div class="testimonial__bubble mb-40">
                            <p class="text-base">"The Retreat is an experience that I would recommend to any person that is struggling with their self-image and self-esteem. It changed my belief system at a deep level and helped me to reframe old wounds. Three months after the Retreat I began new work in a top industry where I am developing, growing and feeling appreciated. <strong>If you want a change in your life and have a better relationship with yourself then I encourage you to apply for the program, because it is really worth it.</strong>"</p>
                        </div>
                        <div class="flex-row justify-start items-center">
                            <div class="avatar shadow-md mr-16">
                                <picture>
                                    <source type="image/webp" srcset="static/img/ana.webp"/>
                                    <img src="static/img/ana.png" alt="Photo of Ana C." loading="lazy">
                                </picture>
                            </div>
                            <div class="details text-base">
                                <p>Ana C.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- DO YOU STILL HAVE QUESTIONS -->
        <section id="faq" class="section py-120">
            <div class="container">
                <h2 class="text-center mb-80">Do you still have questions? </br> We have answers.</h2>
                <div id="faq__wrapper">
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>How do I access the <em>Matthew Hussey Virtual Retreat</em>?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">We’ll be using the platform Hopin for the event. You’ll receive an email with all the instructions to create your free account after confirming your place. All you need to do is join from a compatible browser (Chrome and Firefox work best) and make sure you have a stable internet connection available.</p>
                    </div>
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>Can I watch the <em>Virtual Retreat</em> on my phone?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">If you absolutely have to, then yes the livestream will work just fine on your phone, but we recommend you connect to the largest screen you have available in order to maximise the experience. TV is best, but a laptop or tablet would work well, too.</p>
                    </div>
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>Is the <em>Matthew Hussey Virtual Retreat</em> recorded?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">This 3-day event is streamed completely live, however the recordings will be made available for unlimited access for 2 weeks after. This gives you an incredible opportunity to repeat any part of the process, make more extensive notes and ensure you don’t miss a thing.</p>
                    </div>
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>Will there be an opportunity to ask questions during the <em>Virtual Retreat</em>?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">Not only will there be the opportunity to go live during the Q&A within each of the daily sessions, but you’ll also have the opportunity to feed in your questions via the live chat function, too.</p>
                    </div>
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>Can I interact with the other attendees?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">Of course. The <em>Matthew Hussey Virtual Retreat</em> brings together extraordinary people from all over the world with a burning desire to transform their lives from the inside out. We encourage you to connect during the program via the live chat function, but you’ll also be invited to join the private Facebook group so you can stay in touch with your new tribe and support one another in the months that follow.</p>
                    </div>
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>Is this a 'hands on' program?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">Absolutely, this program is designed to guide you through a proven process where you leave having put the work in. This isn’t about sitting back and simply listening, you’ll be actively participating in different journaling exercises, Q&A sessions and powerful visualizations. You’ll not just leave the event with a completely different mindset and confidence, but also an actionable blueprint for the next chapter of your life.</p>
                    </div>
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>Who will I be speaking to during my initial consultation?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">You’ll be speaking with one of my trusted <em>Retreat</em> Specialists. They are Emma, Michael and Lottie. These are some of my most trusted people and I can’t wait for you to speak with them. They’ve been working with me on this process for years and are on hand to hear your story. I promise, whatever the outcome, you’ll take value from the time you spend speaking with them.</p>
                    </div>
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>What is the purpose of the call?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">I’ve spent years refining this process and it’s designed to go deep (often deeper than people are even expecting) into the core of who you truly want to be, which is why I have my team take people through this immersive experience personally. They’ll be able to share more with you about the transformative process, answer your questions and help you decide if the program is a good fit for you.</p>
                    </div>
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>What will we be covering during my consultation with a <em>Retreat</em> Specialist?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">This is so much more than just a consultation, your call with one of my incredible specialist mentors will help you get clarity on your goals, the obstacles you want to overcome, and your direction for your future. This is your chance to open up and fully express your current frustrations and desires for change with my amazing <em>Retreat</em> Team.</p>
                    </div>
                    <div class="faq" x-data="{ open: false }" @click.prevent="open = !open">
                        <div class="flex-row justify-between items-center">
                            <h4>Is my consultation with a <em>Retreat</em> Specialist free?</h4>
                            <img src="static/img/chevron-down.svg" alt="Show answer" :class="{ 'is-rotated': open }" loading="lazy">
                        </div>
                        <p class="faq__answer" x-show.transition="open">Yes, your consultation with your <em>Retreat</em> Specialist is completely free of charge. Just be sure to enter your time zone and country dialing code correctly when making your appointment. Alternatively they can contact you via Skype or WhatsApp if you’d prefer to use an internet based calling service.</p>
                    </div>
            </div>
        </section>

        <!-- FINAL CTA SECTION -->
        <section id="final" class="section py-120 is-dark-gray">
            <div id="final__overlay"></div>
            <div class="container">
                <div class="helmet prose">
                    <h2 class="text-center">Event registration closes September 19th</h2>
                    <div class="prose-content">
                        <p>This is already the BIGGEST event we've ever hosted ...</p>
                        <p>My team of <em>Retreat</em> Specialists is on standby to answer any questions you may have, but they have VERY limited availability this close to the event.</p>
                        <p><strong>I can't stress enough that if you're even <em>remotely</em> interested in joining the 2021 Virtual Retreat, you need to book your free session with a Retreat Specialist today.</strong></p>
                        <p id="alert">*If you're seeing this message, this means we still have a few spots left. I can't promise if we'll have this availability again.*</p>
                        <p><strong>Event Registration closes on September 19th.</strong> Lock in your free session with a <em>Retreat</em> Specialist now by clicking below:</p>
                    </div>
                </div>
                <picture>
                    <source type="image/webp" srcset="static/img/matt_signature.webp"/>
                    <img src="static/img/matt_signature.png" class="signature" alt="Matthew Hussey's signature" loading="lazy">
                </picture>
                <div class="flex-row justify-center items-center mb-40">
                    <a href="#book-now" class="btn is-large">Register now</a>
                </div>
                <div>
                    <h4 class="text-xl uppercase text-center mb-20">Event Registration Closes In:</h4>
                    <div class="countdown--small is-hidden-for-small-screens mb-40">
                        <div class="flex-row justify-center items-center">
                            <div class="countdown__wrapper flex-col justify-center items-center">
                                <p class="days text-3xl">000</p>
                                <h3 id="dayslabel" class="text-xs text-center">Days</h3>
                            </div>
                            <div class="countdown__wrapper flex-col justify-center items-center">
                                <p class="hours text-3xl">000</p>
                                <h3 id="hourslabel" class="text-xs text-center">Hours</h3>
                            </div>
                            <div class="countdown__wrapper flex-col justify-center items-center">
                                <p class="minutes text-3xl">000</p>
                                <h3 id="minuteslabel" class="text-xs text-center">Minutes</h3>
                            </div>
                            <div class="countdown__wrapper flex-col justify-center items-center">
                                <p class="seconds text-3xl">000</p>
                                <h3 id="secondslabel" class="text-xs text-center">Seconds</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer id="footer" class="py-40">
        <div class="container">
            <div id="footer__wrapper">
                <a href="/">
                    <img src="static/img/mh-logo-white.svg" alt="Matthew Hussey logo" loading="lazy">
                </a>
                <nav id="footer__navigation" class="flex-row justify-between items-center wrap">
                    <a href="https://www.howtogettheguy.com/terms-and-conditions/" target="_blank">Terms & Conditions</a>
                    <div class="is-hidden-for-mobile">|</div>
                    <a href="https://www.howtogettheguy.com/privacy-policy/" target="_blank">Privacy Policy</a>
                    <div class="is-hidden-for-mobile">|</div>
                    <a href="https://www.howtogettheguy.com/disclaimer/" target="_blank">Disclaimer</a>
                    <div class="is-hidden-for-mobile">|</div>
                    <p>Copyright GTGUK Services LTD <?php // echo date('Y'); ?></p>
                </nav>
            </div>
        </div>
    </footer>

    <!-- INFUSIONSOFT SCRIPS -->
    <script type="text/javascript" src="https://ee122.infusionsoft.app/app/webTracking/getTrackingCode"></script>
    <script type="text/javascript" src="https://ee122.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.70.0.375214"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit" async="async"></script>
    <script type="text/javascript" src="https://ee122.infusionsoft.com/app/timezone/timezoneInputJs?xid=<?php // echo $form_id; ?>"></script>
    <script type="text/javascript" src="https://ee122.infusionsoft.com/js/jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://ee122.infusionsoft.app/app/webform/overwriteRefererJs"></script>

    <!-- CUSTOM SCRIPTS -->
    <script type="module" src="index.js"></script>

</body>
</html>
