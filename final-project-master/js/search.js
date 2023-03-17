const cards = document.querySelector('.box')

function search() {
    let search_query = document.querySelector('#searchbox')

    for (let i = 0; i < cards.length; i++) {
        if(cards[i].textContent.toLowerCase().includes(search_query.toLowerCase())) {
            
        }
    }
}