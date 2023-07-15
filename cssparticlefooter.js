<!DOCTYPE html>
<html>

<head>
    <title>Fireworks Animation</title>
    <style>
        body {
            background: #000;
            margin: 0;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <canvas id="canvas"></canvas>

    <script>
        const canvas = document.getElementById("canvas");
        const ctx = canvas.getContext("2d");
        const particles = [];

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        function createParticle(x, y) {
            const particle = {
                x: x,
                y: y,
                size: Math.random() * 2 + 1,
                xspeed: Math.random() * 3 - 1.5,
                yspeed: Math.random() * 3 - 1.5,
                color: "hsl(" + Math.random() * 360 + ", 100%, 50%)",
            };
            particles.push(particle);
        }

        function drawParticle(particle) {
            ctx.beginPath();
            ctx.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
            ctx.fillStyle = particle.color;
            ctx.fill();
        }

        function updateParticles() {
            for (let i = 0; i < particles.length; i++) {
                const particle = particles[i];
                particle.x += particle.xspeed;
                particle.y += particle.yspeed;
                if (particle.size > 0.2) particle.size -= 0.1;
                if (particle.size <= 0.2) particles.splice(i, 1);
            }
        }

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < particles.length; i++) {
                drawParticle(particles[i]);
            }
        }

        function loop() {
            requestAnimationFrame(loop);
            createParticle(Math.random() * canvas.width, canvas.height);
            updateParticles();
            draw();
        }

        loop();
    </script>
</body>

</html>
