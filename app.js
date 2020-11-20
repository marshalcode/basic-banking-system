window.onload = function() {
    const params = new URLSearchParams(window.location.search);
    if(params.has('name')){
        var name = params.get('name');
    }

    var select = document.querySelector('select');

    select.value = name;

}
