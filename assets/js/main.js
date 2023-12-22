document.addEventListener('DOMContentLoaded', function () {
  const header = document.querySelector('header');
  const mobileNav = document.querySelector('.mobile_nav');
  const mobileNavBody = document.querySelector('.mobile_nav_body');
  const burgerBtn = document.querySelector('.hamburger');

  const headerHeight = header.getBoundingClientRect().height.toFixed(0);

  let scrolled = false;
  let isOpened = false;


  window.onscroll = () => {
    scrolled = !!(window.scrollY || document.documentElement.scrollTop > headerHeight);
    if (scrolled) {
      header.style.backgroundColor = 'white';
    } else {
      if (!isOpened) {
        header.style.backgroundColor = '#EEEEFB';
      }
    }
  };

  burgerBtn.addEventListener('click', () => {
    const headerHeight = header.getBoundingClientRect().height.toFixed(1);
    const mobileNavHeight = mobileNav.scrollHeight.toFixed(1);

    mobileNav.classList.toggle('opened');

    isOpened = !isOpened;

    header.style.backgroundColor = 'white';


    if (!scrolled) {
      header.style.backgroundColor = isOpened ? 'white' : '#EEEEFB';
    }

    mobileNav.style.maxHeight = isOpened ? `${mobileNavHeight}px` : '0px';
    mobileNav.style.transform = isOpened
        ? `translate(-50%, ${headerHeight}px)`
        : '0px';
  });


  function smoothScrollToForm(e) {
    e.preventDefault();
    const scrollTarget = document.querySelector('#form');

    const elementPosition = scrollTarget.getBoundingClientRect().top;

    const headerHeight = header.getBoundingClientRect().height.toFixed(1);

    const offsetPosition = elementPosition - headerHeight;

    window.scrollBy({
      top: offsetPosition,
      behavior: 'smooth',
    });
  }


  (function accordion() {
    if (current_page === 'home_page') {

      const elements = document.querySelectorAll('.accordion .element');

      function expand(el, body, btn) {
        body.style.display = 'block';
        body.style.maxHeight = body.scrollHeight + 'px';
        body.style.marginTop = '2rem';

        el.classList.add('expanded');

        body.addEventListener('transitionend', () => {
          btn.style.transform = 'scaleY(-1)';
        }, {
          once: true,
        });
      }

      function collapse(el, body, btn) {
        body.style.maxHeight = null;
        body.style.marginTop = '0';

        el.classList.remove('expanded');

        body.addEventListener('transitionend', () => {
          body.style.display = 'none';
          btn.style.transform = 'scaleY(1)';
        }, {
          once: true, // This ensures the event listener fires only once
        });
      }

      (function expandFirst() {
        const topEl = elements[0];

        const body = topEl.querySelector('.accordion_content');
        const btn = topEl.querySelector('.expand_btn');
        expand(topEl, body, btn);
      })();

      elements.forEach((element, clickedIndex) => {

        const body = element.querySelector('.accordion_content');
        const btn = element.querySelector('.expand_btn');

        element.addEventListener('click', () => {
          console.log(`clickedIndex = ${clickedIndex}`);
          if (body.style.display === 'none' || body.style.display === '') {
            expand(element, body, btn);
            elements.forEach((element, i) => {
              if (clickedIndex !== i) {
                const body = element.querySelector('.accordion_content');
                const btn = element.querySelector('.expand_btn');
                if (body.style.display === 'block') {
                  collapse(element, body, btn);
                }
              }
            });
          } else if (body.style.display === 'block') {
            collapse(element, body, btn);
          }
        });
      });
    }
  })();
});