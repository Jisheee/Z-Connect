document.addEventListener("DOMContentLoaded", () => {
    // Check if GSAP and ScrollTrigger are loaded
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
        console.warn("GSAP or ScrollTrigger not found.");
        return;
    }

    // Register GSAP ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    const container = document.querySelector('.hero-scroll-container');
    const pinWrap = document.querySelector('.pin-wrap');
    const mediaCol = document.querySelector('.media-column');
    const textCol = document.querySelector('.text-column');
    const panels = gsap.utils.toArray('.scroll-panel');

    if (!container || panels.length === 0) return;

    // Responsive check: if it's mobile, we might handle animation differently or disable pinning.
    // For now, let's keep it simple.

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: container,
            start: "top top", // When the top of the container hits the top of the viewport
            end: "+=2500", // Smooth scroll distance
            pin: true, // Pin the container in place
            scrub: 1, // Silky smooth scrubbing
            anticipatePin: 1,
            // Snap to each of the 4 panels (3 steps: 0, 0.333, 0.666, 1)
            snap: {
                snapTo: 1 / 3,
                duration: { min: 0.2, max: 0.5 }, // Quick & gentle snap
                delay: 0.6, // Wait 0.6s after user stops scrolling before snapping (prevents double-scroll/jumping)
                ease: "power1.out",
                inertia: false
            }
        }
    });

    // Step 1: Slide Panel 1 in (it starts at translateX(0%), so we just ensure textCol is visible)
    tl.to(textCol, {
        opacity: 1,
        pointerEvents: "auto",
        duration: 0.5
    }, 0);

    // Step 2 and 3: Transition between panels 1, 2, 3
    for (let i = 0; i < 2; i++) {
        // Slide out current panel to the left
        tl.to(panels[i], {
            x: "-100%",
            duration: 1,
            ease: "power2.inOut"
        }, `+=0.5`);

        // Slide in next panel from the right
        tl.to(panels[i + 1], {
            x: "0%",
            duration: 1,
            ease: "power2.inOut"
        }, `<`);
    }

    const partnerLogos = document.querySelector('.panel-4-partners');

    // Step 4: Final transition to Panel 4
    // Slide out Panel 3
    tl.to(panels[2], {
        x: "-100%",
        duration: 1,
        ease: "power2.inOut"
    }, `+=0.5`);

    // Slide in Panel 4
    tl.to(panels[3], {
        x: "0%",
        duration: 1,
        ease: "power2.inOut"
    }, `<`)
        .to(partnerLogos, {
            opacity: 1,
            duration: 0.5
        }, `<`); // Fade in partner logos at the same time as panel 4

    // Add a tiny bit of dead space at the end so it doesn't immediately unpin
    tl.to({}, { duration: 0.5 });
});
