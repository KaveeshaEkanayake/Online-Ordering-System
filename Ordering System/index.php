<?php include('components/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Srimaas Lanka Food Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      .navbar {
            position: -webkit-sticky;
            position: sticky; 
            top: 0; 
            width: 100%;
            z-index: 1000; 
            background-color: rgba(0, 0, 0, 0.8); 
            color: white; 
            text-align: center; 
      }
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.55;
            color: rgb(60, 58, 71);
        }
        h1 {
            font-size: 3.25rem;
            font-weight: 700;
            letter-spacing: -2px;
        }
        h2 {
            font-size: 1.75rem;
            font-weight: 300;
            letter-spacing: -1px;
            color: rgba(60, 58, 71, .8);
        }
        h3 {
            font-size: 2.4rem;
            font-weight: 700;
            letter-spacing: -2px;
            margin-bottom: 2rem;
        }
        .dark p,
        li {
            color: rgb(255, 255, 255);
        }
        h4 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        p {
            margin-bottom: 1rem;
        }
        p.section-intro {
            font-weight: 200;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .dark p.section-intro {
            color: rgba(255, 255, 255, .8);
        }
        p.large {
            font-size: 1.75rem;
            font-weight: 200;
            letter-spacing: -1px;
        }
        a {
            font-weight: 700;
            text-decoration: none;
            color: rgb(255, 255, 255);
        }
        /* a:hover {
            color: rgb(60, 58, 71);
        } */
        .container {
            width: 85%;
            margin: 0 auto;
        }
        #home {
            background-image: url('images/spices background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            
        }
        .btn-login {
            padding: 8px 28px;
            border: 2px solid rgb(255, 255, 255);
            background:transparent;
            border-radius: 16px;
            font-weight: 700;
            color:white;
            cursor: pointer;
            
            
        }
        .btn-login:active{
            transform: scale(0.98);
        }
        .btn-login:hover  {
            color:white;
            background-color:black;
        }
        #products {
            background-color: #EFF0EA;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3.5rem;
            margin-bottom: 3.5rem;
        }
        img {
            max-width: 100%;
        }
        .gallery div {
            text-align: start;
            margin-top: auto;
            margin-bottom: auto;
        }
        .gallery img {
            margin-bottom: 1.3rem;
        }
        .dark {
            background-color: rgb(60, 58, 71);
            height: 350px;
        }
        .social-icons {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 3.5rem;
            margin-top: 5rem;
        }
        .social-icons img {
            padding: 10px;
        }
        #home {
          margin-top:-70px;

        }
    </style>
</head>
<body>
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt-5">
                    <h1 class="text-white mt-5">Savor the Essence: Explore Our Organic Dehydrated Selection</h1>
                    <p class="text-white">"Experience the vibrant flavors of nature with our premium collection 
                      of organic dehydrated foods, meticulously crafted to bring wholesome goodness to your table."</p>
                    <a href= "login.php" class="btn-login">LOGIN</a>
                </div>
                <div class="col-md-5 align-self-end">
                    
                </div>
            </div>
        </div>
    </section>
    
    <section id="products">
        <div class="container">
            <header class="sub">
                <h3>Our Best Selling Products</h3>
            </header>
            <div class="gallery">
                <div class="col-md-4">
                    <img src="images/chilli powder.webp" alt="Chilli Powder">
                    <h4>Chilli Powder</h4>
                    <p>rs150.00</p>
                </div>
                <div class="col-md-4">
                    <img src="images/jackfruit.webp" alt="Dehydrated Jackfruit">
                    <h4>Dehydrated Jackfruit</h4>
                    <p>rs.250.00</p>
                </div>
                <div class="col-md-4">
                    <img src="images/moringa.webp" alt="Moringa Powder">
                    <h4>Moringa Powder</h4>
                    <p>rs100.00</p>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <header class="sub">
                <h3>ABOUT US</h3>
            </header>
            <p class="para">At Srimaas Lanka Food Product Company, we're passionate about harnessing the pure essence of nature to create a range of organic dehydrated foods, spices, jams, powders, and more. With a deep-rooted commitment to sustainability and quality, we carefully source the finest organic ingredients, ensuring each product maintains its natural goodness and flavor. Our dedication to preserving the integrity of nature's bounty drives us to employ dehydration techniques that retain maximum nutrients while enhancing taste and texture. From vibrant fruits and vegetables to aromatic herbs and spices, each item in our collection is meticulously crafted to deliver unparalleled freshness and nutritional value. Whether you're seeking wholesome snacks, robust seasonings, or artisanal preserves, our products are a celebration of purity and taste, reflecting our unwavering dedication to promoting a healthier, more sustainable lifestyle.</p>
        </div>
    </section>
    <section id="contact" class="dark"> 
        <div class="container">
            <header class="sub">
                <p class="section-intro">Contact US</p>
                <p class="large">185, Kotuwegedara, Matale.</p>
            </header>
            <ul class="social-icons">
                <li>
                    <a href="https://api.whatsapp.com/"><img src="images/whatsapp-logo.png" alt="Whatsapp">+94771096279</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/"><img src="images/fb-icon.png" alt="Facebook">Srimaas Lanka products</a>
                </li>
                <li>
                    <a href="mailto:srimaasproducts@gmail.com"><img src="images/email-logo.png" alt="">srimaasproducts@gmail.com</a>
                </li>
            </ul>
        </div>
    </section>

    <?php include('components/footer.php'); ?>

   
</body>
</html>