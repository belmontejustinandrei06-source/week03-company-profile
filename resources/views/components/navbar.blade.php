<style>
    :root{
        --tn-bg: #f8fafc;
        --tn-white: #ffffff;
        --tn-text: #0f172a;
        --tn-muted: #64748b;
        --tn-blue: #2563eb;
        --tn-blue-light: #eff6ff;
        --tn-border: #e2e8f0;
    }

    /* =========================
       NAVBAR
    ========================= */

    .tn-nav{
        position: sticky;
        top: 0;
        z-index: 100;

        padding: 14px 20px;

        background: rgba(248,250,252,0.88);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);

        font-family: 'Inter', sans-serif;
    }

    .tn-nav-inner{
        max-width: 1180px;
        margin: 0 auto;

        min-height: 62px;
        padding: 0 10px 0 20px;

        display: flex;
        align-items: center;
        justify-content: space-between;

        background: rgba(255,255,255,0.94);

        border: 1px solid var(--tn-border);
        border-radius: 16px;

        box-shadow:
            0 4px 20px rgba(15,23,42,0.05),
            0 1px 3px rgba(15,23,42,0.04);
    }

    /* =========================
       LOGO
    ========================= */

    .tn-nav-logo{
        display: flex;
        align-items: center;
        gap: 10px;

        color: var(--tn-text);
        text-decoration: none;

        font-family: 'Space Grotesk', sans-serif;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: -0.025em;

        white-space: nowrap;
    }

    .tn-mark{
        width: 30px;
        height: 30px;

        display: grid;
        place-items: center;

        background: var(--tn-text);

        border-radius: 9px;

        position: relative;

        overflow: hidden;
    }

    .tn-mark::before{
        content: '';

        width: 12px;
        height: 12px;

        background: var(--tn-blue);

        border-radius: 3px;

        transform: rotate(45deg);
    }

    /* =========================
       NAVIGATION
    ========================= */

    .tn-nav-links{
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .tn-nav-links a{
        position: relative;

        display: flex;
        align-items: center;

        padding: 9px 14px;

        color: var(--tn-muted);

        text-decoration: none;

        font-size: 14px;
        font-weight: 500;

        border-radius: 9px;

        transition:
            color 0.2s ease,
            background 0.2s ease,
            transform 0.2s ease;
    }

    .tn-nav-links a:hover{
        color: var(--tn-text);
        background: #f8fafc;
    }

    /* Active page */

    .tn-nav-links a.tn-active{
        color: var(--tn-blue);
        background: var(--tn-blue-light);
        font-weight: 600;
    }

    /* =========================
       CONTACT BUTTON
    ========================= */

    .tn-nav-contact{
        margin-left: 8px;

        display: flex;
        align-items: center;
        gap: 7px;

        padding: 10px 16px;

        color: #fff !important;
        background: var(--tn-text);

        border-radius: 9px;

        font-size: 13px !important;
        font-weight: 600 !important;

        text-decoration: none;

        transition:
            background 0.2s ease,
            transform 0.2s ease,
            box-shadow 0.2s ease;
    }

    .tn-nav-contact:hover{
        color: #fff !important;
        background: var(--tn-blue) !important;

        transform: translateY(-1px);

        box-shadow: 0 5px 15px rgba(37,99,235,0.18);
    }

    .tn-nav-contact::after{
        content: '↗';

        font-size: 14px;

        transition: transform 0.2s ease;
    }

    .tn-nav-contact:hover::after{
        transform: translate(2px,-2px);
    }

    /* =========================
       MOBILE TOGGLE
    ========================= */

    .tn-nav-check{
        display: none;
    }

    .tn-nav-toggle{
        display: none;

        width: 42px;
        height: 42px;

        align-items: center;
        justify-content: center;
        flex-direction: column;

        gap: 5px;

        background: #f8fafc;

        border: 1px solid var(--tn-border);
        border-radius: 10px;

        cursor: pointer;
    }

    .tn-nav-toggle span{
        width: 18px;
        height: 1.5px;

        background: var(--tn-text);

        border-radius: 2px;

        transition:
            transform 0.25s ease,
            opacity 0.2s ease;
    }

    /* =========================
       TABLET / MOBILE
    ========================= */

    @media (max-width: 860px){

        .tn-nav{
            padding: 10px 14px;
        }

        .tn-nav-inner{
            padding: 0 8px 0 16px;
            min-height: 58px;

            border-radius: 14px;
        }

        .tn-nav-toggle{
            display: flex;
        }

        .tn-nav-links{
            position: absolute;

            top: calc(100% + 8px);
            left: 14px;
            right: 14px;

            display: flex;
            flex-direction: column;
            align-items: stretch;

            padding: 8px;

            background: rgba(255,255,255,0.98);

            border: 1px solid var(--tn-border);
            border-radius: 14px;

            box-shadow:
                0 15px 40px rgba(15,23,42,0.10);

            opacity: 0;
            visibility: hidden;
            transform: translateY(-8px);

            transition:
                opacity 0.2s ease,
                transform 0.2s ease,
                visibility 0.2s ease;
        }

        .tn-nav-links a{
            padding: 13px 14px;

            width: 100%;
            box-sizing: border-box;
        }

        .tn-nav-contact{
            margin: 4px 0 0;

            justify-content: center;
        }

        /* Open menu */

        .tn-nav-check:checked ~ .tn-nav-links{
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Hamburger → X */

        .tn-nav-check:checked ~ .tn-nav-toggle span:nth-child(1){
            transform: translateY(6.5px) rotate(45deg);
        }

        .tn-nav-check:checked ~ .tn-nav-toggle span:nth-child(2){
            opacity: 0;
        }

        .tn-nav-check:checked ~ .tn-nav-toggle span:nth-child(3){
            transform: translateY(-6.5px) rotate(-45deg);
        }
    }

    /* =========================
       SMALL PHONES
    ========================= */

    @media (max-width: 480px){

        .tn-nav-logo{
            font-size: 16px;
        }

        .tn-mark{
            width: 28px;
            height: 28px;
        }

        .tn-nav{
            padding: 8px 10px;
        }

        .tn-nav-inner{
            padding-left: 12px;
        }

        .tn-nav-links{
            left: 10px;
            right: 10px;
        }
    }
</style>


<nav class="tn-nav">

    <div class="tn-nav-inner">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="tn-nav-logo">
            <span class="tn-mark"></span>
            TechNova Solutions
        </a>


        <!-- Mobile checkbox -->
        <input
            type="checkbox"
            id="tn-nav-check"
            class="tn-nav-check"
        >


        <!-- Navigation -->
        <div class="tn-nav-links">

            <a
                href="{{ route('home') }}"
                class="{{ Request::routeIs('home') ? 'tn-active' : '' }}"
            >
                Home
            </a>

            <a
                href="{{ route('about') }}"
                class="{{ Request::routeIs('about') ? 'tn-active' : '' }}"
            >
                About
            </a>

            <a
                href="{{ route('services') }}"
                class="{{ Request::routeIs('services') ? 'tn-active' : '' }}"
            >
                Services
            </a>

            <a
                href="{{ route('contact') }}"
                class="tn-nav-contact"
            >
                Contact
            </a>

        </div>


        <!-- Mobile button -->
        <label
            for="tn-nav-check"
            class="tn-nav-toggle"
            aria-label="Toggle navigation"
        >
            <span></span>
            <span></span>
            <span></span>
        </label>

    </div>

</nav>