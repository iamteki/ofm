<!-- preloader -->
<div class="loader-wrap">
    <div class="preloader">
        <div class="preloader-close">×</div>
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                <!-- OFM Logo -->
                <div class="logo-container">
                    <img src="{{ asset('assets/images/icons/ofm_icon.svg') }}" alt="OFM" class="preloader-logo">
                </div>
                
                <!-- Loading Spinner -->
                <div class="custom-spinner">
                    <div class="spinner-ring"></div>
                    <div class="spinner-ring"></div>
                    <div class="spinner-ring"></div>
                </div>
                
                <!-- Company Name -->
                <div class="company-name">
                    <h3>Online Finance Manager</h3>
                    <p>Loading your financial solutions...</p>
                </div>
            </div>  
        </div>
    </div>
</div>

<style>
/* Custom Preloader Styles */
.loader-wrap {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #1350F4 0%, #4ec0fc 100%);
    z-index: 999999;
    display: flex;
    align-items: center;
    justify-content: center;
}

.preloader {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.animation-preloader {
    text-align: center;
    position: relative;
}

/* OFM Logo Styling */
.logo-container {
    margin-bottom: 30px;
    animation: logoFadeIn 1s ease-in-out infinite alternate;
}

.preloader-logo {
    width: 120px;
    height: auto;
    animation: logoPulse 2s ease-in-out infinite;
}

/* Custom Spinner */
.custom-spinner {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 30px auto;
}

.spinner-ring {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 3px solid transparent;
    border-top: 3px solid rgba(255, 255, 255, 0.8);
    border-radius: 50%;
    animation: spinRotate 1s linear infinite;
}

.spinner-ring:nth-child(1) {
    animation-delay: 0s;
    border-top-color: rgba(255, 255, 255, 1);
}

.spinner-ring:nth-child(2) {
    animation-delay: -0.3s;
    border-top-color: rgba(255, 255, 255, 0.6);
    width: 90%;
    height: 90%;
    top: 5%;
    left: 5%;
}

.spinner-ring:nth-child(3) {
    animation-delay: -0.6s;
    border-top-color: rgba(255, 255, 255, 0.3);
    width: 80%;
    height: 80%;
    top: 10%;
    left: 10%;
}

/* Company Name */
.company-name {
    margin-top: 30px;
    color: white;
}

.company-name h3 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 8px;
    letter-spacing: 1px;
    animation: textFadeIn 2s ease-in-out infinite;
}

.company-name p {
    font-size: 14px;
    opacity: 0.8;
    margin: 0;
    font-weight: 300;
    animation: textFadeIn 2s ease-in-out infinite 0.5s;
}

/* Animations */
@keyframes logoFadeIn {
    0% { opacity: 0.7; transform: scale(0.95); }
    100% { opacity: 1; transform: scale(1.05); }
}

@keyframes logoPulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

@keyframes spinRotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes textFadeIn {
    0%, 100% { opacity: 0.6; }
    50% { opacity: 1; }
}

/* Preloader Close Button */
.preloader-close {
    position: absolute;
    top: 30px;
    right: 30px;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: normal;
    line-height: 1;
    transition: all 0.3s ease;
    font-family: Arial, sans-serif;
}

.preloader-close:hover {
    background: rgba(255, 255, 255, 0.3);
    border-color: rgba(255, 255, 255, 0.5);
    transform: scale(1.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    .preloader-logo {
        width: 100px;
    }
    
    .company-name h3 {
        font-size: 20px;
    }
    
    .company-name p {
        font-size: 12px;
    }
    
    .custom-spinner {
        width: 60px;
        height: 60px;
    }
    
    .preloader-close {
        top: 20px;
        right: 20px;
        width: 35px;
        height: 35px;
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    .preloader-logo {
        width: 80px;
    }
    
    .company-name h3 {
        font-size: 18px;
    }
    
    .custom-spinner {
        width: 50px;
        height: 50px;
        margin: 20px auto;
    }
}
</style>

<!-- preloader end -->