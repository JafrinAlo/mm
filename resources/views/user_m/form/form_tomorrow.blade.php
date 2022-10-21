<form id="form_tomorrow" >
    <label for="fname">First name11111:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname">
  </form>

  <script> 
    function show_form_tomorrow() {
        //document.getElementById("form_tomorrow");
        var x = document.getElementById('form_tomorrow');
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>