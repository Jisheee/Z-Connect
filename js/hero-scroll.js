function initHeroScroll() {
    if (typeof gsap === 'undefined') {
        console.warn("GSAP not found.");
        return;
    }

    const textCol = document.querySelector('.text-column');
    const panels = gsap.utils.toArray('.scroll-panel');
    const partnerLogos = document.querySelector('.panel-4-partners');
    const panelControls = gsap.utils.toArray('.hero-panel-button');
    const panelTransitionDuration = 0.9;
    const mobileViewport = window.matchMedia('(max-width: 768px)');
    const swipeSurface = document.querySelector('.hero-scroll-container');
    let activePanel = 0;
    let transitionId = 0;
    let touchStart = null;

    if (panels.length === 0) return;

    gsap.set(textCol, { opacity: 1, pointerEvents: 'auto' });
    gsap.set(panels, { xPercent: 100, autoAlpha: 0, zIndex: 0 });
    gsap.set(panels[0], { xPercent: 0, autoAlpha: 1, zIndex: 2 });

    function showPanel(panelIndex) {
        if (panelIndex === activePanel) {
            return;
        }

        const currentTransitionId = ++transitionId;
        const previousPanel = activePanel;
        activePanel = panelIndex;

        gsap.killTweensOf(panels);
        gsap.set(panels, { autoAlpha: 0, zIndex: 0 });
        gsap.set(panels[previousPanel], { autoAlpha: 1, zIndex: 1 });
        gsap.set(panels[activePanel], { xPercent: 100, autoAlpha: 1, zIndex: 2 });
        gsap.to(panels[previousPanel], {
            xPercent: -100,
            duration: panelTransitionDuration,
            ease: 'power2.inOut'
        });
        gsap.to(panels[activePanel], {
            xPercent: 0,
            duration: panelTransitionDuration,
            ease: 'power2.inOut',
            onComplete: () => {
                if (currentTransitionId !== transitionId) return;
                gsap.set(panels[previousPanel], { xPercent: 100, autoAlpha: 0, zIndex: 0 });
            }
        });

        if (partnerLogos) {
            gsap.to(partnerLogos, {
                opacity: activePanel === panels.length - 1 ? 1 : 0,
                duration: 0.4
            });
        }
    }

    panelControls.forEach((control) => {
        control.addEventListener('click', () => {
            const direction = control.dataset.direction === 'previous' ? -1 : 1;
            const nextPanel = (activePanel + direction + panels.length) % panels.length;
            showPanel(nextPanel);
        });
    });

    if (swipeSurface) {
        swipeSurface.addEventListener('pointerdown', (event) => {
            if (!mobileViewport.matches || event.pointerType !== 'touch' ||
                event.target.closest('a, button, input, textarea, select')) {
                touchStart = null;
                return;
            }

            touchStart = { x: event.clientX, y: event.clientY, pointerId: event.pointerId };
        });

        window.addEventListener('pointerup', (event) => {
            if (!touchStart || event.pointerType !== 'touch' || event.pointerId !== touchStart.pointerId) return;

            const deltaX = event.clientX - touchStart.x;
            const deltaY = event.clientY - touchStart.y;
            touchStart = null;

            if (Math.abs(deltaX) < 50 || Math.abs(deltaX) < Math.abs(deltaY) * 1.25) return;

            event.preventDefault();
            const direction = deltaX < 0 ? 1 : -1;
            const nextPanel = (activePanel + direction + panels.length) % panels.length;
            showPanel(nextPanel);
        }, { passive: false });

        window.addEventListener('pointercancel', () => {
            touchStart = null;
        });
    }
}

function initHeroCtaSwap() {
    const ctaAreas = document.querySelectorAll('.hero-scroll-container .scroll-panel .cta-links-area');

    ctaAreas.forEach((ctaArea) => {
        ctaArea.querySelectorAll('.btn-solid, .btn-outline').forEach((button) => {
            button.addEventListener('pointerenter', (event) => {
                if (event.pointerType !== 'mouse') return;
                ctaArea.classList.toggle('is-color-swapped');
            });
        });

        ctaArea.addEventListener('pointerleave', (event) => {
            if (event.pointerType !== 'mouse') return;
            ctaArea.classList.remove('is-color-swapped');
        });
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        initHeroScroll();
        initHeroCtaSwap();
    });
} else {
    initHeroScroll();
    initHeroCtaSwap();
}
