let body = document.body;

let profile = document.querySelector('.header .wrap-header .profile');

document.querySelector('#user-btn').onclick = () => {
  profile.classList.toggle('active');
  search_form.classList.remove('active');
}

let search_form = document.querySelector('.header .wrap-header .search-form');

document.querySelector('#search-btn').onclick = () => {
  search_form.classList.toggle('active');
  profile.classList.remove('active');
}

let side_bar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').addEventListener('click', () => {
  side_bar.classList.toggle('active');
  body.classList.toggle('active');
})


document.querySelector('.side-bar .close-side-bar').onclick = () => {
  side_bar.classList.remove('active');
  body.classList.remove('active');
}

window.onscroll = () => {
  profile.classList.remove('active');
  search_form.classList.remove('active');

  if(window.innerWidth < 1200){
    side_bar.classList.remove('active');
    body.classList.remove('active');
  }

}