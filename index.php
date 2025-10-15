<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Shinelikesbolt</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    body {
      min-height: 100vh;
      font-family: 'Poppins', sans-serif;
      color: white;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      position: relative;
      background: #0b0b0b; /* สีพื้นหลังหลัก */
    }

    /* Particle Canvas */
    canvas#particles {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      pointer-events: none;
    }

      /* Background logo in the center with reduced brightness */
    .background-logo {
      position: absolute;
      top: 50%;
      left: 50%;  
      transform: translate(-50%, -50%);
      width: 950px; /* ขยายใหญ่ขึ้นจาก 400px */
      height: 950px; /* ขยายใหญ่ขึ้นจาก 400px */
      background: url('img/logo2.png') center/contain no-repeat;
      filter: brightness(100%);
      z-index: 1;
      pointer-events: none;
    }

    @media (max-width: 480px) {
      .background-logo {
        width: 400px; /* ขนาดใหญ่ขึ้นสำหรับมือถือ */
        height: 400px;
      }
    }


    /* WINTERFELL BOLT text
    .title {
      margin-top: 5cm;
      text-align: center;
      font-size: 60px;
      font-weight: 700;
      letter-spacing: 3px;
      z-index: 10;
      position: relative;
    }
    */

    /* MEMBER LIST button */
    .member-link {
      display: inline-block;
      background: rgba(255, 255, 255, 1);
      color: #000000;
      padding: 12px 0;
      width: 220px;
      text-align: center;
      border-radius: 25px;
      text-decoration: none;
      font-size: 18px;
      font-weight: 700;
      margin-top: 750px;
      transition: all 0.3s ease;
      z-index: 10;
      position: relative;
    }

    .member-link:hover {
      background: rgba(255, 255, 255, 0.8);
    }

    /* Footer fixed bottom */
    .footer {
      position: absolute;
      bottom: 10px;
      text-align: center;
      color: #777;
      font-size: 14px;
      width: 100%;
      z-index: 10;
    }

    @media (max-width: 480px) {
      .title {
        font-size: 50px;
        margin-top: 3cm;
      }
      .member-link {
        font-size: 16px;
        width: 180px;
        padding: 10px 0;
      }
      .background-logo {
        width: 250px;
        height: 250px;
      }
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

  </style>
</head>
<body>
  <!-- Particle Background -->
  <canvas id="particles"></canvas>

  <!-- Centered Logo Background -->
  <div class="background-logo"></div>

  <!-- <div class="title">WINTERFELL BOLT</div> -->

  <!-- MEMBER LIST button -->
  <a href="member.php" class="member-link">MEMBER BOLT</a>

  <!-- Footer fixed bottom -->
  <p class="footer">Designed by Rxy Shinelikesbolt © 2025</p>

    <!-- Particle Script -->
    <script>
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
