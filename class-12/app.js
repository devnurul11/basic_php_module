function changeData(){
    //create new request by xml file
    const xhr = new XMLHttpRequest();
    //response file 
    xhr.onload = function(){
        const container = document.getElementById("demo")
        container.innerHTML = xhr.responseText;
    };
    xhr.open('GET', 'demo/text.text');
}