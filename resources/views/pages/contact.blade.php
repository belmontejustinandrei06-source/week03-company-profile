@extends('layouts.app')

@section('title', 'Contact - TechNova Solutions')

@section('content')

<style>
    :root{
        --tn-paper: #EEF2F6;
        --tn-paper-line: #C9D4E0;
        --tn-ink: #0F2440;
        --tn-ink-soft: #4C5C72;
        --tn-blue: #2F6FED;
        --tn-blue-deep: #1B44A6;
        --tn-white: #FFFFFF;
    }

    *{
        box-sizing: border-box;
    }

    .tn-page{
        position: relative;
        overflow: hidden;

        background: var(--tn-paper);
        color: var(--tn-ink);

        font-family: 'Inter', sans-serif;
    }

    /* =========================
       BACKGROUND GRID
    ========================= */

    .tn-grid-bg{
        position: absolute;
        inset: 0;

        z-index: 0;
        pointer-events: none;

        background-image:
            linear-gradient(var(--tn-paper-line) 1px, transparent 1px),
            linear-gradient(90deg, var(--tn-paper-line) 1px, transparent 1px);

        background-size: 32px 32px;

        opacity: 0.32;
    }

    .tn-glow{
        position: absolute;

        width: 500px;
        height: 500px;

        top: -220px;
        right: -180px;

        background: rgba(47,111,237,0.07);

        border-radius: 50%;
        filter: blur(100px);

        pointer-events: none;
    }

    .tn-section{
        position: relative;
        z-index: 1;

        padding: 100px 0;
    }

    .tn-container{
        width: 100%;
        max-width: 1180px;

        margin: 0 auto;
        padding: 0 40px;

        position: relative;
        z-index: 1;
    }

    /* =========================
       TYPOGRAPHY
    ========================= */

    .tn-page h1,
    .tn-page h2,
    .tn-page h3{
        font-family: 'Space Grotesk', sans-serif;

        color: var(--tn-ink);

        font-weight: 600;

        letter-spacing: -0.025em;
    }

    .tn-mono{
        font-family: 'IBM Plex Mono', monospace;

        font-size: 11px;
        letter-spacing: 0.08em;

        text-transform: uppercase;

        color: var(--tn-blue-deep);
    }

    /* =========================
       HERO
    ========================= */

    .tn-contact-hero{
        text-align: center;

        padding: 120px 0 90px;
    }

    .tn-contact-hero .tn-mono{
        display: inline-block;

        margin-bottom: 22px;

        padding: 7px 12px;

        border: 1px solid #C8D8F5;

        background: rgba(239,246,255,0.8);

        border-radius: 999px;
    }

    .tn-contact-hero h1{
        margin: 0 0 18px;

        font-size: clamp(42px, 5vw, 62px);

        line-height: 1.05;
    }

    .tn-contact-hero h1 span{
        color: var(--tn-blue);
    }

    .tn-contact-hero p{
        max-width: 560px;

        margin: 0 auto;

        color: var(--tn-ink-soft);

        font-size: 17px;

        line-height: 1.75;
    }

    /* =========================
       FIGURE LABEL
    ========================= */

    .tn-fig-tag{
        display: flex;
        align-items: center;

        gap: 14px;

        margin-bottom: 28px;
    }

    .tn-fig-tag .tn-line{
        width: 40px;
        height: 1px;

        flex: 0 0 40px;

        background: var(--tn-blue-deep);
    }

    /* =========================
       CONTACT GRID
    ========================= */

    .tn-contact-grid{
        display: grid;

        grid-template-columns: 0.85fr 1.15fr;

        background: var(--tn-paper-line);

        border: 1px solid var(--tn-paper-line);

        box-shadow:
            0 20px 50px rgba(15,36,64,0.07);
    }

    /* =========================
       INFO PANEL
    ========================= */

    .tn-info-panel{
        padding: 54px 44px;

        background: var(--tn-ink);

        color: #B9C4D6;
    }

    .tn-info-panel h2{
        margin: 0 0 16px;

        color: #FFFFFF;

        font-size: 28px;
    }

    .tn-info-panel > p{
        margin: 0 0 38px;

        color: #8393AC;

        font-size: 14.5px;

        line-height: 1.8;
    }

    .tn-info-item{
        display: flex;

        gap: 16px;

        padding: 20px 0;

        border-top: 1px solid rgba(255,255,255,0.10);
    }

    .tn-info-item:last-child{
        border-bottom: 1px solid rgba(255,255,255,0.10);
    }

    .tn-icon-box{
        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border: 1px solid rgba(47,111,237,0.8);

        background: rgba(47,111,237,0.06);
    }

    .tn-icon-box svg{
        width: 17px;
        height: 17px;

        stroke: var(--tn-blue);

        fill: none;

        stroke-width: 1.6;
    }

    .tn-info-item .tn-label{
        margin-bottom: 5px;

        font-family: 'IBM Plex Mono', monospace;

        font-size: 10px;

        letter-spacing: 0.08em;

        text-transform: uppercase;

        color: #6C7C99;
    }

    .tn-info-item .tn-value{
        color: #FFFFFF;

        font-size: 14px;

        line-height: 1.55;
    }

    /* =========================
       FORM PANEL
    ========================= */

    .tn-form-panel{
        padding: 54px 48px;

        background: #FFFFFF;
    }

    .tn-form-panel h2{
        margin: 0 0 8px;

        font-size: 27px;
    }

    .tn-form-sub{
        margin: 0 0 34px;

        color: var(--tn-ink-soft);

        font-size: 14px;

        line-height: 1.7;
    }

    /* =========================
       FORM
    ========================= */

    .tn-field{
        margin-bottom: 22px;
    }

    .tn-field label{
        display: block;

        margin-bottom: 8px;

        font-family: 'IBM Plex Mono', monospace;

        font-size: 10.5px;

        letter-spacing: 0.08em;

        text-transform: uppercase;

        color: var(--tn-blue-deep);
    }

    .tn-field input,
    .tn-field textarea{
        width: 100%;

        padding: 14px;

        border: 1px solid var(--tn-paper-line);

        border-radius: 3px;

        background: var(--tn-paper);

        color: var(--tn-ink);

        font-family: 'Inter', sans-serif;

        font-size: 14px;

        transition:
            border-color 0.2s ease,
            background 0.2s ease,
            box-shadow 0.2s ease;
    }

    .tn-field input{
        height: 48px;
    }

    .tn-field textarea{
        min-height: 140px;

        resize: vertical;
    }

    .tn-field input::placeholder,
    .tn-field textarea::placeholder{
        color: #8FA0B8;
    }

    .tn-field input:focus,
    .tn-field textarea:focus{
        outline: none;

        border-color: var(--tn-blue);

        background: #FFFFFF;

        box-shadow: 0 0 0 3px rgba(47,111,237,0.08);
    }

    /* =========================
       BUTTON
    ========================= */

    .tn-btn{
        width: 100%;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 10px;

        padding: 15px 28px;

        border: 1px solid var(--tn-ink);

        border-radius: 3px;

        background: var(--tn-ink);

        color: #FFFFFF;

        font-family: 'Space Grotesk', sans-serif;

        font-size: 14px;
        font-weight: 600;

        cursor: pointer;

        transition:
            background 0.2s ease,
            border-color 0.2s ease,
            transform 0.15s ease;
    }

    .tn-btn svg{
        width: 16px;
        height: 16px;

        stroke: currentColor;

        fill: none;

        stroke-width: 1.8;
    }

    .tn-btn:hover{
        background: var(--tn-blue-deep);

        border-color: var(--tn-blue-deep);

        transform: translateY(-1px);
    }

    .tn-btn:active{
        transform: translateY(0);
    }

    /* =========================
       FOOTNOTE
    ========================= */

    .tn-contact-note{
        margin-top: 18px;

        text-align: center;

        color: #718198;

        font-size: 12px;
    }

    /* =========================
       RESPONSIVE
    ========================= */

    @media (max-width: 900px){

        .tn-container{
            padding: 0 24px;
        }

        .tn-contact-grid{
            grid-template-columns: 1fr;
        }

        .tn-info-panel,
        .tn-form-panel{
            padding: 42px 30px;
        }
    }

    @media (max-width: 700px){

        .tn-section{
            padding: 75px 0;
        }

        .tn-contact-hero{
            padding: 85px 0 70px;
        }

        .tn-contact-hero h1{
            font-size: 42px;
        }

        .tn-contact-hero p{
            font-size: 15px;
        }
    }

    @media (max-width: 480px){

        .tn-container{
            padding: 0 18px;
        }

        .tn-info-panel,
        .tn-form-panel{
            padding: 34px 22px;
        }

        .tn-contact-hero h1{
            font-size: 38px;
        }

        .tn-info-panel h2,
        .tn-form-panel h2{
            font-size: 24px;
        }

        .tn-info-item{
            gap: 12px;
        }
    }
</style>


<div class="tn-page">

    {{-- Background --}}
    <div class="tn-grid-bg"></div>
    <div class="tn-glow"></div>


    {{-- =========================
         HERO
    ========================== --}}

    <section class="tn-section tn-contact-hero">

        <div class="tn-container">

            <span class="tn-mono">
                TechNova / Contact
            </span>

            <h1>
                Let's build something
                <span>better.</span>
            </h1>

            <p>
                Have a project in mind, a technology challenge,
                or simply want to learn more about our services?
                Send us a message and let's start the conversation.
            </p>

        </div>

    </section>


    {{-- =========================
         CONTACT BODY
    ========================== --}}

    <section
        class="tn-section"
        style="padding-top:0; padding-bottom:120px;"
    >

        <div class="tn-container">

            <div class="tn-fig-tag">

                <div class="tn-line"></div>

                <span class="tn-mono">
                    Contact Details
                </span>

            </div>


            <div class="tn-contact-grid">


                {{-- =========================
                     INFORMATION
                ========================== --}}

                <div class="tn-info-panel">

                    <h2>
                        Contact Information
                    </h2>

                    <p>
                        Our team is ready to discuss your technology
                        needs and explore practical solutions for your
                        business.
                    </p>


                    {{-- Address --}}
                    <div class="tn-info-item">

                        <div class="tn-icon-box">

                            <svg viewBox="0 0 24 24">
                                <path d="M12 21s-7-6.5-7-11a7 7 0 0 1 14 0c0 4.5-7 11-7 11Z"/>
                                <circle cx="12" cy="10" r="2.4"/>
                            </svg>

                        </div>

                        <div>

                            <div class="tn-label">
                                Address
                            </div>

                            <div class="tn-value">
                                123 Technology Avenue,<br>
                                Manila, Philippines
                            </div>

                        </div>

                    </div>


                    {{-- Email --}}
                    <div class="tn-info-item">

                        <div class="tn-icon-box">

                            <svg viewBox="0 0 24 24">
                                <rect
                                    x="2"
                                    y="4"
                                    width="20"
                                    height="16"
                                    rx="1.5"
                                />

                                <path d="m3 6 9 7 9-7"/>
                            </svg>

                        </div>

                        <div>

                            <div class="tn-label">
                                Email
                            </div>

                            <div class="tn-value">
                                info@technova.com
                            </div>

                        </div>

                    </div>


                    {{-- Phone --}}
                    <div class="tn-info-item">

                        <div class="tn-icon-box">

                            <svg viewBox="0 0 24 24">
                                <path d="M4 5c0 8.5 6.5 15 15 15l3-4-6-2-2 2c-2.5-1-4-2.5-5-5l2-2-2-6-4 1Z"/>
                            </svg>

                        </div>

                        <div>

                            <div class="tn-label">
                                Phone
                            </div>

                            <div class="tn-value">
                                +63 912 345 6789
                            </div>

                        </div>

                    </div>


                    {{-- Social --}}
                    <div class="tn-info-item">

                        <div class="tn-icon-box">

                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M3 12h18"/>
                                <path d="M12 3a14 14 0 0 1 0 18"/>
                                <path d="M12 3a14 14 0 0 0 0 18"/>
                            </svg>

                        </div>

                        <div>

                            <div class="tn-label">
                                Social Media
                            </div>

                            <div class="tn-value">
                                Facebook · LinkedIn · Instagram
                            </div>

                        </div>

                    </div>

                </div>


                {{-- =========================
                     MESSAGE FORM
                ========================== --}}

                <div class="tn-form-panel">

                    <h2>
                        Send Us a Message
                    </h2>

                    <p class="tn-form-sub">
                        Fill in the details below and tell us how
                        we can help. We usually reply within one
                        business day.
                    </p>


                    <form method="POST" action="#">

                        @csrf


                        {{-- Name --}}
                        <div class="tn-field">

                            <label for="name">
                                Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Your name"
                                autocomplete="name"
                            >

                        </div>


                        {{-- Email --}}
                        <div class="tn-field">

                            <label for="email">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="you@example.com"
                                autocomplete="email"
                            >

                        </div>


                        {{-- Message --}}
                        <div class="tn-field">

                            <label for="message">
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Tell us about your project or inquiry..."
                            ></textarea>

                        </div>


                        {{-- Submit --}}
                        <button
                            type="submit"
                            class="tn-btn"
                        >

                            Send Message

                            <svg viewBox="0 0 24 24">
                                <path d="M4 12h15"/>
                                <path d="m13 6 6 6-6 6"/>
                            </svg>

                        </button>

                    </form>


                    <p class="tn-contact-note">
                        Your information will only be used to respond
                        to your inquiry.
                    </p>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection