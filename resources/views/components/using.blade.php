<section class="skills-section">
    <div class="container text-center">
        <h2 class="mb-4">Technologies I Use</h2>
        <div class="row justify-content-center">
            @php
                $technologies = [
                    ['name' => 'PHP', 'svg' => '<svg viewBox="0 0 24 24"><path fill="#777BB3" d="M2.03 12c0 5.52 4.49 10 10.02 10s10.02-4.48 10.02-10-4.49-10-10.02-10S2.03 6.48 2.03 12m4.59 3.79h2.06l.4-2.01h2.19l-.4 2.01h2.06l.97-5.12H7.71l.42-2.15h2.19l-.4 2.01h2.06l.97-5.12H9.34l-.39 2.01H6.89z"/></svg>'],
                    ['name' => 'Laravel', 'svg' => '<svg viewBox="0 0 24 24"><path fill="#FF2D20" d="M12 0L1.5 4.5v15L12 24l10.5-4.5v-15zm0 2.7l8.25 3.3-2.1 1.2-6.15-2.55-6.15 2.55-2.1-1.2zM4.5 8.55l6.15-2.55v9.45l-6.15 2.55zm15 0v9.45l-6.15 2.55V6l6.15 2.55z"/></svg>'],
                    ['name' => 'JavaScript', 'svg' => '<svg viewBox="0 0 24 24"><path fill="#F7DF1E" d="M12 .32L0 4.5v15l12 4.18 12-4.18v-15zm.001 1.97l9.059 3.2-2.384 1.46-6.675-2.35-6.675 2.35-2.384-1.46zm-9 5.8l6.63-2.36V19.4l-6.63 2.35zm9 2.37l6.63-2.36v11.84l-6.63 2.35zm7.49-2.83v11.98l-2.49 1.45V9.38z"/></svg>'],
                    ['name' => 'React.js', 'svg' => '<svg viewBox="0 0 24 24"><path fill="#61DAFB" d="M12 0c-3.284 0-6.512.595-9.6 1.769-1.156 4.154-.09 8.58 2.7 11.181-2.79 2.601-3.856 7.027-2.7 11.181 3.088 1.173 6.316 1.769 9.6 1.769s6.512-.595 9.6-1.769c1.156-4.154.09-8.58-2.7-11.181 2.79-2.601 3.856-7.027 2.7-11.181C18.512.595 15.284 0 12 0zm0 3.2c1.142 0 2.067.925 2.067 2.067s-.925 2.067-2.067 2.067-2.067-.925-2.067-2.067.925-2.067 2.067-2.067z"/></svg>'],
                    ['name' => 'Express.js', 'svg' => '<svg viewBox="0 0 24 24"><path fill="#000000" d="M2 3h20v18H2z"/></svg>'],
                    ['name' => 'MySQL', 'svg' => '<svg viewBox="0 0 24 24"><path fill="#4479A1" d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm-.3 5.2c2.7-.1 5.3.7 7.5 2.3 1.4.9 2.5 2.1 3.5 3.4-.8 2.2-1.8 4.3-3.1 6.2-1.6 2.3-4 4-6.8 4.9l-1.6-1.3c1.2-.9 2.1-2.3 2.3-3.9l.6.3c.8 1.3 1.6 2.7 3.1 3.4 1.1.6 2.4.7 3.7.4.9-.3 1.7-.8 2.4-1.4.6-.7 1.1-1.5 1.6-2.3.2-.3.3-.6.4-.9-.7-.2-1.3-.4-2-.5-.4.7-.8 1.4-1.3 2-.4.5-1 .9-1.7.9-.7 0-1.4-.4-1.9-.8-1.1-.9-1.7-2.3-2.2-3.6-.6-1.6-1.1-3.3-1.5-5C8.3 7 9.3 5.3 11.7 5.2z"/></svg>'],
                    ['name' => 'PostgreSQL', 'svg' => '<svg viewBox="0 0 24 24"><path fill="#336791" d="M12 0C5.37 0 0 5.37 0 12s5.37 12 12 12 12-5.37 12-12S18.63 0 12 0z"/></svg>'],
                ];
            @endphp

            @foreach ($technologies as $tech)
                <div class="col-6 col-md-3 text-center mb-4">
                    <div class="tech-card">
                        <div class="tech-logo">{!! $tech['svg'] !!}</div>
                        <p class="tech-name">{{ $tech['name'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .skills-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }

    .tech-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: transform 0.3s ease-in-out;
    }

    .tech-card:hover {
        transform: scale(1.1);
    }

    .tech-logo svg {
        width: 80px;
        height: 80px;
        transition: transform 0.3s ease-in-out;
    }

    .tech-card:hover .tech-logo svg {
        transform: scale(1.2);
    }

    .tech-name {
        margin-top: 10px;
        font-size: 16px;
        font-weight: 600;
    }
</style>
