@extends('layouts.app')

@section('title', 'Home - TechNova Solutions')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    :root{
        --tn-bg: #f8fafc;
        --tn-white: #ffffff;
        --tn-text: #0f172a;
        --tn-muted: #64748b;
        --tn-blue: #2563eb;
        --tn-blue-dark: #1d4ed8;
        --tn-blue-light: #eff6ff;
        --tn-border: #e2e8f0;
        --tn-dark: #0b1220;
    }

    *{
        box-sizing: border-box;
    }

    .tn-home{
        position: relative;
        overflow: hidden;

        background: var(--tn-bg);
        color: var(--tn-text);

        font-family: 'Inter', sans-serif;
    }

    .tn-home h1,
    .tn-home h2,
    .tn-home h3{
        font-family: 'Space Grotesk', sans-serif;
        color: var(--tn-text);
        letter-spacing: -0.04em;
    }

    .tn-container{
        width: 100%;
        max-width: 1180px;

        margin: 0 auto;
        padding: 0 40px;
    }


    /* ========================================
       BACKGROUND
    ======================================== */

    .tn-bg-orb{
        position: absolute;

        width: 600px;
        height: 600px;

        top: -260px;
        right: -200px;

        background: rgba(37,99,235,0.08);

        border-radius: 50%;
        filter: blur(100px);

        pointer-events: none;
    }

    .tn-bg-orb-two{
        position: absolute;

        width: 450px;
        height: 450px;

        top: 900px;
        left: -260px;

        background: rgba(37,99,235,0.045);

        border-radius: 50%;
        filter: blur(100px);

        pointer-events: none;
    }


    /* ========================================
       HERO
    ======================================== */

    .tn-hero{
        position: relative;

        min-height: 720px;

        display: flex;
        align-items: center;

        padding: 90px 0 110px;
    }

    .tn-hero-grid{
        display: grid;

        grid-template-columns: 1.05fr 0.95fr;

        gap: 70px;

        align-items: center;
    }

    .tn-hero-content{
        position: relative;
        z-index: 2;
    }

    .tn-eyebrow{
        display: inline-flex;
        align-items: center;
        gap: 8px;

        padding: 7px 12px;

        margin-bottom: 24px;

        background: var(--tn-blue-light);

        border: 1px solid #dbeafe;
        border-radius: 999px;

        color: var(--tn-blue);

        font-size: 12px;
        font-weight: 600;
    }

    .tn-eyebrow-dot{
        width: 6px;
        height: 6px;

        background: var(--tn-blue);

        border-radius: 50%;
    }

    .tn-hero h1{
        max-width: 700px;

        margin: 0 0 24px;

        font-size: clamp(48px, 6vw, 76px);

        line-height: 0.99;

        font-weight: 700;
    }

    .tn-hero h1 span{
        color: var(--tn-blue);
    }

    .tn-hero-description{
        max-width: 590px;

        margin: 0 0 34px;

        color: var(--tn-muted);

        font-size: 17px;

        line-height: 1.75;
    }

    .tn-hero-actions{
        display: flex;
        align-items: center;

        gap: 12px;

        flex-wrap: wrap;
    }


    /* ========================================
       BUTTONS
    ======================================== */

    .tn-btn{
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;

        min-height: 46px;

        padding: 0 20px;

        border-radius: 10px;

        font-family: 'Inter', sans-serif;

        font-size: 14px;
        font-weight: 600;

        text-decoration: none;

        transition:
            transform .2s ease,
            background .2s ease,
            border-color .2s ease,
            box-shadow .2s ease;
    }

    .tn-btn-primary{
        background: var(--tn-text);

        color: #fff;

        box-shadow: 0 6px 18px rgba(15,23,42,.12);
    }

    .tn-btn-primary:hover{
        background: var(--tn-blue);

        color: #fff;

        transform: translateY(-2px);

        box-shadow: 0 10px 24px rgba(37,99,235,.2);
    }

    .tn-btn-outline{
        background: #fff;

        color: var(--tn-text);

        border: 1px solid var(--tn-border);
    }

    .tn-btn-outline:hover{
        background: #f8fafc;

        color: var(--tn-text);

        border-color: #cbd5e1;

        transform: translateY(-2px);
    }


    /* ========================================
       HERO VISUAL
    ======================================== */

    .tn-hero-visual{
        position: relative;

        min-height: 480px;

        background: var(--tn-dark);

        border-radius: 28px;

        overflow: hidden;

        box-shadow:
            0 25px 70px rgba(15,23,42,.14);
    }

    .tn-hero-visual::before{
        content: '';

        position: absolute;

        width: 330px;
        height: 330px;

        top: -110px;
        right: -80px;

        background: var(--tn-blue);

        border-radius: 50%;

        opacity: .7;

        filter: blur(20px);
    }

    .tn-hero-visual::after{
        content: '';

        position: absolute;

        width: 240px;
        height: 240px;

        bottom: -100px;
        left: -80px;

        border: 1px solid rgba(255,255,255,.12);

        border-radius: 50%;
    }

    .tn-visual-grid{
        position: absolute;

        inset: 0;

        background-image:
            linear-gradient(
                rgba(255,255,255,.055) 1px,
                transparent 1px
            ),
            linear-gradient(
                90deg,
                rgba(255,255,255,.055) 1px,
                transparent 1px
            );

        background-size: 42px 42px;

        opacity: .45;
    }

    .tn-visual-content{
        position: absolute;

        inset: 0;

        padding: 32px;

        display: flex;
        flex-direction: column;
        justify-content: space-between;

        z-index: 2;
    }

    .tn-visual-top{
        display: flex;

        justify-content: space-between;
        align-items: center;
    }

    .tn-visual-label{
        color: #94a3b8;

        font-size: 11px;
        font-weight: 600;

        letter-spacing: .1em;

        text-transform: uppercase;
    }

    .tn-status{
        display: flex;
        align-items: center;
        gap: 7px;

        color: #cbd5e1;

        font-size: 11px;
    }

    .tn-status-dot{
        width: 7px;
        height: 7px;

        background: #60a5fa;

        border-radius: 50%;
    }

    .tn-visual-center{
        display: flex;

        align-items: center;
        justify-content: center;
    }

    .tn-tech-orbit{
        position: relative;

        width: 210px;
        height: 210px;

        display: grid;
        place-items: center;

        border: 1px solid rgba(255,255,255,.12);

        border-radius: 50%;
    }

    .tn-tech-orbit::before{
        content: '';

        position: absolute;

        width: 145px;
        height: 145px;

        border: 1px solid rgba(96,165,250,.35);

        border-radius: 50%;
    }

    .tn-tech-core{
        width: 70px;
        height: 70px;

        display: grid;
        place-items: center;

        background: var(--tn-blue);

        border-radius: 20px;

        color: #fff;

        font-family: 'Space Grotesk', sans-serif;

        font-size: 24px;
        font-weight: 700;

        box-shadow:
            0 0 45px rgba(37,99,235,.55);
    }

    .tn-orbit-dot{
        position: absolute;

        width: 10px;
        height: 10px;

        background: #93c5fd;

        border-radius: 50%;
    }

    .tn-orbit-one{
        top: 12px;
        left: 50%;
    }

    .tn-orbit-two{
        right: 20px;
        bottom: 55px;
    }

    .tn-orbit-three{
        bottom: 25px;
        left: 40px;
    }

    .tn-visual-bottom{
        display: flex;

        justify-content: space-between;
        align-items: flex-end;
    }

    .tn-visual-bottom strong{
        display: block;

        margin-bottom: 4px;

        color: #fff;

        font-family: 'Space Grotesk', sans-serif;

        font-size: 19px;
    }

    .tn-visual-bottom span{
        color: #94a3b8;

        font-size: 11px;
    }

    .tn-visual-arrow{
        width: 42px;
        height: 42px;

        display: grid;
        place-items: center;

        border: 1px solid rgba(255,255,255,.15);

        border-radius: 50%;

        color: #fff;

        font-size: 18px;
    }


    /* ========================================
       HIGHLIGHTS
    ======================================== */

    .tn-highlights{
        position: relative;

        padding: 0 0 100px;
    }

    .tn-highlights-grid{
        display: grid;

        grid-template-columns: repeat(3, 1fr);

        border-top: 1px solid var(--tn-border);
        border-bottom: 1px solid var(--tn-border);
    }

    .tn-highlight{
        padding: 30px 35px;

        border-right: 1px solid var(--tn-border);
    }

    .tn-highlight:last-child{
        border-right: none;
    }

    .tn-highlight-number{
        display: block;

        margin-bottom: 14px;

        color: var(--tn-blue);

        font-family: 'Space Grotesk', sans-serif;

        font-size: 28px;
        font-weight: 700;
    }

    .tn-highlight h3{
        margin: 0 0 8px;

        font-size: 18px;
    }

    .tn-highlight p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 13px;

        line-height: 1.6;
    }


    /* ========================================
       ABOUT PREVIEW
    ======================================== */

    .tn-about{
        padding: 110px 0;

        background: #fff;

        border-top: 1px solid var(--tn-border);
        border-bottom: 1px solid var(--tn-border);
    }

    .tn-about-grid{
        display: grid;

        grid-template-columns: .85fr 1.15fr;

        gap: 90px;

        align-items: center;
    }

    .tn-about-label,
    .tn-section-label{
        display: block;

        margin-bottom: 13px;

        color: var(--tn-blue);

        font-size: 12px;
        font-weight: 700;

        letter-spacing: .08em;

        text-transform: uppercase;
    }

    .tn-about-copy h2{
        max-width: 560px;

        margin: 0 0 20px;

        font-size: clamp(32px, 4vw, 46px);

        line-height: 1.08;
    }

    .tn-about-copy p{
        max-width: 560px;

        margin: 0 0 26px;

        color: var(--tn-muted);

        font-size: 16px;

        line-height: 1.8;
    }

    .tn-text-link{
        display: inline-flex;
        align-items: center;

        gap: 7px;

        color: var(--tn-blue);

        font-size: 14px;
        font-weight: 600;

        text-decoration: none;

        transition: gap .2s ease;
    }

    .tn-text-link:hover{
        color: var(--tn-blue-dark);

        gap: 11px;
    }

    .tn-about-panel{
        position: relative;

        min-height: 430px;

        padding: 32px;

        background: var(--tn-bg);

        border: 1px solid var(--tn-border);

        border-radius: 24px;

        overflow: hidden;
    }

    .tn-about-panel::before{
        content: '';

        position: absolute;

        width: 280px;
        height: 280px;

        top: -110px;
        right: -90px;

        background: var(--tn-blue-light);

        border-radius: 50%;
    }

    .tn-about-panel-content{
        position: relative;

        height: 100%;

        min-height: 365px;

        display: flex;
        flex-direction: column;
        justify-content: flex-end;

        z-index: 2;
    }

    .tn-about-big{
        position: absolute;

        top: 15px;
        left: 0;

        color: #e2e8f0;

        font-family: 'Space Grotesk', sans-serif;

        font-size: 110px;

        font-weight: 700;

        letter-spacing: -.08em;
    }

    .tn-about-mini{
        position: relative;

        max-width: 350px;

        padding: 25px;

        background: #fff;

        border: 1px solid var(--tn-border);

        border-radius: 16px;

        box-shadow: 0 12px 35px rgba(15,23,42,.06);
    }

    .tn-about-mini strong{
        display: block;

        margin-bottom: 7px;

        font-family: 'Space Grotesk', sans-serif;

        font-size: 20px;
    }

    .tn-about-mini p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 13px;

        line-height: 1.6;
    }


    /* ========================================
       SERVICES PREVIEW
    ======================================== */

    .tn-services{
        padding: 110px 0;
    }

    .tn-services-header{
        display: flex;

        justify-content: space-between;

        align-items: flex-end;

        gap: 40px;

        margin-bottom: 45px;
    }

    .tn-services-header h2{
        max-width: 600px;

        margin: 0;

        font-size: clamp(32px, 4vw, 46px);

        line-height: 1.08;
    }

    .tn-services-header p{
        max-width: 360px;

        margin: 0;

        color: var(--tn-muted);

        font-size: 14px;

        line-height: 1.7;
    }

    .tn-service-list{
        border-top: 1px solid var(--tn-border);
    }

    .tn-service-row{
        display: grid;

        grid-template-columns: 80px 1fr auto;

        gap: 30px;

        align-items: center;

        padding: 30px 10px;

        border-bottom: 1px solid var(--tn-border);

        text-decoration: none;

        transition:
            padding .25s ease,
            background .25s ease;
    }

    .tn-service-row:hover{
        padding-left: 20px;
        padding-right: 20px;

        background: #fff;
    }

    .tn-service-number{
        color: var(--tn-blue);

        font-family: 'Space Grotesk', sans-serif;

        font-size: 13px;
        font-weight: 600;
    }

    .tn-service-name{
        display: flex;
        align-items: center;

        gap: 15px;
    }

    .tn-service-name h3{
        margin: 0;

        font-size: 23px;

        transition: color .2s ease;
    }

    .tn-service-row:hover .tn-service-name h3{
        color: var(--tn-blue);
    }

    .tn-service-description{
        max-width: 420px;

        margin-left: auto;

        color: var(--tn-muted);

        font-size: 13px;

        line-height: 1.5;

        text-align: right;
    }

    .tn-service-arrow{
        width: 38px;
        height: 38px;

        display: grid;
        place-items: center;

        margin-left: 10px;

        border: 1px solid var(--tn-border);

        border-radius: 50%;

        color: var(--tn-text);

        transition:
            background .2s ease,
            color .2s ease,
            border-color .2s ease;
    }

    .tn-service-row:hover .tn-service-arrow{
        background: var(--tn-blue);

        border-color: var(--tn-blue);

        color: #fff;
    }


    /* ========================================
       WHY TECHNOVA
    ======================================== */

    .tn-why{
        padding: 110px 0;

        background: #fff;

        border-top: 1px solid var(--tn-border);
    }

    .tn-why-grid{
        display: grid;

        grid-template-columns: .8fr 1.2fr;

        gap: 90px;
    }

    .tn-why-title h2{
        margin: 0;

        font-size: clamp(32px, 4vw, 46px);

        line-height: 1.08;
    }

    .tn-why-title p{
        margin: 20px 0 0;

        color: var(--tn-muted);

        font-size: 15px;

        line-height: 1.7;
    }

    .tn-why-items{
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 35px 45px;
    }

    .tn-why-item{
        padding-top: 20px;

        border-top: 1px solid var(--tn-border);
    }

    .tn-why-item span{
        display: block;

        margin-bottom: 12px;

        color: var(--tn-blue);

        font-family: 'Space Grotesk', sans-serif;

        font-size: 13px;
        font-weight: 700;
    }

    .tn-why-item h3{
        margin: 0 0 8px;

        font-size: 18px;
    }

    .tn-why-item p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 13px;

        line-height: 1.65;
    }


    /* ========================================
       CTA
    ======================================== */

    .tn-cta{
        padding: 30px 0 110px;
    }

    .tn-cta-card{
        position: relative;

        padding: 85px 40px;

        text-align: center;

        background: var(--tn-dark);

        border-radius: 26px;

        overflow: hidden;
    }

    .tn-cta-card::before{
        content: '';

        position: absolute;

        width: 420px;
        height: 420px;

        top: -260px;
        right: -90px;

        background: var(--tn-blue);

        border-radius: 50%;

        opacity: .35;

        filter: blur(60px);
    }

    .tn-cta-card::after{
        content: '';

        position: absolute;

        width: 300px;
        height: 300px;

        bottom: -220px;
        left: -80px;

        border: 1px solid rgba(255,255,255,.1);

        border-radius: 50%;
    }

    .tn-cta-content{
        position: relative;

        z-index: 2;
    }

    .tn-cta-card h2{
        max-width: 700px;

        margin: 0 auto 14px;

        color: #fff;

        font-size: clamp(34px, 4vw, 50px);

        line-height: 1.05;
    }

    .tn-cta-card p{
        max-width: 520px;

        margin: 0 auto 30px;

        color: #94a3b8;

        font-size: 15px;

        line-height: 1.7;
    }

    .tn-cta-card .tn-btn-primary{
        background: #fff;

        color: var(--tn-text);
    }

    .tn-cta-card .tn-btn-primary:hover{
        background: var(--tn-blue);

        color: #fff;
    }


    /* ========================================
       RESPONSIVE
    ======================================== */

    @media (max-width: 950px){

        .tn-container{
            padding: 0 24px;
        }

        .tn-hero{
            min-height: auto;
        }

        .tn-hero-grid{
            grid-template-columns: 1fr;

            gap: 55px;
        }

        .tn-hero-content{
            text-align: center;
        }

        .tn-hero-description{
            margin-left: auto;
            margin-right: auto;
        }

        .tn-hero-actions{
            justify-content: center;
        }

        .tn-hero-visual{
            max-width: 650px;

            width: 100%;

            margin: 0 auto;
        }

        .tn-about-grid{
            grid-template-columns: 1fr;

            gap: 55px;
        }

        .tn-about-copy{
            order: 1;
        }

        .tn-about-panel{
            order: 2;
        }

        .tn-why-grid{
            grid-template-columns: 1fr;

            gap: 55px;
        }
    }


    @media (max-width: 760px){

        .tn-hero{
            padding: 75px 0 80px;
        }

        .tn-highlights{
            padding-bottom: 75px;
        }

        .tn-highlights-grid{
            grid-template-columns: 1fr;
        }

        .tn-highlight{
            border-right: none;

            border-bottom: 1px solid var(--tn-border);
        }

        .tn-highlight:last-child{
            border-bottom: none;
        }

        .tn-about,
        .tn-services,
        .tn-why{
            padding: 80px 0;
        }

        .tn-services-header{
            display: block;
        }

        .tn-services-header p{
            margin-top: 18px;
        }

        .tn-service-row{
            grid-template-columns: 45px 1fr auto;

            gap: 15px;
        }

        .tn-service-description{
            display: none;
        }

        .tn-service-name h3{
            font-size: 19px;
        }

        .tn-why-items{
            grid-template-columns: 1fr;
        }

        .tn-cta{
            padding-bottom: 75px;
        }

        .tn-cta-card{
            padding: 65px 24px;
        }
    }


    @media (max-width: 480px){

        .tn-container{
            padding: 0 18px;
        }

        .tn-hero h1{
            font-size: 43px;
        }

        .tn-hero-description{
            font-size: 15px;
        }

        .tn-hero-actions{
            flex-direction: column;
        }

        .tn-hero-actions .tn-btn{
            width: 100%;

            max-width: 280px;
        }

        .tn-hero-visual{
            min-height: 390px;

            border-radius: 20px;
        }

        .tn-visual-content{
            padding: 24px;
        }

        .tn-tech-orbit{
            width: 170px;
            height: 170px;
        }

        .tn-tech-orbit::before{
            width: 115px;
            height: 115px;
        }

        .tn-about-panel{
            min-height: 350px;

            padding: 24px;
        }

        .tn-about-panel-content{
            min-height: 300px;
        }

        .tn-about-big{
            font-size: 80px;
        }

        .tn-service-row{
            padding: 24px 5px;
        }

        .tn-service-row:hover{
            padding-left: 10px;
            padding-right: 10px;
        }
    }
</style>


<div class="tn-home">

    <div class="tn-bg-orb"></div>
    <div class="tn-bg-orb-two"></div>


    {{-- ========================================
         HERO
    ========================================= --}}

    <section class="tn-hero">

        <div class="tn-container">

            <div class="tn-hero-grid">

                <div class="tn-hero-content">

                    <div class="tn-eyebrow">
                        <span class="tn-eyebrow-dot"></span>
                        Technology solutions for modern businesses
                    </div>

                    <h1>
                        Technology that
                        <span>moves business forward.</span>
                    </h1>

                    <p class="tn-hero-description">
                        TechNova Solutions provides reliable and innovative
                        technology solutions that help businesses grow,
                        improve productivity, and succeed in the digital world.
                    </p>

                    <div class="tn-hero-actions">

                        <a
                            href="{{ route('services') }}"
                            class="tn-btn tn-btn-primary"
                        >
                            Explore Services
                            <span>→</span>
                        </a>

                        <a
                            href="{{ route('about') }}"
                            class="tn-btn tn-btn-outline"
                        >
                            About TechNova
                        </a>

                    </div>

                </div>


                {{-- Hero Visual --}}

                <div class="tn-hero-visual">

                    <div class="tn-visual-grid"></div>

                    <div class="tn-visual-content">

                        <div class="tn-visual-top">

                            <span class="tn-visual-label">
                                TechNova / Digital Solutions
                            </span>

                            <span class="tn-status">
                                <span class="tn-status-dot"></span>
                                Ready to build
                            </span>

                        </div>


                        <div class="tn-visual-center">

                            <div class="tn-tech-orbit">

                                <span class="tn-orbit-dot tn-orbit-one"></span>
                                <span class="tn-orbit-dot tn-orbit-two"></span>
                                <span class="tn-orbit-dot tn-orbit-three"></span>

                                <div class="tn-tech-core">
                                    TN
                                </div>

                            </div>

                        </div>


                        <div class="tn-visual-bottom">

                            <div>

                                <strong>
                                    Build. Improve. Grow.
                                </strong>

                                <span>
                                    Practical technology for real businesses.
                                </span>

                            </div>

                            <div class="tn-visual-arrow">
                                ↗
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ========================================
         HIGHLIGHTS
    ========================================= --}}

    <section class="tn-highlights">

        <div class="tn-container">

            <div class="tn-highlights-grid">

                <div class="tn-highlight">

                    <span class="tn-highlight-number">
                        01
                    </span>

                    <h3>
                        Reliable
                    </h3>

                    <p>
                        Solutions designed around real business
                        requirements and long-term usability.
                    </p>

                </div>


                <div class="tn-highlight">

                    <span class="tn-highlight-number">
                        02
                    </span>

                    <h3>
                        Scalable
                    </h3>

                    <p>
                        Technology that can adapt as your
                        organization continues to grow.
                    </p>

                </div>


                <div class="tn-highlight">

                    <span class="tn-highlight-number">
                        03
                    </span>

                    <h3>
                        User-focused
                    </h3>

                    <p>
                        Digital experiences designed to be
                        simple, useful, and easy to understand.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ========================================
         ABOUT PREVIEW
    ========================================= --}}

    <section class="tn-about">

        <div class="tn-container">

            <div class="tn-about-grid">

                <div class="tn-about-copy">

                    <span class="tn-about-label">
                        About TechNova
                    </span>

                    <h2>
                        Technology should solve problems,
                        not create them.
                    </h2>

                    <p>
                        We are a technology company focused on delivering
                        practical, scalable, and user-friendly digital
                        solutions. Our team combines creativity and
                        technical expertise to help organizations
                        achieve their goals.
                    </p>

                    <a
                        href="{{ route('about') }}"
                        class="tn-text-link"
                    >
                        Learn more about us
                        <span>→</span>
                    </a>

                </div>


                <div class="tn-about-panel">

                    <div class="tn-about-panel-content">

                        <div class="tn-about-big">
                            TN
                        </div>

                        <div class="tn-about-mini">

                            <strong>
                                Built around your goals.
                            </strong>

                            <p>
                                We combine technology, creativity,
                                and practical thinking to create
                                digital solutions that make an impact.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ========================================
         SERVICES PREVIEW
    ========================================= --}}

    <section class="tn-services">

        <div class="tn-container">

            <div class="tn-services-header">

                <div>

                    <span class="tn-section-label">
                        What We Do
                    </span>

                    <h2>
                        Digital solutions built
                        for your next step.
                    </h2>

                </div>

                <p>
                    From websites and applications to intuitive
                    user experiences, we create technology that
                    works for your business.
                </p>

            </div>


            <div class="tn-service-list">

                <a
                    href="{{ route('services') }}"
                    class="tn-service-row"
                >

                    <span class="tn-service-number">
                        01
                    </span>

                    <div class="tn-service-name">

                        <h3>
                            Web Development
                        </h3>

                    </div>

                    <span class="tn-service-description">
                        Modern, responsive websites designed
                        around your business.
                    </span>

                    <span class="tn-service-arrow">
                        →
                    </span>

                </a>


                <a
                    href="{{ route('services') }}"
                    class="tn-service-row"
                >

                    <span class="tn-service-number">
                        02
                    </span>

                    <div class="tn-service-name">

                        <h3>
                            Mobile Development
                        </h3>

                    </div>

                    <span class="tn-service-description">
                        Mobile applications built for smooth
                        and engaging experiences.
                    </span>

                    <span class="tn-service-arrow">
                        →
                    </span>

                </a>


                <a
                    href="{{ route('services') }}"
                    class="tn-service-row"
                >

                    <span class="tn-service-number">
                        03
                    </span>

                    <div class="tn-service-name">

                        <h3>
                            UI/UX Design
                        </h3>

                    </div>

                    <span class="tn-service-description">
                        Clear and intuitive interfaces focused
                        on usability and simplicity.
                    </span>

                    <span class="tn-service-arrow">
                        →
                    </span>

                </a>

            </div>

        </div>

    </section>


    {{-- ========================================
         WHY TECHNOVA
    ========================================= --}}

    <section class="tn-why">

        <div class="tn-container">

            <div class="tn-why-grid">

                <div class="tn-why-title">

                    <span class="tn-section-label">
                        Why TechNova
                    </span>

                    <h2>
                        Better technology.
                        Better possibilities.
                    </h2>

                    <p>
                        We focus on creating solutions that balance
                        technical quality with real-world business needs.
                    </p>

                </div>


                <div class="tn-why-items">

                    <div class="tn-why-item">

                        <span>
                            01
                        </span>

                        <h3>
                            Practical Thinking
                        </h3>

                        <p>
                            We focus on solutions that solve actual
                            problems instead of adding unnecessary complexity.
                        </p>

                    </div>


                    <div class="tn-why-item">

                        <span>
                            02
                        </span>

                        <h3>
                            Modern Technology
                        </h3>

                        <p>
                            We use current tools and approaches to
                            create reliable digital experiences.
                        </p>

                    </div>


                    <div class="tn-why-item">

                        <span>
                            03
                        </span>

                        <h3>
                            User Experience
                        </h3>

                        <p>
                            Every solution should be easy to understand,
                            navigate, and use.
                        </p>

                    </div>


                    <div class="tn-why-item">

                        <span>
                            04
                        </span>

                        <h3>
                            Long-term Value
                        </h3>

                        <p>
                            We build with growth, maintainability,
                            and future needs in mind.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ========================================
         CTA
    ========================================= --}}

    <section class="tn-cta">

        <div class="tn-container">

            <div class="tn-cta-card">

                <div class="tn-cta-content">

                    <h2>
                        Have an idea worth building?
                    </h2>

                    <p>
                        Let's turn your goals into a practical,
                        reliable, and modern digital solution.
                    </p>

                    <a
                        href="{{ route('contact') }}"
                        class="tn-btn tn-btn-primary"
                    >
                        Start a Conversation
                        <span>→</span>
                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection