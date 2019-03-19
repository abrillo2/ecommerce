//function used for validating form

var user_name = document.getElementById('user_name')

user_name.oninvalid = function(event) {
    event.target.setCustomValidity('Username should only contain lowercase letters. e.g. john');
}