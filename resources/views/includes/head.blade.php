<script src="{{ asset('js/app.js') }}" defer></script>    
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>
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