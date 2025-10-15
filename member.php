<?php
$bosses = [
  ["name" => "Billyz Winterfell", "fb" => "https://www.facebook.com/billy.winterfell/photos", "img" => "img/billy.jpg"],
  ["name" => "Jonathan Winterfell", "fb" => "https://www.facebook.com/jntwinterfell", "img" => "img/jona.jpg"],
  ["name" => "Slumboyy Winterfell", "fb" => "https://www.facebook.com/blueberrys.bolt", "img" => "img/slam.jpg"],
];
$kings = [
  ["name" => "Rxy Shinelikesbolt", "fb" => "https://www.facebook.com/profile.php?id=61577597883454", "img" => "img/1.jpg"],
  ["name" => "Porsche Shinelikesbolt", "fb" => "https://www.facebook.com/porsche.porsche.porsche.2024", "img" => "img/pors.jpg"],
  ["name" => "Julifxr Shinelikesbolt", "fb" => "https://www.facebook.com/julifxr.f.bolt", "img" => "img/juli.jpg"],
  ["name" => "Midwyn Shinelikesbolt", "fb" => "https://www.facebook.com/jxffy.f.bolt", "img" => "img/mid.jpg"],
  ["name" => "Skrt Shinelikesbolt", "fb" => "https://www.facebook.com/skrt.vest", "img" => "img/skrt.jpg"],
  ["name" => "Dum Shinelikesbolt", "fb" => "https://www.facebook.com/dum.f.bolt", "img" => "img/dum.jpg"],
  ["name" => "Chun Shinelikesbolt", "fb" => "https://www.facebook.com/chun.crydiff", "img" => "img/chun.jpg"],
  ["name" => "Draft Shinelikesbolt", "fb" => "https://www.facebook.com/draftmadiwa", "img" => "img/draft.jpg"],
  ["name" => "Winter Shinelikesbolt", "fb" => "https://www.facebook.com/winter.f.bolt", "img" => "img/winter.jpg"],
  ["name" => "Gamhom Shinelikesbolt", "fb" => "https://www.facebook.com/profile.php?id=61579119520023", "img" => "img/gam.jpg"],
  ["name" => "Memo Shinelikesbolt", "fb" => "https://www.facebook.com/memo.f.bolt", "img" => "img/memo.jpg"],
  ["name" => "Gamex Shinelikesbolt", "fb" => "https://www.facebook.com/gamex.pentagon", "img" => "img/logo.png"],
  ["name" => "Jacob Shinelikesbolt", "fb" => "https://www.facebook.com/jacob.jacob.87044", "img" => "img/jacop.jpg"],
  ["name" => "Real Shinelikesbolt", "fb" => "https://www.facebook.com/real.fbolt", "img" => "img/logo.png"],
];  
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Members | WINTERFELL BOLT</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  color: #f0f0f0;
  background: #0b0b0b;
  overflow-x: hidden;
  position: relative;
}
#particles {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  z-index: 0;
  background: #0b0b0b;
}
body::before {
  content: "WINTERFELL";
  position: fixed;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  font-size: 150px;
  font-weight: 900;
  color: rgba(255,255,255,0.04);
  letter-spacing: 10px;
  user-select: none;
  z-index: 0;
}

/* ===== HEADER ===== */
.header-bar {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 80px;
  background: rgba(10,10,10,0.9);
  border-bottom: 1px solid #333;
  display: flex;
  align-items: center;
  padding: 0 20px;
  z-index: 100;
  backdrop-filter: blur(6px);
}
.home-btn {
  background: #111;
  border: 1px solid #555;
  color: #f0f0f0;
  padding: 8px 18px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: bold;
  transition: 0.3s;
  font-size: 14px;
}
.home-btn:hover { background: #333; }
.header-title {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  font-size: 24px;
  letter-spacing: 3px;
  font-weight: 700;
  text-transform: uppercase;
  background: linear-gradient(90deg,#fff,#aaa);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;
}

/* ===== MAIN CONTENT ===== */
.container {
  max-width: 1300px;
  margin: 120px auto 0;
  padding: 0 20px;
  position: relative;
  z-index: 5;
}
section {margin-bottom: 50px;}
h2 {
  font-size: 22px;
  font-weight: 600;
  color: #fff;
  margin: 20px 0 20px;
  border-bottom: 1px solid #444;
  display: inline-block;
  padding-bottom: 8px;
}

/* ===== MEMBER LIST ===== */
.member-list {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 18px;
}
.member-card {
  background: #0d0d0d;
  border: 1px solid #333;
  border-radius: 12px;
  padding: 15px;
  display: flex;
  align-items: center;
  gap: 12px;
  transition: all 0.3s ease;
  box-shadow: 0 0 10px rgba(255,255,255,0.1);
}
.member-card:hover {
  background: #1a1a1a;
  box-shadow: 0 0 20px rgba(255,255,255,0.2);
  transform: translateY(-3px);
}
.member-card img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid #666;
}
.member-card span {
  flex-grow: 1;
  font-size: 15px;
  text-align: left;
}
.fb {
  color: #777;
  font-size: 18px;
  transition: 0.3s;
}
.fb:hover { color: #aaa; transform: scale(1.2); }

.boss {
  padding: 19px;
  font-size: 16px;
  background: linear-gradient(145deg,#222,#000);
  border: 1px solid #888;
  border-radius: 15px;
  box-shadow: 0 0 15px rgba(255,255,255,0.2);
  transition: all 0.3s ease;
}
.boss:hover { background: #1a1a1a; transform: translateY(-3px); }
.boss img { width: 50px; height: 50px; }

/* ===== SEARCH BOX ===== */
.search-box {
  position: fixed;
  top: 90px;
  right: 10px; /* ห่างจากขอบขวาประมาณ 1cm */
  z-index: 200;
}
.search-box input {
  background: linear-gradient(145deg, #0e0e0e, #1a1a1a);
  border: 1px solid #333;
  color: #e0e0e0;
  padding: 10px 20px 10px 40px;
  border-radius: 25px;
  width: 280px;
  font-size: 14px;
  letter-spacing: 0.5px;
  box-shadow: inset 0 0 8px rgba(255,255,255,0.05), 0 0 10px rgba(255,255,255,0.1);
  transition: all 0.3s ease;
}
.search-box input::placeholder {
  color: #888;
  opacity: 0.8;
}
.search-box input:focus {
  outline: none;
  border-color: #777;
  background: linear-gradient(145deg, #1a1a1a, #2a2a2a);
  box-shadow: 0 0 12px rgba(255,255,255,0.15);
}
.search-box::before {
  content: "\f002";
  font-family: "Font Awesome 6 Free";
  font-weight: 900;
  color: #aaa;
  position: absolute;
  left: 15px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 14px;
  pointer-events: none;
}

/* ===== FOOTER ===== */
.footer {
  text-align: center;
  font-size: 13px;
  color: #777;
  margin-bottom: 40px;
}

/* ===== PAGINATION ===== */
.pagination {
  display: flex;
  justify-content: center;
  gap: 10px;
  margin-top: 30px;
}
.pagination button {
  background: #111;
  border: 1px solid #555;
  color: #f0f0f0;
  padding: 8px 18px;
  border-radius: 25px;
  cursor: pointer;
  transition: 0.3s;
}
.pagination button:hover {background: #333;}

@media(max-width:1024px){.member-list{grid-template-columns:repeat(2,1fr);}}
@media(max-width:768px){
  .member-list{grid-template-columns:1fr;}
  .header-bar{flex-direction:column;height:auto;padding:10px 20px;gap:10px;}
  .header-title{position:static; transform:none; font-size:18px;}
}
</style>
</head>
<body>
<canvas id="particles"></canvas>

<!-- HEADER -->
<div class="header-bar">
  <a href="index.php" class="home-btn">HOME</a>
  <div class="header-title">WINTERFELL BOLT</div>
</div>

<!-- SEARCH BOX -->
<div class="search-box">
  <input type="text" id="searchInput" placeholder="ค้นหาชื่อสมาชิก...">
</div>

<!-- CONTENT -->
<div class="container">
  <section>
    <h2>THEBOSS WINTERFELL BOLT</h2>
    <div class="member-list" id="bossList">
      <?php foreach($bosses as $b): ?>  
      <div class="member-card boss">
        <img src="<?= $b['img'] ?>" alt="Boss">
        <span><?= $b['name'] ?></span>
        <a href="<?= $b['fb'] ?>" target="_blank" class="fb"><i class="fa-brands fa-facebook-f"></i></a>
      </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section>
    <h2>MEMBER SHINE LIKE A BOLT</h2>
    <div class="member-list" id="memberList"></div>
    <div class="pagination">
      <button id="prevBtn">ย้อนกลับ</button>
      <button id="nextBtn">ถัดไป</button>
    </div>
  </section>

  <p class="footer">Designed by Rxy Shinelikesbolt © 2025</p>
</div>

<script>
const kings = <?= json_encode($kings) ?>;
const bossList = document.getElementById("bossList");
const memberList = document.getElementById("memberList");
const searchInput = document.getElementById("searchInput");
const perPage = 12;
let currentPage = 1;

function renderList() {
  memberList.innerHTML = "";
  const start = (currentPage - 1) * perPage;
  const end = start + perPage;
  kings.slice(start, end).forEach(m => {
    memberList.innerHTML += `
      <div class="member-card">
        <img src="${m.img}" alt="Member">
        <span>${m.name}</span>
        <a href="${m.fb}" target="_blank" class="fb"><i class="fab fa-facebook-f"></i></a>
      </div>`;
  });
}
renderList();

document.getElementById("nextBtn").onclick = () => {
  if (currentPage * perPage < kings.length) { currentPage++; renderList(); }
};
document.getElementById("prevBtn").onclick = () => {
  if (currentPage > 1) { currentPage--; renderList(); }
};

// ===== SEARCH FUNCTION =====
searchInput.addEventListener("keyup", () => {
  const filter = searchInput.value.toLowerCase();
  document.querySelectorAll(".member-card").forEach(card => {
    const name = card.querySelector("span").textContent.toLowerCase();
    card.style.display = name.includes(filter) ? "flex" : "none";
  });
});

// ===== PARTICLE BACKGROUND =====
const canvas = document.getElementById('particles');
const ctx = canvas.getContext('2d');
let width = canvas.width = window.innerWidth;
let height = canvas.height = window.innerHeight;
const mouse = {x:null,y:null};
const points = [];
const POINT_COUNT = 80;
const MAX_DIST = 120;

for (let i=0; i<POINT_COUNT; i++){
  points.push({x:Math.random()*width,y:Math.random()*height,vx:(Math.random()-0.5)/2,vy:(Math.random()-0.5)/2});
}
window.addEventListener('mousemove',e=>{mouse.x=e.x;mouse.y=e.y;});
window.addEventListener('resize',()=>{width=canvas.width=window.innerWidth;height=canvas.height=window.innerHeight;});

function animate(){
  ctx.clearRect(0,0,width,height);
  points.forEach(p=>{
    p.x+=p.vx;p.y+=p.vy;
    if(p.x<0||p.x>width)p.vx*=-1;
    if(p.y<0||p.y>height)p.vy*=-1;
    ctx.fillStyle='rgba(255,255,255,0.7)';
    ctx.beginPath();ctx.arc(p.x,p.y,2,0,Math.PI*2);ctx.fill();
  });
  for(let i=0;i<POINT_COUNT;i++){
    for(let j=i+1;j<POINT_COUNT;j++){
      const dx=points[i].x-points[j].x;
      const dy=points[i].y-points[j].y;
      const dist=Math.sqrt(dx*dx+dy*dy);
      if(dist<MAX_DIST){
        ctx.strokeStyle=`rgba(255,255,255,${1-dist/MAX_DIST})`;
        ctx.lineWidth=1;
        ctx.beginPath();ctx.moveTo(points[i].x,points[i].y);ctx.lineTo(points[j].x,points[j].y);ctx.stroke();
      }
    }
    if(mouse.x&&mouse.y){
      const dx=points[i].x-mouse.x;
      const dy=points[i].y-mouse.y;
      const dist=Math.sqrt(dx*dx+dy*dy);
      if(dist<MAX_DIST){
        ctx.strokeStyle=`rgba(255,255,255,${1-dist/MAX_DIST})`;
        ctx.beginPath();ctx.moveTo(points[i].x,points[i].y);ctx.lineTo(mouse.x,mouse.y);ctx.stroke();
      }
    }
  }
  requestAnimationFrame(animate);
}
animate();
</script>
</body>
</html>
