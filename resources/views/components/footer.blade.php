<footer style="
    background: #0f172a;
    color: #cbd5e1;
    margin-top: 60px;
    padding: 40px 0 20px;
">

    <div class="container">

        {{-- =========================
             FOOTER TOP
        ========================== --}}

        <div style="
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            flex-wrap: wrap;
            padding-bottom: 28px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        ">


            {{-- COMPANY --}}

            <div style="
                max-width: 420px;
            ">

                <h3 style="
                    margin: 0 0 10px;
                    color: #ffffff;
                    font-family: 'Space Grotesk', sans-serif;
                    font-size: 20px;
                    font-weight: 600;
                    letter-spacing: -0.02em;
                ">
                    TechNova Solutions
                </h3>

                <p style="
                    margin: 0;
                    color: #94a3b8;
                    font-family: 'Inter', sans-serif;
                    font-size: 14px;
                    line-height: 1.7;
                ">
                    Innovative technology solutions for modern businesses.
                    We help organizations use technology to work smarter,
                    improve productivity, and grow.
                </p>

            </div>


            {{-- CONTACT --}}

            <div>

                <p style="
                    margin: 0 0 10px;
                    color: #64748b;
                    font-family: 'Inter', sans-serif;
                    font-size: 12px;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: 0.08em;
                ">
                    Contact
                </p>

                <p style="
                    margin: 0 0 6px;
                    color: #cbd5e1;
                    font-family: 'Inter', sans-serif;
                    font-size: 14px;
                ">
                    info@technova.com
                </p>

                <p style="
                    margin: 0;
                    color: #cbd5e1;
                    font-family: 'Inter', sans-serif;
                    font-size: 14px;
                ">
                    +63 912 345 6789
                </p>

            </div>


            {{-- SOCIAL --}}

            <div>

                <p style="
                    margin: 0 0 10px;
                    color: #64748b;
                    font-family: 'Inter', sans-serif;
                    font-size: 12px;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: 0.08em;
                ">
                    Follow Us
                </p>

                <div style="
                    display: flex;
                    align-items: center;
                    gap: 16px;
                ">

                    <a
                        href="#"
                        style="
                            color: #94a3b8;
                            font-family: 'Inter', sans-serif;
                            font-size: 14px;
                            text-decoration: none;
                            transition: color 0.2s ease;
                        "
                        onmouseover="this.style.color='#ffffff'"
                        onmouseout="this.style.color='#94a3b8'"
                    >
                        Facebook
                    </a>

                    <a
                        href="#"
                        style="
                            color: #94a3b8;
                            font-family: 'Inter', sans-serif;
                            font-size: 14px;
                            text-decoration: none;
                            transition: color 0.2s ease;
                        "
                        onmouseover="this.style.color='#ffffff'"
                        onmouseout="this.style.color='#94a3b8'"
                    >
                        LinkedIn
                    </a>

                    <a
                        href="#"
                        style="
                            color: #94a3b8;
                            font-family: 'Inter', sans-serif;
                            font-size: 14px;
                            text-decoration: none;
                            transition: color 0.2s ease;
                        "
                        onmouseover="this.style.color='#ffffff'"
                        onmouseout="this.style.color='#94a3b8'"
                    >
                        Instagram
                    </a>

                </div>

            </div>

        </div>


        {{-- =========================
             COPYRIGHT
        ========================== --}}

        <div style="
            padding-top: 20px;
            text-align: center;
        ">

            <p style="
                margin: 0;
                color: #64748b;
                font-family: 'Inter', sans-serif;
                font-size: 13px;
                line-height: 1.5;
            ">
                &copy; {{ date('Y') }} TechNova Solutions.
                All rights reserved.
            </p>

        </div>

    </div>

</footer>