const header = document.querySelector('header');
const mobileNav = document.querySelector('.mobile_nav');
const mobileNavBody = document.querySelector('.mobile_nav_body');
const burgerBtn = document.querySelector('.hamburger');

/*function toggleMenu() {
  const headerHeight = header.getBoundingClientRect().height.toFixed(1);
  const mobileNavHeight = mobileNav.scrollHeight.toFixed(1);

  mobileNav.style.borderTop = '3px solid #F29100';
  mobileNav.classList.toggle('opened');

  const isOpened = mobileNav.classList.contains('opened');

  mobileNav.style.maxHeight = isOpened ? `${mobileNavHeight}px` : '0px';
  mobileNav.style.transform = isOpened
    ? `translate(-50%, ${headerHeight}px)`
    : '0px';
  mobileNavBody.style.transform = isOpened
    ? 'translateY(0)'
    : 'translateY(-25%)';

  if (!isOpened) {
    setTimeout(() => {
      mobileNav.style.borderTop = null;
    }, 500);
  }
}

burgerBtn.addEventListener('click', toggleMenu);*/

const contactBtn = document.querySelector('.contact_page .btn');

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

let isContactPage = document.querySelector('.contact_page');

if (isContactPage) {
  contactBtn.addEventListener('click', smoothScrollToForm);
}
