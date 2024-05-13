<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('components/header.php'); ?>
    <title>Food Ordering - Products</title>
 <style>
    
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
}

header {
    background-color: #343a40;
    padding: 20px;
    color: #fff;
}

main {
    padding: 20px;
}

.products {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.product {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.product img {
    width: 100%;
    border-radius: 5px;
}

.product h3 {
    margin-top: 10px;
}

.product p {
    margin-bottom: 10px;
}

.product button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

.product button:hover {
    background-color: #0056b3;
}

 </style>
</head>
<body>
    >
    <main>
        <section class="products">
            <h2>Our Products</h2>
            <div class="product">
                <img src="product1.jpg" alt="Product 1">
                <h3>Product 1</h3>
                <p>Description of Product 1.</p>
                <p>$10.00</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="product2.jpg" alt="Product 2">
                <h3>Product 2</h3>
                <p>Description of Product 2.</p>
                <p>$8.00</p>
                <button>Add to Cart</button>
            </div>
        
        </section>
    </main>
    <?php include('components/footer.php'); ?>
</body>
</html>
