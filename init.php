<?php
$name = "Qamarbek Komilov";
$title = "Junior Web Developer";
$about = "I build modern web applications with clean code and hacker mindset. Learning every day. Creating real projects.";
$email = "uzb437340@email.com";
$github = "https://github.com/uzb437340-design";
$telegram = "https://t.me/Komilov_l7";
$phone = "+998949710871";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $name; ?> | Hacker Portfolio</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="Hacker style portfolio of <?php echo $name; ?>, Web Developer">
<meta name="author" content="<?php echo $name; ?>">

<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Share Tech Mono', monospace;
}

body{
    background:black;
    color:#00ff9c;
    overflow-x:hidden;
}

/* MATRIX BACKGROUND */
canvas{
    position:fixed;
    top:0;
    left:0;
    z-index:-1;
}

/* GLASS TERMINAL */
.glass{
    background:rgba(0,255,156,0.05);
    border:1px solid rgba(0,255,156,0.25);
    backdrop-filter:f: blur(10px);
    box-shadow:0 0 40px rgba(0,255,156,0.3);
    border-radius:16px;
}

/* HERO */
.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:30px;
}

.terminal{
    max-width:900px;
    width:100%;
    padding:40px;
}

.terminal h1{
    font-size:42px;
    margin-bottom:15px;
}

.cursor{
    animation:blink 1s infinite;
}

@keyframes blink{
    50%{opacity:0}
}

.line{
    margin:12px 0;
    color:#a7f3d0;
}

.buttons{
    margin-top:30px;
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.btn{
    padding:12px 26px;
    border:1px solid #00ff9c;
    color:#00ff9c;
    text-decoration:none;
    transition:.3s;
}

.btn:hover{
    background:#00ff9c;
    color:black;
    box-shadow:0 0 25px #00ff9c;
}

/* SECTION */
section{
    max-width:1100px;
    margin:auto;
    padding:80px 20px;
}

.section-title{
    margin-bottom:40px;
    font-size:28px;
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
    color:#00ff9c;
}

/* FOOTER */
footer{
    text-align:center;
    padding:30px;
    border-top:1px solid rgba(0,255,156,0.2);
    color:#6ee7b7;
}

/* RESPONSIVE */
@media(max-width:600px){
    .terminal h1{font-size:32px}
}
</style>
</head>
<body>

<canvas id="matrix"></canvas>

<!-- HERO -->
<div class="hero">
    <div class="terminal glass">
        <h1>> Hello, I'm <?php echo $name; ?><span class="cursor">_</span></h1>
        <div class="line">> <?php echo $title; ?></div>
        <div class="line">> <?php echo $about; ?></div>

        <div class="buttons">
            <a href="#skills" class="btn">SKILLS</a>
            <a href="<?php echo $github; ?>" target="_blank" class="btn">GITHUB</a>
            <a href="#contact" class="btn">CONTACT</a>
        </div>
    </div>
</div>

<!-- SKILLS -->
<section id="skills">
    <div class="section-title">> SKILLS</div>
    <div class="grid">
        <div class="card glass"><h3>Frontend</h3><p>HTML, CSS, Responsive Design</p></div>
        <div class="card glass"><h3>Backend</h3><p>PHP, MySQL Basics</p></div>
        <div class="card glass"><h3>Tools</h3><p>Git, GitHub, VS Code</p></div>
        <div class="card glass"><h3>Learning</h3><p>JavaScript, APIs</p></div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact">
    <div class="section-title">> CONTACT</div>
    <div class="grid">
        <div class="card glass"><h3>Email</h3><p><?php echo $email; ?></p></div>
        <div class="card glass"><h3>Phone</h3><p><?php echo $phone; ?></p></div>
        <div class="card glass"><h3>Telegram</h3><p><?php echo $telegram; ?></p></div>
    </div>
</section>

<footer>
> <?php echo date("Y"); ?> | <?php echo $name; ?> | ACCESS GRANTED
</footer>

<script>
const canvas = document.getElementById("matrix");
const ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const letters = "01";
const fontSize = 14;
const columns = canvas.width / fontSize;
const drops = Array(Math.floor(columns)).fill(1);

function draw(){
    ctx.fillStyle = "rgba(0,0,0,0.05)";
    ctx.fillRect(0,0,canvas.width,canvas.height);
    ctx.fillStyle = "#00ff9c";
    ctx.font = fontSize + "px monospace";

    drops.forEach((y,i)=>{
        const text = letters[Math.floor(Math.random()*letters.length)];
        ctx.fillText(text, i*fontSize, y*fontSize);
        if(y*fontSize > canvas.height && Math.random()>0.975){
            drops[i]=0;
        }
        drops[i]++;
    });
}

setInterval(draw,33);
</script>

</body>
</html>


