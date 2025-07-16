@extends('Layout.main')
@section('container')

    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1>Create Account</h1>
                <p>Join OptCare and discover your personality</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('auth.register') }}" class="auth-form">
                @csrf

                <div class="form-group">
                    <label for="name">
                        <i class="fas fa-user"></i>
                        <span>Full Name</span>
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">
                        <i class="fas fa-envelope"></i>
                        <span>Email Address</span>
                    </label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="form-group">
                    <label for="password">
                        <i class="fas fa-lock"></i>
                        <span>Password</span>
                    </label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">
                        <i class="fas fa-lock"></i>
                        <span>Confirm Password</span>
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button type="submit" class="auth-btn">
                    <i class="fas fa-user-plus"></i>
                    Create Account
                </button>
            </form>

            <div class="auth-footer">
                <p>Already have an account? <a href="{{ route('auth.login') }}">Sign in</a></p>
            </div>
        </div>
    </div>

    <style>
        .auth-container {
            min-height: 100vh;
            background: linear-gradient(135deg, rgba(170, 44, 134, 0.1), rgba(9, 0, 29, 0.9)),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23AA2C86" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,133.3C672,139,768,181,864,186.7C960,192,1056,160,1152,138.7C1248,117,1344,107,1392,101.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(170, 44, 134, 0.2);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 0.6s ease-out;
        }

        .auth-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .auth-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #AA2C86, #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .auth-header p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }

        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .alert-success {
            background: rgba(76, 175, 80, 0.2);
            border: 1px solid rgba(76, 175, 80, 0.3);
            color: #4CAF50;
        }

        .alert-error {
            background: rgba(244, 67, 54, 0.2);
            border: 1px solid rgba(244, 67, 54, 0.3);
            color: #F44336;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        .auth-form {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
        }

        .form-group label i {
            color: #AA2C86;
            width: 16px;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(170, 44, 134, 0.3);
            border-radius: 10px;
            color: #fff;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #AA2C86;
            box-shadow: 0 0 0 3px rgba(170, 44, 134, 0.1);
        }

        .form-group input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .auth-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #AA2C86, #681650);
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 5px 15px rgba(170, 44, 134, 0.3);
        }

        .auth-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(170, 44, 134, 0.5);
        }

        .auth-footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(170, 44, 134, 0.2);
        }

        .auth-footer p {
            color: rgba(255, 255, 255, 0.8);
            margin: 0;
        }

        .auth-footer a {
            color: #AA2C86;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .auth-footer a:hover {
            color: #fff;
        }

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

        @media (max-width: 480px) {
            .auth-card {
                padding: 30px 20px;
            }

            .auth-header h1 {
                font-size: 2rem;
            }
        }
    </style>
@endsection
