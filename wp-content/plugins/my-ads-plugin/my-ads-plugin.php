<?php
/*
Plugin Name: My Ads and GA Plugin - ARGB Edition
Description: Banner khuyến mãi với hiệu ứng viền LED ARGB và tuyết rơi cực đẹp.
Version: 1.4
Author: Đàm Ngọc Huynh
*/

function hien_thi_banner_khuyen_mai_argb_snow() {
    ?>
    <style>
        /* Hiệu ứng viền LED ARGB xoay tròn */
        @keyframes rotate-border {
            100% { transform: rotate(360deg); }
        }

        /* Hiệu ứng tuyết rơi */
        @keyframes snow-fall {
            0% { background-position: 0px 0px, 0px 0px, 0px 0px; }
            100% { background-position: 500px 1000px, 400px 400px, 300px 300px; }
        }

        .promo-container {
            position: relative;
            max-width: 800px;
            margin: 40px auto;
            padding: 4px; /* Độ dày của viền LED */
            border-radius: 15px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Lớp nền tạo màu ARGB */
        .promo-container::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            background: conic-gradient(red, yellow, lime, aqua, blue, magenta, red);
            animation: rotate-border 4s linear infinite;
        }

        .promo-banner {
            position: relative;
            background-color: #1a1a1a; /* Đổi sang nền tối để hiệu ứng tuyết và LED nổi bật hơn */
            padding: 30px;
            text-align: center;
            border-radius: 12px;
            width: 100%;
            z-index: 1;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Tích hợp tuyết rơi vào nền */
            background-image: 
                radial-gradient(circle at 50% 50%, white 1px, transparent 1px),
                radial-gradient(circle at 20% 30%, white 1.5px, transparent 1.5px),
                radial-gradient(circle at 80% 70%, white 1px, transparent 1px);
            background-size: 200px 200px, 300px 300px, 150px 150px;
            animation: snow-fall 10s linear infinite;
        }

        .promo-title {
            color: #fff;
            font-size: 24px;
            font-weight: 900;
            margin-bottom: 15px;
            text-transform: uppercase;
            text-shadow: 0 0 10px rgba(255,255,255,0.5);
            letter-spacing: 1px;
        }

        .promo-desc {
            color: #ddd;
            font-size: 17px;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .promo-button {
            background: linear-gradient(45deg, #ff0000, #ff7300);
            color: white !important;
            padding: 12px 35px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 50px;
            display: inline-block;
            transition: 0.4s;
            box-shadow: 0 4px 15px rgba(255, 0, 0, 0.3);
            border: none;
        }

        .promo-button:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 6px 20px rgba(255, 115, 0, 0.5);
            filter: brightness(1.2);
        }
    </style>

    <div class="promo-container">
        <div class="promo-banner">
            <div class="promo-title">❄️ ƯU ĐÃI ĐẶC BIỆT: PYTHON & C++ ❄️</div>
            <div class="promo-desc">
                Chào mừng tân sinh viên <strong>Đại học Tây Nguyên</strong>.<br>
                Đăng ký ngay để nhận ưu đãi 50% và bộ tài liệu AI chuyên sâu!
            </div>
            <a href="#" class="promo-button">NHẬN ƯU ĐÃI NGAY</a>
        </div>
    </div>
    <?php
}

add_action('wp_footer', 'hien_thi_banner_khuyen_mai_argb_snow');