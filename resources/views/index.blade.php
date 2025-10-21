<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Concert Ticket Sales</title>
  </head>
  <body>
    <nav class="navbar">
      <div class="hamburger">☰</div>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#tickets">Tickets</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <section id="home" class="hero">
      <h1 class="animate-neonGlow">
        Experience the Ultimate Music Festival 2025
      </h1>
      <p>
        Join thousands of fans for an unforgettable night of music and energy!
      </p>
      <a href="#tickets" class="cta-button">Buy Tickets Now</a>
    </section>

    <section id="about" class="section about">
      <h2>About the Concert</h2>
      <p>
        Join us for an electrifying music festival featuring top artists from
        around the globe. Expect high-energy performances, stunning visuals, and
        a vibrant community of music lovers.
      </p>
    </section>
    <section id="upcoming" class="section">
      <h2>Upcoming Concerts</h2>
      <div class="upcoming-concerts">
        <!-- Concert 1 -->
        <div class="concert-card">
          <div class="status-badge available">TICKETS AVAILABLE</div>
          <div class="concert-image">🎸 ROCK FEST</div>
          <div class="concert-info">
            <div class="concert-title">Ultimate Rock Festival 2025</div>
            <div class="concert-date">📅 December 31, 2025 | 8:00 PM</div>
            <div class="concert-location">📍 Central Arena, Downtown City</div>
            <div class="concert-bands">
              <h4>Performing Artists:</h4>
              <div class="band-list">
                <span class="band-tag">The Electric Vibes</span>
                <span class="band-tag">Luna Sparks</span>
                <span class="band-tag">DJ Neon</span>
                <span class="band-tag">Thunder Strike</span>
              </div>
            </div>
            <div class="concert-price">From $50</div>
            <button
              class="cta-button"
              onclick="selectConcert('Ultimate Rock Festival 2025')"
            >
              Buy Tickets
            </button>
          </div>
        </div>

        <!-- Concert 2 -->
        <div class="concert-card">
          <div class="status-badge available">TICKETS AVAILABLE</div>
          <div class="concert-image">🎵 POP NIGHT</div>
          <div class="concert-info">
            <div class="concert-title">Pop Stars Mega Concert</div>
            <div class="concert-date">📅 January 15, 2026 | 7:30 PM</div>
            <div class="concert-location">📍 Grand Stadium, Music District</div>
            <div class="concert-bands">
              <h4>Performing Artists:</h4>
              <div class="band-list">
                <span class="band-tag">Stella Nova</span>
                <span class="band-tag">The Harmonics</span>
                <span class="band-tag">Dream Waves</span>
                <span class="band-tag">Echo Chamber</span>
              </div>
            </div>
            <div class="concert-price">From $75</div>
            <button
              class="cta-button"
              onclick="selectConcert('Pop Stars Mega Concert')"
            >
              Buy Tickets
            </button>
          </div>
        </div>

        <!-- Concert 3 -->
        <div class="concert-card">
          <div class="status-badge coming-soon">COMING SOON</div>
          <div class="concert-image">🎛️ EDM RAVE</div>
          <div class="concert-info">
            <div class="concert-title">Electronic Dance Marathon</div>
            <div class="concert-date">📅 February 20, 2026 | 9:00 PM</div>
            <div class="concert-location">📍 Warehouse District, Club Zone</div>
            <div class="concert-bands">
              <h4>Performing Artists:</h4>
              <div class="band-list">
                <span class="band-tag">Bass Drop</span>
                <span class="band-tag">Neon Pulse</span>
                <span class="band-tag">Cyber Funk</span>
                <span class="band-tag">Digital Dreams</span>
              </div>
            </div>
            <div class="concert-price">From $60</div>
            <button class="cta-button" onclick="showComingSoon()">
              Notify Me
            </button>
          </div>
        </div>

        <!-- Concert 4 -->
        <div class="concert-card">
          <div class="status-badge available">TICKETS AVAILABLE</div>
          <div class="concert-image">🎺 JAZZ NIGHT</div>
          <div class="concert-info">
            <div class="concert-title">Smooth Jazz Evening</div>
            <div class="concert-date">📅 March 10, 2026 | 8:30 PM</div>
            <div class="concert-location">📍 Blue Note Hall, Arts Quarter</div>
            <div class="concert-bands">
              <h4>Performing Artists:</h4>
              <div class="band-list">
                <span class="band-tag">Miles Away</span>
                <span class="band-tag">Smooth Operators</span>
                <span class="band-tag">Jazz Collective</span>
                <span class="band-tag">Blue Monday</span>
              </div>
            </div>
            <div class="concert-price">From $85</div>
            <button
              class="cta-button"
              onclick="selectConcert('Smooth Jazz Evening')"
            >
              Buy Tickets
            </button>
          </div>
        </div>

        <!-- Concert 5 -->
        <div class="concert-card">
          <div class="status-badge coming-soon">COMING SOON</div>
          <div class="concert-image">🎼 ORCHESTRA</div>
          <div class="concert-info">
            <div class="concert-title">Classical Symphony Night</div>
            <div class="concert-date">📅 April 5, 2026 | 7:00 PM</div>
            <div class="concert-location">📍 Symphony Hall, Culture Center</div>
            <div class="concert-bands">
              <h4>Performing Artists:</h4>
              <div class="band-list">
                <span class="band-tag">City Orchestra</span>
                <span class="band-tag">Chamber Ensemble</span>
                <span class="band-tag">String Quartet</span>
                <span class="band-tag">Piano Virtuoso</span>
              </div>
            </div>
            <div class="concert-price">From $95</div>
            <button class="cta-button" onclick="showComingSoon()">
              Notify Me
            </button>
          </div>
        </div>

        <!-- Concert 6 -->
        <div class="concert-card">
          <div class="status-badge available">TICKETS AVAILABLE</div>
          <div class="concert-image">🌍 WORLD</div>
          <div class="concert-info">
            <div class="concert-title">World Music Festival</div>
            <div class="concert-date">📅 May 18, 2026 | 6:00 PM</div>
            <div class="concert-location">
              📍 Open Air Park, Festival Grounds
            </div>
            <div class="concert-bands">
              <h4>Performing Artists:</h4>
              <div class="band-list">
                <span class="band-tag">Global Rhythms</span>
                <span class="band-tag">Ethnic Fusion</span>
                <span class="band-tag">Desert Winds</span>
                <span class="band-tag">Cultural Beats</span>
              </div>
            </div>
            <div class="concert-price">From $55</div>
            <button
              class="cta-button"
              onclick="selectConcert('World Music Festival')"
            >
              Buy Tickets
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="tickets" class="section ticket-form">
      <h2>Purchase Tickets</h2>
      <form id="ticketForm">
        <select name="concert_event" id="concertSelect" required>
          <option value="" disabled selected>Select Concert Event</option>
          <option value="Ultimate Rock Festival 2025">
            Ultimate Rock Festival 2025 - Dec 31
          </option>
          <option value="Pop Stars Mega Concert">
            Pop Stars Mega Concert - Jan 15
          </option>
          <option value="Smooth Jazz Evening">
            Smooth Jazz Evening - Mar 10
          </option>
          <option value="World Music Festival">
            World Music Festival - May 18
          </option>
        </select>
        <input type="text" name="full_name" placeholder="Full Name" required />
        <input type="email" name="email" placeholder="Email Address" required />
        <select name="ticket_type" required>
          <option value="" disabled selected>Select Ticket Type</option>
          <option value="General Admission">General Guest</option>
          <option value="VIP">VIP</option>
          <option value="Premium">Premium</option>
          <option value="Pr">Pr</option>
        </select>
        <input
          type="number"
          name="quantity"
          placeholder="Quantity"
          min="1"
          max="10"
          required
        />
        <input
          type="text"
          name="promo_code"
          placeholder="Promo Code (Optional)"
        />
        <button type="submit" class="cta-button">Purchase Tickets</button>
      </form>
    </section>

    <section id="countdown" class="section countdown">
      <h2>Countdown to Concert</h2>
      <div class="countdown-grid">
        <div class="countdown-item"><span id="days">00</span><br />Days</div>
        <div class="countdown-item"><span id="hours">00</span><br />Hours</div>
        <div class="countdown-item">
          <span id="minutes">00</span><br />Minutes
        </div>
        <div class="countdown-item">
          <span id="seconds">00</span><br />Seconds
        </div>
      </div>
    </section>

    <section id="gallery" class="section gallery">
      <h2>Gallery</h2>
      <div class="gallery">
        <img
          src="https://images.unsplash.com/photo-1493225457124-fd3d1b2b72f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
          alt="Concert 1"
        />
        <img
          src="https://images.unsplash.com/photo-1506157786151-b8491531f063?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
          alt="Concert 2"
        />
        <img
          src="https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
          alt="Concert 3"
        />
      </div>
    </section>

    <section id="testimonials" class="section testimonials">
      <h2>Testimonials</h2>
      <div class="testimonial-carousel">
        <div class="testimonial active">
          "The best concert I've ever attended!" - Jane Doe
        </div>
        <div class="testimonial">
          "Unforgettable energy and amazing performances!" - John Smith
        </div>
        <div class="testimonial">
          "VIP tickets were worth every penny!" - Emily Johnson
        </div>
      </div>
    </section>

    <section id="pricing" class="section pricing">
      <h2>Ticket Pricing</h2>
      <table>
        <tr>
          <th>Ticket Type</th>
          <th>Price</th>
          <th>Benefits</th>
        </tr>
        <tr>
          <td>General Admission</td>
          <td>$50</td>
          <td>Access to main stage</td>
        </tr>
        <tr>
          <td>VIP</td>
          <td>$100</td>
          <td>Access to main stage + VIP lounge</td>
        </tr>
        <tr>
          <td>Premium</td>
          <td>$150</td>
          <td>VIP benefits + meet-and-greet</td>
        </tr>
      </table>
    </section>

    <section id="performers" class="section performers">
      <h2>Performers</h2>
      <div class="performers-grid">
        <div class="performer-card">
          <h3>The Electric Vibes</h3>
          <p>Headlining rock band</p>
        </div>
        <div class="performer-card">
          <h3>Luna Sparks</h3>
          <p>Pop sensation</p>
        </div>
        <div class="performer-card">
          <h3>DJ Neon</h3>
          <p>Electronic music maestro</p>
        </div>
      </div>
    </section>

    <section id="event-details" class="section event-details">
      <h2>Event Details</h2>
      <p><strong>Location:</strong> Central Arena, Downtown City</p>
      <p><strong>Date:</strong> December 31, 2025</p>
      <p><strong>Time:</strong> 8:00 PM</p>
    </section>

    <section id="map" class="section map">
      <h2>Concert Location</h2>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0860581979997!2d-122.41941568468164!3d37.77492977975947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDQ2JzI5LjciTiAxMjLCsDI1JzA5LjkiVw!5e0!3m2!1sen!2sus!4v1634567891234"
        allowfullscreen
      ></iframe>
    </section>

    <section id="newsletter" class="section newsletter">
      <h2>Subscribe to Updates</h2>
      <form id="newsletterForm">
        <input type="email" name="email" placeholder="Email Address" required />
        <button type="submit" class="cta-button">Subscribe</button>
      </form>
    </section>

    <section id="promo" class="section promo">
      <h2>Promo Code</h2>
      <p>
        Enter your promo code in the ticket purchase form to get exclusive
        discounts!
      </p>

      <form>
        <table border="1" cellpadding="8" cellspacing="0">
          <tr>
            <th>Promo Code</th>
            <td><input type="text" name="promo" required /></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center">
              <button type="submit">Apply</button>
            </td>
          </tr>
        </table>
      </form>
    </section>

    <section id="stats" class="section stats">
      <h2>Our Stats</h2>
      <div class="stats-grid">
        <div><strong>50,000+</strong><br />Attendees</div>
        <div><strong>25+</strong><br />Concerts Held</div>
        <div><strong>100+</strong><br />Artists Performed</div>
      </div>
    </section>

    <footer id="contact" class="footer">
      <p>Email: info@concert2025.com | Phone: +123-456-7890</p>
      <div>
        <a href="https://twitter.com/concert2025">Twitter</a>
        <a href="https://instagram.com/concert2025">Instagram</a>
        <a href="https://facebook.com/concert2025">Facebook</a>
      </div>
      <p>© 2025 Concert Festival. All rights reserved.</p>
    </footer>

    <div id="modal" class="modal">
      <div class="modal-content">
        <h2>Purchase Confirmation</h2>
        <p id="modalMessage">
          Thank you for your purchase! You will be redirected to WhatsApp to
          confirm your order.
        </p>
        <button onclick="closeModal()" class="cta-button">Close</button>
      </div>
    </div>

    <!-- Floating Buy Tickets Button -->
    <a href="#tickets" class="floating-button">Buy Tickets</a>
    <script src="{{ asset('js/interaksi.js') }}"></script>
  </body>
</html>
