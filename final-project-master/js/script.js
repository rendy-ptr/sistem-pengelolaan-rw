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

// view  profile button
const prof = document.querySelector('.profile');
const profile_1 = document.querySelector('.sign');
const profile_2 = document.querySelector('.reg');
// const profile_2 = prof.getElementsByTagName('a')[1];

profile_1.addEventListener('click', () =>  {
  alert('Harap Login Terlebih Dahulu');
})
profile_2.addEventListener('click', () =>  {
  alert('Harap Login Terlebih Dahulu');
})

// Fitur Iuran Button
const iuran = document.querySelectorAll('.icon-iuran')

iuran[0].addEventListener('click', () => {
  alert('Harap Login Terlebih Dahulu')
})
iuran[1].addEventListener('click', () => {
  alert('Harap Login Terlebih Dahulu')
})
iuran[2].addEventListener('click', () => {
  alert('Harap Login Terlebih Dahulu')
})

// document.querySelector(".sign a").addEventListener('click', function(event){
//   event.preventDefault()
//   alert("Harap Login Terlebih Dahulu");
// })
// profile_2.addEventListener('click', () =>  {
//   alert('Harap Login Terlebih Dahulu');
// })


// function search() {
//   let input = document.getElementById("input").value;

//   if (input !== "") {
//     let regExp = new RegExp(input, "gi");
//     a.innerHTML = (a.textContent).replace(regExp, "<mark>$&</mark>");
//   }
// }

