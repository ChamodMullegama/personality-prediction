@extends('Layout.main')
@section('container')
<section id="account" class="section">
    <div class="account-container">
        <h2>My Account</h2>
        <p>Explore your previous personality predictions and gain insights into your behavioral patterns.</p>

        <div class="predictions-container">
            @if($predictions->isEmpty())
                <div class="no-predictions">
                    <i class="fas fa-info-circle"></i>
                    <p>No predictions found. Take the <a href="/#quiz" class="cta-button">personality assessment</a> to get started!</p>
                </div>
            @else
                <div class="predictions-table-wrapper">
                    <table class="predictions-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Personality Type</th>
                                <th>Confidence</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($predictions as $prediction)
                                <tr class="prediction-row" data-id="{{ $prediction->id }}">
                                    <td>{{ $prediction->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td>{{ $prediction->personality_type }}</td>
                                    <td>
                                        <span class="confidence-badge">{{ number_format($prediction->confidence, 1) }}%</span>
                                    </td>
                                    <td>
                                        <button class="details-btn" onclick="toggleDetails('{{ $prediction->id }}')">
                                            <i class="fas fa-info-circle"></i> Details
                                        </button>
                                        <div class="prediction-details" id="details-{{ $prediction->id }}">
                                            <div class="details-content">
                                                <p><strong>Time Spent Alone:</strong> {{ $prediction->time_alone }} hours/day</p>
                                                <p><strong>Social Events:</strong> {{ $prediction->social_events }} events/month</p>
                                                <p><strong>Going Outside:</strong> {{ $prediction->going_outside }} times/week</p>
                                                <p><strong>Friends Circle:</strong> {{ $prediction->friends_circle }} friends</p>
                                                <p><strong>Post Frequency:</strong> {{ $prediction->post_frequency }} posts/month</p>
                                                <p><strong>Stage Fear:</strong> {{ $prediction->stage_fear }}</p>
                                                <p><strong>Drained After Socializing:</strong> {{ $prediction->drained_socializing }}</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</section>

@push('js')
<script>
    function toggleDetails(id) {
        const details = document.getElementById(`details-${id}`);
        const isVisible = details.style.display === 'block';
        details.style.display = isVisible ? 'none' : 'block';
        if (!isVisible) {
            details.classList.add('details-active');
        } else {
            details.classList.remove('details-active');
        }
    }

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
</script>
@endpush
@endsection
