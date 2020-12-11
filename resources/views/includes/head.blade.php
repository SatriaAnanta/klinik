<script src="{{ asset('js/app.js') }}" defer></script>    
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<style>
    .specialties-card-img-top {
        /*height: 11vw;*/
        object-fit: cover;
    }
    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 576px) {
        .specialties-card-img-top {
            height: 19vw;
        }
    }
    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        .specialties-card-img-top {
            height: 16vw;
        }
    }
    /* Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        .specialties-card-img-top {
            height: 11vw;
        }
    }
    /* Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 992px) {
        .specialties-card-img-top {
            height: 11vw;
        }
    }

    .doctor-card {
        /*height: 11vw;*/
        object-fit: cover;
    }
    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 576px) {
        .doctor-card {
            height: 19vw;
        }
    }
    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        .doctor-card {
            height: 16vw;
        }
    }
    /* Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        .doctor-card {
            height: 18vw;
        }
    }
    /* Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 992px) {
        .doctor-card {
            height: 18vw;
        }
    }
    .pad-tb-100{
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .set-bg {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top center;
    }

    .hero-form form {
        position: relative;
    }

    .hero-form form input {
        width: 100%;
        height: 54px;
        border: 2px solid #4c57d6;
        border-radius: 50px;
        font-size: 14px;
        color: #111111;
        padding-left: 20px;
    }

    .hero-form form .site-btn {
        position: absolute;
        right: 4px;
        top: 4px;
    }
    .site-btn {
        font-size: 14px;
        color: #ffffff;
        font-weight: 700;
        text-transform: uppercase;
        display: inline-block;
        padding: 13px 30px 12px;
        background: #4c57d6;
        border: none;
        border-radius: 50px;
    }

    .site-btn:focus {
        outline: none;
        box-shadow: none;
    }

    .site-btn:hover {
        cursor:pointer;
    }

    .hero-form form input:focus {
        outline: none;
        box-shadow: none;
    }
    .footer-copyright {
        border-top: 1px solid #e1e1e1;
        padding: 25px 0 20px;
        overflow: hidden;
        margin-top: 10px;
    }

    .footer {
        padding-top: 70px;
        padding-bottom: 0;
    }
    .footer-copyright-text-left {
        font-size: 15px;
        color: #707070;
        float: left;
    }

    .footer-copyright-link-right {
        float: right;
    }
</style>