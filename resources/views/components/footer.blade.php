
<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">

</head>
<body>
<footer>
    <div class="footer">
        <!-- Social Media Icons Row -->
        <div class="icons">
            <a href="{{$profile->email}}"><i class="fa fa-envelope"></i></a>
            <a href="{{$profile->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
        <!-- Footer Navigation Links Row -->
        <div class="row">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="{{route('sales.contact')}}">Inquery</a></li>
                <li><a href="{{route('categories.cvt')}}">Produk</a></li>
                <li><a href="{{route('reseller.index')}}">Rekanan</a></li>
                <li><a href="#">Other</a></li>
            </ul>
        </div>
        <!-- Footer Copyright Row -->
        <div class="row copyright">
            <p><a href="{{route('admin.dashboard')}}">&copy;</a> 2024 CVT Motor - All rights reserved</p>
            <p>Powered by: <a href="https://www.yourcompany.com" target="_blank">Developer</a></p>
        </div>
    </div>
</footer>

<style>
    a {
    color: #fff;
    text-decoration: none;
}

a:hover {
    color:#fff; 
    text-decoration:none; 
    cursor:pointer;  
}
    body {
        margin: 0;
        overflow-x: hidden;
    }

    .footer {
        background: #000;
        padding: 20px 0;
        font-family: 'Play', sans-serif;
        text-align: center;
        color: gray;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    /* Social Media Icons Row */
    .footer .icons {
        display: flex;
        justify-content: center;
        gap: 25px;
        margin-bottom: 10px;
    }

    .footer .icons a {
        text-decoration: none;
        color: gray;
        font-size: 1.8em;
        transition: color 0.3s, transform 0.3s;
    }

    .footer .icons a:hover {
        color: #ffcc00;
        transform: scale(1.2);
    }

    /* Navigation Links */
    .footer .row ul {
        padding: 0;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
        margin-bottom: 10px;
    }

    .footer .row ul li {
        margin: 5px 10px;
    }

    .footer .row ul li a {
        color: gray;
        text-decoration: none;
        font-size: 1em;
        transition: color 0.3s;
    }

    .footer .row ul li a:hover {
        color: #ffcc00;
        border-bottom: 1px solid #ffcc00;
    }

    /* Divider line between sections */
    .footer .row ul:after {
        content: "";
        display: block;
        width: 80%;
        margin: 15px auto;
        height: 1px;
        background-color: #333;
    }

    /* Copyright Section */
    .footer .row.copyright {
        font-size: 0.9em;
        color: #aaa;
        line-height: 1.5;
        padding: 10px 0;
        border-top: 1px solid #333;
    }

    .footer .row copyright p {
        margin: 5px 0;
    }

    .footer .row copyright a {
        color: #ffcc00;
        text-decoration: none;
        font-weight: bold;
    }

    .footer .row copyright a:hover {
        color: #fff;
    }

    /* Responsive Design */
    @media (max-width: 720px) {
        .footer {
            padding: 15px;
            gap: 15px;
        }

        /* Center icons and adjust size */
        .footer .icons {
            gap: 20px;
        }

        /* Stack navigation links vertically on small screens */
        .footer .row ul {
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        /* Adjust link spacing */
        .footer .row ul li {
            margin: 8px 0;
        }

        /* Center and adjust spacing for copyright */
        .footer .row.copyright {
            font-size: 0.85em;
        }
    }
</style>
</body>
