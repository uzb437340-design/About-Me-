<?php
$name = "Qamarbek Komilov";
$alias = "qamarbek@root";
$title = "Junior Web Developer | Cyber Style";
$about = "I am a motivated junior web developer with a strong interest in modern web technologies. 
I enjoy building clean, responsive, and user-friendly websites using HTML, CSS, and PHP. 
Every day I improve my skills, learn new tools, and work on real projects to become a professional developer.";
$email = "uzb437340@email.com";
$github = "https://github.com/uzb437340-design";
$telegram = "https://t.me/Komilov_l7";
$phone = "+998 94 971 08 71";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $alias; ?> — terminal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Hacker style portfolio of <?php echo $name; ?>">

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
  inset:0;
  z-index:-1;
}

/* TERMINAL CONTAINER */
.terminal{
  max-width:960px;
  margin:80px auto;
  padding:35px;
  border:1px solid #00ff9c;
  background:rgba(0,255,156,0.06);
  box-shadow:0 0 45px rgba(0,255,156,0.35);
  border-radius:14px;
}

/* WINDOW BAR */
.bar{
  display:flex;
  gap:10px;
  margin-bottom:20px;
}
.dot{
  width:12px;
  height:12px;
  border-radius:50%;
}
.red{background:#ff5f56}
.yellow{background:#ffbd2e}
.green{background:#27c93f}

/* TEXT */
.line{
  margin:10px 0;
  color:#a7f3d0;
}
.prompt{
  color:#00ff9c;
}
.cursor{
  animation:blink 1s infinite;
}
@keyframes blink{
  50%{opacity:0}
}

/* ABOUT PANEL */
.about-box{
  margin-top:20px;
  padding:22px;
  border-left:4px solid #00ff9c;
  background:rgba(0,255,156,0.12);
  box-shadow:0 0 30px rgba(0,255,156,0.4);
  color:#ecfeff;
  line-height:1.7;
}

.about-title{
  margin-bottom:10px;
  color:#00ff9c;
  font-size:18px;
  text-shadow:0 0 10px #00ff9c;
}

/* BUTTONS */
.buttons{
  margin-top:25px;
  display:flex;
  gap:14px;
  flex-wrap:wrap;
}
.btn{
  border:1px solid #00ff9c;
  padding:10px 22px;
  color:#00ff9c;
  text-decoration:none;
  transition:.3s;
}
.btn:hover{
  background:#00ff9c;
  color:black;
  box-shadow:0 0 25px #00ff9c;
}

/* SECTIONS */
section{
  max-width:1100px;
  margin:70px auto;
  padding:0 20px;
}
h2{
  margin-bottom:20px;
}

/* GRID */
.grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
  gap:20px;
}
.card{
  border:1px solid rgba(0,255,156,0.35);
  padding:25px;
  background:rgba(0,255,156,0.05);
  box-shadow:0 0 25px rgba(0,255,156,0.25);
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
  .terminal{margin:40px 10px}
}
</style>
</head>
<body>

<canvas id="matrix"></canvas>

<div class="terminal">
  <div class="bar">
    <div class="dot red"></div>
    <div class="dot yellow"></div>
    <div class="dot green"></div>
  </div>

  <div class="line"><span class="prompt"><?php echo $alias; ?>:</span>~$ whoami</div>
  <div class="line"><?php echo $name; ?></div>

  <div class="line"><span class="prompt"><?php echo $alias; ?>:</span>~$ role</div>
  <div class="line"><?php echo $title; ?></div>

  <div class="about-box">
    <div class="about-title">> ABOUT ME</div>
    <?php echo $about; ?>
  </div>

  <div class="line"><span class="prompt"><?php echo $alias; ?>:</span>~$ <span class="cursor">█</span></div>

  <div class="buttons">
    <a href="#skills" class="btn">skills</a>
    <a href="#projects" class="btn">projects</a>
    <a href="<?php echo $github; ?>" target="_blank" class="btn">github</a>
    <a href="#contact" class="btn">contact</a>
  </div>
</div>

<section id="skills">
  <h2>> skills</h2>
  <div class="grid">
    <div class="card">HTML / CSS / Responsive Design</div>
    <div class="card">PHP / MySQL (basic)</div>
    <div class="card">Git / GitHub</div>
    <div class="card">Learning JavaScript</div>
  </div>
</section>

<section id="projects">
  <h2>> projects</h2>
  <div class="grid">
    <div class="card">Personal Portfolio (PHP)</div>
    <div class="card">Online Store (Demo)</div>
    <div class="card">Practice Web Projects</div>
  </div>
</section>

<section id="contact">
  <h2>> contact</h2>
  <div class="grid">
    <div class="card">Email: <?php echo $email; ?></div>
    <div class="card">Phone: <?php echo $phone; ?></div>
    <div class="card">Telegram: <?php echo $telegram; ?></div>
  </div>
</section>

<footer>
  ACCESS GRANTED — © <?php echo date("Y"); ?> <?php echo $alias; ?>
</footer>

<script>
const canvas = document.getElementById("matrix");
const ctx = canvas.getContext("2d");

canvas.width = innerWidth;
canvas.height = innerHeight;

const chars = "01";
const fontSize = 14;
const columns = canvas.width / fontSize;
const drops = Array(Math.floor(columns)).fill(1);

function draw(){
  ctx.fillStyle = "rgba(0,0,0,0.06)";
  ctx.fillRect(0,0,canvas.width,canvas.height);
  ctx.fillStyle = "#00ff9c";
  ctx.font = fontSize+"px monospace";
  drops.forEach((y,i)=>{
    const text = chars[Math.floor(Math.random()*chars.length)];
    ctx.fillText(text,i*fontSize,y*fontSize);
    if(y*fontSize>canvas.height && Math.random()>0.975) drops[i]=0;
    drops[i]++;
  });
}
setInterval(draw,33);
</script>

</body>
</html>



