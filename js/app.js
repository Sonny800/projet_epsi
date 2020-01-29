search = (query) => {
    const btn = document.querySelector(".btn");
    const input = document.querySelector(".form-control");
    query = input.value;
    

const myRequest = new XMLHttpRequest();
myRequest.open('GET', '../api/search.php');
myRequest.setRequestHeader("Content-Type", "application/json");
myRequest.send(null);
myRequest.onreadystatechange = function () { 
    if (myRequest.readyState === 4) {
    result =  JSON.parse(myRequest.response);
console.log(result.result[1]);

      
    }
}
}

