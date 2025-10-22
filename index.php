<?php
require_once 'config/config.php';

$page_title = 'Ana Sayfa';
$page_description = 'Canlı ders platformu ile online eğitim alın. Uzman eğitmenlerden interaktif dersler.';
$page_keywords = 'canlı ders, online eğitim, interaktif ders, uzaktan eğitim';

include 'includes/header.php';
include 'includes/navigation.php';
?>

<section class="hero">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="highlight">Canlı Derslerle</span><br>
                Öğrenmeye Başlayın
            </h1>
            <p class="hero-description">
                Uzman eğitmenlerden interaktif canlı dersler alın. 
                Evden çıkmadan kaliteli eğitim deneyimi yaşayın.
            </p>
            <div class="hero-buttons">
                <a href="kurslar.php" class="btn btn-primary">
                    <i class="fas fa-play"></i>
                    Derslere Başla
                </a>
                <a href="#ozellikler" class="btn btn-secondary">
                    <i class="fas fa-info-circle"></i>
                    Daha Fazla Bilgi
                </a>
            </div>
        </div>
        <div class="hero-image">
            <div class="hero-graphic">
                <i class="fas fa-video"></i>
                <div class="floating-elements">
                    <div class="element element-1"><i class="fas fa-users"></i></div>
                    <div class="element element-2"><i class="fas fa-book"></i></div>
                    <div class="element element-3"><i class="fas fa-certificate"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features" id="ozellikler">
    <div class="container">
        <div class="section-header">
            <h2>Neden Bizi Seçmelisiniz?</h2>
            <p>Kaliteli eğitim deneyimi için ihtiyacınız olan her şey</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-video"></i>
                </div>
                <h3>Canlı Dersler</h3>
                <p>Uzman eğitmenlerden gerçek zamanlı interaktif dersler alın</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Büyük Sınıflar</h3>
                <p>Maksimum 150 kişilik sınıflarda kişiselleştirilmiş öğrenme</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Esnek Program</h3>
                <p>Kendi programınıza uygun ders saatleri seçin</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Süre Kesintisiz Eğitim</h3>
                <p>Kesintisiz eğitim ile öğrenmeye devam edin</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Mobil Uyumlu</h3>
                <p>Her cihazdan derslere katılın ve öğrenmeye devam edin</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>7/24 Destek</h3>
                <p>Her zaman yanınızda olan teknik destek ekibimiz</p>
            </div>
        </div>
    </div>
</section>
<!--
<section class="courses">
    <div class="container">
        <div class="section-header">
            <h2>Popüler Kurslarımız</h2>
            <p>En çok tercih edilen kurslarımızı keşfedin</p>
        </div>
        
        <div class="courses-grid">
            <div class="course-card">
                <div class="course-image">
                    <i class="fas fa-code"></i>
                    <div class="course-badge">Popüler</div>
                </div>
                <div class="course-content">
                    <h3>Web Geliştirme</h3>
                    <p>HTML, CSS, JavaScript ile modern web siteleri geliştirin</p>
                    <div class="course-meta">
                        <span class="course-duration">
                            <i class="fas fa-clock"></i> 8 Hafta
                        </span>
                        <span class="course-students">
                            <i class="fas fa-users"></i> 245 Öğrenci
                        </span>
                    </div>
                    <div class="course-price">
                        <span class="price">₺299</span>
                        <a href="#" class="btn btn-outline">Detaylar</a>
                    </div>
                </div>
            </div>
            
            <div class="course-card">
                <div class="course-image">
                    <i class="fas fa-paint-brush"></i>
                    <div class="course-badge">Yeni</div>
                </div>
                <div class="course-content">
                    <h3>UI/UX Tasarım</h3>
                    <p>Kullanıcı deneyimi odaklı modern tasarım öğrenin</p>
                    <div class="course-meta">
                        <span class="course-duration">
                            <i class="fas fa-clock"></i> 6 Hafta
                        </span>
                        <span class="course-students">
                            <i class="fas fa-users"></i> 189 Öğrenci
                        </span>
                    </div>
                    <div class="course-price">
                        <span class="price">₺249</span>
                        <a href="#" class="btn btn-outline">Detaylar</a>
                    </div>
                </div>
            </div>
            
            <div class="course-card">
                <div class="course-image">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="course-content">
                    <h3>Dijital Pazarlama</h3>
                    <p>Sosyal medya ve online pazarlama stratejileri</p>
                    <div class="course-meta">
                        <span class="course-duration">
                            <i class="fas fa-clock"></i> 4 Hafta
                        </span>
                        <span class="course-students">
                            <i class="fas fa-users"></i> 156 Öğrenci
                        </span>
                    </div>
                    <div class="course-price">
                        <span class="price">₺199</span>
                        <a href="#" class="btn btn-outline">Detaylar</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
-->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">500+</div>
                <div class="stat-label">Mutlu Öğrenci</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Uzman Eğitmen</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100+</div>
                <div class="stat-label">Canlı Ders</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">98%</div>
                <div class="stat-label">Memnuniyet Oranı</div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="section-header">
            <h2>Öğrencilerimiz Ne Diyor?</h2>
            <p>Deneyimlerini paylaşan öğrencilerimizden bazıları</p>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Gerçekten çok kötü bir uygulama eksi puan 👎"</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="author-info">
                        <h4>Serkan Can Gürcan</h4>
                        <span>Mark Zuckerberg'in Yiğeni</span>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Çok beğendim yardımlarından dolayı Furkan Boyvatlı'ya çok teşekkür ederim sarıım..😘 💋,"</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="author-info">
                        <h4>Elif Yalçınkaya</h4>
                        <span>Elif Can Holding</span>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Gerçekten Mükemmel Bir Uygulama 😉"</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="author-info">
                        <h4>Mustafa Baharlı</h4>
                        <span>Ne Bulduysam Pazarlarım</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2>Hemen Başlamaya Hazır mısınız?</h2>
            <p>İlk Online Konferansınızı Yapmaya Hazır mısınız?</p>
            <div class="cta-buttons">
                <a href="iletisim.php" class="btn btn-secondary">
                    <i class="fas fa-phone"></i>
                    Bize Ulaşın
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
