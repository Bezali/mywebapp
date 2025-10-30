<?php
// Simple PHP Portfolio Website

// Basic site data
$name = "John Doe";
$title = "Web Developer & Designer";
$bio = "I create responsive, user-friendly websites and web apps. Passionate about clean code and modern design.";
$projects = [
    ["title" => "Portfolio Website", "desc" => "A personal portfolio built with PHP and CSS."],
    ["title" => "Blog CMS", "desc" => "A simple blog content management system in PHP."],
    ["title" => "E-commerce Store", "desc" => "A small store built with PHP and MySQL."],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?> - Portfolio</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; color: #333; }
        header { background: #333; color: white; text-align: center; padding: 2em 0; }
        .container { width: 80%; margin: 2em auto; }
        h1, h2 { margin-bottom: 0.5em; }
        .bio { margin-bottom: 2em; }
        .project { background: white; padding: 1em; margin-bottom: 1em; border-radius: 8px; box-shadow: 0 0 5px rgba(0,0,0,0.1); }
        footer { text-align: center; padding: 1em; background: #333; color: white; }
    </style>
</head>
<body>

<header>
    <h1><?= $name ?></h1>
    <p><?= $title ?></p>
</header>

<div class="container">
    <section class="bio">
        <h2>About Me</h2>
        <p><?= $bio ?></p>
    </section>

    <section class="projects">
        <h2>Projects</h2>
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
