<?php
/**
 * Template Name: KYLF Homepage
 *
 * This file is a custom template for the Know Your Local Florida homepage.
 * It's designed to work with the WordPress Block Editor for content management.
 *
 * @package streamit-child
 */

get_header();
?>

<main id="main" class="site-main">

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-video-background">
            <video class="hero-video" autoplay muted loop playsinline>
                <!-- Video will be set in the WordPress dashboard or a custom field -->
                <source src="https://assets.mixkit.co/videos/preview/mixkit-friends-at-a-dinner-party-in-a-restaurant-4493-large.mp4" type="video/mp4">
            </video>
        </div>
        <div class="hero-overlay">
            <div class="hero-content">
                <h1 class="hero-title">
                    <span class="animated-word" id="heroAnimatedWord">Discover</span> Key West
                </h1>
                <p class="hero-subtitle">
                    Find your authentic island experience with local love.
                </p>
                <div class="hero-search-container">
                    <input type="text" class="hero-search-input" placeholder="Search for local businesses...">
                    <button class="hero-search-btn">Search</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Buttons Section -->
    <section class="category-section">
        <div class="category-container">
            <a href="#restaurants-section" class="category-btn">
                <svg class="category-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 2v7c0 1.1.9 2 2 2h2a2 2 0 0 0 2-2V2M7 2v20M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3z"/></svg>
                <span>Local Flavors</span>
            </a>
            <a href="#lodging-section" class="category-btn">
                <svg class="category-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7v11a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7z"></path><path d="M3 7V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v2"></path><path d="M7 11h10"></path></svg>
                <span>Island Retreats</span>
            </a>
            <a href="#shopping-section" class="category-btn">
                <svg class="category-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="m16 10a4 4 0 0 1-8 0"></path></svg>
                <span>Unique Finds</span>
            </a>
            <a href="#services-section" class="category-btn">
                <svg class="category-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                <span>Trusted Locals</span>
            </a>
            <a href="#events-preview-section" class="category-btn">
                <svg class="category-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <span>Island Happenings</span>
            </a>
            <a href="#explore-section" class="category-btn">
                <svg class="category-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21.6c-4.4 0-8-3.6-8-8 0-4.4 3.6-8 8-8 4.4 0 8 3.6 8 8 0 4.4-3.6 8-8 8z"/><path d="M21.5 21.5L18 18"/></svg></div>
                            <div class="dropdown-content"><span class="dropdown-title">Explore Key West</span><span class="dropdown-description">Discovery challenges</span></div>
                        </a>
                    </nav>
                </div>
            </div>
            
            <div class="header-center">
                <div class="logo">
                    <!-- Dynamic logo from WordPress Customizer -->
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/Yellow-logo-Horizontal.png'); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo-image">
                        </a>
                    <?php endif; ?>
                    <div class="beta-badge">BETA</div>
                </div>
            </div>

            <div class="header-right">
                <button class="search-toggle-btn" id="searchBtn">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <circle cx="10" cy="10" r="7"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                </button>
                <div class="auth-separator"></div>
                <div class="auth-section">
                    <button class="login-btn" id="loginBtn">Sign In</button>
                    <button class="signup-btn" id="signupBtn">Get Started</button>
                </div>
            </div>
        </div>
    </header>

    <div class="site-content-contain">
        <div id="content" class="site-content">
            <?php
            /**
             * The following PHP code from the parent theme is now a placeholder.
             * It's good practice to have it here in case a page template calls it,
             * but it won't execute on pages that use our new custom-built templates.
             */
            // get_template_part('template-parts/breadcrumb/breadcrumb');
            ?>
        </div>
    </div>
    
    <!-- JavaScript for Menu functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('menuBtn');
            const dropdownMenu = document.getElementById('dropdownMenu');
            const dropdownOverlay = document.getElementById('dropdownOverlay');
            const closeMenuBtn = document.getElementById('closeMenuBtn');
            const loginBtn = document.getElementById('loginBtn');
            const signupBtn = document.getElementById('signupBtn');
            
            function toggleMenu() {
                dropdownMenu.classList.toggle('active');
                dropdownOverlay.classList.toggle('active');
                menuBtn.classList.toggle('active');
            }

            menuBtn.addEventListener('click', toggleMenu);
            closeMenuBtn.addEventListener('click', toggleMenu);
            dropdownOverlay.addEventListener('click', toggleMenu);
            
            // Placeholder functions for login/signup
            loginBtn.addEventListener('click', () => {
                alert('Login functionality coming soon!');
            });
            signupBtn.addEventListener('click', () => {
                alert('Signup functionality coming soon!');
            });
        });
    </script>
