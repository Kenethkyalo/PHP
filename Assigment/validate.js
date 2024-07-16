function validateForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let feedback = document.getElementById("feedback").value;
    let rating = document.getElementById("rating").value;

    if (name == "" || email == "" || feedback == "" || rating == "") {
        alert("All fields must be filled out");
        return false;
    }

    let ratingValue = parseInt(rating);
    if (ratingValue < 1 || ratingValue > 5) {
        alert("Rating must be between 1 and 5");
        return false;
    }

    return true;
}
