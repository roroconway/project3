<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("Must be a valid email");
        return false;
    }
}
</script>