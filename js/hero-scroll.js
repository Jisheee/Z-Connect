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
    let activePanel = 0;
    let transitionId = 0;

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
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHeroScroll);
} else {
    initHeroScroll();
}
