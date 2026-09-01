document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById('falling-bits-bg');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    
    let width, height;
    
    function resize() {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
    }
    
    window.addEventListener('resize', resize);
    resize();

    // The ZConnect tech colors
    const colors = [
        '#00FFCC', // Cyan
        '#33FF33', // Green
        '#0099FF', // Light Blue
        '#00FFCC', // Cyan (weighted higher)
        '#33FF33'  // Green (weighted higher)
    ];

    const lines = [];
    const numLines = Math.floor(width / 20); // Density of the rain

    for (let i = 0; i < numLines; i++) {
        lines.push({
            x: Math.random() * width,
            y: Math.random() * height * -1, // Start above the screen
            speed: 2 + Math.random() * 8, // Random speed
            length: 10 + Math.random() * 50, // Length of the solid bar
            width: Math.random() > 0.8 ? 3 : 1, // Most are thin, some are thick
            color: colors[Math.floor(Math.random() * colors.length)],
            hasDecorator: Math.random() > 0.7, // 30% chance to have a square or plus
            decoratorType: Math.random() > 0.5 ? 'square' : 'plus'
        });
    }

    function animate() {
        // Semi-transparent dark background creates the trailing effect
        ctx.fillStyle = 'rgba(3, 8, 18, 0.15)'; 
        ctx.fillRect(0, 0, width, height);

        for (let i = 0; i < lines.length; i++) {
            const line = lines[i];

            // Draw the line
            ctx.fillStyle = line.color;
            ctx.fillRect(line.x, line.y, line.width, line.length);

            // Draw decorator at the bottom (the head of the falling line)
            if (line.hasDecorator) {
                const headY = line.y + line.length;
                ctx.strokeStyle = line.color;
                ctx.lineWidth = 1;
                ctx.beginPath();
                
                if (line.decoratorType === 'square') {
                    ctx.strokeRect(line.x - 3, headY, 6 + line.width, 6 + line.width);
                } else {
                    // Plus sign
                    const centerX = line.x + (line.width/2);
                    ctx.moveTo(centerX - 4, headY + 4);
                    ctx.lineTo(centerX + 4, headY + 4);
                    ctx.moveTo(centerX, headY);
                    ctx.lineTo(centerX, headY + 8);
                    ctx.stroke();
                }
            }

            // Move the line down
            line.y += line.speed;

            // Reset line if it goes off screen
            if (line.y > height) {
                line.y = Math.random() * height * -1;
                line.x = Math.random() * width;
                line.speed = 2 + Math.random() * 8;
            }
        }

        requestAnimationFrame(animate);
    }

    animate();
});
