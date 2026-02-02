<?php
$name = "Qamarbek Komilov";
$title = "Junior Web Developer";
$about = "I am a motivated student focused on modern web development. I enjoy building clean, fast, and user-friendly websites. My goal is to grow into a professional full-stack developer.";
$email = "uzb437340@email.com";
$github = "https://github.com/uzb437340-design";
$telegram = "https://t.me/Komilov_l7";
$phone = "+998949710871";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $name; ?> | Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="Personal portfolio of <?php echo $name; ?>, Junior Web Developer">
<meta name="keywords" content="portfolio, web developer, PHP, HTML, CSS">
<meta name="author" content="<?php echo $name; ?>">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#020617;
    color:#e5e7eb;
    overflow-x:hidden;
}

/* BACKGROUND ANIMATION */
.bg{
    position:fixed;
    inset:0;
    background:
        radial-gradient(circle at 20% 20%, #38bdf820, transparent 40%),
        radial-gradient(circle at 80% 70%, #6366f120, transparent 40%);
    z-index:-1;
    animation:move 20s infinite alternate;
}

@keyframes move{
    from{transform:translateY(0)}
    to{transform:translateY(-80px)}
}

/* GLASS */
.glass{
    background:rgba(255,255,255,0.06);
    backdrop-filter:blur(18px);
    border-radius:22px;
    border:1px solid rgba(255,255,255,0.12);
    box-shadow:0 30px 60px rgba(0,0,0,0.6);
}

/* HERO */
.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:40px;
}

.hero-box{
    max-width:900px;
    padding:60px;
    text-align:center;
}

.hero h1{
    font-size:56px;
    font-weight:700;
}

.hero h1 span{
    background:linear-gradient(90deg,#38bdf8,#818cf8);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.hero p{
    margin-top:18px;
    font-size:18px;
    color:#94a3b8;
}

.buttons{
    margin-top:35px;
    display:flex;
    justify-content:center;
    gap:15px;
    flex-wrap:wrap;
}

.btn{
    padding:15px 34px;
    border-radius:50px;
    font-weight:600;
    text-decoration:none;
    transition:.3s;
}

.btn-main{
    background:linear-gradient(90deg,#38bdf8,#818cf8);
    color:#020617;
}

.btn-main:hover{
    transform:scale(1.05);
}

.btn-outline{
    border:2px solid #38bdf8;
    color:#38bdf8;
}

.btn-outline:hover{
    background:#38bdf8;
    color:#020617;
}

/* SECTIONS */
section{
    max-width:1100px;
    margin:auto;
    padding:90px 20px;
}

.section-title{
    font-size:38px;
    text-align:center;
    margin-bottom:50px;
}

.section-title span{
    color:#38bdf8;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:28px;
}

.card{
    padding:35px;
    transition:.3s;
}

.card:hover{
    transform:translateY(-10px);
}

.card h3{
    color:#38bdf8;
    margin-bottom:12px;
}

/* PROJECTS */
.project{
    display:flex;
    flex-direction:column;
    gap:10px;
}

/* CONTACT */
a{
    color:#38bdf8;
    text-decoration:none;
}

a:hover{
    text-decoration:underline;
}

/* FOOTER */
footer{
    text-align:center;
    padding:30px;
    color:#64748b;
    border-top:1px solid rgba(255,255,255,0.1);
}

/* RESPONSIVE */
@media(max-width:600px){
    .hero h1{font-size:40px}
    .hero-box{padding:40px}
}
</style>
</head>
<body>

<div class="bg"></div>

<!-- HERO -->
<div class="hero">
    <div class="hero-box glass">
        <h1>Hello, I'm <span><?php echo $name; ?></span></h1>
        <p><?php echo $title; ?></p>
        <p><?php echo $about; ?></p>

        <div class="buttons">
            <a href="#projects" class="btn btn-main">My Projects</a>
            <a href="<?php echo $github; ?>" target="_blank" class="btn btn-outline">GitHub</a>
        </div>
    </div>
</div>

<!-- SKILLS -->
<section>
    <h2 class="section-title">My <span>Skills</span></h2>
    <div class="grid">
        <div class="card glass"><h3>Frontend</h3><p>HTML5, CSS3, Flexbox, Grid, Responsive Design</p></div>
        <div class="card glass"><h3>Backend</h3><p>PHP, MySQL Basics</p></div>
        <div class="card glass"><h3>Tools</h3><p>Git, GitHub, VS Code</p></div>
        <div class="card glass"><h3>Currently Learning</h3><p>JavaScript, APIs, Frameworks</p></div>
    </div>
</section>

<!-- PROJECTS -->
<section id="projects">
    <h2 class="section-title">My <span>Projects</span></h2>
    <div class="grid">
        <div class="card glass project">
            <h3>Personal Portfolio</h3>
            <p>Modern personal website built with PHP and CSS.</p>
        </div>
        <div class="card glass project">
            <h3>Online Store (Demo)</h3>
            <p>Simple PHP store project with product listing.</p>
        </div>
        <div class="card glass project">
            <h3>Practice Projects</h3>
            <p>HTML & CSS mini projects for learning.</p>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section>
    <h2 class="section-title">Get in <span>Touch</span></h2>
    <div class="grid">
        <div class="card glass"><h3>📧 Email</h3><p><?php echo $email; ?></p></div>
        <div class="card glass"><h3>📞 Phone</h3><p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p></div>
        <div class="card glass"><h3>💬 Telegram</h3><p><a href="<?php echo $telegram; ?>" target="_blank"><?php echo $telegram; ?></a></p></div>
    </div>
</section>

<footer>
    © <?php echo date("Y"); ?> <?php echo $name; ?> — All Rights Reserved
</footer>

</body>
</html>

