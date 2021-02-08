<?php

/**
 * The template for the front page
 *
 * Contains  Custom Front Page Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Azara-theme
 */

get_header();
?>
<div class="site-inner">
    <div class="hero-block block--blue">
        <div class="row">
            <div class="col-md hero-column__container">
                <div class="hero-block__header">
                    <h1>The Human Services Industry is in Crisis.</h1>
                </div>
                <div class="hero-block__subheader">
                    <h2>How will you respond?</h2>
                </div>
                <div class="hero-block__text">
                    <p>Amidst a global economic downturn, Human Services agencies are being asked to do even more with even less.</p>
                </div>
            </div>
            <div class="col-md hero-column__bubble">
                <img src="<?php echo get_theme_file_uri('/img/hero-bubble.png') ?>" alt="Hero-Bubble"/>
            </div>
        </div>
    </div>

    <div class="block-2">
        <div class="row">
            <div class="col-md"><img src="<?php echo get_theme_file_uri('/img/case-workers.png') ?>" alt="Case Workers"></div>
            <div class="col-md block-2-column__container">
                <h1>Traditional Care Delivery No Longer Works.</h1>
                <p>As agencies scramble to deliver care in a digital world, they lack the technology and industry-wide processes to ensure success with teams, families, and the people they serve.</p>
            </div>
        </div>
        <div class="row card-row__container">
            <div class="col-md front-page__card">
                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/document.svg' ); ?>
                <h3>Critical data is getting lost.</h3>
                <p>Stuck with paper records and outdated systems, agencies have no easy way to track progress or share results. There’s no uniform method to ensure goals are met.</p>
            </div>
            <div class="col-md front-page__card">
                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/restricted.svg' ); ?>
                <h3>Agencies cannot provide effective service.</h3>
                <p>Agencies are being challenged to do more with less. Dwindling budgets, lack of qualified staff, and restrictions on in-person care have left them ill-equipped to deliver quality services.</p>
            </div>
            <div class="col-md front-page__card">
                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/family.svg' ); ?>
                <h3>Families are in the dark.</h3>
                <p>With no industry-wide standard for secure, digital communications with families, there is no simple process for keeping them informed nor receiving feedback when there’s a problem.</p>
            </div>
        </div>
    </div>

    <div class="block-3">
        <div class="block-3__container">
            <h1>It’s a New World. We Need New Tools.</h1>
            <p>Agencies have been fighting for new solutions and technology that can redefine the managed care industry. Now, it’s here.</p>
        </div>
    </div>

    <div class="block-4">
        <div class="row">
            <div class="col-md mock-up-col"> <img src="<?php echo get_theme_file_uri('/img/mockup.png') ?>" alt="Mockup"/></div>
            <div class="col-md block-4-culumn__container">
                <img src="<?php echo get_theme_file_uri('/img/logo.png') ?>" alt="Azara Logo"/>
                <h1>Revolutionize Care Delivery. Bring Your Industry Forward.</h1>
                <p>Azara Healthcare is the solution for Human Services agencies delivering care and providing effective support in a digital world.</p>
            </div>
        </div>
        <div class="row card-row__container">
            <div class="col-md front-page__card">
                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/progress.svg' ); ?>
                <h3>Track Progress</h3>
                <p>Monitor your organization’s data on a secure, private platform. Log progress, track results & communicate seamlessly with key stakeholders to ensure success.</p>
            </div>
            <div class="col-md front-page__card">
                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/care.svg' ); ?>
                <h3>Ensure quality service.</h3>
                <p>Empower your team to provide virtual supports, conduct quality assurance checks, easily collect critical documentation, and effectively handle increased volume—no matter where they are.</p>
            </div>
            <div class="col-md front-page__card">
                <?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/happy-family.svg' ); ?>
                <h3>Keep families happy.</h3>
                <p>Help families see their loved ones’ progress and the moments that matter. Keep them connected, informed, and engaged with the programs and services you’re providing.</p>
            </div>
        </div>
    </div>

    <div class="block-5">
        <div class="row block-5-row__container">
            <div class="quote-background__container"></div>
            <div class="col-md-8">
                <h2>“I love using the Azara app and seeing what everyone is doing during this difficult time. It is evident how much compassion and respect we all have for one another!”</h2>
                <p>- Service Coordinator, <i>Massachusetts Department of Developmental Services</i></p>
            </div>
            <div class="col-md-4">
                <div class="dds-logo__container">
                    <img src="<?php echo get_theme_file_uri('/img/DDS-logo.png') ?>" alt="DDS Logo"/>
                </div>
            </div>
        </div>
        <div class="block_5__elipses">
            <i class="fas fa-circle"></i>
            <i class="far fa-circle"></i>
            <i class="far fa-circle"></i>
        </div>
    </div>

    <div class="block-6">
        <h1>Built to protect your data and your community.</h1>
        <div class="row check-card-row__container">
            <div class="col-md check-card__container check-card-1">
                <div class="check-card__svg-check"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/check.svg' ); ?></div>
                <div class="check-card-icon__container"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/medical.svg' ); ?></div>
                <p>HIPPA Compliant</p>
            </div>
            <div class="col-md check-card__container check-card-2">
                <div class="check-card__svg-check"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/check.svg' ); ?></div>
                <div class="check-card-icon__container"><?php echo file_get_contents( get_stylesheet_directory_uri() . '/img/lock.svg' ); ?></div>
                <p>TLS Protection</p>
            </div>
        </div>
        <div class="front-page__button"><a href="<?php echo esc_url( home_url( '/security' ) ); ?>"><button class="orange-button">see all security features</button></a></div>
    </div>

    <div class="block-7">
        <div class="row">
            <div class="col-md circle-column">
                <h1>Get a 5-Minute FREE Virtual Tour of the Platform.</h1>
                <p>In just a 5-minute call with our team, you’ll get:
                    <ul>
                        <li><strong>A free tour</strong> of the app</li>
                        <li><strong>Real-world examples</strong> of how it’s helping agencies.</li>
                        <li><strong>A roadmap</strong> for how it can be customized for your team.</li>
                    </ul>
                </p>
            </div>
            <div class="col-md">
                <h2>SEE IF AZARA HEALTHCARE IS RIGHT FOR YOU.</h2>
                <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]') ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer() ?>
