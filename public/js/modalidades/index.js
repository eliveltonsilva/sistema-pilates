function getSelector(value){
    return document.querySelector(value);
}

getSelector('#novo').addEventListener('click', function(){
    location.href = "insert.php";
});