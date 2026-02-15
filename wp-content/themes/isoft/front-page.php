<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden">
        <div class="absolute top-0 right-0 -z-10 w-1/2 h-full bg-accent/5 rounded-bl-[100px]"></div>
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in-up">
                <span class="inline-block py-1 px-4 rounded-full bg-accent/10 text-accent font-bold text-sm mb-6">Witamy w iSoft</span>
                <h1 class="text-5xl md:text-7xl font-extrabold font-heading text-primary leading-tight mb-8">
                    Rozwijaj swoją <span class="text-accent">przyszłość</span> z nami
                </h1>
                <p class="text-lg text-primary/70 mb-10 max-w-lg leading-relaxed">
                    Profesjonalne szkolenia, egzaminy certyfikacyjne i doradztwo w zakresie funduszy unijnych. Postaw na sprawdzonego partnera w rozwoju.
                </p>
                <div class="flex flex-col sm:row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#services" class="btn-primary text-center">Nasza oferta</a>
                    <a href="#about" class="py-3 px-8 rounded-full border-2 border-primary/10 font-bold hover:bg-primary/5 transition-all text-center">Dowiedz się więcej</a>
                </div>
            </div>
            <div class="relative hidden md:block">
                <div class="bg-gradient-to-tr from-accent to-accent-dark w-[500px] h-[500px] rounded-full absolute -top-10 -right-10 opacity-10 animate-pulse"></div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="Szkolenia" class="rounded-3xl shadow-2xl relative z-10 animate-float">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
                        <div class="text-4xl font-bold text-accent mb-2">15+</div>
                        <div class="text-primary/60 text-sm">Lat doświadczenia</div>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-sm mt-8 text-center">
                        <div class="text-4xl font-bold text-accent mb-2">5k+</div>
                        <div class="text-primary/60 text-sm">Przeszkolonych osób</div>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-sm -mt-8 text-center">
                        <div class="text-4xl font-bold text-accent mb-2">100%</div>
                        <div class="text-primary/60 text-sm">Satysfakcji</div>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
                        <div class="text-4xl font-bold text-accent mb-2">50+</div>
                        <div class="text-primary/60 text-sm">Ekspertów</div>
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold font-heading mb-8">Wieloletnie doświadczenie w edukacji</h2>
                    <p class="text-lg text-primary/70 mb-8 leading-relaxed">
                        Jesteśmy liderem w branży szkoleniowej, oferując szeroki wachlarz usług od kursów technicznych po szkolenia miękkie. Naszą misją jest dostarczanie najwyższej jakości wiedzy, która przekłada się na realne sukcesy naszych klientów.
                    </p>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center space-x-3 text-primary/80">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Certyfikowane ośrodki egzaminacyjne</span>
                        </li>
                        <li class="flex items-center space-x-3 text-primary/80">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Indywidualne podejście do każdego klienta</span>
                        </li>
                        <li class="flex items-center space-x-3 text-primary/80">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Nowoczesne metody nauczania</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-bold font-heading mb-6">Nasze usługi</h2>
                <p class="text-primary/60">Kompleksowa oferta edukacyjna i doradcza dopasowana do Twoich potrzeb.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $services = [
                    [
                        'title' => 'Szkolenia otwarte',
                        'desc' => 'Szkolenia z zakresu sprzedaży, marketingu, HR, prawa, finansów i administracji.',
                        'icon' => '<svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>'
                    ],
                    [
                        'title' => 'Szkolenia zamknięte',
                        'desc' => 'Szkolenia organizowane na indywidualne potrzeby Klienta, w jego siedzibie lub wybranym miejscu.',
                        'icon' => '<svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>'
                    ],
                    [
                        'title' => 'Egzaminy ECDL',
                        'desc' => 'Egzaminy ECDL Base, Standard i Advanced – międzynarodowy certyfikat kompetencji cyfrowych.',
                        'icon' => '<svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>'
                    ],
                    [
                        'title' => 'Egzaminy VCC',
                        'desc' => 'Vocational Competence Certificate – potwierdzenie kwalifikacji zawodowych.',
                        'icon' => '<svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138z"></path></svg>'
                    ],
                    [
                        'title' => 'Projekty unijne',
                        'desc' => 'Realizacja projektów szkoleniowych dofinansowanych ze środków Unii Europejskiej.',
                        'icon' => '<svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2 2 2 0 012 2v.65M16.5 20.158V18a2 2 0 00-2-2v-1a2 2 0 00-2-2h-1a2 2 0 00-2 2v1a2 2 0 00-2 2v1.65m12-12.2a10 10 0 11-14.142 14.142 10 10 0 0114.142-14.142z"></path></svg>'
                    ],
                    [
                        'title' => 'Fundusze & Dotacje',
                        'desc' => 'Pozyskiwanie funduszy krajowych i unijnych na rozwój Twojej firmy.',
                        'icon' => '<svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>'
                    ],
                ];

                foreach ($services as $service) : ?>
                    <div class="p-8 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 group">
                        <div class="mb-6 p-4 bg-accent/5 rounded-xl w-fit group-hover:bg-accent group-hover:text-white transition-colors duration-300">
                            <?php echo $service['icon']; ?>
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-3"><?php echo $service['title']; ?></h3>
                        <p class="text-primary/60 leading-relaxed"><?php echo $service['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section-padding bg-primary text-white overflow-hidden relative">
        <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
            <div class="absolute top-10 left-10 w-64 h-64 border border-white rounded-full"></div>
            <div class="absolute -bottom-10 right-10 w-96 h-96 border border-white rounded-full"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:row justify-between items-center mb-16">
                <div class="max-w-xl mb-8 md:mb-0">
                    <h2 class="text-3xl md:text-5xl font-bold font-heading mb-6">Dlaczego warto nas wybrać?</h2>
                    <p class="text-white/60">Stawiamy na jakość, rzetelność i profesjonalizm w każdym aspekcie naszej działalności.</p>
                </div>
                <a href="#contact" class="btn-primary">Rozpocznij współpracę</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mb-6 text-2xl font-bold">1</div>
                    <h4 class="text-xl font-bold mb-4">Gwarancja jakości</h4>
                    <p class="text-white/60">Najwyższe standardy prowadzenia zajęć potwierdzone licznymi certyfikatami.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mb-6 text-2xl font-bold">2</div>
                    <h4 class="text-xl font-bold mb-4">Praktyczna wiedza</h4>
                    <p class="text-white/60">Uczymy tego, co faktycznie przyda się w codziennej pracy zawodowej.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center mb-6 text-2xl font-bold">3</div>
                    <h4 class="text-xl font-bold mb-4">Wsparcie po szkoleniu</h4>
                    <p class="text-white/60">Nie zostawiamy Cię po kursie. Oferujemy doradztwo i pomoc merytoryczną.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-[40px] shadow-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2">
                <div class="p-12 lg:p-20 bg-accent text-white">
                    <h2 class="text-3xl md:text-5xl font-bold font-heading mb-8">Skontaktuj się z nami</h2>
                    <p class="text-white/80 mb-12 text-lg">Masz pytania dotyczące naszej oferty? Chcesz zorganizować szkolenie zamknięte? Napisz do nas!</p>
                    
                    <div class="space-y-8">
                        <div class="flex items-start space-x-6">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-1">Email</h4>
                                <p class="text-white/70">biuro@isoft.biz.pl</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-6">
                            <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-1">Telefon</h4>
                                <p class="text-white/70">+48 123 456 789</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-12 lg:p-20">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-primary/60 mb-2 uppercase tracking-wider">Imię i Nazwisko</label>
                                <input type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-accent transition-all" placeholder="Jan Kowalski">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-primary/60 mb-2 uppercase tracking-wider">Email</label>
                                <input type="email" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-accent transition-all" placeholder="jan@przyklad.pl">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-primary/60 mb-2 uppercase tracking-wider">Temat</label>
                            <input type="text" class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-accent transition-all" placeholder="W czym możemy pomóc?">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-primary/60 mb-2 uppercase tracking-wider">Wiadomość</label>
                            <textarea class="w-full px-6 py-4 bg-gray-50 border-none rounded-2xl focus:ring-2 focus:ring-accent transition-all h-40" placeholder="Twoja wiadomość..."></textarea>
                        </div>
                        <button type="submit" class="w-full btn-primary py-5 text-lg">Wyślij wiadomość</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
