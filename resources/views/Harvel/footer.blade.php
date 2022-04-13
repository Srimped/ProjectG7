<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #fcfcfc;
    }

    footer {
        bottom: 0;
        left: 0;
        right: 0;
        background: #111;
        height: auto;
        width: 100vw;
        font-family: "Open Sans";
        padding-top: 40px;
        color: #fff;
    }

    .footer-content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .footer-content h3 {
        font-size: 1.8rem;
        font-weight: 400;
        text-transform: capitalize;
        line-height: 3rem;
    }

    .footer-content p {
        max-width: 500px;
        margin: 10px auto;
        line-height: 28px;
        font-size: 14px;
    }

    .socials {
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 1rem 0 3rem 0;
    }

    .socials li {
        margin: 0 10px;
    }

    .socials a {
        text-decoration: none;
        color: #fff;
    }

    .socials a i {
        font-size: 1.1rem;
        transition: color .4s ease;

    }

    .socials a:hover i {
        color: aqua;
    }

    .footer-bottom {
        background: #000;
        width: 100vw;
        padding: 20px 0;
        text-align: center;
    }

    .footer-bottom p {
        font-size: 14px;
        word-spacing: 2px;
        text-transform: capitalize;
    }

    .footer-bottom span {
        text-transform: uppercase;
        opacity: .4;
        font-weight: 200;
    }
</style>
<footer>
    <div class="footer-content">
        <h3>Thank you for visiting our webiste</h3>
        <p>this is a great honnor for us to serve you</p>
        <ul class="socials">
            <li><a class="contact-btn"><i class="fab fa-instagram"></i></a></li>
            <li><a class="contact-btn"><i class="fab fa-facebook-square"></i></a></li>
            <li><a class="contact-btn"><i class="fab fa-twitter-square"></i></a></li>
            <li><a class="contact-btn"><i class="fab fa-pinterest-square"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>
            <underline><strong>Wish to see you in the future</strong></underline>
        </p>
    </div>
</footer>
