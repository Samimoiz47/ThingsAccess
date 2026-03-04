import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initScrollReveal(lenis) {
  // Set up ScrollTrigger proxy for Lenis
  ScrollTrigger.scrollerProxy(document.body, {
    scrollTop(value) {
      return arguments.length ? lenis.scrollTo(value, {immediate: true}) : lenis.animatedScroll;
    },
    getBoundingClientRect() {
      return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
    }
  });

  ScrollTrigger.addEventListener("refresh", () => lenis.resize());
  const revealElements = document.querySelectorAll('.scroll-reveal');

  revealElements.forEach((container) => {
    const textElement = container.querySelector('.scroll-reveal-text');
    if (!textElement) return;

    // Get configuration from data attributes or use defaults
    const baseOpacity = parseFloat(container.dataset.baseOpacity) || 0.1;
    const enableBlur = container.dataset.enableBlur !== 'false'; // default true
    const baseRotation = parseFloat(container.dataset.baseRotation) || 3;
    const blurStrength = parseFloat(container.dataset.blurStrength) || 4;

    const text = textElement.textContent;
    const words = text.split(/(\s+)/).map((word, index) => {
      if (word.match(/^\s+$/)) return word;
      return `<span class="word" key="${index}">${word}</span>`;
    }).join('');

    textElement.innerHTML = words;

    const el = container;
    const scroller = lenis;

    gsap.fromTo(
      el,
      { transformOrigin: '0% 50%', rotate: baseRotation },
      {
        ease: 'none',
        rotate: 0,
        scrollTrigger: {
          trigger: el,
          start: 'top bottom',
          end: 'bottom bottom',
          scrub: true
        }
      }
    );

    const wordElements = el.querySelectorAll('.word');

    gsap.fromTo(
      wordElements,
      { opacity: baseOpacity },
      {
        ease: 'none',
        opacity: 1,
        stagger: 0.05,
        scrollTrigger: {
          trigger: el,
          start: 'top bottom-=20%',
          end: 'bottom bottom',
          scrub: true
        }
      }
    );

    if (enableBlur) {
      gsap.fromTo(
        wordElements,
        { filter: `blur(${blurStrength}px)` },
        {
          ease: 'none',
          filter: 'blur(0px)',
          stagger: 0.05,
          scrollTrigger: {
            trigger: el,
            start: 'top bottom-=20%',
            end: 'bottom bottom',
            scrub: true
          }
        }
      );
    }
  });
}
