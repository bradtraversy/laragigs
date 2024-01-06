var modal = document.getElementById('chatting');
var closeBtn = document.getElementById('closeBtn');
var chat = document.getElementById('chat');


// Open the modal when a button is clicked, for example
document.getElementById('chat').addEventListener('click', function() {
    modal.style.display = 'block';
    chat.style.display = 'none';
});

// Close the modal when the close button or outside the modal is clicked
document.getElementById('closeBtn').addEventListener('click', function() {
    modal.style.display = 'none';
    chat.style.display = 'block';
});

window.addEventListener('click', function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
        chat.style.display = 'block';
    }
});


function openForm(){
    var popupForm = document.getElementById("pop-up");
    popupForm.style.display = "block"; 

}

function closeForm(){
    var popupForm = document.getElementById("pop-up"); 
    popupForm.style.display = "none";

}

function goForm(){
    var goForm = document.getElementById("go1");
    goForm.style.display = "block"; 

}

function exitForm(){
    var goForm = document.getElementById("go1"); 
   goForm.style.display = "none";

}

function runForm(){
    var myForm = document.getElementById("go2");
    myForm.style.display = "block"; 

}

function noForm(){
    var myForm = document.getElementById("go2"); 
   myForm.style.display = "none";

}

function appendInput(){
    //Get user input
    var userInput = document.getElementById("user_input").value;
    //Get ouput div
    var outputDiv = document.getElementById("user_input_display");
    //Create a new paragraph
    var paragraph = document.createElement("p");

    paragraph.textContent = userInput;


   //Append new element with div
    
      //Apply style
      paragraph.style.fontSize = "16px";
      paragraph.style.color = "white";
      paragraph.style.fontWeight = "bold";

      outputDiv.appendChild(paragraph);

   //Clear user input
  
}
