<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>

<p>... content2 sebelumnya (navbar dll)</p>

<h1>Our Services</h1>

<div class="item" data-aos="fade-left">
        <img src="nasgor.jpeg" alt="Nasi Goreng" onclick="showDescription('nasgor-desc')">
        <div class="text">
            <h2>Nasi Goreng</h2>
            <p id="nasgor-desc" class="item-description">Nasi goreng adalah makanan berupa nasi yang digoreng dan dicampur dalam minyak goreng, margarin, atau mentega. Biasanya ditambah dengan kecap manis, bawang merah, bawang putih, asam jawa, lada dan bahan lainnya; seperti telur, daging ayam, dan kerupuk.</p>
        </div>
    </div>

    <div class="item" data-aos="fade-up">
        <img src="miegor.jpeg" alt="Mie Goreng" onclick="showDescription('miegor-desc')">
        <div class="text">
            <h2>Mie Goreng</h2>
            <p id="miegor-desc" class="item-description">Mie goreng berarti "mie yang digoreng" adalah hidangan mie yang dimasak dengan digoreng tumis</p>
        </div>
    </div>
</div>

<p> ... (tambah2in jenis servicenya)</p>


    <script>
    AOS.init(); // Initialize AOS library

    function showDescription(descriptionId) {
        var descriptions = document.querySelectorAll(".item-description");
        descriptions.forEach(function(desc) {
            desc.style.display = "none";
        });

        var description = document.getElementById(descriptionId);
        description.style.display = "block";
    }
</script>
</body>
</html>