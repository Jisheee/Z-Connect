document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById('falling-bits-bg');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    if (!ctx) return;
    
    let width, height;
    let animationFrame = 0;
    let lastFrameTime = 0;
    let isInView = true;
    const lowPowerDevice = navigator.hardwareConcurrency <= 4 ||
        navigator.deviceMemory <= 4 ||
        navigator.connection?.saveData;
    const frameInterval = lowPowerDevice ? 1000 / 24 : 1000 / 40;
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const hero = canvas.closest('.hero-scroll-container');
    const heroVideo = hero?.querySelector('.hero-scroll-video');
    const lines = [];
    
    function resize() {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
        const lineSpacing = lowPowerDevice ? 36 : 28;
        const desiredCount = Math.floor(width / lineSpacing);

        while (lines.length > desiredCount) lines.pop();
        while (lines.length < desiredCount) {
            lines.push({
                x: Math.random() * width,
                y: Math.random() * height * -1,
                speed: 2 + Math.random() * 8,
                length: 10 + Math.random() * 50,
                width: Math.random() > 0.8 ? 3 : 1,
                color: colors[Math.floor(Math.random() * colors.length)],
                hasDecorator: Math.random() > 0.7,
                decoratorType: Math.random() > 0.5 ? 'square' : 'plus'
            });
        }
    }
    
    // The ZConnect tech colors
    const colors = [
        '#00FFCC', // Cyan
        '#33FF33', // Green
        '#0099FF', // Light Blue
        '#00FFCC', // Cyan (weighted higher)
        '#33FF33'  // Green (weighted higher)
    ];

    function canAnimate() {
        return !reducedMotion && isInView && !document.hidden;
    }

    function stopAnimation() {
        cancelAnimationFrame(animationFrame);
        animationFrame = 0;
        lastFrameTime = 0;
    }

    function syncAnimation() {
        const shouldAnimate = canAnimate();
        if (heroVideo) {
            if (shouldAnimate && heroVideo.paused) {
                heroVideo.play().catch(() => {});
            } else if (!shouldAnimate && !heroVideo.paused) {
                heroVideo.pause();
            }
        }

        if (shouldAnimate) {
            if (!animationFrame) animationFrame = requestAnimationFrame(animate);
        } else {
            stopAnimation();
        }
    }

    window.addEventListener('resize', resize, { passive: true });
    document.addEventListener('visibilitychange', syncAnimation);
    if ('IntersectionObserver' in window && hero) {
        const observer = new IntersectionObserver(([entry]) => {
            isInView = entry.isIntersecting;
            syncAnimation();
        });
        observer.observe(hero);
    }
    resize();
    syncAnimation();

    function animate(timestamp) {
        animationFrame = 0;
        if (!canAnimate()) return;
        if (lastFrameTime && timestamp - lastFrameTime < frameInterval) {
            animationFrame = requestAnimationFrame(animate);
            return;
        }
        const frameScale = lastFrameTime
            ? Math.min((timestamp - lastFrameTime) / (1000 / 60), 2)
            : 1;
        lastFrameTime = timestamp;

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
            line.y += line.speed * frameScale;

            // Reset line if it goes off screen
            if (line.y > height) {
                line.y = Math.random() * height * -1;
                line.x = Math.random() * width;
                line.speed = 2 + Math.random() * 8;
            }
        }

        animationFrame = requestAnimationFrame(animate);
    }
});
