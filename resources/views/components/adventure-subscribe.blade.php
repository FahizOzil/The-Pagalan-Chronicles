 <!-- Subscription Section -->
    {{-- <section class="subscribe-section" id="subscribe">
        <div class="container">
            <h2 class="section-title text-white">Join the Adventure</h2>
            <p>Subscribe to receive updates about The Pagalan Chronicles and be the first to know about new releases!</p>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="subscription-form">
                <form action="{{ route('subscribe') }}" method="POST" class="subscribe-form" id="subscribeForm">
                    @csrf
                    <div class="input-group form-group">
                        <input type="email" name="email" id="subscriptionEmail" class="form-control"
                            placeholder="Your email address" required>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-gold">Subscribe Now</button>
                        </div>
                    </div>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </form>
            </div>
        </div>
    </section> --}}
