@extends('layouts.app')

@section('title', 'About - TechNova Solutions')

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
    }

    *{
        box-sizing: border-box;
    }

    .tn-about-page{
        position: relative;
        overflow: hidden;

        background: var(--tn-bg);
        color: var(--tn-text);

        font-family: 'Inter', sans-serif;
    }

    .tn-about-container{
        width: 100%;
        max-width: 1180px;

        margin: 0 auto;
        padding: 0 40px;
    }

    .tn-about-page h1,
    .tn-about-page h2,
    .tn-about-page h3{
        font-family: 'Space Grotesk', sans-serif;
        color: var(--tn-text);
        letter-spacing: -0.035em;
    }


    /* =========================
       BACKGROUND
    ========================= */

    .tn-about-glow{
        position: absolute;

        width: 600px;
        height: 600px;

        top: -250px;
        right: -180px;

        background: rgba(37,99,235,0.08);

        filter: blur(100px);
        border-radius: 50%;

        pointer-events: none;
    }

    .tn-about-glow-two{
        position: absolute;

        width: 450px;
        height: 450px;

        top: 900px;
        left: -250px;

        background: rgba(37,99,235,0.045);

        filter: blur(100px);
        border-radius: 50%;

        pointer-events: none;
    }


    /* =========================
       HERO
    ========================= */

    .tn-about-hero{
        position: relative;

        padding: 120px 0 110px;

        text-align: center;
    }

    .tn-about-hero-content{
        position: relative;
        z-index: 2;

        max-width: 800px;

        margin: 0 auto;
    }

    .tn-about-eyebrow{
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

    .tn-about-eyebrow-dot{
        width: 6px;
        height: 6px;

        background: var(--tn-blue);

        border-radius: 50%;
    }

    .tn-about-hero h1{
        margin: 0 0 22px;

        font-size: clamp(44px, 6vw, 68px);
        line-height: 1.03;
        font-weight: 700;
    }

    .tn-about-hero h1 span{
        color: var(--tn-blue);
    }

    .tn-about-hero p{
        max-width: 650px;

        margin: 0 auto;

        color: var(--tn-muted);

        font-size: 17px;
        line-height: 1.75;
    }


    /* =========================
       COMPANY INTRO
    ========================= */

    .tn-about-company{
        background: var(--tn-white);

        border-top: 1px solid var(--tn-border);
        border-bottom: 1px solid var(--tn-border);
    }

    .tn-about-company-grid{
        display: grid;

        grid-template-columns: 1fr 1fr;

        gap: 80px;

        align-items: center;
    }

    .tn-about-company-visual{
        position: relative;

        min-height: 430px;

        background: var(--tn-text);

        border-radius: 22px;

        overflow: hidden;
    }

    .tn-about-company-visual::before{
        content: '';

        position: absolute;

        width: 330px;
        height: 330px;

        top: -120px;
        right: -90px;

        background: var(--tn-blue);

        border-radius: 50%;

        opacity: 0.75;

        filter: blur(25px);
    }

    .tn-about-company-visual::after{
        content: '';

        position: absolute;

        width: 260px;
        height: 260px;

        bottom: -130px;
        left: -80px;

        border: 1px solid rgba(255,255,255,0.14);

        border-radius: 50%;
    }

    .tn-about-grid-line{
        position: absolute;

        width: 70%;
        height: 1px;

        top: 50%;
        left: 15%;

        background: rgba(255,255,255,0.10);
    }

    .tn-about-grid-line-two{
        position: absolute;

        width: 1px;
        height: 70%;

        left: 50%;
        top: 15%;

        background: rgba(255,255,255,0.10);
    }

    .tn-about-company-center{
        position: absolute;

        top: 50%;
        left: 50%;

        transform: translate(-50%, -50%);

        width: 150px;
        height: 150px;

        display: flex;
        align-items: center;
        justify-content: center;

        text-align: center;

        background: rgba(255,255,255,0.08);

        border: 1px solid rgba(255,255,255,0.15);

        border-radius: 50%;

        backdrop-filter: blur(12px);

        z-index: 2;
    }

    .tn-about-company-center strong{
        color: #fff;

        font-family: 'Space Grotesk', sans-serif;

        font-size: 18px;
        line-height: 1.2;
    }

    .tn-about-company-info{
        position: absolute;

        left: 28px;
        right: 28px;
        bottom: 28px;

        z-index: 3;

        padding: 20px 22px;

        background: rgba(255,255,255,0.09);

        border: 1px solid rgba(255,255,255,0.14);

        border-radius: 14px;

        backdrop-filter: blur(12px);
    }

    .tn-about-company-info strong{
        display: block;

        margin-bottom: 5px;

        color: #fff;

        font-family: 'Space Grotesk', sans-serif;

        font-size: 18px;
    }

    .tn-about-company-info span{
        color: #cbd5e1;

        font-size: 12px;
    }

    .tn-about-company-copy .tn-about-label{
        display: block;

        margin-bottom: 12px;

        color: var(--tn-blue);

        font-size: 12px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: 0.08em;
    }

    .tn-about-company-copy h2{
        margin: 0 0 20px;

        font-size: clamp(32px, 4vw, 44px);
        line-height: 1.08;
    }

    .tn-about-company-copy p{
        margin: 0 0 18px;

        color: var(--tn-muted);

        font-size: 15px;
        line-height: 1.8;
    }

    .tn-about-company-copy p:last-child{
        margin-bottom: 0;
    }


    /* =========================
       MISSION & VISION
    ========================= */

    .tn-about-purpose{
        padding: 110px 0;
    }

    .tn-about-section-heading{
        max-width: 680px;

        margin-bottom: 45px;
    }

    .tn-about-section-label{
        display: block;

        margin-bottom: 12px;

        color: var(--tn-blue);

        font-size: 12px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: 0.08em;
    }

    .tn-about-section-heading h2{
        margin: 0 0 15px;

        font-size: clamp(32px, 4vw, 44px);
        line-height: 1.08;
    }

    .tn-about-section-heading p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 16px;
        line-height: 1.7;
    }

    .tn-about-purpose-grid{
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 18px;
    }

    .tn-about-purpose-card{
        position: relative;

        padding: 36px;

        background: var(--tn-white);

        border: 1px solid var(--tn-border);

        border-radius: 18px;

        transition:
            transform 0.2s ease,
            border-color 0.2s ease,
            box-shadow 0.2s ease;
    }

    .tn-about-purpose-card:hover{
        transform: translateY(-4px);

        border-color: #bfdbfe;

        box-shadow: 0 14px 32px rgba(15,23,42,0.07);
    }

    .tn-about-purpose-icon{
        width: 46px;
        height: 46px;

        display: grid;
        place-items: center;

        margin-bottom: 22px;

        background: var(--tn-blue-light);

        border: 1px solid #dbeafe;

        border-radius: 12px;

        color: var(--tn-blue);

        font-size: 18px;
        font-weight: 700;
    }

    .tn-about-purpose-card h3{
        margin: 0 0 12px;

        font-size: 22px;
    }

    .tn-about-purpose-card p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 14px;
        line-height: 1.75;
    }


    /* =========================
       VALUES
    ========================= */

    .tn-about-values{
        padding: 110px 0;

        background: var(--tn-white);

        border-top: 1px solid var(--tn-border);
        border-bottom: 1px solid var(--tn-border);
    }

    .tn-about-values-header{
        max-width: 680px;

        margin-bottom: 45px;
    }

    .tn-about-values-header h2{
        margin: 0 0 15px;

        font-size: clamp(32px, 4vw, 44px);
        line-height: 1.08;
    }

    .tn-about-values-header p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 16px;
        line-height: 1.7;
    }

    .tn-about-values-grid{
        display: grid;

        grid-template-columns: repeat(4, 1fr);

        gap: 16px;
    }

    .tn-about-value-card{
        padding: 30px 24px;

        background: var(--tn-bg);

        border: 1px solid var(--tn-border);

        border-radius: 16px;

        transition:
            transform 0.2s ease,
            box-shadow 0.2s ease;
    }

    .tn-about-value-card:hover{
        transform: translateY(-4px);

        box-shadow: 0 12px 28px rgba(15,23,42,0.06);
    }

    .tn-about-value-number{
        margin-bottom: 22px;

        color: #cbd5e1;

        font-family: 'Space Grotesk', sans-serif;

        font-size: 13px;
        font-weight: 700;
    }

    .tn-about-value-card h3{
        margin: 0 0 10px;

        font-size: 18px;
    }

    .tn-about-value-card p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 13.5px;
        line-height: 1.65;
    }


    /* =========================
       TEAM
    ========================= */

    .tn-about-team{
        padding: 110px 0 120px;
    }

    .tn-about-team-header{
        max-width: 680px;

        margin-bottom: 45px;
    }

    .tn-about-team-header h2{
        margin: 0 0 15px;

        font-size: clamp(32px, 4vw, 44px);
        line-height: 1.08;
    }

    .tn-about-team-header p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 16px;
        line-height: 1.7;
    }

    .tn-about-team-grid{
        display: grid;

        grid-template-columns: repeat(3, 1fr);

        gap: 18px;
    }

    .tn-about-team-card{
        padding: 34px 28px;

        background: var(--tn-white);

        border: 1px solid var(--tn-border);

        border-radius: 18px;

        transition:
            transform 0.2s ease,
            box-shadow 0.2s ease;
    }

    .tn-about-team-card:hover{
        transform: translateY(-4px);

        box-shadow: 0 14px 32px rgba(15,23,42,0.07);
    }

    .tn-about-team-top{
        display: flex;
        align-items: center;

        gap: 16px;

        margin-bottom: 24px;
    }

    .tn-about-avatar{
        width: 62px;
        height: 62px;

        flex-shrink: 0;

        display: grid;
        place-items: center;

        background: var(--tn-blue-light);

        border: 1px solid #dbeafe;

        border-radius: 50%;

        color: var(--tn-blue);

        font-family: 'Space Grotesk', sans-serif;

        font-size: 17px;
        font-weight: 700;
    }

    .tn-about-team-card h3{
        margin: 0 0 5px;

        font-size: 18px;
    }

    .tn-about-team-role{
        color: var(--tn-muted);

        font-size: 12px;
    }

    .tn-about-team-card p{
        margin: 0;

        color: var(--tn-muted);

        font-size: 13.5px;
        line-height: 1.65;
    }


    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 1000px){

        .tn-about-values-grid{
            grid-template-columns: repeat(2, 1fr);
        }

        .tn-about-company-grid{
            gap: 50px;
        }
    }

    @media (max-width: 900px){

        .tn-about-container{
            padding: 0 24px;
        }

        .tn-about-company-grid{
            grid-template-columns: 1fr;
        }

        .tn-about-purpose-grid{
            grid-template-columns: 1fr;
        }

        .tn-about-team-grid{
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 700px){

        .tn-about-hero{
            padding: 85px 0 80px;
        }

        .tn-about-purpose,
        .tn-about-values,
        .tn-about-team{
            padding: 80px 0;
        }

        .tn-about-company-visual{
            min-height: 340px;
        }

        .tn-about-values-grid{
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px){

        .tn-about-container{
            padding: 0 18px;
        }

        .tn-about-hero h1{
            font-size: 40px;
        }

        .tn-about-hero p{
            font-size: 15px;
        }

        .tn-about-company-copy h2{
            font-size: 32px;
        }

        .tn-about-purpose-card{
            padding: 28px;
        }

        .tn-about-company-info{
            left: 18px;
            right: 18px;
            bottom: 18px;
        }
    }
</style>


<div class="tn-about-page">

    <div class="tn-about-glow"></div>
    <div class="tn-about-glow-two"></div>


    {{-- =========================
         HERO
    ========================== --}}

    <section class="tn-about-hero">

        <div class="tn-about-container">

            <div class="tn-about-hero-content">

                <div class="tn-about-eyebrow">
                    <span class="tn-about-eyebrow-dot"></span>
                    About TechNova Solutions
                </div>

                <h1>
                    We build technology
                    <span>with purpose.</span>
                </h1>

                <p>
                    TechNova Solutions is a technology company focused on
                    creating practical, reliable, and meaningful digital
                    experiences for modern businesses.
                </p>

            </div>

        </div>

    </section>


    {{-- =========================
         WHO WE ARE
    ========================== --}}

    <section class="tn-about-company">

        <div class="tn-about-container">

            <div class="tn-about-company-grid">

                {{-- Visual --}}
                <div class="tn-about-company-visual">

                    <div class="tn-about-grid-line"></div>
                    <div class="tn-about-grid-line-two"></div>

                    <div class="tn-about-company-center">
                        <strong>
                            TechNova
                        </strong>
                    </div>

                    <div class="tn-about-company-info">

                        <strong>
                            Technology with purpose
                        </strong>

                        <span>
                            Creating better digital experiences
                        </span>

                    </div>

                </div>


                {{-- Content --}}
                <div class="tn-about-company-copy">

                    <span class="tn-about-label">
                        Who We Are
                    </span>

                    <h2>
                        A technology company built around people and ideas.
                    </h2>

                    <p>
                        TechNova Solutions was created with a simple goal:
                        to make technology more useful, accessible, and
                        effective for modern businesses.
                    </p>

                    <p>
                        We believe technology should solve real problems
                        instead of creating unnecessary complexity. Our
                        approach combines technical knowledge, creativity,
                        and an understanding of the people who use the
                        solutions we create.
                    </p>

                    <p>
                        From the way we plan a project to the way we build
                        and improve it, we focus on creating solutions that
                        provide lasting value.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         MISSION & VISION
    ========================== --}}

    <section class="tn-about-purpose">

        <div class="tn-about-container">

            <div class="tn-about-section-heading">

                <span class="tn-about-section-label">
                    Our Purpose
                </span>

                <h2>
                    What drives TechNova forward.
                </h2>

                <p>
                    Our mission and vision define the direction we take
                    and the kind of impact we want our work to create.
                </p>

            </div>


            <div class="tn-about-purpose-grid">

                {{-- Mission --}}
                <div class="tn-about-purpose-card">

                    <div class="tn-about-purpose-icon">
                        →
                    </div>

                    <h3>
                        Our Mission
                    </h3>

                    <p>
                        To create reliable and practical technology that
                        helps businesses improve the way they work, connect
                        with their customers, and achieve their goals.
                    </p>

                </div>


                {{-- Vision --}}
                <div class="tn-about-purpose-card">

                    <div class="tn-about-purpose-icon">
                        ✦
                    </div>

                    <h3>
                        Our Vision
                    </h3>

                    <p>
                        To become a trusted technology partner known for
                        thoughtful innovation, quality solutions, and
                        meaningful digital experiences.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         VALUES
    ========================== --}}

    <section class="tn-about-values">

        <div class="tn-about-container">

            <div class="tn-about-values-header">

                <span class="tn-about-section-label">
                    Our Values
                </span>

                <h2>
                    Principles that shape our work.
                </h2>

                <p>
                    Our values influence how we collaborate, solve problems,
                    make decisions, and build relationships with the people
                    we work with.
                </p>

            </div>


            <div class="tn-about-values-grid">

                {{-- Innovation --}}
                <div class="tn-about-value-card">

                    <div class="tn-about-value-number">
                        01
                    </div>

                    <h3>
                        Innovation
                    </h3>

                    <p>
                        We stay curious and look for smarter ways to solve
                        problems and create meaningful improvements.
                    </p>

                </div>


                {{-- Integrity --}}
                <div class="tn-about-value-card">

                    <div class="tn-about-value-number">
                        02
                    </div>

                    <h3>
                        Integrity
                    </h3>

                    <p>
                        We value honesty, transparency, and responsibility
                        in every decision and relationship.
                    </p>

                </div>


                {{-- Quality --}}
                <div class="tn-about-value-card">

                    <div class="tn-about-value-number">
                        03
                    </div>

                    <h3>
                        Quality
                    </h3>

                    <p>
                        We take pride in creating dependable solutions
                        that are carefully designed and built.
                    </p>

                </div>


                {{-- Collaboration --}}
                <div class="tn-about-value-card">

                    <div class="tn-about-value-number">
                        04
                    </div>

                    <h3>
                        Collaboration
                    </h3>

                    <p>
                        We believe the best results come from listening,
                        sharing ideas, and working together.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         TEAM
    ========================== --}}

    <section class="tn-about-team">

        <div class="tn-about-container">

            <div class="tn-about-team-header">

                <span class="tn-about-section-label">
                    Our Team
                </span>

                <h2>
                    The people behind TechNova.
                </h2>

                <p>
                    Our team brings together different skills, perspectives,
                    and experiences to create better technology.
                </p>

            </div>


            <div class="tn-about-team-grid">

                {{-- Alex --}}
                <div class="tn-about-team-card">

                    <div class="tn-about-team-top">

                        <div class="tn-about-avatar">
                            AM
                        </div>

                        <div>
                            <h3>
                                Alex Morgan
                            </h3>

                            <span class="tn-about-team-role">
                                Chief Executive Officer
                            </span>
                        </div>

                    </div>

                    <p>
                        Leads the company and focuses on strategy,
                        growth, and building strong relationships.
                    </p>

                </div>


                {{-- Jamie --}}
                <div class="tn-about-team-card">

                    <div class="tn-about-team-top">

                        <div class="tn-about-avatar">
                            JS
                        </div>

                        <div>
                            <h3>
                                Jamie Santos
                            </h3>

                            <span class="tn-about-team-role">
                                Lead Developer
                            </span>
                        </div>

                    </div>

                    <p>
                        Oversees technical development and works to
                        turn ideas into reliable digital solutions.
                    </p>

                </div>


                {{-- Taylor --}}
                <div class="tn-about-team-card">

                    <div class="tn-about-team-top">

                        <div class="tn-about-avatar">
                            TR
                        </div>

                        <div>
                            <h3>
                                Taylor Reyes
                            </h3>

                            <span class="tn-about-team-role">
                                UI/UX Designer
                            </span>
                        </div>

                    </div>

                    <p>
                        Focuses on creating clear, intuitive, and
                        user-friendly digital experiences.
                    </p>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection