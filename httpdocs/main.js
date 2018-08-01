function showFunction() 
{
    var guests = document.getElementById("guestsfield");
    if (guests.style.display === "none") 
    {
        guests.style.display = "block";
    } else 
    {
        guests.style.display = "none";
    }
    var guestsText = document.getElementById("addguests");
    if (guestsText.value === "Add Guests") 
    {
        guestsText.value = "Remove Guests";
    } else 
    {
        guestsText.value = "Add Guests";
    }
}

function createCheckboxes()
{ 
// Number of inputs to create
            var number = 4;
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
            var submitcontainer = document.getElementById("submitcontainer");
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                // Append a node with a random text
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "checkbox";
                input.name = "member" + i;
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
                   var submit = document.createElement("input");
           
            }
 submit.type="submit"
            submit.value = "Sign Out";
            submit.id ="checkout_button";
            submit.className ="bttn bttn-default formbutton"
            submitcontainer.appendChild(submit);
 }
