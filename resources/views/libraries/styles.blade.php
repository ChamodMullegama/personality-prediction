   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: #fff;
            background: #09001d;
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .logo {
            font-size: 28px;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            background: linear-gradient(45deg, #AA2C86, #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: #AA2C86;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #AA2C86;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .mobile-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .mobile-menu span {
            width: 25px;
            height: 3px;
            background: #fff;
            margin: 3px 0;
            transition: 0.3s;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(170, 44, 134, 0.1), rgba(9, 0, 29, 0.9)),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23AA2C86" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,133.3C672,139,768,181,864,186.7C960,192,1056,160,1152,138.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, rgba(170, 44, 134, 0.1) 0%, transparent 70%);
        }

        .hero-content {
            max-width: 800px;
            padding: 0 20px;
            z-index: 1;
            position: relative;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #AA2C86, #fff, #AA2C86);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease-out;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(45deg, #AA2C86, #681650);
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(170, 44, 134, 0.3);
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(170, 44, 134, 0.5);
        }

        /* Section Styles */
        .section {
            padding: 80px 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 20px;
            color: #AA2C86;
        }

        .section p {
            text-align: center;
            margin-bottom: 40px;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* About Section */
        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .about-card {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            border: 1px solid rgba(170, 44, 134, 0.2);
            transition: transform 0.3s ease;
            animation: slideIn 0.5s ease-out;
        }

        .about-card:hover {
            transform: translateY(-5px);
            border-color: #AA2C86;
        }

        .about-card i {
            font-size: 3rem;
            color: #AA2C86;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .about-card:hover i {
            transform: scale(1.2);
        }

        .about-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #AA2C86;
        }

        /* Quiz Section */
        .quiz-container {
            max-width: 600px;
            margin: 0 auto;
            background: linear-gradient(135deg, rgba(170, 44, 134, 0.1), rgba(255, 255, 255, 0.05));
            border: 2px solid rgba(170, 44, 134, 0.3);
            border-radius: 25px;
            padding: 40px;
            backdrop-filter: blur(15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .quiz-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #AA2C86, #681650, #AA2C86);
            background-size: 200% 100%;
            animation: shimmer 3s ease-in-out infinite;
        }

        .quiz-header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(170, 44, 134, 0.3);
            position: relative;
        }

        .quiz-header h3 {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(45deg, #AA2C86, #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(170, 44, 134, 0.3);
        }

        .quiz-header p {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.5;
        }

        /* Compact Progress Dots */
        .progress-container {
            margin: 15px 0;
        }

        .progress-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-bottom: 10px;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .dot::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #AA2C86, #681650);
            border-radius: 50%;
            transform: scale(0);
            transition: transform 0.3s ease;
        }

        .dot.active {
            background: transparent;
            transform: scale(1.3);
            box-shadow: 0 0 15px rgba(170, 44, 134, 0.5);
        }

        .dot.active::before {
            transform: scale(1);
        }

        .progress-text {
            text-align: center;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Form Carousel */
        .form-carousel {
            position: relative;
            overflow: hidden;
            margin: 20px 0;
            height: 200px;
        }

        .form-slide {
            position: absolute;
            width: 100%;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .form-slide.active {
            opacity: 1;
            transform: translateX(0);
        }

        .form-slide.prev {
            transform: translateX(-100%);
        }

        .question-content {
            text-align: center;
            padding: 20px 0;
        }

        .question-content label {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            color: #AA2C86;
        }

        .question-content label i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #AA2C86;
        }

        .question-content label span {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .question-content label small {
            font-size: 0.8rem;
            opacity: 0.7;
            font-weight: normal;
        }

        .question-content input,
        .question-content select {
            width: 100%;
            max-width: 250px;
            padding: 18px 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(170, 44, 134, 0.3);
            border-radius: 15px;
            color: #fff;
            font-size: 18px;
            text-align: center;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            backdrop-filter: blur(5px);
        }

        .question-content input:focus,
        .question-content select:focus {
            outline: none;
            border-color: #AA2C86;
            box-shadow: 0 0 25px rgba(170, 44, 134, 0.4);
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.15);
        }

        .question-content select {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 16px;
        }

        /* Compact Navigation */
        .form-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .nav-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: none;
            background: linear-gradient(45deg, #AA2C86, #681650);
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 25px rgba(170, 44, 134, 0.3);
            position: relative;
            overflow: hidden;
        }

        .nav-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .prev-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(170, 44, 134, 0.3);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .nav-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 35px rgba(170, 44, 134, 0.4);
        }

        .nav-btn:hover::before {
            left: 100%;
        }

        .prev-btn:hover {
            background: rgba(170, 44, 134, 0.2);
            border-color: #AA2C86;
            box-shadow: 0 8px 25px rgba(170, 44, 134, 0.3);
        }



        /* Result Section */
        .result-container {
            display: none;
            text-align: center;
            padding: 50px 40px;
            background: linear-gradient(135deg, rgba(170, 44, 134, 0.1), rgba(255, 255, 255, 0.05));
            border: 2px solid rgba(170, 44, 134, 0.3);
            border-radius: 25px;
            max-width: 700px;
            margin: 0 auto;
            backdrop-filter: blur(10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }

        .result-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #AA2C86, #681650, #AA2C86);
            animation: shimmer 2s ease-in-out infinite;
        }

        .result-container.active {
            display: block;
            animation: resultSlideIn 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .result-container h3 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            background: linear-gradient(45deg, #AA2C86, #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 2px 10px rgba(170, 44, 134, 0.3);
        }

        .speedometer {
            width: 350px;
            height: 180px;
            margin: 30px auto;
            position: relative;
            filter: drop-shadow(0 10px 20px rgba(170, 44, 134, 0.3));
        }

        .speedometer-svg {
            width: 100%;
            height: 100%;
            filter: drop-shadow(0 5px 15px rgba(170, 44, 134, 0.2));
        }

        .speedometer-needle {
            transform-origin: center bottom;
            transition: transform 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
        }

        .progress-value {
            font-size: 3rem;
            font-weight: 800;
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(45deg, #AA2C86, #681650);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 2px 10px rgba(170, 44, 134, 0.3);
            animation: pulse 2s ease-in-out infinite;
        }

        .result-text {
            font-size: 1.8rem;
            margin: 30px 0;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            padding: 20px;
            background: rgba(170, 44, 134, 0.1);
            border-radius: 15px;
            border: 1px solid rgba(170, 44, 134, 0.2);
            backdrop-filter: blur(5px);
        }

        .result-text i {
            font-size: 2rem;
            color: #AA2C86;
            animation: bounce 2s ease-in-out infinite;
        }

        .try-again-btn {
            padding: 15px 40px;
            background: linear-gradient(45deg, #AA2C86, #681650);
            color: #fff;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            box-shadow: 0 8px 25px rgba(170, 44, 134, 0.3);
            position: relative;
            overflow: hidden;
        }

        .try-again-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .try-again-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(170, 44, 134, 0.4);
        }

        .try-again-btn:hover::before {
            left: 100%;
        }

        .try-again-btn:active {
            transform: translateY(-1px);
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 50px;
            margin-top: 50px;
        }

        .contact-info {
            background: linear-gradient(135deg, rgba(170, 44, 134, 0.1), rgba(255, 255, 255, 0.05));
            padding: 40px 30px;
            border-radius: 25px;
            border: 2px solid rgba(170, 44, 134, 0.3);
            backdrop-filter: blur(15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .contact-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #AA2C86, #681650, #AA2C86);
            background-size: 200% 100%;
            animation: shimmer 3s ease-in-out infinite;
        }

        .contact-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .contact-info i {
            font-size: 3rem;
            color: #AA2C86;
            margin-bottom: 20px;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            display: block;
            text-align: center;
        }

        .contact-info:hover i {
            transform: scale(1.2) rotate(5deg);
            color: #fff;
        }

        .contact-info h4 {
            color: #AA2C86;
            margin-bottom: 15px;
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
            background: linear-gradient(45deg, #AA2C86, #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-info p {
            color: rgba(255, 255, 255, 0.9);
            text-align: center;
            line-height: 1.6;
            font-size: 1.1rem;
        }

        .contact-form {
            background: linear-gradient(135deg, rgba(170, 44, 134, 0.1), rgba(255, 255, 255, 0.05));
            padding: 40px;
            border-radius: 25px;
            border: 2px solid rgba(170, 44, 134, 0.3);
            backdrop-filter: blur(15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .contact-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #AA2C86, #681650, #AA2C86);
            background-size: 200% 100%;
            animation: shimmer 3s ease-in-out infinite;
        }

        .contact-form h4 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
            background: linear-gradient(45deg, #AA2C86, #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 2px 10px rgba(170, 44, 134, 0.3);
        }

        .contact-form .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .contact-form .input-group i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #AA2C86;
            font-size: 1.2rem;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .contact-form .input-group textarea + i {
            top: 25px;
            transform: none;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 18px 20px 18px 50px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(170, 44, 134, 0.3);
            border-radius: 15px;
            color: #fff;
            font-size: 16px;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            backdrop-filter: blur(5px);
        }

        .contact-form textarea {
            padding-top: 20px;
            padding-left: 50px;
            height: 140px;
            resize: vertical;
            font-family: inherit;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: #AA2C86;
            box-shadow: 0 0 25px rgba(170, 44, 134, 0.4);
            transform: scale(1.02);
            background: rgba(255, 255, 255, 0.15);
        }

        .contact-form input:focus + i,
        .contact-form textarea:focus + i {
            color: #fff;
            transform: translateY(-50%) scale(1.1);
        }

        .contact-form textarea:focus + i {
            transform: scale(1.1);
        }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .contact-form .submit-btn {
            width: 100%;
            padding: 18px 30px;
            background: linear-gradient(45deg, #AA2C86, #681650);
            color: #fff;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            box-shadow: 0 8px 25px rgba(170, 44, 134, 0.3);
            position: relative;
            overflow: hidden;
        }

        .contact-form .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .contact-form .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(170, 44, 134, 0.4);
        }

        .contact-form .submit-btn:hover::before {
            left: 100%;
        }

        .contact-form .submit-btn:active {
            transform: translateY(-1px);
        }

        /* Contact form success animation */
        .contact-form.success {
            animation: successPulse 0.6s ease-out;
        }

        @keyframes successPulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.02);
            }
            100% {
                transform: scale(1);
            }
        }

        /* Floating animation for contact info icons */
        .contact-info i {
            animation: float 3s ease-in-out infinite;
        }

        .contact-info:nth-child(2) i {
            animation-delay: 0.5s;
        }

        .contact-info:nth-child(3) i {
            animation-delay: 1s;
        }

        /* Footer */
        .footer {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px 5%;
            text-align: center;
            border-top: 1px solid rgba(170, 44, 134, 0.2);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .social-links a {
            color: #AA2C86;
            font-size: 1.5rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-links a:hover {
            color: #fff;
            transform: scale(1.2);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes resultSlideIn {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: translateX(-50%) scale(1);
            }
            50% {
                transform: translateX(-50%) scale(1.05);
            }
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .mobile-menu {
                display: flex;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section {
                padding: 60px 5%;
            }

            .section h2 {
                font-size: 2rem;
            }

            .quiz-container {
                padding: 30px 20px;
            }

            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .speedometer {
                width: 250px;
                height: 125px;
            }
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Loading animation */
        .loading {
            display: none;
            text-align: center;
            padding: 60px 40px;
            background: linear-gradient(135deg, rgba(170, 44, 134, 0.1), rgba(255, 255, 255, 0.05));
            border: 2px solid rgba(170, 44, 134, 0.3);
            border-radius: 25px;
            max-width: 500px;
            margin: 0 auto;
            backdrop-filter: blur(15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .loading::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #AA2C86, #681650, #AA2C86);
            background-size: 200% 100%;
            animation: shimmer 2s ease-in-out infinite;
        }

        .loading.active {
            display: block;
            animation: resultSlideIn 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .loading p {
            font-size: 1.3rem;
            color: #fff;
            margin-top: 20px;
            font-weight: 500;
        }

        .spinner {
            width: 80px;
            height: 80px;
            border: 6px solid rgba(170, 44, 134, 0.2);
            border-top: 6px solid #AA2C86;
            border-radius: 50%;
            animation: spin 1.2s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
            margin: 0 auto 30px;
            box-shadow: 0 10px 30px rgba(170, 44, 134, 0.3);
        }

        .loading-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
        }

        .loading-dots span {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #AA2C86;
            animation: loadingDots 1.4s ease-in-out infinite both;
        }

        .loading-dots span:nth-child(1) {
            animation-delay: -0.32s;
        }

        .loading-dots span:nth-child(2) {
            animation-delay: -0.16s;
        }

        @keyframes loadingDots {
            0%, 80%, 100% {
                transform: scale(0.8);
                opacity: 0.5;
            }
            40% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Authentication Navigation Styles */
        .auth-links {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .auth-btn-nav {
            padding: 8px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .auth-btn-nav:not(.register) {
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .auth-btn-nav:not(.register):hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #AA2C86;
        }

        .auth-btn-nav.register {
            background: linear-gradient(45deg, #AA2C86, #681650);
            color: #fff;
            box-shadow: 0 3px 10px rgba(170, 44, 134, 0.3);
        }

        .auth-btn-nav.register:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(170, 44, 134, 0.5);
        }

        .user-menu {
            position: relative;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-name {
            color: #AA2C86;
            font-weight: 600;
            cursor: pointer;
        }

        .user-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(170, 44, 134, 0.2);
            border-radius: 10px;
            padding: 10px 0;
            min-width: 150px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .user-menu:hover .user-dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .user-dropdown a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .user-dropdown a:hover {
            background: rgba(170, 44, 134, 0.2);
            color: #AA2C86;
        }

        @media (max-width: 768px) {
            .auth-links {
                display: none;
            }
        }

        /* Success Message */
        .success-message {
            position: fixed;
            top: 80px;
            right: 20px;
            background: rgba(76, 175, 80, 0.9);
            color: #fff;
            padding: 15px 20px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 1001;
            animation: slideInRight 0.5s ease-out;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .success-message i {
            color: #fff;
        }

        .close-message {
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 0;
            margin-left: 10px;
            font-size: 1.1rem;
            transition: opacity 0.3s ease;
        }

        .close-message:hover {
            opacity: 0.7;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
