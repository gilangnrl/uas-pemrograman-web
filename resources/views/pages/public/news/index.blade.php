<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>
    html {
        font-size: 100%;
    }

    body {
        font-size: 16px;
        background: rgb(190,186,255);
        background: linear-gradient(90deg, rgba(190,186,255,1) 0%, rgba(123,123,255,1) 43%, rgba(163,227,240,1) 88%);
        font-family: 'Roboto', sans-serif;
    }

    .container {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 6px rgba(0, 0, 0, 0.15);
    }

    p {
        color: #93a4aa;
    }



    /* Page Header */
    .page-header {
        border-bottom: 3px solid #e1e1e1;
        margin-bottom: 30px;
    }

    .page-header h2 {
        color: #404954;
        font-size: 3rem;
        font-weight: 600;
        letter-spacing: -0.1rem;
        display: inline-block;
        margin-top: 0;
    }

    .page-header h3 {
        color: #404954;
        font-weight: 600;
    }

    .page-header .lead {
        font-size: 1.5rem;
        font-weight: 200;
        display: inline-block;
        margin: 0;
        max-width: 85%;
        padding-bottom: 15px;
    }

    .page-header .view-all {
        display: inline-block;
        float: right;
        margin-top: 8px;
        text-transform: uppercase;
    }


    /* Listing Global Style */
    .thumbnail {
        display: inline-block;
        width: 100%;
    }

    .thumbnail,
    .thumbnail .caption {
        padding: 0;
        border: 0;
    }

    /* Hide image, Use background thumbnail instead */
    .thumbnail img {
        display: none;
        width: 100%;
        height: auto;
    }

    /* Background thumbnail */
    .thumbnail .placeholder {
        display: inline-block;
        width: 100%;
        padding-bottom: 66.67%;
        background-position: center center !important;
        background-size: cover !important;
    }



    @media only screen and (min-width: 768px) {
        .wrapper {
            margin: 30px 0;
        }

        .container {
            padding: 0px 30px 60px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 6px rgba(0, 0, 0, 0.15);
        }
    }


    /* Tablet Portrait */
    @media only screen and (max-width: 767px) {

        .container {
            padding-left: 24px;
            padding-right: 24px;
        }

        body [class*="col"] {
            padding-left: 8px;
            padding-right: 8px;
        }

        .thumbnail .caption {
            height: 80px;
            margin-bottom: 15px;
            font-size: 0.88rem;
        }

        /* Post List style */
        .post-list .thumbnail {
            border-bottom: 1px solid #e1e1e1;
            padding-bottom: 25px;
        }

        /* Thumbnail style */
        .post-list .thumbnail .placeholder {
            float: left;
            width: 40%;
            padding-bottom: 26.67%;
            margin-right: 5%;
        }

        /* Caption box */
        .post-list .caption {
            float: none;
            width: auto;
        }

        .page-header .lead {
            font-size: 1.25rem;
            font-weight: 200;
            display: block;
            margin: 0;
            max-width: 100%;
            padding-bottom: 15px;
        }

        .page-header .view-all {
            float: none;
            margin: 0 0 20px;
        }

    }


    /* Mobile Landscape */
    @media only screen and (max-width: 480px) {
        .caption .caption-heading {
            font-size: 0.94rem;
            line-height: normal;
            margin-top: 0;
        }
    }


    @media (max-width: 667px) {
        .thumbnail .caption p {
            display: none;
        }

        .thumbnail .caption {
            height: 30px;
        }

        .col-xs-6:nth-child(3n+1) {
            clear: left;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .thumbnail .caption p {
            display: none;
        }

        .caption .caption-heading {
            font-size: 0.94rem;
        }
    }



    /* Footer */
    .site-info {
        text-align: center;
        margin: 30px 0;
    }


    /* Bootstrap 5 columns */
    .col-xs-5bx,
    .col-sm-5bx,
    .col-md-5bx,
    .col-lg-5bx {
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
        position: relative;
    }

    @media (max-width: 767px) {
        .col-xs-5bx {
            width: 20%;
            float: left;
        }
    }

    @media (min-width: 768px) {
        .col-sm-5bx {
            width: 20%;
            float: left;
        }
    }

    @media (min-width: 992px) {
        .col-md-5bx {
            width: 20%;
            float: left;
        }
    }

    @media (min-width: 1200px) {
        .col-lg-5bx {
            width: 20%;
            float: left;
        }
    }


    /* Print */
    @media print {
        .thumbnail img {
            display: block;
        }

        .thumbnail .placeholder {
            padding: 0;
        }

        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12 {
            float: left;
        }

        .col-sm-12 {
            width: 100% !important;
        }

        .col-sm-11 {
            width: 91.66666667%;
        }

        .col-sm-10 {
            width: 83.33333333%;
        }

        .col-sm-9 {
            width: 75%;
        }

        .col-sm-8 {
            width: 66.66666667%;
        }

        .col-sm-7 {
            width: 58.33333333%;
        }

        .col-sm-6 {
            width: 50%;
        }

        .col-sm-5 {
            width: 41.66666667%;
        }

        .col-sm-4 {
            width: 33.33333333%;
        }

        .col-sm-3 {
            width: 25%;
        }

        .col-sm-2 {
            width: 16.66666667%;
        }

        .col-sm-1 {
            width: 8.33333333%;
        }

        .col-sm-pull-12 {
            right: 100%;
        }

        .col-sm-pull-11 {
            right: 91.66666667%;
        }

        .col-sm-pull-10 {
            right: 83.33333333%;
        }

        .col-sm-pull-9 {
            right: 75%;
        }

        .col-sm-pull-8 {
            right: 66.66666667%;
        }

        .col-sm-pull-7 {
            right: 58.33333333%;
        }

        .col-sm-pull-6 {
            right: 50%;
        }

        .col-sm-pull-5 {
            right: 41.66666667%;
        }

        .col-sm-pull-4 {
            right: 33.33333333%;
        }

        .col-sm-pull-3 {
            right: 25%;
        }

        .col-sm-pull-2 {
            right: 16.66666667%;
        }

        .col-sm-pull-1 {
            right: 8.33333333%;
        }

        .col-sm-pull-0 {
            right: auto;
        }

        .col-sm-push-12 {
            left: 100%;
        }

        .col-sm-push-11 {
            left: 91.66666667%;
        }

        .col-sm-push-10 {
            left: 83.33333333%;
        }

        .col-sm-push-9 {
            left: 75%;
        }

        .col-sm-push-8 {
            left: 66.66666667%;
        }

        .col-sm-push-7 {
            left: 58.33333333%;
        }

        .col-sm-push-6 {
            left: 50%;
        }

        .col-sm-push-5 {
            left: 41.66666667%;
        }

        .col-sm-push-4 {
            left: 33.33333333%;
        }

        .col-sm-push-3 {
            left: 25%;
        }

        .col-sm-push-2 {
            left: 16.66666667%;
        }

        .col-sm-push-1 {
            left: 8.33333333%;
        }

        .col-sm-push-0 {
            left: auto;
        }

        .col-sm-offset-12 {
            margin-left: 100%;
        }

        .col-sm-offset-11 {
            margin-left: 91.66666667%;
        }

        .col-sm-offset-10 {
            margin-left: 83.33333333%;
        }

        .col-sm-offset-9 {
            margin-left: 75%;
        }

        .col-sm-offset-8 {
            margin-left: 66.66666667%;
        }

        .col-sm-offset-7 {
            margin-left: 58.33333333%;
        }

        .col-sm-offset-6 {
            margin-left: 50%;
        }

        .col-sm-offset-5 {
            margin-left: 41.66666667%;
        }

        .col-sm-offset-4 {
            margin-left: 33.33333333%;
        }

        .col-sm-offset-3 {
            margin-left: 25%;
        }

        .col-sm-offset-2 {
            margin-left: 16.66666667%;
        }

        .col-sm-offset-1 {
            margin-left: 8.33333333%;
        }

        .col-sm-offset-0 {
            margin-left: 0%;
        }

        .visible-xs {
            display: none !important;
        }

        .hidden-xs {
            display: block !important;
        }

        table.hidden-xs {
            display: table;
        }

        tr.hidden-xs {
            display: table-row !important;
        }

        th.hidden-xs,
        td.hidden-xs {
            display: table-cell !important;
        }

        .hidden-xs.hidden-print {
            display: none !important;
        }

        .hidden-sm {
            display: none !important;
        }

        .visible-sm {
            display: block !important;
        }

        table.visible-sm {
            display: table;
        }

        tr.visible-sm {
            display: table-row !important;
        }

        th.visible-sm,
        td.visible-sm {
            display: table-cell !important;
        }
    }
</style>

<body>
    <div class="wrapper">
        <div class="container">
            <header class="header-box">
                <div class="page-header">
                    <h2>Artikel Inventory Handphone Terlengkap Sejagat Raya</h2>
                    <p class="lead">Lihatlah artikel terkini seputar Smartphone dan teknologi terkini hingga informasi terkait produk kami</p>
                    <a href="#" class="label label-primary view-all">Lihat Semua</a>
                </div>
            </header>
            <!-- CARD STYLE NEWS -->
            <div class="row post-card">
                @foreach ($articles as $article)
                    <article class="col-sm-5bx">
                        <a class="thumbnail" href="#">
                            <div class="placeholder"
                                style="background: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFRQXFxcXFxcXGhcZGBcYGRgZGhcYGhcZGRcaISwjGhwoHRcXJDckKS0vMjQyGSI4PTgxPCwxMi8BCwsLDw4PHRERHS8oIik6MTMyMTMxMTEvMTExMzEvMTo6MS8xMTExMTMxLzExMTExMTEvMTMxMTExMTExMTExMf/AABEIAJ8BPgMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAEAQIDBQYHAAj/xABJEAACAQIEAgYFBgwFAwUBAAABAhEAAwQSITEFQQYTIlFhcTKBkaGxBxRScsHRIzNCU2KCkqKywtLwFUNzk+Fjg7MkNERUo3T/xAAaAQACAwEBAAAAAAAAAAAAAAABBAACAwUG/8QALhEAAgIBBAAGAgEDBQEAAAAAAAECEQMEEiExBRMiQVFhcYGhMkKRI1KxweEU/9oADAMBAAIRAxEAPwDI5lpDFVtskiZp8msywXpSqIoO0GLADUkgAd5JgCi7tsLo1y0D3ZifgDRISZhTWYUMQv523+//AE0itbG963/+n9FSiErxTrZodntfnrfsuf0U0Yi1+fT9m5/TUoJYK4768HFAfOLPO+PVbc/ECm3L9r8i8G8GR0Pq3B9tCiFwHFQX/CgLdw09nNQFDmJFTYdu+hzcpnW0QluHWKabgqpN01LZJIqAD1cEUNeFeAptx6FhobaSp7SDNQYuRSrdNEhb5hTusWq0MaZqedAhaStQvHfQfaFMcnvqEDSKVXAoRGNRu9QhY5x30xmFV2Y1Ou29QhNI5VOj+NANpSdYahC0N0Utu8tUWJxgtjtTJ5UJ/i69x/v10UgNmse4KAveFUv+Mr3GlXjC/wBz91SmS0WefWi7LgVQniy+H739NJ/iid4/e/pqUSzRPfWorl+qNeIIT6QHt+6jlcSVnUbiahAy44IoC6utS5oqC49QNESKynwopBNNNKblAJFetZ7tq1Mda6JI5Z3Ck+oV0LC8NsKjWWspl07DKuvjJEk6TMzXOWci9ZYbi4hH7Qrq2BwYxeQ5spiCQN4kkN7KPm+UlJq0+Puy8IbrRj+LdCUJLYRgrRPUO0z39XcPwb2isXiQ9tylxGR10KsCCPUa7PiOHtYcL1hdSfytSpgQQY9GC0g+Ed1BcT4RaxluLoEoTkcaXFAbLGadVJO2vf5NQjHLDdDgq8Uk6OOM9QtWww3RhVxoS8tz5uVuOrKRNxUUnIHAgHNodJjXmDR3E+D4Hq7qpbZbq2Xuoyu7KptjNkcMSCGAbaIisJtQltfZhKcYy2vsxOCvKjqzW1uAHVGJCsIIgxr4+qp7ri7lFu0qFUUMQxhiJzXGLejM66wI853HQDophcVh2uXlLOHYRmZQFXKNAhHfVR8oPA7OEvItkEKytIzMwlWAkZtedYrNFz2Uzd4mo7iqwL9geEj2Gps1CYAHIPM0ai95yjmx5CdT41cqRs1NmrI9UE6xbOIuWxu8qo88qoSB4nSg/wDFsL+Yc+d0/YtGiPggqe0TXv8AFsNywx/3bn2U48asj/4o/wBy7/VUoFolWmPUR4/a/wDrL+3d/rr3+OWyNMKmnPNe5+PWVNpLFZKaiU2zjUuNAQoY9EsWHqJAI8jPnRQSg+AnlHKpbaRyb9lvuqptYe7cvE2zqpyyWCgEA6AncwCdKMOFxESb2nZ161wO0CV9oU+ytY4pNXTK2w5hP5Lfst91N6v9F/2G+6gBYvfn1/3z99TrgsSYi4D4/OBr7Wq//wA8/wDayvmfYSyfot+w/wB1Qthj9Fv2H+6pV4Fjz2gTEZvx6bTEiX1oPEdGMcx1Qnfe9aPeT+X3A+yh5EvhlXnj8omNkgbEeYI+NeFuhLnAMbaBcowC6krcVjESeyrExHhUnDL5a3rrBI/v21nODiXhkUumn+B7g14LRBE1A9Zlyn4gFN0ByQsCSBJGh2HnFVwWjeJ/jD5D4UJFax6BQmSnAEbE0teAohoVEzMAzQCQCxBOUTqYGpjwqZcIhIHWqNNyCIMn2iBv4ioYpYqUHaib5isiLqGfPTUjXTTafI0/CsRcUEzJOvf2e/1VAoqWz+MX1/ChJcEcaRdk1CabmJrxFZgLRbYqQWBVel40QuKqFQbiFoLds7AF0nyzCug8LxD4cyArhnWZfJlIntLAOYHu0+yub8XfObev5QGm+/8AzXSui2FV1c3c8IEAjSc2YGZHh76yypySh2n7DWFVGUvgfxfiju6gKoBYyQxIMg8yBABj3xQVy+EzqmL6sXWGa0ULNa7YYhCAY1A8O1PjVh0h4XaCpct5g0sdW0IjUERtTxYwI6p71tnuG1bfMbjCcyaSqnLtpOtO6S4tQxrrtdmWXUeXHc3SYbwWyi21tPluqmYSwn0gwO+s5WYT4nasV0oxCYQXrWRUuXbbqtzJduZrbTItszQpMBSSCRPPc6npPiPm+Hu3bOmVEdM3ajOFImd4zH/msJxJr2Lf5rcvljbvpazOtrLmuFkDrkQMvaXVZMg+FTJKORt+5hOKbUn+QTo10mOFtFFuESxbL1RaCYGji4siADBFBdJ+M/OnR+sLlQywbfVgCRBHbYsT7oFW3Aej0peFy2guW7rIwugtEIsBQCNJMzzBFVnSvAJaa3lVFLB5yAqsBly6E7waw8mKlvrk1eSTjtb4JOAIpta/Sb7KdxlYVANmcKT4EGRTejy/g2+ufgtO4yBlt/6i0PcEe0aTheINqACpE6NCnwyzrA++huJ8Ds4gFwBbuSZdVCgnft2xofMQfOtP0HSxluC4yrqCGOUTtzYeJpnSa9aF60LWV8wZScoGgYeQ03nxrKGR3TGcmoxyy+Tt/d/Xwco4pwu5h2y3ABOquDKOO9W5+W4mhOqNfVRw6zkyjJB7MDLEgZYiIg7VzPo1w25Yt4u5hofMbeRlEuFBuZ7ZA1BGnhsfCmqfsLqFvul8/ByM4c86OwZxFsE2zcVTkYlFbKcjZkYkCDlOoNb/AOVHEO+Cwz3UyObrqA3p5MknXmJy7aTVjc4vxDrptN+BDoEUG1k6qUkwdfRz676LHOhG2uVRnw+jk+Gcm4hJ1ka1p0SazmIYHF3CsZTeciNozmIq+W4arJFk6Ky5p/uXT65ifYIryEeVOCkoD/1H97E1LbXvr1GiwwlijfdCWXUuDpC27IO29WmESd+ZnQQB4RyqDC2DPr5VocNwuFzgEmJjv8q2nFQ4Yhm1Dnaj2LbcqI8IryXW7zz5nnvz8/bS5IEwR4ePjUROtUcIyXBxpOXuSm6Rz5j21nuGYdZugCAL9wAdwBECr1bRJHiaocDdym6P+vc+NcfxCNJHY8H7kvwHnCimNgxSjEUhxFcmju2ZDjaRecd2X+BaCijeMmb7nxX+BaGUVqugoaEokYK4Mk23/Ceh2W7eoHY07W427xTVrQcNaVtZszEjGxlPbJ6i2qqhM9qBA0Md3KiW6KK7hHUkMjKVIBBUiCRImdpFR9XVlxMFerANwK1pWFt2koM9wBdgCNCw0Gj0GBULJEWWp+HqDeSdu1/CajYVNwz8cvk3wNB9Al0Xr21iq27M1aXIiq+5qazMyEvSqTRK2xTxboWGiuxzGE8HB94+6uj8F4x1ecMFhgJzAxIOmq+Z7q53xkQq+Z+K1u+hGHtXFvXLoLi2iHJmKiWfLJIrOeKU3Fx7Nsc1CDcuvcL6RcTe5bBtAfg5IVAQZlde16WmYRzmjsBxFCi9ZZsvCqFLWlZsn5Kk5hsDHqNTcawVgWWKW1tNbuIjQ5ZSHQmJJjkNqk4Zw1erRl6pGFtWZriybhaSdCdFEAbE6VeGPNucbqXz9Mkp4Z41Krj/ANoD4zf622yvbDq5W26L2cqRErGwECgbnDMLh7lm4/WsA4yM9wkW3A7LOJ12GusUbj76jEJbANproRVYA9XmZRMNsBuQDyo/jvAEt4dwxa5cKXAHuy6gkDTJMCApM8td9KpplLHJqXzy/ls2nDHkinF8vpFT0xBtIcUmcLKrdW2Lep0VHJdTsAEJHLL3VyvjHEDeuBszsoWBnySJ9L8WoG/hyrq/BOJKtu1bxILzbysF7WY5oWe8QPdWK+UO9Ze5bNlMigOIIAbTJo0dxze2urkwSUd3sclZ1v2AfRuOqaT+Wf4VpvHgAikfnB8NKE4S5FsgfSPwFScUB6mT+dH8J+6kK5GolzgMUVzAoW8mddY/RMe2nX7pJt3GQqFbKwzM06DXtnyq96E9QGuG+iuIEAgNrI1yk+B9tRdO+pzIbCi2uUgqqqBMzJUeY9lWjgx+VuXf8DKzxWpcZQV+z97oZxnj93qwyB2t5WDuLuIyAroBKuF5nTnpvUnRnFvcQhLcgqq3AmZQ0kLmzAgoTpEHceFaPDdLcAMAqh10s5DhozOSEgoE5g6ido12rPdCyEttN+3aztbyi4Qqnqi8gOd2Lw2XSQIEamtMcdsaKyyy9TUf0ZXpzwzEWrwN1SEIItsS509LK2ZmyuAdY0MSKGsHEi2qCxaICgSyqWIjnLb+rnXSulL2sdbOHS5adlYFXS4jssghHJXYSQI7iaXD8YwqYYWLttSyAjXRkO2oiQQdNN4rTBFS5mv5oQzzlBKve/Zs43hFIuqDuGA9hitKHrP5wcQWXUG4xB8C5j3VdAyaXnSbo2jyuRMIs2j/AKrD+I0VasTy9VMwC/grmm18j91qIW9lEmPKvTaPJFYopnF1Cm5vag/B28rQdIPh/Zra4a6WVdgMm6gaduPVoIrn9jFnyWeWhM8ie6tXwcsULdpDlyqcxynUzB5QQZBo6lqSv4EViyb7QZjMGznJnBJMiREnc7b0JiOFZNc3989aMUFzmkkqPWp/K+FLibkqeeh9Ub1jCclSTNHhx5McpdMrLdjtDun3VjMKwzXf9a5/FWy4fiZYLuIPwNYzBam5P51/jSfidpKzXwVNSkn9BJcU5INeazNItkiuNZ6GjM8Zjr7kfo/wLQk0RxMfhn8x/CKGraPRZIcGo7D2Dl6xnyIpMEQXkFQSiZl5susigKteE8Se0HClIjOQ7ssxAhYYSxnbcx4VYj6BserLcdXYuwOrEkltAQTm12jeoBcpHcsSxMkkkk95MmkAqUXSHF5ojD2yLiH6SsR5AuuvrU0OBVhbXt2f9In/APW599CXQMnQWSa8DSMhppBrEzHLep4vVXB6XOalEJOLtKjwn7Kv+jXGfm5uEwVuIFZTbF1XAaRKlliDsZ76zGM9A1sOguGtXbzKyC4RbkKVkTIkxJnSam/Ym6C5qMG5LgOx/HFvWurYKilg/VrZVA5EgFsrE7E+3nvVhw/jbrbVCeygAQG2pygEkgkqSR8KO6Z8Ht2MMHt2lS4WQHqlVWmRnGYcjPup3Ru2psIzoM0HNIDMTmaBJHhS+bUSj61312O6ZYs2NqqS9gJ8dnudY7FzoZAymQIC9kQANIkcqH4lxy5cXqz1hEQfwqDQ6QStuANuYpOk9xgbiqmUG3JyggiQRoeXnFVvFOD4e1hLdy2zm7byPGe31p66HX5xbA0VcuUAEzm1yzTXh2Het8u2+L5KaqW2Sil/guOCYa1k/CILp7yM2vPL3+e3Kst8o2CC3LV1LRtK6smTsxmRtGGUkDMpH7NaXoPxDN1jYgkqWEcgIXYBd6Z8oTW7uHuC2D+DZLq77KwtuddhFz3Vtl1OR5HifP7Mp6WKh5iVfownA0m231vsFP40v4KeQcfbUHCHhG+t9gqTijzZb6yH3n76wrkxTNL0e4ddvS1sLNuNWyxqDpDAzOvLlRPHuD30DG4FIaMuSN1iZgCNOQEaVbfJhxW1aW6lwkF8hWEZpyh82iieYqy6ZcYt3eqS2XlWYmbbqBmWFBzwd/ClFGvUpfo6Tm3OtvHyUuD6B482wpu2gpBGTMTE7qSEOu/P11lH4gbFt7ZlbquQpWJV1ftGeUEXFMfS8a7RZ6R2gVUrdzNrHVvpOsFjp748q49xLDM2KZbRtNce5duAHI2Q5maCSCA8DbvWuhCaFPW07RPwDF9bfzt1hbqlDs25EBpEHbMpjz86u+O8Av4i4j27921KWFcDPlY3GZSwAcBWVQGYbZY1zHLVRbw16zbe5dcLNpBbRGhZuQQrgaZAqns+BrecNxRu2lcDXJMSJJEiBJ5ke+mdm6PPArnllUVtjZw42Dbvm2SCbdwoSJAOVssgEA8uYrRWgM0ms/fv9ZiXuEZc913yndczloPlMVfzNJyDHrk9gFJw92P/ALP8rVIlggjsZtQSpmDHlVh0etD5tcJE/wDqDoBJ0U+yirV9JkLsdfur0OjiniTOLrdRPHNqKA0wjM05Y1kASAPbWj4XcIBRnBI5ZRJkzoSNRJP3VVjGLnlicp+jBI9RjTSj8ZxlZGRmHZA0VQDvJPedq0yJz9NCeLNNO2EXr5tSp58++ZPr86rXvNrrI10qbFXhcGYTJPcBvvzPdQd1uZ592nurXHGl1yK5JtyqybD3IYTuA3q7J0rJ8PuAdZ43HPvrQ2H7e+wb4H/msrh20b67/GuZ4p1E63hUdrl+i4XEClOIqsipFaK4jR3NxScTabrnx+wUNU2NP4RvP7qiito9FkTYZLZaLjMqwdVXMZ5dmRPtqzsYi3aDC3iJBhofDowJ/WLRpVPTgKsWqwq/Yt5Sy3gzb5cjLqW2102108qGivClirF0hBVnaMPb/wBAe92P21Wii1cM4j8m2inzG/vqk+iuRcFkbgphocIakDRWZiGGwp5CozhF7qJC07L5D11Q95PRYJf1RRVcSw0W2IOwn3gfbR3BxctOHGdAVglCkwRp6QYbxypvEFBtsJB0/mWtZ0BxSG65NvrDbw7uqkAyy5BoO/U+2g3J+mPv2eV8UwYsWVxS9NLgFv44uoBNzcE53Qjb9FBUfC8Q9vMpZ3UsWHbZYJkwIBkeHhW16QXVu4C5mTtoLTFhaKQzOoYJIGurDTvrOdG7tlTkYS3pDMM25yiCCMo0jzms46dQty7ftRhp5RUU4Lj6B7NnrO00kEkjMZPON9hViltIgWUEECQrFh+kZaD4+dDBCjsoSACzdrVjJJBO8kz8K0mN4vh3sOQ9uerXKkQ6uMukAaj05M8+fIYdNLJuuTXNUuiur1LxSSSXVlY+LgBVAcxzAgDme4U/jFk3cJdELmFq8kCOdskDTY5ltmqOwxZ2uPBAy6GFDLBzASQI207h4Vd4C+LnW6Dt25WIMgK3MGOa7d/lTelh5a2rkxyycuTl3BADbb632CnYsTZu+Bt+9iKF4SxCGO8fAUZifxF3/tn98D7aq+yiLzo9hHuGEmRGigkmfLYaVbcUwr2j2wQVYbg6gMNu8aHWqzoxea2wdXQEEEZmiCBoY5jXvq44k7XZuO6OxyzlOpIAEkbbb0HHT+Vb7/d3Z3lL0VS6/di4ngKXVNzrWXIUWVAmeRUkGI7M6j8nvqDhnR1L2LCKcvVopEZQT2AQXMGZl9fCKeeIXraBRiFVVUjIDcgKwJaYQjNBbf6K69yXeK2kdLtm8mbL1bmXByKCQ3ZEyO16mNaalwUYrF/BxtLHPvk8r4+/kd0x6PnD27eUFyzKMkzAVXAywBqJjWRFbKxgUsW8OFtXLhuBQSkBUZgpMgL2Rude461iMRxZ7/ZLBz1T3EYZzDjMjgZxyPcK0PBemruipFtcgy+ix9E5V7WcanTlpNXxKeymb5FymuV/g5n0u4eLHEb1sbdbmX6rw/xYj1VIjVbfKPZnF2Lu5uIJI2JW4ZP7wqlArOa5FGqYVwrEZLVydjiOUfQajhxFO+RyBA3E84qgM9Q//wDRP7rUK18xoK7+kd44nOz41N0aZ2AhjJBGg+yajF8kD2A7bafD41U4TEswgtM6Rp5Dfbc1ZcNw8kltgNjzPlTqixDLijAucNcAT2fChb2IioblzxqB276keXwIxx+qwzCmW35N/Aaz2BTsn6zfGrTCXO1+q/8ACar8A4CfrN8a5XinSOx4fGpP9EjJXhbohWmo8pmuMdUz+JE3HH6RpmQ91TXR+Fb6xomKuujSPQBlpQKPy17IO6rJmiAa9RhsimmwKsi6B13ojBfjH9nwpj2Y1p2D3c+VVydFMvQc5qMxTd6U2qyFyRsUe+o2xPe1XtrgNobhm8yaNt8PtLsij1VzJa6HtbH8njeV9GWFyQ2/onXWN1O9F8MxT2nW5bdkYAaqxU7aiRyNW/GrY6loER3DwNDdEMP1mItLAOhIBEiQpI0O+tPaTKsi3S4Qr5stRJSl2E8Q45evgKz3CAZINy4yzy9MnUeHfRnD8BfuLKYcXI0zrbdjtzZnifCOdXfSexktBWAU5gVMLmjtTtzgCYhZ2qTgSXruFtdRcCKj3xcQ3erYlo6tiQCY1mm5tUnHoaWOmo7q/wCDOY6zft5Vu4Y240lV9KdO0onf171Zs2JVADYOVRrpbDEDUbanbw570VxXF3LL4dLlxbxVMtxlbPDG4zKc3OFIFWfEOLoBlLRI0AiTtsNzy+FDHhWRvcv57E9RlnjdKmvkx6cVusCqDJmaezuO9mJmDAIrS8CxDujM7khVuwDtAQfd76zmFfMpHV5OyzSFIzwYBM7CfeDV8rdXgb7xBXDXP2ihVfeB7abw7Y4ZUqK5e0cz4DYZlYgE6jYE/kijcXhmFm7KkSqxII16xa0fyUgdXfBH+Zb/AIDVx0+A+a6D8ofEVzHL1URLiyv6BcJt3Bca6rMLa28qhioJckSSNdIHtrQcf4VbSyGt28jB8hhiwIyZpE7H76yXRHjbWXKjLFwBWDKGBA1GhI1B8edavG8Qa6oUwFBzZQip2tp0JnSlctRfJ1canPldfkqcF0YvXrSP1twK4LAKtoKNY5iT694oDo7wu0ttrly2lwkKAjAEDONTB02LKJ0k84qW7graqSetJ1MC66pPgJ0k8qrjjBbOftKMuXKhX9UDMCMsr3cqaxO6roXyQklKy1xRW3bW4ltEyXFDIqhFC5n1YADXY+QO+lXRZ7BW1h8FbKKlnKxwz3GuZ0XOxuroCO81i8fjCwthSxQgtBZSpkZSsKi67jWd60fR7jl7LbtB2hYAJdhKeA2BAG36Ptaq1wwYZy/uV0uEwf5ScOA+HIEZbt1AOQBe3oKzIwL/AEW/ZNaTp6/ZwnObjt3k62tSee9bgqO73VhldSFZLlnFbVvsup0/DkfuPUb4FZ9L4VruCcQtWcXizc7Oa9dVHy5shzsToNRIESK1g6T4I73B67b/ANNdfFmlDHFV7CLjcnycmt4VQZDVbm0FVWzA5p56iDsfOugnj+BP+Zb9dtvtWvDi2AP5dj1oPtWtFrJfBlkwKS5ZzsQSJOnOiMTbTICrS3dpt99bs4zAH8vCesW9vHSvK+AbngyPO1WkdZX9rFXpHaakjmuGnP8Aqv8AwmoOH4RmQEKxGuwJ5mt30htYEW2NrqRd16vqiJIy9vOF0j0t/CiOgKD5lb0Hp3P4zSPiGbfGMq+R3Sw2ya/BiepcfkN+yaabNz6DfsmuuZB3D2V7IO4eyuTvH6OU9FrGFN+8MSLeeVyC62RI/wAzWQM/o7+PjW1/wDhr+iLR+peP2PXMuN/+8v8A+rc+JqKPCmYvhFlB/J05+heDb0RcH1bk/EGh36B2OVy6PWh/krnaORsSPLSp7ePur6N26PK44+2rWHZL5Npd6B2+WIcedsN8CKFfoIeWKT122X+Y1n049il2xF31uW+M1OnSrGj/AOQx80tN8VqWg1Ne4bj+hl60jNntuFXMygsGyD0iARrGvOs3gcMzZ8qkwy7An8nw9dXV7pVirqm29xcr9liEQMVO6yBoDVt8nS/+4Pjb+DVTK6XBWW6uTM/Mbn0H/ZP3Uhwl36D/ALLfdXXCBTSB4eyl95XaZp0sp6dz3gUlvFWv8u2znvVC3vitJY4Rh09G2k98SfaaNVVGwApSOGKKrGkYTpGbrYZy1k20EakiZ1gQKyuAv5CjAAwOYkbRXSemag4K74AH31hejnCevI1/RAECTEmSeUU5gSSZZKh+IxpuAgrbE81QBvadRO2kUVw7EMtvTLE6dkEiO4kHlV1e6KqgYtrl3GZp030gUTw7gFoobhYIucqAS7EkAEmJ21FNxSlH0uzaOWG1yTVe5Tp1jsHBhpgECDOgERz1A9dEJiLt1RbZ3DadoO5YMpPIbzvE86vLvC7dvIUIZXEgjMIIImQToZirnD8CCJ1gVRpm0ABIAmfZS2oUk+O+19FpZcceX0zNPhphfSKwrMTJJA0VjOp5+FQdNr3VcNKzDXXt2x4gHO3uT31t8Dg0eZGgGbQCSfX66z3TnhKfNczKwOfLlZlaJQkMCBo2nKmcU/8ASURfI90rMt8lTdjEfXt/wtV308E4U+DLVH8lR0xHnaPuetB04H/o30/KX40pL+sK6Mv0OtBrhm2LnY0nQL3sWgxHfWtu4AW06xbgdGKovLXKxcQdRBX2Gaw/AsTkMZZLAa53XTfL2TqCQKsb2KOcrkA2YNmukid4BcjeRttVcuxxaffsN6TFkjk81Ph8P/wucUm3Z74Bg7g6g+E1RcQC6l58ssaxA1nUD1VprV0ta1AaIBEb9xHdWa40qgHs3FMGOYOhMiRtCt7DQ0rtDOq4TKOxcgFZImCO6RyI8fsFanh2HJAYDeOzyM7j2iayeGAJ13kfGt7wD8Ws6kkwPCdPLanJy2tUDSqscmym6fP+EwqfRTMf17gH8ldFrlHTHFdZjW7rZt2x+qBm/eLV1QrS+V8nNu5NnJOJfj73jiLp/eeoCtWlq1bfG3Fuej1t8xMSesMbeuvcYwqJcRVIAIGaDIGsT4aT7Kfjm4jD6RzZZoxyuFO+yppypoTI0jSdTPcOdXnG+H2raZrYgggDt5s076cqsuB8Cs3UtK1ssbqF2u53EdtlOQA5RlgTIOu8Ait5PylbLYprMrXH5Ma50qAmK0/RPg1q/wBc10O4tdWAlswWzsyltBJjLt40L0j4Nbs4wWEZsjC2RmgsucbE+HwIrSGX1UVniTKbBNNzzUj3RXSOgY/9Fb+td/8AI1Y3HcISw1u4jMczhYaOcGtl0FA+ZW/rXf8AyNS3iMm4o00yW50aKvGk0pIFckeo41dwvW4+6kxmvXdd4hm5VNxXhhskdrMDI1EGRHu1oW9dy4260sALt2SoBMS2wOhoniuONwrNw3AAYlMkT4SZ86aSfBhKObzk4v0+6FwPCHuo1xSgCnL2miTEwKCaUYjYjMDsdxB38KtuFYopbyrctdppyPIKnYalSuo1qsxaFrjAspLHcEFe1+l66ZkoKCrstiebzJKVbfYsMV0ZxVu11r2iEABOqkqDGrKDI3HlNVCqSYAk9w1NdAx/SHPZvAYe71t23kYh7bWh2ACy5WkiJO1Yjh13LcVgCYnYSdu6qRSckm+DVTltbaIRbZWAZSPMEfGtj8nXo3z+mg/dNUvHMelwplBBEzII5DTXyq5+T1wLd6ed0e5f+az1MVFtJ2CM3OKbVGzmkJ8ab1q0mcd1JWWCc9NNykOF8aQ4X9KhRCq6Ty2FuqN8h91ZLofigo0OoM+MFYmt7ewJIIGs8qxGL6E4jrCbICqTIDOojyidK0xtK0/crNbk0ajF8VFxCCn4Q7vJhhEaqdAdtabhcXbFrIzMjhmKsoVhDKoIhiIOh18ay6dBcYfSuWh5ux+C0WnQPEHfE2x5Bz91M4ckMX9JljwxhFxptM0Yxdoi2lt9EB1ZlzMxMkwCY2qysYp3t5BfHV6pooJIBylc0+IFZC18n10b4yPqo/8AXRQ+TxD6eKuH1L9pNUy5IzlfJtOMJQUa6+zV3eIrbtuxKlAhzS2XRdTqCDy5b1hOlHTdcRbNtFUDMX7KsJYgiWJ8zyq0T5N8Nzu3T67Q/kohOgmDXfrG87n3AUZZVVJFNpSfJ/hmtWncg/hWBH1VBg+slqtOl19mwrgjuNX9rh1pBCzHixPvJqs6T4XPhboXU5ZA56a6eyl7uVl/Yz/RTgQuhWnUgZRMbKPaZ+FXt7gttSHIDHQflDvjn51W9Ers4dMjdpTr4HT36Vbvj0cjtWwRIOQ+kZ3IkifKKWm22xqMtQs0YwXo4votcBwTNblQII27/ASdarsP0ds37uRkQAAtOQE6EaCdt6MwmOuBClu6oXU+iCRO8EnSq4cetWH1uAkoVIBYEg7kMo0Olb6Zrctt/ZVPO5y8z7rr5CMV0as27fWJbIIZRDpa1BGhGXapilm2FBVj2ULlSFAzAkAQPP30Djul9m4mSUQFlJ1JJI7ImduXsqt4p0nsL1eZbd1lXQqWYaaDOFcCYHurpRcE/V0TO8ywpRkk7+fYznTXDJbxPY2LTPM6qQTHOG1NdUBHcffXJ7998dig2WBmzMYgASCdOWwAE10dMUfpUnlavgVicv4jcy4u6YB/C39GAYfjG5Gl62WDZE00yheyd91nX/gU/jds28VdDrKXHa4rTB7ephtRvoQe6o7WJRZyhxIgw67cx6FMwlFpcmW3kfcxYKx1aeBBfTTkC0U+xxFkTIFbLrmAuXUDT9IIwB7tRQ+e33P+0v3U5b6BSozw2+in7RWqyKqbK7a6R7BcQNoyucN9NLly20adk5DqPvofFYsPc6xg5Myxa6zsx5HOde72V5xb+k/7C/1U1mTLlzmJJnqhOoA3DTGlRTSd2RqxXxavctgC4CHWM1zOInuyjXbWukdBCPmVrzuf+V65cGto2YMXYaqMuUBuRYzqBvA38K6b0QtsuDtAkgkM0eDOxHuIrDVZNyVlsUFF8Gm07v79lJmA5VAs/TPupWB+mf79dJDBxLiAy4m9m0/C3d/rmnIyENJM6ZQIjxzGdBtW76Q9DWxFw3EuW1Y+lKt2vEwTr41QXegGKHom03/cI+K0xHIqBuaKGni0MpbMJB9HTXUeM8zy5Gj7vQ3Gr/kk/VuWj/NQd3gGLTexe9SM38E1fzEHf9A8U9VdQHEgSVDAwZAB5ajcVC+Gur6SXF+sjr/EKh64jSR5afCpuRNyDTfdyMzs0TGZiY05T5Ctf0AX8FdMf5v8i1hUuMfhpvJ00rovRLAvZsQ2jOxcjukAAHxge+s8j4A3fRolju/v2U6fD+/ZUKz3mndrxrAJYA+HxpwPh8a8P71pwapRBQaeo8KYG8Kej+FGgWPyeFOUUuelVqtEh6Keq0hanBqL7IeVKZdtCKeGpXap7EAfm3jUNzAE7MPWKOzV7N4VSiWYq90DYuzpeFvMdQiuP5qYnyejniW9Sn+ut2jf3/YpxNS2WsxK/J3a/KvXD6h99SJ8nuGG73T61+6totIDrtRVgZkl6CYQbi4fNl/pqZehODH+Wx/XP2RWoY001amDgpcJ0fw1r0LUfrufcWo/5sn0BU7nwpk+AqjQSsxnAMNd/GWgf1nH8JFBnoVgfzLf7t37Xq+B8BT83gKsm0VZmm6D4P8AN3B/3WPxqNugmE/6o/XX7VrUE+Ar0+A9lHcyUjIv0Aw52uXR67X9FRN8ntnleu+y2fgorZ+z2CvZ/wC4qbn8g2oxVr5PbSsG612gzBRCD51qLWACgCSY8h7qMLGvBzQfPYVwQfN/7mlFqpusNNNw1Wg2Qm3S5fE1IHNeLGpRLI9e+kk1JJrxY1KCQmf7mobuGVvSRG81U/EUUxNMJPfUoBWnguHJn5vanvFtAfcKKTDBRCqAO4AVOSe+kz+dRhIynhTCpqUnzphPnQoFn//Z') no-repeat;">
                                <img src="data:image/jpeg;base64,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">
                            </div>
                            <div class="caption">
                                <h4 class="caption-heading">{{ $article->title }}</h4>
                                <p>{{$article->description}}</p>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div><!-- /.news-card -->
        </div><!-- /.container -->


        <footer class="site-info">
            <p>&copy; 2022 NYOMA</p>
            <small>
                Image credits:
                <a href="http://www.google.com/">Google</a>
                <small>
        </footer>


    </div>

</body>

</html>
