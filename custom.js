const button = document.querySelector('.about-button');
const text = document.querySelector('.about-section__content__text');
var count = 0;
button.addEventListener('click', function(e) {
    e.preventDefault();
    if(count >= 1){
        count = 0;
        text.style.display = '-webkit-box';
        button.innerHTML = 'Read More';
        return;
    } else {
        text.style.display = 'block';
        button.innerHTML = 'Read Less';
    }
    count++;
});