const popup1Btn = document.getElementById("chat");
const popup2Btn = document.getElementById("popup2");
const popup1 = document.getElementById("chatting");
const popup2 = document.getElementById("pop-up");
const closeBtn1 = document.getElementById("closeBtn");
const closeBtn2 = document.getElementById("closeBtn2");

function openPopup(popup1, popup2){
    popup1.style.display = "block";
    popup2.style.display = "block";
}



function closePopup(popup1){
    popup1.style.display = "none";
}



popup1Btn.addEventListener("click", () => openPopup(chatting));
popup2Btn.addEventListener("click", () => openPopup(pop-up));
closeBtn1.addEventListener("click", () => closePopup(chatting));
closeBtn2.addEventListener("click", () => closePopup(book));

function toggleForm(){
    var popupForm = document.getElementById("pop-up");
    if(popupForm.style.display === "none" || popupForm.style.display ===""){
        popupForm.style.display = "block";
    }
    else{
        popupForm.style.display = "none";
    }
}