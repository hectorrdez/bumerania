const category = document.querySelectorAll('.category');

category.forEach(value => {
    value.addEventListener('mouseover', () => {
        value.querySelector('.categoryContent').style.display = 'block';
    })
})