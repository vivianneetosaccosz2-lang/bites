<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from Onionplate.online/index2.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2026 14:53:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biteplate | Vegetarian Multi-Cuisine Dining</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400&amp;family=Work+Sans:wght@300;400&amp;display=swap" rel="stylesheet">
    <style>
        :root {
            --ash-grey: #454545;
            --white-flour: #F9F9F9;
            --light-birch: #E0E0E0;
            --oatmeal: #F5F5F5;
            --charcoal: #212121;
            --forest-moss: #4E6E5D;
            --text-main: #333333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Work Sans', sans-serif;
            background-color: var(--white-flour);
            color: var(--text-main);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        h1, h2, h3, .nav-link {
            font-family: 'Mulish', sans-serif;
            font-weight: 300;
            text-transform: lowercase;
            letter-spacing: 0.1em;
        }

        /* Navigation */
        nav {
            position: sticky;
            top: 0;
            background-color: var(--white-flour);
            border-bottom: 1px solid var(--light-birch);
            z-index: 1000;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.25rem;
            color: var(--ash-grey);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--ash-grey);
            font-size: 0.9rem;
        }

        /* Hero */
        .hero {
            height: 80vh;
            background: linear-gradient(135deg, #454545, #616161);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
            color: var(--white-flour);
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
        }

        .hero p {
            max-width: 700px;
            font-size: 1.1rem;
            font-weight: 300;
            margin-bottom: 2.5rem;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background-color: transparent;
            border: 1px solid var(--white-flour);
            color: var(--white-flour);
            text-decoration: none;
            font-size: 0.9rem;
            letter-spacing: 0.1em;
            transition: background 0.3s;
        }

        .btn:hover {
            background-color: rgba(255,255,255,0.1);
        }

        /* Sections */
        section {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
            font-size: 2rem;
            color: var(--ash-grey);
        }

        /* Menu Grid */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-bottom: 4rem;
        }

        .menu-item {
            display: flex;
            flex-direction: column;
            border: 8px solid #EAE2D6; /* Raw pine-wood look */
            background: #fff;
        }

        .menu-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .menu-content {
            padding: 1.5rem;
        }

        .cuisine-label {
            font-size: 0.75rem;
            color: var(--ash-grey);
            text-transform: uppercase;
            letter-spacing: 0.2em;
            margin-bottom: 0.5rem;
        }

        .dish-name {
            font-size: 1.25rem;
            margin-bottom: 0.25rem;
            color: var(--charcoal);
        }

        .category-label {
            font-size: 0.85rem;
            font-style: italic;
            margin-bottom: 1rem;
            color: #777;
        }

        .description {
            font-size: 0.95rem;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .menu-cta {
            text-align: center;
        }

        .btn-dark {
            background-color: var(--forest-moss);
            color: white;
            border: none;
            padding: 1rem 3rem;
            cursor: pointer;
        }

        /* About Us */
        #about {
            background-color: var(--light-birch);
            max-width: 100%;
        }

        .about-inner {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .about-inner p {
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        /* Reservations */
        #reservations {
            background-color: var(--oatmeal);
            max-width: 100%;
        }

        .reservation-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-size: 0.8rem;
            margin-bottom: 0.5rem;
            text-transform: lowercase;
        }

        input, textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid var(--light-birch);
            background: white;
            font-family: inherit;
        }

        .email-link {
            display: block;
            text-align: center;
            margin-top: 2rem;
            color: var(--ash-grey);
            text-decoration: none;
            font-size: 0.9rem;
        }

        #success-message {
            display: none;
            text-align: center;
            padding: 1.5rem;
            background: white;
            border: 1px solid var(--forest-moss);
            color: var(--forest-moss);
            margin-top: 1rem;
        }

        /* Privacy Policy & Note */
        .policy-content, .editorial-note {
            max-width: 800px;
            margin: 0 auto;
            font-size: 0.9rem;
            color: #666;
        }

        .policy-content h3 {
            margin: 1.5rem 0 0.5rem 0;
            color: var(--ash-grey);
        }

        .editorial-note {
            padding: 3rem 2rem;
            border-top: 1px solid var(--light-birch);
            font-style: italic;
            text-align: center;
        }

        /* Footer */
        footer {
            background-color: var(--charcoal);
            color: var(--light-birch);
            padding: 4rem 2rem;
            text-align: center;
        }

        footer a {
            color: var(--white-flour);
            text-decoration: none;
            margin: 0 1rem;
            font-size: 0.8rem;
        }

        .copyright {
            margin-top: 2rem;
            font-size: 0.75rem;
            opacity: 0.6;
        }

        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hero h1 { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <nav>
        <a href="#" class="logo">biteplate</a>
        <div class="nav-links">
            <a href="#home" class="nav-link">Home</a>
            <a href="#about" class="nav-link">About Us</a>
            <a href="#menu" class="nav-link">Menu</a>
            <a href="#reservations" class="nav-link">Reservations</a>
            <a href="#privacy" class="nav-link">Privacy Policy</a>
        </div>
    </nav>

    <section id="home" class="hero">
        <h1>biteplate</h1>
        <p>A dedicated vegetarian dining destination offering a multi-cuisine approach that centers on high-quality plant-based ingredients and transparent preparation methods.</p>
        <a href="#menu" class="btn">Explore Menu</a>
    </section>

    <section id="menu">
        <h2 class="section-title">Menu Highlights</h2>
        <div class="menu-grid">
            <!-- 1. Italy -->
            <div class="menu-item">
                <img src="media/1.jpg" alt="Italy Caprese Salad">
                <div class="menu-content">
                    <p class="cuisine-label">Italy</p>
                    <h3 class="dish-name">Caprese Salad</h3>
                    <p class="category-label">Platter</p>
                    <p class="description">Fresh heirloom tomatoes layered with buffalo mozzarella, basil leaves, and extra virgin olive oil for a classic plant-based Italian presentation.</p>
                </div>
            </div>

            <!-- 2. Morocco -->
            <div class="menu-item">
                <img src="media/2.jpg" alt="Morocco Vegetable Tagine">
                <div class="menu-content">
                    <p class="cuisine-label">Morocco</p>
                    <h3 class="dish-name">Moroccan Vegetable Tagine</h3>
                    <p class="category-label">Main</p>
                    <p class="description">Slow-cooked seasonal vegetables infused with cumin, ginger, and turmeric, served alongside fluffy couscous and preserved lemon slices for depth.</p>
                </div>
            </div>

            <!-- 3. China -->
            <div class="menu-item">
                <img src="media/3.jpg" alt="China Glass Noodle Salad">
                <div class="menu-content">
                    <p class="cuisine-label">China</p>
                    <h3 class="dish-name">Glass Noodle Salad</h3>
                    <p class="category-label">Bowl</p>
                    <p class="description">Chilled mung bean noodles tossed with shredded cucumbers, wood ear mushrooms, and a light soy-sesame dressing for a crisp, transparent texture.</p>
                </div>
            </div>

            <!-- 4. Colombia -->
            <div class="menu-item">
                <img src="media/4.jpg" alt="Colombia Patacones with Hogao">
                <div class="menu-content">
                    <p class="cuisine-label">Colombia</p>
                    <h3 class="dish-name">Patacones with Hogao</h3>
                    <p class="category-label">Platter</p>
                    <p class="description">Double-fried green plantain rounds served with a savory traditional sauce of sautéed tomatoes and scallions, focusing on authentic Latin flavors.</p>
                </div>
            </div>

            <!-- 5. USA -->
            <div class="menu-item">
                <img src="media/5.jpg" alt="USA New England Corn Chowder">
                <div class="menu-content">
                    <p class="cuisine-label">USA</p>
                    <h3 class="dish-name">New England Corn Chowder</h3>
                    <p class="category-label">Main</p>
                    <p class="description">A creamy, heart-warming base of sweet summer corn, diced gold potatoes, and fresh chives, representing traditional coastal American comfort fare.</p>
                </div>
            </div>

            <!-- 6. Japan -->
            <div class="menu-item">
                <img src="media/6.jpg" alt="Japan Tempura Vegetables">
                <div class="menu-content">
                    <p class="cuisine-label">Japan</p>
                    <h3 class="dish-name">Tempura Vegetables</h3>
                    <p class="category-label">Platter</p>
                    <p class="description">Lightly battered and flash-fried seasonal vegetables including sweet potato and shiso leaf, served with a gentle radish-infused dipping broth.</p>
                </div>
            </div>
        </div>
        <div class="menu-cta">
            <a href="#reservations" class="btn btn-dark">Book a Table</a>
        </div>
    </section>

    <section id="about">
        <div class="about-inner">
            <h2 class="section-title">About Us</h2>
            <p>biteplate is founded on a minimalist vegetarian philosophy that emphasizes the natural integrity of ingredients. By removing complexity, we allow the inherent textures and flavors of plant-based foods to occupy the center of the dining experience.</p>
            <p>Our multi-cuisine inspiration draws from global traditions that have historically prioritized vegetables. We approach sourcing with a neutral mindset, selecting produce based on seasonal availability and factual quality standards to ensure a consistent and transparent plate.</p>
        </div>
    </section>

    <section id="reservations">
        <div class="reservation-container">
            <h2 class="section-title">Reservations</h2>
            <form id="res-form" onsubmit="handleRes(event)">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" required>
                </div>
                <div class="form-group">
                    <label>Preferred Date/Time</label>
                    <input type="text" placeholder="e.g. October 12, 7:00 PM" required>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-dark" style="width:100%">Submit Inquiry</button>
            </form>
            <div id="success-message">
                Thank you. We will respond by email regarding availability.
            </div>
            <a href="mailto:info@Onionplate.online" class="email-link">info@Onionplate.online</a>
        </div>
    </section>

    <section id="privacy">
        <h2 class="section-title">Privacy Policy</h2>
        <div class="policy-content">
            <h3>Introduction</h3>
            <p>biteplate operates Onionplate.online to provide information about our vegetarian restaurant concept. We are committed to protecting the privacy of our visitors.</p>
            
            <h3>Data Collected</h3>
            <p>We collect information provided voluntarily through our reservation form, including names, email addresses, and specific dining preferences or messages.</p>
            
            <h3>Use of Information</h3>
            <p>Information collected is used solely to manage table availability and communicate directly with guests regarding their specific inquiries.</p>
            
            <h3>Cookies</h3>
            <p>This website utilizes essential cookies required for basic site functionality. We do not utilize tracking or advertising cookies.</p>
            
            <h3>Data Protection</h3>
            <p>We implement standard security measures to protect stored information from unauthorized access. Data is handled internally and is not sold to third parties.</p>
            
            <h3>Third-Party Services</h3>
            <p>We do not share your data with third-party marketing or analytics services. Links to external email clients are provided for user convenience.</p>
            
            <h3>User Rights</h3>
            <p>Users may contact us at any time to request the deletion or correction of any personal information previously submitted through the site.</p>
            
            <h3>Updates</h3>
            <p>Any changes to this policy will be posted directly on this page. This policy is current as of 2026.</p>
        </div>
    </section>

    <div class="editorial-note">
        <p>Informational only. Reservations are managed based on current availability. The menu is subject to seasonal changes based on ingredient quality and sourcing standards.</p>
    </div>

    <footer>
        <div class="footer-links">
            <a href="mailto:info@Onionplate.online">info@Onionplate.online</a>
            <a href="#privacy">Privacy Policy</a>
        </div>
        <p class="copyright" style="margin-top:1rem;">biteplate is a conceptual vegetarian restaurant focused on informational transparency.</p>
        <p class="copyright">© 2026 biteplate</p>
    </footer>

    <script>
        function handleRes(e) {
            e.preventDefault();
            document.getElementById('res-form').style.display = 'none';
            document.getElementById('success-message').style.display = 'block';
        }
    </script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69a98b98a7e83f1c33b06b9a/1jiv4ijri';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

<!-- Mirrored from Onionplate.online/index2.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Mar 2026 14:53:18 GMT -->
</html>
