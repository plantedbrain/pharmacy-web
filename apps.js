const t1 = gsap.timeline({ defaults: { ease: "power1.out" } });

t1.to(".text", {y: "0%", duration: 1, stagger: 0.25});
