const dvd = document.getElementById('DVD')
const book = document.getElementById('Book')
const furniture = document.getElementById('Furniture')


function productChange(choice) {
    choice.value === 'dvd' ? dvd.style.display = 'block' : dvd.style.display = 'none';

    choice.value === 'book' ? book.style.display = 'block' : book.style.display = 'none';

    choice.value === 'furniture' ? furniture.style.display = 'block' : furniture.style.display = 'none';
}



