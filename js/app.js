search = (query) => {
    const btn = document.querySelector(".btn");
    const input = document.querySelector(".form-control");
    query = input.value;

    let myRequest = new XMLHttpRequest();
    myRequest.open('GET', '../api/search.php');
    myRequest.responseType = "json";
    myRequest.send(null);
    myRequest.onreadystatechange = function () {
        if (myRequest.readyState === 4) {
            console.log(myRequest.response);
        }
    }
}