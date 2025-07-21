@extends('Layout.main')
@section('container')
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Personality Prediction</h1>
            <p>Discover your personality type through advanced AI analysis. Get insights into your behavior patterns and psychological traits with our comprehensive personality assessment tool.</p>
            <a href="#quiz" class="cta-button">Start Prediction</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <h2>About Our System</h2>
        <p>Our personality prediction system uses advanced machine learning algorithms to analyze your behavioral patterns and provide accurate personality insights.</p>

        <div class="about-grid">
            <div class="about-card">
                <i class="fas fa-brain"></i>
                <h3>AI-Powered Analysis</h3>
                <p>Our system uses sophisticated machine learning models trained on extensive personality data to provide accurate predictions about your personality type.</p>
            </div>

            <div class="about-card">
                <i class="fas fa-chart-line"></i>
                <h3>Detailed Insights</h3>
                <p>Get comprehensive insights into your personality traits, behavioral patterns, and psychological characteristics with confidence scores.</p>
            </div>

            <div class="about-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Privacy Protected</h3>
                <p>Your data is completely secure and private. We don't store personal information and all analysis is done locally in your browser.</p>
            </div>
        </div>
    </section>

    <!-- Quiz Section -->
    <section id="quiz" class="section">
        <h2>Personality Prediction</h2>
        <p>Answer the following questions honestly to get an accurate personality prediction.</p>

        <!-- Error Message Display -->
        <div id="errorContainer" class="error-message" style="display: none; background: #ffe6e6; color: #d32f2f; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            <i class="fas fa-exclamation-circle"></i>
            <span id="errorMessage"></span>
        </div>

        <div class="quiz-container">
            <div class="quiz-header">
                <h3>Enter Your Details</h3>
                <p>Please provide accurate information for better results</p>

                <!-- Compact Progress Bar -->
                <div class="progress-container">
                    <div class="progress-dots">
                        <span class="dot active" data-question="1"></span>
                        <span class="dot" data-question="2"></span>
                        <span class="dot" data-question="3"></span>
                        <span class="dot" data-question="4"></span>
                        <span class="dot" data-question="5"></span>
                        <span class="dot" data-question="6"></span>
                        <span class="dot" data-question="7"></span>
                    </div>
                    <div class="progress-text">
                        <span id="currentQuestionNum">1</span> of <span id="totalQuestions">7</span>
                    </div>
                </div>
            </div>

            <div class="form-carousel">
                <form id="personalityForm">
                    <div class="form-slide active" data-question="1">
                        <div class="question-content">
                            <label for="timeAlone">
                                <i class="fas fa-clock"></i>
                                <span>Time Spent Alone</span>
                                <small>hours per day</small>
                            </label>
                            <input type="number" id="timeAlone" step="0.1" min="0" max="24" required>
                        </div>
                    </div>

                    <div class="form-slide" data-question="2">
                        <div class="question-content">
                            <label for="socialEvents">
                                <i class="fas fa-users"></i>
                                <span>Social Events</span>
                                <small>events per month</small>
                            </label>
                            <input type="number" id="socialEvents" step="0.1" min="0" required>
                        </div>
                    </div>

                    <div class="form-slide" data-question="3">
                        <div class="question-content">
                            <label for="goingOutside">
                                <i class="fas fa-walking"></i>
                                <span>Going Outside</span>
                                <small>times per week</small>
                            </label>
                            <input type="number" id="goingOutside" step="0.1" min="0" required>
                        </div>
                    </div>

                    <div class="form-slide" data-question="4">
                        <div class="question-content">
                            <label for="friendsCircle">
                                <i class="fas fa-user-friends"></i>
                                <span>Friends Circle</span>
                                <small>number of close friends</small>
                            </label>
                            <input type="number" id="friendsCircle" step="1" min="0" required>
                        </div>
                    </div>

                    <div class="form-slide" data-question="5">
                        <div class="question-content">
                            <label for="postFrequency">
                                <i class="fas fa-share-alt"></i>
                                <span>Post Frequency</span>
                                <small>posts per month</small>
                            </label>
                            <input type="number" id="postFrequency" step="0.1" min="0" required>
                        </div>
                    </div>

                    <div class="form-slide" data-question="6">
                        <div class="question-content">
                            <label for="stageFear">
                                <i class="fas fa-microphone"></i>
                                <span>Stage Fear</span>
                                <small>fear of public speaking</small>
                            </label>
                            <select id="stageFear" required>
                                <option value="">Choose...</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-slide" data-question="7">
                        <div class="question-content">
                            <label for="drainedSocializing">
                                <i class="fas fa-battery-quarter"></i>
                                <span>Drained After Socializing</span>
                                <small>feel tired after social interactions</small>
                            </label>
                            <select id="drainedSocializing" required>
                                <option value="">Choose...</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <div class="form-navigation">
                <button type="button" class="nav-btn prev-btn" id="prevBtn" onclick="previousQuestion()" style="display: none;">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button type="button" class="nav-btn next-btn" id="nextBtn" onclick="nextQuestion()">
                    <i class="fas fa-arrow-right"></i>
                </button>
                <button type="button" class="nav-btn submit-btn" id="submitBtn" onclick="submitForm()" style="display: none;">
                    <i class="fas fa-check"></i>
                </button>
            </div>
        </div>

        <div class="loading" id="loading">
            <div class="spinner"></div>
            <p>Analyzing your personality...</p>
            <div class="loading-dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="result-container" id="resultContainer">
            <h3>Your Personality Prediction</h3>
            <div class="speedometer">
                <svg class="speedometer-svg" viewBox="0 0 300 150">
                    <path d="M50 150 A100 100 0 0 1 250 150" fill="none" stroke="#AA2C86" stroke-width="20" stroke-opacity="0.3" />
                    <path id="speedometerArc" d="M50 150 A100 100 0 0 1 250 150" fill="none" stroke="#AA2C86" stroke-width="20" />
                    <line class="speedometer-needle" x1="150" y1="150" x2="150" y2="50" stroke="#fff" stroke-width="4" />
                    <circle cx="150" cy="150" r="10" fill="#AA2C86" />
                </svg>
                <div class="progress-value" id="progressValue">0%</div>
            </div>
            <div class="result-text" id="resultText"><i class="fas fa-user"></i></div>
            <button class="try-again-btn" onclick="resetQuiz()"><i class="fas fa-redo"></i>Try Again</button>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <h2>Get In Touch</h2>
        <p>Have questions about our personality prediction system? We'd love to hear from you!</p>

        <div class="contact-grid">
            <div class="contact-info">
                <i class="fas fa-map-marker-alt"></i>
                <h4>Address</h4>
                <p>123 Psychology Street<br>Mind City, MC 12345</p>

                <i class="fas fa-phone"></i>
                <h4>Phone</h4>
                <p>+94 702 740 542</p>

                <i class="fas fa-envelope"></i>
                <h4>Email</h4>
                <p>info@IntroExtro.com</p>
            </div>

            <div class="contact-form">
                <h4>Send us a Message</h4>
                <form id="contactForm">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Your Full Name" required>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Your Email Address" required>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-tag"></i>
                        <input type="text" placeholder="Subject" required>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-comment"></i>
                        <textarea placeholder="Tell us about your inquiry..." required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i>
                        <span>Send Message</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    @push('js')
        <script>
            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Active navigation link highlighting
            window.addEventListener('scroll', () => {
                const sections = document.querySelectorAll('section');
                const navLinks = document.querySelectorAll('.nav-links a');

                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= sectionTop - 200) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').substring(1) === current) {
                        link.classList.add('active');
                    }
                });
            });

            // Quiz navigation
            let currentQuestion = 1;
            const totalQuestions = 7;

            function updateProgress() {
                const currentQuestionNum = document.getElementById('currentQuestionNum');
                const totalQuestionsSpan = document.getElementById('totalQuestions');

                // Update progress dots
                document.querySelectorAll('.dot').forEach((dot, index) => {
                    dot.classList.remove('active');
                    if (index + 1 <= currentQuestion) {
                        dot.classList.add('active');
                    }
                });

                currentQuestionNum.textContent = currentQuestion;
                totalQuestionsSpan.textContent = totalQuestions;
            }

            function showQuestion(index) {
                // Hide all slides and remove prev class
                document.querySelectorAll('.form-slide').forEach(slide => {
                    slide.classList.remove('active', 'prev');
                });

                // Show current slide
                const currentSlide = document.querySelector(`.form-slide[data-question="${index}"]`);
                if (currentSlide) {
                    currentSlide.classList.add('active');
                }

                // Update navigation buttons
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const submitBtn = document.getElementById('submitBtn');

                if (index === 1) {
                    prevBtn.style.display = 'none';
                    nextBtn.style.display = 'flex';
                    submitBtn.style.display = 'none';
                } else if (index === totalQuestions) {
                    prevBtn.style.display = 'flex';
                    nextBtn.style.display = 'none';
                    submitBtn.style.display = 'flex';
                } else {
                    prevBtn.style.display = 'flex';
                    nextBtn.style.display = 'flex';
                    submitBtn.style.display = 'none';
                }

                // Update progress
                updateProgress();
            }

            function nextQuestion() {
                const currentSlide = document.querySelector(`.form-slide[data-question="${currentQuestion}"]`);
                const input = currentSlide.querySelector('input, select');

                if (input.value) {
                    // Add prev class to current slide for animation
                    currentSlide.classList.add('prev');

                    currentQuestion++;
                    if (currentQuestion <= totalQuestions) {
                        showQuestion(currentQuestion);
                        // Focus on the new input
                        const newInput = document.querySelector(
                            `.form-slide[data-question="${currentQuestion}"] input, .form-slide[data-question="${currentQuestion}"] select`
                        );
                        if (newInput) {
                            setTimeout(() => newInput.focus(), 300);
                        }
                    }
                } else {
                    input.focus();
                    input.style.borderColor = '#ff4d4d';
                    setTimeout(() => input.style.borderColor = 'rgba(170, 44, 134, 0.3)', 1000);
                }
            }

            function previousQuestion() {
                if (currentQuestion > 1) {
                    currentQuestion--;
                    showQuestion(currentQuestion);
                    // Focus on the previous input
                    const prevInput = document.querySelector(
                        `.form-slide[data-question="${currentQuestion}"] input, .form-slide[data-question="${currentQuestion}"] select`
                    );
                    if (prevInput) {
                        setTimeout(() => prevInput.focus(), 300);
                    }
                }
            }

            function submitForm() {
                const errorContainer = document.getElementById('errorContainer');
                const errorMessage = document.getElementById('errorMessage');

                const formData = {
                    timeAlone: parseFloat(document.getElementById('timeAlone').value),
                    socialEvents: parseFloat(document.getElementById('socialEvents').value),
                    goingOutside: parseFloat(document.getElementById('goingOutside').value),
                    friendsCircle: parseInt(document.getElementById('friendsCircle').value),
                    postFrequency: parseFloat(document.getElementById('postFrequency').value),
                    stageFear: document.getElementById('stageFear').value,
                    drainedSocializing: document.getElementById('drainedSocializing').value
                };

                // Validate all fields are filled
                const requiredFields = ['timeAlone', 'socialEvents', 'goingOutside', 'friendsCircle', 'postFrequency', 'stageFear', 'drainedSocializing'];
                for (let field of requiredFields) {
                    if (!formData[field] && formData[field] !== 0) {
                        errorContainer.style.display = 'block';
                        errorMessage.textContent = 'Please fill in all questions before submitting.';
                        setTimeout(() => {
                            errorContainer.style.display = 'none';
                        }, 3000);
                        return;
                    }
                }

                // Show loading
                document.getElementById('loading').classList.add('active');
                document.querySelector('.quiz-container').style.display = 'none';
                errorContainer.style.display = 'none';

                // Send data to Laravel backend
                fetch('/personality/predict', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify(formData)
                })
                .then(response => {
                    if (response.status === 401) {
                        return response.json().then(data => {
                            throw new Error(data.message || 'Unauthorized');
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        showResult(data.prediction);
                    } else {
                        throw new Error(data.message || 'Something went wrong');
                    }
                })
                .catch(error => {
                    document.getElementById('loading').classList.remove('active');
                    document.querySelector('.quiz-container').style.display = 'block';
                    errorContainer.style.display = 'block';
                    errorMessage.textContent = error.message;
                    if (error.message.includes('Please login')) {
                        setTimeout(() => {
                            window.location.href = '/auth/login';
                        }, 2000);
                    } else {
                        setTimeout(() => {
                            errorContainer.style.display = 'none';
                            resetQuiz();
                        }, 3000);
                    }
                });
            }

            function showResult(prediction) {
                document.getElementById('loading').classList.remove('active');
                document.getElementById('resultContainer').classList.add('active');

                const needle = document.querySelector('.speedometer-needle');
                const progressValue = document.getElementById('progressValue');
                const resultText = document.getElementById('resultText');

                // Animate speedometer needle
                const angle = (prediction.confidence / 100) * 180 - 90;
                needle.style.transform = `rotate(${angle}deg)`;

                // Animate progress value
                let currentValue = 0;
                const increment = prediction.confidence / 50;
                const timer = setInterval(() => {
                    currentValue += increment;
                    if (currentValue >= prediction.confidence) {
                        currentValue = prediction.confidence;
                        clearInterval(timer);
                    }
                    progressValue.textContent = Math.round(currentValue) + '%';
                }, 20);

                resultText.innerHTML =
                    `<i class="fas fa-user"></i>Your Personality: ${prediction.type} (Confidence: ${prediction.confidence.toFixed(1)}%)`;
            }

            function resetQuiz() {
                document.getElementById('resultContainer').classList.remove('active');
                document.querySelector('.quiz-container').style.display = 'block';
                document.getElementById('personalityForm').reset();
                currentQuestion = 1;
                showQuestion(currentQuestion);
                updateProgress();
            }

            // Contact form submission
            document.getElementById('contactForm').addEventListener('submit', function(e) {
                e.preventDefault();

                // Add success animation
                const form = this.closest('.contact-form');
                form.classList.add('success');

                // Show success message
                const submitBtn = this.querySelector('.submit-btn');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-check"></i><span>Message Sent!</span>';
                submitBtn.style.background = 'linear-gradient(45deg, #4CAF50, #45a049)';

                // Reset form after animation
                setTimeout(() => {
                    this.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.background = '';
                    form.classList.remove('success');
                }, 2000);
            });

            // Mobile menu toggle (basic implementation)
            document.querySelector('.mobile-menu').addEventListener('click', function() {
                alert('Mobile menu functionality would be implemented here');
            });

            // Intersection Observer for animations
            document.addEventListener('DOMContentLoaded', function() {
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
                        }
                    });
                }, observerOptions);

                document.querySelectorAll('.about-card, .contact-info, .contact-form').forEach(el => {
                    observer.observe(el);
                });
            });

            // Initialize first question
            showQuestion(currentQuestion);

            // Add keyboard support for form submission
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && currentQuestion === totalQuestions) {
                    submitForm();
                }
            });
        </script>
    @endpush
@endsection
