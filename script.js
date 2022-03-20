// let none = document.querySelector('.none');
let dvd = document.getElementById('DVD')
let book = document.getElementById('Book')
let furniture = document.getElementById('Furniture')


function productChange(choice) {
    if(choice.value === 'dvd') {
        dvd.style.display = 'block';
    } else {
        dvd.style.display = 'none';
    }

    if(choice.value === 'book') {
        book.style.display = 'block';
    } else {
        book.style.display = 'none';
    }

    if (choice.value === 'furniture') {
        furniture.style.display = 'block';
    } else {
        furniture.style.display = 'none';
    }

}



