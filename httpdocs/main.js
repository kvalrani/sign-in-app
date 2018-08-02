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




