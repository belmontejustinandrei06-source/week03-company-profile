@extends('layouts.app')

@section('title', 'About - TechNova Solutions')

@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

    /* =========================================================
       THEME
    ========================================================= */

    :root{
        --tn-bg: #f8fafc;
        --tn-white: #ffffff;

        --tn-text: #0f172a;
        --tn-muted: #64748b;

        --tn-blue: #2563eb;
        --tn-blue-dark: #1d4ed8;
        --tn-blue-light: #eff6ff;

        --tn-border: #e2e8f0;

        --tn-radius-lg: 24px;
        --tn-radius-md: 16px;
    }

    *{
        box-sizing: border-box;
    }


    /* =========================================================
       PAGE
    ========================================================= */

    .tn-about-page{
        position: relative;
        overflow: hidden;

        background: var(--tn-bg);
        color: var(--tn-text);

        font-family: 'Inter', sans-serif;
    }

    .tn-about-page h1,
    .tn-about-page h2,
    .tn-about-page h3{
        margin-top: 0;

        color: var(--tn-text);

        font-family: 'Space Grotesk', sans-serif;

        letter-spacing: -0.035em;
    }

    .tn-about-container{
        width: 100%;
        max-width: 1180px;

        margin: 0 auto;

        padding: 0 40px;
    }


    /* =========================================================
       BACKGROUND EFFECTS
    ========================================================= */

    .tn-about-glow{
        position: absolute;

        width: 650px;
        height: 650px;

        top: -280px;
        right: -220px;

        background: rgba(37,99,235,0.08);

        border-radius: 50%;

        filter: blur(110px);

        pointer-events: none;
    }

    .tn-about-glow-two{
        position: absolute;

        width: 500px;
        height: 500px;

        top: 1000px;
        left: -300px;

        background: rgba(37,99,235,0.045);

        border-radius: 50%;

        filter: blur(110px);

        pointer-events: none;
    }


    /* =========================================================
       HERO
    ========================================================= */

    .tn-about-hero{
        position: relative;

        padding: 125px 0 115px;

        text-align: center;
    }

    .tn-about-hero-content{
        position: relative;

        z-index: 2;

        max-width: 820px;

        margin: 0 auto;
    }

    .tn-about-badge{
        display: inline-flex;

        align-items: center;
        gap: 8px;

        margin-bottom: 25px;

        padding: 8px 13px;

        background: var(--tn-blue-light);

        border: 1px solid #dbeafe;

        border-radius: 999px;

        color: var(--tn-blue);

        font-size: 12px;
        font-weight: 600;
    }

    .tn-about-badge-dot{
        width: 6px;
        height: 6px;

        background: var(--tn-blue);

        border-radius: 50%;
    }

    .tn-about-hero h1{
        max-width: 800px;

        margin: 0 auto 22px;

        font-size: clamp(44px, 6vw, 70px);

        line-height: 1.02;

        font-weight: 700;
    }

    .tn-about-hero h1 span{
        color: var(--tn-blue);
    }

    .tn-about-hero-description{
        max-width: 650px;

        margin: 0 auto;

        color: var(--tn-muted);

        font-size: 17px;

        line-height: 1.75;
    }


    /* =========================================================
       COMPANY STORY
    ========================================================= */

    .tn-company{
        position: relative;

        background: var(--tn-white);

        border-top: 1px solid var(--tn-border);
        border-bottom: 1px solid var(--tn-border);
    }

    .tn-company-section{
        padding: 105px 0;
    }

    .tn-company-grid{
        display: grid;

        grid-template-columns: 0.95fr 1.05fr;

        gap: 80px;

        align-items: center;
    }


    /* Visual */

    .tn-company-visual{
        position: relative;

        min-height: 430px;

        overflow: hidden;

        background:
            linear-gradient(
                145deg,
                #0f172a 0%,
                #172554 55%,
                #1d4ed8 100%
            );

        border-radius: var(--tn-radius-lg);

        box-shadow:
            0 25px 60px rgba(15,23,42,0.12);
    }

    .tn-company-visual::before{
        content: '';

        position: absolute;

        width: 300px;
        height: 300px;

        top: -120px;
        right: -70px;

        background: rgba(96,165,250,0.55);

        border-radius: 50%;

        filter: blur(15px);
    }

    .tn-company-visual::after{
        content: '';

        position: absolute;

        width: 260px;
        height: 260px;

        bottom: -150px;
        left: -80px;

        border: 1px solid rgba(255,255,255,0.16);

        border-radius: 50%;
    }

    .tn-company-pattern{
        position: absolute;

        inset: 0;

        opacity: 0.12;

        background-image:
            linear-gradient(
                rgba(255,255,255,0.5) 1px,
                transparent 1px
            ),
            linear-gradient(
                90deg,
                rgba(255,255,255,0.5) 1px,
                transparent 1px
            );

        background-size: 38px 38px;
    }

    .tn-company-badge{
        position: absolute;

        top: 30px;
        left: 30px;

        z-index: 3;

        padding: 8px 12px;

        color: rgba(255,255,255,0.8);

        background: rgba(255,255,255,0.08);

        border: 1px solid rgba(255,255,255,0.13);

        border-radius: 8px;

        font-size: 11px;
        font-weight: 600;

        letter-spacing: 0.05em;
        text-transform: uppercase;

        backdrop-filter: blur(10px);
    }

    .tn-company-center{
        position: absolute;

        top: 50%;
        left: 50%;

        z-index: 3;

        transform: translate(-50%, -50%);

        width: 170px;
        height: 170px;

        display: flex;

        align-items: center;
        justify-content: center;

        text-align: center;

        background: rgba(255,255,255,0.08);

        border: 1px solid rgba(255,255,255,0.14);

        border-radius: 50%;

        backdrop-filter: blur(12px);
    }

    .tn-company-center strong{
        display: block;

        color: #fff;

        font-family: 'Space Grotesk', sans-serif;

        font-size: 23px;

        letter-spacing: -0.03em;
    }

    .tn-company-center span{
        display: block;

        margin-top: 5px;

        color: #bfdbfe;

        font-size: 11px;
    }

    .tn-company-bottom{
        position: absolute;

        right: 25px;
        bottom: 25px;

        z-index: 3;

        padding: 10px 13px;

        color: #dbeafe;

        background: rgba(15,23,42,0.45);

        border: 1px solid rgba(255,255,255,0.1);

        border-radius: 9px;

        font-size: 11px;

        backdrop-filter: blur(10px);
    }


    /* Copy */

    .tn-company-copy-label{
        display: block;

        margin-bottom: 14px;

        color: var(--tn-blue);

        font-size: 12px;
        font-weight: 700;

        text-transform: uppercase;

        letter-spacing: 0.09em;
    }

    .tn-company-copy h2{
        max-width: 600px;

        margin-bottom: 20px;

        font-size: clamp(32px, 4vw, 44px);

        line-height: 1.08;
    }

    .tn-company-copy p{
        max-width: 590px;

        margin: 0 0 25px;

        color: var(--tn-muted);

        font-size: 16px;

        line-height: 1.8;
    }

    .tn-company-highlights{
        display: flex;

        gap: 30px;

        padding-top: 25px;

        border-top: 1px solid var(--tn-border);
    }

    .tn-company-highlight strong{
        display: block;

        margin-bottom: 4px;

        color: var(--tn-text);

        font-family: 'Space Grotesk', sans-serif;

        font-size: 16px;
    }

    .tn-company-highlight span{
        color: var(--tn-muted);

        font-size: 12px;
    }


    /* =========================================================
       PURPOSE
    ========================================================= */

    .tn-purpose{
        padding: 110px 0;
    }

    .tn-purpose-header{
        max-width: 690px;

        margin-bottom: 48px;
    }

    .tn-section-label{
        display: block;

        margin-bottom: 13px;

        color: var(--tn-blue);

        font-size: 12px;
        font-weight: 700;

        letter-spacing: 0.09em;

        text-transform: uppercase;
    }

    .tn-purpose-header h2{
        margin-bottom: 15px;

        font-size: clamp(32px, 4vw, 44px);

        line-height: 1.08;
    }

    .tn-purpose-header p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 16px;

        line-height: 1.7;
    }

    .tn-purpose-grid{
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 18px;
    }

    .tn-purpose-card{
        position: relative;

        padding: 38px;

        overflow: hidden;

        background: var(--tn-white);

        border: 1px solid var(--tn-border);

        border-radius: var(--tn-radius-md);

        transition:
            transform 0.25s ease,
            border-color 0.25s ease,
            box-shadow 0.25s ease;
    }

    .tn-purpose-card:hover{
        transform: translateY(-5px);

        border-color: #bfdbfe;

        box-shadow:
            0 18px 40px rgba(15,23,42,0.07);
    }

    .tn-purpose-card::after{
        content: '';

        position: absolute;

        width: 120px;
        height: 120px;

        right: -45px;
        bottom: -45px;

        background: var(--tn-blue-light);

        border-radius: 50%;

        opacity: 0;

        transition: opacity 0.25s ease;
    }

    .tn-purpose-card:hover::after{
        opacity: 1;
    }

    .tn-purpose-icon{
        width: 46px;
        height: 46px;

        display: grid;

        place-items: center;

        margin-bottom: 25px;

        background: var(--tn-blue-light);

        border: 1px solid #dbeafe;

        border-radius: 12px;

        color: var(--tn-blue);

        font-size: 19px;
        font-weight: 700;
    }

    .tn-purpose-card h3{
        margin-bottom: 12px;

        font-size: 22px;
    }

    .tn-purpose-card p{
        max-width: 500px;

        margin: 0;

        color: var(--tn-muted);

        font-size: 14.5px;

        line-height: 1.75;
    }


    /* =========================================================
       VALUES
    ========================================================= */

    .tn-values{
        padding: 110px 0;

        background: var(--tn-white);

        border-top: 1px solid var(--tn-border);
        border-bottom: 1px solid var(--tn-border);
    }

    .tn-values-header{
        display: flex;

        align-items: flex-end;
        justify-content: space-between;

        gap: 40px;

        margin-bottom: 48px;
    }

    .tn-values-heading{
        max-width: 650px;
    }

    .tn-values-header h2{
        margin-bottom: 15px;

        font-size: clamp(32px, 4vw, 44px);

        line-height: 1.08;
    }

    .tn-values-header p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 16px;

        line-height: 1.7;
    }

    .tn-values-note{
        flex-shrink: 0;

        padding: 12px 16px;

        color: var(--tn-muted);

        background: var(--tn-bg);

        border: 1px solid var(--tn-border);

        border-radius: 10px;

        font-size: 12px;
    }

    .tn-values-grid{
        display: grid;

        grid-template-columns: repeat(4, 1fr);

        gap: 15px;
    }

    .tn-value-card{
        padding: 30px 25px;

        background: var(--tn-bg);

        border: 1px solid var(--tn-border);

        border-radius: 15px;

        transition:
            transform 0.25s ease,
            border-color 0.25s ease,
            box-shadow 0.25s ease;
    }

    .tn-value-card:hover{
        transform: translateY(-5px);

        border-color: #bfdbfe;

        box-shadow:
            0 14px 30px rgba(15,23,42,0.06);
    }

    .tn-value-icon{
        width: 42px;
        height: 42px;

        display: grid;

        place-items: center;

        margin-bottom: 22px;

        background: #fff;

        border: 1px solid #dbeafe;

        border-radius: 11px;

        color: var(--tn-blue);

        font-size: 17px;
        font-weight: 700;
    }

    .tn-value-card h3{
        margin-bottom: 9px;

        font-size: 18px;
    }

    .tn-value-card p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 13.5px;

        line-height: 1.7;
    }


    /* =========================================================
       TEAM
    ========================================================= */

    .tn-team{
        padding: 110px 0 125px;
    }

    .tn-team-header{
        max-width: 680px;

        margin: 0 auto 50px;

        text-align: center;
    }

    .tn-team-header h2{
        margin-bottom: 15px;

        font-size: clamp(32px, 4vw, 44px);

        line-height: 1.08;
    }

    .tn-team-header p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 16px;

        line-height: 1.7;
    }

    .tn-team-grid{
        display: grid;

        grid-template-columns: repeat(3, 1fr);

        gap: 18px;
    }

    .tn-team-card{
        padding: 36px 28px;

        text-align: center;

        background: var(--tn-white);

        border: 1px solid var(--tn-border);

        border-radius: var(--tn-radius-md);

        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease,
            border-color 0.25s ease;
    }

    .tn-team-card:hover{
        transform: translateY(-5px);

        border-color: #bfdbfe;

        box-shadow:
            0 18px 40px rgba(15,23,42,0.07);
    }

    .tn-team-avatar{
        position: relative;

        width: 78px;
        height: 78px;

        display: grid;

        place-items: center;

        margin: 0 auto 20px;

        background:
            linear-gradient(
                145deg,
                var(--tn-blue-light),
                #dbeafe
            );

        border: 1px solid #bfdbfe;

        border-radius: 50%;

        color: var(--tn-blue);

        font-family: 'Space Grotesk', sans-serif;

        font-size: 21px;
        font-weight: 700;
    }

    .tn-team-card h3{
        margin-bottom: 5px;

        font-size: 19px;
    }

    .tn-team-role{
        display: block;

        margin-bottom: 14px;

        color: var(--tn-blue);

        font-size: 12px;
        font-weight: 600;
    }

    .tn-team-description{
        margin: 0;

        color: var(--tn-muted);

        font-size: 13px;

        line-height: 1.6;
    }


    /* =========================================================
       FINAL CTA
    ========================================================= */

    .tn-about-cta{
        padding: 0 0 110px;
    }

    .tn-about-cta-card{
        position: relative;

        overflow: hidden;

        padding: 70px 40px;

        background:
            linear-gradient(
                135deg,
                #0f172a,
                #172554
            );

        border-radius: var(--tn-radius-lg);

        text-align: center;
    }

    .tn-about-cta-card::before{
        content: '';

        position: absolute;

        width: 350px;
        height: 350px;

        top: -220px;
        right: -70px;

        background: rgba(37,99,235,0.5);

        border-radius: 50%;

        filter: blur(60px);
    }

    .tn-about-cta-content{
        position: relative;

        z-index: 2;
    }

    .tn-about-cta-card h2{
        margin-bottom: 13px;

        color: #fff;

        font-size: clamp(30px, 4vw, 42px);
    }

    .tn-about-cta-card p{
        max-width: 550px;

        margin: 0 auto 28px;

        color: #94a3b8;

        font-size: 15px;

        line-height: 1.7;
    }

    .tn-about-cta-button{
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 8px;

        min-height: 46px;

        padding: 0 21px;

        background: #fff;

        color: var(--tn-text);

        border-radius: 10px;

        font-size: 14px;
        font-weight: 600;

        text-decoration: none;

        transition:
            transform 0.2s ease,
            background 0.2s ease,
            color 0.2s ease;
    }

    .tn-about-cta-button:hover{
        transform: translateY(-2px);

        background: var(--tn-blue);

        color: #fff;
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 950px){

        .tn-about-container{
            padding: 0 24px;
        }

        .tn-company-grid{
            grid-template-columns: 1fr;

            gap: 55px;
        }

        .tn-company-visual{
            min-height: 380px;
        }

        .tn-values-grid{
            grid-template-columns: repeat(2, 1fr);
        }

        .tn-team-grid{
            grid-template-columns: repeat(2, 1fr);
        }

    }


    @media (max-width: 760px){

        .tn-about-hero{
            padding: 90px 0 80px;
        }

        .tn-company-section,
        .tn-purpose,
        .tn-values,
        .tn-team{
            padding: 80px 0;
        }

        .tn-purpose-grid{
            grid-template-columns: 1fr;
        }

        .tn-values-header{
            display: block;
        }

        .tn-values-note{
            display: inline-block;

            margin-top: 20px;
        }

        .tn-team-grid{
            grid-template-columns: 1fr;
        }

        .tn-about-cta{
            padding-bottom: 80px;
        }

    }


    @media (max-width: 520px){

        .tn-about-container{
            padding: 0 18px;
        }

        .tn-about-hero{
            padding: 75px 0 70px;
        }

        .tn-about-hero h1{
            font-size: 42px;
        }

        .tn-about-hero-description{
            font-size: 15px;
        }

        .tn-company-visual{
            min-height: 330px;
        }

        .tn-company-center{
            width: 145px;
            height: 145px;
        }

        .tn-company-center strong{
            font-size: 19px;
        }

        .tn-company-bottom{
            right: 18px;
            bottom: 18px;
        }

        .tn-company-badge{
            top: 18px;
            left: 18px;
        }

        .tn-company-copy h2{
            font-size: 32px;
        }

        .tn-company-highlights{
            flex-direction: column;

            gap: 18px;
        }

        .tn-purpose-card{
            padding: 30px 25px;
        }

        .tn-values-grid{
            grid-template-columns: 1fr;
        }

        .tn-team-card{
            padding: 32px 24px;
        }

        .tn-about-cta-card{
            padding: 55px 22px;
        }

    }

</style>


<div class="tn-about-page">

    <div class="tn-about-glow"></div>
    <div class="tn-about-glow-two"></div>


    {{-- =========================================================
         HERO
    ========================================================== --}}

    <section class="tn-about-hero">

        <div class="tn-about-container">

            <div class="tn-about-hero-content">

                <div class="tn-about-badge">
                    <span class="tn-about-badge-dot"></span>
                    About TechNova Solutions
                </div>

                <h1>
                    Technology built with
                    <span>purpose.</span>
                </h1>

                <p class="tn-about-hero-description">
                    We combine technology, creativity, and practical thinking
                    to create digital solutions that help businesses move
                    forward with confidence.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================================================
         COMPANY STORY
    ========================================================== --}}

    <section class="tn-company">

        <div class="tn-company-section">

            <div class="tn-about-container">

                <div class="tn-company-grid">


                    {{-- Visual --}}

                    <div class="tn-company-visual">

                        <div class="tn-company-pattern"></div>

                        <div class="tn-company-badge">
                            TechNova / Company
                        </div>

                        <div class="tn-company-center">

                            <div>

                                <strong>
                                    TechNova
                                </strong>

                                <span>
                                    Digital Solutions
                                </span>

                            </div>

                        </div>

                        <div class="tn-company-bottom">
                            Technology • Creativity • Growth
                        </div>

                    </div>


                    {{-- Copy --}}

                    <div class="tn-company-copy">

                        <span class="tn-company-copy-label">
                            Who We Are
                        </span>

                        <h2>
                            Helping businesses turn technology into opportunity.
                        </h2>

                        <p>
                            TechNova Solutions was created with a simple idea:
                            technology should make businesses better, not more
                            complicated.
                        </p>

                        <p>
                            Our team combines technical knowledge, creative
                            thinking, and practical problem-solving to develop
                            digital solutions that are reliable, scalable,
                            and easy to use.
                        </p>


                        <div class="tn-company-highlights">

                            <div class="tn-company-highlight">

                                <strong>
                                    Practical
                                </strong>

                                <span>
                                    Solutions that solve real problems
                                </span>

                            </div>

                            <div class="tn-company-highlight">

                                <strong>
                                    Scalable
                                </strong>

                                <span>
                                    Built with future growth in mind
                                </span>

                            </div>

                            <div class="tn-company-highlight">

                                <strong>
                                    Human
                                </strong>

                                <span>
                                    Designed around people
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         MISSION / VISION
    ========================================================== --}}

    <section class="tn-purpose">

        <div class="tn-about-container">

            <div class="tn-purpose-header">

                <span class="tn-section-label">
                    Our Purpose
                </span>

                <h2>
                    What drives the way we work.
                </h2>

                <p>
                    Our mission and vision give us a clear direction:
                    build technology that creates meaningful value for
                    businesses and the people they serve.
                </p>

            </div>


            <div class="tn-purpose-grid">


                {{-- Mission --}}

                <div class="tn-purpose-card">

                    <div class="tn-purpose-icon">
                        →
                    </div>

                    <h3>
                        Our Mission
                    </h3>

                    <p>
                        To provide innovative, reliable, and accessible
                        technology solutions that help businesses improve
                        their operations, connect with customers, and
                        achieve their goals.
                    </p>

                </div>


                {{-- Vision --}}

                <div class="tn-purpose-card">

                    <div class="tn-purpose-icon">
                        ✦
                    </div>

                    <h3>
                        Our Vision
                    </h3>

                    <p>
                        To become a trusted technology partner recognized
                        for innovation, quality, and meaningful digital
                        solutions that help businesses thrive in a
                        constantly changing digital world.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         VALUES
    ========================================================== --}}

    <section class="tn-values">

        <div class="tn-about-container">

            <div class="tn-values-header">

                <div class="tn-values-heading">

                    <span class="tn-section-label">
                        Our Values
                    </span>

                    <h2>
                        Principles that shape our work.
                    </h2>

                    <p>
                        Great technology is not only about what we build.
                        It is also about how we build it.
                    </p>

                </div>

                <div class="tn-values-note">
                    How we approach every project
                </div>

            </div>


            <div class="tn-values-grid">


                {{-- Innovation --}}

                <div class="tn-value-card">

                    <div class="tn-value-icon">
                        ✦
                    </div>

                    <h3>
                        Innovation
                    </h3>

                    <p>
                        We continuously look for smarter and better
                        ways to solve problems.
                    </p>

                </div>


                {{-- Integrity --}}

                <div class="tn-value-card">

                    <div class="tn-value-icon">
                        ✓
                    </div>

                    <h3>
                        Integrity
                    </h3>

                    <p>
                        We build lasting relationships through honesty,
                        transparency, and responsibility.
                    </p>

                </div>


                {{-- Quality --}}

                <div class="tn-value-card">

                    <div class="tn-value-icon">
                        ◆
                    </div>

                    <h3>
                        Quality
                    </h3>

                    <p>
                        We focus on creating dependable solutions that
                        deliver meaningful results.
                    </p>

                </div>


                {{-- Teamwork --}}

                <div class="tn-value-card">

                    <div class="tn-value-icon">
                        +
                    </div>

                    <h3>
                        Teamwork
                    </h3>

                    <p>
                        We believe collaboration, communication, and
                        shared ideas lead to better outcomes.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         TEAM
    ========================================================== --}}

    <section class="tn-team">

        <div class="tn-about-container">

            <div class="tn-team-header">

                <span class="tn-section-label">
                    Our Team
                </span>

                <h2>
                    The people behind TechNova.
                </h2>

                <p>
                    A team bringing together technical expertise,
                    creativity, and a shared passion for building
                    better digital experiences.
                </p>

            </div>


            <div class="tn-team-grid">


                {{-- Alex --}}

                <div class="tn-team-card">

                    <div class="tn-team-avatar">
                        AM
                    </div>

                    <h3>
                        Alex Morgan
                    </h3>

                    <span class="tn-team-role">
                        Chief Executive Officer
                    </span>

                    <p class="tn-team-description">
                        Leads the company's vision and focuses on
                        creating meaningful solutions for clients.
                    </p>

                </div>


                {{-- Jamie --}}

                <div class="tn-team-card">

                    <div class="tn-team-avatar">
                        JS
                    </div>

                    <h3>
                        Jamie Santos
                    </h3>

                    <span class="tn-team-role">
                        Lead Developer
                    </span>

                    <p class="tn-team-description">
                        Turns ideas into reliable, scalable, and
                        high-performing digital products.
                    </p>

                </div>


                {{-- Taylor --}}

                <div class="tn-team-card">

                    <div class="tn-team-avatar">
                        TR
                    </div>

                    <h3>
                        Taylor Reyes
                    </h3>

                    <span class="tn-team-role">
                        UI/UX Designer
                    </span>

                    <p class="tn-team-description">
                        Creates intuitive interfaces that make
                        technology easier and more enjoyable to use.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
         CTA
    ========================================================== --}}

    <section class="tn-about-cta">

        <div class="tn-about-container">

            <div class="tn-about-cta-card">

                <div class="tn-about-cta-content">

                    <h2>
                        Let's build something meaningful.
                    </h2>

                    <p>
                        Have an idea, project, or business challenge?
                        Let's explore how technology can help.
                    </p>

                    <a
                        href="{{ route('contact') }}"
                        class="tn-about-cta-button"
                    >
                        Get in Touch
                        <span>→</span>
                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection