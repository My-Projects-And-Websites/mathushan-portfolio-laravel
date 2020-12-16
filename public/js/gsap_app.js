const tl = gsap.timeline({ defaults: { ease: "power1.out" }});

tl.to(".text-header", { y: "0%", duration: 1, stagger: 0.25 });
tl.to(".slider-go-top", { y: "-100%", duration: 1.5, delay: 0.5 });
tl.to(".wel", { y: "-100%", duration: 1}, "-=1.1");
tl.fromTo(".intro-text", { opacity: 0 }, { opacity : 1, duration: 1 }, "-=0.5");