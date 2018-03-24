window.onload = function() {

    const button = document.getElementById('button');
    const field = document.getElementById('srch-term');

    
    button.addEventListener('click', (event) => {
        document.cookie = "Search="+field.value;
    })
}
