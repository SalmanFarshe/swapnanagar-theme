<?php
/**
 * Template Name: Owner Page
 */
wp_head();
?>
<?php
    get_template_part('./tem-parts/header', null, null);
?>
<style>
    @import url();
    /* General Body & Typography */
body {
    font-family: 'Inter', 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; /* Modern font stack */
    color: #333;
    background-color: #f8f9fa; /* Light background */
}

/* Owner Profile Card */
.owner-profile-card {
    background-color: #ffffff;
    /* border: 1px solid #e0e0e0; */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 15px rgba(212, 212, 212, 0.07); /* Softer shadow */
    padding: 3.5rem !important; /* More generous padding */
    border-radius: 15px;
}

.owner-profile-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07) !important;
}

/* Owner Header - Top Section */
.owner-header {
    align-items: center;
    justify-content: center; /* Center horizontally for smaller screens */
}

@media (min-width: 768px) {
    .owner-header {
        justify-content: flex-start; /* Align left for larger screens */
    }
}

/* Profile Photo */
.profile-photo-area {
    width: 200px; /* Fixed width for the photo container */
    flex-shrink: 0;
}

.profile-photo-wrapper {
    width: 180px; /* Size of the circular image */
    height: 180px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 1.5rem; /* Center the image and add space below */
    border: 4px solid #F2A92C; /* Primary color border */
    box-shadow: 0 0 0 6px rgba(0, 123, 255, 0.2); /* Soft outer glow */
    transition: all 0.3s ease;
}

.profile-photo-wrapper:hover {
    border-color: #F2A92C;
    box-shadow: 0 0 0 8px rgba(0, 123, 255, 0.3);
    transform: scale(1.02);
}

.profile-photo-large {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block; /* Remove extra space below image */
}

/* Social Icons */
.social-icons {
    color: #F2A92C;
    margin-top: 1rem;
}

.social-icon-link {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #e9ecef; /* Light background for icons */
    color: #F2A92C; /* Muted icon color */
    font-size: 1.1rem;
    transition: all 0.3s ease;
}

.social-icon-link:hover {
    background-color: #F2A92C; /* Primary color on hover */
    color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(242, 169, 44, 0.3);
}

/* Owner Intro - Name, Designation, Button */
.owner-intro h1 {
    font-size: 2.8rem; /* Larger, more prominent name */
    color: #212529;
    font-weight: 700;
    line-height: 1.2;
}

.owner-intro .lead {
    font-size: 1.15rem;
    color: #6c757d;
    margin-bottom: 2.5rem; /* More space before button */
}

/* WhatsApp Button */
.btn-whatsapp {
    background-color: #F2A92C; /* WhatsApp green */
    border-color: #F2A92C;
    color: #ffffff;
    font-weight: 600;
    padding: 0.8rem 2.5rem;
    font-size: 1.05rem;
    transition: all 0.3s ease;
}

.btn-whatsapp:hover {
    background-color: #1da851;
    border-color: #1da851;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(37, 211, 102, 0.4); /* Green shadow */
    color: #ffffff;
}

.btn-whatsapp .fab {
    font-size: 1.3rem; /* Larger icon */
    position: relative;
    top: 1px;
}

/* Separator */
hr.my-5 {
    border-top: 1px solid #dee2e6;
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
}

/* Owner Details Section */
.owner-details-section h5 {
    font-size: 1.35rem;
    color: #F2A92C; /* Primary color for headings */
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.owner-details-section h5::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 3px;
    background-color: #F2A92C; /* Underline effect */
    border-radius: 2px;
}


.owner-detail-list {
    margin: 0;
    padding: 0;
    list-style: none;
}

.owner-detail-list li {
    font-size: 1.05rem;
    color: #495057; /* Darker text for details */
    margin-bottom: 1rem;
    line-height: 1.6;
}

.owner-detail-list li:last-child {
    margin-bottom: 0;
}

.owner-detail-list .detail-label {
    font-weight: 600;
    color: #212529;
    min-width: 150px; /* Align labels */
    display: inline-block;
    margin-right: 10px;
}

/* Responsive Adjustments */
@media (max-width: 767.98px) {
    .owner-profile-card {
        padding: 2.5rem !important;
    }
    .owner-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .profile-photo-area {
        margin-right: 0 !important;
        margin-bottom: 2.5rem !important;
    }
    .owner-intro h1 {
        font-size: 2.2rem;
    }
    .owner-intro .lead {
        font-size: 1rem;
        margin-bottom: 2rem;
    }
    .btn-whatsapp {
        width: 100%;
        max-width: 300px; /* Prevent button from being too wide on small screens */
    }
    hr.my-5 {
        margin-top: 2.5rem !important;
        margin-bottom: 2.5rem !important;
    }
    .owner-details-section h5 {
        margin-top: 2.5rem;
    }
    .owner-details-section .col-lg-6:first-child h5 {
        margin-top: 0; /* Remove top margin for first heading */
    }
}
</style>
<section class="page-banner pt-100 pb-100 bg_cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="single-owner-area pt-70 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="owner-profile-card shadow-lg rounded-3 p-5">
                    <div class="owner-header d-flex flex-column flex-md-row align-items-center mb-5">
                        
                        <div class="profile-photo-area text-center me-md-5 mb-4 mb-md-0">
                            <div class="profile-photo-wrapper mb-3">
                                <img src="https://devmondo.com/wp-content/uploads/2019/05/team-1-640x640.jpg" 
                                     class="img-fluid rounded-circle profile-photo-large" 
                                     alt="Md. Kallol" />
                            </div>
                            <div class="social-icons  justify-content-center">
                                <a href="https://facebook.com/yourprofile" target="_blank" class="social-icon-link"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/yourprofile" target="_blank" class="social-icon-link"><i class="bi bi-instagram"></i></a>
                                <a href="https://linkedin.com/in/yourprofile" target="_blank" class="social-icon-link"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="owner-intro flex-grow-1 text-center text-md-start">
                            <h1 class="display-5 fw-bold mb-2">Md. Kallol</h1>
                            <p class="lead text-muted mb-4">Owner of Flat 4A, Swapnanagar Building</p>
                            <a href="https://wa.me/+8801711234567" target="_blank" class="btn btn-whatsapp btn-lg rounded-pill px-5 d-inline-flex align-items-center">
                                <i class="fab fa-whatsapp me-2"></i> Contact via WhatsApp
                            </a>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="owner-details-section">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <h5 class="mb-4 fw-bold text-primary">Personal Information</h5>
                                <ul class="list-unstyled owner-detail-list">
                                    <li><span class="detail-label">Full Name:</span> Md. Kallol (এমডি কাললোল)</li>
                                    <li><span class="detail-label">Father’s Name:</span> Md. Rahman (এমডি রহমান)</li>
                                    <li><span class="detail-label">Spouse Name:</span> Mrs. Shimu (শিমু)</li>
                                    <li><span class="detail-label">NID No:</span> 1234567890123</li>
                                    <li><span class="detail-label">Blood Group:</span> O+</li>
                                    <li><span class="detail-label">Profession:</span> Businessman</li>
                                    <li><span class="detail-label">Service District:</span> Dhaka</li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-6">
                                <h5 class="mb-4 fw-bold text-primary">Property & Address</h5>
                                <ul class="list-unstyled owner-detail-list">
                                    <li><span class="detail-label">Building / Flat / Garage:</span> Building 4, Flat 4A, Garage 2</li>
                                    <li><span class="detail-label">Present Address:</span> 123, Mirpur, Dhaka</li>
                                    <li><span class="detail-label">Permanent Address:</span> 456, Sylhet</li>
                                </ul>
                                <h5 class="mb-4 fw-bold text-primary mt-5">Contact Details</h5>
                                <ul class="list-unstyled owner-detail-list">
                                    <li><span class="detail-label">Email:</span> kallol@example.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    get_template_part('./tem-parts/footer', null, null);
    wp_footer();
?>