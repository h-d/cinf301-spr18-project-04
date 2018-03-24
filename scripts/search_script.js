/*Hudson DeVoe
  Script for putting text field data into a search cookie on button click
 */

window.onload = function() {

    const button = document.getElementById('button');
    const field = document.getElementById('srch-term');

    
    button.addEventListener('click', (event) => {
        document.cookie = "Search="+field.value;
    })
}
