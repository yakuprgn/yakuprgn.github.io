const button = document.getElementById("button");

var counter = 0;
var timeout = 700;
var curLvl = 1;

var change = () => {
    button.style.marginTop = Math.random() * 300 + "px";
    button.style.marginLeft = Math.random() * 300 + "px";
}

button.addEventListener("click",() => {
    counter++;
    
    if(counter == 3) {
        alert("You passed this level successfully!!");
        curLvl = curLvl + 1;
        timeout = timeout - 100;
        counter = 0;

        if(curLvl == 6) {
            alert("You are the winner!! ");
            counter = 0;
            curLvl = 1;
            timeout = 500;
        }
        else {
            setTimeout(change(),timeout);
        }
    }
})

button.addEventListener("mouseover",change);