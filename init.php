<?php
$name = "Qamarbek Komilovv";
$title = "Junior Web Developer";
$about = "I am a passionate student focused on web development and modern technologies. My goal is to become a strong developer and build real-world projects.";
$email = "uzb437340@email.com";
$github = "https://github.com/uzb437340-design";
$telegram = "https://t.me/Komilov_l7";
$phone = "+998 94 971 08 71";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $name; ?> | Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    background:linear-gradient(135deg,#020617,#0f172a);
    color:#e5e7eb;
}

/* GLASS EFFECT */
.glass{
    background:rgba(255,255,255,0.06);
    border-radius:20px;
    backdrop-filter:blur(16px);
    border:1px solid rgba(255,255,255,0.1);
    box-shadow:0 25px 50px rgba(0,0,0,0.5);
}

/* HERO */
.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:40px;
}

.hero-content{
    max-width:900px;
    padding:50px;
}

.hero h1{
    font-size:52px;
    font-weight:700;
}

.hero h1 span{
    color:#38bdf8;
}

.hero p{
    margin-top:15px;
    font-size:18px;
    color:#94a3b8;
}

.buttons{
    margin-top:30px;
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.btn{
    padding:14px 30px;
    border-radius:50px;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.btn-primary{
    background:#38bdf8;
    color:#020617;
}

.btn-primary:hover{
    background:#0ea5e9;
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
    padding:80px 20px;
    max-width:1100px;
    margin:auto;
}

.section-title{
    font-size:36px;
    margin-bottom:40px;
    text-align:center;
}

.section-title span{
    color:#38bdf8;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:25px;
}

.card{
    padding:30px;
}

.card h3{
    margin-bottom:10px;
    color:#38bdf8;
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
    .hero h1{
        font-size:38px;
    }
}
</style>
</head>
<body>

<!-- HERO -->
<div class="hero">
    <div class="hero-content glass">
        <h1>Hello, I'm <span><?php echo $name; ?></span></h1>
        <p><?php echo $title; ?></p>
        <p><?php echo $about; ?></p>

        <div class="buttons">
            <a href="#contact" class="btn btn-primary">Contact Me</a>
            <a href="<?php echo $github; ?>" class="btn btn-outline" target="_blank">GitHub</a>
        </div>
    </div>
</div>

<!-- SKILLS -->
<section>
    <h2 class="section-title">My <span>Skills</span></h2>
    <div class="grid">
        <div class="card glass"><h3>Frontend</h3><p>HTML, CSS, Responsive Design</p></div>
        <div class="card glass"><h3>Backend</h3><p>PHP, MySQL Basics</p></div>
        <div class="card glass"><h3>Tools</h3><p>Git, GitHub, VS Code</p></div>
        <div class="card glass"><h3>Learning</h3><p>JavaScript, Frameworks</p></div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact">
    <h2 class="section-title">Get in <span>Touch</span></h2>
    <div class="grid">

        <div class="card glass">
            <h3>📧 Email</h3>
            <p><?php echo $email; ?></p>
        </div>

        <div class="card glass">
            <h3>📞 Phone</h3>
            <p>
                <a href="tel:<?php echo $phone; ?>">
                    <?php echo $phone; ?>
                </a>
            </p>
        </div>

        <div class="card glass">
            <h3>💬 Telegram</h3>
            <p>
                <a href="<?php echo $telegram; ?>" target="_blank">
                    <?php echo $telegram; ?>
                </a>
            </p>
        </div>

    </div>
</section>

<footer>
    © <?php echo date("Y"); ?> <?php echo $name; ?> — Personal Portfolio
</footer>

</body>
</html>

