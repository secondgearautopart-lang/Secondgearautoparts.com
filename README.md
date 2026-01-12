# Secondgearautoparts.com
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoPartsPro - Premium Auto Parts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/framer-motion@10.16.4/dist/framer-motion.umd.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
            background-color: #ffffff;
        }

        /* Navigation Styles */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            background: white;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            padding: 1rem 1.5rem;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            gap: 2rem;
        }

        .nav-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            gap: 1.5rem;
            list-style: none;
        }

        .nav-link {
            color: #4b5563;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #111827;
        }

        .nav-buttons {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .btn {
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background: #7c3aed;
            color: white;
        }

        .btn-primary:hover {
            background: #6d28d9;
        }

        .btn-secondary {
            border: 1px solid #d1d5db;
            color: #374151;
        }

        .btn-secondary:hover {
            background: #f9fafb;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #4b5563;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            position: relative;
            padding-top: 80px;
            padding-bottom: 4rem;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, #eff6ff 0%, #ede9fe 100%);
            z-index: -1;
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            mix-blend-mode: multiply;
            opacity: 0.7;
            animation: blob 7s infinite;
        }

        .blob-1 {
            width: 256px;
            height: 256px;
            background: #c7d2fe;
            top: 40px;
            right: 40px;
        }

        .blob-2 {
            width: 256px;
            height: 256px;
            background: #fef3c7;
            bottom: 80px;
            left: 40px;
            animation-delay: 2s;
        }

        .blob-3 {
            width: 256px;
            height: 256px;
            background: #fbcfe8;
            top: 50%;
            right: 80px;
            animation-delay: 4s;
        }

        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -70px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            color: #1f2937;
            margin-bottom: 1rem;
        }

        .hero-text p {
            font-size: 1.25rem;
            color: #4b5563;
            margin-bottom: 2rem;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .hero-stats {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .status-indicator {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            color: #4b5563;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .status-available { background: #10b981; }
        .status-online { background: #3b82f6; }

        .hero-image {
            position: relative;
        }

        .hero-img-container {
            position: relative;
            width: 100%;
            height: 400px;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .hero-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 100%);
        }

        .hero-caption {
            position: absolute;
            bottom: 1.5rem;
            left: 1.5rem;
            right: 1.5rem;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 0.5rem;
            padding: 1rem;
        }

        .hero-caption h3 {
            font-size: 1.125rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.5rem;
        }

        .hero-caption p {
            font-size: 0.875rem;
            color: #4b5563;
            margin-bottom: 0.75rem;
        }

        .hero-caption a {
            color: #7c3aed;
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
        }

        /* Services Section */
        .section {
            padding: 4rem 0;
        }

        .section-dark {
            background: #111827;
            color: white;
        }

        .section-light {
            background: linear-gradient(135deg, #eff6ff 0%, #ede9fe 100%);
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
            max-width: 768px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-title {
            font-size: 2.25rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .section-dark .section-title {
            color: white;
        }

        .section-light .section-title {
            color: #1f2937;
        }

        .section-description {
            font-size: 1.125rem;
            line-height: 1.6;
            opacity: 0.8;
        }

        .section-dark .section-description {
            color: #9ca3af;
        }

        .section-light .section-description {
            color: #4b5563;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .service-card {
            background: #1f2937;
            border-radius: 0.75rem;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        .service-image {
            height: 200px;
            overflow: hidden;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .service-content {
            padding: 1.5rem;
        }

        .service-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .service-description {
            color: #9ca3af;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .service-link {
            color: #a78bfa;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Products Section */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .product-card {
            background: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .product-image {
            aspect-ratio: 16/9;
            margin-bottom: 1rem;
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: #1f2937;
        }

        .product-description {
            color: #4b5563;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .product-link {
            color: #7c3aed;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Stats Section */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto 3rem;
            padding: 0 1.5rem;
        }

        .stat-card {
            background: #1f2937;
            border-radius: 0.75rem;
            padding: 1.5rem;
            text-align: center;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: #a78bfa;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #9ca3af;
            font-size: 0.875rem;
        }

        /* Success Stories */
        .stories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .story-card {
            background: #f9fafb;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .story-image {
            aspect-ratio: 16/9;
            overflow: hidden;
        }

        .story-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .story-content {
            padding: 1.5rem;
        }

        .story-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: #1f2937;
        }

        .story-description {
            color: #4b5563;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .story-link {
            color: #7c3aed;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Testimonials */
        .testimonials-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .testimonial-card {
            background: white;
            border-radius: 0.75rem;
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .testimonial-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            margin-right: 1rem;
        }

        .testimonial-info h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.25rem;
        }

        .testimonial-info p {
            color: #4b5563;
        }

        .testimonial-stars {
            color: #f59e0b;
            margin-bottom: 1.5rem;
            display: flex;
            gap: 0.25rem;
        }

        .testimonial-quote {
            font-size: 1.125rem;
            font-style: italic;
            color: #4b5563;
            line-height: 1.6;
        }

        .testimonial-dots {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 2rem;
        }

        .testimonial-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #d1d5db;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .testimonial-dot.active {
            background: #7c3aed;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .contact-info h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .contact-info .section-dark h3 {
            color: white;
        }

        .contact-details {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
        }

        .contact-icon {
            color: #a78bfa;
            margin-top: 0.25rem;
        }

        .contact-text h4 {
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .contact-text .section-dark h4 {
            color: white;
        }

        .contact-text p {
            color: #9ca3af;
        }

        .contact-social {
            display: flex;
            gap: 1rem;
        }

        .contact-social a {
            color: #9ca3af;
            font-size: 1.25rem;
            transition: color 0.2s ease;
        }

        .contact-social a:hover {
            color: white;
        }

        .contact-form-container {
            background: #1f2937;
            border-radius: 0.75rem;
            padding: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
            color: white;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 0.75rem;
            background: #374151;
            border: 1px solid #4b5563;
            border-radius: 0.5rem;
            color: white;
            font-family: inherit;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #7c3aed;
        }

        .form-textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-submit {
            width: 100%;
            padding: 0.75rem;
            background: #7c3aed;
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .form-submit:hover {
            background: #6d28d9;
        }

        /* Footer */
        footer {
            background: #1f2937;
            color: white;
            padding-top: 3rem;
            padding-bottom: 1.5rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            margin-bottom: 2rem;
        }

        .footer-col h3 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .footer-about p {
            color: #9ca3af;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .footer-social {
            display: flex;
            gap: 1rem;
        }

        .footer-social a {
            color: #9ca3af;
            font-size: 1.25rem;
            transition: color 0.2s ease;
        }

        .footer-social a:hover {
            color: white;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: #9ca3af;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-newsletter p {
            color: #9ca3af;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .newsletter-form {
            display: flex;
        }

        .newsletter-input {
            flex: 1;
            padding: 0.75rem;
            background: #374151;
            border: 1px solid #4b5563;
            border-radius: 0.5rem 0 0 0.5rem;
            color: white;
            font-family: inherit;
        }

        .newsletter-submit {
            padding: 0.75rem 1rem;
            background: #7c3aed;
            border: none;
            border-radius: 0 0.5rem 0.5rem 0;
            color: white;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .newsletter-submit:hover {
            background: #6d28d9;
        }

        .footer-bottom {
            border-top: 1px solid #374151;
            padding-top: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .footer-copyright {
            color: #9ca3af;
            text-align: center;
        }

        .footer-legal {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .footer-legal a {
            color: #9ca3af;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-legal a:hover {
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .hero-content {
                gap: 2rem;
            }
            
            .hero-text h1 {
                font-size: 2.5rem;
            }
            
            .contact-grid,
            .hero-content {
                grid-template-columns: 1fr;
            }
            
            .hero-image {
                order: -1;
            }
            
            .stories-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
            
            .nav-menu {
                display: none;
            }
            
            .hero-text h1 {
                font-size: 2rem;
            }
            
            .hero-text p {
                font-size: 1rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
            
            .footer-legal {
                justify-content: center;
            }
        }

        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .stagger-fade-in > * {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .stagger-fade-in > *:nth-child(1) { animation-delay: 0.1s; }
        .stagger-fade-in > *:nth-child(2) { animation-delay: 0.2s; }
        .stagger-fade-in > *:nth-child(3) { animation-delay: 0.3s; }
        .stagger-fade-in > *:nth-child(4) { animation-delay: 0.4s; }

        .hand-animation {
            animation: handAnim 4s ease-in-out infinite;
        }

        @keyframes handAnim {
            0%, 100% { transform: rotate(0deg) scale(1) translateX(0) translateY(0); }
            25% { transform: rotate(5deg) scale(1.02) translateX(10px) translateY(-5px); }
            50% { transform: rotate(-5deg) scale(0.98) translateX(-10px) translateY(5px); }
            75% { transform: rotate(0deg) scale(1) translateX(0) translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="#" class="nav-logo">AutoPartsPro</a>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#products" class="nav-link">Products</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="#quote" class="btn btn-primary">Get Quote</a>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
        
        <div class="hero-content">
            <div class="hero-text">
                <h1>Power Your Performance</h1>
                <p>Premium auto parts engineered for excellence, reliability, and peak performance.</p>
                <div class="hero-buttons">
                    <a href="#products" class="btn btn-primary">Explore Products <i class="fas fa-arrow-right" style="margin-left: 0.5rem;"></i></a>
                    <a href="#consultation" class="btn btn-secondary">Request Consultation</a>
                </div>
                <div class="hero-stats">
                    <div class="status-indicator">
                        <div class="status-dot status-available"></div>
                        <span>Ready to help</span>
                    </div>
                    <div class="status-indicator">
                        <div class="status-dot status-online"></div>
                        <span>24/7 Support</span>
                    </div>
                </div>
            </div>
            <div class="hero-image hand-animation">
                <div class="hero-img-container">
                    <img src="https://placehold.co/800x600/3b82f6/ffffff?text=Engine+Parts" alt="High-performance engine parts">
                    <div class="hero-overlay"></div>
                    <div class="hero-caption">
                        <h3>Turbocharger Upgrade Kit</h3>
                        <p>Boost your engine's power output by 30%</p>
                        <a href="#">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section section-dark">
        <div class="section-header">
            <h2 class="section-title">Art and science of automotive excellence</h2>
            <p class="section-description">We combine cutting-edge technology with decades of engineering expertise to deliver solutions that exceed expectations.</p>
        </div>
        
        <div class="services-grid stagger-fade-in">
            <div class="service-card">
                <div class="service-image">
                    <img src="https://placehold.co/400x300/3b82f6/ffffff?text=Performance" alt="Performance Parts">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Performance Parts</h3>
                    <p class="service-description">Upgrade your vehicle with high-performance components designed for speed, power, and reliability.</p>
                    <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="https://placehold.co/400x300/10b981/ffffff?text=Replacement" alt="Replacement Parts">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Replacement Parts</h3>
                    <p class="service-description">Genuine OEM replacement parts that match factory specifications for perfect fit and function.</p>
                    <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="https://placehold.co/400x300/f59e0b/ffffff?text=Custom" alt="Custom Fabrication">
                </div>
                <div class="service-content">
                    <h3 class="service-title">Custom Fabrication</h3>
                    <p class="service-description">Specialized custom parts fabricated to your exact specifications for unique or hard-to-find applications.</p>
                    <a href="#" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="section section-light">
        <div class="section-header">
            <h2 class="section-title">Tailored solutions for your vehicle</h2>
            <p class="section-description">Discover our comprehensive range of products designed to meet every automotive need, from everyday maintenance to high-performance upgrades.</p>
        </div>
        
        <div class="products-grid stagger-fade-in">
            <div class="product-card">
                <div class="product-image">
                    <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Brake+Pads" alt="Premium brake pads">
                </div>
                <h3 class="product-title">Braking Systems</h3>
                <p class="product-description">High-performance brake pads, rotors, and calipers for superior stopping power and safety.</p>
                <a href="#" class="product-link">View Collection <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://placehold.co/600x400/10b981/ffffff?text=Engine+Parts" alt="Engine components">
                </div>
                <h3 class="product-title">Engine Components</h3>
                <p class="product-description">Precision-engineered pistons, camshafts, and turbochargers for maximum power and efficiency.</p>
                <a href="#" class="product-link">View Collection <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://placehold.co/600x400/f59e0b/ffffff?text=Suspension" alt="Suspension systems">
                </div>
                <h3 class="product-title">Suspension Systems</h3>
                <p class="product-description">Performance shocks, struts, and coilovers for improved handling and ride comfort.</p>
                <a href="#" class="product-link">View Collection <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="about" class="section section-dark">
        <div class="section-header">
            <h2 class="section-title">Why we are chosen</h2>
            <p class="section-description">Trusted by professionals and enthusiasts alike for our commitment to quality, service, and innovation.</p>
        </div>
        
        <div class="stats-grid stagger-fade-in">
            <div class="stat-card">
                <div class="stat-value">&gt; 50,000</div>
                <div class="stat-label">Parts Available</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">15+</div>
                <div class="stat-label">Years Experience</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">500+</div>
                <div class="stat-label">Brands Carried</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">98%</div>
                <div class="stat-label">Customer Satisfaction</div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 2rem;">
            <a href="#contact" class="btn btn-primary">Start Your Project</a>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="section">
        <div class="section-header">
            <h2 class="section-title">Transformations that inspire</h2>
            <p class="section-description">Real stories from satisfied customers who achieved remarkable results with our parts and services.</p>
        </div>
        
        <div class="stories-grid stagger-fade-in">
            <div class="story-card">
                <div class="story-image">
                    <img src="https://placehold.co/400x300/3b82f6/ffffff?text=Racing" alt="Racing Team Victory">
                </div>
                <div class="story-content">
                    <h3 class="story-title">Racing Team Victory</h3>
                    <p class="story-description">Our performance parts helped a local racing team secure first place in the regional championship series.</p>
                    <a href="#" class="story-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="story-card">
                <div class="story-image">
                    <img src="https://placehold.co/400x300/10b981/ffffff?text=Restoration" alt="Classic Restoration">
                </div>
                <div class="story-content">
                    <h3 class="story-title">Classic Restoration</h3>
                    <p class="story-description">We provided rare components for a complete 1967 Ford Mustang restoration, bringing it back to showroom condition.</p>
                    <a href="#" class="story-link">Read More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section section-light">
        <div class="section-header">
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="section-description">Don't just take our word for it – hear from the professionals and enthusiasts who trust us with their vehicles.</p>
        </div>
        
        <div class="testimonials-container">
            <div class="testimonial-card">
                <div class="testimonial-header">
                    <img src="https://placehold.co/300x300/3b82f6/ffffff?text=JW" alt="James Wilson" class="testimonial-avatar">
                    <div class="testimonial-info">
                        <h3>James Wilson</h3>
                        <p>Professional Racer</p>
                    </div>
                </div>
                <div class="testimonial-stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="testimonial-quote">"These high-performance parts gave my race car the edge I needed to win last season. Unbeatable quality and durability."</p>
            </div>
            
            <div class="testimonial-dots">
                <div class="testimonial-dot active"></div>
                <div class="testimonial-dot"></div>
                <div class="testimonial-dot"></div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section section-dark">
        <div class="section-header">
            <h2 class="section-title">Get in Touch</h2>
            <p class="section-description">Have questions about our products or services? Our team is ready to help you find the perfect solution for your vehicle.</p>
        </div>
        
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Phone</h4>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>info@autopartspro.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Address</h4>
                            <p>123 Automotive Way, Detroit, MI 48201</p>
                        </div>
                    </div>
                </div>
                
                <h4>Follow Us</h4>
                <div class="contact-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="contact-form-container">
                <form>
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-input" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-input" placeholder="your.email@example.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Message</label>
                        <textarea class="form-textarea" placeholder="Tell us about your project or question..."></textarea>
                    </div>
                    <button type="submit" class="form-submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col footer-about">
                <div class="footer-logo" style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">AutoPartsPro</div>
                <p>Premium auto parts and services for performance, reliability, and peace of mind.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Support</h3>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Returns & Exchanges</a></li>
                    <li><a href="#">Technical Support</a></li>
                    <li><a href="#">Warranty Information</a></li>
                </ul>
            </div>
            
            <div class="footer-col footer-newsletter">
                <h3>Newsletter</h3>
                <p>Subscribe to get the latest updates, promotions, and automotive tips.</p>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Your email address">
                    <button type="submit" class="newsletter-submit">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-copyright">© 2026 AutoPartsPro. All rights reserved.</div>
            <div class="footer-legal">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </footer>

    <script>
        // Simple animations and interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            offsetTop: 80
                        });
                    }
                });
            });

            // Mobile menu toggle
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            const navMenu = document.querySelector('.nav-menu');
            
            if (mobileMenuBtn) {
                mobileMenuBtn.addEventListener('click', function() {
                    navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
                });
            }

            // Testimonial dots
            const dots = document.querySelectorAll('.testimonial-dot');
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    dots.forEach(d => d.classList.remove('active'));
                    this.classList.add('active');
                });
            });

            // Add fade-in animation to sections when they come into view
            const fadeElements = document.querySelectorAll('.stagger-fade-in');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            fadeElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>
