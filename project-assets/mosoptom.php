<style>
    body {
        background:
            radial-gradient(circle at 12% 16%, rgba(255, 163, 81, .16), transparent 30%),
            radial-gradient(circle at 88% 34%, rgba(90, 124, 255, .12), transparent 28%),
            linear-gradient(180deg, #fff 0%, #f7f8fb 100%);
    }

    main .container > section:first-child {
        position: relative;
        padding: 72px 0 44px;
    }

    main h1 {
        margin: 0 0 26px;
        font-size: clamp(42px, 6vw, 82px);
        line-height: .96;
        letter-spacing: -3px;
        color: #101820;
    }

    main .flex.wrap.jus {
        display: grid;
        grid-template-columns: minmax(0, .95fr) minmax(300px, 1.05fr);
        gap: 34px;
        align-items: start;
    }

    main .descr,
    main .rating,
    main .about,
    main .border {
        width: auto !important;
        padding: 0 !important;
    }
    
    .project-reveal > .responsive {
    display: none !important;
    }

    main .descr {
        padding: 30px !important;
        border-radius: 34px;
        background: rgba(255, 255, 255, .82);
        border: 1px solid rgba(16, 24, 32, .08);
        box-shadow: 0 28px 80px rgba(16, 24, 32, .1);
        backdrop-filter: blur(18px);
        white-space: pre-line;
    }

    main .descr p,
    main .about p,
    main li {
        color: rgba(16, 24, 32, .76);
        font-size: 18px;
        line-height: 1.72;
    }

    main .descr p:first-child {
        margin-top: 0;
    }

    main .descr p:last-child {
        margin-bottom: 0;
    }

    main .rating {
        position: sticky;
        top: 110px;
        padding: 24px !important;
        border-radius: 34px;
        background: #101820;
        color: #fff;
        box-shadow: 0 32px 90px rgba(16, 24, 32, .18);
    }

    main .rating:before {
        content: none;
        display: none;
    }
    
    main .project-gallery {
    width: 100%;
}

main .project-gallery-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 14px;
    margin-bottom: 16px;
}

main .project-gallery-title {
    margin: 0;
    color: #fff;
    font-size: 22px;
}

main .project-gallery-count {
    padding: 8px 12px;
    border-radius: 999px;
    background: rgba(255,255,255,.1);
    color: rgba(255,255,255,.78);
    font-size: 13px;
}

main .project-slider {
    position: relative;
    overflow: hidden;
    border-radius: 28px;
    background: rgba(255,255,255,.06);
}

main .project-slider-track {
    display: flex;
    transition: transform .45s ease;
}

main .project-slide {
    min-width: 100%;
    padding: 12px;
    cursor: zoom-in;
}

main .project-slide img {
    width: 100%;
    max-height: 620px;
    object-fit: contain;
    border-radius: 22px;
    background: #050b12;
}

main .project-slider-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 46px;
    height: 46px;
    border: 0;
    border-radius: 50%;
    background: rgba(255,255,255,.92);
    color: #101820;
    font-size: 26px;
    cursor: pointer;
    z-index: 3;
}

main .project-slider-prev { left: 18px; }
main .project-slider-next { right: 18px; }

main .project-thumbs {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 10px;
    margin-top: 12px;
}

main .project-thumb {
    height: 76px;
    border: 2px solid transparent;
    border-radius: 16px;
    overflow: hidden;
    cursor: pointer;
    background: rgba(255,255,255,.08);
}

main .project-thumb.active {
    border-color: #FFA351;
}

main .project-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.project-lightbox {
    position: fixed;
    inset: 0;
    z-index: 10000;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    background: rgba(5,9,14,.92);
    backdrop-filter: blur(18px);
    opacity: 0;
    visibility: hidden;
    transition: .25s ease;
}

.project-lightbox.open {
    opacity: 1;
    visibility: visible;
}

.project-lightbox img {
    max-width: 94vw;
    max-height: 86vh;
    border-radius: 26px;
}

.project-lightbox-close,
.project-lightbox-prev,
.project-lightbox-next {
    position: absolute;
    border: 0;
    border-radius: 999px;
    background: #fff;
    color: #101820;
    cursor: pointer;
}

.project-lightbox-close {
    top: 22px;
    right: 22px;
    width: 48px;
    height: 48px;
    font-size: 30px;
}

.project-lightbox-prev,
.project-lightbox-next {
    top: 50%;
    width: 52px;
    height: 52px;
    font-size: 32px;
}

.project-lightbox-prev { left: 22px; }
.project-lightbox-next { right: 22px; }

body.project-gallery-open {
    overflow: hidden;
}

    main a.btn,
    main .btn {
        min-height: 54px;
        border-radius: 999px;
        background: #101820;
        color: #fff;
        box-shadow: 0 18px 40px rgba(16, 24, 32, .14);
    }

    main a.btn:hover,
    main .btn:hover {
        background: #FFA351;
        color: #101820;
        transform: translateY(-3px);
        box-shadow: 0 24px 54px rgba(16, 24, 32, .2);
    }

    main .project-wow-cta {
        margin-top: 42px;
        padding: 36px;
        border-radius: 36px;
        background: #101820;
        color: #fff;
        display: grid;
        grid-template-columns: minmax(0, 1fr) auto;
        gap: 24px;
        align-items: center;
        box-shadow: 0 32px 90px rgba(16, 24, 32, .18);
    }

    main .project-wow-cta h2 {
        margin: 0 0 10px;
        font-size: clamp(30px, 4vw, 54px);
        line-height: 1;
        letter-spacing: -1.4px;
    }

    main .project-wow-cta p {
        margin: 0;
        color: rgba(255, 255, 255, .72);
        line-height: 1.6;
    }

    main .project-wow-cta .btn {
        background: #FFA351;
        color: #101820;
        white-space: nowrap;
        border: 0;
        cursor: pointer;
        font-family: 'Gilroy-Bold';
    }

    main .project-wow-cta .js-contact-btn {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translateY(10px);
        transition: opacity .35s ease, transform .35s ease, visibility .35s ease;
    }

    main .project-wow-cta .js-contact-btn.is-visible {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateY(0);
    }

    .project-reveal {
        opacity: 0;
        transform: translateY(24px);
        transition: opacity .7s ease, transform .7s ease;
    }

    .project-reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    @media (max-width: 980px) {
        main .flex.wrap.jus,
        main .project-wow-cta {
            grid-template-columns: 1fr;
        }

        main .rating {
            position: relative;
            top: auto;
        }
    }

    @media (max-width: 620px) {
        main .container > section:first-child {
            padding-top: 42px;
        }

        main h1 {
            letter-spacing: -1.5px;
        }

        main .descr {
            padding: 22px !important;
            border-radius: 28px;
        }

        main .rating {
            padding: 18px !important;
            border-radius: 28px;
        }

        main .project-wow-cta {
            padding: 26px;
        }

        main .project-wow-cta .btn {
            width: 100%;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        window.__PROJECT_GALLERY_IMAGES__ = ["/assets/img/project/mosoptom.ru.webp"];

        var section = document.querySelector('main .container > section:first-child');
        if (section) {
            section.classList.add('project-reveal');
        }

        var container = document.querySelector('main .container');
        if (container && !document.querySelector('.project-wow-cta')) {
            var cta = document.createElement('section');
            cta.className = 'project-wow-cta project-reveal';
            cta.innerHTML = '<div><h2>Хотите проект такого же уровня?</h2><p>Опишите задачу — подскажу, как лучше реализовать, что можно улучшить и как сделать проект заметнее конкурентов.</p></div><div class="js-contact-slot"></div>';
            container.appendChild(cta);

            var contactSlot = cta.querySelector('.js-contact-slot');
            if (contactSlot) {
                setTimeout(function () {
                    var contactBtn = document.createElement('button');
                    contactBtn.type = 'button';
                    contactBtn.className = 'btn js-contact-btn';
                    contactBtn.textContent = String.fromCharCode(1054, 1073, 1089, 1091, 1076, 1080, 1090, 1100, 32, 1087, 1088, 1086, 1077, 1082, 1090);
                    contactSlot.appendChild(contactBtn);

                    requestAnimationFrame(function () {
                        contactBtn.classList.add('is-visible');
                    });

                    contactBtn.addEventListener('click', function () {
                        var scheme = String.fromCharCode(104, 116, 116, 112, 115, 58, 47, 47);
                        var domain = [String.fromCharCode(116), String.fromCharCode(46), String.fromCharCode(109), String.fromCharCode(101), String.fromCharCode(47)].join('');
                        var user = [String.fromCharCode(118, 105, 116, 97, 108), String.fromCharCode(100, 51)].join('');
                        var queryKey = String.fromCharCode(116, 101, 120, 116);
                        var message = encodeURIComponent(String.fromCharCode(1055, 1088, 1080, 1074, 1077, 1090, 44, 32, 1093, 1086, 1095, 1091, 32, 1086, 1073, 1089, 1091, 1076, 1080, 1090, 1100, 32, 1087, 1088, 1086, 1077, 1082, 1090));
                        window.open(scheme + domain + user + '?' + queryKey + '=' + message, '_blank', 'noopener');
                    });
                }, 2000);
            }
        }

        var galleryImages = window.__PROJECT_GALLERY_IMAGES__ || [];
        var rating = document.querySelector('main .rating');

        if (rating && galleryImages.length) {
            var current = 0;

            var galleryHtml = "<div class=\"project-gallery\"><div class=\"project-gallery-head\"><h2 class=\"project-gallery-title\">Скриншоты проекта</h2><span class=\"project-gallery-count\">1 / 1</span></div><div class=\"project-slider\"><div class=\"project-slider-track\"><div class=\"project-slide\" data-index=\"0\"><img src=\"/assets/img/project/mosoptom.ru.webp\" alt=\"Скриншот проекта 1\"></div></div></div></div>";
            if (galleryHtml) {
                rating.innerHTML = galleryHtml;
            }

            var track = rating.querySelector('.project-slider-track');
            var count = rating.querySelector('.project-gallery-count');
            var thumbs = rating.querySelectorAll('.project-thumb');

            if (!track || !count) return;

            function setSlide(index) {
                current = (index + galleryImages.length) % galleryImages.length;
                track.style.transform = 'translateX(' + (-current * 100) + '%)';
                count.textContent = (current + 1) + ' / ' + galleryImages.length;

                thumbs.forEach(function(thumb) {
                    thumb.classList.toggle('active', Number(thumb.dataset.index) === current);
                });
            }

            setSlide(0);

            var prev = rating.querySelector('.project-slider-prev');
            var next = rating.querySelector('.project-slider-next');

            if (prev) {
                prev.onclick = function() {
                    setSlide(current - 1);
                };
            }

            if (next) {
                next.onclick = function() {
                    setSlide(current + 1);
                };
            }

            thumbs.forEach(function(thumb) {
                thumb.onclick = function() {
                    setSlide(Number(thumb.dataset.index));
                };
            });

            var lightbox = document.createElement('div');
            lightbox.className = 'project-lightbox';
            lightbox.innerHTML =
                '<button class="project-lightbox-close" type="button">×</button>' +
                '<button class="project-lightbox-prev" type="button">‹</button>' +
                '<img src="" alt="Скриншот проекта">' +
                '<button class="project-lightbox-next" type="button">›</button>';

            document.body.appendChild(lightbox);

            var lightboxImg = lightbox.querySelector('img');

            function openLightbox(index) {
                setSlide(index);
                lightboxImg.src = galleryImages[current];
                lightbox.classList.add('open');
                document.body.classList.add('project-gallery-open');
            }

            function closeLightbox() {
                lightbox.classList.remove('open');
                document.body.classList.remove('project-gallery-open');
            }

            function moveLightbox(step) {
                setSlide(current + step);
                lightboxImg.src = galleryImages[current];
            }

            rating.querySelectorAll('.project-slide').forEach(function(slide) {
                slide.onclick = function() {
                    openLightbox(Number(slide.dataset.index));
                };
            });

            lightbox.querySelector('.project-lightbox-close').onclick = closeLightbox;
            lightbox.querySelector('.project-lightbox-prev').onclick = function() { moveLightbox(-1); };
            lightbox.querySelector('.project-lightbox-next').onclick = function() { moveLightbox(1); };

            lightbox.onclick = function(e) {
                if (e.target === lightbox) closeLightbox();
            };

            document.addEventListener('keydown', function(e) {
                if (!lightbox.classList.contains('open')) return;
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') moveLightbox(-1);
                if (e.key === 'ArrowRight') moveLightbox(1);
            });
        }

        var items = document.querySelectorAll('.project-reveal');

        function showVisible() {
            items.forEach(function (item) {
                var rect = item.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    item.classList.add('visible');
                }
            });
        }

        showVisible();

        if (!('IntersectionObserver' in window)) {
            window.addEventListener('scroll', showVisible);
            return;
        }

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.05, rootMargin: '0px 0px -40px 0px' });

        items.forEach(function (item) {
            if (!item.classList.contains('visible')) {
                observer.observe(item);
            }
        });

        window.addEventListener('load', showVisible);
    });
</script>
<?php $title = 'MosOptom разработка интернет магазина на Laravel'; $meta_description = 'MosOptom разработка интернет магазина на Laravel'; include '../header.php'; ?><div class="container">
		<section>
			<h1>Название работы - MosOptom разработка на Laravel</h1>
			<div class="content">
				MosOptom разработка интернет магазина на Laravel
				
				<p><a href="https://mosoptom.ru" target="_blank" rel="nofollow">Посмотреть  приложение - Mosoptom.ru</a></p>
			</div>
			<img style="margin-top: 30px" class="responsive" src="/assets/img/project/mosoptom.ru.webp" alt="MosOptom разработка на Laravel" />
		<div class="rating"><div class="project-gallery"><div class="project-gallery-head"><h2 class="project-gallery-title">Скриншоты проекта</h2><span class="project-gallery-count">1 / 1</span></div><div class="project-slider"><div class="project-slider-track"><div class="project-slide" data-index="0"><img src="/assets/img/project/mosoptom.ru.webp" alt="Скриншот проекта 1"></div></div></div></div></div></section>
	</div><?php include '../footer.php'; ?>