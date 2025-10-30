<?php
// Romilola Bashorun's Portfolio Website

$name = "Romilola Bashorun";
$title = "Top Parfiat Vendor in Lagos";
$bio = "Romilola Bashorun is a leading Parfiat vendor based in Lagos, known for her delicious creations and exceptional customer service. 
She is also a social media manager at Dunhood Electrical Appliances and attends Ark of Light for All Nations. 
Proudly Yoruba from Akure, she’s widely admired for her grace, confidence, and beauty.";
$projects = [
    ["title" => "Signature Parfiat Line", "desc" => "A vibrant collection of Lagos’ favorite parfait flavors."],
    ["title" => "Social Media Growth for Dunhood Electricals", "desc" => "Managed campaigns that boosted online reach and engagement."],
    ["title" => "Community Outreach", "desc" => "Partnered with local events to promote healthy dessert choices."],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> - Portfolio</title>
    <style>
        body { margin: 0; font-family: 'Poppins', sans-serif; background: #f8f9fa; color: #333; }
        header { background: linear-gradient(135deg, #ff7eb3, #ff758c); color: white; text-align: center; padding: 3em 1em; }
        header img { width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 4px solid white; margin-bottom: 1em; }
        .container { width: 85%; max-width: 900px; margin: 2em auto; }
        h1, h2 { margin-bottom: 0.3em; }
        .bio { background: white; padding: 2em; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); margin-bottom: 2em; }
        .projects .project { background: white; padding: 1.5em; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.08); margin-bottom: 1em; transition: transform 0.3s ease; }
        .projects .project:hover { transform: translateY(-5px); }
        footer { text-align: center; padding: 1em; background: #ff758c; color: white; font-size: 0.9em; }
    </style>
</head>
<body>

<header>
    <img src="romilola.jpg" alt="Romilola Bashorun">
    <h1><?= $name ?></h1>
    <p><?= $title ?></p>
</header>

<div class="container">
    <section class="bio">
        <h2>About Me</h2>
        <p><?= $bio ?></p>
    </section>

    <section class="projects">
        <h2>My Work</h2>
        <?php foreach ($projects as $project): ?>
            <div class="project">
                <h3><?= $project['title'] ?></h3>
                <p><?= $project['desc'] ?></p>
            </div>
        <?php endforeach; ?>
    </section>
</div>

<footer>
    <p>&copy; <?= date("Y") ?> <?= $name ?>. All rights reserved.</p>
</footer>

</body>
</html>
